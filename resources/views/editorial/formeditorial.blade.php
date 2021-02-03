@extends('master')
@section('content')
<form action ="{{route('registro_edit')}}" method="POST" >
@csrf
  <div class="col-md-4">
    <label for="validationCustom01" class="form-label">Nombre</label>
    <input type="text" class="form-control" id="nombre" name="nombre"  required>
    <div class="valid-feedback">
      
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationCustom02" class="form-label">Direccion</label>
    <input type="text" class="form-control" id="direccion" name="direccion"  required>
    <div class="valid-feedback">
     
    </div>
  </div>
  
  <div class="col-md-6">
    <label for="validationCustom03" class="form-label">Telefono</label>
    <input type="text" class="form-control" id="telefono" name="telefono" required>
    <div class="invalid-feedback">
     
    </div>
  </div>
  <div class="col-md-6">
    <label for="validationCustom03" class="form-label">Ciudad</label>
    <input type="text" class="form-control" id="ciudad" name="ciudad" required>
    <div class="invalid-feedback">
     
    </div>
 
   
  
  </div>
  <div class="col-12">
    <button class="btn btn-primary" type="submit">Registrar</button>
  </div>
</form>
@stop