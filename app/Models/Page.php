<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Page extends Model
{
    protected $fillable = [
        'title', 'description', 'user_id', 'image', 'cover'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function participants(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'page_user', 'page_id', 'user_id')
            ->withTimestamps();
    }

    public function members()
    {
        return $this->belongsToMany(User::class, 'memberships', 'page_id', 'user_id');
    }

    public function posts()
    {
        return $this->belongsToMany(Post::class,'page_post','page_id', 'post_id');
    }
}
