<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Http\Requests\clienteGuardarRequest;
use App\Cliente;
class clienteController extends Controller
{
    //
    public function index(){
        $clientes = Cliente::paginate(4);        
        return view ('cliente', compact('clientes'));
    }
    public function indexx(){
        $clientes = Cliente::paginate(4);        
        return view ('cccliente', compact('clientes'));
    }
    public function guardar(clienteGuardarRequest $request){
        $clientes = new Cliente;
        $clientes->nombre=$request->nombre;
        $clientes->telefono=$request->telefono;
        
        $clientes->save();

        return back()->with('estado', 'El registro ' . $request->nombre . ' se guardo exitosamente!');
    }
    public function editar(clienteGuardarRequest $request,$id){        
        $clientes = Cliente::findOrFail($id);

        $clientes->nombre=$request->nombre;
        $clientes->telefono=$request->telefono;
        
        $clientes->save();

        return back()->with('estado', 'El registro  ' . $request->nombre . ' se actualizo exitosamente!');
    }
    public function eliminar($id){
        $clientes = Cliente::findOrFail($id);
        $clientes->delete();
        return back()->with('estado', 'El registro se elimino correctamente!!');
    }
    public function listar($id){
        $clientes = Cliente::findOrFail($id);

        return view('ccliente',compact('clientes'));
    }
}
