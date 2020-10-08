<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Http\Requests\marcaGuardarRequest;
use App\Marca;
use App\Vehiculo;
class marcaController extends Controller
{
    //
    public function index(){
        $marcas = Marca::join('vehiculos', 'marcas.id_vehiculo', 'vehiculos.id')
        ->select('marcas.id', 'marcas.nombre', 'vehiculos.placa as placaVeh')
        ->paginate(4);
        return view ('marca', compact('marcas'));
    }
    public function indexx(){
        $marcas = Marca::paginate(4);
        $vehiculos = Vehiculo::all();
        return view ('mmmarca', compact('marcas', 'vehiculos'));
    }
    public function guardar(marcaGuardarRequest $request){
        $marcas = new Marca;
        $marcas->nombre=$request->nombre;
        $marcas->id_vehiculo=$request->id_vehiculo;

        $marcas->save();

        return back()->with('estado', 'El registro ' . $request->nombre . ' se guardo exitosamente!');
    }
    public function editar(marcaGuardarRequest $request,$id){        
        $marcas = Marca::findOrFail($id);

        $marcas->nombre=$request->nombre;
        $marcas->id_vehiculo=$request->id_vehiculo;    

        $marcas->save();

        return back()->with('estado', 'El registro  ' . $request->nombre . ' se actualizo exitosamente!');
    }
    public function eliminar($id){
        $marcas = Marca::findOrFail($id);
        $marcas->delete();
        return back()->with('estado', 'El registro se elimino correctamente!!');
    }

    public function listar($id){
        $marcas = Marca::join('vehiculos', 'marcas.id_vehiculo', 'vehiculos.id')
        ->select('marcas.id', 'marcas.nombre', 'vehiculos.placa as placaVeh')
        ->findOrFail($id);

        return view('mmarca',compact('marcas'));
    }
}
