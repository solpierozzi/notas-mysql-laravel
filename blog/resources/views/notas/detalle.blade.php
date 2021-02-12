@extends('plantilla')
@section('seccion')
<h1>Detalle de nota: </h1>
<h4>ID: {{$nota->id}}</h4>
<h4>Nombre: {{$nota->name}}</h4>
<h4>Descripción: {{$nota->description}}</h4>
@endsection