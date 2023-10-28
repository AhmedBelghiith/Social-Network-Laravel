<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Membership;
use App\Models\Page;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    public function index()
    {
        $pageCount = Page::count();
        $commentCount = Comment::count();
        $categoryCount = Category::count();
        $productCount = Product::count();
        $pages = Page::all();
        return view('pages.index', compact('productCount', 'categoryCount', 'commentCount', 'pages', 'pageCount'));
    }
    public function displayPages(Request $request)
    {
        if (auth()->check()) {
            $user = auth()->user();
            $mypages = $user->pages;
            $pageCount = Page::count();
            $commentCount = Comment::count();
            $categoryCount = Category::count();
            $productCount = Product::count();

            $search = $request->input('search');

            $pages = Page::where('title', 'LIKE', '%' . $search . '%')
                ->orWhere('description', 'LIKE', '%' . $search . '%')
                ->paginate(3);

            return view('pages.frontOffice.pages', compact('productCount', 'categoryCount', 'commentCount', 'pages', 'pageCount', 'mypages'));
        } else {
            return back();
        }
    }

    function display($pageId)
    {
        if (auth()->check()) {
            $user = auth()->user();
            $mypages = $user->pages;
            $page = Page::findOrFail($pageId);
            $pagePosts = $page->posts()->orderBy('created_at', 'desc')->get();
            $pagePostsCount = $page->posts()->count();

            return view('pages.frontOffice.page', compact('page', 'pagePosts', 'pagePostsCount', 'mypages'));
        } else {
            return back();
        }
    }


    public function create()
    {
        $pageCount = Page::count();
        $categoryCount = Category::count();
        $productCount = Product::count();
        $commentCount = Comment::count();
        $users = User::all();
        return view('pages.create', compact('productCount', 'categoryCount', 'users', 'pageCount', 'commentCount'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',

        ]);

        $image = $request->file('image');

        if ($image) {
            $path = $request->file('image')->store('uploads', 'public');
        } else {
            $path = null;
        }
        $cover = $request->file('cover');

        if ($cover) {
            $path2 = $request->file('cover')->store('uploads', 'public');
        } else {
            $path2 = null;
        }

        Page::create([
            'user_id' => auth()->user()->id,
            'image' => $path,
            'cover' => $path2,
            'title' => $request->input('title'),
            'description' => $request->input('description'),
        ]);

        return back()->with('success', 'page added successfully.');
    }

    public function destroy($id)
    {
        $page = Page::find($id);

        if (!$page) {
            return redirect()->route('pages.index')->with('error', 'page not found.');
        }

        $page->delete();

        return back()->with('success', 'page deleted successfully.');
    }

    public function edit($id)
    {
        $pageCount = Page::count();
        $commentCount = Comment::count();
        $categoryCount = Category::count();
        $productCount = Product::count();
        $page = Page::findOrFail($id);
        $users = User::all();

        return view('pages.edit', compact('productCount', 'categoryCount', 'page', 'users', 'pageCount', 'commentCount'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => ['required', 'string', 'regex:/^[a-zA-Z\s]+$/'],
            'description' => 'required|string',
            'user_id' => 'required|exists:users,id',
            'image' => 'nullable|mimes:jpg,jpeg,png|max:2048',
            'cover' => 'nullable|mimes:jpg,jpeg,png|max:2048',
        ]);

        $page = Page::findOrFail($id);
        $page->user_id = $request->input('user_id');
        $page->title = $request->input('title');
        $page->description = $request->input('description');


        $image = $request->file('image');

        if ($image) {
            $path = $image->store('uploads', 'public');
            $page->image = $path;
        } else {
            $page->image = null;
        }

        $cover = $request->file('cover');

        if ($cover) {
            $path2 = $cover->store('uploads', 'public');
            $page->cover = $path2;
        } else {
            $page->cover = null;
        }

        $page->save();

        return back()->with('success', 'page deleted successfully.');
    }

    public function joinPage(Page $page)
    {
        $user = auth()->user();

        if ($page->members->contains($user)) {
            $page->members()->detach($user);

            return back()->with('status', 'You have left this page.');
        } else {
            $membership = new Membership();
            $membership->user_id = $user->id;
            $membership->page_id = $page->id;
            $membership->save();

            return back()->with('status', 'You have joined this page.');
        }
    }
}
