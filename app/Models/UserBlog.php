<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Blog;
use App\Models\Comment;

class UserBlog extends Model
{
    use HasFactory;
    protected $table = 'blogusers'; 

    public function blogs(){
        return $this->hasMany(Blog::class,'author_id','id');
    }
    public function commentThroughBlog(){
        return $this->hasManyThrough(Comment::class,Blog::class,'author_id', 'blog_id', 'id', 'id');
       
    }
}
