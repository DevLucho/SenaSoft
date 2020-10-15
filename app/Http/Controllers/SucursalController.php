<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SucursalController extends Controller
{
    public function create(){
        return view('sucursales.create');

    }
    public function store(){

    }
    public function index(){
        return view('sucursales.index');
    }
}
