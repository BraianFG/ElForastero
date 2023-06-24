<?php
include 'database.php';
    session_set_cookie_params(60*60*24*18);
    session_start();
    if (isset($_SESSION["id"])){
     $id = $_SESSION["id"];
    header('Location: index2');

    }
include 'top-cache.php'
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <!--head-->
   <?php
   include "assets/php/head.php";
    include 'assets/css/style.php';
    //Hoja de estilo principal
    include 'assets/css/main.php';
   ?>
</head>

<body>
        <!-- Header -->
        <?php 
        include"assets/php/navbar3.php" ?>

        <!-- Menu -->
       <?php include"assets/php/menu.php"  ?>
       <div class="uk-container">
                <!-- Main -->
                <?php include"assets/php/presentacion.php" ?>
                
                <!-- Selector -->
                 <?php include 'assets/php/slider.php' ?>
                 
                <!--Productos -->
                <?php include"assets/php/productos_nologueado.php" ?>
                <!-- Botones flotantes-->
                <?php include "assets/php/contacto.php" ?>
        
                 <!-- Footer -->
                <?php include"assets/php/footer.php" ?>
        </div>        

</body>
</html>

  <?php 
  include "bottom-cache.php";
  include "assets/js/script.php" ;
  include "visitas.php";?>