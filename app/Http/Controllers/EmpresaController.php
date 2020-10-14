<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Rol;
use App\Models\Empresa;
use App\Models\Bodega;



class EmpresaController extends Controller
{
    public function create()
    {
        return view('empresas.create');
    }
    public function store(Request $request)
    {
        $user = new User();
        $user->email = $request->email;
        $user->password  = bcrypt($request->password);
        $user->name  = $request->name;
        $user->rol = 1;
        $user->save();
        $empresa = new Empresa();
        $empresa->usuario   = $user->id;
        $empresa->directorGeneral = $request->directorGeneral;
        $empresa->nit  = $request->nit;
        $empresa->direccion = $request->direccion;
        $empresa->telefono  = $request->telefono;
        $empresa->logo = $request->logo;
        $empresa->save();
        $bodega = new Bodega();
        $bodega->empresa = $empresa->id;
        $bodega->save();
    }
    public function index()
    {
    }
}
