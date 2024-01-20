<?php 
   require '../../assets/php/database.php';

   if($id == "" ){
         header("Location:../");
   }else{
          header("Location:../");
   }
   
//------------------------------------------------------------------------------//
    $id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
    mysqli_real_escape_string($conn , $id);
    
    $nombre = filter_var($_POST['nombre'], FILTER_SANITIZE_STRING);
    mysqli_real_escape_string($conn, $nombre);
    $sql="DELETE FROM `categorias` WHERE `categorias`.`id` =  '$id' ";

      $resultInsert = mysqli_query($conn, $sql); 
      
   mysqli_close($conn);   
   
    unlink("../../$nombre.php");
    unlink("../../$nombre-2.php");

     unlink("../../assets/php/categorias/productos$nombre-2-log.php");
     unlink("../../assets/php/categorias/productos_nologueado-$nombre.php");
     
     unlink("../../assets/php/categorias/slider/slider-$nombre.php");

   
?>