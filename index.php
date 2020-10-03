<?php
include_once("conexion.php");
// require('assets/simpledom/simple_html_dom.php');
setlocale(LC_ALL, "es_PE", "es_PE", "esp");
date_default_timezone_set('America/Lima');
// $url = 'https://weather.com/es-PE/tiempo/hoy/l/80cb57b6e6d0efdd5e6d696aa4cf3f748436a84856c2ed1d7cca73cdc7d815b7';
// $html = file_get_html($url, false, null, 0);
// $fecha = $html->find('ul[data-testid=WeatherTable]');
// foreach ($fecha as $linkObj) {

//   $title = $linkObj->children(0)->children(0)->plaintext;
// }
$qrdispositivos = mysqli_query($Cn, "SELECT idDispositivo,nombre FROM dispositivos");

while ($data = mysqli_fetch_array($qrdispositivos)) {
  $iddispositivosarray[] = $data["idDispositivo"];
  $dispositivosarray[] = $data["nombre"];
}
$datadimplode = implode(",", $dispositivosarray);
$datadisp =  str_replace(',', '","', $datadimplode);

// $dataIddispimplode = implode(",", $iddispositivosarray);
// $dataiddisp =  str_replace(',', '","', $dataIddispimplode);

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

  <link href="https://code.jquery.com/ui/1.12.1/themes/flick/jquery-ui.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
  <script src="https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>

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
      <div class="col-md-3 col-lg-3 col-xl-3 d-none d-sm-none d-md-block d-lg-block faceanimable">
        <div class="d-flex justify-content-center">
          <div class="card bg-dark text-white" style="width: 18rem;">
            <img src="assets/images/userley.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              BIENVENIDO <br>
              <h5>ERICK LEYVA DIAZ</h5>
            </div>
          </div>
        </div>
        <div class="d-flex justify-content-center mt-3">
          <div class="card bg-dark text-white" style="width: 18rem;">
            <ul class="list-group list-group-flush">
              <li class="list-group-item bg-dark"> <a href="index.php"> <i class="fa fa-newspaper-o" aria-hidden="true"></i>
                  NOTICIAS</a></li>
              <li class="list-group-item"> <a href="nada.php"> <i class="fa fa-play-circle-o" aria-hidden="true"></i>
                  EVENTOS</a></li>
              <li class="list-group-item"><a href="amigos.php"> <i class="fa fa-user-o" aria-hidden="true"></i>
                  AMIGOS</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-sm-12 col-md-9 col-lg-9 col-xl-9">
        <div class="overflow-auto p-md-3 " id="postList" style="max-width: 100%;">
          <!-- <div class="card bg-light card-light animable">
            <div class="card-body">
              <div class="d-flex justify-content-center">
                <img src="assets/images/userley.jpg" width="40px" class="d-inline-flex mr-3 rounded-circle" alt="">
                <input type="text" name="" id="txtestados" class="form-control d-inline-flex" style="width: 100%;" placeholder="Escribe tu estado...">
                <input type="button" class="btn btn-primary ml-2 rounded-circle" value="Ok">
              </div>
            </div>
          </div> -->
          <div class="card bg-dark card-dark animable bc">
            <div class="card-body">
              <div class="d-flex justify-content-center">
                <img src="assets/images/userley.jpg" width="40px" class="d-inline-flex mr-3 rounded-circle" alt="">
                <div contenteditable="true" id="txtestado" class="single-line bg-white d-inline border"></div>
                <!-- <input type="button" class="btn btn-primary ml-2 rounded-circle" value="Ok"> -->
              </div>
            </div>
          </div>
          <?php
          //get rows query
          $query = mysqli_query($Cn, "SELECT * FROM post ORDER BY idpost DESC LIMIT 10");
          if ($query->num_rows > 0) {
            while ($row = mysqli_fetch_assoc($query)) {
              $postID = $row["idpost"];
              echo "<div class='card bg-dark text-white p-1 mt-2 shadow-sm d-flex animable' style='width: 100%;'>" . $row['contenido'] . "</div>";
            }
            echo "<div class='load-more' lastID='" . $postID . "' style='display: none;'><img src='assets/images/loading.gif' alt=''> </div>";
          }
          ?>
        </div>

        <!-- <div class="overflow-auto bg-light p-0 p-md-3 border" style="max-width: 100%; max-height: 680px;">
          <div class="card bg-light card-light">
            <div class="card-body">
              <div class="d-flex justify-content-center">
                <img src="assets/images/userley.jpg" width="40px" class="d-inline-flex mr-3 rounded-circle" alt="">
                <input type="text" name="" id="txtestado" class="form-control d-inline-flex" style="width: 100%;" placeholder="Escribe tu estado...">
              </div>
            </div>
          </div>



          <div class="card  p-1 mt-2 shadow-sm d-flex animable" style="width: 100%;">
            <div class="d-inline-flex ml-1">
              <img src="assets/images/music.png" style="width: 30px; height: 30px;" alt="" class="mr-2 mt-1 float-left shadow-sm">
              <div class="float-left mt-1">
                <span><small><strong>LUZ</strong></small></span> -
                <span class=""><small class="text-muted "><i class="fa fa-clock-o" aria-hidden="true"></i>
                    Hace 35 min.</small></span>
              </div>
            </div>
            <hr>
            <div class="p-1 pl-2 pr-2">
              <p><span style="text-align: justify !important;"></span>Buen día USUARIO, soy <i>DISPOSITIVO</i> de tu domicilio <i class="fa fa-smile-o" aria-hidden="true"></i>.</p>
              <small>
                <p class="text-muted"><i class="fa fa-home" aria-hidden="true"></i> Domo<i>Live</i></p>
              </small>
            </div>
          </div>



          <div class="card  p-1 mt-2 shadow-sm d-flex animable" style="width: 100%;">
            <div class="d-inline-flex ml-1">
              <img src="assets/images/music.png" style="width: 30px; height: 30px;" alt="" class="mr-2 mt-1 float-left shadow-sm">
              <div class="float-left mt-1">
                <span><small><strong>LUZ</strong></small></span> -
                <span class=""><small class="text-muted "><i class="fa fa-clock-o" aria-hidden="true"></i>
                    Hace 35 min.</small></span>
              </div>
            </div>
            <hr>
            <div class="p-1 pl-2 pr-2">
              <p><span style="text-align: justify !important;"></span>El estado de <i>DISPOSITIVO</i> es:</p>
              <p style="text-align:center !important;"><i class="fa fa-power-off" aria-hidden="true" style="color:COLORPHP;font-size: 25px;"></i><br>ESTADOPHP</p>
              <small>
                <p class=""><span style="color: #159F5C">Actuado:</span> FECHAPHP <i>a las</i> HORAPHP <i>por</i> <i class="fa fa-user-o" style="color:#4C8CF5" aria-hidden="true"></i> USUARIOPHP</p>
              </small>
              <small>
                <p class="text-muted"><i class="fa fa-home" aria-hidden="true"></i> Domo<i>Live</i></p>
              </small>
            </div>
          </div>


          <div class="card  p-1 mt-2 shadow-sm d-flex animable" style="width: 100%;">
            <div class="d-inline-flex ml-1">
              <img src="assets/images/music.png" style="width: 30px; height: 30px;" alt="" class="mr-2 mt-1 float-left shadow-sm">
              <div class="float-left mt-1">
                <span><small><strong>LUZ</strong></small></span> -
                <span class=""><small class="text-muted "><i class="fa fa-clock-o" aria-hidden="true"></i>
                    Hace 35 min.</small></span>
              </div>
            </div>
            <hr>
            <div class="p-1 pl-2 pr-2">
              <p><span style="text-align: justify !important;"></span>Su solicitud a <i>DISPOSITIVO</i> se está enviando</p>
              <p style="text-align:center !important;"><i class="fa fa-toggle-on" aria-hidden="true" style="color:#49B164; font-size: 25px;"></i><br><i> encender...</i></p>
              <small>
                <p class="text-muted"><i class="fa fa-home" aria-hidden="true"></i> Domo<i>Live</i></p>
              </small>
            </div>
          </div>


          <div class="card  p-1 mt-2 shadow-sm d-flex animable" style="width: 100%;">
            <div class="d-inline-flex ml-1">
              <img src="assets/images/music.png" style="width: 30px; height: 30px;" alt="" class="mr-2 mt-1 float-left shadow-sm">
              <div class="float-left mt-1">
                <span><small><strong>LUZ</strong></small></span> -
                <span class=""><small class="text-muted "><i class="fa fa-clock-o" aria-hidden="true"></i>
                    Hace 35 min.</small></span>
              </div>
            </div>
            <hr>
            <div class="p-1 pl-2 pr-2">
              <p><span style="text-align: justify !important;"></span>Su solicitud a <i>DISPOSITIVO</i> se está enviando</p>
              <p style="text-align:center !important;"><i class="fa fa-toggle-off" aria-hidden="true" style="color:#F90101; font-size: 25px;"></i><br><i> apagando...</i></p>
              <small>
                <p class="text-muted"><i class="fa fa-home" aria-hidden="true"></i> Domo<i>Live</i></p>
              </small>
            </div>
          </div>



          <div class="card  p-1 mt-2 shadow-sm d-flex animable" style="width: 100%;">
            <div class="d-inline-flex ml-1">
              <img src="assets/images/music.png" style="width: 30px; height: 30px;" alt="" class="mr-2 mt-1 float-left shadow-sm">
              <div class="float-left mt-1">
                <span><small><strong>MÚSICA</strong></small></span> -
                <span class=""><small class="text-muted "><i class="fa fa-clock-o" aria-hidden="true"></i>
                    Hace 35 min.</small></span>
              </div>
            </div>
            <hr>
            <div class="p-2">
              <p><span style="color:red; text-align: justify !important;">♫</span> Reproduciendo Like a Stone - Stereophonic a las 3:24 pm en sala.</p>
              <small>
                <p class="text-muted"><i class="fa fa-user-o" aria-hidden="true"></i> <i><b>Usuario:</b> Sophia Leyva</i></p>
              </small>
            </div>
          </div>

          <div class="card text-center p-1 mt-2 shadow-sm d-flex animable" style="width: 100%;">
            <div class="d-inline-flex ml-1">
              <img src="assets/images/proximidad.png" style="width: 30px; height: 30px;" alt="" class="mr-2 mt-1 float-left shadow-sm">
              <div class="float-left mt-1">
                <span><small><strong>PROXIMIDAD HOGAR</strong></small></span> -
                <span class=""><small class="text-muted "><i class="fa fa-clock-o" aria-hidden="true"></i>
                    Hace 35 min.</small></span>
              </div>
            </div>
            <hr>
            <div class="p-2">
              <p><span style="color:green; text-align: justify !important;">◉</span> Se encendió la luz de la sala a las 3:24 pm.</p>
              <small>
                <p class="text-muted"><i class="fa fa-user-o" aria-hidden="true"></i> <i><b>Usuario:</b> Sophia Leyva</i></p>
              </small>
            </div>
          </div>

          <div class="card text-center p-1 mt-2 shadow-sm d-flex animable" style="width: 100%;">
            <div class="d-inline-flex ml-1">
              <img src="assets/images/regar.png" style="width: 30px; height: 30px;" alt="" class="mr-2 mt-1 float-left shadow-sm">
              <div class="float-left mt-1">
                <span><small><strong>RIEGO PLANTAS</strong></small></span> -
                <span class=""><small class="text-muted "><i class="fa fa-clock-o" aria-hidden="true"></i>
                    Hace 35 min.</small></span>
              </div>
            </div>
            <hr>
            <p></p>
            <p><span style="color:green;">◉</span> Se encendió la luz de la sala a las 3:24 pm.</p>
            <p><i class="fa fa-user-o" aria-hidden="true"></i> <i><b>Usuario:</b> Sophia Leyva</i></p>
          </div>

          <div class="card text-center p-1 mt-2 shadow-sm d-flex animable" style="width: 100%;">
            <div class="d-inline-flex ml-1">
              <img src="assets/images/bocina.png" style="width: 30px; height: 30px;" alt="" class="mr-2 mt-1 float-left shadow-sm">
              <div class="float-left mt-1">
                <span><small><strong>ALARMA GENERAL</strong></small></span> -
                <span class=""><small class="text-muted "><i class="fa fa-clock-o" aria-hidden="true"></i>
                    Hace 35 min.</small></span>
              </div>
            </div>
            <hr>
            <p></p>
            <p><span style="color:green;">◉</span> Se encendió la luz de la sala a las 3:24 pm.</p>
            <p><i class="fa fa-user-o" aria-hidden="true"></i> <i><b>Usuario:</b> Sophia Leyva</i></p>
          </div>

          <div class="card text-center p-1 mt-2 shadow-sm d-flex animable" style="width: 100%;">
            <div class="d-inline-flex ml-1">
              <img src="assets/images/seguridad.png" style="width: 30px; height: 30px;" alt="" class="mr-2 mt-1 float-left shadow-sm">
              <div class="float-left mt-1">
                <span><small><strong>SEGURIDAD PUERTA</strong></small></span> -
                <span class=""><small class="text-muted "><i class="fa fa-clock-o" aria-hidden="true"></i>
                    Hace 35 min.</small></span>
              </div>
            </div>
            <hr>
            <p></p>
            <p><span style="color:green;">◉</span> Se encendió la luz de la sala a las 3:24 pm.</p>
            <p><i class="fa fa-user-o" aria-hidden="true"></i> <i><b>Usuario:</b> Sophia Leyva</i></p>
          </div>
          
          
          <div class="card text-center p-1 mt-2 shadow-sm d-flex animable" style="width: 100%;">
            <div class="d-inline-flex ml-1">
              <img src="assets/images/lampara.png" style="width: 30px; height: 30px;" alt="" class="mr-2 mt-1 float-left shadow-sm">
              <div class="float-left mt-1">
                <span><small><strong>LUZ CUARTO</strong></small></span> -
                <span class=""><small class="text-muted "><i class="fa fa-clock-o" aria-hidden="true"></i>
                    Hace 35 min.</small></span>
              </div>
            </div>
            <hr>
            <p></p>
            <p><span style="color:green;">◉</span> Se encendió la luz de la sala a las 3:24 pm.</p>
            <p><i class="fa fa-user-o" aria-hidden="true"></i> <i><b>Usuario:</b> Sophia Leyva</i></p>
          </div>

          <div class="card text-center p-1 mt-2 shadow-sm d-flex animable" style="width: 100%;">
            <div class="d-inline-flex ml-1">
              <img src="assets/images/lampara.png" style="width: 30px; height: 30px;" alt="" class="mr-2 mt-1 float-left shadow-sm">
              <div class="float-left mt-1">
                <span><small><strong>LUZ SALA</strong></small></span> -
                <span class=""><small class="text-muted "><i class="fa fa-clock-o" aria-hidden="true"></i>
                    Hace 35 min.</small></span>
              </div>
            </div>
            <hr>
            <p></p>
            <p><span style="color:green;">◉</span> Se encendió la luz de la sala a las 3:24 pm.</p>
            <p><i class="fa fa-user-o" aria-hidden="true"></i> <i><b>Usuario:</b> Sophia Leyva</i></p>
          </div>

          <div class="card text-center p-1 mt-2 p-2 shadow-sm d-flex" style="width: 100%;">
            <div class="d-inline-flex ml-1">
              <img src="assets/images/clima.png" style="width: 30px; height: 30px;" alt="" class="mr-2 mt-1 float-left shadow">
              <div class="float-left mt-1">
                <span><small><strong>TEMPERATURA Y HUMERDAD</strong></small></span> -
                <span class=""><small class="text-muted "><i class="fa fa-clock-o" aria-hidden="true"></i>
                    Hace 2 min.</small></span>
              </div>
            </div>
            <hr>
            <p></p>
            <span class="text-primary">
              <h1><i class="fa fa-sun-o" aria-hidden="true"></i></h1>
            </span>
            <p><b>Buen día Erick</b></p>
            <p><i>Hoy es ?php echo $fecha = strftime("%d de %B de %Y"); ?></i></p>
          </div>
        </div> -->

      </div>
    </div>
  </section>
</body>
<script>
  // $(function() {
  //   var availableTutorials = [
  //     "TEMPERATURA Y HUMERDAD",
  //     "LUZ SALA",
  //     "LUZ CUARTO",
  //     "SEGURIDAD PUERTA",
  //     "ALARMA GENERAL",
  //     "RIEGO PLANTAS",
  //     "PROXIMIDAD HOGAR",
  //     "MÚSICA"
  //   ];

  //   $("#txtestado").autocomplete({
  //     minLength: 2,
  //     delay: 500,
  //     source: availableTutorials
  //   });

  // });



  var devices = <?php echo '["' . $datadisp . '"]' ?>;
  //console.log(devices);

  function autocomplete(inp, arr) {
    var estado = 0;
    /*the autocomplete function takes two arguments,
    the text field element and an array of possible autocompleted values:*/
    var currentFocus;
    /*execute a function when someone writes in the text field:*/
    inp.addEventListener("input", function(e) {


      var a, b, i, val = this.textContent;
      /*close any already open lists of autocompleted values*/
      closeAllLists();
      if (!val) {
        if (this.textContent.length == 0) {
          $('#etiqueta').remove();
          $('#texto').remove();
        }
        return false;
      }
      currentFocus = -1;
      /*create a DIV element that will contain the items (values):*/
      a = document.createElement("DIV");
      a.setAttribute("id", this.id + "autocomplete-list");
      a.setAttribute("class", "autocomplete-items");
      /*append the DIV element as a child of the autocomplete container:*/
      this.parentNode.appendChild(a);
      /*for each item in the array...*/
      for (i = 0; i < arr.length; i++) {
        /*check if the item starts with the same letters as the text field value:*/
        if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
          /*create a DIV element for each matching element:*/
          b = document.createElement("DIV");
          /*make the matching letters bold:*/
          b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
          b.innerHTML += arr[i].substr(val.length);
          /*insert a input field that will hold the current array item's value:*/
          b.innerHTML += "<input type='hidden'  value='" + arr[i] + "'>";

          /*execute a function when someone clicks on the item value (DIV element):*/
          //var letravisible = inp.innerHTML;
          // $('#txtestado').find("font").remove();
          //inp.innerHTML = letravisible;
          estado = 0;
          b.addEventListener("click", function(e) {
            estado = 1;
            /*insert the value for the autocomplete text field:*/
            inp.innerHTML = "<a href='' target='_blank' id='etiqueta'>" + this.getElementsByTagName("input")[0].value + "</a><span id='texto'>&nbsp;</span>";

            if ($('#etiqueta').length != 0) {
              var etiqueta = document.getElementById("etiqueta");
              etiqueta.setAttribute('class', 'etiquet');
              var texto = document.getElementById("texto");
              setCursorToEnd(texto);
            }
            /*close the list of autocompleted values,
            (or any other open lists of autocompleted values:*/
            closeAllLists();
          });
          a.appendChild(b);
        }
      }
    });

    function setCursorToEnd(ele) {
      var range = document.createRange();
      var sel = window.getSelection();
      range.setStart(ele, 1);
      range.collapse(true);
      sel.removeAllRanges();
      sel.addRange(range);
      ele.focus();
    }
    /*execute a function presses a key on the keyboard:*/
    inp.addEventListener("keydown", function(e) {
      var x = document.getElementById(this.id + "autocomplete-list");
      if (x) x = x.getElementsByTagName("div");
      if (e.keyCode == 40) {
        /*If the arrow DOWN key is pressed,
        increase the currentFocus variable:*/
        currentFocus++;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 38) { //up
        /*If the arrow UP key is pressed,
        decrease the currentFocus variable:*/
        currentFocus--;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 13) {
        /*If the ENTER key is pressed, prevent the form from being submitted,*/
        if (estado == 1) {
          // alert(document.getElementById('txtestado').innerHTML);

          $dispX = $('#etiqueta').text();
          $AcciX = $('#texto').text();
          ActionsDevice($dispX, $AcciX);
        }
        e.preventDefault();
        if (currentFocus > -1) {
          /*and simulate a click on the "active" item:*/
          if (x) x[currentFocus].click();
        }
      }
    });






    function ActionsDevice(nomdispositivo, accion) {
      console.log(nomdispositivo);
      console.log(accion);

      $.ajax({
        type: "POST",
        url: "lib/api/apidata.php",
        data: {
          'nomDispositivo': nomdispositivo,
          'Estado': accion.trim() === "on" ? parseInt("1") : parseInt("0"),
          'Activo': 1,
          'ValorActivo': 0
        },
        success: function(data) {
          debugger;
          var ojo = data;
          alert(ojo);

          var campopost = $('#txtestado');
          campopost.text('');
          if (campopost.text().length == 0) {
            $('#etiqueta').remove();
            $('#texto').remove();
          }

          $('.load-more').remove();
          $('#postList').append(data);
          var documento = $(window).height() - 83;
          $('#postList').removeAttr('style');
          $('#postList').attr('style', 'max-width: 100%;height:' + documento + 'px');
          // CargarDatos();
          //     if (data = null) {
          //         $("#txtestado1").html(" ¡Error de Conexión!");
          //     }
          //     if (data = true) {
          //         $("#txtestado1").html(" Dispositivo Activado / Desactivado");
          //     }
        }
      });
    }




    function addActive(x) {
      /*a function to classify an item as "active":*/
      if (!x) return false;
      /*start by removing the "active" class on all items:*/
      removeActive(x);
      if (currentFocus >= x.length) currentFocus = 0;
      if (currentFocus < 0) currentFocus = (x.length - 1);
      /*add class "autocomplete-active":*/
      x[currentFocus].classList.add("autocomplete-active");
    }

    function removeActive(x) {
      /*a function to remove the "active" class from all autocomplete items:*/
      for (var i = 0; i < x.length; i++) {
        x[i].classList.remove("autocomplete-active");
      }
    }

    function closeAllLists(elmnt) {
      /*close all autocomplete lists in the document,
      except the one passed as an argument:*/
      var x = document.getElementsByClassName("autocomplete-items");
      for (var i = 0; i < x.length; i++) {
        if (elmnt != x[i] && elmnt != inp) {
          x[i].parentNode.removeChild(x[i]);
        }
      }
    }
    /*execute a function when someone clicks in the document:*/
    document.addEventListener("click", function(e) {
      closeAllLists(e.target);
    });
  }

  autocomplete(document.getElementById("txtestado"), devices);
















  $(document).ready(function() {
    var documento = $(window).height() - 83;
    $('#postList').removeAttr('style');
    $('#postList').attr('style', 'max-width: 100%;height:' + documento + 'px');

    $('#postList').scroll(function() {
      var lastID = $('.load-more').attr('lastID');
      var divlist = document.getElementById("postList");
      var clientHeight = divlist.clientHeight;
      var scrollHeight = divlist.scrollHeight;
      var scrolTop = divlist.scrollTop + 1;
      console.log(Math.round(scrolTop) + " = " + scrollHeight + "-" + clientHeight);
      if (Math.round(scrolTop) == scrollHeight - clientHeight && lastID != 0) {
        $.ajax({
          type: 'POST',
          url: 'getData.php',
          data: 'idpost=' + lastID,
          beforeSend: function(html) {
            $('.load-more').show();
          },
          success: function(html) {
            $('.load-more').remove();
            $('#postList').append(html);
            var documento = $(window).height() - 83;
            $('#postList').removeAttr('style');
            $('#postList').attr('style', 'max-width: 100%;height:' + documento + 'px');
          }
        });
      }
    });
  });
</script>

</html>