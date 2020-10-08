@extends('plantilla2')

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

    <form action="{{route ('pagoempresas.guardar')}}" method="POST" class="form-horizontal">
        @csrf
        <div class="form-row">
            <div class="form-group col-md-3">
                <label>Cuota</label>
                <input type="number" name="cuota" class="form-control" placeholder="ingrese cuota" value="{{old('cuota')}}">
                @if ($errors->has('cuota'))
                    <small class="form-text text-danger">{{$errors->first('cuota')}}</small>
                @endif
            </div>
            <div class="form-group col-md-3">
                <label>Fecha</label>
                <input type="date" name="fecha" class="form-control" placeholder="ingrese fecha" value="{{old('fecha')}}">
                @if ($errors->has('fecha'))
                    <small class="form-text text-danger">{{$errors->first('fecha')}}</small>
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
            <a href="{{route('pagoempresas')}}" class="btn btn-secondary" data-dismiss="modal">Atrás</a>
        </div>
    </form>
@endsection