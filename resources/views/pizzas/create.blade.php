@extends('layouts.app')

@section('content')
    <div class="wrapper create-pizza">
        <h1>Create New Pizza</h1>
        <form action="/pizzas" method="POST">
            @csrf
            <label for="name">Your Name :</label>
            <input type="text" id="name" name="name">
            
            <label for="type">Type of Pizza :</label>
            <select name="type" id="type">
                <option value="margarita">Margarita</option>
                <option value="hawaian">Hawaian</option>
                <option value="supreme">Supreme</option>
                <option value="vulcano">Vulcano</option>
            </select>

            <label for="type">Choose Base :</label>
            <select name="base" id="base">
                <option value="cheesy chust">cheesy chust</option>
                <option value="garlic crust">garlic crust</option>
                <option value="thin and crispy">thin and crispy</option>
                <option value="thick">thick</option>
            </select>

            <fieldset>
                <label for="toppings">Toping</label> <br/>
                <input type="checkbox" name="toppings[]" value="mushrooms">Mushrooms <br/>
                <input type="checkbox" name="toppings[]" value="Mozarella">Mozarella <br/>
                <input type="checkbox" name="toppings[]" value="Garlic">Garlic <br/>
            </fieldset>

            <input type="submit" value="order">
        </form>
    </div>
@endsection