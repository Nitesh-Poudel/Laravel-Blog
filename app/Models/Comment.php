<?php

namespace App\Models;
use App\Models\UserBlog;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{   
    use HasFactory;
    protected  $fillable=['blog_id','commenter_id','comment'];


    public function commenter(){
        return $this->belongsTo(UserBlog::class, 'commenter_id','id');
}
}
