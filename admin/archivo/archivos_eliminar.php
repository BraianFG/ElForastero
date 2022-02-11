<?php
    session_start();
    if (isset($_SESSION["id_admin"])){
       $id_admin=$_SESSION["id_admin"];
    }else{
        header('Location:../../ingresar');
    } 
    
  $ImagenEliminar = filter_var($_POST['ImagenEliminar'], FILTER_SANITIZE_STRING);
  
 if (unlink("../../images/$ImagenEliminar")) {
  header('Location: ../');
    }
    else {
        header('Location: ../');
    }
?>