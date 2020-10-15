
    <div class="row">
        {{-- @if(Auth::user()->rol == 2) --}}
        <div class="col-md-12 mt-4 mb-4">
            <a class="btn btn-Hack btn-block" href="{{ route('productos.create') }}">Añadir producto</a>
        </div>
        {{-- @endif --}}
        <div class="col-md-12 mb-4">
            <h3 class="mb-3">Importar productos</h3>
            <form action="{{ route('import.excel') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="file" class="mt-4 mb-4" name="file" accept=".xlsx, .xls" required>

                @error('file')
                <small>{{$message}}</small>
                @enderror
                <br>
                <button type="submit" class="btn btn-Hack btn-block mt-4">Importar</button>
            </form>
        </div>   
                    
    </div>               
