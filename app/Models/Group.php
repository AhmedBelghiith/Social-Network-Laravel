<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $fillable = [
        'name', 'description', 'user_id','image',
    ];

    // Define a one-to-many relationship with the User model (group creator).
    public function creator()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // Define a many-to-many relationship with the User model (group members).
    public function members()
    {
        return $this->belongsToMany(User::class, 'group_user', 'group_id', 'user_id')
            ->withTimestamps();
    }

    // Define a one-to-many relationship with the Post model (group posts).
    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    // Method to add a user to the group
    public function addUser(User $user)
    {
        $this->members()->syncWithoutDetaching($user->id);
    }

    // Method to remove a user from the group
    public function removeUser(User $user)
    {
        $this->members()->detach($user->id);
    }

    public function blogs()
    {
        return $this->hasMany(Blog::class);
    }
}
