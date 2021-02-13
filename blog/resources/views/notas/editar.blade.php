@extends('plantilla')
@section('seccion')
<h1>Editar Nota: {{$nota->id}} </h1>

@if(session('mensaje'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  {{session('mensaje')}}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif


<form action="{{route('notas.update',$nota->id)}}" method="POST">
    @method('PUT')
    @csrf
    
    @if($errors->has('description'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      La descripción es requerida
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    @endif
    @if($errors->has('name'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      El nombre es requerido
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    @endif
    
    <input type="text" name="name" placeholder="Nombre" class="form-control mb-2"
    value="{{$nota->name}}">
    
    <input type="text" name="description" placeholder="Descripción" class="form-control mb-2"
    value="{{$nota->description}}">
    
    <button class="btn btn-warning btn-block" type="submit">Editar</button>
  </form>

@endsection