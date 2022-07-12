<?php 
   session_start();
   unset($_SESSION['id']);
   if(!isset($_SESSION['id'])){
     echo '<script>location.href="../../ingresar";</script>'; 
   }
 
?>   