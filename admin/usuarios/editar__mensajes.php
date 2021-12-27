<?php 
    include '../database.php';
    
    date_default_timezone_set('America/Argentina/Buenos_Aires');
    $fecha = date("Y-m-d", time());
    $hora = date("H:i:s");

    $idn = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
    mysqli_real_escape_string($conn , $idn);
    
    $UsuarioID = filter_var($_POST['UsuarioID'], FILTER_SANITIZE_NUMBER_INT);
    mysqli_real_escape_string($conn , $UsuarioID);
    
    $MensajeVendedor = filter_var($_POST['MensajeVendedor'], FILTER_SANITIZE_STRING);
    mysqli_real_escape_string($conn , $MensajeVendedor);
  if($id == "" ){
         header("Location:../../");
   }else{
          header("Location:../../");
   }
    mysqli_real_escape_string($conn , $sql);
//------------------------------------------------------------------------------//
  $sql = "UPDATE `ventas` SET `MensajeVendedor` = '$MensajeVendedor' , `fecha`='$fecha' , `hora`='$hora' WHERE `ventas`.`id` = '$idn'";
   $resultInsert = mysqli_query($conn, $sql);    
   
   mysqli_close($conexion, $sql);   
?>