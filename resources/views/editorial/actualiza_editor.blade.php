@extends('master')
@section('content')
<form action ="{{route('actualiza_editores',$act->id)}}" method="POST">
@csrf
  <div class="col-md-4">
    <label for="validationCustom01" class="form-label">Nombre</label>
    <input type="text" class="form-control" id="nombre" name="nombre" value="{{$act->nombre}}"  required>
    <div class="valid-feedback">
      
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationCustom02" class="form-label">Direccion</label>
    <input type="text" class="form-control" id="direccion" name="direccion" value="{{$act->direccion}}"  required>
    <div class="valid-feedback">
     
    </div>
  </div>
  
  <div class="col-md-6">
    <label for="validationCustom03" class="form-label">Telefono</label>
    <input type="text" class="form-control" id="telefono" name="telefono" value="{{$act->telefono}}" required>
    <div class="invalid-feedback">
     
    </div>
  </div>
  <div class="col-md-6">
    <label for="validationCustom03" class="form-label">Ciudad</label>
    <input type="text" class="form-control" id="ciudad" name="ciudad" value="{{$act->ciudad}}"  required>
    <div class="invalid-feedback">
     
    </div>
 
   
  
  </div>
  <div class="col-12">
    <button class="btn btn-primary" type="submit">Actualizar</button>
  
  
  <a href="{{route('listado_editorial')}}" class="btn btn-secondary">Cancelar</a></td>
  </div>
  

</form>
@stop