<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                {{-- <img class="logo" src="{{asset('storage/icon.png')}}" alt=""> --}}
                {{ Auth::user()->name }}
            </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

            </ul>
                <ul class="navbar-nav">
                    @if (Auth::user()::where('id', Auth::user()->id)->value('rol')== 1)
                        <li class="nav-item">
                            <a href="#" class="nav-link">Sucursales</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Bodega</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Proveedores</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('productos.index')}}">Productos</a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="#">NO empresa</a>
                        </li>
                    @endif
                  <li class="nav-item">
                    <a title="Cerrar sesión" class="nav-link" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                            <i class="fas fa-power-off"></i>
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                  </li>
                </ul>
              </div>
    </div>
</nav>
