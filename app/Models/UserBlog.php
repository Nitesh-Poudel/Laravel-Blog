<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Blog;

class UserBlog extends Model
{
    use HasFactory;
    protected $table = 'blogusers'; 

    public function blogs(){
        return $this->hasMany(Blog::class,'author_id','id');
    }
}
