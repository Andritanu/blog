<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Comment;

class Blog extends Model
{
    use HasFactory;

    public function comment()
    {
        return $this ->hashMany(Comment::class);
    }
    
    protected $table = 'blogs';
    protected $primaryKey = 'id';
    protected $fillable = [
        'title', 'blog'
    ];
}
