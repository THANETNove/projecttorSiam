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
use App\Http\Controllers\ServiceBackEndController;
use App\Http\Controllers\OurWorkController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {

    if (auth()->check() && auth()->user()->status == 1) {
        return redirect('product/product_all');
    } else {

        $imgSlide = DB::table('slide_homes')
            ->get();


        // ดึงหมวดหมู่ที่ไม่ซ้ำ
        $rawCategories = DB::table('products')
            ->where('status_sell', 'on')
            ->selectRaw('DISTINCT JSON_UNQUOTE(JSON_EXTRACT(check_manu, "$[*]")) as category')
            ->get()
            ->pluck('category');


        $categories = collect();
        foreach ($rawCategories as $rawCategory) {
            $decodedCategories = json_decode($rawCategory);
            if (is_array($decodedCategories)) {
                foreach ($decodedCategories as $category) {
                    if (!$categories->contains($category)) {
                        $categories->push($category);
                    }
                }
            }
        }

        $products = collect();

        foreach ($categories as $category) {
            $categoryProducts = DB::table('products')
                ->where('status_sell', 'on')
                ->whereRaw('JSON_CONTAINS(check_manu, ?)', [json_encode([$category])]) // ใช้ array เพื่อความถูกต้อง
                ->inRandomOrder()
                ->select('id', 'image', 'product_name', 'price', 'price_sale', 'status_sale', DB::raw("'$category' as category")) // เพิ่ม category
                ->distinct()
                ->limit(4)
                ->get();

            $products = $products->merge($categoryProducts);
        }
        $uniqueProducts = $products->unique('id');
        $limitedProducts = $uniqueProducts->take(16);

        $data = DB::table('banks')
            ->get();


        return view('welcome', ['imgSlide' =>  $imgSlide, 'products' => $limitedProducts, 'data' => $data]);
    }
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/shop/{name}', [ShopFrontEndController::class, 'index'])->name('shop');
Route::get('/buy-now', [ShopFrontEndController::class, 'buyNow'])->name('buy-now');
Route::post('/confirm-purchase', [ShopFrontEndController::class, 'store'])->name('confirm-purchase');
Route::get('/filterByBrand/{name}', [ShopFrontEndController::class, 'filterByBrand'])->name('filterByBrand');
Route::get('/particulars/{name}/{id}', [ShopFrontEndController::class, 'show'])->name('particulars');
Route::get('/aboutus', [AboutUsController::class, 'index'])->name('aboutus');
Route::get('/services', [ServicesFrontEndController::class, 'index'])->name('services');
Route::get('/our-work', [ServicesFrontEndController::class, 'ourWork'])->name('our-work');
Route::get('/worth-knowing', [ServicesFrontEndController::class, 'worthKnowing'])->name('worth-knowing');
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

    Route::get('service/index', [ServiceBackEndController::class, 'index'])->name('service/index');
    Route::get('service/create', [ServiceBackEndController::class, 'create'])->name('service/create');
    Route::post('service/store', [ServiceBackEndController::class, 'store'])->name('service/store');
    Route::get('service/edit/{id}', [ServiceBackEndController::class, 'edit'])->name('service/edit');
    Route::put('service/update/{id}', [ServiceBackEndController::class, 'update'])->name('service/update');
    Route::get('service/our-work/index', [OurWorkController::class, 'index'])->name('service/our-work/index');
});

Route::fallback(function () {
    return view('404');
});
