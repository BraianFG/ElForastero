<?php
require '../database.php';
    session_start();
    if (isset($_SESSION["id_admin"])){
       $id_admin=$_SESSION["id_admin"];
    }else{
        header('Location:ingresar');
    }

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
            
 <?php include "slider/slider.php" ?>
    <!-------------------------------------------------------------------------->
<?php include "usuarios/usuarios_tabla.php" ?>    
    <!-------------------------------------------------------------------------->
<?php include "usuarios/invitado_tabla.php" ?>
      <!-------------------------------------------------------------------------->
<?php include "productos/carrito.php" ?>
  <!---------------------------------------------------------------------------->
  <?php include "productos/totalCarrito.php" ?>
  <!---------------------------------------------------------------------------->
 <?php include "productos/pedidos.php" ?> 
  <!---------------------------------------------------------------------------->
  <?php include "productos/totalPedido.php" ?>   
 <!---------------------------------------------------------------------------->
<?php include "usuarios/mensajes.php" ?>
    <!-------------------------------------------------------------------------->
<?php include "productos/productos_tabla.php" ?>  
    <!-------------------------------------------------------------------------->
<?php include "productos/categorias.php" ?> 
  <!---------------------------------------------------------------------------->
<?php include "archivo/subir_archivos.php" ?>
<!------------------------------------------------------------------------------>
<?php include "archivo/directorio_ver.php" ?>
<!------------------------------------------------------------------------------>
 <?php include "archivo/archivos.php" ?>  
 <!-----------------------------------------------------------------------------> 
<?php include "negocio/misitio.php" ?>
<!------------------------------------------------------.----------------------->
<?php include "negocio/estilos.php" ?>    
    <!-------------------------------------------------------------------------->
<?php include "negocio/negocio.php" ?>
    <!-------------------------------------------------------------------------->
<?php include "slider/up.php" ?>
</body>
</html>