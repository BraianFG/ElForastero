<?php      
   session_start();
       if(isset($_REQUEST["salir"])){
          unset($_SESSION["id"]);
          header('Location:ingresar');
      }
?>            