<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\FoodItem;
use App\FoodCategory;

class FoodItemsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $foodItems = FoodItem::paginate(10);

        return view('admin/food-items/all', [
            'foodItems'=>$foodItems,
        ]);
    }
    public function create(){
        $foodCategories = FoodCategory::all();
        return view('admin/food-items/create',[
            'foodCategories'=>$foodCategories
        ]);
    }
    public function store(){
        request()->validate([
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'image_url' => ['required', 'string'],
            'price' => ['required'],
            'category_id' => ['required']
        ]);
        
        $foodItem = new FoodItem();
        $foodItem->title = request('title');
        $foodItem->description = request('description');
        $foodItem->image_url = request('image_url');
        $foodItem->price = request('price');
        $foodItem->category_id = request('category_id');
        $foodItem->save();

        return redirect('/admin/food-items');
    }
    public function edit($id){
        $foodItem = FoodItem::find($id);
        $foodCategories = FoodCategory::all();

        return view('admin/food-items/edit', [
            'foodItem'=>$foodItem,
            'foodCategories'=>$foodCategories
        ]);
    }
    public function update($id){
      request()->validate([
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'image_url' => ['required', 'string'],
            'price' => ['required'],
            'category_id' => ['required']
        ]);
       
        $foodItem = new FoodItem();
        $foodItem->title = request('title');
        $foodItem->description = request('description');
        $foodItem->image_url = request('image_url');
        $foodItem->price = request('price');
        $foodItem->category_id = request('category_id');
        $foodItem->save();

    

        return redirect('/admin/food-items');
    }
    public function delete($id){
        $foodItem = FoodItem::find($id);
        $foodItem->delete();

        return redirect('/admin/food-items');
    }
}
