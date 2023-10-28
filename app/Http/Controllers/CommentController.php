<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\User;
use App\Models\Post;
use App\Models\Product;

class CommentController extends Controller
{

    public function index()
    {
        $commentCount = Comment::count();
        $categoryCount = Category::count();
        $productCount = Product::count();
        $comments = Comment::all();
        return view('comments.index', compact('productCount', 'categoryCount', 'comments', 'commentCount'));
    }


    public function create()
    {
        $commentCount = Comment::count();
        $categoryCount = Category::count();
        $productCount = Product::count();
        $users = User::all();
        $posts = Post::all();
        return view('comments.create', compact('productCount', 'categoryCount', 'users', 'posts', 'commentCount'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'content' => 'required|string',
            'post_id' => 'required|exists:posts,id',
        ]);

        $file = $request->file('file');

        if ($file) {
            $path = $file->store('uploads', 'public');
        } else {
            $path = null;
        }

        Comment::create([
            'user_id' => auth()->user()->id,
            'post_id' => $request->input('post_id'),
            'file' => $path,
            'content' => $request->input('content'),
            'likes' => 0,
        ]);

        return back()->with('success', 'Comment created  successfully.');
    }

    public function destroy($id)
    {
        $comment = Comment::find($id);

        if (!$comment) {
            return back()->with('success', 'Comment not deleted successfully.');
        }

        $comment->delete();

        return back()->with('success', 'Comment deleted successfully.');
    }

    public function edit($id)
    {
        $commentCount = Comment::count();
        $categoryCount = Category::count();
        $productCount = Product::count();
        $comment = Comment::findOrFail($id);
        $users = User::all();
        $posts = Post::all();

        return view('comments.edit', compact('productCount', 'categoryCount', 'comment', 'users', 'posts', 'commentCount'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'file' => 'nullable|mimes:jpg,jpeg,png,pdf|max:2048',
            'content' => 'required|string',
            'user_id' => 'required|exists:users,id',
            'post_id' => 'required|exists:posts,id',
        ]);

        $comment = Comment::findOrFail($id);
        $comment->user_id = $request->input('user_id');
        $comment->post_id = $request->input('post_id');
        $comment->content = $request->input('content');

        $file = $request->file('file');

        if ($file) {
            $path = $file->store('uploads', 'public');
            $comment->file = $path;
        } else {
            $comment->file = null;
        }

        $comment->save();

        return back()->with('success', 'Comment deleted successfully.');
    }
}
