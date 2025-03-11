@extends('layouts.plantilla')
@section('title','Productos')
@section('content')

<h5>listado principal de productos</h5>

<table class="table table-dark table-hover">

    <thead>
        <tr>
            <th>id</th>
            <th>Codigo</th> 
            <th>Nombre</th>
            <th>Codigo</th> 
            <th>cantidad</th>
            <th>unidad</th> 
        </tr>
    </thead>
    <tbody>
        @foreach ($productos as $producto)
        {{-- //arreglo modificado --}}
        {{-- esta conectado al controlador normalito  --}}
        <tr>
            <td>{{$producto->id}}</td>
            <td>{{$producto->codigo}}</td>
            <td>{{$producto->nombre}}</td>
            <td>{{$producto->codigo}}</td>
            <td>{{$producto->cantidad}}</td>
            <td>{{$producto->unidad}}</td>
        </tr>
        @endforeach
    </tbody>    
</table>

@endsection