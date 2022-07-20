<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel=StyleSheet href="css_mn.css" type="text/css" media=screen>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css_mn.css')}}">
    <link rel="stylesheet" href="{{asset('cliente.css')}}">
  <script src="javascript_folder/registrarse.js"></script>
    <title>GESTIONAR HORA HORA</title>
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
        <li class="nav-item"><a href="agendar" class="nav-link">Agendar</a></li>
        <li class="nav-item"><a href="gest_hora" class="nav-link active">Gestionar Hora</a></li>
        <li class="nav-item"><a href="nosotros" class="nav-link">Nosotros</a></li>
        <li class="nav-item"> <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">Cerrar Sesion</a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">@csrf</form>
        </li>
      </ul>
    </header>
    <div class="form-floating">
      <input type="date" class="form-control" id="floatingInput">
      <label for="floatingInput">Dia / mes / año</label>
    </div>
    <br>
    <select class="form-select" aria-label="Default select example">
      <option selected>Elegir psicologo</option>
      <option value="1">Maria pía Gimenez Arenas</option>
      <option value="2">Benjamin Gimenez Arenas</option>
      
    </select>
    <br>
    <table class="table">
      <thead>
        <tr>
          <td>Fecha Inicial</td>
          <td>Fecha Final</td>
          <td>Hora Inicio</td>
          <td>Hora Termino</td>
        </tr>
      
        @foreach($evento as $eventos)
        <tr>
          <td>{{$eventos -> start}}</td>
          <td>{{$eventos -> end}}</td>
          <td>{{$eventos -> hinicio}}</td>
          <td>{{$eventos -> hfinal}}</td>
        @endforeach
        </tr>
    </table>
  </div>


</body>
</html>