<?php
   require 'database.php';
    session_start();
    if (isset($_SESSION["id"])){
      $id = $_SESSION["id"];
     header('Location: Calzado2');
    }
?>
<html>
<head>
   <?php include "assets/php/head.php" ?>
    <?php include "assets/css/main.php" ?>
    <?php include "assets/css/style.php" ?>
    <?php include "assets/js/Google-Analytics.php" ?>
</head>
<body>
        <!-- Header -->
        <?php include "assets/php/navbar3.php" ?>

        <!-- Menu -->
       <?php include "assets/php/menu.php"  ?>
       
        <div class="uk-container">
                <!-- Main -->
                <?php include "assets/php/presentacion.php" ?>
                
                <!--Selector-->
                <?php include 'assets/php/categorias/slider/slider-calzado.php' ?>

                <!--Productos -->
                <?php include "assets/php/categorias/productos_nologueado-Calzado.php" ?>
              
                <!-- Botones flotantes-->
                <?php include "assets/php/contacto.php" ?>
        
         <!-- Footer -->
              <?php include "assets/php/footer.php" ?>
        </div>
        
    <?php include "assets/js/script.php" ?>
   <?php include "assets/js/productos.php" ?>
   <?php include "visitas.php" ?>
</body>
</html>