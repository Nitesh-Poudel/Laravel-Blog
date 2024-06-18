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
        //   return $req->blog_id;
            $likeExist=$this->likeModel->doIlike($req->blogid);

            if(!$likeExist){
                 $this->likeModel->doLike($req->blog_id);
                 return redirect()->back();
                //  return $req->blogid;
            }
            else{
                 $this->likeModel->doUnlike($req->blog_id);
                //return redirect()->back();
                return "unlike hahahhaha";
            }
            // return $this->likeModel->dolike($req->blogid);
            //return $likeExist;
        }


        if($req->input('action')=='comment'){
             $userid=session()->get('user_id');
             $validatedData=$req->validate([
                'blog_id'=>'required',
                'comment'=>'required'
             ]);


            //  //added session userid in array
             $validatedData['blog_id']=(int)$validatedData['blog_id'];
               $validatedData['commenter_id'] = $userid;
            
            //   unset($validatedData['blogid']); // Remove the old key if necessary
          //$comment=Comment::create($validatedData);

                 $docomment=Comment::create($validatedData);
            
              return redirect()->back();
             
        }




        if($req->input('action')=='unlike'){
            $this->likeModel->doUnlike($req->blog_id);
            return redirect()->back();
        }
    }
   


}
