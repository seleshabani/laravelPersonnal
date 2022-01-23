<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\SecurityController;
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

Route::get('/',[BlogController::class,'home'])->name('home');
Route::get('/sites/{slug}',[BlogController::class,'categorie'])->name('byCategorie');
Route::get('/sites/{slug}/{newsSlug}',[BlogController::class,'single'])->name('single');
Route::post('/sites/{slug}/{newsSlug}',[BlogController::class,'single'])->name('single.comment');
Route::get('/search',[BlogController::class,'search'])->name('search');
Route::get('/storage/app/{filename}', [ImageController::class,'display'])->name('displayImage');
Route::get('/login/choice', [BlogController::class,'login'])->name('loginMode');
Route::get('/users/login', [SecurityController::class,'login'])->name('login');
Route::post('/users/login',[SecurityController::class,'storeLogin'])->name('login.store');
Route::get('/register/choice', [BlogController::class,'register'])->name('registerMode');
Route::get('/users/register', [SecurityController::class,'register'])->name('register');
Route::post('/users/register',[SecurityController::class,'storeRegister'])->name('register.store');
Route::get('/users/logout',[SecurityController::class,'logOut'])->name('logOut');
