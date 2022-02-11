         <div id="estilos" class="uk-container  uk-container-large wrap">
          <header class="caption"> <i class="fas fa-palette"></i> Estilos del sitio</header>
        <div class="uk-overflow-auto">     
             <table class="uk-table uk-table-striped ">
         <thead>    
             <tr>
                <th>Color de fondo</th>
                <th>color secundario</th>
                <th>color principal</th>
                <th>Barra de navegación</th>
                <th>Color de Texto</th>
                <th>fuente tipográfica principal</th>
                <th>Fuente tipográfica secundaria</th>
                <th>color de marcas de agua</th>
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
                   <td style="background-color:<?php echo $mostrar['0'] ?>;border:<?php echo $mostrar['1'] ?> 0.1em solid;"></td>
                   <td style="background-color:<?php echo $mostrar['1'] ?>;border:<?php echo $mostrar['1'] ?> 0.1em solid;"></td>
                   <td style="background-color:<?php echo $mostrar['2'] ?>;border:<?php echo $mostrar['1'] ?> 0.1em solid;"></td>
                   <td style="background-color:<?php echo $mostrar['3'] ?>;border: <?php echo $mostrar['1'] ?> 0.1em solid;"></td>
                   <td style="background-color:<?php echo $mostrar['4'] ?>;border:<?php echo $mostrar['1'] ?>
                   0.1em solid;"></td>
                   <td style="border:<?php echo $mostrar['1'] ?> 0.1em solid;"> <?php echo $mostrar['5'] ?> </td>
                   <td style="border: <?php echo $mostrar['1'] ?> 0.1em solid;"><?php echo $mostrar['6'] ?>
                   </td>
                   <td style="background-color:<?php echo $mostrar['7'] ?>;border: <?php echo $mostrar['1'] ?> 0.1em solid"></td>
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
                
               <label class="datos"><i class="fas fa-fill-drip"></i>Color principal</label>
                <input name="color3" type="text" placeholder="Ingrese otro color" value="<?php echo $mostrar['2'] ?>">
                
            <label class="datos"><i class="fas fa-fill-drip"></i>Color secundario</label>  
               <input  name="color2" type="text" placeholder="Ingrese un color" value="<?php echo $mostrar['1'] ?>"  >
               
               <label class="datos"><i class="fas fa-fill-drip"></i>Color de la barra de navegación</label>    
               <input  name="navbar" type="text" placeholder="Ingrese color del navbar" value="<?php echo $mostrar['3'] ?>" >
               <label class="datos"><i class="fas fa-eye-dropper"></i>Color de texto</label>
               <input  name="texto" type="text" placeholder="Ingrese color de texto" value="<?php echo $mostrar['4'] ?>" >
                <label class="datos"><i class="fas fa-font"></i> Fuente tipográfica principal</label>
                <input  name="fontFamily" type="text"  disabled placeholder="Ingrese el font-family principal" value="<?php echo $mostrar['5'] ?>" >
                <label class="datos"><i class="fas fa-font"></i> Fuente tipográfica secundaria</label>
                <input  name="fontFamily2" type='text'  disabled placeholder="Ingrese el font-family secundario" value="<?php echo $mostrar['6'] ?>" >    
                <label class="datos"><i class="fas fa-eye-dropper"></i>Color de marcas de agua</label>
               <input  name="placeholder" type='text' placeholder="Ingrese el color de marca de agua" value="<?php echo $mostrar['7'] ?>" >
               
                <a class="enlace" href="https://htmlcolorcodes.com/es/tabla-de-colores/" target="_blank"><i class="fas fa-question-circle"></i>¿Necesitás ayuda para elegír un color?</a>
        </div>

        <div class="uk-modal-footer uk-text-right">
         <button type="submit" class="button primary compradores" value="enviar" > <i class="fas fa-pen"></i> Editar estilos</button>
            </form>
        </div>
    </div>
</div>
    
<?php
 }
?>     
