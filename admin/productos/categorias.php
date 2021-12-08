<?php
 include '../database.php';
?>
<div class="uk-container  uk-container-large wrap">
    <div class="uk-overflow-auto">     
    <table class="uk-table uk-table-striped ">
              <caption> <i class="fas fa-store"></i> categorias de productos</caption>
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
            
    <ul class="lista">
         <li class="lista__item"><a href="#eliminar__producto-categorias"  uk-toggle class="button primary"> <i class="fas fa-trash"></i> Eliminar</a></p></li>
          <li class="lista__item"><a href="#agregar__producto-categorias"  uk-toggle class="button primary"> <i class="fas fa-plus"></i> Agregar</a></p></li>
          <li class="lista__item"><a href="#editar__productos-categorias"  uk-toggle class="button primary"> <i class="fas fa-pen"></i> Editar</a></li>
     </ul>      
       <?php $productos = 'SELECT * FROM `categorias` ORDER BY `id` ASC' ;     
          $result3 = mysqli_query($conn,$productos);
        
        ?>
        
        
         <?php
           while($ver = mysqli_fetch_array($result3)){
      
         ?>  
    

<div id="editar__productos-categorias" uk-modal>
    <div class="uk-modal-dialog">

        <button class="uk-modal-close-default" type="button" uk-close></button>

        <div class="modal__header">Editar categoria</div>
   
        <div class="uk-modal-body" id="productos" uk-overflow-auto>
          <form method="post" action="productos/editar_categorias.php/">
         <input  name="id" type="number" min="1" placeholder="Ingrese id de producto" value="<?php echo $ver[0] ?>" >
               <input  name="nombre" type="text" placeholder="Ingrese nombre de producto" value="<?php echo $ver[1] ?>" required >
        </div>

        <div class="uk-modal-footer uk-text-right">
          <button type="submit" class="button primary compradores"  value="editar_categorias"> <i class="fas fa-pen"></i> Editar categoria</button>
           <a href="#editar__productos-categorias" class="editar_link" uk-toggle>Siguiente <i class="fas fa-arrow-right"></i></a>
          </form>
        </div>
    </div>
</div>

<?php
}
?>

 <div id="agregar__producto-categorias" uk-modal>
    <div class="uk-modal-dialog">

        <button class="uk-modal-close-default" type="button" uk-close></button>

        <div class="modal__header">Agregar Categoria</div>
   
        <div class="uk-modal-body" uk-overflow-auto>
          <form method="post" action="productos/agregar_categorias.php">
             <input name="id" type="number" placeholder="Ingrese id de la categoría" min="1" value="" required >
            <input name="nombre" type="text" placeholder="Ingrese el nombre de la categoría" value="" required >
          

        </div>

        <div class="uk-modal-footer uk-text-right">
            <button type="submit" class="button primary compradores" value="agregar_categoria"> <i class="fas fa-plus"></i> Cargar categoria</button>
            </form>
        </div>
    </div>
</div>

<div id="eliminar__producto-categorias" uk-modal>
    <div class="uk-modal-dialog">

        <button class="uk-modal-close-default" type="button" uk-close></button>

        <div class="modal__header">Eliminar categoría</div>
   
        <div class="uk-modal-body" uk-overflow-auto>
          <form method="post" action="productos/eliminar_categorias.php/">
            <input  name="id" type="number" placeholder="Ingrese id de la categoría" min="1" value="" required  >

        </div>

        <div class="uk-modal-footer uk-text-right">
            <button type="submit" class="button primary compradores" value="enviar" required > <i class="fas fa-trash"></i> Confirmar</button>
            </form>
        </div>
    </div>
</div>

