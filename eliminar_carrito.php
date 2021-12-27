<?php 
    include 'database.php';
//------------------------------------------------------------------------------//
date_default_timezone_set('America/Argentina/Buenos_Aires');
$fecha = date("Y-m-d", time());
$hora = date("H:i:s");


    
    $idn= filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
    mysqli_real_escape_string($conn , $idn);
    
   $id= filter_var($_POST['UsuarioID'], FILTER_SANITIZE_NUMBER_INT);
    mysqli_real_escape_string($conn , $id);
    
 
      $sql ="INSERT INTO `totalCarrito`(SELECT * FROM totalCarrito WHERE UsuarioID = '$id')";
      
      $sql2 ="UPDATE `totalCarrito` SET `total` = (SELECT SUM(precio)FROM carrito WHERE UsuarioID = '$id'),`fecha` ='$fecha',`hora`='$hora' WHERE `totalCarrito`.`UsuarioID` = '$id'"; 
    
    
     $sql3 ="DELETE FROM `carrito` WHERE `carrito`.`id` = '$idn'";
     
    $sql4 ="UPDATE `totalCarrito` SET `total` = (SELECT SUM(precio)FROM carrito WHERE UsuarioID = '$id'),`fecha` ='$fecha',`hora`='$hora' WHERE `totalCarrito`.`UsuarioID` = '$id'"; 
  
      $resultInsert = mysqli_query($conn, $sql);
      $resultInsert2 = mysqli_query($conn, $sql2);
      $resultInsert3 = mysqli_query($conn, $sql3);
      $resultInsert4 = mysqli_query($conn, $sql4);
   mysqli_close($conn);   
   
?>