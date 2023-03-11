<?php
require "database.php";

$ip = $_SERVER['REMOTE_ADDR'];

date_default_timezone_set('America/Argentina/Buenos_Aires');
$fecha = date('d/m/Y');
$hora  = date("H:m:s");
$pagina = $_SERVER["REQUEST_URI"];
$navegador = $_SERVER["HTTP_USER_AGENT"];
$referido = $_SERVER['HTTP_REFERER'];
$pais = $_SERVER['GEOIP_COUNTRY_NAME'];
$ciudad = $_SERVER['GEOIP_CITY'];

if(empty($referido)){
    $referido = "Link directo";
}

if(empty($ciudad)){
    $ciudad = "sin definír";
}

$sql = "INSERT INTO `visitas`(`ip`, `fecha`, `hora`, `num`, `pais`, `ciudad`, `pagina`, `navegador`, `referido`) VALUES ('$ip','$fecha','$hora','$num','$pais','$ciudad','$pagina','$navegador','$referido')";
 $resultInsert = mysqli_query($conn, $sql); 
 
 
?>
