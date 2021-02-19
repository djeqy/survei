<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\UsersController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get("/",[PagesController::class,'index']);
//User
// Route::get("/users",[UsersController::class,'index']);
// Route::get("/users/create",[UsersController::class,'create']);
// Route::post("/users",[UsersController::class,'store']);
// Route::get("/users/{user}",[UsersController::class,'show']);
// Route::delete('/users/{user}',[UsersController::class,'destroy']);
// Route::get('/users/{user}/edit',[UsersController::class,'edit']);
// Route::patch('/users/{user}',[UsersController::class,'update']);
Route::resource('/users', UsersController::class);