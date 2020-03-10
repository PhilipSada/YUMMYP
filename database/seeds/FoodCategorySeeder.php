<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class FoodCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('food_categories')->insert([
            'title'=>'starters',
            'description'=>'This food is very delicious, i am very sure you like to have a bit. feel free and eat as much as you want',
            'image_url'=>'/images/chips.png',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('food_categories')->insert([
            'title'=>'burgers',
            'description'=>'This food is very delicious, i am very sure you like to have a bit. feel free and eat as much as you want',
            'image_url'=>'/images/burger.png',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('food_categories')->insert([
            'title'=>'entrees',
            'description'=>'This food is very delicious, i am very sure you like to have a bit. feel free and eat as much as you want',
            'image_url'=>'/images/steak.png',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('food_categories')->insert([
            'title'=>'sides',
            'description'=>'This food is very delicious, i am very sure you like to have a bit. feel free and eat as much as you want',
            'image_url'=>'/images/salad.png',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('food_categories')->insert([
            'title'=>'desserts',
            'description'=>'This food is very delicious, i am very sure you like to have a bit. feel free and eat as much as you want',
            'image_url'=>'/images/pancakes.png',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
       
    }
}
