<head>
<script src="https://unpkg.com/jquery@3.4.1/dist/jquery.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.8.2/moment.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.0/main.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.0/main.min.css">

<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.0/main.min.js"></script> 
<script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.0/locales-all.js"></script>
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

</head>

@extends('layouts.app')
@section('content')

<div>
     <ul class="nav nav-pills mb-2">
             <li class="nav-item"><a href="admincliente" class="nav-link" aria-current="page">Clientes</a></li>
             <li class="nav-item"><a href="evento" class="nav-link active">Agendar Hora</a></li>
             <li class="nav-item"> <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
             document.getElementById('logout-form').submit();">Cerrar Sesion</a>
             <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">@csrf</form>
             </li>
     </ul>
</div>

<div class="container">
    <div id="agenda"></div>
</div>

<div class="modal fade" id="evento" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Subir Hora</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body">
                
                <form action="" id="formularioEventos">

                {!! csrf_field() !!}

                <div class="form-group">
                  <label for="id"></label>
                  <input type="hidden" class="form-control" name="id" id="id" aria-describedby="helpId" placeholder="">
                </div>

                <div class="form-group">
                  <label for="title">Titulo</label>
                  <input type="text" class="form-control" name="title" id="title" aria-describedby="helpId" placeholder="Escribe el titulo de el evento">
                  <small id="helpId" class="form-text text-muted">Ingresa el nombre</small>
                </div>
                
                <div class="form-group">                
                <label for="descripcion">Nombre</label>
                <select type="text" class="form-select" name="descripcion" id="descripcion" rows="3">
                <option selected>Elige el psicologo</option>
                <option value="Benjamin Gimenez">Benjamin Gimenez</option>
                <option value="Pía Gimenez">Pía Gimenez</option>
                </select>
                </div>

                <div class="form-group">
                  <label for="start">Fecha Inicial</label>
                  <input type="date" class="form-control" name="start" id="start" aria-describedby="helpId" placeholder="">
                  <small id="helpId" class="form-text text-muted">Ingresa la fecha inicial de tu sesion</small>
                </div>

                <div class="form-group">
                <label for="end">Fecha Final</label>
                <input type="date" class="form-control" name="end" id="end" aria-describedby="helpId" placeholder="">
                <small id="helpId" class="form-text text-muted">Ingresa la fecha de termino de tu sesion</small>
                </div>

                <div class="form-group">
                <label for="hinicio">Hora Inicio</label>
                <input type="time" class="form-control" name="hinicio" id="hinicio" aria-describedby="helpId" placeholder="">
                <small id="helpId" class="form-text text-muted">Ingresa tu hora de inicio</small>
                </div>

                <div class="form-group">
                <label for="hfinal">Hora Termino</label>
                <input type="time" class="form-control" name="hfinal" id="hfinal" aria-describedby="helpId" placeholder="">
                <small id="helpId" class="form-text text-muted">Ingresa tu hora de termino</small>
                </div>

                </form>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success"  id="btnGuardar">Guardar</button>
                <button type="button" class="btn btn-warning"  id="btnEditar" >Actualizar Hora</button>
                <button type="button" class="btn btn-danger"  id="btnEliminar">Eliminar</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal" >Cerrar</button>
            </div>
        </div>
    </div>
</div>
@endsection