<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Http\Requests\vehiculoGuardarRequest;
use App\Vehiculo;
class vehiculoController extends Controller
{
    //
    public function index(){
        $vehiculos = Vehiculo::paginate(4);        
        return view ('vehiculo', compact('vehiculos'));
    }
    public function indexx(){
        $vehiculos = Vehiculo::all();        
        return view ('vvvehiculo', compact('vehiculos'));
    }
    public function guardar(vehiculoGuardarRequest $request){
        $vehiculos = new Vehiculo;
        $vehiculos->placa=$request->placa;
        $vehiculos->descripcion=$request->descripcion;
        $vehiculos->año=$request->año;
        
        $vehiculos->save();

        return back()->with('estado', 'El registro ' . $request->placa . ' se guardo exitosamente!');
    }
    public function editar(vehiculoGuardarRequest $request,$id){        
        $vehiculos = Vehiculo::findOrFail($id);

        $vehiculos->placa=$request->placa;
        $vehiculos->descripcion=$request->descripcion;
        $vehiculos->año=$request->año;
        
        $vehiculos->save();

        return back()->with('estado', 'El registro  ' . $request->placa . ' se actualizo exitosamente!');
    }
    public function eliminar($id){
        $vehiculos = Vehiculo::findOrFail($id);
        $vehiculos->delete();
        return back()->with('estado', 'El registro se elimino correctamente!!');
    }
    public function listar($id){
        $vehiculos = Vehiculo::findOrFail($id);

        return view('vvehiculo',compact('vehiculos'));
    }
}

