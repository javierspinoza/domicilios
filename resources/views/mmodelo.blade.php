@extends('plantilla')

@section('titulo')
<img src="../../img/n1.jpg" width="30" height="30" class="d-inline-block align-top" alt="">
 <label class="mx-sm-3">Editar Modelos</label>
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

    <form action="{{route ('modelos.editar',$modelos->id)}}" method="post" class="form-horizontal">
        @method('PUT')
        @csrf    
        <div class="form-row">
            <div class="form-group col-md-3">
                <label>Nombre</label>
                <input type="text" name="modelo" class="form-control" placeholder="ingrese modelo" value="{{$modelos->modelo}}">
                @if ($errors->has('modelo'))
                    <small class="form-text text-danger">{{$errors->first('modelo')}}</small>
                @endif
            </div>
            <div class="form-group col-md-3">
                <label>Marca</label>
                <select class="form-control" name="id_marca">
                    <option value="{{$modelos->nomMar}}">{{$modelos->nomMar}}</option>
                </select>
            </div>                                                      
        </div>
        <div class="modal-footer">
            <a href="{{route('modelos')}}" class="btn btn-secondary" data-dismiss="modal">Atrás</a>
            <button type="submit" class="btn btn-primary">Editar</button>
        </div>
    </form>

@endsection

