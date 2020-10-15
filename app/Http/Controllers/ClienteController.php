<?php

namespace App\Http\Controllers;

use App\Models\cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function create(){
        return view('clientes.create');
    }
    public function store(Request $request){
    $cliente = new cliente();
     $cliente->nombre =  $request->nombre;
     $cliente->nip = $request->nip;
     $cliente->telefono = $request->telefono;
     $cliente->save();
    }
}
