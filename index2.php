<?php
include 'database.php';
    session_set_cookie_params(60*60*24*18);
    session_start();
    if (isset($_SESSION["id"])){
     $id = $_SESSION["id"];
    }else{
       header('Location: ingresar');
    }
?>

<html>
<head>
    <!--head-->
   <?php include "assets/php/head.php" ?>
            <?php include 'assets/css/main.php' ?>
</head>

<body class="is-preload">

    <!-- Wrapper -->

        <!-- Header -->
        <?php include"assets/php/navbar.php" ?>

        <!-- Menu -->
       <?php include"assets/php/menu2.php"  ?>
       
        <div class="uk-container uk-container-large">
                <!-- Main -->
                <?php include"assets/php/presentacion.php" ?>
 
                <!--Productos -->
                <?php include"assets/php/productos.php" ?>
        
                <!-- Botones flotantes-->
                <?php include"assets/php/contacto.php" ?>
        
                 <!-- Footer -->
                <?php include"assets/php/footer.php" ?>
        </div> 
        
         <!--style --> 

   <?php include 'assets/js/productos.php' ?>
  <?php include "assets/js/Google-Analytics.php" ?>
</body>
</html>
