<?php
   require '../../../database.php' ; 
 
   session_start();
    if (isset($_SESSION["id"])){
     $UsuarioID = $_SESSION["id"];
     $nombre = $_SESSION["nombre"];
     $apellido = $_SESSION["apellido"];
    }else{
       header('Location: ../../../ingresar');
    }
    
    $idProducto = filter_var($_POST['idproducto'], FILTER_SANITIZE_NUMBER_INT);
    mysqli_real_escape_string($conn , $idProducto);
    
    $nombre = filter_var($_POST['nombre'], FILTER_SANITIZE_STRING);
    mysqli_real_escape_string($conn , $nombre);
    
    $descripcion = filter_var($_POST['descripcion'], FILTER_SANITIZE_STRING);
    mysqli_real_escape_string($conn , $descripcion);   
    
    $imagen = filter_var($_POST['imagen'], FILTER_SANITIZE_STRING);
    mysqli_real_escape_string($conn , $imagen);
    
    $precio = filter_var($_POST['precio'], FILTER_SANITIZE_NUMBER_INT);
    mysqli_real_escape_string($conn , $precio);
    
     $sql2 = "INSERT INTO `favoritos`(`idproducto`, `nombre`,`descripcion`,`precio`,`imagen`,`usuarioID`) VALUES ('$idProducto','$nombre','$descripcion','$precio','$imagen','$UsuarioID')";
     $resultInsert = mysqli_query($conn, $sql2);
        mysqli_close($conn);  
     
?>
