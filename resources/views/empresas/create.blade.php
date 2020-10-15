@extends('layouts/app')
@section('content')
<form action="{{url('empresas')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group row">
        <label for="email" class="text-md-left offset-md-2 col-md-2 col-form-label">{{ __('Correo electrónico') }}</label>

        <div class="col-md-6">
            <input id="email" placeholder="example@correo.com" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <label for="password" class="text-md-left offset-md-2 col-md-2 col-form-label">{{ __('Contraseña') }}</label>

        <div class="col-md-6">
            <input id="password" minlength="8" placeholder="Minimo 8 caracteres" type="password" class="form-control @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" required autocomplete="password" autofocus>

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <label for="name" class="text-md-left offset-md-2 col-md-2 col-form-label">{{ __('Razón social') }}</label>

        <div class="col-md-6">
            <input id="name" placeholder="Nombre de la empresa" type="name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <label for="directorGeneral" class="text-md-left offset-md-2 col-md-2 col-form-label">{{ __('Director general') }}</label>

        <div class="col-md-6">
            <input id="directorGeneral" type="directorGeneral" placeholder="Fulanito De Tal" class="form-control @error('directorGeneral') is-invalid @enderror" name="directorGeneral" value="{{ old('directorGeneral') }}" required autocomplete="directorGeneral" autofocus>

            @error('directorGeneral')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <label for="nit" class="text-md-left offset-md-2 col-md-2 col-form-label">{{ __('NIT') }}</label>

        <div class="col-md-6">
            <input id="nit" type="nit" placeholder="Ej. 800.197.268-4" class="form-control @error('nit') is-invalid @enderror" name="nit" value="{{ old('nit') }}" required autocomplete="nit" autofocus>

            @error('nit')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label for="direccion" class="text-md-left offset-md-2 col-md-2 col-form-label">{{ __('Dirección') }}</label>

        <div class="col-md-6">
            <input id="direccion" placeholder="Ubicación de la empresa" type="direccion" class="form-control @error('direccion') is-invalid @enderror" name="direccion" value="{{ old('direccion') }}" required autocomplete="direccion" autofocus>

            @error('direccion')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <label for="telefono" class="text-md-left offset-md-2 col-md-2 col-form-label">{{ __('Teléfono') }}</label>

        <div class="col-md-6">
            <input id="telefono" placeholder="Contacto teléfonico de la empresa" type="number" class="form-control @error('telefono') is-invalid @enderror" name="telefono" value="{{ old('telefono') }}" required autocomplete="telefono" autofocus>

            @error('telefono')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <label for="logo" class=" col-form-label text-md-left offset-md-2 col-md-2">{{ __('Logo') }}</label>

        <div class="col-md-6">
            <input id="logo" type="file" name="img" placeholder="Proximamente..." class=" accept="image/" required>
            @error('img')
                <small class="text-danger">{{$message}}</small>
            @enderror
            @error('logo')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="row">
        <button type="summit" class="col-md-8 offset-md-2 btn btn-block btn-Hack mt-4">Registrar empresa</button>
    </div>

</form>
@endsection
