<?php 
   require '../../assets/php/database.php';

    date_default_timezone_set('America/Argentina/Buenos_Aires');
    $fecha = date("Y-m-d", time());
    $hora = date("H:i:s");

    $idn = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
    mysqli_real_escape_string($conn , $idn);
    
    $MensajeVendedor = filter_var($_POST['MensajeVendedor'], FILTER_SANITIZE_STRING);
    mysqli_real_escape_string($conn , $MensajeVendedor);

    if($idn == "" ){
         header("Location:../../../admin");
   }else{
          header("Location:../../../admin");
   }
   
//------------------------------------------------------------------------------//
  $sql="UPDATE `mensajes` SET `MensajeVendedor` = '$MensajeVendedor' ,`fecha`='$fecha' , `hora`='$hora'  WHERE `mensajes`.`id` = '$idn';";
  
   $resultInsert = mysqli_query($conn, $sql);    
   mysqli_close($conn, $sql);   
 
?>