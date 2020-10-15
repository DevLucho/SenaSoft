<?php

namespace App\Http\Controllers;

use App\Models\empresa;
use App\Models\proveedor;
use App\Models\User;
use Illuminate\Http\Request;

class ProveedorController extends Controller
{
    public function create(){
     return view('proveedores.create');
    }
    public function store(Request $request){
        $user = new User();
        $user->email = $request->email;
       $user->password  = bcrypt($request->password);
       $user->name  = $request->name;
     $user->rol = 1;
    $user->save();
    $proveedor = new proveedor();
    $proveedor->usuario = $user->id;
    $proveedor->direccion = $request->direccion; 
    $proveedor->telefono = $request->telefono;
    $proveedor->logo = $request->logo;
    $proveedor->save();
    }
}
