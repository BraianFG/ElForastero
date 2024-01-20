<?php 
session_start();
$id = $_SESSION['id'];
require "assets/php/database.php"; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <!--head-->
<?php
  $negocio = 'SELECT * FROM negocio_misitio' ;     
  $resultados = mysqli_query($conn,$negocio);          
        while($negocio= mysqli_fetch_array($resultados)){
     ?> 
 <title><?php echo $negocio['title'] ?></title>
    <!--Repositive -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5">
    
    <!--Codificación -->
    <meta charset="utf-8" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    
    
   <!--Favicón -->
    <link rel="shortcut icon" href="/images/<?php echo $negocio['favicon']?>" />
    
  <!-- Manifiesto -->    
   <link rel="manifest" href="manifest.json">
 <?php
        }
 ?>       
 
   
<?php
  $buscar = mysqli_real_escape_string($conn, filter_var($_GET['buscar'], FILTER_SANITIZE_STRING));
  $negocio = "SELECT `productos`.`id`, `nombre`, `descripcion`, `cantidad`, `precio`, `categoria`, `imagen`, `imagen01`, `imagen02`, `modal1`, `fecha1`, `hora1`, `fecha2`, `hora2`,`reacciones`.`likes` FROM `productos` INNER JOIN `reacciones` ON `productos`.`id` = `reacciones`.`idproducto` WHERE `nombre` LIKE '%$buscar%'" ;     
  $resultados = mysqli_query($conn,$negocio);          
        while($negocio= mysqli_fetch_array($resultados)){
     ?>     
   <!-- Descripcion -->
    <meta property="og:title" content="<?php echo $negocio['nombre'] .' ' .' $' .$negocio['precio']?>">
    <meta property="og:image" content="https://img.gs/jhcplzwzdm/3x,500x500,quality=high/http://tiendaelforastero.com.ar/images/<?php echo $negocio['imagen']?>">
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="1452" />
    <meta name="description" property="og:description" content="<?php echo $negocio['descripcion']?>">
    <meta property="og:site_name" content="https://tiendaelforastero.com.ar/busqueda.php?buscar='<?php echo $buscar ?>'" /> 
    <meta property="og:type" content="article">

    <?php
        }
   ?>

<?php
  $negocio = 'SELECT * FROM estilos' ;     
  $resultados = mysqli_query($conn,$negocio); 
     while($negocio= mysqli_fetch_array($resultados)){
  ?>      
     <meta name="theme-color" content="<?php echo $negocio['color2'] ?>" />
     <meta name="msapplication-navbutton-color" content="<?php echo $negocio['color2'] ?>"> 
    <meta name="apple-mobile-web-app-status-bar-style" content="<?php echo $negocio['color2'] ?>">
    
    
          
      <?php
        }
     ?>
 

 
   <?php include "assets/js/script.php" ?>
  <?php include 'assets/css/style.php' ?>
</head>

<body>

    <!-- Wrapper -->

        <!-- Header -->
        <?php 
         if(!isset($_SESSION['id'])){
             include "visitas.php";
         }
          include"assets/php/navbar3.php" ;
        ?>
      
       <div class="uk-container">
                <!-- Main -->
                <?php include"assets/php/presentacion.php" ?>
                      <?php include "assets/php/slider.php" ?>
                
                <!--Productos -->
        <?php
          $buscar = mysqli_real_escape_string($conn, filter_var($_GET['buscar'], FILTER_SANITIZE_STRING));
          $numero = mysqli_real_escape_string($conn, filter_var($_POST['numero'], FILTER_SANITIZE_NUMBER_INT));
          if(!empty($buscar)){
        ?>
        <ul class="uk-container uk-container-xlarge"><li class="productos slider"id="slider">
        <?php
        $productosB = "SELECT `productos`.`id`, `nombre`, `descripcion`, `cantidad`, `precio`, `categoria`, `imagen`, `imagen01`, `imagen02`, `modal1`, `fecha1`, `hora1`, `fecha2`, `hora2`,`reacciones`.`likes` FROM `productos` INNER JOIN `reacciones` ON `productos`.`id` = `reacciones`.`idproducto` WHERE `nombre` LIKE '%$buscar%' LIMIT 20";
        $resultp1 = mysqli_query($conn, $productosB);
        while ($productosp1 = mysqli_fetch_array($resultp1)) {

include "assets/php/productos/producto.php" ;

     include "assets/php/productos/popup.php";

     include "assets/php/productos/reaccionar.php";
        }
        ?>
        
              </li>
        </ul>        
<div id="resultado3"></div>
<label class="datos" id="ver">Ver más</label>
     <select id="enviarB" name="numero" onchange="ver()" class="uk-select  uk-input uk-form-width-medium uk-form-small">
        <option value="25">20</option>
        <option value="50">50</option>
        <option value="25">75</option>
        <option value="100">100</option>
        <option value="200">200</option>
        <option value="300">300</option>
        <option value="500">500</option>
        <option value="750">750</option>
        <option value="100">1000</option>
    </select>

<script>
   function ver() {
        // Obtén el valor seleccionado
        var numero = $('#enviarB').val();
        // Realiza la petición Ajax
        $.post("assets/php/productos-slider/slider-buscar.php", { numero: numero , buscar:"<?php echo $buscar ?>"}, function(response) {
            // Maneja la respuesta del servidor
            $('#resultado3').html(response);
        });
                  
            document.querySelector("#enviarB").style="display:none";  
            document.querySelector("#ver").style="display:none";  
    }
    </script>
        <?php
          }
        ?>  
                <!-- Botones flotantes-->
                <?php include "assets/php/contacto.php" ?>
        
                 <!-- Footer -->
                <?php include"assets/php/footer.php" ?>
         </div>       

          
        <!-- Hoja de estilo principal -->        
         <?php include 'assets/css/main.php' ?>

         <!--style --> 
  
  <?php  include 'bottom-cache.php' ?>
  
<?php   include 'assets/php/cargar.php' ?>
        
</body>
</html>

