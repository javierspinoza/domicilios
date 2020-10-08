@extends('layouts.app')

@section('titulo')
    <img src="../../img/n1.jpg" width="30" height="30" class="d-inline-block align-top" alt="">
    <label class="mx-sm-2">Gestión de Pagos Empresa</label>
@endsection

@section('domicilio')
  
    @if (session('estado'))    
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{session ('estado')}}</strong>:D
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
<div class="d-flex flex-row-reverse bd-highlight">
    <a href="{{route ('pagoempresa')}}"  class="btn btn-primary btn-sm">NUEVO</a>
</div>
        <table class="table">        
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Cuota</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Empleado</th>                                        
                    <th scope="col">Opciones</th>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  
                </tr>
            </thead>
            <tbody>
                @foreach ($pagoempresas as $objeto)
            
                    <tr>
                        <th scope="row">{{$objeto->id}}</th>
                        <th scope="row">{{$objeto->cuota}}</th>
                        <th scope="row">{{$objeto->fecha}}</th>  
                        <th scope="row">{{$objeto->nomEmple}}</th>                                                  
                        <th>
                            <a href="{{route ('pagoempresas.listar',$objeto->id)}}" class="btn btn-info bt-sm mx-sm-1"> <i class="material-icons md-18">edit</i></a>
                            <form class="d-inline" action="{{route ('pagoempresas.eliminar',$objeto->id)}}" method="POST">
                              @method('delete')
                              @csrf
                              <button type="submit" class="btn btn-danger btn-sm"> <i class="material-icons md-24">delete</i></button>
                            </form>
                        </th>                                                                                                                                              
                    </tr>
                @endforeach        
            </tbody>
        </table>
        {{$pagoempresas->links()}}
@endsection
    
<script>
    function mostrar(){
        document.getElementById('tabla').style.display="flex";
    }
    function ocultar(){
        document.getElementById('tabla').style.display="none";
    }
</script>
