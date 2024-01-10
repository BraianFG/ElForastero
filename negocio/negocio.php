         <div id="negocio" class="uk-container  uk-container-large wrap">
     <header class="caption"><i class="fas fa-desktop"></i> Datos del negocio</header>     
        <div class="uk-overflow-auto">     
             <table class="uk-table uk-table-striped ">
         <thead>    
             <tr>
                <th>NOMBRE</th>
                <th>LOGO</th>
                <th>DESCRIPCIÓN</th>
                <th>INFO</th>
                <th>CELULAR</th>
                <th>ANUNCIO</th>
                <th>EMAIL</th>
                <th>WHATSSAPP</th>
                <th>WHATSSAPP</th>
                <th>FACEBOOK</th>
                <th>INSTAGRAM</th>
                <th>TELEGRAM</th>
                 <th>EDITAR</th>
              </tr>
        </thead>        
        <?php $negocio = 'SELECT * from negocio' ;     
          $result = mysqli_query($conn,$negocio);
        
        ?>
        
        
         <?php
           while($mostrar = mysqli_fetch_array($result)){
         ?>    
         <tbody>
              <tr>
                   <td><?php echo $mostrar['nombre'] ?></td>
                   <td><a href="../../images/<?php echo $mostrar['logo'] ?>" target="Blank"><img src="../../images/<?php echo $mostrar['logo'] ?>" class="img__sitio" loading="lazzy"/></a></td>
                   <td><?php echo $mostrar['descripcion'] ?></td>
                   <td><?php echo $mostrar['info'] ?></td>
                   <td><?php echo $mostrar['celular'] ?></td>
                   <td><?php echo $mostrar['alert'] ?></td>
                   <td><?php echo $mostrar['email'] ?></td>
                   <td><?php echo $mostrar['whatsapp'] ?></td>
                   <td><?php echo $mostrar['whatsapp2'] ?></td>
                   <td><?php echo $mostrar['facebook'] ?></td>
                   <td><?php echo $mostrar['instagram'] ?></td>
                   <td><?php echo $mostrar['telegram'] ?></td>
                   <td><a  class="button primary" href="#editar__datos" uk-toggle> <i class="fas fa-pen"></i> Editar</a></td>
              </tr>
            </tbody>

            </table>
        </div>    
    </div>
<div id="editar__datos" uk-modal>
    <div class="uk-modal-dialog">

        <button class="uk-modal-close-default" type="button" uk-close></button>

        <div class="modal__header">Editar datos</div>
   
        <div class="uk-modal-body" uk-overflow-auto>
          <form method="post" action="negocio/editar_negocio.php/" enctype="multipart/form-data">
              <label class="datos"><i class="fas fa-edit"></i>Nombre del negocio</label>
                <input  name="nombre" type="text" placeholder="Ingrese el nombre de su negocio" value="<?php echo $mostrar['nombre'] ?>" >
               <label class="datos"><i class="fas fa-image"></i> Logo</label>    
                <input type="file" accept="image/* "  name="logo" >
                <img onerror="this.style.display='none'" src="../../images/<?php echo $mostrar['logo'] ?>" class="productos__images"> 
                <label class="datos"><i class="fas fa-comment"></i> Breve descripción</label>
                <input name="descripcion" type="text" placeholder="Ingrese una breve descripción" value="<?php echo $mostrar['descripcion'] ?>">
            <label class="datos"><i class="fas fa-info"></i> Información del negocio</label>
                <textarea name="info" type="text" placeholder="Ingrese descripción del negocio"  maxlength="250" class="descripcion"><?php echo $mostrar['info'] ?></textarea>
               <label class="datos"><i class="fas fa-bullhorn"></i> anuncio a mostrar</label>    
               <input  name="alert" type="text" placeholder="Ingrese un rápido anuncio a mostrar" value="<?php echo $mostrar['alert'] ?>" >
                <label class="datos"><i class="fas fa-envelope"></i> Email</label>
               <input  name="email" type="email" placeholder="Ingrese el email del vendedor" value="<?php echo $mostrar['email'] ?>" >
                <label class="datos"><i class="fas fa-phone"></i> Celular</label>
               <input  name="celular" type="tel" placeholder="Ingrese el celular del vendedor" value="<?php echo $mostrar['celular'] ?>" >
               <label class="datos"><i class="fab fa-whatsapp"></i> Catálogo de Whatsapp</label>
               <input  name="whatsapp" type="text" placeholder="Ingrese el enlace catálogo de Whatsapp (Si tiene)" value="<?php echo $mostrar['whatsapp'] ?>" >
               <label class="datos"><i class="fab fa-whatsapp"></i> Contacto de Whatsapp</label>
                <input  name="whatsapp2" type="tel" placeholder="Ingrese el enlace de contacto a Whatsapp (Si tiene)" value="<?php echo $mostrar['whatsapp2'] ?>" >
                <label class="datos"><i class="fab fa-facebook-f"></i> Página de Facebook</label>
               <input  name="facebook" type="text" placeholder="Ingrese el enlace a Facebook (Si tiene)" value="<?php echo $mostrar['facebook'] ?>" >
               <label class="datos"><i class="fab fa-instagram"></i> Página de Instagram</label>
               <input  name="instagram" type="text" placeholder="Ingrese el enlace a Instagram (Si tiene)" value="<?php echo $mostrar['instagram'] ?>" >
                <label class="datos"><i class="fab fa-telegram-plane"></i> Contacto de Telegram</label>
                  <input  name="telegram" type="text" placeholder="Ingrese el enlace a Telegram (Si tiene)" value="<?php echo $mostrar['telegram'] ?>" >
             <label class="datos"><i class="fas fa-edit"></i> Enlace de registro en el fisco (si tiene)</label>      
             <input  name="afip" type="text" placeholder="Ingrese el enlace de registro (Si tiene)" value="<?php echo $mostrar['registro'] ?>" >  
              <label class="datos"><i class="fas fa-image"></i> Enlace a imagen de registro en el fisco (si tiene)</label>      
             <input  name="imagenAfip" type="text" placeholder="Ingrese el enlace a la imagen de registro (Si tiene)" value="<?php echo $mostrar['imagenRegistro'] ?>" > 
             <label class="datos"><i class="fas fa-edit"></i> Enlace para agregar imagen de medios de Pago (si tiene) </label>      
             <input  name="mediosPago" type="text" placeholder="Ingrese enlace de medios de pago (Si tiene)" value="<?php echo $mostrar['mediosPago'] ?>" > 
        </div>

        <div class="uk-modal-footer uk-text-right">
         <button type="submit" class="button primary compradores" value="enviar" > <i class="fas fa-pen"></i> Editar datos</button>
            </form>
        </div>
    </div>
</div>
    
<?php
 }
?>     

