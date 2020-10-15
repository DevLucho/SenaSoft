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
        //Se crea la entidad usuario para dar acceso a la empresa
        $user = new User();
        $user->email = $request->email;
        $user->password  = bcrypt($request->password);
        $user->name  = $request->name;
        $user->rol = 1;
        $user->save();

        //Empresa
        $empresa = new Empresa();
        $empresa->usuario   = $user->id;
        $empresa->directorGeneral = $request->directorGeneral;
        $empresa->nit  = $request->nit;
        $empresa->direccion = $request->direccion;
        $empresa->telefono  = $request->telefono;
        $empresa->logo = $request->logo;
        if($img = $request->file('img')){ 
            $nombre = $img->getClientOriginalName();
            $img->move('storage',$nombre);
            $empresa['logo']=$nombre;
        }
        $empresa->save();

        //Bodega
        $bodega = new Bodega();
        $bodega->empresa = $empresa->id;
        $bodega->save();
    }
    public function index()
    {
    }
}
