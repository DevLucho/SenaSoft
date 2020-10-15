<?php

namespace App\Http\Controllers;

use App\Models\cliente;
use App\Models\Factura;
use App\Models\factura_producto;
use App\Models\producto;
use App\Models\sucursal;
use Illuminate\Http\Request;

class FacturaController extends Controller
{
    public function create(){
        $clientes = cliente::all();
        $surcursales = sucursal::all();
        return view('facturas.create',compact('clientes', 'surcursales'));
    }
    public function store(Request $request){
        $factura = new Factura();
        $factura->estado = $request->estado;
        $factura->valorNeto = $request->valorNeto;
        $factura->valorTotal = $request->valorTotal;
        $factura->cliente = $request->cliente;
        $factura->sucursal = $request->sucursal;
        $factura->save(); 
        $facturaxd = $factura;
        $facturaxd->find($factura->id);
        $productos = producto::all();
        return view('facturas-productos.create',compact('facturaxd','productos')); 
        $FacturaProducto = new factura_producto();
        $FacturaProducto->factura =$factura->id;
        $FacturaProducto->producto  = $request->productp;
    }

    public function index(Request $request){
        
        if ($request) {
            $query = trim($request->get('search'));
            $facturas = factura_producto::where('factura',$query)
            ->orderby('id','asc')
            ->get();
            return view('facturas.index',['facturas' => $facturas, 'search' => $query]);
        }
    }
}

