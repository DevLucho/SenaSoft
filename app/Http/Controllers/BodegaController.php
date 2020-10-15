<?php

namespace App\Http\Controllers;

use App\Models\bodaga_producto;
use Illuminate\Http\Request;
use App\Models\Empresa;
use App\Models\User;
use App\Models\Rol;
use App\Providers\RouteServiceProvider;
use App\Models\bodega;
use Illuminate\Support\Facades\Auth;

class BodegaController extends Controller
{
    public function create(){
        $empresas = Empresa::All();
        return view('bodegas.create', compact('empresas'));
    }
    public function store(Request $request){
     $user = new User();
     $user->email = $request->email;
     $user->password  = bcrypt($request->password);
     $user->name  = $request->name;
     $user->rol = 1;
     $user->save();
     $bodega = new Bodega();
     $bodega->usuario = $user->id;
     $bodega->empresa = $request->empresa;
     $bodega->save();
   
    }
    public function index(){
        $empresa = empresa::where('usuario', Auth::user()->id)->first();
        $bodega = bodega::where('empresa', $empresa->id)->first();
        $productos = bodaga_producto::where('bodega', $bodega->id)->get();
        return view('bodegas.index', compact('productos'));

    }
}
