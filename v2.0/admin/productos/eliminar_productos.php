<?php 
      header('Content-Type: text/plain');
      require '../../../assets/php/database.php';
//------------------------------------------------------------------------------//
    $id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
    mysqli_real_escape_string($conn , $id);
    
    $sql="DELETE FROM `productos` WHERE `productos`.`id` =  '$id' ";

      $resultInsert = mysqli_query($conn, $sql); 
   
      
   mysqli_close($conn); 
   echo "OK";
   exit;
   header("Location : ../");
?>