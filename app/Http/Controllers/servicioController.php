<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Http\Requests\servicioGuardarRequest;
use App\Servicio;
use App\Cliente;
use App\Empleado;
class servicioController extends Controller
{
    //
    public function index(){
        $servicios = Servicio::join('clientes', 'servicios.id_cliente', '=', 'clientes.id')
        ->join('empleados', 'servicios.id_empleado', '=', 'empleados.id')
        ->select('servicios.id', 'servicios.fecha_hora', 'servicios.descripcion', 'servicios.tiempo_servicio', 'servicios.direccion', 'clientes.nombre as nomServ',
         'servicios.id', 'servicios.fecha_hora', 'servicios.descripcion', 'servicios.tiempo_servicio', 'servicios.direccion', 'empleados.nombres as nomEmp')
        ->paginate(4);        
        return view ('servicio', compact('servicios'));
    }
    public function indexx(){
        $servicios = Servicio::all();
        $clientes = Cliente::all();
        $empleados = Empleado::all();
        return view ('ssservicio', compact('servicios', 'clientes', 'empleados'));
    }
    public function guardar(servicioGuardarRequest $request){
        $servicios = new Servicio;
        $servicios->fecha_hora=$request->fecha_hora;
        $servicios->descripcion=$request->descripcion;
        $servicios->tiempo_servicio=$request->tiempo_servicio;
        $servicios->direccion=$request->direccion;
        $servicios->id_cliente=$request->id_cliente;
        $servicios->id_empleado=$request->id_empleado;

        $servicios->save();

        return back()->with('estado', 'El registro ' . $request->fecha_hora . ' se guardo exitosamente!');
    }
    public function editar(servicioGuardarRequest $request,$id){        
        $servicios = Servicio::findOrFail($id);

        $servicios->fecha_hora=$request->fecha_hora;
        $servicios->descripcion=$request->descripcion;
        $servicios->tiempo_servicio=$request->tiempo_servicio;
        $servicios->direccion=$request->direccion;
        $servicios->id_cliente=$request->id_cliente;
        $servicios->id_empleado=$request->id_empleado;

        $servicios->save();
        
        return back()->with('estado', 'El registro  ' . $request->fecha_hora . ' se actualizo exitosamente!');
    }
    public function eliminar($id){
        $servicios = Servicio::findOrFail($id);
        $servicios->delete();
        return back()->with('estado', 'El registro se elimino correctamente!!');
    }

    public function listar($id){
        $servicios = Servicio::join('clientes', 'servicios.id_cliente', '=', 'clientes.id')
        ->join('empleados', 'servicios.id_empleado', '=', 'empleados.id')
        ->select('servicios.id', 'servicios.fecha_hora', 'servicios.descripcion', 'servicios.tiempo_servicio', 'servicios.direccion', 'clientes.nombre as nomCliente',
         'servicios.id', 'servicios.fecha_hora', 'servicios.descripcion', 'servicios.tiempo_servicio', 'servicios.direccion', 'empleados.nombres as nomEmp')
        ->findOrFail($id);

        return view('sservicio',compact('servicios'));
    }    
}
