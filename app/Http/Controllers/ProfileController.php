<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $commentsByPost = [];
        $posts = Post::orderBy('id', 'desc')->paginate(5);
        $currentPostId = null;

        foreach ($posts as $post) {
            $comments = Comment::where('post_id', $post->id)->get();
            $commentsByPost[$post->id] = $comments;
        }

        return view('time-line', compact('posts', 'commentsByPost', 'currentPostId'));
    }
}
