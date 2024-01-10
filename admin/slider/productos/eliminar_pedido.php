<?php
    require '../../database.php';
//------------------------------------------------------------------------------//
    $UsuarioID = filter_var($_POST['UsuarioID'], FILTER_SANITIZE_NUMBER_INT);
    mysqli_real_escape_string($conn , $UsuarioID);

   $sql2="DELETE FROM `totalPedido` WHERE `totalPedido`.`UsuarioID` = $UsuarioID";
   $sql3="DELETE FROM `pedidos` WHERE `pedidos`.`UsuarioID` = $UsuarioID";
  
   $resultInsert = mysqli_query($conn, $sql2); 
   $resultInsert3 = mysqli_query($conn, $sql3); 
   mysqli_close($conn);   
   
 
 ?> 
 