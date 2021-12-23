<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\view;
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
Route::get('/',[view::class,"index"])->name("index");
Route::get('/contact',[view::class,"contact"])->name("contact");
Route::get('/about',[view::class,"about"])->name("about");
Route::get('/winner',[view::class,"winner"])->name("winner");
Route::get('/top',[view::class,"top"])->name("top");