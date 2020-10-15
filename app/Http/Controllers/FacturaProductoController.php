<?php

namespace App\Http\Controllers;

use App\Models\bodaga_producto;
use App\Models\bodega;
use App\Models\empresa;
use App\Models\factura_producto;
use App\Models\producto;
use App\Models\proveedor_producto;
use App\Models\sucursal;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FacturaProductoController extends Controller
{
    public function create()
    {
        return view('facturas-productos.create');
    }
    public function store(Request $request)
    {
        $factura_producto = new factura_producto();
        $factura_producto->producto = $request->producto;
        $factura_producto->factura = $request->factura;
        $factura_producto->cantSolicitada = $request->cantSolicitada;
        $factura_producto->save();
        // $user = Auth::user()->id;
        $user = User::where('id', 1)->first();
        $sucursal = sucursal::where('usuario', $user)->value('empresa');
        $empresa = empresa::where('id', $sucursal)->first();
        $bodega = bodega::where('empresa', $empresa)->first();
        $bodegaProd = bodaga_producto::where('producto', $factura_producto->producto)->where('bodega', $bodega)->first();
        $resta = $bodegaProd->cantExistente - $factura_producto->cantSolicitada;

        // $bodegaProd->cantExistente = $resta;
        // $bodegaProd->save();
        // $affected = DB::table('productos')
        //       ->where('id', $factura_producto->id)
        //       ->update(['cantidadMinima ' => $request->cantSolicitada]);
        $facturaxd = $factura_producto;
        $facturaxd->find($factura_producto->factura);
        $productos = producto::all();
        return view('facturas-productos.crea', compact('facturaxd', 'productos', 'resta'));
    }
}
