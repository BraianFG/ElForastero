<?php 
     header('Content-Type: text/plain');
      require '../../../assets/php/database.php';

    $nombre = filter_var($_POST['nombre'], FILTER_SANITIZE_STRING);
    mysqli_real_escape_string($conn, $nombre);
 
    $id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
    mysqli_real_escape_string($conn , $id);
    

//------------------------------------------------------------------------------//
  $sql = "UPDATE `categorias` SET nombre= '$nombre'  WHERE `categorias` .id = '$id' ";
  
   $resultInsert = mysqli_query($conn, $sql);    
    echo "OK";
    exit;
    header("Location : ../");
?>

