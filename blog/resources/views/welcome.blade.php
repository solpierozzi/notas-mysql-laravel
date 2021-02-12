@extends('plantilla')
@section('seccion')
          <h1 class="display-4">Notas</h1>
          <table class="table">
            <thead>
              <tr>
                <th scope="col">#id</th>
                <th scope="col">Nombre</th>
                <th scope="col">Descripción</th>
                <th scope="col">Handle</th>
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