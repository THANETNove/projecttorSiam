<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ShopFrontEndController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ServicesFrontEndController;
use App\Http\Controllers\BankController;
use App\Http\Controllers\SlideHomeController;
use App\Http\Controllers\ManuBarController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\DB;

Route::get('/', function () {

    if (auth()->check() && auth()->user()->status == 1) {
        return redirect('product/product_all');
    } else {

        $imgSlide = DB::table('slide_homes')
        ->get();

        return view('welcome',['imgSlide' =>  $imgSlide]);
    }
    
 
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/shop', [ShopFrontEndController::class, 'index'])->name('shop');
Route::get('/aboutus', [AboutUsController::class, 'index'])->name('aboutus');
Route::get('/services', [ServicesFrontEndController::class, 'index'])->name('services');
Route::get('/policy', [ServicesFrontEndController::class, 'productPolicy'])->name('policy');

Route::group(['middleware' => ['is_admin']], function () {
    //BankController
    Route::get('/components/bank', [BankController::class, 'index'])->name('components/bank');
    Route::get('/components/bank/create', [BankController::class, 'create'])->name('components/bank/create');
    Route::post('account_bank', [BankController::class, 'store'])->name('account_bank');
    Route::get('components/bank/destroy/{id}', [BankController::class, 'destroy'])->name('components/bank/destroy');
    
    //SlideHomeController
    Route::get('components/slide', [SlideHomeController::class, 'index'])->name('components/slide');
    Route::get('components/slide/create', [SlideHomeController::class, 'create'])->name('components/slide/create');
    Route::post('imageSlide', [SlideHomeController::class, 'store'])->name('imageSlide');
    Route::get('components/slideHome/destroy/{id}', [SlideHomeController::class, 'destroy'])->name('components/slideHome/destroy');
    
    //ManuBarController
    Route::get('components/manuBar', [ManuBarController::class, 'index'])->name('components/manuBar');
    Route::get('components/manuBar/create/{id}', [ManuBarController::class, 'create'])->name('components/manuBar/create');
    Route::post('account_manuBar', [ManuBarController::class, 'store'])->name('account_manuBar');
    Route::get('components/slideHome/edit/{id}', [ManuBarController::class, 'edit'])->name('components/slideHome/edit');
    Route::put('update_manuBar/{id}', [ManuBarController::class, 'update'])->name('update_manuBar');
    Route::get('components/slideHome/destroy/{id}', [ManuBarController::class, 'destroy'])->name('components/slideHome/destroy');
    Route::post('components/manuBar/search', [ManuBarController::class, 'search'])->name('components/manuBar/search');
    Route::get('components/manuBar/search', [ManuBarController::class, 'search'])->name('components/manuBar/search');


    Route::get('product/product_all', [ProductController::class, 'index'])->name('product/product_all');
    Route::get('product/product_all/create', [ProductController::class, 'create'])->name('product/product_all/create');
    Route::post('product/store', [ProductController::class, 'store'])->name('product/store');
    Route::get('product/edit/{id}', [ProductController::class, 'edit'])->name('product/edit');
    Route::put('product/update/{id}', [ProductController::class, 'update'])->name('product/update');
    Route::get('product/destroy/{id}', [ProductController::class, 'destroy'])->name('product/destroy');
    Route::post('product/search', [ProductController::class, 'search'])->name('product/search');
    Route::get('product/search', [ProductController::class, 'search'])->name('product/search');

});

Route::fallback(function() {
    return view('404'); 
});