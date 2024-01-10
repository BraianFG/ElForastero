         <div id="estilos" class="uk-container  uk-container-large wrap">
          <header class="caption"> <i class="fas fa-palette"></i> Estilos del sitio</header>
        <div class="uk-overflow-auto">     
             <table class="uk-table uk-table-striped ">
         <thead>    
             <tr>
                <th>Color de fondo</th>
                <th>color secundario</th>
                <th>color primario</th>
                <th>Barra de navegación</th>
                <th>texto</th>
                <th>marcas de agua</th>
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

        <div class="modal__header">estilos del sitio</div>
   
        <div class="uk-modal-body" uk-overflow-auto>
          <form method="post" action="negocio/editar_estilos.php/">
              <label class="datos"><i class="fas fa-fill-drip"></i>Color de fondo</label>
                <input  name="body" type="color" placeholder="Ingrese color de fondo" value="<?php echo $mostrar['0'] ?>" >
                
               <label class="datos"><i class="fas fa-fill-drip"></i>Color primario</label>
                <input name="color3" type="color" placeholder="Ingrese otro color" value="<?php echo $mostrar['2'] ?>">
                
            <label class="datos"><i class="fas fa-fill-drip"></i>Color secundario</label>  
               <input  name="color2" type="color" placeholder="Ingrese un color" value="<?php echo $mostrar['1'] ?>"  >
               
               <label class="datos"><i class="fas fa-fill-drip"></i>barra de navegación</label>    
               <input  name="navbar" type="color" placeholder="Ingrese color del navbar" value="<?php echo $mostrar['3'] ?>" >
               <label class="datos"><i class="fas fa-eye-dropper"></i>texto</label>
               <input  name="texto" type="color" placeholder="Ingrese color de texto" value="<?php echo $mostrar['4'] ?>" >
                <label class="datos"><i class="fas fa-eye-dropper"></i>marcas de agua</label>
               <input  name="placeholder" type='color' placeholder="Ingrese el color de marca de agua" value="<?php echo $mostrar['7'] ?>" >
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
