<?php
  require '../../database.php';
  
    echo '<script> window.location.href = "../../";</script>';
    
    $AccessToken = filter_var($_POST['AcessToken'], FILTER_SANITIZE_STRING);
    mysqli_real_escape_string($conn, $AccessToken);
    
    $sdk = filter_var($_POST['sdk'], FILTER_SANITIZE_STRING);
    mysqli_real_escape_string($conn , $sdk);
    
    $comision = filter_var($_POST['comision'], FILTER_SANITIZE_STRING);
    mysqli_real_escape_string($conn , $comision);
     

    
    $sql = "UPDATE `MercadoPago` SET `AcessToken`='$AccessToken',`sdk`='$sdk',`comision`='$comision' WHERE 1;";
    
    $resultInsert = mysqli_query($conn, $sql); 
   mysqli_close($conn);  
   
?>