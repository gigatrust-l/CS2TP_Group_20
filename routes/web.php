<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;

Route::get('/', function () {
    return view('index');
});

Route::get('/products', function () {
    return view('products');
});

Route::get('/products/{any}', function () {
    return view('product');
});

Route::get('/product}', function () {
    return view('products');
});

Route::get('/contact', function () {
    return view('contact_form');
});
Route::post('/contact', [\App\Http\Controllers\ContactController::class, 'store'])->name('contact.submit');

Route::get('/about', function () {
    return view('about_us');
});

Route::get('/dashboard', [ProfileController::class, 'edit'])->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/orders', [OrderController::class, 'index'])->middleware(['auth'])->name('orders');

Route::get('/orders/{order}', [OrderController::class, 'show'])
    ->middleware(['auth'])
    ->name('orders.show');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/cart', [CartController::class, 'viewCart'])->name('cart.view');
Route::post('/product', [CartController::class, 'addItem'])->name('cart.add');
Route::post('/cart/update', [CartController::class, 'updateItemQuantity'])->name('cart.update');
Route::post('/cart/remove/{any}', [CartController::class, 'removeItem'])->name('cart.remove');
Route::post('/cart/clear', [CartController::class, 'clearCart'])->name('cart.clear');

Route::get('/checkout', [CheckoutController::class, 'viewCheckout'])->name('checkout.view');
Route::post('/checkout', [CheckoutController::class, 'confirmCheckout'])->name('checkout.confirm');
Route::get('/checkout/complete', [CheckoutController::class, 'completeCheckout'])->name('checkout.complete');