@extends('layouts.master')

@section('content')
    <!-- Show  -->
    <div class="contenedor">
        <h1 style="color: black"> Show Page {{ $id }} </h1>
        <br>
    </div>
    <div class="contenedor">
        <h2 style="color: rgb(194, 221, 72); width:50px"> {{$lugar['name']}}</h2>
        <br>
        <img style='width:500px'src="{{ $lugar['imagen'] }}">
        <br>
        <a style="color:rgb(19, 115, 179)" href='{{url('lugares/edit/' . $id)}}'>Modificar lugar</a>
    </div>
    @stop
