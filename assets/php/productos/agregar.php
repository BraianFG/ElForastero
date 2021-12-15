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
 
    date_default_timezone_set('America/Argentina/Buenos_Aires');
    $fecha = date("Y-m-d", time());
    $hora = date("H:i:s");
    
    $precio = filter_var($_POST['precio'], FILTER_SANITIZE_NUMBER_INT);
    mysqli_real_escape_string($conn , $precio);
    
    $productoID = filter_var($_POST['productoID'], FILTER_SANITIZE_NUMBER_INT);
    mysqli_real_escape_string($conn , $productoID);
    
    $cantidad = filter_var($_POST['cantidad'], FILTER_SANITIZE_NUMBER_INT);
    mysqli_real_escape_string($conn , $cantidad);
   
   $sql ="INSERT INTO `carrito` (`usuarioID`,`nombre`,`apellido`,`productoID`,`cantidad`,`precio`,`fecha`,`hora`) VALUES ('$id','$nombre','$apellido','$productoID','$cantidad','$precio','$fecha','$hora')";
   
  $resultInsert = mysqli_query($conn, $sql);  
   mysqli_close($conn);   
   
   return;
?>