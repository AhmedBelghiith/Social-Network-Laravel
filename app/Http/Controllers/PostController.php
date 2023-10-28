<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Comment;
use App\Models\Page;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function index()
    {
        $commentCount = Comment::count();
        $posts = Post::orderBy('id', 'desc')->paginate(5);
        return view('posts.index', compact('posts', 'commentCount'));
    }
    public function show()
    {
        $posts = Post::all();

        return view('home', compact('posts'));
    }
    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'content' => 'required|string',
        ]);

        $image = $request->file('image');
        if ($image) {
            $path = $image->store('uploads', 'public');
        } else {
            $path = null;
        }


        $pageId = $request->input('page_id');

        if ($pageId) {
            $page = Page::find($pageId);
            $page->posts()->create([
                'content' => $request->input('content'),
                'image' => $path,
                'likes' => 0,
                'comments' => 0,
                'user_id'=>auth()->user()->id,
            ]);

            return back()->with('success', 'Page post has been created successfully.');
        }
            


        Post::create([
            'content' => $request->input('content'),
            'image' => $path,
            'likes' => 0,
            'comments' => 0,
            'user_id'=> auth()->user()->id,

        ]);

        return back()->with('success', 'Post has been created successfully.');
    }




    public function edit(Post $post)
    {
        $commentCount = Comment::count();

        return view('posts.edit', compact('post', 'commentCount'));
    }
    public function update(Request $request, Post $post)
    {
        $request->validate([
            'content' => 'required|string',

        ]);

        $post->fill($request->post())->save();

        return redirect()->route('posts.index')->with('success', 'Post Has Been updated successfully');
    }
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('posts.index')->with('success', 'Post has been deleted successfully');
    }
}
