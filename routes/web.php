<?php

use App\Http\Controllers\FrontEndController;
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



Route::get('/',[FrontEndController::class,'index'])->name('index');
Route::get('/about-us',[FrontEndController::class,'aboutUs'])->name('about');
Route::get('/home2',[FrontEndController::class,'home2'])->name('index2');
Route::get('/blogs',[FrontEndController::class,'blogs'])->name('blogs');
Route::get('/blog/details',[FrontEndController::class,'blogDetails'])->name('blog.details');
Route::get('/menu',[FrontEndController::class,'menu'])->name('menu');
Route::get('/menu/list',[FrontEndController::class,'menuList'])->name('menu.list');
Route::get('/shop',[FrontEndController::class,'shop'])->name('shop');
Route::get('/prodcut/details',[FrontEndController::class,'prodcutDetails'])->name('prodcut.details');
Route::get('/cart',[FrontEndController::class,'cart'])->name('cart');
Route::get('/checkout',[FrontEndController::class,'checkout'])->name('checkout');
Route::get('/contact',[FrontEndController::class,'contact'])->name('contact');


