@extends('plantilla2')

@section('titulo')
    <img src="../../img/n1.jpg" width="30" height="30" class="d-inline-block align-top" alt="">
    <label class="mx-sm-2">Gestión de Vehiculos</label>
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

    <form action="{{route ('vehiculos.guardar')}}" method="POST" class="form-horizontal">
        @csrf
        <div class="form-row">
            <div class="form-group col-md-3">
                <label>Placa</label>
                <input type="text" name="placa" class="form-control" placeholder="ingrese placa" value="{{old('placa')}}">
                @if ($errors->has('placa'))
                    <small class="form-text text-danger">{{$errors->first('placa')}}</small>
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
                <label>Año</label>
                <input type="text" name="año" class="form-control" placeholder="ingrese año" value="{{old('año')}}">
                @if ($errors->has('año'))
                    <small class="form-text text-danger">{{$errors->first('año')}}</small>
                @endif
            </div>                                                                        
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Guardar</button>
            <a href="{{route('vehiculos')}}" class="btn btn-secondary" data-dismiss="modal">Atrás</a>
        </div>
    </form>
@endsection