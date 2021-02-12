@extends('plantilla')
@section('seccion')
          <h1 class="display-4">Notas</h1>
          @if(session('mensaje'))
          <div class="alert alert-success">
            {{session('mensaje')}}
          </div>
          @endif
          
          <form action="{{route('notas.crear')}}" method="POST">
            @csrf
            
            @error('name')
            <div class="alert alert-danger">El nombre es obligatorio!</div>
            @enderror

            @error('description')
            <div class="alert alert-danger">La descripción es obligatoria!</div>
            @enderror

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
                <td>@mdo</td>
              </tr>
              @endforeach()
            
            </tbody>
          </table>
@endsection