@extends('layouts/app')
@section('content')
    <form action="{{route('productos.update',$producto)}}" method="POST" enctype="multipart/form-data">
        @csrf <!-- token -->
        @method('put')
            <label for="">Nombre producto:</label>
            <br>
            <input type="text" name="nombre" value="{{old('nombre',$producto->nombre)}}" id="">
            <br>
            @error('nombre')
                <small>{{$message}}</small>
                <br>
            @enderror
        <br>
        <label for="">Cantidad ingresada:</label>
            <br>
            <input readonly type="number" name="cantidadMinima" value="{{old('cantidadMinima',$producto->cantidadMinima)}}">
        @error('cantidadMinima')
        <br>
            <small>{{$message}}</small>
            <br>
        @enderror
        <br>
        <label for="">Valor unitario:</label>
            <br>
            $<input type="number" name="costoUnitario"  value="{{old('costoUnitario',$producto->costoUnitario)}}" id="">
        @error('costoUnitario')
        <br>
            <small>{{$message}}</small>
            <br>
        @enderror
        <br>
        <input type="file" name="img" id="img" accept="image/" >
        @error('img')
            <small class="text-danger">{{$message}}</small>
        @enderror
        <br>
        <hr>
        <button type="submit">Actualizar</button>
    </form>
@endsection
