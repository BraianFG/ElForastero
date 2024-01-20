   <div id="localidad" class="uk-container  uk-container-large wrap">
     <header class="caption"><i class="fas fa-city"></i>Localidad por defecto</header>     
        <div class="uk-overflow-auto">     
             <table class="uk-table uk-table-striped ">
         <thead>    
             <tr>
                <th>LOCALIDAD</th>
                <th>CÓDIGO POSTAL</th>
                <th>CÓDIGO DE ARÉA</th>
                <th>EDITAR</th>
              </tr>
        </thead>        
        <?php $negocio = 'SELECT * FROM `localidad`' ;     
          $result = mysqli_query($conn,$negocio);
           while($mostrar = mysqli_fetch_array($result)){
         ?>    
         <tbody>
              <tr>
                   <td><?php echo $mostrar['1'] ?></td>
                   <td><?php echo $mostrar['2'] ?></td>
                   <td><?php echo $mostrar['3'] ?></td>
                   <td><a  class="button primary" href="#editar__datos-localidad" uk-toggle> <i class="fas fa-pen"></i> Editar</a></td>
              </tr>
            </tbody>
       <?php
         }
        ?> 
            </table>
        </div>    
    </div>
</div>

  <?php $negocio = 'SELECT * FROM `localidad`' ;     
    $result = mysqli_query($conn,$negocio);
     while($mostrar = mysqli_fetch_array($result)){
   ?>    
  <div id="editar__datos-localidad" uk-modal>
    <div class="uk-modal-dialog">

        <button class="uk-modal-close-default" type="button" uk-close></button>

        <div class="modal__header">Editar datos</div>
   
        <div class="uk-modal-body" uk-overflow-auto>
          <form method="post" action="localidad/editar_localidad.php/">
                
                <label class="datos"><i class="fas fa-city"></i> Localidad</label>
                <input name="localidad" type="text" placeholder="Ingrese su localidad" value="<?php echo $mostrar['1'] ?>">
                
                <label class="datos"><i class="fas fa-envelope"></i> Código postal</label>
                <input name="codPostal"  type="number" placeholder="Ingrese el código postal"  maxlength="250" value="<?php echo $mostrar['2'] ?>">
                
               <label class="datos"><i class="fas fa-phone"></i> Código de aréa</label>
                <input name="codArea"  type="number" placeholder="Ingrese el código de aréa"  maxlength="250" value="<?php echo $mostrar['3'] ?>">
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