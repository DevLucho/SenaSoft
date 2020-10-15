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
    public function store(){

    }
    public function index(){
        $empresa=empresa::where('usuario', Auth::user()->id)->first();
        $sucursales=sucursal::where('empresa', $empresa->id)->paginate(5);
        return view('sucursales.index', compact('sucursales'));
    }
}
