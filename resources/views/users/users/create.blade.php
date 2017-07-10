@extends('users.templates.main');
@section('title','Crear Usuario');
@section('contenido')
  <br>
  <br>
  <div class="w3-card-4">
  <div class="w3-container w3-brown">
    <h2>Crear Usuario</h2>
  </div>
  <form class="w3-container" action="{{url('crear')}}" method="post" >
    <p>
    <label class="w3-text-brown"><b>Username</b></label>
    <input class="w3-input w3-border w3-sand" name="username" type="text" placeholder="Username" required></p>
    <p>
    <label class="w3-text-brown"><b>Password</b></label>
    <input class="w3-input w3-border w3-sand" name="password" type="password" placeholder="Password" required></p>
    <p>
    <label class="w3-text-brown"><b>DNI</b></label>
    <input type="text" name="cedula" class="w3-input w3-border w3-sand" placeholder="Cedula" required><p>
    </p>
    <label class="w3-text-brown"><b>Email</b></label>
    <input class="w3-input w3-border w3-sand" name="email" type="text" placeholder="Email" required></p>
    <p>
    <label class="w3-text-brown"><b>Nombre</b></label>
    <input class="w3-input w3-border w3-sand" name="nombre" type="text" placeholder="Nombre" required></p>
    <p>
    <label class="w3-text-brown"><b>Apellido</b></label>
    <input type="text" name="apellido" class="w3-input w3-border w3-sand" placeholder="Apellido" required><p>
    </p>
    <button class="w3-btn w3-brown">Crear</button></p>
  </form>
  </div>

@endsection
