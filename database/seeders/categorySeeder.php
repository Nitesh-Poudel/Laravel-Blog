<?php

namespace Database\Seeders;

use App\Models\Catagory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class categorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $categories = collect([
            ['catagoryName' => 'Science and Technology'],
            ['catagoryName' => 'Health & Wellness'],
            ['catagoryName' => 'Food and cooking'],
            ['catagoryName' => 'Fashion and Beauty'],
            ['catagoryName' => 'Business and Finances'],
            ['catagoryName' => 'Arts and Culture'],
            ['catagoryName' => 'Sports and Fitness'],
            ['catagoryName' => 'Personal Growth'],
            ['catagoryName' => 'Psychology and Emotion']
        ]);

        $categories->each(function($category) {
            Catagory::create($category);
        });

    }
}
