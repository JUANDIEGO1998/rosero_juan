@extends('master')
@section('content')

<div class="alert alert-primary" role="alert">
 <h1 class="text-center"> listado editorial </h1>
 <a href="{{route('registro_editorial')}}" class="btn btn-secondary">registrar</a>
</div>

<table class="table">
    <thead>
        <tr>
        <th scope="col">numero</th>
            <th scope="col">nombre</th>
            <th scope="col">direccion</th>
            <th scope="col">ciudad </th>
            <th scope="col">telefono </th>
        </tr>
    </thead>
    <tbody>
    @foreach($editorial as $c)
      
            <tr>
            <td> {{ $c->id }} </td>
            <td> {{ $c->nombre }} </td>
            <td> {{ $c->direccion }}</td>
            <td> {{ $c->ciudad }}</td>
            <td> {{ $c->telefono }}</td>
           </tr>
        
    @endforeach
    </tbody>
</table 
@stop