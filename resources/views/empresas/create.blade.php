@extends('layouts/app')
@section('content')
<form action="{{url('empresas')}}" method="POST">
    @csrf
    <div class="form-group row">
        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('email') }}</label>

        <div class="col-md-6">
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('password') }}</label>

        <div class="col-md-6">
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" required autocomplete="password" autofocus>

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <label for="razonSocial" class="col-md-4 col-form-label text-md-right">{{ __('Razon social') }}</label>

        <div class="col-md-6">
            <input id="razonSocial" type="razonSocial" class="form-control @error('razonSocial') is-invalid @enderror" name="razonSocial" value="{{ old('razonSocial') }}" required autocomplete="razonSocial" autofocus>

            @error('razonSocial')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <label for="directorGeneral" class="col-md-4 col-form-label text-md-right">{{ __('Directo general') }}</label>

        <div class="col-md-6">
            <input id="directorGeneral" type="directorGeneral" class="form-control @error('directorGeneral') is-invalid @enderror" name="directorGeneral" value="{{ old('directorGeneral') }}" required autocomplete="directorGeneral" autofocus>

            @error('directorGeneral')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <label for="nit" class="col-md-4 col-form-label text-md-right">{{ __('NIT') }}</label>

        <div class="col-md-6">
            <input id="nit" type="nit" class="form-control @error('nit') is-invalid @enderror" name="nit" value="{{ old('nit') }}" required autocomplete="nit" autofocus>

            @error('nit')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    
    <div class="form-group row">
        <label for="direccion" class="col-md-4 col-form-label text-md-right">{{ __('Direccion') }}</label>

        <div class="col-md-6">
            <input id="direccion" type="direccion" class="form-control @error('direccion') is-invalid @enderror" name="direccion" value="{{ old('direccion') }}" required autocomplete="direccion" autofocus>

            @error('direccion')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <label for="telefono" class="col-md-4 col-form-label text-md-right">{{ __('Telefono') }}</label>

        <div class="col-md-6">
            <input id="telefono" type="number" class="form-control @error('telefono') is-invalid @enderror" name="telefono" value="{{ old('telefono') }}" required autocomplete="telefono" autofocus>

            @error('telefono')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <label for="logo" class="col-md-4 col-form-label text-md-right">{{ __('logo') }}</label>

        <div class="col-md-6">
            <input id="logo" type="number" class="form-control @error('logo') is-invalid @enderror" name="logo" value="{{ old('logo') }}" required autocomplete="logo" autofocus>

            @error('logo')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
     <button type="summit">Subir </button>
</form>
@endsection
