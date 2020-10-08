@extends('layouts.app')

@section('titulo')
    <img src="../../img/n1.jpg" width="30" height="30" class="d-inline-block align-top" alt="">
    <label class="mx-sm-2">Gestión de Vehiculos</label>
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
        <a href="{{route ('vehiculo')}}"  class="btn btn-primary btn-sm">NUEVO</a>
    </div>
        <table class="table">        
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Placa</th>
                    <th scope="col">Descripción</th>
                    <th scope="col">Año</th>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  
                    <th scope="col">Opciones</th>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  
                </tr>
            </thead>
            <tbody>
                @foreach ($vehiculos as $objeto)
            
                    <tr>
                        <th scope="row">{{$objeto->id}}</th>
                        <th scope="row">{{$objeto->placa}}</th>  
                        <th scope="row">{{$objeto->descripcion}}</th>
                        <th scope="row">{{$objeto->año}}</th>                        
                        <th>
                            <a href="{{route ('vehiculos.listar',$objeto->id)}}" class="btn btn-info btn-sm mx-sm-1"> <i class="material-icons md-18">edit</i></a>
                            <form class="d-inline" action="{{route ('vehiculos.eliminar',$objeto->id)}}" method="POST">
                              @method('delete')
                              @csrf
                              <button type="submit" class="btn btn-danger btn-sm"> <i class="material-icons md-24">delete</i></button>
                            </form>
                        </th>                                                                                                                                              
                    </tr>
                @endforeach        
            </tbody>
        </table>
        {{$vehiculos->links()}}
@endsection
    
<script>
    function mostrar(){
        document.getElementById('tabla').style.display="flex";
    }
    function ocultar(){
        document.getElementById('tabla').style.display="none";
    }
</script>
