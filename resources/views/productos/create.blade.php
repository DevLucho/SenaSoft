<<<<<<< HEAD
<form action="{{route('productos.store')}}" method="POST" enctype="multipart/form-data">
    @csrf <!-- token -->
        <label for="">Nombre producto:</label>
        <br>
        <input type="text" name="nombre" value="{{old('nombre')}}" id="">
        <br>
        @error('nombre')
            <small>{{$message}}</small>
            <br>
        @enderror
    <br>
    <label for="">Cantidad que ingresa:</label>
        <br>
        <input type="number" name="cantidadMinima" value="{{old('cantidadMinima')}}">
    @error('cantidadMinima')
    <br>
        <small>{{$message}}</small>
        <br>
    @enderror
    <br>
    <label for="">Valor unitario:</label>
        <br>
        <input type="number" name="costoUnitario"  value="{{old('costoUnitario')}}" id="">
    @error('costoUnitario')
    <br>
        <small>{{$message}}</small>
        <br>
    @enderror
    <br>
    <input type="file" name="img" id="img" accept="image/">
    @error('img')
        <small class="text-danger">{{$message}}</small>
    @enderror
    <button type="submit">Registrar</button>
</form>
=======

<form action="{{url('productos')}}" method="POST">
    @csrf
   
    <div class="form-group row">
        <label for="id" class="col-md-4 col-form-label text-md-right">{{ __('id') }}</label>

        <div class="col-md-6">
            <input id="id" type="id" class="form-control @error('id') is-invalid @enderror" name="id" value="{{ old('id') }}" required autocomplete="id" autofocus>

            @error('id')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <label for="cantidadMinima " class="col-md-4 col-form-label text-md-right">{{ __('cantidadMinima ') }}</label>

        <div class="col-md-6">
            <input id="cantidadMinima" type="cantidadMinima" class="form-control @error('cantidadMinima') is-invalcantidadMinima @enderror" name="cantidadMinima" value="{{ old('cantidadMinima') }}"  autocomplete="cantidadMinima" autofocus>

            @error('cantidadMinima')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
 <button type="submit"></button>
</form>
>>>>>>> fd032b33194d25b9f8db3010a25cad372ff3f78c
