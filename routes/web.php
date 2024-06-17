<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\contentController;
use App\Http\Controllers\categoryController;
use App\Http\Controllers\ReactionController;

use App\Http\Middleware\LoginRequiredMiddleware;


Route::get('/', function () {
    return view('login');
});
// Route::get('/signin',function(){return view('signin');});

Route::get('/signin',[UserController::class,'signin'])->name('signin');
Route::post('/user/registration',[UserController::class,'signinValidation'])->name('Validation');


Route::get('/login',[UserController::class,'login'])->name('login');
Route::post('/user/login',[UserController::class,'loginValidation'])->name('loginValidation');
Route::get('/user/profile',[UserController::class,'userProfile'])->name('user.profile');




//contentController 
Route::get('/home',[contentController::class,'index'])->name('home');

//grouping the routes that need to Login before acess
Route::middleware([LoginRequiredMiddleware::class])->group(function(){
    Route::get('/Upload',[contentController::class,'create'])->name('create.blog');
    Route::post('/storeBlog',[contentController::class,'store'])->name('store.blog');
    Route::post('/todo',[ReactionController::class,'todo'])->name('reaction');

});


Route::get('/particularBlog/{id}',[contentController::class,'show'])->name('particular.blog');
   

//catagoryController
Route::get('/Add/category',[categoryController::class,'addCategory'])->name('add.catagory');



//contentHighligt
Route::get('/highlight',function(){
    return view('contentHighlight');
});


//reactionController


//Logout
Route::get('user/logout',[userController::class,'logout'])->name('logout');