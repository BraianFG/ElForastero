<?php 
    include '../../database.php';

    $UsuarioID = filter_var($_POST['UsuarioID'], FILTER_SANITIZE_NUMBER_INT);
    mysqli_real_escape_string($conn , $UsuarioID);
    
    $estado = filter_var($_POST['estado'], FILTER_SANITIZE_STRING);
    mysqli_real_escape_string($conn , $estado);
    
    $MensajeVendedor = filter_var($_POST['MensajeVendedor'], FILTER_SANITIZE_STRING);
    mysqli_real_escape_string($conn , $MensajeVendedor);
  if($id == "" ){
         header("Location:../../");
   }else{
          header("Location:../../");
   }
    mysqli_real_escape_string($conn , $sql);
//------------------------------------------------------------------------------//
  $sql = "UPDATE `ventas` SET estado= '$estado',MensajeVendedor='$MensajeVendedor' WHERE `ventas` .UsuarioID = '$UsuarioID'";
   $resultInsert = mysqli_query($conn, $sql);    
   
   mysqli_close($conexion, $sql);   
?>