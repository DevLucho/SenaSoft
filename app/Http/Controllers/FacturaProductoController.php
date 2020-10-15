<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FacturaProductoController extends Controller
{
    public function create(){
        return view('facturas-productos.create');
    }
    public function store(Request $request){
        
    }
}
