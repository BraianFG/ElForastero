<?php
session_start();
include '../../database.php';
$id =  $_SESSION["id"];
$nombre = $_SESSION["nombre"];
$apellido = $_SESSION["apellido"];
    $mensaje =filter_var($_POST['mensaje'], FILTER_SANITIZE_STRING);
    mysqli_real_escape_string($conn , $mensaje);
    
    $total=filter_var($_POST['total'], FILTER_SANITIZE_NUMBER_INT);
    mysqli_real_escape_string($conn , $total);
    
    
    date_default_timezone_set('America/Argentina/Buenos_Aires');
    
    $fecha = date("Y-m-d", time());
    $hora = date("H:i:s");
    
    
   
   if($id ==""){
         header("Location:../../comprar");
   }else{
          header("Location:../../comprar");
   }

//------------------------------------------------------------------------------//
$sql = "INSERT INTO `ventas`(`UsuarioID`,`nombre`,`apellido`,`mensaje`, `fecha` , `hora`,`estado`,`MensajeVendedor`,`vendedor`) VALUES ('$id','$nombre','$apellido',$mensaje','$fecha','$hora','pendiente','pendiente','El Forastero')";

$sql2 ="UPDATE `ventas` SET `nombre`='$nombre',`apellido`='$apellido',`mensaje`='$mensaje',`fecha`='$fecha',`hora`='$hora',`estado`='$estado',`MensajeVendedor`='$MensajeVendedor',`vendedor`='El Forastero' WHERE UsuarioID = '$id'";
   $resultInsert = mysqli_query($conn, $sql); 
    $resultInsert = mysqli_query($conn, $sql2); 
   mysqli_close($conn);   
?>