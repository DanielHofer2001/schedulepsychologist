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
    <title>NOSOTROS</title>
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
        <li class="nav-item"><a href="gest_hora" class="nav-link">Gestionar Hora</a></li>
        <li class="nav-item"><a href="nosotros" class="nav-link active">Nosotros</a></li>
        <li class="nav-item"> <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">Cerrar Sesion</a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">@csrf</form>
        </li>
      </ul>
    </header>

    <center>
    <h5>Estos son nuestros psicologos</h5>
    </center>

    <div class="row">
      <center>
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

      <center>
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
        </center>


        </center>
        </div>

  </div>

</body>
</html>



