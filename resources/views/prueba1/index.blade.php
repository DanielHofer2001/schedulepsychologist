<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>GESTIONAR HORA</title>

<!-- SCRIPTS Y LIBRERIAS PROPIAS -->
      <link href="https://cdn.jsdelivr.net/gh/vaibhav111tandon/vov.css@latest/vov.css" rel="stylesheet" type="text/css">
      <link rel="stylesheet" href="{{asset('CSS/cliente.css')}}">

<!-- SCRIPTS Y LIBRERIAS EXTERNAS -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
      <script src="https://unpkg.com/jquery@3.4.1/dist/jquery.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
      <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.8.2/moment.min.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
      <link href='https://unpkg.com/@fullcalendar/core@4.3.1/main.min.css' rel='stylesheet' />
      <link href='https://unpkg.com/@fullcalendar/daygrid@4.3.0/main.min.css' rel='stylesheet' />
      <link href='https://unpkg.com/@fullcalendar/timegrid@4.3.0/main.min.css' rel='stylesheet' />
      <link href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' rel='stylesheet'/>
      <script src='https://unpkg.com/@fullcalendar/core@4.3.1/main.min.js'></script>
      <script src='https://unpkg.com/@fullcalendar/interaction@4.3.0/main.min.js'></script>
      <script src='https://unpkg.com/@fullcalendar/daygrid@4.3.0/main.min.js'></script>
      <script src='https://unpkg.com/@fullcalendar/timegrid@4.3.0/main.min.js'></script>
      <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
      <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
</head>

<body>
<div class="container">
<header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
        <img src="../images/SPLOGO.png" alt="" width="70" height="60" class="d-inline-block align-text-top">
        <span class="fs-5 fw-semibold">Schedule Psychologist Cliente</span>
      </a>

      <!--VENTANAS-->
      <ul class="nav nav-pills">
        <li class="nav-item"><a href="../agendar" class="nav-link">Agendar</a></li>
        <li class="nav-item"><a href="index" class="nav-link active">Gestionar Hora</a></li>
        <li class="nav-item"><a href="../nosotros" class="nav-link">Nosotros</a></li>
        <li class="nav-item"> <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">Cerrar Sesion</a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">@csrf</form>
        </li>
      </ul>
    </header>

    
    <!-- PRIMERA TABLA PSICOLOGO N°1 -->
    <table class="vov fade-in table shadow table-bordered"><h6 class="fw-semibold">Atencio todo publico terapia vincular y mindfulness - Pia Gimenez</h6>
      <thead>
        <tr>
          <td>Identificador Sesion</td>
          <td>Fecha Inicial</td>
          <td>Fecha Final</td>
          <td>Hora Inicio</td>
          <td>Hora Termino</td>
        </tr>
      
        @foreach($evento as $eventos)
        <tr>
          <td>Identificador: {{$eventos -> id}}</td>
          <td>{{$eventos -> start}}</td>
          <td>{{$eventos -> end}}</td>
          <td>{{$eventos -> hinicio}} Hrs</td>
          <td>{{$eventos -> hfinal}} Hrs</td>
        </tr>
        @endforeach
    </table>

    <!-- 
    <table class="vov fade-in table shadow table-bordered"><h6 class="fw-semibold">Atencion para adolecentes y niños - Benjamin Gimenez</h6>
      <thead>
        <tr>
          <td>Identificador Sesion</td>
          <td>Fecha Inicial</td>
          <td>Fecha Final</td>
          <td>Hora Inicio</td>
          <td>Hora Termino</td>
        </tr>
      
        <tr>
          <td>Identificador: </td>
          <td></td>
          <td></td>
          <td>Hrs</td>
          <td>Hrs</td>
        </tr>
    </table>
    -->

    <center>
    <button class="btn shadow vov fade-in btn-success w-80" type="button" data-toggle="modal" data-target="#modelId">
            Agendar Sesion
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clipboard-check-fill" viewBox="0 0 16 16">
              <path d="M6.5 0A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3Zm3 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3Z"/>
              <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1A2.5 2.5 0 0 1 9.5 5h-3A2.5 2.5 0 0 1 4 2.5v-1Zm6.854 7.354-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L7.5 10.793l2.646-2.647a.5.5 0 0 1 .708.708Z"/>
            </svg>
            </button>
    </center>

<form action="{{ url('/agendar') }}" method="post">
@csrf

<!-- INICIO DE MODAL -->
<div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title fw-semibold text-center">Agende su hora</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body">

                <div class="form-group">
                <input type="hidden" class="form-control" name="id" id="id" aria-describedby="helpId" placeholder="" required>
                </div>

                <div class="from-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" name="nombre" id="nombre">
                </div>

                <div class="from-group">
                <label for="nombre">Apellido</label>
                <input type="text" class="form-control" name="apellido" id="apellido">
                </div>

                <div class="from-group">
                <label for="telefono">Telefono</label>
                <input type="number" class="form-control" name="telefono" id="telefono" maxlengh='8'>
                </div>

                <div class="from-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" name="email" id="email">
                </div>

                <!-- APARTADOD DE ESCOGER TU PSICOLOGO
                <div class="form-group">
                <label for="title">Elija Su Psicologo Deseado</label>
                <select type="text" class="form-select" name="psicologo" id="psicologo" rows="3">
                <option value="Benjamin Gimenez">Benjamin Gimenez</option>
                <option value="Pía Gimenez">Pía Gimenez</option>
                </select>
                </div>             
                -->

                <div class="form-group">
                <label for="title">Hora a reservar</label>
                <select type="text" class="form-select" name="descripcion" id="descripcion" rows="3">

                @foreach($evento as $eventos)
                <option value="Psicologo: {{$eventos -> descripcion}}, Fecha: {{$eventos -> start}}, Hora de inicio: {{$eventos -> hinicio}}"> Psicologo: {{$eventos -> descripcion}}, Fecha: {{$eventos -> start}}, Hora de inicio: {{$eventos -> hinicio}}</option>
                @endforeach


                </select>
                </div>


                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-success"  value="guardar datos">Agendar</button>
                </div>

              </div>
            </div>
           
            
        </div>
        </div>
</div>

<!-- FINAL DE EL MODAL -->

</body>    
</html>