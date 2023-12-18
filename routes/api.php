<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactControlller;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Login;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RecipesController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::middleware('auth:api')->group(function () {
    // Your protected routes go here
});



Route::get('/login',[LoginController::class,'login'])->name('login');
Route::post('/checklogin',[LoginController::class,'checklogin'])->name('checklogin');

Route::get('/logout',[LoginController::class,'detry'])->name('logout');

Route::get('/home',[HomeController::class,'home'])->name('home');

Route::get('/recipe_detail/{id}',[DetailController::class,'recipe_detail'])->name('recipe_detail');

Route::get('/recipes',[RecipesController::class,'recipes'])->name('recipes');

Route::get('/contact',[ContactControlller::class,'contact'])->name('contact');

Route::get('/about',[AboutController::class,'about'])->name('about');

Route::get('/profile',[ProfileController::class,'profile'])->name('profile');
