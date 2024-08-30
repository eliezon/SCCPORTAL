<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostRevision extends Model
{
    use HasFactory;

    protected $fillable = ['post_id', 'user_id', 'content'];

    // Define the post relationship (a revision belongs to a post)
    public function post()
    {
        return $this->belongsTo(Post::class);
    }

    // Define the user relationship (a revision belongs to a user)
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
