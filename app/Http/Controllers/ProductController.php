<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Comment;
use App\Models\ContactMessage;
use App\Models\Like;
use App\Models\Location;
use App\Models\Product;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{

    public function index()
    {
        $productCount = Product::count();
        $commentCount = Comment::count();
        $categoryCount = Category::count();
        $products = Product::all();
        return view('products.index', compact('products', 'productCount', 'categoryCount', 'commentCount'));
    }

    public function displayProducts(Request $request)
    {


        $locations = Location::all();
        $allProducts = Product::all();
        $categories = Category::all();
        $search = $request->input('search');
        $category = $request->input('category');
        $user = auth()->user();

        $minPrice = $request->input('min_price');
        $maxPrice = $request->input('max_price');

        $products = Product::join('users', 'products.user_id', '=', 'users.id')
            ->join('locations', 'products.location_id', '=', 'locations.id')
            ->join('categories', 'products.category_id', '=', 'categories.id')
            ->select('products.*', 'users.name as username', 'locations.name as location_name', 'categories.name as category_name')
            ->when($search, function ($query) use ($search) {
                return $query->where('products.name', 'like', "%$search%")
                    ->orWhere('products.description', 'like', "%$search%")
                    ->orWhere('users.name', 'like', "%$search%");
            })
            ->when($category, function ($query) use ($category) {
                return $query->where('products.category_id', $category);
            })
            ->when($minPrice, function ($query) use ($minPrice) {
                return $query->where('products.prix', '>=', $minPrice);
            })
            ->when($maxPrice, function ($query) use ($maxPrice) {
                return $query->where('products.prix', '<=', $maxPrice);
            })
            ->orderBy('products.updated_at', 'desc')
            ->paginate(2);


        $contactMessages = [];
        foreach ($products as $product) {
            $allContactMessage = ContactMessage::where('product_id', $product->id)->get();
            $contactMessages[$product->id] = $allContactMessage;
        }


        return view('products.frontOffice.productFrontOffice', compact('categories', 'products', 'locations', 'allProducts', 'contactMessages'));
    }



    public function create()
    {
        $commentCount = Comment::count();
        $categoryCount = Category::count();
        $productCount = Product::count();


        $users = User::all();
        $locations = Location::all();
        $categories = Category::all();
        return view('products.create', compact('users', 'locations', 'categories', 'productCount', 'categoryCount', 'commentCount'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
            'prix' => 'required|numeric',
            'location_id' => 'required|exists:locations,id',
            'category_id' => 'required|exists:categories,id',


        ]);

        $file = $request->file('file');

        if ($file) {
            $path = $file->store('uploads', 'public');
        } else {
            $path = null;
        }

        Product::create([
            'user_id' => auth()->user()->id,
            'location_id' => $request->input('location_id'),
            'category_id' => $request->input('category_id'),
            'file' => $path,
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'prix' => $request->input('prix'),

        ]);

        return back()->with('success', 'Product added successfully.');
    }

    public function destroy($id)
    {
        $product = Product::find($id);

        if (!$product) {
            return redirect()->route('products.index')->with('error', 'Product not found.');
        }

        $product->delete();

        return back()->with('success', 'Product deleted successfully.');
    }

    public function edit($id)
    {
        $commentCount = Comment::count();
        $categoryCount = Category::count();
        $productCount = Product::count();

        $product = Product::findOrFail($id);
        $users = User::all();
        $locations = Location::all();
        $categories = Category::all();
        return view('products.edit', compact('product', 'users', 'locations', 'categories', 'productCount', 'categoryCount', 'commentCount'));
    }

    public function update(Request $request, $id)
    {

        $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',


        ]);

        $product = Product::findOrFail($id);
        $product->location_id = $request->input('location_id');
        $product->category_id = $request->input('category_id');
        $user = Auth::user();
        $product->user_id = $user->id;
        $product->name = $request->input('name');
        $product->description = $request->input('description');


        $file = $request->file('file');

        if ($file) {
            $path = $file->store('uploads', 'public');
            $product->file = $path;
        } else {
            $product->file = null;
        }

        $product->save();

        return back()->with('success', 'Product updated successfully.');
    }

    public function like(Product $product)
    {
        // Ensure the user is not the owner of the product
        if ($product->user_id === auth()->user()->id) {
            return redirect()->route('products.index')->with('error', 'You cannot like your own product.');
        }

        $user = auth()->user();

        // Check if the user has already liked the product
        $existingLike = $product->likes->where('user_id', $user->id)->first();

        if ($existingLike) {
            // User has already liked the product; delete the like
            $existingLike->delete();
            return back();
        } else {
            // User hasn't liked the product; create a new like
            $like = new Like();
            $like->product_id = $product->id;
            $like->user_id = $user->id;
            $like->save();


            return back();
        }
    }

    public function contactOwner(Request $request, $product_id)
    {
        $product = Product::findOrFail($product_id);
        $owner = $product->user;

        $request->validate([
            'message' => 'required|string',
        ]);

        // Create a new contact message
        ContactMessage::create([
            'sender_id' => auth()->user()->id,
            'receiver_id' => $owner->id,
            'product_id' => $product->id,
            'message' => $request->input('message'),
        ]);

        return back()->with('success', 'Your message has been sent to the owner.');
    }


    public function deleteMessage($product_id, $message_id)
    {
        $message = ContactMessage::find($message_id);

        if (!$message) {
            return back()->with('error', 'Message not found.');
        }

        if (auth()->user()->id === $message->sender_id) {
            $message->delete();
            return back()->with('success', 'Message deleted successfully.');
        } else {
            return back()->with('error', 'You are not authorized to delete this message.');
        }
    }
}
