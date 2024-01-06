<?php require "database.php"; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <!--head-->
   <?php include "assets/php/head.php" ?>
   <?php include "assets/js/script.php" ?>
  <?php include 'assets/css/style.php' ?>
</head>

<body>

    <!-- Wrapper -->

        <!-- Header -->
        <?php include"assets/php/navbar2.php" ?>

       <div class="uk-container">
                <!-- Main -->
                <?php include"assets/php/presentacion.php" ?>
                
                <!--Productos -->
                  <?php
          session_start();
          $buscar = $_GET['buscar'];
          $busqueda = $_SESSION[$buscar];
          if(isset($_GET['buscar'])){
        ?>
        <ul class="uk-container uk-container-xlarge"><li class="productos slider"id="slider">
        <?php
        $productosB = "SELECT * FROM productos WHERE `nombre` LIKE '%$buscar%'";
        $resultp1 = mysqli_query($conn, $productosB);
        while ($productosp1 = mysqli_fetch_array($resultp1)) {
        
        ?>
      <div class="uk-card uk-card-default uk-width-1-5@m " data-id="<?php echo $productosp1['0'] ?>"  id="<?php echo $productosp1['id'] ?>" >
    <div class="uk-card-header">
        <div class="uk-grid-small uk-flex-middle" uk-grid>
            <div class="uk-width-auto">
                <p><?php echo $productosp1['nombre'] ?></p>
            </div>
        </div>
    </div>
        <div class="uk-card-media-top">
         <a href="#<?php echo 'abc__',$productosp1['id'] ,$productosp1['modal1'] ?>" title="ver imagen" uk-toggle class="image"> <img class="lazyload card-img-top" src="images/blanco.webp"data-src="https://img.gs/jhcplzwzdm/3x,90x90,quality=high/http://tiendaelforastero.com.ar/images/<?php echo $productosp1['imagen'] ?>" alt="<?php echo  $productosp1['nombre'] ?>" class="card-img-top" id="imagen_<?php echo $productosp1['id'] ?>"  width="90" heigh="90" onerror="this.src='images/blanco.webp';"></a>
    </div>
                <?php include"assets/php/productos/popup.php" ?>
    <div class="uk-card-body">
    <div class="uk-flex-between uk-flex-inline" >
                <p data-precio="<?php echo $productosp1['precio'] ?>"><?php echo '$',$productosp1['precio'] ?></p>

    </div>   
        <p><?php echo $productosp1['descripcion'] ?></p>
     </div>     
</div>

        <?php
         }
        ?>
      </ul>
        <?php
        }?>
          
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

