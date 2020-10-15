<form action="{{url('facturas')}}" method="POST">
    @csrf
    <div class="input-field col s12">
        <select name="estado" >
          <option value="Finalizada">Finalizada</option>
          <option value="Borrador">Borrador</option>
          <option value="En espera">En espera</option>
        </select>
        <label id="estado"></label>
      </div>
    <div class="form-group row">
        <label for="valorNeto" class="col-md-4 col-form-label text-md-right">{{ __('valorNeto') }}</label>

        <div class="col-md-6">
            <input id="valorNeto" step="0.01" type="number" class="form-control @error('valorNeto') is-invalid @enderror" name="valorNeto" value="{{ old('valorNeto') }}" required autocomplete="valorNeto" autofocus>

            @error('valorNeto')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <label for="valorTotal" class="col-md-4 col-form-label text-md-right">{{ __('valorTotal') }}</label>

        <div class="col-md-6">
            <input id="valorTotal" step="0.01" type="number" class="form-control @error('valorTotal') is-invalid @enderror" name="valorTotal" value="{{ old('valorTotal') }}" required autocomplete="valorTotal" autofocus>

            @error('valorTotal')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <datalist id="cliente">
    @foreach ($clientes as $cliente )
    <option type="number" value="{{$cliente ->id}}">{{$cliente ->Nombre}} </option>
        
    @endforeach
        </datalist>
        <input id="cliente" list="cliente" name="cliente" type="text">
      </div> 

      <div class="form-group row">Sucursal
        <datalist id="sucursal">
    @foreach ($surcursales as $sucursal)
    <option type="number" value="{{$sucursal->id}}">{{$sucursal->Nombre}} </option>
        
    @endforeach
        </datalist>
        <input id="sucursal" list="sucursal" name="sucursal" type="text">
      </div> 


     <button type="summit">Subir </button>
</form>