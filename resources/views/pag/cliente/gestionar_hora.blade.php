<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">




<script src="https://unpkg.com/jquery@3.4.1/dist/jquery.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.8.2/moment.min.js"></script>
<link href='https://unpkg.com/@fullcalendar/core@4.3.1/main.min.css' rel='stylesheet' />
<link href='https://unpkg.com/@fullcalendar/daygrid@4.3.0/main.min.css' rel='stylesheet' />
<link href='https://unpkg.com/@fullcalendar/timegrid@4.3.0/main.min.css' rel='stylesheet' />
<link href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' rel='stylesheet' />
<script src='https://unpkg.com/@fullcalendar/core@4.3.1/main.min.js'></script>
<script src='https://unpkg.com/@fullcalendar/interaction@4.3.0/main.min.js'></script>
<script src='https://unpkg.com/@fullcalendar/daygrid@4.3.0/main.min.js'></script>
<script src='https://unpkg.com/@fullcalendar/timegrid@4.3.0/main.min.js'></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script src="{{ asset('js/enviar.js') }}" defer></script> 
    
 
  
  
    <title>GESTIONAR HORA HORA</title>
</head>
<body>


  <div class="container" id="enviars">
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
    <table class="table">
      <thead>
        <tr>
          <td>Servicio</td>
          <td>Psicologo</td>
          <td>Fecha Inicial</td>
          <td>Fecha Final</td>
          <td>Hora Inicio</td>
          <td>Hora Termino</td>
        </tr>
      
        @foreach($evento as $eventos)
        <tr>
          <td>{{$eventos -> title}}</td>
          <td>{{$eventos -> descripcion}}</td>
          <td>{{$eventos -> start}}</td>
          <td>{{$eventos -> end}}</td>
          <td>{{$eventos -> hinicio}} Hrs</td>
          <td>{{$eventos -> hfinal}} Hrs</td>
          <td>
          @endforeach
          <button class="btn btn-success w-80" type="button" data-toggle="modal" data-target="#modelId">
          Agendar Hora
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check2-circle" viewBox="0 0 16 16">
          <path d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0z"/>
          <path d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l7-7z"/>
          </svg></button>


          <!-- Button trigger modal -->
        
          
          <!-- Modal -->
          <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Ingresar Los Datos Para La Cita</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                <form action="" id="formEvniar">

                <div class="form-group">
                  <label for="id"></label>
                  <input type="hidden" class="form-control" name="id" id="id" aria-describedby="helpId" placeholder="">
                </div>

                <div class="form-group">
                  <label for="title">Nombre y Apellido</label>
                  <input type="text" class="form-control" name="title" id="title" aria-describedby="helpId" placeholder="Escribe el titulo de el evento">
                  <small id="helpId" class="form-text text-muted">Ingresar Nombre y Apellido</small>
                </div>

                <div class="form-group">
                  <label for="title">Telefono</label>
                  <input type="text" class="form-control" name="title" id="title" aria-describedby="helpId" placeholder="Escribe el titulo de el evento">
                  <small id="helpId" class="form-text text-muted">Ingresar Telefono</small>
                </div>

                <div class="form-group">
                  <label for="title">Email</label>
                  <input type="text" class="form-control" name="title" id="title" aria-describedby="helpId" placeholder="Escribe el titulo de el evento">
                  <small id="helpId" class="form-text text-muted"> Email</small>
                </div>
                
                </form>




                  
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal" >Close</button>
                  <button type="button" class="btn btn-primary" id="btnEnviar">Confirmar</button>
                </div>
              </div>
            </div>
          </div>
          

          </td>
        


        
        </tr>

       







    </table>
  </div>


</body>
</html>