<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Catagory extends Model
{
    public $timestamps = false;

    public function getAllCategory(){
       $categories= DB::table('catagories')->get();
       return $categories;
    }


    
}
