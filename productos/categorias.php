
<div id="categorias" class="uk-container  uk-container-large wrap">
    <ul class="lista">
          <li class="lista__item"><a href="#agregar__producto-categorias"  uk-toggle class="button primary"> <i class="fas fa-plus"></i> Agregar</a></p></li>
     </ul>      
  <header class="caption"> <i class="fas fa-store"></i> categorias de productos</header>     
    <div class="uk-overflow-auto">     
    <table class="uk-table uk-table-striped ">
         <thead>    
             <tr>
                <th>NOMBRE</th>
                <th>ELIMINAR</th>
                <th>EDITAR</th>
            </tr>
        </thead>        
   <?php $productosp1 = 'SELECT * FROM `categorias` ORDER BY `nombre` ASC' ;     
          $result3 = mysqli_query($conn,$productosp1);
        
        ?>
        
        
         <?php
           while($mostrar_productosp1 = mysqli_fetch_array($result3)){
         ?>    
         <tbody>
              <tr>
                   <td><?php echo $mostrar_productosp1['1'] ?></td>
                 <td><a href="#eliminar__categorias_<?php echo $mostrar_productosp1['0'] ?>" uk-toggle class="button primary"><i class="fas fa-trash "></i> Eliminar</a></td>  
                 <td><a href="#editar__productos-categorias_<?php echo $mostrar_productosp1['0'] ?>"  uk-toggle class="button primary"> <i class="fas fa-pen"></i> Editar</a></td>

              </tr>
            </tbody>
            
  <?php
 }
?>  
            </table>
        </div>
        
       <?php $productos = 'SELECT * FROM `categorias` ORDER BY `id` ASC' ;     
          $result3 = mysqli_query($conn,$productos);
        
        ?>
        
        
         <?php
           while($ver0 = mysqli_fetch_array($result3)){
      
         ?>  
    

<div id="editar__productos-categorias_<?php echo $ver0['0']?>" uk-modal>
    <div class="uk-modal-dialog">

        <button class="uk-modal-close-default" type="button" uk-close></button>

        <div class="modal__header">Editar rubro</div>
   
        <div class="uk-modal-body" id="productos" uk-overflow-auto>
          <form method="POST" action="return false" onsubmit="return false">
        <label class="datos">Número de rubro</label>           
         <input  id="id__<?php echo $ver0['0']?>" name="id" type="number" min="1" placeholder="Ingrese numero de categoría" value="<?php echo $ver0[0] ?>" >
          <label class="datos">Ingrese nombrel rubro</label> 
               <input  id="nombre__<?php echo $ver0['0']?>" name="nombre" type="text" placeholder="Ingrese nombre de la categoría" value="<?php echo $ver0[1] ?>" required >
        </div>

        <div class="uk-modal-footer uk-text-right">
            
          <button onclick="Validar(document.getElementById('id__<?php echo $ver0[0] ?>').value, document.getElementById('nombre__<?php echo $ver0[0] ?>').value);"  class="button primary compradores"  value="editar_categorias"> <i class="fas fa-pen"></i> Editar categoria</button>
          <div id="resultado"></div>
          </form>
        </div>
    </div>
</div>
      <script>
            function Validar(id, nombre)
            {
                $.ajax({
                    url: "productos/editar_categorias.php",
                    type: "POST",
                    data: "id="+id+"&nombre="+nombre,
                    success: function(resp){
                    $('#resultado').html(resp)
                    }       
                });
                
                alertify.notify('categoría editada con exito','success',8);
            }
        </script>

<div id="eliminar__categorias_<?php echo $ver0['0'] ?>" uk-modal>
    <div class="uk-modal-dialog">
     <div class="uk-modal-body">      
    <h3 class="uk-text-center">¿Desea eliminar la categoría <?php echo $ver0['1'] ?>?</h3>
      <button class="uk-modal-close-default" type="button" uk-close></button>
      <div class="eliminar">
            <a class="button primary eliminar__si" onclick="eliminar((id =<?php echo $ver0['0'] ?>)) ">Si <i class="fas fa-check"></i></a>
            <a class="button primary  uk-modal-close">No <i class="fas fa-times"></i></a>
     </div>     
      </div>    
    </div>
</div>
<script>
    function eliminar(id){
       $.post( "productos/eliminar_categorias.php", { id : id , nombre:"<?php echo $ver0['1']?>"} );
        alertify.notify('categoría eliminada con exito','success',8);

    }
</script>

<?php
}
?>

 <div id="agregar__producto-categorias" uk-modal>
    <div class="uk-modal-dialog">

        <button class="uk-modal-close-default" type="button" uk-close></button>

        <div class="modal__header">Agregar categoría</div>
   
        <div class="uk-modal-body" uk-overflow-auto>
          <form method="post" action="productos/agregar_categorias.php">
            <label class="datos">Ingrese nombre de la categoría</label> 
            <input name="nombre" type="text" placeholder="Ingrese el nombre de la categoría" value="" required >
          

        </div>

        <div class="uk-modal-footer uk-text-right">
            <button type="submit" class="button primary compradores" value="agregar_categoria"> <i class="fas fa-plus"></i> Cargar categoria</button>
            </form>
        </div>
    </div>
</div>
