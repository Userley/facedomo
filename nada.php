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

  <link href="https://code.jquery.com/ui/1.12.1/themes/flick/jquery-ui.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
  <script src="https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
</head>

<body class="bg-light">
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
    <div class="row" id="cuerpo">
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
              <li class="list-group-item"> <a href="index.php"> <i class="fa fa-newspaper-o" aria-hidden="true"></i>
                  NOTICIAS</a></li>
              <li class="list-group-item bg-dark"> <a href="nada.php"> <i class="fa fa-play-circle-o" aria-hidden="true"></i>
                  EVENTOS</a></li>
              <li class="list-group-item"><a href="amigos.php"> <i class="fa fa-user-o" aria-hidden="true"></i>
                  AMIGOS</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-sm-12 col-md-9 col-lg-9 col-xl-9 ">

        <div class="overflow-auto bg-light p-md-3 border" id="postList" style="max-width: 100%;">
          <?php

          ?>
        </div>

      </div>
    </div>
  </section>
</body>

</html>