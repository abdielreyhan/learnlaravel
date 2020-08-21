@extends('layouts.layout')

@section('content')
<div class="wrapper pizza-detail">
    <h1>Order For {{$pizza->name}}</h1>
    <p class="type">Type - {{$pizza->type}}</p>
    <p class="base">Base - {{$pizza->base}}</p>
    <p class="toppings">Toping </p>
    <ul>
        @foreach($pizza->toppings as $toppings)
            <li>{{$toppings}}</li>
        @endforeach
    </ul>
    <form action="/pizzas/{{$pizza->id}}" method="POST">
        @csrf
        @method('DELETE')
        <button>Complete Order</button>
    </form>
</div>
<a href="/pizzas" class="back">Back to all pizza</a>
@endsection