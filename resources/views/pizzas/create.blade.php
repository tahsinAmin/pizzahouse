@extends('layouts.layout')

@section('content')
<div class="wrapper create-pizza">
    <h1>Create a New Pizza</h1>
    <form action="/pizzas" method="POST">
        @csrf
        <label for="name">Your name:</label>
        <input type="text" id="name" name="name">
        <label for="type">Choose pizza type:</label>
        <select name="type" id="type">
            <option value="margherita">Margherits</option>
            <option value="hawaiian">Hawaiian</option>
            <option value="veg supreme">Veg Supreme</option>
            <option value="volcano">Volcano</option>
        </select>
        <label for="type">Choose base type:</label>
        <select name="base" id="base">
            <option value="cheezy crust">Cheezy crust</option>
            <option value="garlic crust">Garlic crust</option>
            <option value="thin and crispy">Thin and crispe</option>
            <option value="thick">Thick</option>
        </select>
        <fieldset>
            <label for="">Extra toppings: </label>
            <input type="checkbox" name="toppings[]" value="mashrooms">Mashrooms<br/>
            <input type="checkbox" name="toppings[]" value="peppers">peppers<br/>
            <input type="checkbox" name="toppings[]" value="garlic">garlic<br/>
            <input type="checkbox" name="toppings[]" value="olives">olives<br/>
        </fieldset>
        <input type="submit" value="Order Pizza">
    </form>
</div>
@endsection