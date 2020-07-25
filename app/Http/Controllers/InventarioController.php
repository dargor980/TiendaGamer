<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InventarioController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function productos(){
        return view('admin.inventario.productos');
    }

    public function agregarProducto(){
        return view('admin.inventario.addProducto');
    }

    public function stock(){
        return view('admin.inventario.stock');
    }
}
