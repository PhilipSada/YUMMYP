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
            'title'=>'Bacon Lover Beef',
            'description'=>'Delicious burger made with ingredients you will love such as grilled beef, extra bacon, fresh onions and tomatoes, cheese and fruity-spicy smoky sauce, packed in a bacon bun. ',
            'image_url'=>'/images/baconbeef.png',
            'price'=>9.99,
            'category_id'=>1,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('food_items')->insert([
            'title'=>'Bacon Lover Double',
            'description'=>'Delicious burger made with ingredients you will love such as grilled beef, extra bacon, fresh onions and tomatoes, cheese and fruity-spicy smoky sauce, packed in a bacon bun. ',
            'image_url'=>'/images/baconloverdouble.png',
            'price'=>9.99,
            'category_id'=>1,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('food_items')->insert([
            'title'=>'Bacon King',
            'description'=>'Delicious burger made with ingredients you will love such as grilled beef, extra bacon, fresh onions and tomatoes, cheese and fruity-spicy smoky sauce, packed in a bacon bun. ',
            'image_url'=>'/images/baconking.png',
            'price'=>9.99,
            'category_id'=>1,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('food_items')->insert([
            'title'=>'Big King',
            'description'=>'Delicious burger made with a lot of ingredients you will love such as grilled beef, extra bacon, fresh onions and tomatoes, cheese and fruity-spicy smoky sauce, packed in a bacon bun. ',
            'image_url'=>'/images/bigkingxxl.png',
            'price'=>9.99,
            'category_id'=>1,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('food_items')->insert([
            'title'=>'Double Steakhouse',
            'description'=>'Delicious burger made with a lot of ingredients you will love such as grilled beef, extra bacon, fresh onions and tomatoes, cheese and fruity-spicy smoky sauce, packed in a bacon bun. ',
            'image_url'=>'/images/doublesteak.png',
            'price'=>9.99,
            'category_id'=>1,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('food_items')->insert([
            'title'=>'Cheese Burger',
            'description'=>'Delicious burger made with a lot of ingredients you will love such as grilled beef, extra bacon, fresh onions and tomatoes, cheese and fruity-spicy smoky sauce, packed in a bacon bun. ',
            'image_url'=>'/images/cheeseburger.png',
            'price'=>9.99,
            'category_id'=>1,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('food_items')->insert([
            'title'=>'Bacon Lover Chicken',
            'description'=>'Delicious burger made with a lot of ingredients you will love such as grilled chicken, extra bacon, fresh onions and tomatoes, cheese and fruity-spicy smoky sauce, packed in a bacon bun. ',
            'image_url'=>'/images/baconloverchicken.png',
            'price'=>9.99,
            'category_id'=>2,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('food_items')->insert([
            'title'=>'Caesar Chicken Wrap',
            'description'=>'Delicious burger made with a lot of ingredients you will love such as grilled chicken, extra bacon, fresh onions and tomatoes, cheese and fruity-spicy smoky sauce, packed in a bacon bun. ',
            'image_url'=>'/images/caesarchickenwrap.png',
            'price'=>9.99,
            'category_id'=>2,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('food_items')->insert([
            'title'=>'Crispy Chicken Wrap',
            'description'=>'Delicious burger made with a lot of ingredients you will love such as grilled chicken, extra bacon, fresh onions and tomatoes, cheese and fruity-spicy smoky sauce, packed in a bacon bun. ',
            'image_url'=>'/images/crispy-chicken-wrap.png',
            'price'=>9.99,
            'category_id'=>2,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('food_items')->insert([
            'title'=>'Long Chicken',
            'description'=>'Delicious burger made with a lot of ingredients you will love such as grilled chicken, extra bacon, fresh onions and tomatoes, cheese and fruity-spicy smoky sauce, packed in a bacon bun. ',
            'image_url'=>'/images/longchicken.png',
            'price'=>9.99,
            'category_id'=>2,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('food_items')->insert([
            'title'=>'Crispy Chicken',
            'description'=>'Delicious burger made with a lot of ingredients you will love such as grilled chicken, extra bacon, fresh onions and tomatoes, cheese and fruity-spicy smoky sauce, packed in a bacon bun. ',
            'image_url'=>'/images/crispychicken.png',
            'price'=>9.99,
            'category_id'=>2,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('food_items')->insert([
            'title'=>'Caesar Salad',
            'description'=>'Delicious burger made with a lot of ingredients you will love such as grilled chicken, extra bacon, fresh onions and tomatoes, cheese and fruity-spicy smoky sauce, packed in a bacon bun. ',
            'image_url'=>'/images/caesarsalad.png',
            'price'=>9.99,
            'category_id'=>2,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('food_items')->insert([
            'title'=>'Chilli Cheese Fries',
            'description'=>'Delicious burger made with a lot of ingredients you will love such as chilli pepper, cheese and fruity-spicy smoky sauce',
            'image_url'=>'/images/loaded-fries.png',
            'price'=>9.99,
            'category_id'=>3,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('food_items')->insert([
            'title'=>'King Fries',
            'description'=>'Delicious burger made with a lot of ingredients you will love such as chilli pepper, cheese and fruity-spicy smoky sauce',
            'image_url'=>'/images/kingfries.png',
            'price'=>9.99,
            'category_id'=>3,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('food_items')->insert([
            'title'=>'Onion Rings',
            'description'=>'Delicious burger made with a lot of ingredients you will love such as onions, chilli pepper, cheese and fruity-spicy smoky sauce',
            'image_url'=>'/images/onionrings.png',
            'price'=>9.99,
            'category_id'=>3,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
       
    }
}
