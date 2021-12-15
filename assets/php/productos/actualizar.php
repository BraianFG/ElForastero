<?php
    session_start();
    if (isset($_SESSION["id"])){
     $id = $_SESSION["id"];
     $nombre = $_SESSION["nombre"];
     $apellido = $_SESSION["apellido"];
    }else{
       header('Location: ../../../ingresar');
    }
   
 include '../../../database.php' ;
   
    $precio = filter_var($_POST['precio'], FILTER_SANITIZE_NUMBER_INT);
    mysqli_real_escape_string($conn , $precio);
    
    
    $cantidad = filter_var($_POST['cantidad'], FILTER_SANITIZE_NUMBER_INT);
    mysqli_real_escape_string($conn , $cantidad);
   
 
   $sql="UPDATE `carrito` SET `cantidad` = '$cantidad' WHERE `carrito`.`id` = 1";
   
  $resultInsert = mysqli_query($conn, $sql);  
   mysqli_close($conn);   
   
   return;
?>