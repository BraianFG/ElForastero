 <div id="usuarios" class="uk-container  uk-container-large wrap">
      <header class="caption"> <i class="fas fa-users"> </i> Usuarios</header>
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
                <th>EDITAR</th>
              </tr>
        </thead>        
      <?php $productosp1 = 'SELECT * FROM `usuarios` ' ;     
          $result3 = mysqli_query($conn,$productosp1);

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
                    <td><a href="#editar__usuarios_<?php echo $mostrar_productosp1[0] ?>" uk-toggle class="button primary"><i class="fas fa-edit"></i>editar</a></td>
              </tr>
            </tbody>
        </div>
    </div>
</div>    
  <?php
 }
?>  
            </table>
  <?php $productosp1 = 'SELECT * FROM `usuarios` ORDER BY `id` ASC' ;     
          $result3 = mysqli_query($conn,$productosp1);
        
        ?>
        
        
         <?php
           while($mostrar_productosp1 = mysqli_fetch_array($result3)){
         ?>    
<div id="editar__usuarios_<?php echo $mostrar_productosp1[0] ?>" uk-modal>
    <div class="uk-modal-dialog" id="<?php echo $mostrar_productosp1[0] ?>">

        <button class="uk-modal-close-default" type="button" uk-close></button>

        <div class="modal__header"> Editar usuario</div>
   
        <div class="uk-modal-body" uk-overflow-auto>
          <form method="post" action="usuarios/editar_usuarios.php/">
              
        <label class="datos">Número de usuario</label>
         <input  name="id" min="1" type="number" placeholder="Número de usuario" value="<?php echo $mostrar_productosp1[0] ?>" >
         
        <label class="datos">Nombre/s del usuario</label> 
        <input  name="nombre" type="text" placeholder="Ingrese nombre/s del usuario" value="<?php echo $mostrar_productosp1[1] ?>" required >
        
         <label class="datos">Apellido/s del usuario</label> 
        <input  name="apellido" type="text" placeholder="Ingrese apellido/s" value="<?php echo $mostrar_productosp1[2] ?>" required > 
        
         <label class="datos">Dirección</label> 
         <input  name="direccion" type="text" placeholder="Ingrese la dirección" value="<?php echo $mostrar_productosp1[3] ?>" required > 
         
          <label class="datos">Ciudad</label> 
         <input  name="ciudad" type="text" placeholder="Ingrese la ciudad" value="<?php echo $mostrar_productosp1[4] ?>" required > 
         
         <label class="datos">Código postal</label> 
         <input  name="codPostal" type="text" maxlength="6" placeholder="Ingrese el código postal " value="<?php echo $mostrar_productosp1[5] ?>"  >
         
        <label class="datos">Celular</label>  
        <input  name="celular" type="tel" placeholder="Ingrese el celular" value="<?php echo $mostrar_productosp1[6] ?>" required >
        
        <label class="datos">Correo Electrónico</label>     
         <input  name="email" type="email" placeholder="Ingrese el email" autocomplete="off" value="<?php echo $mostrar_productosp1[7] ?>" required > 
        </div>

        <div class="uk-modal-footer uk-text-right">
          <button type="submit" class="button primary compradores" value="editar_productos"> <i class="fas fa-user-edit"></i> Editar usuario </button>
          </form>
        </div>
    </div>
</div>

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
    function eliminar_usuarios(id) {
       $.post( "usuarios/eliminar_usuarios.php", { id:id});
        alertify.notify('usuario eliminado con exito','success',8);
    }
</script>
<?php
}
?>

   </div>
</div>



