<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use App\Models\Rol;
use App\Models\Empresa;



class EmpresaController extends Controller
{
    public function create(){
        return view('empresas.create');
    }
    public function store(Request $request){
     $user = new Usuario();
     $user->email = $request->email;
     $user->password  = $request->password;
     $user->rol = 1;
     $user->save();
     $empresa = new Empresa();
     $empresa->usuario   = $user->id;
     $empresa->razonSocial = $request->razonSocial; 
     $empresa->directorGeneral = $request->directorGeneral ;
     $empresa->nit  = $request->nit;
     $empresa->direccion = $request->direccion;
     $empresa->telefono  = $request->telefono;
     $empresa->logo = $request->logo;
     $empresa->save();

     

    }
    public function index(){

    }
}
