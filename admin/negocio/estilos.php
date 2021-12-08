         <div class="uk-container  uk-container-large wrap">
        <div class="uk-overflow-auto">     
             <table class="uk-table uk-table-striped ">
              <caption> <i class="fas fa-palette"></i> Estilos del sitio</caption>
         <thead>    
             <tr>
                <th>Body</th>
                <th>Color2</th>
                <th>color3</th>
                <th>Navbar</th>
                <th>Texto</th>
                <th>Button Primary</th>
                <th>Button</th>
                <th>Font Family</th>
                <th>Font Family2</th>
                <th>Placeholder</th>
                 <th>EDITAR</th>
              </tr>
        </thead>        
        <?php $negocio = 'SELECT * from estilos' ;     
          $result = mysqli_query($conn,$negocio);
        
        ?>
        
        
         <?php
           while($mostrar = mysqli_fetch_array($result)){
         ?>    
         <tbody>
              <tr>
                   <td><?php echo $mostrar['0'] ?></td>
                   <td><?php echo $mostrar['1'] ?></td>
                   <td><?php echo $mostrar['2'] ?></td>
                   <td><?php echo $mostrar['3'] ?></td>
                   <td><?php echo $mostrar['4'] ?></td>
                   <td><?php echo $mostrar['5'] ?></td>
                   <td><?php echo $mostrar['6'] ?></td>
                   <td><?php echo $mostrar['7'] ?></td>
                   <td><?php echo $mostrar['8'] ?></td>
                   <td><?php echo $mostrar['9'] ?></td>
                   
                   <td><a  class="button primary edit" href="#editar__estilos" uk-toggle> <i class="fas fa-pen"></i> Editar</a></td>
              </tr>
            </tbody>

            </table>
        </div>    
    </div>
<div id="editar__estilos" uk-modal>
    <div class="uk-modal-dialog">

        <button class="uk-modal-close-default" type="button" uk-close></button>

        <div class="modal__header">Editar estilos</div>
   
        <div class="uk-modal-body" uk-overflow-auto>
          <form method="post" action="negocio/editar_estilos.php/">
              <label class="datos"><i class="fas fa-fill-drip"></i>Color de fondo</label>
                <input  name="body" type="text" placeholder="Ingrese color de fondo" value="<?php echo $mostrar['0'] ?>" >
              <label class="datos"><i class="fas fa-fill-drip"></i>Color de primario</label>    
               <input  name="color2" type="text" placeholder="Ingrese un color" value="<?php echo $mostrar['1'] ?>"  >
               <label class="datos"><i class="fas fa-fill-drip"></i>Color secundario</label>
                <input name="color3" type="text" placeholder="Ingrese otro color" value="<?php echo $mostrar['2'] ?>">
               <label class="datos"><i class="fas fa-fill-drip"></i>Color de navbar</label>    
               <input  name="navbar" type="text" placeholder="Ingrese color del navbar" value="<?php echo $mostrar['3'] ?>" >
               <label class="datos"><i class="fas fa-eye-dropper"></i>Color de texto</label>
               <input  name="texto" type="text" placeholder="Ingrese color de texto" value="<?php echo $mostrar['4'] ?>" >
              <label class="datos"><i class="fas fa-eye-dropper"></i>Color de botón primario</label>
               <input  name="buttonColorPrimary" type="text" placeholder="Ingrese el color del botón primario" value="<?php echo $mostrar['5'] ?>" >
               <label class="datos"><i class="fas fa-eye-dropper"></i>Color de secundario</label>
               <input  name="buttonColor" type="text" placeholder="Ingrese el color del botón secundario" value="<?php echo $mostrar['6'] ?>" >
                <label class="datos"><i class="fas fa-font"></i> Fuente tipográfica principal</label>
                <input  name="fontFamily" type="text"  disabled placeholder="Ingrese el font-family principal" value="<?php echo $mostrar['7'] ?>" >
                <label class="datos"><i class="fas fa-font"></i> Fuente tipográfica secundaria</label>
                <input  name="fontFamily2" type='text'  disabled placeholder="Ingrese el font-family secundario" value="<?php echo $mostrar['8'] ?>" >    
                <label class="datos"><i class="fas fa-eye-dropper"></i>Color de Placeholder</label>
               <input  name="placeholder" type='text' placeholder="Ingrese el color del placeholder" value="<?php echo $mostrar['9'] ?>" >
               
                <a class="enlace" href="https://htmlcolorcodes.com/es/tabla-de-colores/" target="_blank"><i class="fas fa-question-circle"></i>¿Necesitás ayuda para elegír un color?</a>
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
