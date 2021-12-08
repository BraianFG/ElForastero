     <div id="categoria_popup" uk-modal>
       <div class="uk-modal-dialog">
     <button class="uk-modal-close-default" type="button" uk-close></button>
    <div class="modal__header">Categorias exitstentes</div>
    <div class="uk-modal-body" id="productos" uk-overflow-auto>
      <table class="uk-table uk-table-striped ">
         <thead>    
             <tr>
                <th>ID</th>
                <th>NOMBRE</th>
            </tr>
        </thead>        
   <?php $productosp1 = 'SELECT * FROM `categorias` ORDER BY `id` ASC' ;     
          $result3 = mysqli_query($conn,$productosp1);
        
        ?>
        
        
         <?php
           while($mostrar_productosp1 = mysqli_fetch_array($result3)){
         ?>    
         <tbody>
              <tr>
                   <td><?php echo $mostrar_productosp1['0'] ?></td>
                   <td><?php echo $mostrar_productosp1['1'] ?></td>
              </tr>
            </tbody>
            
  <?php
 }
?>  
    </table>
</div>    
<div class="uk-modal-footer uk-text-right">
<a href="#agregar__productos" uk-toggle class="button primary compradores"><i class="fas fa-undo-alt"></i>Volver</a>
</div>
</div>
</div>