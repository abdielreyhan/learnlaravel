@extends('layouts.layout')

@section('content')
<div class="wrapper pizza-detail">
    <h1>Order For {{$pizza->name}}</h1>
    <p class="type">Type - {{$pizza->type}}</p>
    <p class="base">Base - {{$pizza->base}}</p>
</div>
<a href="/pizzas" class="back">Back to all pizza</a>
@endsection