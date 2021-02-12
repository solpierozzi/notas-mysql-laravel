@extends('plantilla')

@section('seccion')
<h1>Este es mi equipo de trabajo: </h1>
@foreach($equipo as $item)
<a href="{{route('nosotros',$item)}}" class="h4 text-danger">{{$item}}</a>
@endforeach

@if(!empty($nombre))
    @switch($nombre)
        @case($nombre=='Ignacio')
            <h2 class="mt-5">El nombre es {{$nombre}}</h2>
            <p>{{$nombre}} Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, voluptatem recusandae. Rem, quisquam unde. Tempore voluptas nostrum facilis natus, id expedita. Nobis provident natus voluptas tempore aspernatur ad facilis repellendus.</p>
            @break
        @case($nombre=='Pedrito')
            <h2 class="mt-5">El nombre es {{$nombre}}</h2>
            <p>{{$nombre}} Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, voluptatem recusandae. Rem, quisquam unde. Tempore voluptas nostrum facilis natus, id expedita. Nobis provident natus voluptas tempore aspernatur ad facilis repellendus.</p> 
            @break
        @case($nombre=='Juanito')
            <h2 class="mt-5">El nombre es {{$nombre}}</h2>
            <p>{{$nombre}} Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, voluptatem recusandae. Rem, quisquam unde. Tempore voluptas nostrum facilis natus, id expedita. Nobis provident natus voluptas tempore aspernatur ad facilis repellendus.</p> 
            @break
            
    @endswitch

@endif

@endsection