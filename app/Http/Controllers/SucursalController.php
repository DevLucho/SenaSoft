<?php

namespace App\Http\Controllers;

use App\Models\empresa;
use App\Models\sucursal;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SucursalController extends Controller
{
    public function create()
    {
        return view('sucursales.create');
    }
    public function store(Request $request)
    {
        $empresa =  empresa::where('usuario', Auth::user()->id)->first();
        $usuario = new User();
        $usuario->name =  'Sucursal de '.Auth::user()->name;
        $usuario->email = preg_replace('/\s+/', '', $request->gerente) . "@" . preg_replace('/\s+/', '', Auth::user()->name) . ".com";
        $usuario->password = bcrypt('password');
        $usuario->rol = 2;
        $usuario->save();
        $sucursal = new sucursal();
        $sucursal->gerente = $request->gerente;
        $sucursal->direccion = $request->direccion;
        $sucursal->telefono = $request->telefono;
        $sucursal->usuario = $usuario->id;
        $sucursal->empresa = $empresa->id;
        $sucursal->save();

        return view('home');
    }

    public function index()
    {
        $empresa = empresa::where('usuario', Auth::user()->id)->first();
        $sucursales = sucursal::where('empresa', $empresa->id)->paginate(5);
        return view('sucursales.index', compact('sucursales'));
    }

    public function destroy($id){
        $sucursal = sucursal::Find($id);
        $sucursal->delete();
        return view('home');

  }
}
