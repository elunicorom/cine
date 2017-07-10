@extends('users.templates.main');
@section('title','Edicion')
@section('contenido')
  <br>
  <br>
  <div class="w3-card-4">
  <div class="w3-container w3-brown">
    <h2>Actualizar datos</h2>
  </div>
  <form class="w3-container" action="{{url('actualizar',[$usuarios->id])}}" method="post" >
    <p>
    <input type="hidden" name="id" value="{{$usuarios->id}}">
    <label class="w3-text-brown"><b>Username</b></label>
    <input class="w3-input w3-border w3-sand" name="username" type="text" placeholder="Username" value="{{$usuarios->username}}" required></p>
    <p>
    <label class="w3-text-brown"><b>Password</b></label>
    <input class="w3-input w3-border w3-sand" name="password" type="password" placeholder="Password" value="{{$usuarios->password}}" required></p>
    <p>
    <label class="w3-text-brown"><b>DNI</b></label>
    <input type="text" name="cedula" class="w3-input w3-border w3-sand" placeholder="Cedula" value="{{$usuarios->cedula}}" required><p>
    </p>
    <label class="w3-text-brown"><b>Email</b></label>
    <input class="w3-input w3-border w3-sand" name="email" type="text" placeholder="Email" value="{{$usuarios->email}}" required></p>
    <p>
    <label class="w3-text-brown"><b>Nombre</b></label>
    <input class="w3-input w3-border w3-sand" name="nombre" type="text" placeholder="Nombre" value="{{$usuarios->nombre}}" required></p>
    <p>
    <label class="w3-text-brown"><b>Apellido</b></label>
    <input type="text" name="apellido" class="w3-input w3-border w3-sand" placeholder="Apellido" value="{{$usuarios->apellido}}" required><p>
    </p>
    <button class="w3-btn w3-brown">Actualizar</button></p>
  </form>
  </div>
@endsection
