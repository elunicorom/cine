@extends('users.templates.main');
@section('title','Listado de Usuarios');

@section('contenido')
<br>
<br>
  <table class="w3-table-all ">
      <thead>
        <tr class="w3-brown">
          <th>Id</th>
          <th>Username</th>
          <th>Password</th>
          <th>DNI</th>
          <th>Email</th>
          <th>Nombre</th>
          <th>Apellido</th>
          <th>Accion</th>
          <th>Accion</th>
        </tr>
      </thead>
      @foreach($usuarios as $usuario)
        <tr>
          <td>{{$usuario->id}}</td>
          <td>{{$usuario->username}}</td>
          <td>{{$usuario->password}}</td>
          <td>{{$usuario->cedula}}</td>
          <td>{{$usuario->email}}</td>
          <td>{{$usuario->nombre}}</td>
          <td>{{$usuario->apellido}}</td>
          <td>
            <a href="{{$usuario->id}}/edit" class="w3-button w3-green w3-round-xlarge">Editar</a>
          </td>
          <td>
            <form action="{{url('eliminar',[$usuario->id])}}" method="POST" onclick="return confirm('¿Seguro desea eliminar este registro?')">
  							<button type="submit" class="w3-button w3-green w3-round-xlarge">Eliminar</button>
  					</form>
          </td>
        </tr>
      @endforeach
    </table>

@endsection
