<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Group;
use App\Models\User;
use App\Models\Blog;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    public function storeBlog(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'bail|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $currentGroupId = session('current_group_id');
        $image_path=  $request->file('image')->store('uploads', 'public');
        $blog = new Blog([
            'title' => $request->title,
            'content' => $request->content,
            'image' => $image_path,
            'group_id' => $currentGroupId,
        ]);
        $user_id = Auth::id();
        $blog->user_id = $user_id;
        $blog->save();
        return redirect('/group/' . $currentGroupId);
    }

    public function destroy(Blog $blog)
    {
        if (Auth::user() && Auth::user()->id === $blog->user_id) {
            // Author can delete the blog
            $blog->delete();
            return redirect()->back()->with('success', 'Blog post deleted successfully.');
        } else {
            // Unauthorized to delete
            return redirect()->back()->with('error', 'You are not authorized to delete this blog post.');
        }
    }
    


}
