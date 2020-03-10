<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class FoodItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('food_items')->insert([
            'title'=>'texas burger',
            'description'=>'lettuce, tomato sauce, high quality beef, spring onions, baked beans, carrots, potatoes, mayo, black pepper, white pepper',
            'image_url'=>'/images/burger.png',
            'price'=>9.99,
            'category_id'=>2,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('food_items')->insert([
            'title'=>'BBQ burger',
            'description'=>'lettuce, tomato sauce, high quality beef, spring onions, baked beans, carrots, potatoes, mayo, black pepper, white pepper',
            'image_url'=>'/images/burger.png',
            'price'=>9.99,
            'category_id'=>2,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('food_items')->insert([
            'title'=>'Kings burger',
            'description'=>'lettuce, tomato sauce, high quality beef, spring onions, baked beans, carrots, potatoes, mayo, black pepper, white pepper',
            'image_url'=>'/images/burger.png',
            'price'=>9.99,
            'category_id'=>2,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
    }
}
