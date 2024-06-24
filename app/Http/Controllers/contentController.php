<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Catagory;
use App\Models\Blog;
use App\Models\Like;
use App\Models\Comment;
use App\Models\UserBlog;
use Illuminate\Support\Facades\Session;


class contentController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     


    public function index()
    {
        
        $categories=Catagory::get();

        //$blogModel=new blog();
        $contents=Blog::withCount(['comment','like'])
                //->with(['comment','like'])
                ->orderBy('id', 'desc')
                ->get();
        // $likes=[];
        // $commentsCount=[];

        // foreach($contents as $content){
        //     $likes[$content->id]=Like::where('blog_id',$content->id)
        //                             ->count();

        //     $commentsCount[$content->id]=Comment::where('blog_id',$content->id)
        //                                         ->count();
        // }
         
        // return $contents ;

        return view('home',['categories'=>$categories,'contents'=>$contents]);
        
    }




    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //  $categoryModel=new catagory();
        // $categories=$categoryModel->getAllCategory();
        $categories=Catagory::get();

       
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
        
        $comments=Comment::where('blog_id',$id)
                            ->join('blogusers', 'comments.commenter_id', '=', 'blogusers.id')
                            ->get();

        $commentsCount=Comment::where('blog_id',$id)
                            ->count();
        // return $likeExist;
       
        //$thatBlog=Blog::findOrFail($id);
        //(Have to crate relations to get data in this way)

        
        // $thatBlog = Blog::select('blogs.*', 'blogusers.fullname','blogusers.id')
        //         ->where('blogs.id', $id)
        //         ->join('blogusers', 'blogs.author_id', '=', 'blogusers.id')
        //         ->first();
        $thatBlog=Blog::withCount(['like','comment'])
                ->with(['bloger','comment','commenter'])
                ->find($id);

                // $blog = Blog::with('commenter', 'commenter.comments')->find($id);
        

        $contentList=Blog::select(['title','id',])->where('category_id',$thatBlog->category_id)->get();
        
        // return view('contentHighlight',['content'=>$thatBlog,'Ilike'=>$likeExist,'contentList'=>$contentList]) ;   
          return $thatBlog;
        // return $blog;   
    }
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
