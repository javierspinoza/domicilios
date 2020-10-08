@extends('plantilla2')

@section('titulo')
    <img src="../../img/n1.jpg" width="30" height="30" class="d-inline-block align-top" alt="">
    <label class="mx-sm-2">Gestión de Direcciones</label>
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

    <form action="{{route ('direcciones.guardar')}}" method="POST" class="form-horizontal">
        @csrf
        <div class="form-row">            
            <div class="form-group col-md-3">
                <label>Dirección</label>
                <input type="text" name="direccion" class="form-control" placeholder="ingrese dirección" value="{{old('direccion')}}">
                @if ($errors->has('direccion'))
                    <small class="form-text text-danger">{{$errors->first('direccion')}}</small>
                @endif
            </div>
            <div class="form-group col-md-3">
                <label>Otras</label>
                <input type="text" name="otras" class="form-control" placeholder="ingrese otras direcciones" value="{{old('otras')}}">
                @if ($errors->has('otras'))
                    <small class="form-text text-danger">{{$errors->first('descripcion')}}</small>
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
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Guardar</button>
            <a href="{{route('direcciones')}}" class="btn btn-secondary" data-dismiss="modal">Atrás</a>
        </div>
    </form>
@endsection