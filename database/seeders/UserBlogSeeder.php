<?php

namespace Database\Seeders;
use App\Models\UserBlog;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class UserBlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
        
    {
        UserBlog::create([
            'fullname'=>'Nitesh Poudel',
            'email'=>'nts@gmail.com',
            'password'=>md5('admin'),
            'phone'=>'9823694421',
            'bio'=>'I am hahahahhhahahah'

        ]);

        $fake = Faker::create();

        for($i=0;$i<10;$i++){
            UserBlog::create([
                'fullname'=>$fake->name(),
                'email'=>$fake->unique()->email(),
                'password'=>md5('admin'),
                'phone'=>$fake->numberBetween(0000000000,9999999999),
                'bio'=>$fake->text()
    
            ]);
        }
       
    }
}
