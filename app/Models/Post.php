<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = ['content', 'likes', 'image','user_id','comments'];

      public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }
    public function comments()
    {
        return $this->hasMany(Comment::class, 'post_id');
    }
    public function page()
    {
        return $this->belongsTo(Page::class,'page_id');
    }

}
