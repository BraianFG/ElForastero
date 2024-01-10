<?php 
    include 'database.php';
//------------------------------------------------------------------------------//
    
   $id= filter_var($_POST['UsuarioID'], FILTER_SANITIZE_NUMBER_INT);
    mysqli_real_escape_string($conn , $id);

     $sql3 ="DELETE FROM `carrito` WHERE `carrito`.`usuarioID` = '$id'";
      $sql2 ="DELETE FROM `totalCarrito` WHERE `totalCarrito`.`UsuarioID` = '$id'"; 
     
   $resultInsert2 = mysqli_query($conn, $sql2);
   $resultInsert3 = mysqli_query($conn, $sql3);
   mysqli_close($conn);   
   
?>