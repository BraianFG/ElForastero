<?php
       require '../../assets/php/database.php';
    
    $id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
    mysqli_real_escape_string($conn , $id);
    
    $sql="DELETE FROM `usuarios_eliminados` WHERE id='$id'";
    
    $resultInsert = mysqli_query($conn, $sql); 
    mysqli_close($conn);   
?>