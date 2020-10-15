


<form action="{{url('facturas-productos')}}" method="POST">
    @csrf
   
  
    
    <div class="form-group row">Producto
        <datalist id="producto">
    @foreach ($productos as $producto)
    <option type="number" value="{{$producto->id}}">{{$producto->nombre}} </option>
        
    @endforeach
        </datalist>
        <input id="producto" list="producto" name="producto" type="text">
      </div> 
      <div class="form-group row">
        <label for="factura" class="col-md-4 col-form-label text-md-right"  ></label>

        <div class="col-md-6">
            <input id="factura"  class="form-control @error('factura') is-invalid @enderror" name="factura" value="{{$facturaxd->factura}}" autocomplete="factura" readonly>

            @error('factura')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <label for="cantSolicitada" class="col-md-4 col-form-label text-md-right">{{ __('cantSolicitada') }}</label>

        <div class="col-md-6">
            <input id="cantSolicitada" type="cantSolicitada" class="form-control @error('cantSolicitada') is-invalid @enderror" name="cantSolicitada" value="{{ old('cantSolicitada') }}" required autocomplete="cantSolicitada" autofocus>

            @error('cantSolicitada')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <p>{{$resta}}</p>
     <button type="summit">Subir </button>
</form>