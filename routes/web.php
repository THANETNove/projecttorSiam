<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ShopFrontEndController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ServicesFrontEndController;
use App\Http\Controllers\BankController;

Route::get('/', function () {

    if (auth()->check() && auth()->user()->status == 1) {
        return view('home');
    } else {
        return view('welcome');
    }
    
 
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/shop', [ShopFrontEndController::class, 'index'])->name('shop');
Route::get('/aboutus', [AboutUsController::class, 'index'])->name('aboutus');
Route::get('/services', [ServicesFrontEndController::class, 'index'])->name('services');
Route::get('/policy', [ServicesFrontEndController::class, 'productPolicy'])->name('policy');

Route::group(['middleware' => ['is_admin']], function () {
    Route::get('/components/bank', [BankController::class, 'index'])->name('components/bank');
    Route::get('/components/bank/create', [BankController::class, 'create'])->name('components/bank/create');

    Route::post('account_bank', [BankController::class, 'store'])->name('account_bank');
});