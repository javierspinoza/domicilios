<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Http\Requests\direccionGuardarRequest;
use App\Direccion;
use App\Cliente;
class direccionController extends Controller
{
    //
    public function index(){
        $direcciones = Direccion::join('clientes', 'direccions.id_cliente', '=', 'clientes.id')
        ->select('direccions.id', 'direccions.direccion', 'direccions.otras', 'clientes.nombre as nomCliente')
        ->paginate(4);
        return view ('direccion', compact('direcciones'));
    }
    public function indexx(){
        $direcciones = Direccion::all();
        $clientes = Cliente::all();
        return view ('dddireccion', compact('direcciones', 'clientes'));
    }
    public function guardar(direccionGuardarRequest $request){
        $direcciones = new Direccion;        
        $direcciones->direccion=$request->direccion;
        $direcciones->otras=$request->otras;
        $direcciones->id_cliente=$request->id_cliente;

        $direcciones->save();

        return back()->with('estado', 'El registro ' . $request->direccion . ' se guardo exitosamente!');
    }
    public function editar(direccionGuardarRequest $request,$id){        
        $direcciones = Direccion::findOrFail($id);
        
        $direcciones->direccion=$request->direccion;
        $direcciones->otras=$request->otras;
        $direcciones->id_cliente=$request->id_cliente;

        $direcciones->save();


        return back()->with('estado', 'El registro  ' . $request->direccion . ' se actualizo exitosamente!');
    }
    public function eliminar($id){
        $direcciones = Direccion::findOrFail($id);
        $direcciones->delete();
        return back()->with('estado', 'El registro se elimino correctamente!!');
    }

    public function listar($id){
        $direcciones = Direccion::join('clientes', 'direccions.id_cliente', '=', 'clientes.id')
        ->select('direccions.id', 'direccions.direccion', 'direccions.otras', 'clientes.nombre as nomCliente')
        ->findOrFail($id);

        return view('ddireccion',compact('direcciones'));
    }
}
