<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;

// Route::get('/', function () {
//     //return view('home');
// });
Route::get('/', 'HomeController@index')->name('home');

Route::get('admin/', function () {
    return redirect('admin/item');
})->name('admin');

Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {
    Route::get('user', 'UserController@index');
    Route::get('user/create', 'UserController@create');

    Route::get('item', 'ItemController@index')->name('admin.item');
    Route::get('item/show/{id}', 'ItemController@show')->name('admin.item.show');
    Route::get('item/create', 'ItemController@create')->name('admin.item.create');
});

Route::group([], function () {
    Route::get('item', 'ItemController@index')->name('item');
    Route::get('item/show/{id}', 'ItemController@show')->name('item.show');
});

Route::group([], function () {
    Route::get('cart', 'CartController@index')->name('cart');
    Route::get('cart/add/{id}', 'CartController@add')->name('cart.add');
    Route::get('cart/remove/{id}', 'CartController@remove')->name('cart.remove');
    Route::get('cart/clear', 'CartController@clear_cart')->name('cart.clear');
    Route::post('cart/confirm', 'CartController@confirm')->name('cart.confirm');
    Route::post('cart/parchase', 'CartController@parchase')->name('cart.parchase');
    Route::get('cart/complete', 'CartController@complete')->name('cart.complete');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
