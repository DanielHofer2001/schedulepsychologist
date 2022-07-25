<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel=StyleSheet href="css_mn.css" type="text/css" media=screen>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/gh/vaibhav111tandon/vov.css@latest/vov.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="{{asset('css_mn.css')}}">
  <link rel="stylesheet" href="{{asset('cliente.css')}}">
  
    <title>AGENDAR HORA</title>
</head>
<body>

  <div class="container">
<!--NAVEGACION PRINCIPAL-->
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
        <img src="images/SPLOGO.png" alt="" width="70" height="60" class="d-inline-block align-text-top">
        <span class="fs-4">Schedule Psychologist Cliente</span>
      </a>
<!--VENTANAS-->
      <ul class="nav nav-pills">
        <li class="nav-item"><a href="agendar" class="nav-link active">Agenda</a></li>
        <li class="nav-item"><a href="prueba1/index" class="nav-link">Gestionar Hora</a></li>
        <li class="nav-item"><a href="nosotros" class="nav-link">Nosotros</a></li>
        <li class="nav-item"> <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">Cerrar Sesion</a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">@csrf</form>
        </li>
      </ul>
    </header>
    <table class="vov fade-in table shadow table-bordered"><h6 class="fw-semibold">Horas agendadas</h6>
      <thead>
        <tr>
          <td>Nombre</td>
          <td>Apellido</td>
          <td>Telefono</td>
          <td>Email</td>
          <td>Hora agendada</td>
        </tr>
        @foreach($reservaCliente as $reservaClientes)
        <tr>
          <td>{{$reservaClientes -> nombre}}</td>
          <td>{{$reservaClientes -> apellido}}</td>
          <td>{{$reservaClientes -> telefono}}</td>
          <td>{{$reservaClientes -> email}}</td>
          <td>{{$reservaClientes -> descripcion}}</td>
        </tr>
        @endforeach

        
    </table>
  </div>
</body>
<footer class="text-center">
&copy; SchedulePsychologist Derechos Reservados Inacap 2022
</footer>
</html>