<!DOCTYPE html>
<html>
<title>@yield('title','Default')</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="{{ asset('css/w3.css') }}">
  <link rel="stylesheet" href="{{ asset('css/fonts/style.css') }}">
<style>
body,table,td,tr,thead {font-family: "Lato", sans-serif}
.mySlides {display: none}
</style>
<body>
<div class="w3-top">
  <div class="w3-bar w3-brown w3-card-2">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i ></i></a>
    <a href="{{ url('/') }}" class="w3-bar-item w3-button w3-padding-large icon-home"></a>
    <a href="{{ url('/usuarios') }}" class="w3-bar-item w3-button w3-padding-large" >Usuarios</a>
    <a href="{{ url('/salas') }}" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Salas</a>
    </div>

  </div>
</div>
  <div class="w3-container">
    @yield('contenido');
  </div>


</div>
</body>
</html>
