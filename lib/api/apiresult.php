<?php
// $dispositivo = $_POST["IdDispositivo"];
// $estado = $_POST["Estado"];
// $activo = $_POST["Activo"];
// $valoractivo = $_POST["ValorActivo"];
// $data = array("IdDispositivo" => $dispositivo, "Estado" => $estado, "Activo" => $activo, "ValorActivo" => $valoractivo);
// $cn = curl_init();
// $url    = "https://userleydiaz.com/api/dispositivos/estado";
// curl_setopt($cn, CURLOPT_URL, $url);
// curl_setopt($cn, CURLOPT_HTTPGET, false);
// curl_setopt($cn, CURLOPT_HTTPHEADER, array('Content-Type: application/json', 'Content-Length:' . strlen(json_encode($data))));
// curl_setopt($cn, CURLOPT_POST, 1);
// curl_setopt($cn, CURLOPT_POSTFIELDS, json_encode($data));
// curl_setopt($cn, CURLOPT_HEADER, false);
// curl_setopt($cn, CURLOPT_RETURNTRANSFER, 1);
// $rpta = curl_exec($cn);
// echo $rpta;
// curl_close($cn);
function callAPI($method, $url, $data){
    $curl = curl_init();
    switch ($method){
       case "POST":
          curl_setopt($curl, CURLOPT_POST, 1);
          if ($data)
             curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
          break;
       case "PUT":
          curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");
          if ($data)
             curl_setopt($curl, CURLOPT_POSTFIELDS, $data);			 					
          break;
       default:
          if ($data)
             $url = sprintf("%s?%s", $url, http_build_query($data));
    }
    // OPTIONS:
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_HTTPHEADER, array(
       'Content-Type: application/json',
    ));
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
    // EXECUTE:
    $result = curl_exec($curl);
    if(!$result){die("Connection Failure");}
    curl_close($curl);
    return $result;
 }

$get_data = callAPI('GET', 'https://userleydiaz.com/api/dispositivos', false);
$response = json_encode($get_data, true);

// $errors = $response['response']['errors'];
// $data = $response['response']['data'][0];

echo $response;
