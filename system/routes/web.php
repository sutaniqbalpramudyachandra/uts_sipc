<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\clientcontroller;
use App\Http\Controllers\admincontroller;
use App\Http\Controllers\authcontroller;
use App\Http\Controllers\usercontroller;
use App\Http\Controllers\artikelcontroller;
use App\Http\Controllers\artikelcommentcontroller;
use App\Http\Controllers\PostController;




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



Route::prefix('client')->group(function(){
	//beranda
	Route::get('index', [clientcontroller::class, 'showIndex']);
	//kategori
	Route::get('about', [clientcontroller::class, 'showAbout']);
	//
	Route::get('contact', [clientcontroller::class, 'showContact']);
	//
	Route::get('post/{artikel}', [clientcontroller::class, 'showPost']);
});
	


Route::prefix('admin')->group(function(){
	//beranda
	Route::get('adminindex', [admincontroller::class, 'showIndex']);
	//kategori
	Route::resource('user', usercontroller::class);
	Route::resource('artikel', artikelcontroller::class);
	
});

Route::get('login', [AuthController::class, 'showLogin'])->name('login');
Route::post('login', [AuthController::class, 'loginProcess']);
Route::get('logout', [AuthController::class, 'logout']);

Route::get('/', [PostController::class, 'index']);
Route::get('/{slug}', [PostController::class, 'show']);
Route::get('/comment', [PostController::class, 'comment']);


