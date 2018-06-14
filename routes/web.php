<?php

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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/dashboard',function(){
    return view('dashboard.index')->with('title','Dashboard');
})->name('Dashboard');

Route::get('/ledger',function(){
    return view('ledger.index')->with('title','Ledger');
})->name('Ledger');

Route::get('/inventory',function(){
    return view('inventory.index')->with('title','Inventory');
})->name('Inventory');

Route::get('/customer',function(){
    return view('customer.index')->with('title','Customer');
})->name('Customer');

