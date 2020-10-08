@extends('plantilla2')

@section('titulo')
    <img src="../../img/n1.jpg" width="30" height="30" class="d-inline-block align-top" alt="">
    <label class="mx-sm-2">Gestión de Servicios</label>
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
    
<form action="{{route ('servicios.guardar')}}" method="POST" class="form-horizontal">
    @csrf
    <div class="form-row">            
        <div class="form-group col-md-3">
            <label>Fecha y Hora</label>
            <input type="text" name="fecha_hora" class="form-control" placeholder="ingrese fecha y hora" value="{{old('fecha_hora')}}">
            @if ($errors->has('fecha_hora'))
                <small class="form-text text-danger">{{$errors->first('fecha_hora')}}</small>
            @endif
        </div>
        <div class="form-group col-md-3">
            <label>Descripción</label>
            <input type="text" name="descripcion" class="form-control" placeholder="ingrese descripción" value="{{old('descripcion')}}">
            @if ($errors->has('descripcion'))
                <small class="form-text text-danger">{{$errors->first('descripcion')}}</small>
            @endif
        </div>
        <div class="form-group col-md-3">
            <label>Tiempo Servicio</label>
            <input type="time" name="tiempo_servicio" class="form-control" placeholder="ingrese tiempo servicio" value="{{old('tiempo_servicio')}}">
            @if ($errors->has('tiempo_servicio'))
                <small class="form-text text-danger">{{$errors->first('tiempo_servicio')}}</small>
            @endif
        </div>
        <div class="form-group col-md-3">
            <label>Dirección</label>
            <input type="text" name="direccion" class="form-control" placeholder="ingrese dirección" value="{{old('direccion')}}">
            @if ($errors->has('direccion'))
                <small class="form-text text-danger">{{$errors->first('direccion')}}</small>
            @endif
        </div>              
        <div class="form-group col-md-3">
            <label>Cliente</label>
            <select class="form-control" name="id_cliente">
                <option>Seleccione una opción</option>
                @foreach ($clientes as $objeto)
                <option value="{{$objeto->id}}">{{$objeto->nombre}}</option>
                @endforeach
            </select>
            @if ($errors->has('id_cliente'))
                <small class="form-text text-danger">{{$errors->first('id_cliente')}}</small>
            @endif
        </div>
        <div class="form-group col-md-3">
            <label>Empleado</label>
            <select class="form-control" name="id_empleado">
                <option>Seleccione una opción</option>
                @foreach ($empleados as $objeto)
                <option value="{{$objeto->id}}">{{$objeto->nombres}}</option>
                @endforeach
            </select>
            @if ($errors->has('id_empleado'))
                <small class="form-text text-danger">{{$errors->first('id_empleado')}}</small>
            @endif
        </div>                                                                     
    </div>
    <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Guardar</button>
        <a href="{{route('servicios')}}" class="btn btn-secondary" data-dismiss="modal">Atrás</a>
    </div>
</form>
@endsection
