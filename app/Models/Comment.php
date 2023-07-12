<?php

namespace App\Models;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'post_id', 'user', 'comment', 'parent_id',
    ];

    /**
     * Get post based on comment.
     */
    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
