<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{
    // if you wanna connect table except pizzas(plural)
    // protected $table='pizzas';
    protected $casts=[
        'toppings' => 'array'
    ];
}
