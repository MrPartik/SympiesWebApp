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


Auth::routes();

//error page
Route::get('/400',function(){
    return view('errorPage.400');
});

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/','checkLoggedController@checkLogged')->name('Welcome');

Auth::routes();

Route::group(['middleware' => ['member']], function (){

    Route::get('/member', function () {
        return view('member.index');
    })->name('Member');
});

Route::group(['middleware' => ['admin']], function () {


    Route::get('shop/dashboard', function () {
        return view('admin.dashboard.index');
    })->name('Dashboard');

    Route::get('shop/ledger', function () {
        return view('admin.ledger.index');
    })->name('Ledger');

    Route::get('shop/inventory', function () {
        return view('admin.inventory.index');
    })->name('Inventory');

    Route::get('shop/customer', function () {
        return view('admin.customer.index');
    })->name('Customer');

});

