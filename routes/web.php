<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\login;

// index
Route::get('/',[ProductsController::class, 'index']);
// dashboard
Route::get('/dashboard',[AdminController::class, 'index'])->middleware(login::class);
Route::post('/dashboard',[AdminController::class, 'store']);
Route::get('/dashboard/products',[AdminController::class, 'show'])->middleware(login::class);
Route::get('/dashboard/order',[OrderController::class, 'show'])->middleware(login::class);
Route::get('/dashboard/create',[AdminController::class, 'create'])->middleware(login::class);
Route::get('/dashboard/{dashboard}/edit',[AdminController::class, 'edit'])->middleware(login::class);
Route::put('/dashboard/{dashboard}',[AdminController::class, 'update']);
Route::delete('/dashboard/{dashboard}',[AdminController::class, 'destroy']);

// login
Route::get('/login',[LoginController::class, 'index'])->middleware('guest');
Route::post('/login',[LoginController::class, 'login']);
Route::post('/logout',[LoginController::class, 'logout']);
//order
Route::get('/order',[OrderController::class,'index']);
Route::post('/order',[OrderController::class, 'store']);
Route::get('dashboard/order/{order}/edit',[OrderController::class, 'edit']);
Route::put('dashboard/order/{order}', [OrderController::class,'update']);
Route::delete('dashboard/order/{order}', [OrderController::class,'destroy']);
Route::get('/order/terimakasih', function() {
    return view('ucapan');
});


