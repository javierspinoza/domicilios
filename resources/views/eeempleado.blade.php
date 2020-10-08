@extends('plantilla2')

@section('titulo')
    <img src="../../img/n1.jpg" width="30" height="30" class="d-inline-block align-top" alt="">
    <label class="mx-sm-2">Gestión de Empleados</label>
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

    <form action="{{route ('empleados.guardar')}}" method="POST" class="form-horizontal">
        @csrf
        <div class="form-row">
            <div class="form-group col-md-3">
                <label>Nombre</label>
                <input type="text" name="nombres" class="form-control" placeholder="ingrese nombres" value="{{old('nombres')}}">
                @if ($errors->has('nombres'))
                    <small class="form-text text-danger">{{$errors->first('nombres')}}</small>
                @endif
            </div>
            <div class="form-group col-md-3">
                <label>Apellidos</label>
                <input type="text" name="apellidos" class="form-control" placeholder="ingrese apellidos" value="{{old('apellidos')}}">
                @if ($errors->has('apellidos'))
                    <small class="form-text text-danger">{{$errors->first('apellidos')}}</small>
                @endif
            </div>
            <div class="form-group col-md-3">
                <label>Cédula</label>
                <input type="number" name="cedula" class="form-control" placeholder="ingrese cédula" value="{{old('cedula')}}">
                @if ($errors->has('cedula'))
                    <small class="form-text text-danger">{{$errors->first('cedula')}}</small>
                @endif
            </div>
            <div class="form-group col-md-3">
                <label>Teléfono</label>
                <input type="number" name="telefono" class="form-control" placeholder="ingrese teléfono" value="{{old('telefono')}}">
                @if ($errors->has('telefono'))
                    <small class="form-text text-danger">{{$errors->first('telefono')}}</small>
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
                <label>Pase de Conducción</label>
                <input type="text" name="pase_conduccion" class="form-control" placeholder="ingrese pase de conducción" value="{{old('pase_conduccion')}}">
                @if ($errors->has('pase_conduccion'))
                    <small class="form-text text-danger">{{$errors->first('pase_conduccion')}}</small>
                @endif
            </div>
            <div class="form-group col-md-3">
                <label>Fecha Ingreso</label>
                <input type="date" name="fecha_ingreso" class="form-control" placeholder="ingrese fecha de ingreso" value="{{old('fecha_ingreso')}}">
                @if ($errors->has('fecha_ingreso'))
                    <small class="form-text text-danger">{{$errors->first('fecha_ingreso')}}</small>
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
            <a href="{{route('empleados')}}" class="btn btn-secondary" data-dismiss="modal">Atrás</a>
        </div>
    </form>
@endsection