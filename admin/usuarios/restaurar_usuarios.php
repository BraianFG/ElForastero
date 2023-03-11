<?php 
    require '../../database.php';
    
   $id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
    mysqli_real_escape_string($conn , $id);
    
//------------------------------------------------------------------------------//
    $sql = "INSERT INTO `usuarios` SELECT * FROM `usuarios_eliminados` WHERE id='$id';";
    $sql2="DELETE FROM `usuarios_eliminados` WHERE id='$id'";
      $resultInsert = mysqli_query($conn, $sql); 
      $resultInsert2 = mysqli_query($conn, $sql2); 
      
   mysqli_close($conn);   
   
?>