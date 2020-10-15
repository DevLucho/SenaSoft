@extends('layouts/app')

@section('content')
    <div class="row">
        <div class="col-md-8">
            <div class="row">
                @include('bodegas/navBodega')
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-6">
                            <a class="btn btn-Hack btn-block" href="{{ route('productos.create') }}">Añadir producto</a>
                        </div>
                        <div class="col-md-6">
                            <form action="{{ route('import.excel') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="file" name="file" accept=".xlsx, .xls" required>

                                @error('file')
                                <small>{{ $message }}</small>
                                @enderror
                                <br>
                                <button type="submit" class="btn btn-Hack btn-block">Importar</button>
                            </form>

                        </div>
                    </div>


                    <ul>
                        @foreach ($productos as $producto)
                            <li>Ver producto: <a href="{{ route('productos.show', $producto) }}">{{ $producto->nombre }}</a>
                            </li>
                            <li>Editar producto: <a
                                    href="{{ route('productos.edit', $producto) }}">{{ $producto->nombre }}</a></li>
                            <img src="{{ asset('storage/' . $producto->img) }}" alt="{{ $producto->nombre }}">
                            <hr>
                        @endforeach
                    </ul>
                    {{ $productos->links() }}
                </div>
            </div>
        </div>
        @include('productos/create')

    </div>

@endsection
