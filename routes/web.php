<?php

use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function() { return view('page-content.dashboard'); });

Route::get('/transaction', function() { return view('page-content.kasir-transaction'); });

Route::get('/kategori', function() { return view('page-content.kategori'); });

Route::get('/product', function() { return view('page-content.product'); });

Route::get('/pemasukan', function() { return view('page-content.pemasukan'); });

Route::get('/pengeluaran', function() { return view('page-content.pengeluaran'); });

Route::get('/payment-method', function() { return view('page-content.payment-method'); });

Route::get('/roles', function() { return view('page-content.roles'); });

Route::get('/printer-settings', function() { return view('page-content.printer-settings'); });

Route::get('/users', function() { return view('page-content.users'); });

Route::get('/test', function() { return view('page-content.test'); });







