@extends('plantilla')

@section('titulo')
<img src="../../img/n1.jpg" width="30" height="30" class="d-inline-block align-top" alt="">
 <label class="mx-sm-3">Editar Direcciones</label>
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

    <form action="{{route ('direcciones.editar',$direcciones->id)}}" method="post" class="form-horizontal">
        @method('PUT')
        @csrf    
        <div class="form-row">            
            <div class="form-group col-md-3">
                <label>Dirección</label>
                <input type="text" name="direccion" class="form-control" placeholder="ingrese dirección" value="{{$direcciones->direccion}}">
                @if ($errors->has('direccion'))
                    <small class="form-text text-danger">{{$errors->first('direccion')}}</small>
                @endif
            </div>
            <div class="form-group col-md-3">
                <label>Otras</label>
                <input type="text" name="otras" class="form-control" placeholder="ingrese otras dorecciones" value="{{$direcciones->otras}}">
                @if ($errors->has('otras'))
                    <small class="form-text text-danger">{{$errors->first('otras')}}</small>
                @endif
            </div>            
            <div class="form-group col-md-3">
                <label>Cliente</label>
                <select class="form-control" name="id_cliente">
                    <option value="{{$direcciones->nomCliente}}">{{$direcciones->nomCliente}}</option>
                </select>
            </div>                                                                              
        </div>
        <div class="modal-footer">
            <a href="{{route('direcciones')}}" class="btn btn-secondary" data-dismiss="modal">Atrás</a>
            <button type="submit" class="btn btn-primary">Editar</button>
        </div>
    </form>

@endsection

