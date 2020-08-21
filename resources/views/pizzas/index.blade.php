@extends('layouts.layout')

@section('content')
    <div class="wrapper pizza-index">
        <h1>Pizza Order</h1>
        <!-- @for($i=0; $i<count($type_pizza); $i++)
            <p> {{$type_pizza[$i]['type']}} </P>
        @endfor -->
        <!-- loop can be index(to shoq index of looping) or last(to show last looping type boolean) -->

        @foreach($type_pizza as $pizza)
            <div class="pizza-item">
                <img src="/img/pizzalogo.png" alt="Pizza Order">
                <h4><a href="/pizzas/{{$pizza->id}}">{{$pizza->name}} - {{$pizza->type}} - {{$pizza->base}}</a></h4>
            </div>
        @endforeach

        <p class="mssg">{{session('mssg')}}</p>
    </div>
@endsection