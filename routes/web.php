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
Route::postt('/reservations','StaticPagesController@saveReservations');
Route::get('/contact', 'StaticPagesController@contact');
Route::get('/offers', 'StaticPagesController@offers');
Route::post('/offers', 'StaticPagesController@registerMember');
Route::get('/offers/thanks', 'StaticPagesController@offersThankYou');
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
Route::post('/admin/food-categories','admin\FoodCategoriesController@store');
Route::get('/admin/food-categories/{id}/edit','admin\FoodCategoriesController@edit');
Route::put('/admin/food-categories/{id}','admin\FoodCategoriesController@update');
Route::get('/admin/food-categories/{id}/delete','admin\FoodCategoriesController@delete');


//admin Food Items
Route::get('/admin/food-items', 'admin\FoodItemsController@index');
Route::get('/admin/food-items/create','admin\FoodItemsController@create');
Route::post('/admin/food-items','admin\FoodItemsController@store');
Route::get('/admin/food-items/{id}/edit','admin\FoodItemsController@edit');
Route::put('/admin/food-items/{id}','admin\FoodItemsController@update');
Route::get('/admin/food-items/{id}/delete','admin\FoodItemsController@delete');

//admin users
Route::get('/admin/users', 'admin\UsersController@index');
Route::get('/admin/users/create','admin\UsersController@create');
Route::post('/admin/users','admin\UsersController@store');
Route::get('/admin/users/{id}/edit','admin\UsersController@edit');
Route::put('/admin/users/{id}','admin\UsersController@update');
Route::get('/admin/users/{id}/delete','admin\UsersController@delete');

//admin customers
//offers members
Route::get('/admin/members', 'admin\MemberController@index');
Route::get('/admin/members/{id}/delete', 'admin\MemberController@delete');

//reservations members
Route::get('/admin/reservations','admin\ReservationController@index');
Route::get('/admin/reservations/create','admin\ReservationController@create');
Route::post('/admin/reservations','admin\ReservationController@store');
Route::get('/admin/reservations/{id}/edit','admin\ReservationController@edit');
Route::put('/admin/reservations/{id}','admin\ReservationController@update');
Route::get('/admin/reservations/{id}/delete','admin\ReservationController@delete');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
