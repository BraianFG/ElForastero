<?php 
    require '../../database.php';

    $id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
    mysqli_real_escape_string($conn , $id);
    
    $nombre = filter_var($_POST['nombre'], FILTER_SANITIZE_STRING);
    mysqli_real_escape_string($conn , $nombre);
    
    
  if($id == "" ){
         header("Location:../../");
   }else{
          header("Location:../../");
   }
    mysqli_real_escape_string($conn , $sql);
//------------------------------------------------------------------------------//
  $sql = "UPDATE `admin` SET nombre= '$nombre'  WHERE `admin` .id = '$id' AND  '$id' > 1";
   $resultInsert = mysqli_query($conn, $sql);    
   
   mysqli_close($conexion, $sql);   
?>