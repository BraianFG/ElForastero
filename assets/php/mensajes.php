<?php
session_start();
    include 'database.php';
$id =  $_SESSION["id"];
$nombre = $_SESSION["nombre"];
$apellido = $_SESSION["apellido"];

   if($id ==""){
         header("Location:../../paginas/mensaje");
   }else{
          header("Location:../../paginas/mensaje");
   }

    $mensaje =filter_var($_POST['mensaje'], FILTER_SANITIZE_STRING);
    mysqli_real_escape_string($conn , $mensaje);

    
    
    date_default_timezone_set('America/Argentina/Buenos_Aires');
    
    $fecha = date("Y-m-d", time());
    $hora = date("H:i:s");
    
    
//------------------------------------------------------------------------------//
$sql="INSERT INTO `mensajes`( `UsuarioID`, `nombre`, `apellido`, `mensaje`, `fecha`, `hora`,  `MensajeVendedor`) VALUES ('$id','$nombre','$apellido','$mensaje','$fecha','$hora','')";

   $resultInsert = mysqli_query($conn, $sql); 
   mysqli_close($conn);   
?>