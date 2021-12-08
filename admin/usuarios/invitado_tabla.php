         <div class="uk-container  uk-container-large wrap">
        <div class="uk-overflow-auto">     
             <table class="uk-table uk-table-striped ">
              <caption>  <i class="fas fa-star"></i> Invitados</caption>
         <thead>    
             <tr>
                <th>ID</th>
                <th>NOMBRE</th>
                <th>EMAIL</th>
              </tr>
        </thead>        
        <?php $usuarios = 'SELECT * FROM `admin` ORDER BY `id` ASC limit 1,1000000';  
          $result = mysqli_query($conn,$usuarios);
           while($mostrar = mysqli_fetch_array($result)){
         ?>    
         <tbody>
              <tr>
                   <td><?php echo $mostrar['0'] ?></td>
                   <td><?php echo $mostrar['1'] ?></td>
                   <td><?php echo $mostrar['2'] ?></td>
              </tr>
            </tbody>
   <?php
     }
    ?>   
            </table>
       
        </div>    
    </div>    
    
       <ul class="lista dos">
           <li class="lista__item"><a class="button primary"  href="#editar__invitado" uk-toggle> <i class="fas fa-pen "></i> Editar</a></li>
           <li class="lista__item"><a class="button primary" href="#eliminar__invitado" uk-toggle> <i class="fas fa-trash "></i> Eliminar</a></li>
       </ul>
 
   </div>
</div>

<?php $usuarios = "SELECT * FROM `admin` ORDER BY `id` ASC limit 1,1000000";  
          $result = mysqli_query($conn,$usuarios);
        
           while($mostrar = mysqli_fetch_array($result)){
?>    
   <div id="editar__invitado" uk-modal>
    <div class="uk-modal-dialog">
        <button class="uk-modal-close-default" type="button" uk-close></button>
        <div class="modal__header">Editar invitado</div>
   
        <div class="uk-modal-body" uk-overflow-auto>
          <form method="post" action="usuarios/editar_invitado.php/">
                <input  name="id" type="number" min="1" placeholder="Ingrese id del invitado a editar" value="<?php echo $mostrar['0'] ?>" >
               <input  name="nombre" type="text" placeholder="Ingrese su nombre" value="<?php echo $mostrar['1'] ?>"  >
               <input  name="email" type="email" placeholder="Ingrese correo electrónico" value="<?php echo $mostrar['2'] ?>"  disabled>
        </div>

        <div class="uk-modal-footer uk-text-right">
           <button type="submit" class="button primary compradores" value="enviar" >  <i class="fas fa-user-edit"></i> Editar</button>
            </form>
        </div>
    </div>
</div> 
<?php
 }
?>

 <div id="eliminar__invitado" uk-modal>
    <div class="uk-modal-dialog">

        <button class="uk-modal-close-default" type="button" uk-close></button>

        <div class="modal__header">Eliminar invitado</div>
   
        <div class="uk-modal-body" uk-overflow-auto>
          <form method="post" action="/admin/usuarios/eliminar_invitado.php/">
            <input  name="id" min="1" type="number" placeholder="Ingrese id del invitado a eliminar" value=""  >
        </div>

        <div class="uk-modal-footer uk-text-right">
            <button type="submit" class="button primary compradores" value="enviar" >  <i class="fas fa-user-slash"></i> Confirmar</button>
            </form>

        </div>
    </div>
</div>
