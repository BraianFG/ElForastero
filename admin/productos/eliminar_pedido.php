<?php
    include '../database.php';
//------------------------------------------------------------------------------//
    $id = filter_var($_POST['UsuarioID'], FILTER_SANITIZE_NUMBER_INT);
    mysqli_real_escape_string($conn , $id);

   $sql="DELETE FROM `pedidos` WHERE `pedidos`.`UsuarioID` = $id";
   $sql2="DELETE FROM `totalPedido` WHERE `totalPedido`.`UsuarioID` = $id";
  
   $resultInsert = mysqli_query($conn, $sql); 
   $resultInsert2 = mysqli_query($conn, $sql2); 
   
   mysqli_close($conn);   
   
 
 ?> 
 