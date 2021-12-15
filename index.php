<?php
    include 'database.php';
    header('Content-Type: text/html; charset=UTF-8');
    session_start();
    if (isset($_SESSION["id"])){
        $id = $_SESSION["id"];
       header('Location: index2');
    }
?>
<html>
<head>
    <!--head-->
   <?php include "assets/php/head.php" ?>
</head>

<body class="is-preload">
        <!-- Header -->
        <?php include"assets/php/navbar3.php" ?>

        <!-- Menu -->
       <?php include"assets/php/menu.php"  ?>
       
        <div class="uk-container uk-container-large">
                <!-- Main -->
                <?php include"assets/php/presentacion.php" ?>
                
                <!--Productos -->
                <?php include"assets/php/productos_nologueado.php" ?>
        
                <!-- Botones flotantes-->
                <?php include"assets/php/contacto.php" ?>
        
                 <!-- Footer -->
                <?php include"assets/php/footer.php" ?>
        </div>     
        
</body>
</html>