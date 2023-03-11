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
   
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/solid.min.js" integrity="sha512-C92U8X5fKxCN7C6A/AttDsqXQiB7gxwvg/9JCxcqR6KV+F0nvMBwL4wuQc+PwCfQGfazIe7Cm5g0VaHaoZ/BOQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>
   <!-- Header -->  
   
 <?php include "assets/php/navbar2.php" ?>
            
 <?php include "slider/slider.php" ?>
    <!-------------------------------------------------------------------------->
<?php include "usuarios/usuarios_tabla.php" ?>    
    <!-------------------------------------------------------------------------->
<?php include "usuarios/usuarios_eliminados-tabla.php" ?>
    <!-------------------------------------------------------------------------->
<?php include "usuarios/invitado_tabla.php" ?>
      <!-------------------------------------------------------------------------->
<?php include "productos/carrito.php" ?>
  <!---------------------------------------------------------------------------->
 <?php include "productos/pedidos.php" ?> 
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
 <!----------------------------------------------------------------------------->
<?php include "negocio/misitio.php" ?>
<!------------------------------------------------------.----------------------->
<?php include "negocio/estilos.php" ?>    
    <!-------------------------------------------------------------------------->
<?php include "negocio/negocio.php" ?>
    <!-------------------------------------------------------------------------->
 <?php include "transferencia/transferencia.php" ?>
<!------------------------------------------------------------------------------>
<?php include "MercadoPago/MP_tabla.php" ?>
<!------------------------------------------------------------------------------>
<?php include "slider/up.php" ?>
<!------------------------------------------------------------------------------->
<?php include "localidad/localidad_tabla.php" ?>

</body>
</html>
<?php include "../bottom-cache.php" ?>;