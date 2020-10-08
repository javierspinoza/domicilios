@extends('plantilla2')

@section('titulo')
    <img src="../../img/n1.jpg" width="30" height="30" class="d-inline-block align-top" alt="">
    <label class="mx-sm-2">Gestión de Marcas</label>
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

    <form action="{{route ('marcas.guardar')}}" method="POST" class="form-horizontal">
        @csrf
        <div class="form-row">
            <div class="form-group col-md-3">
                <label>Nombre</label>
                <input type="text" name="nombre" class="form-control" placeholder="ingrese nombre" value="{{old('nombre')}}">
                @if ($errors->has('nombre'))
                    <small class="form-text text-danger">{{$errors->first('nombre')}}</small>
                @endif
            </div>
            <div class="form-group col-md-3">
                <label>Placa Vehículo</label>
                <select class="form-control" name="id_vehiculo">
                    <option>Seleccione una opción</option>
                    @foreach ($vehiculos as $objeto)
                    <option value="{{$objeto->id}}">{{$objeto->placa}}</option>
                    @endforeach
                </select>
                @if ($errors->has('id_vehiculo'))
                    <small class="form-text text-danger">{{$errors->first('id_vehiculo')}}</small>
                @endif
            </div>                                                                     
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Guardar</button>
            <a href="{{route('marcas')}}" class="btn btn-secondary" data-dismiss="modal">Atrás</a>
        </div>
    </form>
@endsection