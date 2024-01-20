<?php

require '../assets/php/database.php';
 
 $cbu = filter_var($_POST['cbu'], FILTER_SANITIZE_NUMBER_INT);
  mysqli_real_escape_string($conn , $cbu);
    
 $sql = "DELETE FROM `transferencia` WHERE `transferencia`.`cbu` = '$cbu'";
 $resultInsert = mysqli_query($conn, $sql); 
 mysqli_close($conn);  
   
 
?>