<?php
    require '../database.php';
   $cantidad = filter_var($_POST['resultado'], FILTER_SANITIZE_NUMBER_INT);
    mysqli_real_escape_string($conn , $cantidad);
    
    $id = filter_var($_POST['idproducto'], FILTER_SANITIZE_NUMBER_INT);
    mysqli_real_escape_string($conn , $id);
    
    $sql = "INSERT INTO `reacciones`(`idproducto`, `likes`) VALUES ('$id','$cantidad')";
     $resultInsert = mysqli_query($conn, $sql);
     
?>
