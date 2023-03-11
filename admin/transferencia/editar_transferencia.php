<?php
  require '../../database.php';
  
    echo '<script> window.location.href = "../../";</script>';
    
    $nombre = filter_var($_POST['nombre'], FILTER_SANITIZE_STRING);
    mysqli_real_escape_string($conn, $nombre);
    
    $apellido = filter_var($_POST['apellido'], FILTER_SANITIZE_STRING);
    mysqli_real_escape_string($conn , $apellido);
    
    $cuit = filter_var($_POST['cuit'], FILTER_SANITIZE_NUMBER_INT);
    mysqli_real_escape_string($conn , $cuit);
     
    $banco = filter_var($_POST['banco'], FILTER_SANITIZE_STRING);
    mysqli_real_escape_string($conn , $banco);
     
    $cbu = filter_var($_POST['cbu'], FILTER_SANITIZE_NUMBER_INT);
    mysqli_real_escape_string($conn , $cbu); 
    
    $cuenta = filter_var($_POST['cuenta'], FILTER_SANITIZE_NUMBER_INT);
    mysqli_real_escape_string($conn , $cuenta); 
         
    $alias = filter_var($_POST['alias'], FILTER_SANITIZE_STRING);
    mysqli_real_escape_string($conn , $alias);
    
    
    $sql = "UPDATE `transferencia` SET `nombre`='$nombre',`apellido`='$apellido',`cuit`='$cuit',`banco`='$banco',`cbu`='$cbu',`cuenta`='$cuenta',`alias`='$alias' WHERE 1;";
    $resultInsert = mysqli_query($conn, $sql); 
    mysqli_close($conn);  
   
?>