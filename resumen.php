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
         <?php include "assets/css/style.php" ?>
        <?php include "assets/js/Google-Analytics.php" ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js" integrity="sha512-n/4gHW3atM3QqRcbCn6ewmpxcLAHGaDjpEBu4xZd47N0W2oQ+6q7oc3PXstrJYXcbNU1OHdQ1T7pAP+gi5Yu8g==" crossorigin="anonymous" referrerpolicy="no-referrer" async></script>
       <?php include "assets/js/script.php" ?>
       <?php include "assets/css/main.php" ?>
    </head>
<body>   
     <?php include "assets/php/navbar2.php" ?>  
    <div id="resultados" class="uk-container uk-container-xsmall wrapp"> 
    <table class="uk-table uk-table-striped">
              <div class="modal__header">Resumen</caption>
         <thead>    
             <tr>
                <th>Artículo</th>
                <th>Cantidad</th>
                <th>Precio</th>
                <th>Eliminar</th>
            </tr>
        </thead>        
   <?php $productosp1 = "SELECT  `nombreProduc`,id,SUM(`cantidad`),SUM(`precio`)FROM `carrito` WHERE `usuarioID` = '$id'  GROUP BY `productoID`,`cantidad`" ;     
          $result3 = mysqli_query($conn,$productosp1);

           while($mostrar_productosp1 = mysqli_fetch_array($result3)){
         ?>    
         <tbody>
              <tr>
                   <td><?php echo $mostrar_productosp1['nombreProduc'] ?></td>
                   <td ><?php echo $mostrar_productosp1['SUM(`cantidad`)'] ?></td>
                   <td><?php echo '$ ',$mostrar_productosp1['SUM(`precio`)'] ?></td>
                   <td><a class="button primary eliminar" href="#eliminar__carrito_<?php echo $mostrar_productosp1['id'] ?>" uk-toggle><i class="fas fa-trash "></i> Eliminar</a></td>
              </tr>
            </tbody>
        
  <div id="eliminar__carrito_<?php echo $mostrar_productosp1['id'] ?>" uk-modal>
    <div class="uk-modal-dialog">
     <div class="uk-modal-body">      
    <h3 class="uk-text-center">¿Desea eliminar este pedido?</h3>
      <button class="uk-modal-close-default" type="button" uk-close></button>
      <div class="eliminar">
            <a class="button primary eliminar__si"onclick="eliminar_carrito((productoID ='<?php echo  $mostrar_productosp1['id'] ?>'))">Si <i class="fas fa-check"></i></a>
            <a class="button primary  uk-modal-close">No <i class="fas fa-times"></i></a>
     </div>     
      </div>    
    </div>
</div>
           
<script>
    function eliminar_carrito(id){
       $.post( "eliminar_carrito.php", { id : id,UsuarioID:<?php echo $_SESSION["id"]?>});
       $("#resultados").load("resumen.php #resultados");
          alertify.notify('Producto eliminado de la lista','success');
       $("#total").load("resumen.php #total");
    } 
</script>

  <?php
 }
?>  
  
    </table>
    <?php 
         $negocio = "SELECT * FROM totalCarrito WHERE UsuarioID = '$id'" ;     
         $resultados = mysqli_query($conn,$negocio);          
            while($negocio= mysqli_fetch_array($resultados)){
    ?>      
     <div class="total">Total: $ <span id="total"><?php echo $negocio['total']?></span></div> 
    <?php
      }
    ?>   
    
 </div>    
</div>    

     </div>  
        <div class="modal__botones carrito uk-container uk-container-xsmall ">
            <a href="/index" class="button__modal volver">
                 <i class="fas fa-undo"></i>Volver</a>
             <a href="#cancelar__pedido" uk-toggle class="button__modal confirmar">
                 <i class="fas fa-check"></i>Comprar</a>      
                 
          <!---  <div class="comprar"></div> -->
                </ul>
                
        </div>
   
    <div id="cancelar__pedido" uk-modal>
    <div class="uk-modal-dialog">
     <div class="uk-modal-body">      
    <h3 class="uk-text-center">¿Desea confirmar este pedido?</h3>
      <button class="uk-modal-close-default" type="button" uk-close></button>
      <div class="eliminar">
            <a class="button primary eliminar__si" href="comprar" onclick="confirmar()">Si <i class="fas fa-check"></i></a>
            <a class="button primary  uk-modal-close">No <i class="fas fa-times"></i></a>
     </div>     
      </div>    
    </div>
</div>

<?php include 'assets/php/contacto.php'?>
<script>
    function confirmar(){
       $.post( "confirmar.php", { UsuarioID:<?php echo $_SESSION["id"]?>});
       $.post( "total.php", { UsuarioID:<?php echo $_SESSION["id"]?>});
    }
</script>
   
     <?php include "assets/js/productos.php" ?>
     <?php include "assets/php/mensaje.php" ?>
     
     <!-- footer -->
      <div class="uk-container uk-container-xsmall"> 
         <?php include "assets/php/footer.php" ?>
      </div> 
</body>
</html>