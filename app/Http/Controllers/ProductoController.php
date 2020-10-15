<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use App\Imports\ProductImport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;
use App\Http\Requests\StoreProducto;
use App\Models\Producto;

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
        return redirect()->route('productos.index', $producto);
        // return $request->all();
    }

    public function edit(Producto $producto)
    {
        // $curso = Curso::find($id);
        // return $curso;
        return view('productos.edit', compact('producto'));
    }

    public function update(StoreProducto $request, producto $producto)
    {
        $producto->update($request->all());
        return redirect()->route('productos.show', $producto);
    }

    public function destroy(Producto $producto)
    {
        $producto->delete();
        return redirect()->route('productos.index');
    }


    // Importar desde excel
    public function importExcel(Request $request)
    {
        $file = $request->file('file');
        Excel::import(new ProductImport, $file);
        return back()->with('messagge','Importacion exitosa');
    }


=======
use App\Models\producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductoController extends Controller
{
   public function create(){
       return view('productos.create');
   }
   public function store(Request $request){
       $numero = $request->id;
    //    $cantidadMinima = $request->cantidadMinima;
    //    $users = DB::table('productos')
    //                  ->select('SUM(cantidadMinima*costoUnitario) total')
    //                  ->where([
    //                     ['id', '=', $numero],
    //                     ['cantidadMinima', '=', $cantidadMinima],
    //                 ])
    //                  ->get();
    //   $consulta = DB::table('productos')
    //   ->select('cantidadMinima')
    //   ->where('id', $numero)
    //   ->get();
      $df=producto::where('id', $numero)->value('cantidadMinima');
    //   $xd = [];
    //   foreach ($consulta as $key => $value) {
                   
    //     array_push($xd,[$value->cantidadMinima]);

    //   }

    //   $xd = $consulta[0];
    // $affected = DB::table('productos')
    // ->where('id', $numero)
    // ->update(['cantidadMinima ' => $request->cantSolicitada]);
       return ($df);
   }
>>>>>>> fd032b33194d25b9f8db3010a25cad372ff3f78c
}
