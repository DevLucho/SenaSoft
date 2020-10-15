<?php

namespace App\Http\Controllers;


use App\Http\Requests\StoreProducto;
use App\Imports\ProductImport;
use App\Models\bodaga_producto;
use App\Models\bodega;
use App\Models\empresa;
use App\Models\producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

class ProductoController extends Controller
{
    public function index()
    {
        // $cursos = Curso::all();
        $productos = Producto::orderBy('id', 'DESC')->paginate();
        return view('productos.index', compact('productos'));
    }

    public function show(Producto $producto)
    {
        // $curso = Curso::find($id);
        // ['curso'=>$curso]
        return view('productos.show', compact('producto'));
    }

    public function create()
    {
        return view('productos.create');
    }

    // public function store(Request $request)
    public function store(StoreProducto $request) // store curso validara
    {
        $producto = $request->all();
        // Extraer nombre del file y setarlo al campo img
        if($img = $request->file('img')){
            $nombre = $img->getClientOriginalName();
            $img->move('storage',$nombre);
            $producto['img']=$nombre;
        }
        Producto::create($producto);
        if(Auth::user()->rol == 1){
            $empresa = empresa::where('usuario', Auth::user()->id)->first();
            $bodega = bodega::where('empresa', $empresa->id)->first();
            $bp = new bodaga_producto();
            $bp->bodega = $bodega;
            $bp->producto=$producto;
            $bp->save();
        }
        return redirect()->route('productos.index', $producto);
        // return $request->all();
    }

    public function edit(Producto $producto)
    {
        // $curso = Curso::find($id);
        // return $curso;
        return view('productos.edit', compact('producto'));
    }

    public function update(StoreProducto $request, Producto $producto)
    {
        $data=$request->all();
         if($img = $request->file('img')){
            $nombre = $img->getClientOriginalName();
            $img->move('storage',$nombre);
            $data['img']=$nombre;
        }
        $producto->update($data);

        return redirect()->route('productos.show', $producto)->with('info','Actualizado correctamente');
    }

    public function destroy(Producto $producto)
    {
        $producto->delete();
        return redirect()->route('productos.index');
    }


    // Importar desde excel
    public function importExcel(Request $request)
    {
        // $request->validate([
        //     'nombre' => ['required','unique:productos,nombre'],
        // ]);
        $file = $request->file('file');
        Excel::import(new ProductImport, $file);
        return back()->with('info','Importacion exitosa');
    }

}
