         <div class="uk-container  uk-container-large wrap">
        <div class="uk-overflow-auto">     
             <table class="uk-table uk-table-striped ">
              <caption> <i class="fas fa-users"> </i> Usuarios</caption>
         <thead>    
             <tr>
                <th>ID</th>
                <th>NOMBRE</th>
                <th>APELLIDO</th>
                <th>DIRECCION</th>
                <th>CIUDAD</th>
                <th>CÓDIGO POSTAL</th>
                <th>CELULAR</th>
                <th>EMAIL</th>
              </tr>
        </thead>        
      <?php $productosp1 = 'SELECT * FROM `usuarios` ORDER BY `id` ASC' ;     
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
                   <td><?php echo $mostrar_productosp1['6'] ?></td>
                   <td><?php echo $mostrar_productosp1['7'] ?></td>
              </tr>
            </tbody>
            
  <?php
 }
?>  
            </table>
            
       <?php $productos = 'SELECT * FROM `usuarios` ORDER BY `id` ASC' ;     
          $result3 = mysqli_query($conn,$productos);
           $productos ++;
        ?>
        
        
         <?php
           while($ver = mysqli_fetch_array($result3)){
      
         ?>  
    

<div id="editar__usuarios" uk-modal>
    <div class="uk-modal-dialog">

        <button class="uk-modal-close-default" type="button" uk-close></button>

        <div class="modal__header"> Editar usuario</div>
   
        <div class="uk-modal-body" id="productos" uk-overflow-auto>
          <form method="post" action="usuarios/editar_usuarios.php/">
         <input  name="id" min="1" type="number" placeholder="Ingrese id del usuario" value="<?php echo $ver[0] ?>" >
        <input  name="nombre" type="text" placeholder="Ingrese nombre del usuario" value="<?php echo $ver[1] ?>" required >
        <input  name="apellido" type="text" placeholder="Ingrese apellido" value="<?php echo $ver[2] ?>" required > 
         <input  name="direccion" type="text" placeholder="Ingrese la dirección" value="<?php echo $ver[3] ?>" required > 
         <input  name="ciudad" type="text" placeholder="Ingrese la ciudad" value="<?php echo $ver[4] ?>" required > 
         <input  name="codPostal" type="text" maxlength="6" placeholder="Ingrese el código postal " value="<?php echo $ver[5] ?>"  > 
        <input  name="celular" type="tel" placeholder="Ingrese el celular" value="<?php echo $ver[6] ?>" required >
         <input  name="email" type="email" placeholder="Ingrese el email" autocomplete="off" value="<?php echo $ver[7] ?>" required > 
        </div>

        <div class="uk-modal-footer uk-text-right">
          <button type="submit" class="button primary compradores" value="editar_productos"> <i class="fas fa-user-edit"></i> Editar usuario </button>
           <a href="#editar__usuarios" class="editar_link" uk-toggle>Siguiente <i class="fas fa-arrow-right"></i></a>
          </form>
        </div>
    </div>
</div>

<?php
}
?>

   </div>
          <ul class="lista">
           <li class="lista__item"><a class="button primary" href="#agregar__usuarios" uk-toggle >
               <i class="fas fa-plus "></i>  Agregar</a></li>
          
           <li class="lista__item"> <a class="button primary" href="#eliminar__usuarios" uk-toggle><i class="fas fa-trash "></i>  Eliminar</a></li>
           <li class="lista__item"><a href="#editar__usuarios"  uk-toggle class="button primary"> <i class="fas fa-pen"></i> Editar</a></li>
       </ul>
 
   
</div>



  <div id="agregar__usuarios" uk-modal>
    <div class="uk-modal-dialog">

        <button class="uk-modal-close-default" type="button" uk-close></button>

        <div class="modal__header">Agregar usuario</div>
   
        <div class="uk-modal-body" uk-overflow-auto>
    <form method="post" action="usuarios/agregar_usuarios.php/">
        <input  name="id" min="1" type="number" placeholder="Ingrese id de usuario" value="">
        <input  name="nombre" type="text" placeholder="Ingrese su nombre" value="">
            <input name="apellido" type="text" placeholder="Ingrese su apellido" value="" >
            <input  name="email" type="email" placeholder="Ingrese correo electrónico" value=""autocomplete="off" >
            <input  name="password" type="password" placeholder="Ingrese contraseña" minlength="8" maxlength="15" value="" autocomplete="off" >
            <input  name="celular" type="tel" placeholder="Ingrese su celular" value="" >
            <input  name="direccion" type="text" placeholder="Ingrese el domicilio a enviar" value="" >
            <input  name="ciudad" type="text" placeholder="Ingrese la ciudad a enviar" value="" >
             <input  name="codPostal" type="text" maxlength="6" placeholder="Ingrese el código postal" value="" >
        </div>

        <div class="uk-modal-footer uk-text-right">
         <button type="submit" class="button primary compradores" value="enviar"  > <i class="fas fa-user-plus"></i> Completar Registro</button>
            </form>
        </div>
    </div>
</div>


 <div id="eliminar__usuarios" uk-modal>
    <div class="uk-modal-dialog">

        <button class="uk-modal-close-default" type="button" uk-close></button>

        <div class="modal__header">Eliminar usuario</div>
   
        <div class="uk-modal-body" uk-overflow-auto>
          <form method="post" action="usuarios/eliminar_usuarios.php/">
            <input  name="id" min="1" type="number" placeholder="Ingrese id de usuario a eliminar" value=""  >

        </div>

        <div class="uk-modal-footer uk-text-right">
              <button type="submit" class="button primary compradores" value="enviar" > <i class="fas fa-user-slash"></i> Confirmar</button>
            </form>
        </div>
    </div>
</div>
