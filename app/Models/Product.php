<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'description', 'prix', 'file', 'user_id', 'location_id', 'category_id'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function location()
    {
        return $this->belongsTo(Location::class, 'location_id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }


    public function likes()
    {
        return $this->hasMany(Like::class);
    }

    public function likedByUser($user)
    {
        return $this->likes->where('user_id', $user->id)->isNotEmpty();
    }
}
