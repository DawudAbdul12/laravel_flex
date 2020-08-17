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

// Route::get('/', function () {
//     return view('welcome');
// });


// for vue
//Route::get('/{any}', 'SPAController@index')->where('any', '.*');
//Auth::routes();


/*

|
|
|
|
|   FRONTEND ROUTES
|
|
|
|
|

*/
Route::get('/','publicController@index');// index
Route::get('/index','publicController@index'); // index
Route::get('/about-us','publicController@about'); // about
Route::get('/testimonials','publicController@testimonial'); // products
Route::get('/product/{slug}','publicController@single_product'); // for single product
Route::get('/blog','publicController@blog'); // for single single news
Route::get('/blog/{slug}','publicController@single_news'); // for single single news
Route::get('/our-services','publicController@our_services');//gallery 
Route::get('/how-it-works','publicController@how_it_works');//gallery 
Route::get('/meal-plans','publicController@our_meal');//gallery 

Route::get('/album/{slug}','publicController@gallery_single'); // for single single aLBUM
Route::get('/team','publicController@team');
Route::get('/contact-us','publicController@contact');

/*

|
|
|
|
|   BACKEND ROUTES
|
|
|
|
|

*/
// LOGIN
Auth::routes();
Route::get('/admin','adminController@index')->name('admin');
Route::get('/admin/login','adminController@index')->name('admin/login');
// DASHBOARD
Route::resource('/admin/dashboard','dashboardController');
// BLOG CATEGORY
Route::resource('/admin/blog/categories','blogCategoryController');
// BlOG
Route::resource('/admin/blog','blogController');
// TEAM 
Route::resource('/admin/team','teamController');
// PRODUCT
Route::post('/admin/product/delete/gallery','productController@delete_img');
Route::resource('/admin/product','productController');
// ALBUM 
Route::post('/admin/album/delete/gallery','albumController@delete_img');
Route::resource('/admin/album','albumController');
// SLIDER 
Route::resource('/admin/slider','sliderController');
// TESTIMONIAL 
Route::resource('/admin/testimonial','testimonialController');
// USER
Route::get('/admin/user/changepassword','userController@changepassword');
Route::post('/admin/user/updatepassword', 'UserController@updatepassword');
Route::resource('/admin/user','userController');




Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
