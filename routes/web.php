<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ShopFrontEndController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ServicesFrontEndController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/shop', [ShopFrontEndController::class, 'index'])->name('shop');
Route::get('/aboutus', [AboutUsController::class, 'index'])->name('aboutus');
Route::get('/services', [ServicesFrontEndController::class, 'index'])->name('services');
Route::get('/policy', [ServicesFrontEndController::class, 'productPolicy'])->name('policy');