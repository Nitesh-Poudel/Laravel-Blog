<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Catagory;

class categoryController extends Controller
{
   public function addCaegory(){
      return view('insertCategory');
  
   }
}
