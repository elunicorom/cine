@extends('salas.templates.main');
@section('title','Crear Sala');
@section('contenido')
  <br>
  <br>
  <div class="w3-card-4">
  <div class="w3-container w3-brown">
    <h2>Crear Sala</h2>
  </div>
  <form class="w3-container" action="{{url('salas/crear')}}" method="post" >
    <p>
    <label class="w3-text-brown"><b>Numero</b></label>
    <input class="w3-input w3-border w3-sand" name="numero" type="number" placeholder="Numero" required></p>
    <p>
    <label class="w3-text-brown"><b>Capacidad</b></label>
    <input class="w3-input w3-border w3-sand" name="capacidad" type="number" placeholder="Capacidad" required></p>
    <p>
    <button class="w3-btn w3-brown">Crear</button></p>
  </form>
  </div>

@endsection
