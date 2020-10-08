@extends('plantilla')

@section('titulo')
<img src="../../img/n1.jpg" width="30" height="30" class="d-inline-block align-top" alt="">
 <label class="mx-sm-3">Editar Servicios</label>
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

    <form action="{{route ('servicios.editar',$servicios->id)}}" method="post" class="form-horizontal">
        @method('PUT')
        @csrf    
        <div class="form-row">            
            <div class="form-group col-md-3">
                <label>Fecha y Hora</label>
                <input type="text" name="fecha_hora" class="form-control" placeholder="ingrese fecha y hora" value="{{$servicios->fecha_hora}}">
                @if ($errors->has('fecha_hora'))
                    <small class="form-text text-danger">{{$errors->first('fecha_hora')}}</small>
                @endif
            </div>
            <div class="form-group col-md-3">
                <label>Descripción</label>
                <input type="text" name="descripcion" class="form-control" placeholder="ingrese descripcion" value="{{$servicios->descripcion}}">
                @if ($errors->has('descripcion'))
                    <small class="form-text text-danger">{{$errors->first('descripcion')}}</small>
                @endif
            </div>
            <div class="form-group col-md-3">
                <label>Tiempo Servicio</label>
                <input type="time" name="tiempo_servicio" class="form-control" placeholder="ingrese tiempo_servicio" value="{{$servicios->tiempo_servicio}}">
                @if ($errors->has('tiempo_servicio'))
                    <small class="form-text text-danger">{{$errors->first('tiempo_servicio')}}</small>
                @endif
            </div>
            <div class="form-group col-md-3">
                <label>Dirección</label>
                <input type="text" name="direccion" class="form-control" placeholder="ingrese direccion" value="{{$servicios->direccion}}">
                @if ($errors->has('direccion'))
                    <small class="form-text text-danger">{{$errors->first('direccion')}}</small>
                @endif
            </div>
            <div class="form-group col-md-3">
                <label>Cliente</label>
                <select class="form-control" name="id_cliente">
                    <option value="{{$servicios->nomCliente}}">{{$servicios->nomCliente}}</option>
                </select>
            </div>            
            <div class="form-group col-md-3">
                <label>Empleado</label>
                <select class="form-control" name="id_empleado">
                    <option value="{{$servicios->nomEmp}}">{{$servicios->nomEmp}}</option>
                </select>
            </div>                                                      
        </div>
        <div class="modal-footer">
            <a href="{{route('servicios')}}" class="btn btn-secondary" data-dismiss="modal">Atrás</a>
            <button type="submit" class="btn btn-primary">Editar</button>
        </div>
    </form>

@endsection

