<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Catagory;
use App\Models\Blog;
use App\Models\Like;
use Illuminate\Support\Facades\Session;


class contentController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     


    public function index()
    {
        $categoryModel=new catagory();
        $categories=$categoryModel->getAllCategory();

        $blogModel=new blog();
        //$contents=$blogModel->getAllContents();
        $contents=Blog::orderBy('id', 'desc')
            // ->where('title','like','%emoji%')
            // ->orWhere('category_id','=','5')

            ->get();

       return view('home',['categories'=>$categories,'contents'=>$contents]);
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categoryModel=new catagory();
        $categories=$categoryModel->getAllCategory();

       
        return view('uploadBlog',['categories'=>$categories]);
        // return $categories;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //return view('signin');
        $validatedData=$request->validate([
        'title'=>'required|string',
        'category' => 'integer',
        'content' => 'required|string',
        

        ]);
        if($validatedData){
            $title = $request->input('title');
            $categoryId = $request->input('category');
            $content = $request->input('content');
    
            // Call the uploadBlog method from the Blog model to store the data
            $blogModel = new Blog();
            $blogModel->uploadBlog($title, $categoryId, $content);
    
            return redirect()->route('home')->with('success', 'Blog uploaded successfully.');
        } 
        else{

        }
        

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {    

        $likeModel=new Like();
        $likeExist = $likeModel->doILike($id);
        $likeCount=$likeModel->countLike($id);
        


        // return $likeExist;
        $blogModel = new Blog();
        $thatBlog=$blogModel->showParticular($id);
        
          return view('contentHighlight',['content'=>$thatBlog,'Ilike'=>$likeExist,'likeCount'=>$likeCount]) ;   }
        // return $thatBlog;}
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
