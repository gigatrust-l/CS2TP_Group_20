<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
