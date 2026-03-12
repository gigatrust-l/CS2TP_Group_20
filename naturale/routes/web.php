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

Route::get('/products', \App\Livewire\Naturale\Storefront\Products::class);

require __DIR__.'/auth.php';
