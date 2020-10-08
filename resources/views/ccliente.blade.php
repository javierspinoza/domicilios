@extends('plantilla')

@section('titulo')
<img src="../../img/n1.jpg" width="30" height="30" class="d-inline-block align-top" alt="">
 <label class="mx-sm-3">Editar Clientes</label>
@endsection

@section('domicilio')

    {{-- envia un alerta de que se guardo exitosamente --}}
    @if (session('estado'))    
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{session ('estado')}}</strong>:D
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    <form action="{{route ('clientes.editar',$clientes->id)}}" method="post" class="form-horizontal">
        @method('PUT')
        @csrf    
        <div class="form-row">
            <div class="form-group col-md-3">
                <label>Nombre</label>
                <input type="text" name="nombre" class="form-control" placeholder="ingrese nombre" value="{{$clientes->nombre}}">
                @if ($errors->has('nombre'))
                    <small class="form-text text-danger">{{$errors->first('nombre')}}</small>
                @endif
            </div>
            <div class="form-group col-md-3">
                <label>Teléfono</label>
                <input type="number" name="telefono" class="form-control" placeholder="ingrese teléfono" value="{{$clientes->telefono}}">
                @if ($errors->has('telefono'))
                    <small class="form-text text-danger">{{$errors->first('telefono')}}</small>
                @endif
            </div>                                                      
        </div>
        <div class="modal-footer">
            <a href="{{route('clientes')}}" class="btn btn-secondary" data-dismiss="modal">Atrás</a>
            <button type="submit" class="btn btn-primary">Editar</button>
        </div>
    </form>

@endsection

