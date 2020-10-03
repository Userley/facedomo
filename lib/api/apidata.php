<?php
setlocale(LC_ALL, "es_PE", "es_PE", "esp");
date_default_timezone_set('America/Lima');
include_once("../../conexion.php");
$nomDispositivo = $_POST["nomDispositivo"];

$resultado = mysqli_query($Cn, "select iddispositivo,Nombre from dispositivos where nombre = '" . $nomDispositivo . "'");
if (!$resultado) {
  echo 'No se pudo ejecutar la consulta: ';
  exit;
}

//Mientras mysqli_fetch_array traiga algo, lo agregamos a una variable temporal
while ($fila = mysqli_fetch_array($resultado)) {

  //Ahora $fila tiene la primera fila de la consulta, pongamos que tienes
  //un campo en tu DB llamado NOMBRE, así accederías
  $dispositivo = $fila['iddispositivo'];
  $nombredispo = $fila['Nombre'];
}
//$Cn->close();
$estado = $_POST["Estado"];
$activo = $_POST["Activo"];
$valoractivo = $_POST["ValorActivo"];
// echo "IdDispositivo" . $dispositivo . "Estado" . $estado . "Activo" . $activo . "ValorActivo" . $valoractivo;
$data = array("IdDispositivo" => $dispositivo, "Estado" => $estado, "Activo" => $activo, "ValorActivo" => $valoractivo);
$cn = curl_init();
$url    = "https://userleydiaz.com/api/dispositivos/actualizar";
curl_setopt($cn, CURLOPT_URL, $url);
curl_setopt($cn, CURLOPT_HTTPGET, false);
curl_setopt($cn, CURLOPT_HTTPHEADER, array('Content-Type: application/json', 'Content-Length:' . strlen(json_encode($data))));
curl_setopt($cn, CURLOPT_POST, 1);
curl_setopt($cn, CURLOPT_POSTFIELDS, json_encode($data));
curl_setopt($cn, CURLOPT_HEADER, false);
curl_setopt($cn, CURLOPT_RETURNTRANSFER, 1);
$rpta = curl_exec($cn);

$fecha = getdate();
if ($rpta) {
  if ($estado == 1) {

    $dato = '<div class="d-inline-flex ml-1">
        <img src="assets/images/music.png" style="width: 30px; height: 30px;" alt="" class="mr-2 mt-1 float-left shadow-sm">
        <div class="float-left mt-1">
          <span><small><strong>' . $nombredispo . '</strong></small></span> -
          <span class=""><small class="text-muted "><i class="fa fa-clock-o" aria-hidden="true"></i>
              Hace 35 min.</small></span>
        </div>
      </div>
      <div class="p-1 pl-2 pr-2">
        <p><span style="text-align: justify !important;"></span>Su solicitud a <i>' . $nombredispo . '</i> se está enviando</p>
        <p style="text-align:center !important;"><i class="fa fa-toggle-on" aria-hidden="true" style="color:#49B164; font-size: 25px;"></i><br><i> encender...</i></p>
        <small>
          <p class="text-muted"><i class="fa fa-home" aria-hidden="true"></i> Domo<i>Live</i></p>
        </small>
      </div>';
    //echo $dato;
    $rsptax = mysqli_query($Cn, "insert into post (identificador,contenido,creacion,estado) values ('" . $dispositivo . "', '" .  $dato . "','',1)");
  } else {
    $dato = '<div class="d-inline-flex ml-1">
        <img src="assets/images/music.png" style="width: 30px; height: 30px;" alt="" class="mr-2 mt-1 float-left shadow-sm">
        <div class="float-left mt-1">
          <span><small><strong>' . $nombredispo . '</strong></small></span> -
          <span class=""><small class="text-muted "><i class="fa fa-clock-o" aria-hidden="true"></i>
              Hace 35 min.</small></span>
        </div>
        </div>
        <div class="p-1 pl-2 pr-2">
        <p><span style="text-align: justify !important;"></span>Su solicitud a <i>' . $nombredispo . '</i> se está enviando</p>
        <p style="text-align:center !important;"><i class="fa fa-toggle-off" aria-hidden="true" style="color:#F90101; font-size: 25px;"></i><br><i> apagando...</i></p>
        <small>
          <p class="text-muted"><i class="fa fa-home" aria-hidden="true"></i> Domo<i>Live</i></p>
        </small>
        </div>';

    $rsptax = mysqli_query($Cn, "insert into post (identificador,contenido,creacion,estado) values ('" . $dispositivo . "','" . $dato . "','',1)");
  }



  $rata[] = array();
  if ($rsptax) {
    $query = mysqli_query($Cn, "SELECT idpost,contenido FROM post ORDER BY idpost DESC LIMIT 10");
    if ($query->num_rows > 0) {
      while ($row = mysqli_fetch_assoc($query)) {
        $postID = $row["idpost"];
        $rata[0] += "<div class='card bg-dark text-white p-1 mt-2 shadow-sm d-flex animable' style='width: 100%;'>" . $row['contenido'] . "</div>";
      }
      // echo "<div class='load-more' lastID='" . $postID . "' style='display: none;'><img src='assets/images/loading.gif' alt=''> </div>";
    }
  } else {
    //echo false;
  }
}

echo json_encode($rata);
curl_close($cn);
