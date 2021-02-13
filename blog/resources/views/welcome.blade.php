@extends('plantilla')
@section('seccion')
          <h1 class="display-4">Notas</h1>
          @if(session('mensaje'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{session('mensaje')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          @endif
          
          <form action="{{route('notas.crear')}}" method="POST">
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
            value="{{old('name')}}">
            <input type="text" name="description" placeholder="Descripción" class="form-control mb-2"
            value="{{old('description')}}">
            <button class="btn btn-primary btn-block" type="submit">Agregar</button>
          </form>
          <table class="table">
            <thead>
              <tr>
                <th scope="col">ID:</th>
                <th scope="col">Nombre:</th>
                <th scope="col">Descripción:</th>
                <th scope="col">Acciones:</th>
              </tr>
            </thead>
            <tbody>

              @foreach($notas as $nota)
              <tr>
                <th scope="row">{{$nota->id}}</th>
                <td>
                  <a href="{{route('notas.detalle',$nota)}}">{{$nota->name}}</a>
                  </td>
                <td>{{$nota->description}}</td>
                <td>
                  <a href="{{route('notas.editar',$nota)}}" class="btn btn-warning btn-sm">Editar</a>
                
                 <form action="{{route('notas.eliminar',$nota->id)}}" method="POST" class="d-inline">
                  @method('DELETE')
                  @csrf
                  <button class="btn btn-danger btn-sm" type="submit">Eliminar</button>
                </form>
                </td>
              </tr>
              @endforeach()
            
            </tbody>
          </table>

          {{$notas->links()}}
@endsection