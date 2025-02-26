<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Dashboard;
use App\Livewire\KasirTransaction;
use App\Livewire\ManajementFinance;
use App\Livewire\ManajementProduct;
use App\Livewire\Settings;

Route::get('/dashboard', Dashboard::class);
Route::get('/transaction', KasirTransaction::class);
Route::get('/product', ManajementProduct::class);
Route::get('/finance', ManajementFinance::class);
Route::get('/settings', Settings::class);


