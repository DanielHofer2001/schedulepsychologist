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

    <title>GESTION DE CONSULTAS</title>
</head>
<body>

<div class="container">
<!--NAVEGACION PRINCIPAL-->
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
        <img src="images/SPLOGO.png" alt="" width="70" height="60" class="d-inline-block align-text-top">
        <span class="fs-4">Schedule Psychologist Administrador</span>
      </a>
<!--VENTANAS-->
      <ul class="nav nav-pills">
        <li class="nav-item"><a href="clientes" class="nav-link ">Clientes</a></li>
        <li class="nav-item"><a href="agendar_hora" class="nav-link">Agendar Hora</a></li>
        <li class="nav-item"><a href="gestion_consultas" class="nav-link active" aria-current="page">Gestion Consultas</a></li>
        <li class="nav-item"> <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">Cerrar Sesion</a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">@csrf</form>
        </li>
      </ul>
    </header>
  </div>

  <div class="list-group list_group_0">
    <a href="#" id="hora1" class="list-group-item list-group-item-action active" aria-current="true">
      <div class="d-flex w-100 justify-content-between">
        <h5 class="mb-1">Pablo Hernandez</h5>
        <small>Agendado hace 3 dias</small>
      </div>
      <p class="mb-1">Correo: Pabll.hernan@gmail.com</p>
      <p class="mb-1">Telefono: +56996898854</p>
      <p class="mb-1">Fecha Agendada: 25/06/2022</p>
    </a>
    <center>
      <div id="botones1">
      <a class="btn btnclientes btn-warning" href="reagendar" role="button">Reagendar Hora</a>
      <a class="btn btnclientes btn-danger" role="button" onclick="del_hora()" >Eliminar Hora</a>
      <a class="btn btnclientes btn-info" role="button">Añadir Nota</a>
    </div>
    </center>
    
    <br>
    <a href="#" class="list-group-item list-group-item-action">
      <div class="d-flex w-100 justify-content-between">
        <h5 class="mb-1">Mark Spector</h5>
        <small class="text-muted">Agendado hace 5 dias</small>
      </div>
      <p class="mb-1">Correo:mark_spectr@gmail.com</p>
      <p class="mb-1">Telefono: +56996456854</p>
      <p class="mb-1">Fecha Agendada: 29/06/2022</p>
    </a>
    <center>
      <a class="btn btnclientes btn-warning" href="reagendar" role="button">Reagendar Hora</a>
      <a class="btn btnclientes btn-danger" role="button">Eliminar Hora</a>
      <a class="btn btnclientes btn-info" href="gestion_consultas" role="button">Añadir Nota</a>
    </center>

    <br>
    <a href="#" class="list-group-item list-group-item-action">
      <div class="d-flex w-100 justify-content-between">
        <h5 class="mb-1">Victor Von Dooom</h5>
        <small class="text-muted">Agendado hace 1 dias</small>
      </div>
      <p class="mb-1">Correo:vic.von1998@gmail.com</p>
      <p class="mb-1">Telefono: +56978956854</p>
      <p class="mb-1">Fecha Agendada: 15/06/2022</p>
     
    </a>
    <center>
      <a class="btn btnclientes btn-warning" href="reagendar.html" role="button">Reagendar Hora</a>
      <a class="btn btnclientes btn-danger" role="button">Eliminar Hora</a>
      <a class="btn btnclientes btn-info" href="gestion_consultas" role="button">Añadir Nota</a>
    </center>

    <br>
    <a href="#" class="list-group-item list-group-item-action">
      <div class="d-flex w-100 justify-content-between">
        <h5 class="mb-1">Andrew Parker</h5>
        <small class="text-muted">Agendado hace 15 dias</small>
      </div>
      <p class="mb-1">Correo:andrew.park.20@gmail.com</p>
      <p class="mb-1">Telefono: +56996456990</p>
      <p class="mb-1">Fecha Agendada: 10/06/2022</p>
      
    </a>
    <center>
      <a class="btn btnclientes btn-warning" href="reagendar.html" role="button">Reagendar Hora</a>
      <a class="btn btnclientes btn-danger" role="button">Eliminar Hora</a>
      <a class="btn btnclientes btn-info" href="gestion_consultas" role="button">Añadir Nota</a>
    </center>

  </div>

</body>
</html>