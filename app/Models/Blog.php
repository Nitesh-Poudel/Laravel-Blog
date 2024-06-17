<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Models\UserBlog;

class Blog extends Model
{
    //use HasFactory;
    public function uploadBlog($title,$categoryId,$content){
        $upload=DB::table('blogs')->insert([
            'title'=>$title,
            'category_id'=>$categoryId,
            'passage'=>$content,
            'author_id'=>session('user_id'),
            'published'=>now()

        ]);
         return $upload;
    }


    public function getAllContents(){
        $contents= DB::table('blogs')->orderBy('id', 'desc')->get();
        return $contents;
     }

     public function showParticular($id){
        $particular = Blog::select('blogs.*', 'blogusers.fullname as author_name')
        ->join('blogusers', 'blogs.author_id', '=', 'blogusers.id')
        ->where('blogs.id', '=', $id)
        ->first();
        return $particular;
     }
}
