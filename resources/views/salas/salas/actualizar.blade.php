@extends('salas.templates.main');
@section('title','Edicion')
@section('contenido')
  <br>
  <br>
  <div class="w3-card-4">
  <div class="w3-container w3-brown">
    <h2>Actualizar datos</h2>
  </div>
  <form class="w3-container" action="{{url('salas/actualizar',[$salas->id])}}" method="post" >
    <p>
    <input type="hidden" name="id" value="{{$salas->id}}">
    <label class="w3-text-brown"><b>Numero</b></label>
    <input class="w3-input w3-border w3-sand" name="numero" type="number" placeholder="Numero" value="{{$salas->numero}}" required></p>
    <p>
    <label class="w3-text-brown"><b>Capacidad</b></label>
    <input class="w3-input w3-border w3-sand" name="capacidad" type="number" placeholder="Capacidad" value="{{$salas->capacidad}}" required></p>
    <p>
    <button class="w3-btn w3-brown">Actualizar</button></p>
  </form>
  </div>
@endsection
