<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    use HasFactory;

    protected $fillable=[
        'user_id',
        'blog_id',
    ];

    protected $userid;

    public function __construct(){
        $this->userid=session()->get('user_id');
    }
    

    public function doLike($blogid){
        //return $this->user_id;
        // return $blogid ."liked";
        return Like::create([
            'user_id'=>$this->userid,
            'blog_id'=>$blogid
        ]);
       
    }
    public function doILike($blogid){
        return Like::where('user_id','=',$this->userid)
                    ->where('blog_id','=',$blogid)
                    ->count();
    }

    public function countLike($blogid){
        return Like::where('blog_id','=',$blogid)
                    ->count();

    }

    public function doUnlike($blogid){
        return Like::where('user_id','=',$this->userid)
                    ->where('blog_id','=',$blogid)
                    ->delete();
    }


    public function doComment(){
        return "Hi i comment";

    }

    public function countComment(){

    }



}
