@extends('layouts/app')
@section('content')
<h1>Pagina principal de productos</h1>

<a href="{{route('productos.create')}}">Crear curso</a>

<form action="{{route('import.excel')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="file" name="file" accept=".xlsx, .xls" required>

    @error('file')
        <small >{{$message}}</small>
    @enderror
    <button>Importar</button>
</form>

<ul>
    @foreach($productos as $producto)
        <li>Ver producto: <a href="{{route('productos.show',$producto)}}">{{$producto->nombre}}</a></li>
        {{-- <li>Editar producto: <a href="{{route('productos.edit',$producto)}}">{{$producto->nombre}}</a></li> --}}
        <img src="{{asset('storage/'.$producto->img)}}" alt="{{$producto->nombre}}">
    @endforeach
</ul>
{{$productos->links()}}
@endsection
