   <div id="mp" class="uk-container  uk-container-large wrap">
     <header class="caption"><i class="fas fa-desktop"></i> Datos de Mercado Pago</header>     
        <div class="uk-overflow-auto">     
             <table class="uk-table uk-table-striped ">
         <thead>    
             <tr>
                <th>ACCESS TOKEN</th>
                <th>SDK</th>
                <th>COMISIÓN</th>
                <th>EDITAR</th>
              </tr>
        </thead>        
        <?php $negocio = 'SELECT * FROM `MercadoPago`' ;     
          $result = mysqli_query($conn,$negocio);
           while($mostrar = mysqli_fetch_array($result)){
         ?>    
         <tbody>
              <tr>
                   <td><?php echo $mostrar['1'] ?></td>
                   <td><?php echo $mostrar['2'] ?></td>
                   <td><?php echo $mostrar['3'],'%' ?></td>
                   <td><a  class="button primary" href="#editar__datos_mp" uk-toggle> <i class="fas fa-pen"></i> Editar</a></td>
              </tr>
            </tbody>
       <?php
         }
        ?> 
            </table>
        </div>    
    </div>
</div>

  <?php $negocio = 'SELECT * FROM `MercadoPago`' ;     
    $result = mysqli_query($conn,$negocio);
     while($mostrar = mysqli_fetch_array($result)){
   ?>    
  <div id="editar__datos_mp" uk-modal>
    <div class="uk-modal-dialog">

        <button class="uk-modal-close-default" type="button" uk-close></button>

        <div class="modal__header">Editar datos</div>
   
        <div class="uk-modal-body" uk-overflow-auto>
          <form method="post" action="MercadoPago/editar_mp.php/">
                
                <label class="datos">Access Token</label>
                <input name="AcessToken" type="text" placeholder="Ingrese el AccessToken" value="<?php echo $mostrar['1'] ?>">
                
                <label class="datos">SDK</label>
                <input name="sdk"  type="text" placeholder="Ingrese el sdk"  maxlength="250" value="<?php echo $mostrar['2'] ?>">
                
               <label class="datos">Comisión</label>    
               <input name="comision" type="text" placeholder="Ingrese el porcentaje de comisión" value="<?php echo $mostrar['3'] ?>" >
           </div>

        <div class="uk-modal-footer uk-text-right">
         <button type="submit" class="button primary compradores" value="enviar" > <i class="fas fa-pen"></i> Editar datos</button>
            </form>
    <?php
     }
    ?>
        </div>
    </div>
</div>        