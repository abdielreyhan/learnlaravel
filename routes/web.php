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

Route::get('/pizzas', function () {
    $pizza=[
        ['type'=>'hawaian','base'=>'cheese','price'=>1],
        ['type'=>'Indonesia','base'=>'cheese','price'=>15],
        ['type'=>'Supreme','base'=>'cheese','price'=>20],
    ];

    return view('pizzas',[
        'type_pizza'=>$pizza,
        'name'=>request('name'),
        'age'=>request('age')
    ]);
    // automatically return json format 
    // return ['content'=>'pizza'];
});

Route::get('/pizzas/{id}', function ($id) {

    // use $id variable for db record
    return view('details',[
        'id'=>$id
    ]);
});
