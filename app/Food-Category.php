<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FoodCategory extends Model
{
    public function food_items(){
        $this->hasMany('App\FoodItem','category_id'); //category_id is the foreign key
    }
}
