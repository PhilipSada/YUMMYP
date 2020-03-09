<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Static pages
Route::get('/', 'StaticPagesController@home');
Route::get('/menu', 'StaticPagesController@menu');
Route::get('/menu/{slug}','StaticPagesController@singleMenu');
Route::get('/reservations','StaticPagesController@reservations');
Route::get('/contact', 'StaticPagesController@contact');
Route::get('/offers', 'StaticPagesController@offers');
Route::get('/about', 'StaticPagesController@about');

//admin Dashboard
Route::get('/admin','admin\AdminController@dashboard');
//admin registration
Route::get('/admin/register', 'admin\AdminController@register');
//admin login
Route::get('/admin/login', 'admin\AdminController@login');
//admin Food Categories
Route::get('/admin/food-categories', 'admin\FoodCategoriesController@index');
Route::get('/admin/food-categories/create','admin\FoodCategoriesController@create');
Route::get('/admin/food-categories/{id}/edit','admin\FoodCategoriesController@edit');

//admin Food Items
Route::get('/admin/food-items', 'admin\FoodItemsController@index');
Route::get('/admin/food-items/create','admin\FoodItemsController@create');
Route::get('/admin/food-items/{id}/edit','admin\FoodItemsController@edit');

//admin users
Route::get('/admin/users', 'admin\UsersController@index');
Route::get('/admin/users/create','admin\UsersController@create');
Route::post('/admin/users','admin\UsersController@store');
Route::get('/admin/users/{id}/edit','admin\UsersController@edit');

//admin customers
Route::get('/admin/offers-members', 'admin\CustomersController@allOffersMembers');
Route::get('/admin/reservations','admin\CustomersController@allReservations');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
