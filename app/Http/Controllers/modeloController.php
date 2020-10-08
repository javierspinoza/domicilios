<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Http\Requests\modeloGuardarRequest;
use App\Modelo;
use App\Marca;
class modeloController extends Controller
{
    //
    public function index(){
        $modelos = Modelo::join('marcas', 'modelos.id_marca', 'marcas.id')
        ->select('modelos.id', 'modelos.modelo', 'marcas.nombre as nomMar')
        ->paginate(4);
        return view ('modelo', compact('modelos'));
    }
    public function indexx(){
        $modelos = Modelo::paginate(4);
        $marcas = Marca::all();
        return view ('mmmodelo', compact('modelos', 'marcas'));
    }
    public function guardar(modeloGuardarRequest $request){
        $modelos = new Modelo;
        $modelos->modelo=$request->modelo;
        $modelos->id_marca=$request->id_marca;

        $modelos->save();

        return back()->with('estado', 'El registro ' . $request->modelo . ' se guardo exitosamente!');
    }
    public function editar(modeloGuardarRequest $request,$id){        
        $modelos = Modelo::findOrFail($id);

        $modelos->modelo=$request->modelo;
        $modelos->id_marca=$request->id_marca;    

        $modelos->save();

        return back()->with('estado', 'El registro  ' . $request->modelo . ' se actualizo exitosamente!');
    }
    public function eliminar($id){
        $modelos = Modelo::findOrFail($id);
        $modelos->delete();
        return back()->with('estado', 'El registro se elimino correctamente!!');
    }

    public function listar($id){
        $modelos = Modelo::join('marcas', 'modelos.id_marca', 'marcas.id')
        ->select('modelos.id', 'modelos.modelo', 'marcas.nombre as nomMar')
        ->findOrFail($id);

        return view('mmodelo',compact('modelos'));
    }
}
