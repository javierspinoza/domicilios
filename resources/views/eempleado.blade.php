@extends('plantilla')

@section('titulo')
<img src="../../img/n1.jpg" width="30" height="30" class="d-inline-block align-top" alt="">
 <label class="mx-sm-3">Editar Empleados</label>
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

    <form action="{{route ('empleados.editar',$empleados->id)}}" method="post" class="form-horizontal">
        @method('PUT')
        @csrf    
        <div class="form-row">
            <div class="form-group col-md-3">
                <label>Nombres</label>
                <input type="text" name="nombres" class="form-control" placeholder="ingrese nombres" value="{{$empleados->nombres}}">
                @if ($errors->has('nombres'))
                    <small class="form-text text-danger">{{$errors->first('nombres')}}</small>
                @endif
            </div>
            <div class="form-group col-md-3">
                <label>Apellidos</label>
                <input type="text" name="apellidos" class="form-control" placeholder="ingrese apellidos" value="{{$empleados->apellidos}}">
                @if ($errors->has('apellidos'))
                    <small class="form-text text-danger">{{$errors->first('apellidos')}}</small>
                @endif
            </div>
            <div class="form-group col-md-3">
                <label>Cédula</label>
                <input type="text" name="cedula" class="form-control" placeholder="ingrese cÉdula" value="{{$empleados->cedula}}">
                @if ($errors->has('cedula'))
                    <small class="form-text text-danger">{{$errors->first('cedula')}}</small>
                @endif
            </div>
            <div class="form-group col-md-3">
                <label>Teléfono</label>
                <input type="number" name="telefono" class="form-control" placeholder="ingrese teléfono" value="{{$empleados->telefono}}">
                @if ($errors->has('telefono'))
                    <small class="form-text text-danger">{{$errors->first('telefono')}}</small>
                @endif
            </div>
            <div class="form-group col-md-3">
                <label>Dirección</label>
                <input type="text" name="direccion" class="form-control" placeholder="ingrese dirección" value="{{$empleados->direccion}}">
                @if ($errors->has('direccion'))
                    <small class="form-text text-danger">{{$errors->first('direccion')}}</small>
                @endif
            </div>
            <div class="form-group col-md-3">
                <label>Pase de Conducción</label>
                <input type="text" name="pase_conduccion" class="form-control" placeholder="ingrese pase de conducción" value="{{$empleados->pase_conduccion}}">
                @if ($errors->has('pase_conduccion'))
                    <small class="form-text text-danger">{{$errors->first('pase_conduccion')}}</small>
                @endif
            </div>
            <div class="form-group col-md-3">
                <label>Fecha Ingreso</label>
                <input type="date" name="fecha_ingreso" class="form-control" placeholder="ingrese fecha de ingreso" value="{{$empleados->fecha_ingreso}}">
                @if ($errors->has('fecha_ingreso'))
                    <small class="form-text text-danger">{{$errors->first('fecha_ingreso')}}</small>
                @endif
            </div>
            <div class="form-group col-md-3">
                <label>Placa Vehículo</label>
                <select class="form-control" name="id_vehiculo">
                    <option value="{{$empleados->placa}}">{{$empleados->placa}}</option>
                </select>
            </div>                                                      
        </div>
        <div class="modal-footer">
            <a href="{{route('empleados')}}" class="btn btn-secondary" data-dismiss="modal">Atrás</a>
            <button type="submit" class="btn btn-primary">Editar</button>
        </div>
    </form>

@endsection

