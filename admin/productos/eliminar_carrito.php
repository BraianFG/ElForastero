<?php 
    require '../../database.php';
//------------------------------------------------------------------------------//
    $id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
    mysqli_real_escape_string($conn , $id);
    $sql="DELETE FROM `carrito` WHERE `carrito`.`id` =  '$id' ";

      $resultInsert = mysqli_query($conn, $sql); 

   mysqli_close($conn);   
   
?>