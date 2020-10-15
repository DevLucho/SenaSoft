<h1>Producto: {{$producto->name}}</h1>
<a href="{{route('productos.index')}}">Volver</a>
<br>
<a href="{{route('productos.edit',$producto)}}">Editar</a>
<p><strong>Nombre: {{$producto->nombre}}</strong></p>
<p><strong>Costo: {{$producto->descripcion}}</strong></p>

<img src="{{asset('storage/'.$producto->img)}}" alt="{{$producto->nombre}}">

<form action="{{route('productos.destroy', $producto)}}" method="POST">
    @csrf
    @method('delete')
    <button>Eliminar</button>
</form>