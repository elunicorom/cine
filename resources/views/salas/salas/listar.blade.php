@extends('salas.templates.main');
@section('title','Listado de Salas');

@section('contenido')
<br>
<br>
  <table class="w3-table-all ">
      <thead>
        <tr class="w3-brown">
          <th>Id</th>
          <th>Numero</th>
          <th>Capacidad</th>
          <th>Accion</th>
          <th>Accion</th>
        </tr>
      </thead>
      @foreach($salas as $sala)
        <tr>
          <td>{{$sala->id}}</td>
          <td>{{$sala->numero}}</td>
          <td>{{$sala->capacidad}}</td>
          <td>
            <a href="{{$sala->id}}/edit" class="w3-button w3-green w3-round-xlarge">Editar</a>
          </td>
          <td>
            <form action="{{url('/salas/eliminar',[$sala->id])}}" method="POST" onclick="return confirm('¿Seguro desea eliminar este registro?')">
  							<button type="submit" class="w3-button w3-green w3-round-xlarge">Eliminar</button>
  					</form>
          </td>
        </tr>
      @endforeach
    </table>

@endsection
