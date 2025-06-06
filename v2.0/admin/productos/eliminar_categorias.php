<?php 
    header('Content-Type: text/plain');
   require '../../../assets/php/database.php';
//------------------------------------------------------------------------------//
    $id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
    mysqli_real_escape_string($conn , $id);
    
    $nombre = filter_var($_POST['nombre'], FILTER_SANITIZE_STRING);
    mysqli_real_escape_string($conn, $nombre);
    $sql="DELETE FROM `categorias` WHERE `categorias`.`id` =  '$id' ";

      $resultInsert = mysqli_query($conn, $sql); 
      
   mysqli_close($conn);   
   
      echo "OK";
     exit;
     header("Location : ../");
   
?>