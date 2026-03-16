<?php

use Illuminate\Support\Facades\Route;

//Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::get('/', \App\Livewire\Naturale\Storefront\Index::class);

Route::get('/products', \App\Livewire\Naturale\Storefront\Products::class)->name('products');

Route::get('/products/{slug}', \App\Livewire\Naturale\Storefront\Product::class);

Route::get('/cart', \App\Livewire\Naturale\Storefront\CartIndex::class)->name('cart.index');

Route::get('/checkout', \App\Livewire\Naturale\Storefront\CheckoutPage::class)->name('checkout');
