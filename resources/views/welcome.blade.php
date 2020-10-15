@extends('layouts/app')
@section('content')
    <h1 class="text-center">Bienvenidos a Hackathon</h1>
    <hr style="border-color: #">
    <div class="row">
        <div class="card" style="width: 45%; margin-right: 5%;">
            <img src="{{ asset('storage/Empresa.jpg') }}" class="card-img-top" style="height: 20rem;" alt="...">
            <div class="card-body">
                <a href='https://www.freepik.es/vectores/negocios' class="card-text"><small class="text-muted">Ilustración
                        de pikisuperstar</small></a>
                <h5 class="card-title"><b>Para las empresas</b></h5>
                <p class="card-text"><b>¿Qué les brinda Hackathon?</b></p>
            </div>
            <div class="card-header">
                Vincular las sucursales que conforman a tu empresa.
            </div>
            <div class="card-header">
                Controlar el inventario, tanto entradas como salidas.
            </div>
            <div class="card-header">
                Facturación digital, independiente en cada sucursal.
            </div>
            <div class="card-header">
                Asociación directa a proveedores.
            </div>
            <div class="card-footer"
                style="display: flex; flex-direction: row; align-items: center; justify-content: space-around;">

                @if (Route::has('register'))
                    <a class="btn btn-Hack" href="{{ route('empresas.create') }}">Registrarse</a>
                @endif

            </div>
        </div>
        <div class="card" style="width: 45%;">
            <img src="{{ asset('storage/Proveedor.jpg') }}" class="card-img-top" alt="..." style="height: 20rem;">
            <div class="card-body">
                <a href='https://www.freepik.es/vector-premium/productos-alimenticios-estante-tienda-ilustracion-venta-estantes-supermercado-escaparate-tienda-alimentos-productos-comida-empaquetada-eleccion_5954787.htm'
                    class="card-text"><small class="text-muted">Ilustración de tartilla</small></a>
                <h5 class="card-title"><b>Para los proveedores</b></h5>
                <p class="card-text"><b>¿Qué les brinda Hackathon?</b></p>
            </div>
            <div class="card-header">
                Creación de catalogo de productos.
            </div>
            <div class="card-header">
                Notificación para reabastecimiento de las empresas.
            </div>
            <div class="card-header">
                Importación de productos desde excel.
            </div>
            <div class="card-footer"
                style="display: flex; flex-direction: row; align-items: center; justify-content: space-around;">
                @if (Route::has('register'))
                    <a class="btn btn-Hack" href="#">Registrarse</a>
                @endif
            </div>
        </div>

    </div>

@endsection
