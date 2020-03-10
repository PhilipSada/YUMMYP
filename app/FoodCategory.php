<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FoodCategory extends Model
{   
    protected $table = "food_categories";

    protected $fillable = ['title', 'description', 'image_url'];
    
    public function food_items(){
        $this->hasMany('App\FoodItem','category_id'); //category_id is the foreign key
    }
}
