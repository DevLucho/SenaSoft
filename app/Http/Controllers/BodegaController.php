<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empresa;
use App\Models\User;
use App\Models\bodega;
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
        $bodegas = bodega::all();
        return view('bodegas.index', compact('bodegas'));

    }
}
