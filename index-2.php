<?php
include 'database.php';
    session_set_cookie_params(60*60*24*18);
    session_start();
    if (isset($_SESSION["id"])){
     $id = $_SESSION["id"];
    header('Location: index2-2');

    }
    include 'top-cache.php'
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <!--head-->

   <?php include "assets/php/head.php" ?>
   <?php include "assets/js/script.php" ?>
  <?php include 'assets/css/style.php' ?>
            
        <!-- Hoja de estilo principal -->        
         <?php include 'assets/css/main.php' ?>
</head>

<body>

    <!-- Wrapper -->

        <!-- Header -->
        <?php include"assets/php/navbar3.php" ?>

        <!-- Menu -->
       <?php include"assets/php/menu.php"  ?>

                <!-- Main -->
                <?php include"assets/php/presentacion.php" ?>
                
                <!-- Selector -->
                 <?php include 'assets/php/slider-60.php' ?>
                 
                <!--Productos -->
                <?php include"assets/php/productos_nologueado-60.php" ?>

                <!-- Botones flotantes-->
                <?php include "assets/php/contacto.php" ?>
        
                 <!-- Footer -->
                <?php include"assets/php/footer.php" ?>
        
                
  
  <?php include "assets/js/Google-Analytics.php";
  include "bottom-cache.php";
  ?>
</body>
</html>