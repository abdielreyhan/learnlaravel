<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('admin/pizzas', 'PizzaController@index')->name('pizzas.index')->middleware('auth');
Route::get('order/pizzas/create', 'PizzaController@create')->name('pizzas.create');
Route::post('order/pizzas', 'PizzaController@store')->name('pizzas.store');
Route::get('admin/pizzas/{id}', 'PizzaController@show')->name('pizzas.show')->middleware('auth');
Route::delete('admin/pizzas/{id}', 'PizzaController@destroy')->name('pizzas.destroy')->middleware('auth');



Auth::routes([
    'register'=>false
]);

Route::get('/home', 'HomeController@index')->name('home');
