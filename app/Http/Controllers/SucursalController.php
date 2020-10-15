<?php

namespace App\Http\Controllers;

use App\Models\empresa;
use App\Models\sucursal;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SucursalController extends Controller
{
    public function create(){
        return view('sucursales.create');

    }
    public function store(Request $request){
        
        $empresa =  empresa::where('usuario',Auth::user()->id)->first();
        $usuario = new User();
        $usuario->email =preg_replace('/\s+/','',$request->gerente)."@".$empresa->usuario->nombre.".com";
        $usuario->password =bcrypt('password');
        $usuario->save();
        $sucursal = new sucursal();
        $sucursal->gerente = $request->gerente;
        $sucursal->direccion = $request->direccion;
        $sucursal->telefono = $request->telefono;
        $sucursal->usuario = $usuario->id;
        $sucursal->empresa = $empresa->id;
        $sucursal->save();

    }
    public function index(){
        return view('sucursales.index');
    }
}
