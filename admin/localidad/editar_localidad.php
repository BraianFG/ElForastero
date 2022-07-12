<?php
  require '../../database.php';
  
    echo '<script> window.location.href = "../../";</script>';
    
    $localidad = filter_var($_POST['localidad'], FILTER_SANITIZE_STRING);
    mysqli_real_escape_string($conn, $localidad);
    
    $codPostal = filter_var($_POST['codPostal'], FILTER_SANITIZE_NUMBER_INT);
    
    $codArea = filter_var($_POST['codArea'], FILTER_SANITIZE_NUMBER_INT);
    
    $sql = "UPDATE `localidad` SET `localidad`='$localidad',`codArea`='$codArea' WHERE id='1';";
    
    $resultInsert = mysqli_query($conn, $sql); 
   mysqli_close($conn);  
   
?>