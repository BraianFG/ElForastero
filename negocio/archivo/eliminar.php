<?php
    session_start();
    if (isset($_SESSION["id_admin"])){
       $id_admin=$_SESSION["id_admin"];
    }else{
        header('Location:../../ingresar');
    } 
    
  $imagen = filter_var($_POST['imagen'], FILTER_SANITIZE_STRING);
  
   unlink("../../../images/$imagen");
?>