@extends('layouts/app')

@section('content')
    <div class="row">
        <div class="col-md-7">
            <div class="row">
                @include('bodegas/navBodega')
                <div class="col-md-12">
                    <div class="row">
                        @foreach ($productos as $producto)
                            <div class="card mb-2 col-md-4" style="width: 18rem;">
                                <img src="{{ asset('storage/' . $producto->img) }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $producto->nombre }}</h5>
                                    <p class="card-text">$@money($producto->costoUnitario)</p>
                                </div>
                                <div class="card-footer" style="display: flex; flex-direction: row; align-items: center; justify-content: space-between;">
                                <a href="{{route('productos.show', $producto)}}"><i class="far fa-eye"></i>Ver</a>
                                <a href="{{route('productos.edit', $producto)}}"><i class="fas fa-edit"></i>Editar</a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 offset-md-1">
            @include('productos/import')
        </div>
    </div>

@endsection
