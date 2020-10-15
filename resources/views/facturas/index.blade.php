
@extends('layouts/app')
@section('content')

    <style>
        .espacio {
            margin-left: 100px;
        }
    </style>
    <table class="table table-hover" style="width:100%">
        <thead>
            <th scope="col">id</th>
            <th scope="col">estado</th>
        </thead>
        <tbody>
            @foreach($facturas as $factura)
            <tr>
                <td>{{$factura->cantSolicitada}}</td>
                <td>{{$factura->factura}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endsection
