
 <div id="usuarios_eliminados" class="uk-container  uk-container-large wrap">
      <header class="caption"> <i class="fas fa-users"> </i> Usuarios bloqueados</header>
          <div class="uk-overflow-auto">    
             <table id="user" class="uk-table uk-table-striped ">
          <thead>    
             <tr>
                <th>N°</th>
                <th>NOMBRE</th>
                <th>APELLIDO</th>
                <th>DIRECCION</th>
                <th>CIUDAD</th>
                <th>CÓDIGO POSTAL</th>
                <th>CELULAR</th>
                <th>EMAIL</th>
                <th>ELIMINAR</th>
                <th>DESBLOQUEAR</th>
              </tr>
        </thead>        
      <?php $productosp1 = 'SELECT * FROM `usuarios_eliminados` ' ;     
          $result3 = mysqli_query($conn,$productosp1);
        
        ?>
        
        
         <?php
           while($mostrar_productosp1 = mysqli_fetch_array($result3)){
         ?>    
         <tbody>
              <tr>
                   <td><?php echo $mostrar_productosp1[0] ?></td>
                   <td><?php echo $mostrar_productosp1[1] ?></td>
                   <td><?php echo $mostrar_productosp1[2] ?></td>
                   <td><?php echo $mostrar_productosp1[3] ?></td>
                   <td><?php echo $mostrar_productosp1[4] ?></td>
                   <td><?php echo $mostrar_productosp1[5] ?></td>
                   <td><?php echo $mostrar_productosp1[6] ?></td>
                   <td><?php echo $mostrar_productosp1[7] ?></td>
                   <td><a class="button primary" href="#eliminar_<?php echo $mostrar_productosp1[0] ?>" uk-toggle><i class="fas fa-trash"></i> Eliminar</a></td>
                    <td><a href="#restaurar_<?php echo $mostrar_productosp1[0] ?>" uk-toggle class="button primary"><i class="fas fa-edit"></i>desbloquear</a></td>
              </tr>
            </tbody>
        </div>
    </div>
</div>    
  <?php
 }
?>  
            </table>
  <?php $productosp1 = 'SELECT * FROM `usuarios_eliminados` ORDER BY `id` ASC' ;     
          $result3 = mysqli_query($conn,$productosp1);
        
        ?>
        
        
         <?php
           while($mostrar_productosp1 = mysqli_fetch_array($result3)){
         ?>    

<div id="eliminar_<?php echo $mostrar_productosp1[0] ?>" uk-modal>
    <div class="uk-modal-dialog">
     <div class="uk-modal-body">      
    <h3 class="uk-text-center">¿Desea eliminar a <?php echo $mostrar_productosp1[1] ,' ',$mostrar_productosp1[2] ?>?</h3>
      <button class="uk-modal-close-default" type="button" uk-close></button>
      <div class="eliminar">
            <a class="button primary" onclick="eliminar_usuarios((id=<?php echo $mostrar_productosp1[0]?>))">Si <i class="fas fa-check"></i></a>
            <a class="button primary uk-modal-close">No <i class="fas fa-times"></i></a>
     </div>     
      </div>    
    </div>
</div>

<script>
    function eliminar_usuarios(id){
       $.post( "usuarios/usuarios_eliminados-eliminar", { id:id });
        alertify.notify('usuario eliminado con exito','success',8);
    }
</script>


<div id="restaurar_<?php echo $mostrar_productosp1[0] ?>" uk-modal>
    <div class="uk-modal-dialog">
     <div class="uk-modal-body">      
    <h3 class="uk-text-center">¿Desea desboquear a <?php echo $mostrar_productosp1[1] ,' ',$mostrar_productosp1[2] ?>?</h3>
      <button class="uk-modal-close-default" type="button" uk-close></button>
      <div class="eliminar">
            <a class="button primary" onclick="restaurar((id=<?php echo $mostrar_productosp1[0]?>))">Si <i class="fas fa-check"></i></a>
            <a class="button primary uk-modal-close">No <i class="fas fa-times"></i></a>
     </div>     
      </div>    
    </div>
</div>

<script>
    function restaurar(id) {
       $.post( "usuarios/restaurar_usuarios.php", { id:id});
        alertify.notify('usuario desbloqueado con exito','success',8);
    }
</script>

<?php
}
?>

   </div>

   
</div>




