XD<form action="{{url('clientes')}}" method="POST">
    @csrf
    <div class="form-group row">
        <label for="nombre" class="col-md-4 col-form-label text-md-right">{{ __('nombre') }}</label>

        <div class="col-md-6">
            <input id="nombre" type="nombre" class="form-control @error('nombre') is-invalid @enderror" name="nombre" value="{{ old('nombre') }}" required autocomplete="nombre" autofocus>

            @error('nombre')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <label for="nip" class="col-md-4 col-form-label text-md-right">{{ __('nip') }}</label>

        <div class="col-md-6">
            <input id="nip" type="nip" class="form-control @error('nip') is-invalid @enderror" name="nip" value="{{ old('nip') }}" required autocomplete="nip" autofocus>

            @error('nip')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <label for="telefono" class="col-md-4 col-form-label text-md-right">{{ __('telefono') }}</label>

        <div class="col-md-6">
            <input id="telefono" type="telefono" class="form-control @error('telefono') is-invalid @enderror" name="telefono" value="{{ old('telefono') }}" required autocomplete="telefono" autofocus>

            @error('telefono')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
   

     <button type="summit">Subir </button>
</form>