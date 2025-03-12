<?php

use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function() { return view('dashboard'); });

Route::get('/transaction', function() { return view('kasir-transaction'); });

Route::get('/kategori', function() { return view('kategori'); });

Route::get('/product', function() { return view('product'); });

Route::get('/pemasukan', function() { return view('pemasukan'); });

Route::get('/pengeluaran', function() { return view('pengeluaran'); });

Route::get('/payment-method', function() { return view('payment-method'); });

Route::get('/roles', function() { return view('roles'); });

Route::get('/printer-settings', function() { return view('printer-settings'); });

Route::get('/users', function() { return view('users'); });






