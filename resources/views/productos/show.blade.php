@extends('layouts/app')
@section('content')
    <a href="{{route('productos.index')}}">Volver</a>
    <h1>Producto: {{$producto->nombre}}</h1>
    <br>
    <p><strong>Nombre: {{$producto->nombre}}</strong></p>
    <p><strong>Costo unitario: $@money($producto->costoUnitario) </strong></p>
    <p><strong>Costo con IVA includio: $@money(($producto->costoUnitario)*0.19+$producto->costoUnitario) </strong></p>

    <img src="{{asset('storage/'.$producto->img)}}" alt="{{$producto->nombre}}">

    <form action="{{route('productos.destroy', $producto)}}" method="POST">
        @csrf
        @method('delete')
        <button>Eliminar</button>
    </form>
    <a href="{{route('productos.edit',$producto)}}">Editar</a>
@endsection
