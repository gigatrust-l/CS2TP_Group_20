<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\IngredientController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\GoogleController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;

Route::get('/chat', [ChatController::class, 'index']);
Route::post('/chat/send', [ChatController::class, 'sendMessage']);
Route::post('/chat/start', [ChatController::class, 'startChat']);
Route::post('/chat/end', [ChatController::class, 'endChat']);

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/products', [ProductController::class, 'index'])
    ->name('products');

Route::get('/products/{pid}', [ProductController::class, 'show'])
    ->whereNumber('pid')
    ->name('products.show');

Route::get('/products/{any}', function () {return redirect('/products');});

Route::get('/ingredients', function () {
    return view('/ingredients/ingredients');
})->name('/ingredients');

Route::get('/ingredients/{slug}', [IngredientController::class, 'show']);

Route::get('/dashboard', [AdminController::class, 'redirectUser'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::get('/portal', [AdminController::class, 'index'])
    ->middleware(['auth'])
    ->name('portal');

//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth'])->name('dashboard');

Route::middleware(['auth', 'IsAdmin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');
    Route::post('/update-stock/{pid}', [AdminController::class, 'updateStock'])->name('stock.update');

});

Route::get('/orders', [OrderController::class, 'index'])->middleware(['auth'])->name('orders');
Route::get('/orders/{order}', [OrderController::class, 'show'])->middleware(['auth'])->name('orders.show');

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

Route::get('/contact', function () {
    return view('contact_form');
});
Route::post('/contact', [ContactController::class, 'store'])->name('contact.submit');

Route::get('/about', function () {
    return view('about_us');
});

Route::controller(GoogleController::class)->group(function () {
    Route::get('auth/google', 'redirectToGoogle')->name('auth.google');
    Route::get('authorised/google/callback', 'handleGoogleCallback');
});

Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
 
    return redirect('/home');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();
 
    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');