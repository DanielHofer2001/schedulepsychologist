<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Inicio</title>
<link href="https://cdn.jsdelivr.net/gh/vaibhav111tandon/vov.css@latest/vov.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<link rel="stylesheet" href="{{asset('CSS/inicio.css')}}">
</head>

<body background="images/AvatarPandora2.jpg">
<div>
      <div class="vov blur-in bienvenida">Schedule Psychologist</div>
      <div class="vov blur-in bienvenida2">¿Que desea hacer?</div>
</div>

<div>
    <center>
      <a class="vov blur-in boton_principal_page1 btn-light btn btn-outline-dark" role="button" href="login">INICIO
        SESION</a>
      <a class="vov blur-in boton_principal_page2 btn-light btn btn-outline-dark" role="button"
        href="register">REGISTRARSE</a>
    </center>
   </div>
    </body>
</html>
