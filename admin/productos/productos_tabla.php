<?php include "../database.php"?>

<div class="uk-container  uk-container-large wrap">
    <div class="uk-overflow-auto">     
    <table class="uk-table uk-table-striped ">
              <caption> <i class="fas fa-store"> </i> Productos</caption>
         <thead>    
             <tr>
                <th>ID</th>
                <th>NOMBRE</th>
                <th>DESCRIPCÍÓN</th>
                <th>CANTIDAD</th>
                <th>PRECIO</th>
                <th>CATEGORIA</th>
                <th>IMAGEN</th>
                <th>IMAGEN01</th>
                <th>IMAGEN02</th>
                <th>IMAGEN03</th>
                <th>IMAGEN04</th>
                <th>MODAL1</th>
                <th>MODAL2</th>
                <th>MODAL3</th>
                <th>MODAL4</th>
                <th>MODAL5</th>
              </tr>
        </thead>        
        <?php $productosp1 = 'SELECT * FROM `productos` ORDER BY `id` ASC' ;     
          $result3 = mysqli_query($conn,$productosp1);
        
        ?>
        
        
         <?php
           while($mostrar_productosp1 = mysqli_fetch_array($result3)){
         ?>    
         <tbody>
              <tr>
                   <td><?php echo $mostrar_productosp1['0'] ?></td>
                   <td><?php echo $mostrar_productosp1['1'] ?></td>
                   <td><?php echo $mostrar_productosp1['2'] ?></td>
                   <td><?php echo $mostrar_productosp1['3'] ?></td>
                   <td><?php echo $mostrar_productosp1['4'] ?></td>
                   <td><?php echo $mostrar_productosp1['5'] ?></td>
                   <td><?php echo $mostrar_productosp1['6'] ?></td>
                   <td><?php echo $mostrar_productosp1['7'] ?></td>
                   <td><?php echo $mostrar_productosp1['8'] ?></td>
                   <td><?php echo $mostrar_productosp1['9'] ?></td>
                   <td><?php echo $mostrar_productosp1['10'] ?></td>
                   <td><?php echo $mostrar_productosp1['11'] ?></td>
                   <td><?php echo $mostrar_productosp1['12'] ?></td>
                   <td><?php echo $mostrar_productosp1['13'] ?></td>
                   <td><?php echo $mostrar_productosp1['14'] ?></td>
                   <td><?php echo $mostrar_productosp1['15'] ?></td>
              </tr>
            </tbody>
            
  <?php
 }
?>  
            </table>
            
       <?php $productos = 'SELECT * FROM `productos` ' ;     
          $result3 = mysqli_query($conn,$productos);
        
        ?>
        
        
         <?php
           while($ver = mysqli_fetch_array($result3)){
      
         ?>  

<div id="editar__productos" uk-modal>
    <div class="uk-modal-dialog">

        <button class="uk-modal-close-default" type="button" uk-close></button>

        <div class="modal__header">Editar producto</div>
   
        <div class="uk-modal-body" id="productos" uk-overflow-auto>
          <form method="post" action="productos/editar_productos.php/">
         <input  name="id" type="number" placeholder="Ingrese id de producto" value="<?php echo $ver[0] ?>" >
               <input  name="nombre" type="text" placeholder="Ingrese nombre de producto" value="<?php echo $ver[1] ?>" required >
              <input name="descripcion" type="text" placeholder="Ingrese una descripción " value="<?php echo $ver[2] ?>" >
                <input  name="cantidad" type="text" placeholder="Ingrese la cantidad" value="<?php echo $ver[3] ?>" required>
               <input  name="precio" type="number" placeholder="Ingrese el precio" value="<?php echo $ver[4] ?>" required>
           <div class="help">           
              <i a href="#categoria_popup_ver" uk-toggle class="fas fa-question-circle"></a></i><input  name="categoria" type="number" placeholder="Ingrese un numero de categoria" 
              value="<?php echo $ver[5] ?>" required>
           </div>     
           <div class="help">
              <i href="#imagenes_popup_ver" uk-toggle class="fas fa-question-circle"></i><input  name="imagen" type="text" placeholder="Ingrese el enlace a la imagen" value="<?php echo $ver[6] ?>" required>
              
           </div>      
              <input  name="imagen01" type="text" placeholder="Ingrese el enlace a la segunda imagen" value="<?php echo $ver[7] ?>">
              <input  name="imagen02" type="text" placeholder="Ingrese el enlace a la tercera imagen" value="<?php echo $ver[8] ?>">
              <input  name="imagen03" type="text" placeholder="Ingrese el enlace a la cuarta imagen" value="<?php echo $ver[9] ?>">
             <input  name="imagen04" type="text" placeholder="Ingrese el enlace a la quinta imagen" value="<?php echo $ver[10] ?>">
             <input  name="modal1" type="text" placeholder="Ingrese el enlace al primer popup" value="<?php echo $ver[11] ?>" required>
             <input  name="modal2" type="text" placeholder="Ingrese el enlace al segundo popup" value="<?php echo $ver[12] ?>">
             <input  name="modal3" type="text" placeholder="Ingrese el enlace al tercer popup" value="<?php echo $ver[13] ?>">
             <input  name="modal4" type="text" placeholder="Ingrese el enlace al cuarto popup" value="<?php echo $ver[14] ?>">
             <input  name="modal5" type="text" placeholder="Ingrese el enlace al quinto popup" value="<?php echo $ver[15] ?>">
          
        </div>

        <div class="uk-modal-footer uk-text-right">
          <button type="submit" class="button primary compradores" value="editar_productos"> <i class="fas fa-pen"></i> Editar producto</button>
           <a href="#editar__productos" class="editar_link" uk-toggle>Siguiente <i class="fas fa-arrow-right"></i> </a>
          </form>
        </div>
    </div>
</div>




<?php
}
?>

        </div>
        <ul class="lista">
         <li class="lista__item"><a href="#eliminar__productos"  uk-toggle class="button primary"> <i class="fas fa-trash "></i> Eliminar</a></p></li>
          <li class="lista__item"><a href="#agregar__productos"  uk-toggle class="button primary"> <i class="fas fa-plus "></i> Agregar</a></p></li>
         <li class="lista__item"><a href="#editar__productos" uk-toggle class="button primary"> <i class="fas fa-pen "></i> Editar</a></li>
        </ul>
</div>



  <div id="agregar__productos" uk-modal>
    <div class="uk-modal-dialog">

        <button class="uk-modal-close-default" type="button" uk-close></button>

        <div class="modal__header">Agregar producto</div>
   
        <div class="uk-modal-body" uk-overflow-auto>
          <form method="post" action="productos/agregar_productos.php/">
                <input  name="id" type="number" ng-model="number" min="1" placeholder="Ingrese id de producto" value="" required >
               <input  name="nombre" type="text" placeholder="Ingrese nombre de producto" value="" required >
              <input name="descripcion" type="text" placeholder="Ingrese una descripción " value="" >
                <input  name="cantidad" type="text" placeholder="Ingrese la cantidad" value="" required>
               <input  name="precio" min="1" type="number" placeholder="Ingrese el precio" value="" required>
         <div class="help">  
             <i href="#categoria_popup" uk-toggle class="fas fa-question-circle"></i> <input  name="categoria" type="number" min="1" placeholder="Ingrese un numero de categoria" value="" required>
          </div> 
            <div class="help">  
             <i href="#imagenes_popup" uk-toggle class="fas fa-question-circle"></i>
               <input  name="imagen" type="text" placeholder="Ingrese el enlace a la imagen" value="/images/" required>
             </div> 
              <input  name="imagen01" type="text" placeholder="Ingrese el enlace a la segunda imagen" value="">
              <input  name="imagen02" type="text" placeholder="Ingrese el enlace a la tercera imagen" value="">
              <input  name="imagen03" type="text" placeholder="Ingrese el enlace a la cuarta imagen" value="">
             <input  name="imagen04" type="text" placeholder="Ingrese el enlace a la quinta imagen" value="">
             <input  name="modal1" type="text" placeholder="Ingrese el enlace al primer popup" value="modal-group-1" required>
             <input  name="modal2" type="text" placeholder="Ingrese el enlace al segundo popup" value="">
             <input  name="modal3" type="text" placeholder="Ingrese el enlace al tercer popup" value="">
             <input  name="modal4" type="text" placeholder="Ingrese el enlace al cuarto popup" value="">
             <input  name="modal5" type="text" placeholder="Ingrese el enlace al quinto popup" value="">
          

        </div>

        <div class="uk-modal-footer uk-text-right">
             <button type="submit" class="button primary compradores" value="agregar_productos"> <i class="fas fa-plus"></i> Cargar producto</button>
            </form>
        </div>
    </div>
</div>

<div id="eliminar__productos" uk-modal>
    <div class="uk-modal-dialog">

        <button class="uk-modal-close-default" type="button" uk-close></button>

        <div class="modal__header">Eliminar producto</div>
   
        <div class="uk-modal-body" uk-overflow-auto>
          <form method="post" action="productos/eliminar_productos.php/">
            <input  name="id" type="number" placeholder="Ingrese id del producto a eliminar" value="" required  >


        </div>

        <div class="uk-modal-footer uk-text-right">
             <button type="submit" class="button primary compradores" value="enviar" onclick="compradores()" required > <i class="fas fa-trash"></i> Confirmar</button>
            </form>
        </div>
    </div>
</div>

<?php include 'categoria_popup.php' ?>
<?php include 'categoria_popup_ver.php' ?>
<?php include 'imagenes_popup.php' ?>
<?php include 'imagenes_popup_ver.php' ?>
<script>
 
</script>