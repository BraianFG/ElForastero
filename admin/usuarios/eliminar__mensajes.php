<?php 
    require '../../database.php';
      
   if($UsuarioID ==""){
    header("Location:../");
   }else{
       header("Location:../");
    }
    
//------------------------------------------------------------------------------//
    $id=filter_var($_POST['UsuarioID'], FILTER_SANITIZE_NUMBER_INT);
    mysqli_real_escape_string($conn , $id);
    
    $sql="DELETE FROM `mensajes` WHERE `mensajes`.`UsuarioID` = '$id'";
    
      $resultInsert = mysqli_query($conn, $sql); 
      mysqli_close($conn);
   
?>