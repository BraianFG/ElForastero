<?php
 include '../database.php';
?>
<div class="uk-container  uk-container-large wrap">
    <div class="uk-overflow-auto">     
    <table class="uk-table uk-table-striped ">
              <caption><i class="fas fa-shopping-cart"></i>carrito de usuarios</caption>
         <thead>    
             <tr>
                <th>UsuarioID</th>
                <th>ProductoID</th>
                <th>Cantidad</th>
            </tr>
        </thead>        
   <?php $productosp1 = "SELECT * FROM `carrito`" ;     
          $result3 = mysqli_query($conn,$productosp1);
        
        ?>
        
        
         <?php
           while($mostrar_productosp1 = mysqli_fetch_array($result3)){
         ?>    
         <tbody>
              <tr>
                   <td><?php echo $mostrar_productosp1['0'] ?></td>
                   <td><?php echo $mostrar_productosp1['1'] ?></td>
                   <td><?php echo $mostrar_productosp1['2'] ?></td>
              </tr>
            </tbody>
            
  <?php
 }
?>  
            </table>
 </div>    
</div>    
           
      <ul class="lista dos">
         <li class="lista__item"><a href="#eliminar__carrito"  uk-toggle class="button primary"> <i class="fas fa-trash"></i> Eliminar</a></p></li>
          <li class="lista__item"><a href="#info"  uk-toggle class="button primary"><i class="fas fa-info"></i> Más info</a></li>
     </ul>   

     <div id="info" uk-modal>
       <div class="uk-modal-dialog">
     <button class="uk-modal-close-default" type="button" uk-close></button>
    <div class="modal__header">Carrito de usuarios</div>
    <div class="uk-modal-body" id="productos" uk-overflow-auto>
      <table class="uk-table uk-table-striped ">
         <thead>    
             <tr>
                <th>ID</th>
                <th>NOMBRE</th>
                <th>APELLIDO</th>
                <th>EMAIL</th>
            </tr>
        </thead>        
   <?php $productosp1 = "SELECT `id`,`nombre`,`apellido`,`email` FROM `usuarios`;" ;     
          $result3 = mysqli_query($conn,$productosp1);
        
        ?>
        
        
         <?php
           while($mostrar_productosp1 = mysqli_fetch_array($result3)){
         ?>    
         <tbody>
              <tr>
                   <td><?php echo $mostrar_productosp1['0'] ?></td>
                   <td><?php echo $mostrar_productosp1['1'] ?></td>
                   <td><?php echo $mostrar_productosp1['2'] ?></td>
                   <td><?php echo $mostrar_productosp1['3'] ?></td>
              </tr>
            </tbody>
            
  <?php
 }
?>  
    </table>
</div>
</div>

<div id="eliminar__carrito" uk-modal>
    <div class="uk-modal-dialog">
        <button class="uk-modal-close-default" type="button" uk-close></button>
        <div class="modal__header">Eliminar carrito</div>
        <div class="uk-modal-body" uk-overflow-auto>
          <form method="post" action="productos/eliminar_carrito.php/">
            <input  name="usuarioID" type="number" placeholder="Ingrese usuarioID" min="1" value="" required  >

        </div>

        <div class="uk-modal-footer uk-text-right">
            <button type="submit" class="button primary compradores" value="enviar" required > <i class="fas fa-trash"></i> Confirmar</button>
            </form>
        </div>
    </div>
</div>
</div>
