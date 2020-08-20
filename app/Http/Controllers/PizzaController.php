<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pizza;

class PizzaController extends Controller
{
    public function index()
    {
        // Get without order
        // $pizzas= Pizza::all();
        // $pizzas = Pizza::orderBy('name','desc')->get();
        // $pizzas=Pizza::where('type','hawaian')->get();
        $pizzas=Pizza::latest()->get();
    
        return view('pizzas.index',[
            'type_pizza'=>$pizzas,
        ]);
        // automatically return json format 
        // return ['content'=>'pizza'];
    }

    public function show($id)
    {
        // use $id variable for db record
        $pizza=Pizza::findOrFail($id);
        return view('pizzas.show',[
            'pizza'=>$pizza
        ]);
    }

    public function create()
    {
        return view('pizzas.create');
    }
}
