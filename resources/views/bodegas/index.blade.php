@extends('layouts/app')

@section('content')
<div class="row">
    <div class="col-md-8">
        <div class="row">
            @include('bodegas/navBodega')
            <div class="col-md-12">
                @include('productos/index')
            </div>
        </div>
    </div>
    <div class="col-md-4">
        @include('productos/import')
    </div>
</div>

@endsection