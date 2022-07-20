<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Inicio</title>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('CSS/vov.min.css')}}">
<link rel="stylesheet" href="{{asset('CSS/inicio.css')}}">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</head>
<body background="images/AvatarPandora2.jpg">

    

<div>
    <div class="vov zoom-in bienvenida">Schedule Psychologist</div>
    <div class="vov zoom-in bienvenida2">¿Que desea hacer?</div>
  </div>

  <div>
    <center>
      <a class="boton_principal_page1 btn-light btn btn-outline-dark" role="button" href="login">INICIO
        SESION</a>
      <a class="boton_principal_page2 btn-light btn btn-outline-dark" role="button"
        href="register">REGISTRARSE</a>
    </center>
  </div>
  <br>

    <div class="vov fade-in-right img_selec">
      <div class="row">
        <div class="col-sm-6">
          <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="images/mp.jpg" alt="Trendy Pants and Shoes" class="img-fluid rounded-start" />
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">María Pía Giménez</h5>
                  <p class="card-text">
                    Nuestro psicologo cuenta con Terapia vincular y mindfulness son los pilares fundamentales
                    de nuestra psicologa.
                  </p>
                  <p class="card-text">
                    <small class="text-muted">Ultima actualizacion hace 3 minutos</small>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

        <div class="col-sm-6">
          <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="images/bg.jpg" alt="Trendy Pants and Shoes" class="img-fluid rounded-start" />
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Benjamín Giménez Arenas</h5>
                  <p class="card-text">
                    Nuestro psicologo cuenta con atencion presencial y online para todos los adolecentes y
                    adultos que lo necesiten.
                  </p>
                  <p class="card-text">
                    <small class="text-muted">Ultima actualizacion hace 3 minutos</small>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
    </body>
</html>
