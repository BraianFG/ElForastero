<?php 
    include '../../database.php';
    
    session_start();
    if (isset($_SESSION["id_admin"])){
       $id_admin=$_SESSION["id_admin"];
    }else{
        header('Location:../../ingresar');
    } 
//------------------------------------------------------------------------------//
    $id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
    mysqli_real_escape_string($conn , $id);
    
    $sql="DELETE FROM `productos` WHERE `productos`.`id` =  '$id' ";

      $resultInsert = mysqli_query($conn, $sql); 
      
  if($id == "" ){
         header("Location:../../");
   }else{
          header("Location:../../");
   }
   
      
   mysqli_close($conn);   
?>