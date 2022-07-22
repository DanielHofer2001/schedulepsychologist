<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- REFERENCIAS DE BOOTSTRAP -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/gh/vaibhav111tandon/vov.css@latest/vov.css" rel="stylesheet" type="text/css">

  <!-- REFERENCIAS A LOS CSS Y ANIMACIONES -->
  <link rel="stylesheet" href="{{asset('CSS/vov.min.css')}}">
  <link rel="stylesheet" href="{{asset('CSS/inicio.css')}}">
  <link rel="stylesheet" href="{{asset('CSS/administrador.css')}}">
  <link rel="stylesheet" href="{{asset('CSS/registro.css')}}">

    <title>AGENDAR HORA</title>
</head>
<body>
    
<div class="container">
    <!--NAVEGACION PRINCIPAL-->
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
        <span class="fs-4 lbl_register2 mt-3">Schedule Psychologist Administrador</span>
      </a>
      <!--VENTANAS-->
      <ul class="nav nav-pills">
        <li class="nav-item"><a href="public/admincliente" class="nav-link" aria-current="page">Clientes</a></li>
        <li class="nav-item"><a href="agendar_hora" class="nav-link active">Agendar Hora</a></li>

        <li class="nav-item"> <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">Cerrar Sesion</a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">@csrf</form>
        </li>

      </ul>
    </header>
  </div>

<form class="frm_registrarse2">
    <h1 class="h3 mb-3 lbl_register2">Ingrese la hora que desea agendar</h1>

    <div class="form-floating">
      <input type="date" class="form-control" id="floatingInput">
      <label for="floatingInput">Dia / mes / año</label>
    </div>

    <div class="form-floating">
      <input type="time" class="form-control" id="floatingInput">
      <label for="floatingInput">Hora de inicio</label>
    </div>

    <div class="form-floating">
      <input type="time" class="form-control" id="floatingInput">
      <label for="floatingInput">Hora final</label>
    </div>

    <div class="form-floating">
      <input type="button" class="btn btn-info" id="floatingInput" value="AGREGAR HORA">
    </div>

</body>


</html>