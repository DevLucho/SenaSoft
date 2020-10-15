
<div class="col-md-4">
    <h3 class="mb-4">Añadir producto</h3>

    <form action="{{route('productos.store')}}" method="POST" enctype="multipart/form-data">
        @csrf <!-- token -->

            <input type="text" class="form-control" name="nombre" placeholder="Nombre" value="{{old('nombre')}}" id="">
            <br>
            @error('nombre')
                <small>{{$message}}</small>
                <br>
            @enderror
            <input type="number" name="cantidadMinima" class="form-control" placeholder="Cantidad Minima" value="{{old('cantidadMinima')}}">
        @error('cantidadMinima')

            <small>{{$message}}</small>
        @enderror
        <br>
            <input type="number" class="form-control" name="costoUnitario" placeholder="Precio unitario"  value="{{old('costoUnitario')}}" id="">
        @error('costoUnitario')
        <br>
            <small>{{$message}}</small>
            <br>
        @enderror
        <br>
        <label for="">Imagen:</label>
        <br>
        <input type="file" name="img" id="img" accept="image/">
        @error('img')
            <small class="text-danger">{{$message}}</small>
        @enderror
        <br>
        <br>
        <button type="submit" class="btn btn-Hack btn-block">Registrar</button>
    </form>
</div>
