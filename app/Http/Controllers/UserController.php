<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\auth;
use App\Models\Catagory;
use App\Models\UserBlog;
use App\Models\Blog;
use App\Models\Comment;

class UserController extends Controller
{
    public function signin(){
        return view('signin');

    }

    public function signinValidation(Request $request){
    //   return $request->all();
        $validated=$request->validate([
            'fullName'=>'required',
            'email'=>'required|email|unique:blogusers,email',
            'phone'=>'digits:10|unique:blogusers,phone',
            'password'=>'required',
            'conformPassword'=>'required|same:password'
            
        ]);

       if($validated){
        $insert=DB::table('blogusers')->insert([
            'fullname'=>$validated['fullName'],
            'email'=>$validated['email'],
            'phone'=>$validated['phone'],
            'password'=>md5($validated['password'])
        ]);

        if($insert){
            // return redirect()->back()->with('success', '<script>alert("Sign-in Sucessfully!!!");</script>');
            return redirect()->route('login');
        }

       }
    }





    public function login(){
        return view('login');

    }

    public function loginValidation(Request $request){
        $validated=$request->validate([
           
            'email'=>'required|email',
            'password'=>'required'
        ]);

        $user=DB::table('blogusers')
                ->where('email','=',$validated['email'])
                ->first();

        if($user && md5($validated['password']) === $user->password){
            Session::put('user_id', $user->id);

            $categoryModel=new catagory();
            $categories=$categoryModel->getAllCategory();
             return redirect()->route('home');
            // return $categories;
        }
        else{
            return redirect()->back()->withErrors(['Email password doesnot match'])->withInput();;
        }
    }



    public function userProfile($userid){
        $user=userBlog::withCount('blogs')
        ->with(['blogs.comment.commenter'])
        
        ->find($userid);

        // $user->loadCount('blogs.likes'); 
        //    return $user;
        // $cmt=comment::with('commenter')->get();
        //   return $cmt->pluck('commenter.fullname');
       return view('userProfile',['user' => $user]);

    }

    public function myProfile($userid){
        return 'hiiiiiiiiiiiii';
    }



    
    public function logout()
    {
        session()->flush(); // Flush all session data
    
        return redirect()->route('login'); // Redirect to login page or any other desired route
    }
    

}
