<?php
session_set_cookie_params(60*60*24*18);
session_start();
include 'database.php';
$id = $_SESSION["id"];

    if (isset($_SESSION["id"])){
     $id = $_SESSION["id"];
    }else{
       header('Location: ingresar');
    }
?>

<html>
    <head>
         <?php include "assets/php/head.php" ?>
    </head>
<body>   
     <?php include "assets/php/navbar2.php" ?>  
       <?php include "assets/css/main.php" ?> 
     <div id="resultados" class="uk-container uk-container-xsmall wrapp"> 
     <div class="modal__header">Chatea con el vendedor</div>
      <div class="fondo">
          <?php $productosp1 = "SELECT * FROM `ventas` WHERE UsuarioID = '$id' " ;     
              $result3 = mysqli_query($conn,$productosp1);
            
            ?>
            
            
             <?php
               while($mostrar_productosp1 = mysqli_fetch_array($result3)){
             ?>   
                   <p class="mensaje__emisor"><?php echo $mostrar_productosp1['mensaje']?> </p>
                   <p class="mensaje__receptor"><?php echo $mostrar_productosp1['MensajeVendedor']?> </p>
            <?php
               }
            ?>
        </div> 
                <form action="assets/php/venta.php" method="post" class="enviar__mensaje">
                    <input type="text" name="mensaje" id="comprador"></input>
                    <button class="enviar__mensaje-boton" type="submit">Enviar <i class="fas fa-paper-plane"></i></button>
                </form> 
      </div> 
     </div> 
             <?php include "assets/js/Google-Analytics.php" ?>
   
</body>
</html>