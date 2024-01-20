<?php
session_set_cookie_params(60*60*24*18);
session_start();
require 'assets/php/database.php';
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
       <?php include "assets/js/script.php" ?>
       <?php include "assets/css/main.php" ?>
    </head>
   <body>
     <?php include "assets/php/navbar2.php" ?>  
      <ul>
    <li id="item-1">
    <div class="uk-container uk-container-xsmall wrapp"> 
    <div id="resultados" class="uk-overflow-auto uk-container">
    <table class="uk-table">
              <div class="modal__header">Resumen</caption>
         <thead>    
             <tr>
                <th>Artículo</th>
                <th>Cantidad</th>
                <th>Precio</th>
                <th>Imagen</th>
                <th>Eliminar</th>
            </tr>
        </thead>        
   <?php $productosp1 = "SELECT  `nombreProduc`,`imagen`,id,SUM(`cantidad`),SUM(`precio`)FROM `carrito` WHERE `usuarioID` = '$id'  GROUP BY `productoID`,`cantidad`" ;     
          $result3 = mysqli_query($conn,$productosp1);
           while($mostrar_productosp1 = mysqli_fetch_array($result3)){
         ?> 
         <tbody>
              <tr>
                   <td><?php echo $mostrar_productosp1['nombreProduc'] ?></td>
                   <td ><?php echo $mostrar_productosp1['SUM(`cantidad`)'] ?></td>
                   <td><?php echo '$ ',$mostrar_productosp1['SUM(`precio`)'] ?></td>
                   <td><img src="images/<?php echo $mostrar_productosp1['imagen'] ?>" alt="miniatura" width="50" height="50"/></td>
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
        <?php
           }
         ?>
     <?php $productosp1 = "SELECT  `nombreProduc`,`imagen`,id,SUM(`cantidad`),SUM(`precio`)FROM `carrito` WHERE `usuarioID` = '$id'  GROUP BY `productoID`,`cantidad`" ;     
          $result3 = mysqli_query($conn,$productosp1);
           while($mostrar_productosp1 = mysqli_fetch_array($result3)){
         ?>             
<script>
    function eliminar_carrito(productoID){
       $.post( "assets/php/eliminar_carrito.php", { id :productoID ,UsuarioID:<?php echo $_SESSION["id"]?>});
       $("#resultados").load("resumen.php #resultados");
          alertify.notify('Producto eliminado de la lista','success');
        $("#total").load("resumen.php #total");  
        const total =  document.querySelector("#total").innerText;
          if(total === "0"){
                        alertify.notify('Producto eliminado de la lista','success');
             }
         <?php $productosp1 = "SELECT * FROM totalCarrito WHERE UsuarioID = '$id'";    
          $result3 = mysqli_query($conn,$productosp1);
           while($mostrar_productosp1 = mysqli_fetch_array($result3)){
               
               if($mostrar_productosp1['total'] = 0){
         ?>  
                       document.querySelector("#paginac").style="display:none";

         <?php
               }
             }
         ?>
    } 
</script>

<?php
 }
?>  
  
    </table>
</div>    
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
        <div class="modal__botones carrito uk-container uk-container-xsmall" >
            <a href="/" class="button__modal volver ">
                 <i class="fas fa-undo"></i>Volver</a>
     <?php $productosp1 = "SELECT * FROM totalCarrito WHERE UsuarioID = '$id'";    
          $result3 = mysqli_query($conn,$productosp1);
           while($mostrar_productosp1 = mysqli_fetch_array($result3)){
               
               if($mostrar_productosp1['total'] > 0){
         ?>              
             <a href="#cancelar__pedido"  uk-toggle class="button__modal confirmar" id="paginac">
                 <i class="fas fa-check"></i>Comprar</a>      
         <?php
               }
           } 
        
        ?>         
          <!---  <div class="comprar"></div> -->
                </ul>
 </div>               
        </div>
    <div id="cancelar__pedido" uk-modal>
    <div class="uk-modal-dialog">
     <div class="uk-modal-body">      
    <h3 class="uk-text-center">¿Desea confirmar este pedido?</h3>
      <button class="uk-modal-close-default" type="button" uk-close></button>
      <div class="eliminar">
            <a class="button primary eliminar__si" onclick="confirmar()">Si <i class="fas fa-check"></i></a>
            <a class="button primary  uk-modal-close">No <i class="fas fa-times"></i></a>
     </div>     
      </div>    
    </div>
    <p id="ver"></p>
<script>
  if(total === "0"){
              alertify.notify('Agregue producto al carrito','error');
     }
</script>
<?php include 'assets/php/contacto.php'?>
<script>
    function confirmar(){
       $.post( "assets/php/confirmar.php", { UsuarioID:<?php echo $_SESSION["id"]?>});
       $.post( "assets/php/total.php", { UsuarioID:<?php echo $_SESSION["id"]?>});
        document.querySelector("#item-2").style="display:block";
         document.querySelector("#item-1").style="display:none";
         document.querySelector("#item-3").style="display:none";
    }
</script>
</div> 
        
    </li>
    <li id="item-2">
          <div  class="uk-container uk-container-xsmall wrapp"> 
    <table class="uk-table uk-table-striped">
              <div class="modal__header">Pedidos</div>
         <thead>    
             <tr>
                <th>Artículo</th>
                <th>Cantidad</th>
                <th>Precio</th>
                <th>Imagen</th>
            </tr>
        </thead>   
   <?php $productosp1 = "SELECT `imagen`, SUM(`cantidad`), SUM(`precio`),`nombreProduc` ,`prodcutoID` FROM `pedidos` WHERE UsuarioID = '$id' GROUP BY `cantidad`,`prodcutoID`; ";     
          $result3 = mysqli_query($conn,$productosp1);

           while($mostrar_productosp1 = mysqli_fetch_array($result3)){
         ?>    
         <tbody>
              <tr>
                   <td><?php echo $mostrar_productosp1['nombreProduc'] ?></td>
                   <td ><?php echo $mostrar_productosp1['SUM(`cantidad`)'] ?></td>
                   <td><?php echo '$ ',$mostrar_productosp1['SUM(`precio`)'] ?></td>
                   <td><img src="images/<?php echo $mostrar_productosp1['imagen'] ?>" alt="miniatura" width="50" height="50"/></td>
              </tr>
            </tbody>


  <?php
 }
?>  
  
    </table>
    <?php 
         $negocio = "SELECT * FROM totalPedido WHERE UsuarioID = '$id'" ;     
         $resultados = mysqli_query($conn,$negocio);          
            while($negocio= mysqli_fetch_array($resultados)){
    ?>      
     <div class="total">Total: $ <span id="total2"><?php echo $negocio['total'] ?></span></div> 
    <?php
      }
    ?>      
  
        <div class="modal__botones" style="margin-top:-5em;margin-bottom:5em" >
            <a href="/" class="button__modal borrar borrar__carrito"><i class="fas fa-undo"></i>Volver</a>
            <a  onclick="tocar3()" uk-toggle class="button__modal agregar agregar__carrito"><i class="fa-solid fa-list-ul"></i> Formas de pago</a>
        </div>
     </div>  
</div>
        
    </li>
    <li id="item-3">
        <div class="uk-container uk-container-large wrapp"> 
       <section class="uk-text-center">
          <h2 class="titulo">¿Cómo desea pagar?</h3>
          <p>Seleccione alguna modalidad de pago</p>
       </section>
        
     <div class="uk-child-width-1-3@m uk-grid-small uk-grid-match" uk-grid>
        <div>
            <div class="uk-card uk-card-default uk-card-body">
                <h3 class="uk-card-title titulo">Pagar con mercado Pago</h3>
                <p>Pague a tráves de link de pago,ideal para compras con tarjeta o distancia.</p>
                <a  class="button primary" href="comprar1">Elegír esta opción <i class="fa-solid fa-circle-arrow-right"></i></a>
            </div>
        </div>
        <div>
            <div class="uk-card uk-card-default uk-card-body">
                <h3 class="uk-card-title titulo">Pagar con transferencia</h3>
                <p>Pague con transferencia desde su cuenta bancaria o billetera virtual de confianza.</p>
                <a class="button primary" href="comprar2">Elegír esta opción <i class="fa-solid fa-circle-arrow-right"></i></a>
            </div>
        </div>
        <div>
            <div class="uk-card uk-card-default uk-card-body">
                <h3 class="uk-card-title titulo">Acordar con el vendedor</h3>
                <p>Acuerde con el vendedor de como,donde y cuando desea pagar su pedido.</p>
                 <a class="button primary" href="comprar3">Elegír esta opción <i class="fa-solid fa-circle-arrow-right"></i></a>
            </div>
        </div>
    </div>
        
    </li>
</ul>
		
<script defer>
     document.querySelector("#item-2").style="display:none";
     document.querySelector("#item-3").style="display:none";
     
      function tocar1(){
         document.querySelector("#item-2").style="display:none";
         document.querySelector("#item-1").style="display:block";
         document.querySelector("#item-3").style="display:none";
     }
     
     function tocar2(){
         document.querySelector("#item-2").style="display:block";
         document.querySelector("#item-1").style="display:none";
         document.querySelector("#item-3").style="display:none";
     }
     
    function tocar3(){
         document.querySelector("#item-2").style="display:none";
         document.querySelector("#item-1").style="display:none";
         document.querySelector("#item-3").style="display:block";
     }
</script>

     <!-- footer -->
          <?php 
          session_start();
 
          $productosp1 = "SELECT * FROM totalCarrito WHERE UsuarioID = '$id'";    
          $result3 = mysqli_query($conn,$productosp1);
           while($mostrar_productosp1 = mysqli_fetch_array($result3)){
               
               if($mostrar_productosp1['total'] > 0){
         ?>              
         	<ul class="paginacion">
				<li><a class="pagination__item" href="#item-1" class="uk-active" onclick="tocar1()">1</a></li>
				<li><a class="pagination__item" href="#item-2"  onclick="tocar2()">2</a></li>
				<li><a class="pagination__item" href="#item-3"  onclick="tocar3()">3</a></li>
			</ul>
		<?php
               }
               }
        ?>       
      <div class="uk-container uk-container-xsmall wrapp"> 
         <?php include "assets/php/footer.php" ?>

      </div> 
      
     <div id="contacto" uk-modal>
     <div class="uk-modal-dialog">
         <button class="uk-modal-close-default" type="button" uk-close></button> 
        <div class="modal__header">Medios de contacto</div>
     </div>
     </div>

         
<?php include 'assets/php/contacto.php'?>
   </body>
</html>
