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
