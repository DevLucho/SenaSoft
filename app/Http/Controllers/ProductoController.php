<?php

namespace App\Http\Controllers;

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
}
