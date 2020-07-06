<?php
use App\GeneralSetting;
use App\SeoSetting;
use App\SocialAccountsSetting;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\View\View;

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


Route::get('/', 'PagesController@home');
Route::get('/menu', 'PagesController@menu');
Route::get('/menu/{slug}','PagesController@singleMenu');
Route::get('/reservations','PagesController@reservations');
Route::post('/reservations','PagesController@saveReservations');
Route::get('/reservations/reservation-confirmed','PagesController@reservationConfirmation');
Route::get('/contact', 'PagesController@contact');
Route::post('/contact', 'PagesController@sendMail');
Route::get('/offers', 'PagesController@offers');
Route::post('/offers', 'PagesController@registerMember');
Route::get('/offers/thank-you', 'PagesController@offersThanks');
Route::get('/about', 'PagesController@about');
Route::get('/testing', 'PagesController@testing');
Route::get('/contact-mail', 'PageController@viewMail');
Route::get('/enquiry-received', 'PagesController@mailReceived');
Route::get('/reservation-mail','PagesController@viewReservationMail');

//admin Dashboard
Route::get('/admin','admin\AdminController@dashboard');
Route::get('/admin/estimated-revenue-daily','admin\AdminController@dailyRevenueLast30');
//admin registration
Route::get('/admin/register', 'admin\AdminController@register');
//admin login
Route::get('/admin/login', 'admin\AdminController@login');
//admin Food Categories
Route::get('/admin/food-categories', 'admin\FoodCategoriesController@index')->middleware('role:Admin');
Route::get('/admin/food-categories/create','admin\FoodCategoriesController@create')->middleware('role:Admin');
Route::post('/admin/food-categories','admin\FoodCategoriesController@store')->middleware('role:Admin');
Route::get('/admin/food-categories/{id}/edit','admin\FoodCategoriesController@edit')->middleware('role:Admin');
Route::put('/admin/food-categories/{id}','admin\FoodCategoriesController@update')->middleware('role:Admin');
Route::get('/admin/food-categories/{id}/delete','admin\FoodCategoriesController@delete')->middleware('role:Admin');


//admin Food Items
Route::get('/admin/food-items', 'admin\FoodItemsController@index')->middleware('role:Admin');
Route::get('/admin/food-items/create','admin\FoodItemsController@create')->middleware('role:Admin');
Route::post('/admin/food-items','admin\FoodItemsController@store')->middleware('role:Admin');
Route::get('/admin/food-items/{id}/edit','admin\FoodItemsController@edit')->middleware('role:Admin');
Route::put('/admin/food-items/{id}','admin\FoodItemsController@update')->middleware('role:Admin');
Route::get('/admin/food-items/{id}/delete','admin\FoodItemsController@delete')->middleware('role:Admin');

//admin users
Route::get('/admin/users', 'admin\UsersController@index')->middleware('role:Admin');
Route::get('/admin/users/create','admin\UsersController@create')->middleware('role:Admin');
Route::post('/admin/users','admin\UsersController@store')->middleware('role:Admin');
Route::get('/admin/users/{id}/edit','admin\UsersController@edit')->middleware('role:Admin');
Route::put('/admin/users/{id}','admin\UsersController@update')->middleware('role:Admin');
Route::get('/admin/users/{id}/delete','admin\UsersController@delete')->middleware('role:Admin');

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

//admin settings
Route::get('/admin/settings/general', 'admin\SettingController@general')->middleware('role:Admin');
Route::put('/admin/settings/general', 'admin\SettingController@saveGeneral')->middleware('role:Admin');
Route::get('/admin/settings/seo', 'admin\SettingController@seo')->middleware('role:Admin');
Route::put('/admin/settings/seo', 'admin\SettingController@saveSeo')->middleware('role:Admin');
Route::get('/admin/settings/social-accounts', 'admin\SettingController@socialAccounts')->middleware('role:Admin');
Route::put('/admin/settings/social-accounts', 'admin\SettingController@saveSocialAccounts')->middleware('role:Admin');


// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');


View::composer(['home','pages/about', 'pages/contact', 'pages/offers', 'pages/thanks', 
'pages/reservation-confirmation','pages/reservations', 'menu/all-categories', 'menu/single-menu', 'mail/mail-confirmation'], function ($view) {
    $generalSettings = GeneralSetting::find(1);
    $socialAccountSettings = SocialAccountsSetting::find(1);
    $seoSettings = SeoSetting::find(1);

    $view->with('settings', [
        "general"=>$generalSettings,
        "social"=>$socialAccountSettings,
        "seo"=>$seoSettings

    ]);
});
