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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact' ,function(){
    return view('contact');
})->middleware('age');

Route::get('/authorinfo' ,function(){
    return view('author');
})->middleware('authormiddleware');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['as'=>'admin.', 'prefix'=>'admin' ,'namespace'=>'Admin' ,'middleware'=>['auth','admin']],
function(){
    Route::get('dashboard','DashboardController@index')->name('dashboard');
});

Route::group(['as'=>'author.', 'prefix'=>'author' ,'namespace'=>'Author' ,'middleware'=>['auth','author']],
function(){
    Route::get('dashboard','DashboardController@index')->name('dashboard');
});

