@extends('plantilla')

@section('titulo')
<img src="../../img/n1.jpg" width="30" height="30" class="d-inline-block align-top" alt="">
 <label class="mx-sm-3">Editar Pagos Empresa</label>
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

    <form action="{{route ('pagoempresas.editar',$pagoempresas->id)}}" method="post" class="form-horizontal">
        @method('PUT')
        @csrf    
        <div class="form-row">
            <div class="form-group col-md-3">
                <label>Cuota</label>
                <input type="number" name="cuota" class="form-control" placeholder="ingrese cuota" value="{{$pagoempresas->cuota}}">
                @if ($errors->has('cuota'))
                    <small class="form-text text-danger">{{$errors->first('cuota')}}</small>
                @endif
            </div>
            <div class="form-group col-md-3">
                <label>Fecha</label>
                <input type="date" name="fecha" class="form-control" placeholder="ingrese fecha" value="{{$pagoempresas->fecha}}">
                @if ($errors->has('fecha'))
                    <small class="form-text text-danger">{{$errors->first('fecha')}}</small>
                @endif
            </div>            
            <div class="form-group col-md-3">
                <label>Empleado</label>
                <select class="form-control" name="id_empleado">
                    <option value="{{$pagoempresas->nomEmple}}">{{$pagoempresas->nomEmple}}</option>
                </select>
            </div>                                                      
        </div>
        <div class="modal-footer">
            <a href="{{route('pagoempresas')}}" class="btn btn-secondary" data-dismiss="modal">Atrás</a>
            <button type="submit" class="btn btn-primary">Editar</button>
        </div>
    </form>

@endsection

