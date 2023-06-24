<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LikedPost extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];

    public function user_like()
    {
        return $this->belongsTo(User::class);
    }

    public function post_like()
    {
        return $this->belongsTo(Post::class);
    }
}
