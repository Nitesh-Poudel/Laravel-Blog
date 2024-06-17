<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Like;

class ReactionController extends Controller
{
    protected $likeModel;
    public function __construct(Like $like){
        $this->likeModel=$like;
    }
    public function todo(Request $req){
        if($req->input('action')=='like'){
            // return $req->blogid;
            $likeExist=$this->likeModel->doIlike($req->blogid);

            if(!$likeExist){
                 $this->likeModel->doLike($req->blogid);
                 return redirect()->back();
            }
            else{
                 $this->likeModel->doUnlike($req->blogid);
                 return redirect()->back();
            }
            // return $this->likeModel->dolike($req->blogid);
            //return $likeExist;
        }


        if($req->input('action')=='comment'){
           return  $this->doComment();
        }
        if($req->input('action')=='unlike'){
            return $this->doUnlike();
        }
    }
   


}
