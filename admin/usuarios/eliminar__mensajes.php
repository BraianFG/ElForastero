<?php 
    include '../../database.php';

//------------------------------------------------------------------------------//
    $UsuarioID= filter_var($_POST['UsuarioID'], FILTER_SANITIZE_NUMBER_INT);
    mysqli_real_escape_string($conn , $UsuarioID);
    
    $sql="DELETE FROM `ventas` WHERE `ventas`.`UsuarioID` = '$UsuarioID' ";
      $resultInsert = mysqli_query($conn, $sql); 
      mysqli_close($conn);
      
   if($UsuarioID ==""){
    header("Location:../../");
   }else{
       header("Location:../../");
    }
   
?>