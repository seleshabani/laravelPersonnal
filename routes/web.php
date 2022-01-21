<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ImageController;
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
Route::get('/image/{filename}', [ImageController::class,'display'])->name('displayImage');
