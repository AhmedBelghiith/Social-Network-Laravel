<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Comment;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $commentsByPost = [];
        $posts = Post::all();
        $currentPostId = null;

        // Loop through each post and fetch its associated comments
        foreach ($posts as $post) {
            $comments = Comment::where('post_id', $post->id)->get();
            $commentsByPost[$post->id] = $comments;
        }

        $postsOrdred = Post::orderBy('id', 'desc')->paginate(5);
        return view('home', compact('postsOrdred', 'commentsByPost', 'currentPostId'));
    }
}
