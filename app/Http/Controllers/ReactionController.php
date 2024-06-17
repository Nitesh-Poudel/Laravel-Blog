<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Like;
use App\Models\Comment;


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
                //return "unlike hahahhaha";
            }
            // return $this->likeModel->dolike($req->blogid);
            //return $likeExist;
        }


        if($req->input('action')=='comment'){
             $userid=session()->get('user_id');
             $validatedData=$req->validate([
                'blogid'=>'required|integer',
                // 'commenter_id'=>'required|in:like,unlike,comment',
                'comment'=>'required'
             ]);
            //  //added session userid in array
             $validatedData['blog_id']=$validatedData['blogid'];
              $validatedData['commenter_id'] = $userid;
            
              unset($validatedData['blogid']); // Remove the old key if necessary
          //$comment=Comment::create($validatedData);

               return $validatedData;

             
        }
        if($req->input('action')=='unlike'){
            $this->likeModel->doUnlike($req->blogid);
            return redirect()->back();
        }
    }
   


}
