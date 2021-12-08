<?php
 include '../database.php';
?>
<div class="uk-container  uk-container-large wrap">
    <div class="uk-overflow-auto">     
    <table class="uk-table uk-table-striped ">
              <caption><i class="fas fa-comment"></i> Mensajes</caption>
         <thead>    
             <tr>
                <th>USUARIOID</th>
                <th>MENSAJE</th>
                <th>FECHA</th>
                <th>HORA</th>
                <th>ESTADO</th>
                <th>RESPUESTA</th>
                <th>TOTAL A PAGAR</th>
                <th>NOMBRE DE LA TIENDA</th>
            </tr>
        </thead>        
   <?php $productosp1 = 'SELECT * FROM `ventas`' ;     
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
                   <td><?php echo $mostrar_productosp1['4'] ?></td>
                   <td><?php echo $mostrar_productosp1['5'] ?></td>
                   <td><?php echo '$',$mostrar_productosp1['6'] ?></td>
                   <td><?php echo $mostrar_productosp1['7'] ?></td>
              </tr>
            </tbody>
            
  <?php
 }
?>  
            </table>
</div>
</div>
    <ul class="lista dos">
         <li class="lista__item"><a href="#eliminar__mensajes"  uk-toggle class="button primary"> <i class="fas fa-trash"></i> Eliminar</a></p></li>
          <li class="lista__item"><a href="#editar__mensajes"  onclick="<?php echo $mostrar_productosp1['0'] ?>" uk-toggle class="button primary"><i class="fas fa-paper-plane"></i> Responder</a></li>
     </ul> 
    

<div id="editar__mensajes" uk-modal>
    <div class="uk-modal-dialog">
        <button class="uk-modal-close-default" type="button" uk-close></button>
        <div class="modal__header"> Enviar respuestas</div>
       <div class="uk-modal-body" id="productos" uk-overflow-auto>

          <form method="post" action="usuarios/editar__mensajes.php/">
    
       <label class="datos"><i class="fas fa-user"></i> id de usuario</label>
       <div class="help">
           <i class="fas fa-info" class="link" href="#info__mensajes" uk-toggle></i> <input  name="UsuarioID" min="1" type="number" placeholder="" value="" requiered>
       </div>     
        <label class="datos"><i class="fas fa-exclamation-triangle"></i> Estado de compra</label>
        <input  name="estado" type="text" placeholder="" value="" required >
        <label class="datos"><i class="fas fa-paper-plane"></i> Respuesta al cliente</label>
        <textarea name="MensajeVendedor" placeholder=""  required > </textarea>

        </div>
        <div class="uk-modal-footer uk-text-right">
          <button type="submit" class="button primary compradores" value="editar__mensajes"><i class="fas fa-paper-plane"></i> Enviar respuesta</button>
          </form>
        </div>
</div>
    </div>
</div>


 <div id="eliminar__mensajes" uk-modal>
    <div class="uk-modal-dialog">

        <button class="uk-modal-close-default" type="button" uk-close></button>

        <div class="modal__header">Eliminar mensaje</div>
   
        <div class="uk-modal-body" uk-overflow-auto>
          <form method="post" action="usuarios/eliminar__mensajes.php/">
            <input  name="UsuarioID" min="1" type="number" placeholder="Ingrese usuarioID" value=""  >

        </div>

        <div class="uk-modal-footer uk-text-right">
              <button type="submit" class="button primary compradores" value="enviar" > <i class="fas fa-user-slash"></i> Confirmar</button>
            </form>
        </div>
    </div>
</div>


    <div id="info__mensajes" uk-modal>
       <div class="uk-modal-dialog">
     <button class="uk-modal-close-default" type="button" uk-close></button>
    <div class="modal__header">Mensajes de usuarios</div>
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
        <div class="uk-modal-footer uk-text-right">
          <a href="#editar__mensajes" uk-toggle type="submit" class="button primary compradores"><i class="fas fa-paper-plane"></i> Volver</a>
          </form>
</div>
    </div>
</div>
