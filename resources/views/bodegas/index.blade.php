@extends('layouts/app')
@section('content')
    

<table>
 <thead>
     <tr>
         <td>id</td>
         <td>Direccion</td>
         <td>Telefono</td>
        
     </tr>
 </thead>
 <tbody>
    @foreach ($bodegas as $bodega)
    <tr>
            <td>{{$bodega->id}}</td>
            <td>{{$bodega->empresa->id}}</td>
          
    @endforeach
 </tbody>
</table>

@endsection