<?php
    require "../../../database.php";
    
    $id = filter_var($_POST['id'], FILTER_SANITIZE_STRING);
    mysqli_real_escape_string($conn , $id);
    
    $imagen = filter_var($_POST['imagen'], FILTER_SANITIZE_STRING);
    mysqli_real_escape_string($conn , $imagen);
  
  if(unlink("../../../images/$imagen")){
    $sql="UPDATE `productos` SET `imagen` = '' WHERE `productos`.`id` ='$id'";
    
  }     
   $resultInsert = mysqli_query($conn, $sql); 
   mysqli_close($conn);   
?>  