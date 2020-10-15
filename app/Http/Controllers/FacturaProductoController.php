<?php

namespace App\Http\Controllers;

use App\Models\factura_producto;
use App\Models\producto;
use App\Models\proveedor_producto;
use Illuminate\Http\Request;

class FacturaProductoController extends Controller
{
    public function create(){
        return view('facturas-productos.create');
    }
    public function store(Request $request){
        $factura_producto = new factura_producto();
        $factura_producto->producto = $request->producto;
        $factura_producto->factura = $request->factura;
        $factura_producto->cantSolicitada = $request->cantSolicitada;
        $factura_producto->save();
        $facturaxd = $factura_producto;
        $facturaxd->find($factura_producto->factura);
        $productos = producto::all();
        return view('facturas-productos.crea',compact('facturaxd','productos')); 
    }
}
