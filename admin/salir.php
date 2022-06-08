
<?php

 session_start();
if(isset($_SESSION['id_admin'])){
    
  if(isset($_REQUEST["salir"])){
       unset($_SESSION["id_admin"]);
       header('Location:ingresar');
    }
}

?>
