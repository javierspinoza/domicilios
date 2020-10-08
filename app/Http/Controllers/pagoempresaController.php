<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Http\Requests\pagoempresaGuardarRequest;
use App\Pagoempresa;
use App\Empleado;
class pagoempresaController extends Controller
{
    //
    public function index(){
        $pagoempresas = Pagoempresa::join('empleados', 'pagoempresas.id_empleado', 'empleados.id')
        ->select('pagoempresas.id', 'pagoempresas.cuota', 'pagoempresas.fecha', 'empleados.nombres as nomEmple')
        ->paginate(4);
        return view ('pagoempresa', compact('pagoempresas'));
    }
    public function indexx(){
        $pagoempresas = Pagoempresa::all();
        $empleados = Empleado::all();
        return view ('pppagoempresa', compact('pagoempresas', 'empleados'));
    }
    public function guardar(pagoempresaGuardarRequest $request){
        $pagoempresas = new Pagoempresa;
        $pagoempresas->cuota=$request->cuota;
        $pagoempresas->fecha=$request->fecha;
        $pagoempresas->id_empleado=$request->id_empleado;

        $pagoempresas->save();

        return back()->with('estado', 'El registro ' . $request->cuota . ' se guardo exitosamente!');
    }
    public function editar(pagoempresaGuardarRequest $request,$id){        
        $pagoempresas = Pagoempresa::findOrFail($id);

        $pagoempresas->cuota=$request->cuota;
        $pagoempresas->fecha=$request->fecha;
        $pagoempresas->id_empleado=$request->id_empleado;

        $pagoempresas->save();

        return back()->with('estado', 'El registro  ' . $request->cuota . ' se actualizo exitosamente!');
    }
    public function eliminar($id){
        $pagoempresas = Pagoempresa::findOrFail($id);
        $pagoempresas->delete();
        return back()->with('estado', 'El registro se elimino correctamente!!');
    }

    public function listar($id){
        $pagoempresas = Pagoempresa::join('empleados', 'pagoempresas.id_empleado', 'empleados.id')
        ->select('pagoempresas.id', 'pagoempresas.cuota', 'pagoempresas.fecha', 'empleados.nombres as nomEmple')
        ->findOrFail($id);

        return view('ppagoempresa',compact('pagoempresas'));
    }
}
