@extends('layouts/app')
@section('content')
<form action="{{url('facturas')}}" method="POST">
    @csrf
   
    <div class="input-field col s12">
        <select name="estado" class="form-control" >
          <option value="Finalizada">Finalizada</option>
          <option value="Borrador">Borrador</option>
          <option value="En espera">En espera</option>
        </select>
        <label id="estado"></label>
      </div>
    <div class="form-group row">
        Cliente
        <input id="cliente" class="form-control" list="clienteList" name="cliente" type="text">
        <datalist id="clienteList">
          @foreach ($clientes as $cliente )
          <option type="number" value="{{$cliente ->id}}">{{$cliente ->Nombre}} </option>
              
          @endforeach
              </datalist>
      </div> 

      <div class="form-group row">Sucursal
        <datalist id="sucursal">
    @foreach ($surcursales as $sucursal)
    <option type="number"  value="{{$sucursal->id}}">{{$sucursal->gerente}} </option>
        
    @endforeach
        </datalist>
        <input id="sucursal" list="sucursal" class="form-control" name="sucursal" type="text">
      </div> 


     <button class="btn btn-Hack btn-block" type="summit">Subir </button>
</form>
@endsection
