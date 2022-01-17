@extends('layouts.app')

@section('titulo', 'Home')

@section('contenido')


<?php

$data = [
    ["nombre" => "jeffer","apellido" => "cardenas"],
    ["nombre" => "selena","apellido" => "quiroga"],
    ["nombre" => "selena","apellido" => "quiroga"],
    ["nombre" => "selena","apellido" => "quiroga"],
    ["nombre" => "selena","apellido" => "quiroga"]
];

?>


<div>
    <h1>HOME</h1>
</div>

@foreach ($data as $item)
    <p> <strong> {{ $item['nombre'] ." - ". $item['apellido'] }} </strong> </p>
@endforeach


@endsection
