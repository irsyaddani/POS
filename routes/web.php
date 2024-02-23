<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SalesController;

Route::get('/', function () {
    return view('welcome');
});

// Home Controller
// Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', [HomeController::class, 'home']);

Route::prefix('category')->group(function () {
    Route::get('/food-beverage', [ProductsController::class, 'foodbeverage']);
    Route::get('/beauty-health', [ProductsController::class, 'beautyhealth']);
    Route::get('/home-care', [ProductsController::class, 'homecare']);
    Route::get('/baby-kid', [ProductsController::class, 'babykid']);
});

Route::get('/user/{id}/name/{name}', [UserController::class, 'index']);

Route::get('/sales', [SalesController::class, 'index']);





