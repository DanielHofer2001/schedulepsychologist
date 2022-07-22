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

    <title>VISUALIZACION DE CLIENTES</title>
</head>
<body>
    <div class="container">
        <!--NAVEGACION PRINCIPAL-->
        <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
          <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
            <img src="images/SPLOGO.png" alt="" width="70" height="60"
              class="d-inline-block align-text-top">
            <span class="fs-4">Schedule Psychologist Administrador</span>
          </a>
          <!--VENTANAS-->
          <ul class="nav nav-pills">
            <li class="nav-item"><a href="admincliente" class="nav-link active" aria-current="page">Clientes</a></li>
            <li class="nav-item"><a href="evento" class="nav-link">Agendar Hora</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">Cerrar Sesion</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">@csrf</form>
            </li>

          </ul>
        </header>
      </div>
      <div>
           <center>
           <h5 class="fw-semibold vov fade-in shadow">Horas Registradas</h5>
           </center>
    </div>

    <br>
    <div class="row">
      <div class="col">
      <table class="table shadow vov fade-in table-bordered">
      <thead>
        <tr>
          <td>ID hora</td>
          <td>Nombre</td>
          <td>Apellido</td>
          <td>Telefono</td>
          <td>Email</td>
        </tr>
      
        @foreach($datosCliente as $datosCliente)
        <tr>
        <td>{{$datosCliente -> eventoid}}</td>
          <td>{{$datosCliente -> nombre}}</td>
          <td>{{$datosCliente -> apellido}}</td>
          <td>{{$datosCliente -> telefono}}</td>
          <td>{{$datosCliente -> email}}</td>
          @endforeach
        </tr>   
      </table>
      </div>
      <div class="col">
      <table class="table shadow vov fade-in table-bordered">
        <tr>
          <td>Hora de inicio</td>
          <td>Hora final</td>
          <td>Fecha Agendada</td>
        </tr>
        <tr>
          @foreach($evento as $eventos)
          <td>{{$eventos -> hinicio}}</td>
          <td>{{$eventos -> hfinal}}</td>
          <td>{{$eventos -> start}}</td>
        </tr>
        @endforeach
      </table>
      </div>
    </div>
    
      
      
</body>
</html>