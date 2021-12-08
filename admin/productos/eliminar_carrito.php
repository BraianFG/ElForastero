<?php 
    include '../../database.php';
//------------------------------------------------------------------------------//
    $id = filter_var($_POST['usuarioID'], FILTER_SANITIZE_NUMBER_INT);
    mysqli_real_escape_string($conn , $id);
    $sql="DELETE FROM `carrito` WHERE `carrito`.`usuarioID` =  '$id' ";

      $resultInsert = mysqli_query($conn, $sql); 

   mysqli_close($conn);   
   
    if($id ==""){
    header("Location:../../");
   }else{
       header("Location:../../");
    }
?>