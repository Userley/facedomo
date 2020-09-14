<?php
require('assets/simpledom/simple_html_dom.php');
setlocale(LC_ALL, "es_PE", "es_PE", "esp");
//setlocale(LC_TIME, 'es_PE.UTF-8');
date_default_timezone_set('America/Lima');
// $url = 'https://weather.com/es-PE/tiempo/hoy/l/80cb57b6e6d0efdd5e6d696aa4cf3f748436a84856c2ed1d7cca73cdc7d815b7';
// $html = file_get_html($url, false, null, 0);
// $fecha = $html->find('ul[data-testid=WeatherTable]');
// foreach ($fecha as $linkObj) {

//   $title = $linkObj->children(0)->children(0)->plaintext;
// }
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Domo Live</title>
  <link rel="stylesheet" href="css/styles.css">
  <link rel="icon" type="image/png" href="https://code.google.com/images/developers.png" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="index.php"><img src="https://code.google.com/images/developers.png" alt="" width="25px"><b> DOMO</b><i>Live</i></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="#">MI PERFIL</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">MENSAJES</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">DISPOSITIVOS</a>
          </li>

        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control form-control-sm mr-sm-2" type="search" placeholder="Buscar..." aria-label="Search">
          <button class="btn btn-outline-danger btn-sm my-2 my-sm-0" type="submit">Buscar</button>
        </form>
      </div>
    </nav>
  </header>
  <section class="container-fluid mt-3">
    <div class="row">
      <div class="col-md-3 col-lg-3 col-xl-3 d-none d-sm-none d-md-block d-lg-block">
        <div class="d-flex justify-content-center">
          <div class="card bg-light card-light" style="width: 18rem;">
            <img src="assets/images/userley.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              BIENVENIDO <br>
              <h5>ERICK LEYVA DIAZ</h5>
            </div>
          </div>
        </div>
        <div class="d-flex justify-content-center mt-2">
          <div class="card" style="width: 18rem;">
            <ul class="list-group list-group-flush">
              <li class="list-group-item bg-dark"> <a href="index.php"> <i class="fa fa-newspaper-o" aria-hidden="true"></i>
                  NOTICIAS</a></li>
              <li class="list-group-item"> <a href="eventos.php"> <i class="fa fa-play-circle-o" aria-hidden="true"></i>
                  EVENTOS</a></li>
              <li class="list-group-item"><a href="amigos.php"> <i class="fa fa-user-o" aria-hidden="true"></i>
                  AMIGOS</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-sm-12 col-md-9 col-lg-9 col-xl-9 ">
        <div class="overflow-auto bg-light p-3 border" style="max-width: 100%; max-height: 680px;">
          <div class="card bg-light card-light">
            <div class="card-body">
              <div class="d-flex justify-content-center">
                <img src="assets/images/userley.jpg" width="40px" class="d-inline-flex mr-3 rounded-circle" alt="">
                <input type="text" name="" id="txtestado" class="form-control d-inline-flex" style="width: 100%;" placeholder="Escribe tu estado...">
              </div>
            </div>
          </div>
          <div class="card text-center p-1 mt-3 shadow-sm d-flex" style="width: 100%;">
            <div class="d-inline-flex ml-1">
              <img src="assets/images/music.png" style="width: 30px; height: 30px;" alt="" class="mr-2 mt-1 float-left shadow-sm">
              <div class="float-left ">
                <span><small><strong>MÚSICA</strong></small></span> -
                <span class=""><small class="text-muted ">Hace 35 min.</small></span>
              </div>
            </div>
            <p></p>
            <p><span style="color:red;">♫</span> Reproduciendo Like a Stone - Stereophonic a las 3:24 pm en sala.</p>
            <p><i class="fa fa-user-o" aria-hidden="true"></i> <i><b>Usuario:</b> Sophia Leyva</i></p>
          </div>
          <div class="card text-center p-1 mt-3 shadow-sm d-flex" style="width: 100%;">
            <div class="d-inline-flex ml-1">
              <img src="assets/images/proximidad.png" style="width: 30px; height: 30px;" alt="" class="mr-2 mt-1 float-left shadow-sm">
              <div class="float-left ">
                <span><small><strong>PROXIMIDAD HOGAR</strong></small></span> -
                <span class=""><small class="text-muted ">Hace 35 min.</small></span>
              </div>
            </div>
            <p></p>
            <p><span style="color:green;">◉</span> Se encendió la luz de la sala a las 3:24 pm.</p>
            <p><i class="fa fa-user-o" aria-hidden="true"></i> <i><b>Usuario:</b> Sophia Leyva</i></p>
          </div>
          <div class="card text-center p-1 mt-3 shadow-sm d-flex" style="width: 100%;">
            <div class="d-inline-flex ml-1">
              <img src="assets/images/regar.png" style="width: 30px; height: 30px;" alt="" class="mr-2 mt-1 float-left shadow-sm">
              <div class="float-left ">
                <span><small><strong>RIEGO PLANTAS</strong></small></span> -
                <span class=""><small class="text-muted ">Hace 35 min.</small></span>
              </div>
            </div>
            <p></p>
            <p><span style="color:green;">◉</span> Se encendió la luz de la sala a las 3:24 pm.</p>
            <p><i class="fa fa-user-o" aria-hidden="true"></i> <i><b>Usuario:</b> Sophia Leyva</i></p>
          </div>
          <div class="card text-center p-1 mt-3 shadow-sm d-flex" style="width: 100%;">
            <div class="d-inline-flex ml-1">
              <img src="assets/images/bocina.png" style="width: 30px; height: 30px;" alt="" class="mr-2 mt-1 float-left shadow-sm">
              <div class="float-left ">
                <span><small><strong>ALARMA GENERAL</strong></small></span> -
                <span class=""><small class="text-muted ">Hace 35 min.</small></span>
              </div>
            </div>
            <p></p>
            <p><span style="color:green;">◉</span> Se encendió la luz de la sala a las 3:24 pm.</p>
            <p><i class="fa fa-user-o" aria-hidden="true"></i> <i><b>Usuario:</b> Sophia Leyva</i></p>
          </div>
          <div class="card text-center p-1 mt-3 shadow-sm d-flex" style="width: 100%;">
            <div class="d-inline-flex ml-1">
              <img src="assets/images/seguridad.png" style="width: 30px; height: 30px;" alt="" class="mr-2 mt-1 float-left shadow-sm">
              <div class="float-left ">
                <span><small><strong>SEGURIDAD PUERTA</strong></small></span> -
                <span class=""><small class="text-muted ">Hace 35 min.</small></span>
              </div>
            </div>
            <p></p>
            <p><span style="color:green;">◉</span> Se encendió la luz de la sala a las 3:24 pm.</p>
            <p><i class="fa fa-user-o" aria-hidden="true"></i> <i><b>Usuario:</b> Sophia Leyva</i></p>
          </div>
          <!-- rounded-circle  -->
          <div class="card text-center p-1 mt-3 shadow-sm d-flex" style="width: 100%;">
            <div class="d-inline-flex ml-1">
              <img src="assets/images/lampara.png" style="width: 30px; height: 30px;" alt="" class="mr-2 mt-1 float-left shadow-sm">
              <div class="float-left ">
                <span><small><strong>LUZ CUARTO</strong></small></span> -
                <span class=""><small class="text-muted ">Hace 35 min.</small></span>
              </div>
            </div>
            <p></p>
            <p><span style="color:green;">◉</span> Se encendió la luz de la sala a las 3:24 pm.</p>
            <p><i class="fa fa-user-o" aria-hidden="true"></i> <i><b>Usuario:</b> Sophia Leyva</i></p>
          </div>

          <div class="card text-center p-1 mt-3 shadow-sm d-flex" style="width: 100%;">
            <div class="d-inline-flex ml-1">
              <img src="assets/images/lampara.png" style="width: 30px; height: 30px;" alt="" class="mr-2 mt-1 float-left shadow-sm">
              <div class="float-left ">
                <span><small><strong>LUZ SALA</strong></small></span> -
                <span class=""><small class="text-muted ">Hace 35 min.</small></span>
              </div>
            </div>
            <p></p>
            <p><span style="color:green;">◉</span> Se encendió la luz de la sala a las 3:24 pm.</p>
            <p><i class="fa fa-user-o" aria-hidden="true"></i> <i><b>Usuario:</b> Sophia Leyva</i></p>
          </div>

          <div class="card text-center p-1 mt-3 p-2 shadow-sm d-flex" style="width: 100%;">
            <div class="d-inline-flex ml-1">
              <img src="assets/images/clima.png" style="width: 30px; height: 30px;" alt="" class="mr-2 mt-1 float-left shadow-sm">
              <div class="float-left ">
                <span><small><strong>TEMPERATURA Y HUMERDAD</strong></small></span> -
                <span class=""><small class="text-muted ">Hace 2 min.</small></span>
              </div>
            </div>
            <p></p>
            <span class="text-primary">
              <h1><i class="fa fa-sun-o" aria-hidden="true"></i></h1>
            </span>
            <p><b>Buen día Erick</b></p>
            <p><i>Hoy es <?php echo $fecha = strftime("%d de %B de %Y"); ?></i></p>

          </div>
        </div>
      </div>
    </div>
  </section>
</body>

</html>