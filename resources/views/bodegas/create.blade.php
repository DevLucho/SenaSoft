<form action="{{url('bodegas')}}" method="POST">
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
        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('nombre') }}</label>

        <div class="col-md-6">
            <input id="name" type="name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    
    <div class="form-group row">
        Mandar XD
        <datalist id="empresa"> 
    @foreach ($empresas as $empresa) 
    <option type="number" value="{{$empresa->id}}">{{$empresa->Nombre}} </option>
        
    @endforeach
        </datalist>
        <input id="empresa" list="empresa" name="empresa" type="text">
      </div>
    
     <button type="summit">Subir </button>
</form>