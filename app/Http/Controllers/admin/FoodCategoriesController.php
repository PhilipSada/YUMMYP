<?php

namespace App\Http\Controllers\admin;

use App\FoodCategory;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FoodCategoriesController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index(){
        $foodCategories = FoodCategory::paginate(10);
        return view('admin/food-categories/all', [
            'foodCategories'=>$foodCategories
        ]);
    }
    public function create(){

        return view('admin/food-categories/create');
    }
    public function store(){
        request()->validate([
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'image_url' => ['required', 'string'],
        ]);
        
        $foodCategory = new FoodCategory();
        $foodCategory->title = request('title');
        $foodCategory->description = request('description');
        $foodCategory->image_url = request('image_url');
        $foodCategory->save();

        return redirect('/admin/food-categories');
    }
    public function edit($id){
        $foodCategory = FoodCategory::find($id);

        return view('admin/food-categories/edit', [
            'foodCategory'=>$foodCategory,
        ]);
    }
    public function update($id){
      request()->validate([
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'image_url' => ['required', 'string'],
        ]);
       
        $foodCategory = FoodCategory::find($id);
        $foodCategory->title = request('title');
        $foodCategory->description = request('description');
        $foodCategory->image_url = request('image_url');
        $foodCategory->save();

    

        return redirect('/admin/food-categories');
    }
    public function delete($id){
        $foodCategory = FoodCategory::find($id);
        $foodCategory->delete();

        return redirect('/admin/food-categories');
    }
}
