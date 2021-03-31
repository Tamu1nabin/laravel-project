<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/homepage','App\Http\Controllers\UserController@index')->name('homepage');
Route::get('/about','App\Http\Controllers\UserController@about')->name('about');
Route::get('/service','App\Http\Controllers\UserController@services')->name('service');
Route::get('/product','App\Http\Controllers\UserController@product')->name('product');
Route::get('/team','App\Http\Controllers\UserController@team')->name('team');
Route::get('/pricing','App\Http\Controllers\UserController@pricing')->name('pricing');
Route::get('/blog','App\Http\Controllers\UserController@blog')->name('blog');
Route::get('/contact','App\Http\Controllers\UserController@contact')->name('contact');
Route::get('/productdetail/{id}','App\Http\Controllers\UserController@productdetail')->name('productdetail');

Route::get('/searchresult','App\Http\Controllers\UserController@search')->name('searchproduct');

	
// admin routes
Route::get('/admin/home','App\Http\controllers\Admincontroller@index')->name('admin.home');

Route::get('/admin/addcategory','App\Http\controllers\Admincontroller@addcategory')->name('admin.addcategory');
Route::post('/admin/storecategory','App\Http\controllers\Admincontroller@storecategory')->name('admin.storecategory');

Route::get('/admin/addproduct','App\Http\controllers\Admincontroller@addproduct')->name('admin.addproduct');

// Route::post('/admin/storecategory','App\Http\controllers\Admincontroller@storecategory')->name('admin.storecategory');


Route::post('/admin/storeproduct','App\Http\controllers\Admincontroller@storeproduct')->name('admin.storeproduct');

Route::get('/admin/showproduct','App\Http\controllers\Admincontroller@showproduct')->name('admin.showproduct');

Route::get('/admin/showcategory','App\Http\controllers\Admincontroller@showcategory')->name('admin.showcategory');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->name('dashboard');