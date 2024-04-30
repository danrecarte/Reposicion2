<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{

    public function mostrarProducto(){
        $productos = Producto::all();
        return view('mostrarProductos',compact('productos'));
    }

    public function agregarProducto(Request $request){
        $producto = new Producto();
        $producto->descripcion = $request->descripcion;
        $producto->precio = $request->precio;
        $producto->stock = $request->stock;

        if ($request->pagaisv == 'true') {
            $producto->pagaisv =true;
        }
        else {
            $producto->pagaisv =false;
        }


        $producto->save();

        return redirect('/mostrarProducto');

    }

    public function nuevoProducto(){
        return view('agregarProductos');
    }

}
