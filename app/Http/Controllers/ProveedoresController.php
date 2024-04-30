<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proveedores;

class ProveedoresController extends Controller
{
    public function mostrarProveedor(){
        $proveedores = Proveedores::all();
        return view('mostrarProveedores',compact('proveedores'));
    }

    public function agregarProveedor(Request $request){
        $proveedores = new Proveedores();
        $proveedores->nombre = $request->nombre;
        $proveedores->fecharegistro = $request->fecharegistro;
        $proveedores->telefono = $request->telefono;
        $proveedores->correo = $request->correo;

        $proveedores->save();

        return redirect('/mostrarProveedor');

    }

    public function nuevoProveedor(){
        return view('agregarProveedores');
    }

}
