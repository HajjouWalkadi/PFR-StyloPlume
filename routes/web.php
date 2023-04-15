<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductStatisticsController;

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

Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/redirect',[HomeController::class,'index'])->name('home');

// Route::get('/userpage', function () {
//     return view('home.userPage');
// })->name('userPage');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/contact', function () {
    return view('home.contact');
})->name('contactPage');

Route::get('/all_products', function () {
    return view('');
})->name('productPage');


Route::get('/about', function () {
    return view('home.about');
})->name('aboutPage');

Route::get('/get_product',[ProductController::class,'index'])->name('get_product');


// Route::get('/redirect',[HomeController::class,'redirect']);
Route::get('/view_category',[CategoryController::class,'view_category']);
Route::post ('/add_category',[CategoryController::class,'add_category']);

Route::get ('/delete_category/{id}',[CategoryController::class,'delete_category']); 
Route::get('/view_product',[ProductController::class,'view_product']);
Route::post ('/add_product',[ProductController::class,'add_product']);

Route::get('/show_product',[ProductController::class,'show_product'])->name('show_product');
Route::get('/delete_product/{id}',[ProductController::class,'delete_product']);
Route::get('/update_product/{id}',[ProductController::class,'update_product']);
Route::post('/update_product_confirm/{id}',[ProductController::class,'update_product_confirm']);


Route::get('/order',[OrderController::class,'order']);

Route::get('/delivered/{id}',[OrderController::class,'delivered']);



Route::get('/product_details/{id}',[HomeController::class,'product_details']);

Route::post('/add_cart/{id}',[CartController::class,'add_cart']);

Route::get('/cart',[CartController::class,'cart']);

Route::get('/retire_cart/{id}',[CartController::class,'retire_cart']);

Route::get('/cash_order',[OrderController::class,'cash_order']);

Route::get('/stripe/{totalprice}',[HomeController::class,'stripe']);

Route::post('stripe/{totalprice}',[HomeController::class,'stripePost'])->name('stripe.post');

Route::get('/admindashboard', [ProductStatisticsController::class, 'index']);








