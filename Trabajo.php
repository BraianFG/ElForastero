<?php
   require 'database.php';
    session_start();
    if (isset($_SESSION["id"])){
      $id = $_SESSION["id"];
     header('Location: Trabajo2');
    }
?>
<html>
<head>
   <?php include "assets/php/head.php" ?>
    <?php include "assets/css/main.php" ?>
    <?php include "assets/css/style.php" ?>
    <?php include "assets/js/Google-Analytics.php" ?>
    <?php include "assets/js/script.php" ?>
</head>
<body>
        <!-- Header -->
        <?php include"assets/php/navbar3.php" ?>

        <!-- Menu -->
       <?php include"assets/php/menu.php"  ?>
       
        <div class="uk-container uk-container-large">
                <!-- Main -->
                <?php include"assets/php/presentacion.php" ?>
                
                <?php include 'assets/php/slider-medias.php' ?>

                <!--Productos -->
                <?php include"assets/php/categorias/productos_nologueado-Trabajo.php" ?>
              
                <!-- Botones flotantes-->
                <?php include"assets/php/contacto.php" ?>
        
         <!-- Footer -->
              <?php include"assets/php/footer.php" ?>
        </div>

</body>
</html>