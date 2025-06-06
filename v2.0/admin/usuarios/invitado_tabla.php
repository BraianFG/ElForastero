 
         <div id="invitados" class="uk-container  uk-container">
        <ul class="lista">
              <li class="lista__item"><a class="button primary" href="registrarse">
                <i class="fas fa-plus "></i> Agregar</a></li>
         </ul>
      <header class="caption"><i class="fas fa-star"></i> Invitados</header>    
        <div class="uk-overflow-auto">     
             <table class="uk-table uk-table-striped ">
         <thead>    
             <tr>
                <th>NOMBRE</th>
                <th>EMAIL</th>
                <th>ELIMINAR</th>
                <th>EDITAR</th>
              </tr>
        </thead>        
        <?php $usuarios = 'SELECT * FROM `admin` ORDER BY `id` ASC limit 1,1000000';  
          $result = mysqli_query($conn,$usuarios);
           while($mostrar = mysqli_fetch_array($result)){
         ?>    
         <tbody>
              <tr>
                   <td><?php echo $mostrar['1'] ?></td>
                   <td><?php echo $mostrar['2'] ?></td>
                   <td><a class="button primary" href="#eliminar__invitado_<?php echo $mostrar['0'] ?>" uk-toggle ><i class="fas fa-trash "></i> Eliminar</a></td>
                   <td><a class="button primary" href="#editar__invitado_<?php echo $mostrar['0'] ?>" uk-toggle ><i class="fas fa-edit "></i> Editar</a></td>
              </tr>
            </tbody>
   <?php
     }
    ?>   
    
    <script>
    function eliminar_invitado(id){
       $.post( "usuarios/eliminar_invitado.php", { id: id } );
        alertify.notify('usuario invitado eliminado con exito','success',8);

    }
   </script>
            </table>
       
        </div>    
    </div>   
 
   </div>
</div>

<?php $usuarios = "SELECT * FROM `admin` ORDER BY `id` ASC limit 1,1000000";  
          $result = mysqli_query($conn,$usuarios);
        
           while($mostrar = mysqli_fetch_array($result)){
?>    
   <div id="editar__invitado_<?php echo $mostrar['0'] ?>" uk-modal>
    <div class="uk-modal-dialog">
        <button class="uk-modal-close-default" type="button" uk-close></button>
        <div class="modal__header">Editar invitado</div>
   
        <div class="uk-modal-body" uk-overflow-auto>
          <form method="post" action="usuarios/editar_invitado.php/">
               <label class="datos">Número de invitado</label> 
                <input  name="id" type="number" min="1" placeholder="Ingrese id del invitado a editar" value="<?php echo $mostrar['0'] ?>" >
                
             <label class="datos">Nombre del invitado</label>    
               <input  name="nombre" type="text" placeholder="Ingrese su nombre" value="<?php echo $mostrar['1'] ?>"  >
               
                <label class="datos">Correo electrónico</label> 
               <input  name="email" type="email" placeholder="Ingrese correo electrónico" value="<?php echo $mostrar['2'] ?>"  disabled>
        </div>

        <div class="uk-modal-footer uk-text-right">
           <button type="submit" class="button primary compradores" value="enviar" >  <i class="fas fa-user-edit"></i> Editar</button>
            </form>
        </div>
    </div>
</div> 
</div>

<div id="eliminar__invitado_<?php echo $mostrar[0] ?>" uk-modal>
    <div class="uk-modal-dialog">
     <div class="uk-modal-body">      
    <h3 class="uk-text-center">¿Desea eliminar al invitado <?php echo $mostrar['1'] ?> ?</h3>
      <button class="uk-modal-close-default" type="button" uk-close></button>
      <div class="eliminar">
            <a class="button primary " onclick="eliminar_invitado((id =<?php echo $mostrar['0'] ?>)) ">Si <i class="fas fa-check"></i></a>
            <a class="button primary uk-modal-close">No <i class="fas fa-times"></i></a>
     </div>     
      </div>    
    </div>
</div>

<?php
 }
?>

