<?php

namespace App\Http\Controllers;
use App\Models\Empleado;

use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    public function mostrarEmpleado(){
        $empleados = Empleado::all();
        return view('mostrarEmpleados',compact('empleados'));
    }

    public function agregarEmpleado(Request $request){
        $empleado = new Empleado();
        $empleado->nombre=$request->nombre;
        $empleado->apellido=$request->apellido;
        $empleado->fechaingreso=$request->fechaingreso;
        $empleado->salario = $request->salario;

        $empleado->save();

        return redirect('/mostrarEmpleado');

    }


    public function nuevoEmpleado(){
        return view('agregarEmpleados');
    }

}
