<h1>Pagina principal de productos</h1>
    
<a href="{{route('productos.create')}}">Crear curso</a>
<ul>
        @foreach($productos as $producto)
            <li>Ver producto: <a href="{{route('productos.show',$producto)}}">{{$producto->nombre}}</a></li>
            <li>Editar producto: <a href="{{route('productos.edit',$producto)}}">{{$producto->nombre}}</a></li>
            
            <img src="{{asset('storage/'.$producto->img)}}" alt="{{$producto->nombre}}">
            {{$producto->img}}
            {{-- {{route('cursos.show','abc')}} --}}
            
            @endforeach
</ul>
{{$productos->links()}}