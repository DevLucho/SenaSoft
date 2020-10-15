@extends('layouts/app')
@section('content')
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
@endsection
