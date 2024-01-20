<?php
      require '../../../assets/php/database.php';
    
    $id = filter_var($_POST['id'], FILTER_SANITIZE_STRING);
    mysqli_real_escape_string($conn , $id);
    
    $imagen01 = filter_var($_POST['imagen01'], FILTER_SANITIZE_STRING);
    mysqli_real_escape_string($conn , $imagen01);
  
    unlink("../../../images/$imagen01");
    $sql="UPDATE `productos` SET `imagen01` = '' WHERE `productos`.`id` ='$id'";
    echo "<script>alertify.notify('imagen eliminada con exito','success',8)</script>;";

    
   $resultInsert = mysqli_query($conn, $sql); 
   mysqli_close($conn);   
?>  