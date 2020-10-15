@extends('layouts/app')
@section('content')
    <div class="row">
        <div class="col-md-8 border-right">
            <h3>Sucursales vinculadas</h3>
            <div class="row mt-5">
                @foreach ($sucursales ?? '' as $sucursal)
                    <a class="col-md-10 offset-md-1 btn btn-Hack mb-2" style="display: flex; justify-content: space-between; align-items: center; flex-direction: row;" data-toggle="collapse" href="#Sucursal{{$sucursal->id}}" role="button"
                        aria-expanded="false" aria-controls="collapseExample">
                        <p>{{ $sucursal->gerente }} ({{$sucursal->direccion}})</p>
                        <i title="Desvincular sucursal" class="fas fa-trash"></i>
                    </a>
                    <div class="collapse col-md-10 offset-md-1 mb-2" id="Sucursal{{$sucursal->id}}">
                        <div class="card card-body">
                            <div class="row">
                            <p class="col-md-6"><b>Gerente: </b>{{$sucursal->gerente}}</p>
                            <p class="col-md-6"><b>Dirección: </b>{{$sucursal->direccion}}</p>
                            <p class="col-md-6"><b>Telefono: </b>{{$sucursal->telefono}}</p>
                            <p class="col-md-6"><b>Vinculado desde: </b>{{$sucursal->created_at}}</p>
                        </div>
                        </div>
                    </div>
                @endforeach
                <div class="mt-3 flex-row-CC text-Hack">
                    {{ $sucursales ?? ''->links() }}                     
                </div>
            </div>
        </div>
        <div class="col-md-4 ">
            <h4 class="text-center mt-4 mb-4">Añadir sucursal</h4>
            <form action="{{route('sucursales.store')}}" method="POST">
                @csrf
                <div class="form-group row">
                    <div class="col-md-12">
                        <input id="gerente" placeholder="Gerente" type="text"
                            class="form-control @error('gerente') is-invalid @enderror" name="gerente"
                            value="{{ old('gerente') }}" required autocomplete="gerente">

                        @error('gerente')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-12">
                        <input id="direccion" placeholder="Dirección" type="text"
                            class="form-control @error('direccion') is-invalid @enderror" name="direccion"
                            value="{{ old('direccion') }}" required autocomplete="direccion">

                        @error('direccion')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-12">
                        <input id="telefono" placeholder="Teléfono" maxlength="10" type="number"
                            class="form-control @error('telefono') is-invalid @enderror" name="telefono"
                            value="{{ old('telefono') }}" required autocomplete="telefono">

                        @error('telefono')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <button type="summit" class="col-md-8 offset-md-2 btn btn-block btn-Hack mt-4">Añadir</button>
                </div>
            </form>
        </div>
    </div>
@endsection
