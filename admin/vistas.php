<?php
require '../database.php';
    session_start();
    if (isset($_SESSION["id_admin"])){
       $id_admin=$_SESSION["id_admin"];
    }else{
        header('Location:ingresar');
    }
include '../top-cache.php';
?>
<html lang="ES">

<head>
  <?php include "assets/php/head.php" ?>
   <?php include "assets/js/script.php" ?>
   <?php include "assets/css/style.php" ?>
   <?php include "assets/css/main.php" ?>
   
</head>
<body>
   <!-- Header -->  
   
 <?php include "assets/php/navbar2.php" ?>
<?php include "visitas/visitas.php" ?>

</body>
</html>
<?php include "../bottom-cache.php" ?>;