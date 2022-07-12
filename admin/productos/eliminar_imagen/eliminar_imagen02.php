<?php
    require "../../../database.php";
    
    $id = filter_var($_POST['id'], FILTER_SANITIZE_STRING);
    mysqli_real_escape_string($conn , $id);
    
    $imagen02 = filter_var($_POST['imagen02'], FILTER_SANITIZE_STRING);
    mysqli_real_escape_string($conn , $imagen02);
  
  if(unlink("../../../images/$imagen02")){
    $sql="UPDATE `productos` SET `imagen02` = '' WHERE `productos`.`id` ='$id'";
    echo "<script>alertify.notify('imagen eliminada con exito','success',8)</script>;";
    
  }

   $resultInsert = mysqli_query($conn, $sql); 
   mysqli_close($conn);   
?>  