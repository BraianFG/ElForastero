<?php
    session_start();
    if (isset($_SESSION["id"])){
     $id = $_SESSION["id"];
    }else{
       header('Location: ../../../ingresar');
    }
   
 include '../../../database.php' ;
   
    $productoID = filter_var($_POST['productoID'], FILTER_SANITIZE_NUMBER_INT);
    mysqli_real_escape_string($conn , $productoID);
    
    $cantidad = filter_var($_POST['cantidad'], FILTER_SANITIZE_NUMBER_INT);
    mysqli_real_escape_string($conn , $cantidad);
   
   $sql ="INSERT INTO `carrito` (`usuarioID`, `productoID`, `cantidad`) VALUES ('$id', '$productoID', '$cantidad')";
   
   $sql2 ="UPDATE `carrito` SET `cantidad` = '$cantidad' WHERE `carrito`.`usuarioID` = '$id'
   AND  `carrito`.`productoID` = '$productoID'";
   
 $resultInsert = mysqli_query($conn, $sql);    
  $resultInsert = mysqli_query($conn, $sql2);  
   mysqli_close($conn);   
   
   return;
?>