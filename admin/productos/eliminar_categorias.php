<?php 
    include '../database.php';

   if($id == "" ){
         header("Location:../../");
   }else{
          header("Location:../../");
   }
   
//------------------------------------------------------------------------------//
    $id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
    mysqli_real_escape_string($conn , $id);
    
    mysqli_real_escape_string($conn , $sql);
    $sql="DELETE FROM `categorias` WHERE `categorias`.`id` =  '$id' ";

      $resultInsert = mysqli_query($conn, $sql); 
      
   mysqli_close($conexion);   
?>