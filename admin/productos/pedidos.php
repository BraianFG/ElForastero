
<div id="pedidos" class="uk-container  uk-container-large">
<div  class="caption"><i class="fas fa-tags"></i>Pedidos</div>     
    <div class="uk-overflow-auto">
    <table class="uk-table uk-table-striped ">
         <thead>    
             <tr>
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
  <?php $productosp1 = "SELECT `id`, `pedidos`.`UsuarioID`,`pedidos`.`nombre`, `pedidos`.`apellido`, `nombreProduc`, SUM(`cantidad`), SUM(`precio`), `pedidos`.`fecha`, `pedidos`.`hora` , `totalPedido`.`total` FROM `pedidos` INNER JOIN `totalPedido` ON `pedidos`.`UsuarioID` = `totalPedido`.`UsuarioID` GROUP BY `precio`,`cantidad`;" ;     
          $result3 = mysqli_query($conn,$productosp1);
        
        ?>
        
        
         <?php
           while($mostrar_productosp1 = mysqli_fetch_array($result3)){
         ?>    
         <tbody>
              <tr>
                   <td><?php echo $mostrar_productosp1['nombre'] ?></td>
                   <td><?php echo $mostrar_productosp1['apellido'] ?></td>
                   <td><?php echo $mostrar_productosp1['nombreProduc'] ?></td>
                   <td><?php echo $mostrar_productosp1['SUM(`cantidad`)'] ?></td>
                   <td><?php echo '$ ' ,$mostrar_productosp1['SUM(`precio`)'] ?></td>
                   <td><?php echo $mostrar_productosp1['fecha'] ?></td>
                   <td><?php echo $mostrar_productosp1['hora'] ?></td>
                   <td><?php echo '$ ' ,$mostrar_productosp1['total'] ?></td>
                   <td><a class="button primary" href="#eliminar__pedidos_<?php echo $mostrar_productosp1['0'] ?>" uk-toggle><i class="fas fa-trash "></i> Eliminar</a></td>  
              </tr>
            </tbody>
            
  <div id="eliminar__pedidos_<?php echo $mostrar_productosp1['0'] ?>" uk-modal>
    <div class="uk-modal-dialog">
     <div class="uk-modal-body">      
    <h3 class="uk-text-center">¿Desea eliminar el pedido de <?php echo $mostrar_productosp1['nombre'] ,' ',$mostrar_productosp1['apellido'] ?>?</h3>
      <button class="uk-modal-close-default" type="button" uk-close></button>
      <div class="eliminar">
            <a class="button primary eliminar__si" onclick="eliminar_pedido(UsuarioID='<?php echo $mostrar_productosp1['1'] ?>')">Si <i class="fas fa-check"></i></a>
            <a class="button primary  uk-modal-close">No <i class="fas fa-times"></i></a>
     </div>     
      </div>    
    </div>
</div>

<script>
    function eliminar_pedido(UsuarioID){
       $.post( "productos/eliminar_pedido.php", { UsuarioID : <?php echo $mostrar_productosp1['UsuarioID'] ?>});
       alertify.notify('pedido eliminado con exito','success',8);
    }
</script>

<?php
 }
?>  
  </table>
 </div>    
</div>    