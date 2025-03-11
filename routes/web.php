<?php

use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function() { return view('dashboard'); });

Route::get('/transaction', function() { return view('kasir-transaction'); });

Route::get('/kategori', function() { return view('kategori'); });

Route::get('/product', function() { return view('manajement-product'); });

Route::get('/finance', function() { return view('manajement-finance'); });

Route::get('/settings', function() { return view('settings'); });


