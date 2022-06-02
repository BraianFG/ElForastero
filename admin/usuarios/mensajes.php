<?php
 include '../database.php';
?>
<div id="mensajes" class="uk-container  uk-container-large wrap">
  <header class="caption"><i class="fas fa-comment"></i> Mensajes</header>    
    <div class="uk-overflow-auto">     
    <table class="uk-table uk-table-striped ">
         <thead>    
             <tr>
                <th>N°</th>
                <th>USUARIO</th>
                <th>NOMBRE</th>
                <th>APELLIDO</th>
                <th>MENSAJE</th>
                <th>FECHA</th>
                <th>HORA</th>
                <th>RESPUESTA</th>
                <th>RESPONDER</th>
                <th>ELIMINAR</th>
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
                   <td><?php echo $mostrar_productosp1[0] ?></td>
                   <td><?php echo $mostrar_productosp1[1] ?></td>
                   <td><?php echo $mostrar_productosp1[2]  ?></td>
                   <td><?php echo $mostrar_productosp1[3] ?></td>
                   <td><?php echo $mostrar_productosp1[4] ?></td>
                   <td><?php echo $mostrar_productosp1[5] ?></td>
                   <td><?php echo $mostrar_productosp1[6] ?></td>
                   <td><?php echo $mostrar_productosp1[7] ?></td>
                    <td><li class="lista__item"><a href="#editar__mensajes_<?php echo $mostrar_productosp1['0'] ?>" uk-toggle class="button primary"><i class="fas fa-paper-plane"></i> Responder</li></td>
                      <td><li class="lista__item"><a href="#eliminar_<?php echo $mostrar_productosp1['0'] ?>" uk-toggle class="button primary"><i class="fas fa-trash"></i>Eliminar</li></td>
              </tr>
            </tbody>

  <?php
 }
?>  
            </table>
</div>            
</div>



<?php $productosp1 = 'SELECT * FROM `ventas`' ;     
          $result3 = mysqli_query($conn,$productosp1);
        
   while($mostrar_productosp1 = mysqli_fetch_array($result3)){
 ?>      
<div id="editar__mensajes_<?php echo $mostrar_productosp1['0'] ?>" uk-modal>
    <div class="uk-modal-dialog">
        <button class="uk-modal-close-default" type="button" uk-close></button>
        <div class="modal__header"> Enviar respuestas</div>
       <div class="uk-modal-body" id="productos" uk-overflow-auto>

          <form method="post" action="usuarios/editar__mensajes.php/">
              
     <label class="datos"><i class="fas fa-comment-alt"></i>Número de mensaje</label>
        <input  name="id" type="number" placeholder="" value="<?php echo $mostrar_productosp1[0]?>" required >
  
        <label class="datos"><i class="fas fa-user"></i>Número del usuario</label>
        <input  name="UsuarioID" type="number" placeholder="" value="<?php echo $mostrar_productosp1[1]?>" required >

       <label class="datos"><i class="fas fa-user"></i>Nombre/s</label>
        <input  name="nombre" type="text" placeholder="" value="<?php echo $mostrar_productosp1[2]?>" disabled >
        
        <label class="datos"><i class="fas fa-user"></i>Apellido/s</label> 
        <input  name="apellido" type="text" placeholder="" value="<?php echo $mostrar_productosp1[3] ?>" disabled >
    

       <label class="datos"><i class="fas fa-comment-alt"></i> Mensaje del cliente</label>
        <textarea class="descripcion"><?php echo $mostrar_productosp1[4]?></textarea disabled>

        
        <label class="datos"><i class="fas fa-paper-plane"></i> Respuesta al cliente</label>
        <textarea class="descripcion" name="MensajeVendedor" placeholder="" required > </textarea>

        </div>
        <div class="uk-modal-footer uk-text-right">
          <button type="submit" class="button primary compradores" value="editar__mensajes"><i class="fas fa-paper-plane"></i> Enviar respuesta</button>
          </form>
        </div>
    </div>
</div>

<div id="eliminar_<?php echo $mostrar_productosp1[0] ?>" uk-modal>
    <div class="uk-modal-dialog">
     <div class="uk-modal-body">      
    <h3 class="uk-text-center">¿Desea eliminar este mensaje?</h3>
      <button class="uk-modal-close-default" type="button" uk-close></button>
      <div class="eliminar">
            <a class="button primary uk-modal-close" onclick="eliminar_mensajes()">Si <i class="fas fa-check"></i></a>
            <a class="button primary uk-modal-close">No <i class="fas fa-times"></i></a>
     </div>     
      </div>    
    </div>
</div>

<script>
    function eliminar_mensajes(){
       $.post( "usuarios/eliminar__mensajes.php", { "UsuarioID" :<?php echo $_SESSION['id'] ?> });

    }
</script>

<?php
}
?>
    
