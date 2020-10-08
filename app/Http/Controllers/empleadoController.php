<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Http\Requests\empleadoGuardarRequest;
use App\Empleado;
use App\Vehiculo;
class empleadoController extends Controller
{
    //
    public function index(){
        $empleados = Empleado::join('vehiculos', 'empleados.id_vehiculo', 'vehiculos.id')
        ->select('empleados.id', 'empleados.nombres', 'empleados.apellidos', 'empleados.cedula', 'empleados.telefono', 'empleados.direccion', 'empleados.pase_conduccion', 'empleados.fecha_ingreso', 'vehiculos.placa')
        ->paginate(4);
        return view ('empleado', compact('empleados'));
    }
    public function indexx(){
        $empleados = Empleado::all();
        $vehiculos = Vehiculo::all();
        return view ('eeempleado', compact('empleados', 'vehiculos'));
    }
    public function guardar(empleadoGuardarRequest $request){
        $empleados = new Empleado;
        $empleados->nombres=$request->nombres;
        $empleados->apellidos=$request->apellidos;
        $empleados->cedula=$request->cedula;
        $empleados->telefono=$request->telefono;
        $empleados->direccion=$request->direccion;
        $empleados->pase_conduccion=$request->pase_conduccion;
        $empleados->fecha_ingreso=$request->fecha_ingreso;
        $empleados->id_vehiculo=$request->id_vehiculo;
        $empleados->id_vehiculo=$request->id_vehiculo;

        $empleados->save();

        return back()->with('estado', 'El registro ' . $request->nombres . ' se guardo exitosamente!');
    }
    public function editar(empleadoGuardarRequest $request,$id){        
        $empleados = Empleado::findOrFail($id);

        $empleados->nombres=$request->nombres;
        $empleados->apellidos=$request->apellidos;
        $empleados->cedula=$request->cedula;
        $empleados->telefono=$request->telefono;
        $empleados->direccion=$request->direccion;
        $empleados->pase_conduccion=$request->pase_conduccion;
        $empleados->fecha_ingreso=$request->fecha_ingreso;
        $empleados->id_vehiculo=$request->id_vehiculo;
        $empleados->id_vehiculo=$request->id_vehiculo;

        $empleados->save();

        return back()->with('estado', 'El registro  ' . $request->nombres . ' se actualizo exitosamente!');
    }
    public function eliminar($id){
        $empleados = Empleado::findOrFail($id);
        $empleados->delete();
        return back()->with('estado', 'El registro se elimino correctamente!!');
    }

    public function listar($id){
        $empleados = Empleado::join('vehiculos', 'empleados.id_vehiculo', 'vehiculos.id')
        ->select('empleados.id', 'empleados.nombres', 'empleados.apellidos', 'empleados.cedula', 'empleados.telefono', 'empleados.direccion', 'empleados.pase_conduccion', 'empleados.fecha_ingreso', 'vehiculos.placa')
        ->findOrFail($id);

        return view('eempleado',compact('empleados'));
    }
}
