<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Group;
use App\Models\User;
use App\Models\Blog;
use App\Models\Comment;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class GroupController extends Controller
{

    public function index()
    {
        $commentCount = Comment::count();
        $groups = Group::all();
        return view('groups.group', compact('groups', 'commentCount'));
    }
    

    public function displayGroups(Request $request)
    {
        $groups = Group::all();
        return view('groups.frontOffice.groupFrontOffice', compact('groups'));
    }


    public function create()
    {
        $commentCount = Comment::count();
        $users = User::all();
        return view('groups.add', compact('users', 'commentCount'));
    }


    public function groupsWithMemberCount()
    {
        $groups = Group::with('members')->get();
    
        return view('groups.frontOffice.groupFrontOffice', compact('groups'));
    }


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);
        Group::create($validatedData);
        return redirect('dashboard/groups');
    }

    public function storeFront(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'bail|required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
       
        $image_path=  $request->file('image')->store('uploads', 'public');
        $group = new Group([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $image_path,
        ]);
        $user_id = Auth::id();
        $group->user_id = $user_id;
        $group->save();
        return redirect('home/groups');
    }



    public function addGroupFront(Request $request)
    {
        // $validatedData = $request->validate([
        //     'name' => 'required',
        //     'description' => 'required',
        // ]);
        // Group::create($validatedData);
        return view('groups.frontOffice.addGroupFrontOffice');
    }


    public function join(Group $group)
    {
        $user = auth()->user(); 
        $group->addUser($user);
        return redirect()->route('groupPageFront', ['group' => $group]);
    }

    public function groupPageFront(Group $group)
    {
        $groupName = $group->name;
        $groupDescription = $group->description;
        $groupImage = $group->image;
        $followersCount  = $group->members->count();
        $members = $group->members;
        $blogs = $group->blogs;
        
        session(['current_group_id' => $group->id]);
        return view('groups.frontOffice.groupPageFront', compact('group','groupName', 'groupDescription', 'groupImage', 'followersCount', 'members', 'blogs'));
    }

    public function leave(Group $group)
    {
        $user = auth()->user(); 
        $group->removeUser($user); 
        return redirect('home/groups');
    }


    public function destroy(Group $group)
    {
        $group->delete();
        return redirect()->route('showGroup');
    }

    public function destroyfront(Group $group)
    {
        $group->delete();
        return redirect('home/groups');
    }




    public function edit(Group $group)
    {
        $commentCount = Comment::count();
        return view('groups.edit', compact('group', 'commentCount'));
    }

    public function editFront(Group $group)
    {
        $commentCount = Comment::count();
        return view('groups.frontOffice.editFront', compact('group', 'commentCount'));
    }


    public function update(Request $request, Group $group)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        $group->update($validatedData);
        return redirect()->route('showGroup');
    }

    public function updateFront(Request $request, Group $group)
    {
        // $validatedData = $request->validate([
        //     'name' => 'required',
        //     'description' => 'required',
        // ]);

        // $group->update($validatedData);
        // return redirect('home/groups');
        
        $rules = [
            'name' => 'bail|required|string|max:255',
            "description" => 'bail|required',
        ];

        // Si une nouvelle image est envoyée
        if ($request->has("image")) {
            // On ajoute la règle de validation pour "picture"
            $rules["image"] = 'bail|required|image|max:1024';
        }

        $this->validate($request, $rules);

        // 2. On upload l'image dans "/storage/app/public/posts"
        if ($request->has("image")) {

            //On supprime l'ancienne image
            Storage::delete($group->image);

            $chemin_image = $request->image->store("group");
        }

        // 3. On met à jour les informations du Post
        $group->update([
            "name" => $request->name,
            "image" => isset($chemin_image) ? $chemin_image : $group->image,
            "description" => $request->description
        ]);

        // 4. On affiche le Post modifié : route("posts.show")
        return redirect(route("groups", $group));
    }

    public function showGroupBlogs($groupId)
    {
        $group = Group::findOrFail($groupId);
        $blogs = $group->blogs;
        return view('groups.frontOffice.groupPageFront', compact('group', 'blogs'));
    }
}
