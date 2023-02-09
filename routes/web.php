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
    return view('index');
});

Route::post('login',[App\Http\Controllers\LoginController::class,'login']);

Route::group(['middleware'=>'checkUser'],function(){
Route::get('logout',[App\Http\Controllers\LoginController::class,'logout']);

Route::get('blog',[App\Http\Controllers\BlogController::class,'index']);
Route::get('blog-create',[App\Http\Controllers\BlogController::class,'create']);
Route::post('blog-store',[App\Http\Controllers\BlogController::class,'store']);

Route::get('comments',[App\Http\Controllers\CommentController::class,'index']);
Route::get('submit-comment',[App\Http\Controllers\CommentController::class,'store_comment']);
Route::get('fetch-comments',[App\Http\Controllers\CommentController::class,'fetch']);
Route::get('store-reply',[App\Http\Controllers\CommentController::class,'store_reply']);
});