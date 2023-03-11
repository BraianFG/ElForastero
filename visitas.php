<?php
require "database.php";

$ip = $_SERVER['REMOTE_ADDR'];

date_default_timezone_set('America/Argentina/Buenos_Aires');
$fecha = date('d/m/Y');
$hora  = date("H:m:s");
$pagina = $_SERVER["REQUEST_URI"];
$navegador = $_SERVER["HTTP_USER_AGENT"];
$referido = $_SERVER['HTTP_REFERER'];

if(empty($referido)){
    $referido = "Link directo";
}

$sql = "INSERT INTO `visitas`(`ip`, `fecha`, `hora`,`pagina`,`navegador`,`pais`,`referido`) VALUES ('$ip','$fecha','$hora','$pagina','$navegador','$pais','$referido')";
 $resultInsert = mysqli_query($conn, $sql); 
 
 
?>