<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\LogoutController;




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

Route::get('/', function () {
    return view('frontend.index');
});

Route::get('logout-user', [LogoutController::class, 'logout'])->name('logout-user');
Route::get('/', [CategoryController::class, 'getcategory']);
Route::get('shop/{id}', [ProductController::class, 'getproduct']);
Route::get('cart', [CartController::class, 'cart'])->name('cart');
Route::get('add-to-cart/{id}', [CartController::class, 'addToCart'])->name('add-to-cart');
Route::patch('update-cart', [CartController::class, 'update'])->name('update.cart');
Route::delete('remove-from-cart', [CartController::class, 'remove'])->name('remove.from.cart');
Route::get('showCheckout',[CheckoutController::class, 'showCheckout'])->name('showCheckout')->middleware('auth');
Route::post('place_Order',[CheckoutController::class, 'placeOrder'])->name('place_Order');
Route::get('paymentMethod',[CheckoutController::class, 'paymentMethod'])->name('paymentMethod');
Route::get('payment-success',[CheckoutController::class, 'paymentSuccess'])->name('payment-success');






Route::view('checkout', 'frontend.checkout');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth']], function () {

    Route::resource('product', ProductController::class);
    Route::resource('categories', CategoryController::class);

});
