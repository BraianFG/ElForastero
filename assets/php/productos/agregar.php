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
    
   $nombreProduc = filter_var($_POST['nombre'], FILTER_SANITIZE_STRING);
    mysqli_real_escape_string($conn , $nombreProduc);
    
    $precio = filter_var($_POST['precio'], FILTER_SANITIZE_NUMBER_INT);
    mysqli_real_escape_string($conn , $precio);
    
    $productoID = filter_var($_POST['productoID'], FILTER_SANITIZE_NUMBER_INT);
    mysqli_real_escape_string($conn , $productoID);
    
    $cantidad = filter_var($_POST['cantidad'], FILTER_SANITIZE_NUMBER_INT);
    mysqli_real_escape_string($conn , $cantidad);
   
 
 $sql ="INSERT INTO `carrito`( `usuarioID`, `nombre`, `apellido`, `productoID`, `nombreProduc`, `cantidad`, `precio`, `fecha`, `hora`) VALUES ('$id','$nombre','$apellido','$productoID','$nombreProduc','$cantidad','$precio','$fecha','$hora')";
 
    
 $sql2 = "INSERT INTO `totalCarrito`(`UsuarioID`, `nombre`, `apellido`,`fecha`, `hora`, `total`) VALUES ('$id','$nombre','$apellido','$fecha','$hora',(SELECT SUM(precio)FROM carrito WHERE UsuarioID = '$id'))";
   
  $sql3 ="UPDATE `totalCarrito` SET `fecha` ='$fecha',`hora`='$hora' ,`total`=(SELECT SUM(precio)FROM carrito WHERE UsuarioID = '$id')  WHERE `totalCarrito`.`UsuarioID` = '$id'";    
  
  $resultInsert = mysqli_query($conn, $sql);  
  $resultInsert2 = mysqli_query($conn, $sql2); 
  $resultInsert3 = mysqli_query($conn, $sql3); 
    
   mysqli_close($conn);   
   
   return;
?>