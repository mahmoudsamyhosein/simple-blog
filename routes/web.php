<?php

use App\Http\Controllers\commentscontroller;
use App\Http\Controllers\postscontroller;
use App\Models\post;
use Illuminate\Support\Facades\Route;
use Illuminate\support\Facades\DB;
use Carbon\Carbon;
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
Route::resource("/",postscontroller::class);
Route::resource("posts",postscontroller::class);
Route::post("/posts/{post}/comments",[commentscontroller::class,"store"]);