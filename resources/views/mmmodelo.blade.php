@extends('plantilla2')

@section('titulo')
    <img src="../../img/n1.jpg" width="30" height="30" class="d-inline-block align-top" alt="">
    <label class="mx-sm-2">Gestión de Modelos</label>
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

    <form action="{{route ('modelos.guardar')}}" method="POST" class="form-horizontal">
        @csrf
        <div class="form-row">
            <div class="form-group col-md-3">
                <label>Modelo</label>
                <input type="text" name="modelo" class="form-control" placeholder="ingrese modelo" value="{{old('modelo')}}">
                @if ($errors->has('modelo'))
                    <small class="form-text text-danger">{{$errors->first('modelo')}}</small>
                @endif
            </div>
            <div class="form-group col-md-3">
                <label>Marca</label>
                <select class="form-control" name="id_marca">
                    <option>Seleccione una opción</option>
                    @foreach ($marcas as $objeto)
                    <option value="{{$objeto->id}}">{{$objeto->nombre}}</option>
                    @endforeach
                </select>
                @if ($errors->has('id_marca'))
                    <small class="form-text text-danger">{{$errors->first('id_marca')}}</small>
                @endif
            </div>                                                                     
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Guardar</button>
            <a href="{{route('modelos')}}" class="btn btn-secondary" data-dismiss="modal">Atrás</a>
        </div>
    </form>
@endsection