<?php
    require "assets/php/database.php";
    session_set_cookie_params(60*60*24*18);
    session_start();
    if (isset($_SESSION["id"])){
     $id = $_SESSION["id"];

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
      include "assets/js/script.php" ;
   ?>
</head>

<body>
        <!-- Header -->
      <?php 
      
         if(!isset($_SESSION['id'])){
            include "assets/php/visitas.php";  
         }
        include"assets/php/navbar3.php";
        ?>

        <!-- Menu -->
       <article class="uk-container">
                <!-- Main -->
                <?php include"assets/php/presentacion.php" ?>
                
                <!-- Selector -->
                 <?php include 'assets/php/slider.php' ?>
                 
                <!--Productos -->
                <?php include "assets/php/productos.php"; 
                 ?>
               
                <!-- Botones flotantes-->
                <?php include "assets/php/contacto.php" ?>
        
                 <!-- Footer -->
                <?php include"assets/php/footer.php" ?>
        </article>        

</body>
</html>

  <?php 
  include "bottom-cache.php";
  include "assets/php/cargar.php";
  ?>
  