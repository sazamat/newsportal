<?php

use App\Http\Controllers\NewsController;
use App\Http\Controllers\HomeController;

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

Route::get('/',[HomeController::class,'index']);

Route::get('/news',[NewsController::class,'index']);
Route::post('/news',[NewsController::class,'store']);
Route::get('/news/create',[NewsController::class,'create']);
Route::get('/news/{news}/edit',[NewsController::class,'edit']);
Route::put('/news/{news}',[NewsController::class,'update']);
Route::delete('/news/{news}', [NewsController::class, 'destroy']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
