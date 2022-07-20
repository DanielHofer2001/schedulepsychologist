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
        <li class="nav-item"><a href="gest_hora" class="nav-link">Gestionar Hora</a></li>
        <li class="nav-item"><a href="nosotros" class="nav-link">Nosotros</a></li>
        <li class="nav-item"> <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">Cerrar Sesion</a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">@csrf</form>
        </li>
      </ul>
    </header>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Fecha</th>
          <th scope="col">Horario</th>
          <th scope="col"></th>
        </tr>
      </thead>
      <tbody class="table-group-divider">
        <tr>
          <th scope="row">1</th>
          <td>20-06-2022</td>
          <td>10:00 - 11:30</td>
          <td><a class="btn btnclientes btn-outline-success" href="gestionar_hora" role="button">Gestionar Hora</a></td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>20-06-2022</td>
          <td>11:40 - 13:10</td>
          <td><a class="btn btnclientes btn-outline-success" href="gestionar_hora" role="button">Gestionar Hora</a> </td>
          
        </tr>
        <tr>
          <th scope="row">3</th>
          <td>20-06-2022</td>
          <td>13:20 - 14:50</td>
          <td><a class="btn btnclientes btn-outline-success" href="gestionar_hora" role="button">Gestionar Hora</a></td>
        </tr>
      </tbody>
    </table>
    <p>
      En estos momentos usted no posee una hora agendada con nosotros, si desea agendar una hora con uno de
      <br>
      nuestros psicologos simplemente presione el boton
      <br>
      <br>
      <a class="btn btnclientes btn-primary" href="gestionar_hora" role="button">Agendar</a>

      
    </p>
  </div>


</body>
</html>