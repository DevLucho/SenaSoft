<?php

namespace App\Http\Controllers;

use App\Models\cliente;
use App\Models\Factura;
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
 
    }
}
