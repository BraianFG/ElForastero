   <div id="transferencia" class="uk-container  uk-container-large wrap">
        <ul class="lista">
          <li class="lista__item"><a href="#agregar__datos-transferencia"  uk-toggle class="button primary"> <i class="fas fa-plus "></i> Agregar</a></p></li>
        </ul>
     <header class="caption"><i class="fas fa-desktop"></i> Datos para transferencia</header>     
        <div class="uk-overflow-auto">     
             <table class="uk-table uk-table-striped ">
         <thead>    
             <tr>
                <th>NOMBRE</th>
                <th>APELLIDO</th>
                <th>CUIT/CUIL</th>
                <th>BANCO O BILLETERA VIRTUAL</th>
                <th>CBU/CVU</th>
                <th>N° DE CUENTA</th>
                <th>ALIAS</th>
                <th>EDITAR</th>
                <th>ELIMINAR</th>
              </tr>
        </thead>        
        <?php $negocio = 'SELECT * FROM `transferencia`' ;     
          $result = mysqli_query($conn,$negocio);
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
                   <td><a  class="button primary" href="#editar__datos-transferencia" uk-toggle> <i class="fas fa-pen"></i> Editar</a></td>
                   <td><a  class="button primary" href="#eliminar__datos-transferencia-<?php echo $mostrar['4'] ?>" uk-toggle> <i class="fas fa-trash"></i>Eliminar</a></td>
              </tr>
            </tbody>
       <?php
         }
        ?> 
            </table>
        </div>    
    </div>
</div>

  <?php $negocio = 'SELECT * FROM `transferencia`' ;     
    $result = mysqli_query($conn,$negocio);
     while($mostrar = mysqli_fetch_array($result)){
   ?>    
  <div id="editar__datos-transferencia" uk-modal>
    <div class="uk-modal-dialog">

        <button class="uk-modal-close-default" type="button" uk-close></button>

        <div class="modal__header">Editar datos</div>
   
        <div class="uk-modal-body" uk-overflow-auto>
          <form method="post" action="transferencia/editar_transferencia.php/">
              
               <label class="datos">Nombre del títular</label>
                <input  name="nombre" type="text" placeholder="Ingrese el nombre/s del títular" value="<?php echo $mostrar['0'] ?>" >
                
                <label class="datos">Apellido del títular</label>
                <input name="apellido" type="text" placeholder="Ingrese apellido/s del títular" value="<?php echo $mostrar['1'] ?>">
                
                <label class="datos">N° de CUIT o CUIL</label>
                <input name="cuit"  type="number" placeholder="Ingrese su número de CUIL o CUIT"  maxlength="250" value="<?php echo $mostrar['2'] ?>">
                
               <label class="datos">Nombre del banco o Billetera digital</label>    
               <input name="banco" type="text" placeholder="Ingrese el nombre del banco o billetera digital a usar" value="<?php echo $mostrar['3'] ?>" >
               
               <label class="datos">CBU / CVU</label>
               <input  name="cbu" type="number" placeholder="Ingrese el número de CBU o CVU" value="<?php echo $mostrar['4'] ?>" >
               
               <label class="datos">N° de Cuenta</label>
               <input name="cuenta" type="number" placeholder="Ingrese el número de cuenta" value="<?php echo $mostrar['5'] ?>" >
               
                <label class="datos">Alias</label>
               <input name="alias" type="text" placeholder="Ingrese el alias de la cuenta" value="<?php echo $mostrar['6'] ?>" >
           </div>

        <div class="uk-modal-footer uk-text-right">
         <button type="submit" class="button primary compradores" value="enviar" > <i class="fas fa-pen"></i> Editar datos</button>
            </form>
        </div>
      </div>   
    </div>
    
  <div id="eliminar__datos-transferencia-<?php echo $mostrar['4'] ?>" uk-modal>
    <div class="uk-modal-dialog">

        <button class="uk-modal-close-default" type="button" uk-close></button>
   <div class="uk-modal-dialog">
     <div class="uk-modal-body">      
    <h3 class="uk-text-center">¿Desea elimminar esta cuenta?</h3>
      <div class="eliminar">
            <a class="button primary eliminar__si" onclick="eliminar_cuentaBancaria((cbu = <?php echo $mostrar['4'] ?>)) ">Si <i class="fas fa-check"></i></a>
            <a class="button primary  uk-modal-close">No <i class="fas fa-times"></i></a>
     </div>     
      </div>    
    </div>
        </div>
      </div>   
    
    <div id="agregar__datos-transferencia" uk-modal>
    <div class="uk-modal-dialog">

        <button class="uk-modal-close-default" type="button" uk-close></button>

        <div class="modal__header">agregar datos</div>
   
        <div class="uk-modal-body" uk-overflow-auto>
          <form method="post" action="transferencia/agregar_transferencia.php/">
              
               <label class="datos">Nombre del títular</label>
                <input  name="nombre" type="text" placeholder="Ingrese el nombre/s del títular" value="" >
                
                <label class="datos">Apellido del títular</label>
                <input name="apellido" type="text" placeholder="Ingrese apellido/s del títular" value="">
                
                <label class="datos">N° de CUIT o CUIL</label>
                <input name="cuit"  type="number" placeholder="Ingrese su número de CUIL o CUIT"  maxlength="250" value="">
                
               <label class="datos">Nombre del banco o Billetera digital</label>    
               <input name="banco" type="text" placeholder="Ingrese el nombre del banco o billetera digital a usar" value="" >
               
               <label class="datos">CBU / CVU</label>
               <input  name="cbu" type="number" placeholder="Ingrese el número de CBU o CVU" value="" >
               
               <label class="datos">N° de Cuenta</label>
               <input name="cuenta" type="number" placeholder="Ingrese el número de cuenta" value="" >
               
                <label class="datos">Alias</label>
               <input name="alias" type="text" placeholder="Ingrese el alias de la cuenta" value="" >
           </div>

        <div class="uk-modal-footer uk-text-right">
         <button type="submit" class="button primary compradores" value="enviar" > <i class="fas fa-pen"></i>Agregar datos</button>
            </form>
        </div>
      </div>   
    </div>
    
    <script>
    function eliminar_cuentaBancaria(cbu){
       $.post( "transferencia/eliminar_transferencia.php", { cbu : cbu } );
        alertify.notify('cuenta elimininada','success',8)

    }
    </script>

<?php
 }
?>