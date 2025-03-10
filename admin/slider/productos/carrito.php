
<div id="carrito" class="uk-container  uk-container-large wrap">
  <header class="caption"><i class="fas fa-shopping-cart"></i>carrito de usuarios</header>
    <div class="uk-overflow-auto">     
    <table class="uk-table uk-table-striped ">
         <thead>    
             <tr>
                 <th>N°</th>
                 <th>Usuario</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Artículo</th>
                <th>Cantidad</th>
                <th>Precio</th>
                <th>Fecha</th>
                <th>Hora</th>
                <th>Total</th>
                <th>Eliminar</th>
            </tr>
        </thead>        
   <?php $productosp1 = "SELECT  `id`, `carrito`.`UsuarioID`,`carrito`.`nombre`, `carrito`.`apellido`, `nombreProduc`, SUM(`cantidad`), SUM(`precio`), `carrito`.`fecha`, `carrito`.`hora` , `totalCarrito`.`total` FROM `carrito` INNER JOIN `totalCarrito` ON `carrito`.`UsuarioID` = `totalCarrito`.`UsuarioID` GROUP BY `precio`,`cantidad`;" ;     
          $result3 = mysqli_query($conn,$productosp1);
        
        ?>
        
        
         <?php
           while($mostrar_productosp1 = mysqli_fetch_array($result3)){
         ?>    
         <tbody>
              <tr>
                  <td><?php echo $mostrar_productosp1['id'] ?></td>  
                  <td><?php echo $mostrar_productosp1['UsuarioID'] ?></td>
                   <td><?php echo $mostrar_productosp1['nombre'] ?></td>
                   <td><?php echo $mostrar_productosp1['apellido'] ?></td>
                   <td><?php echo $mostrar_productosp1['nombreProduc'] ?></td>
                   <td><?php echo $mostrar_productosp1['SUM(`cantidad`)'] ?></td>
                   <td><?php echo '$ ' ,$mostrar_productosp1['SUM(`precio`)'] ?></td>
                   <td><?php echo $mostrar_productosp1['fecha'] ?></td>
                   <td><?php echo $mostrar_productosp1['hora'] ?></td>
                   <td><?php echo '$ ',$mostrar_productosp1['total'] ?></td>
                   <td><a class="button primary" href="#eliminar__carrito_<?php echo $mostrar_productosp1['id'] ?>" uk-toggle><i class="fas fa-trash "></i> Eliminar</a></td>  
              </tr>
            </tbody>
            
  <div id="eliminar__carrito_<?php echo $mostrar_productosp1['id'] ?>" uk-modal>
    <div class="uk-modal-dialog">
     <div class="uk-modal-body">      
    <h3 class="uk-text-center">¿Desea eliminar el artículo , <?php echo $mostrar_productosp1['nombreProduc'] ?> del carrito de <?php echo $mostrar_productosp1['nombre'] ,' ',$mostrar_productosp1['apellido'] ?> ?</h3>
      <button class="uk-modal-close-default" type="button" uk-close></button>
      <div class="eliminar">
            <a class="button primary eliminar__si" onclick="eliminar_carrito((id =<?php echo  $mostrar_productosp1['id'] ?>))">Si <i class="fas fa-check"></i></a>
            <a class="button primary  uk-modal-close">No <i class="fas fa-times"></i></a>
     </div>     
      </div>    
    </div>
</div>
<script>
    function eliminar_carrito(id){
       $.post( "productos/eliminar_carrito.php", { id : id,UsuarioID:<?php echo $mostrar_productosp1['UsuarioID'] ?>} );
        alertify.notify('Artículo eliminado','success',8);

    }
</script>

  <?php
 }
?>  
            </table>
 </div>    
</div>    
           
