<?php

date_default_timezone_set('America/Lima');
include_once("../../conexion.php");
$IdDispositivoX = $_GET["IdDispositivoX"];
$EstadoX = $_GET["EstadoX"];


$resultado = mysqli_query($Cn, "select idDispositivo, Nombre,imagen from dispositivos where idDispositivo = '" . $IdDispositivoX . "'");
if (!$resultado) {
    echo 'No se pudo ejecutar la consulta: ';
    exit;
}

//Mientras mysqli_fetch_array traiga algo, lo agregamos a una variable temporal
while ($fila = mysqli_fetch_array($resultado)) {
    $dispositivo = $fila['idDispositivo'];
    $nombredispo = $fila['Nombre'];
    $imagen = $fila['imagen'];
}
$fecha = date('m/d/Y g:i a');

if ($EstadoX == 1) {

    $dato = '<div class="d-inline-flex ml-1">
    <img src="' . $imagen . '" style="width: 30px; height: 30px;" alt="" class="mr-2 mt-1 float-left shadow-sm">
    <div class="float-left mt-1">
      <span><small><strong>' . $nombredispo . '</strong></small></span> -
      <span class=""><small class="text-muted "><i class="fa fa-clock-o" aria-hidden="true"></i>
          ' . $fecha . '.</small></span>
    </div>
  </div>
  <div class="p-3">
  <p><span style="color:green;">◉</span> Se activó ' . $nombredispo . '.</p>
  <p><i class="fa fa-user-o" aria-hidden="true"></i> <i><b>Usuario:</b> Erick Leyva Díaz</i></p>
  </div>';
    //echo $dato;
    $rsptax = mysqli_query($Cn, "insert into post (identificador,contenido,creacion,estado) values ('" . $dispositivo . "', '" .  $dato . "','',1)");
} else {
    $dato = '<div class="d-inline-flex ml-1">
    <img src="' . $imagen . '" style="width: 30px; height: 30px;" alt="" class="mr-2 mt-1 float-left shadow-sm">
    <div class="float-left mt-1">
      <span><small><strong>' . $nombredispo . '</strong></small></span> -
      <span class=""><small class="text-muted "><i class="fa fa-clock-o" aria-hidden="true"></i>
          ' . $fecha . '.</small></span>
    </div>
  </div>
  <div class="p-3">
  <p><span style="color:red;">◉</span> Se desactivó ' . $nombredispo . '.</p>
  <p><i class="fa fa-user-o" aria-hidden="true"></i> <i><b>Usuario:</b> Erick Leyva Díaz</i></p>
  </div>';

    $rsptax = mysqli_query($Cn, "insert into post (identificador,contenido,creacion,estado) values ('" . $dispositivo . "','" . $dato . "','',1)");
}



$post = array();
$datos = "";
if ($rsptax) {
    $query = mysqli_query($Cn, "SELECT idpost,contenido FROM post ORDER BY idpost DESC LIMIT 10");
    if ($query->num_rows > 0) {
        while ($row = mysqli_fetch_assoc($query)) {

            $postID = $row["idpost"];
            $datos = $datos . '<div class="card bg-light p-1 mt-2 shadow-sm d-flex animable" style="width: 100%;">' . $row['contenido'] . '</div>';
        }
        $datos = $datos . '<div class="load-more" lastID="' . $postID . '" style="display: none;"><img src="assets/images/loading.gif" alt=""> </div>';
    }
}

$post[0] = $datos;
echo json_encode($post);
