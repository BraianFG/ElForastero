<?php include "../database.php"?>
<div id="producto" class="uk-container  uk-container-large wrap">
        <ul class="lista">
          <li class="lista__item"><a href="#agregar__productos"  uk-toggle class="button primary"> <i class="fas fa-plus "></i> Agregar</a></p></li>
        </ul>
 <header class="caption"><i class="fas fa-store"> </i> Productos</header>        
    <div class="uk-overflow-auto"> 
    <table class="uk-table uk-table-striped ">
         <thead>    
             <tr>
                <th>N°</th>
                <th>NOMBRE</th>
                <th>DESCRIPCÍÓN</th>
                <th>CANTIDAD</th>
                <th>PRECIO</th>
                <th>CATEGORIA</th>
                <th>IMAGEN</th>
                <th>IMAGEN01</th>
                <th>IMAGEN02</th>
                <th>MODAL</th>
                <th>ELIMINAR</th>
                <th>EDITAR</th>
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
                   <td><?php echo '$ ',$mostrar_productosp1['4'] ?></td>
                   <td><?php echo $mostrar_productosp1['5'] ?></td>
                   <td><a href="images/<?php echo $mostrar_productosp1['imagen'] ?>" target="_Blank"><img class="img__producto"  src="/images/<?php echo $mostrar_productosp1['imagen'] ?>" lazzy="loading" onerror="this.style.display='none'"/></a></td>
                   
                   <td><a href="images/<?php echo $mostrar_productosp1['imagen01'] ?>" target="_Blank"> <img class="img__producto" src="/images/<?php echo $mostrar_productosp1['imagen01'] ?>" loading="lazzy" onerror="this.style.display='none'"/></a></td>
                   
                   <td><a href="images/<?php echo $mostrar_productosp1['imagen02'] ?>" target="_Blank"> <img class="img__producto" src="/images/<?php echo $mostrar_productosp1['imagen02'] ?>" loading="lazzy" onerror="this.style.display='none'" /></a></td>
                   
                   <td><?php echo $mostrar_productosp1['modal1'] ?></td>
                   <td><a href="#eliminar__productos_<?php echo $mostrar_productosp1['0'] ?>" uk-toggle class="button primary"> <i class="fas fa-trash "></i> Eliminar</a></td>
                    <td><a href="#editar__productos_<?php echo $mostrar_productosp1['0'] ?>" uk-toggle class="button primary"> <i class="fas fa-edit "></i>Editar</a></td>
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


<div id="editar__productos_<?php echo $ver['0'] ?>" uk-modal>
    <div class="uk-modal-dialog">

        <button class="uk-modal-close-default" type="button" uk-close></button>

        <div class="modal__header">Editar producto</div>
   
       <div class="uk-modal-body" id="productos" uk-overflow-auto>
          <form method="POST" action="return false" onsubmit="return false">
              
        <label class="datos">Número de producto</label> 
         <input  id="id_<?php echo $ver['0'] ?>" name="id" type="number" placeholder="Número de producto" value="<?php echo $ver[0] ?>" required >
         
         <label class="datos">Nombre del producto</label> 
         <input id="nombre_<?php echo $ver['0'] ?>" name="nombre" type="text" placeholder="Ingrese nombre de producto" value="<?php echo $ver[1] ?>" required >
           
         <label class="datos">Descripción del producto</label> 
         <textarea maxlength="100" id="descripcion_<?php echo $ver['0'] ?>" class="descripcion" name="descripcion" placeholder="Ingrese una descripción"><?php echo $ver[2] ?></textarea>
              
         <label class="cantidad" class="datos">Cantidad disponible</label> 
         <input  id="cantidad_<?php echo $ver['0'] ?>" type="text" placeholder="Ingrese la cantidad" value="<?php echo $ver[3] ?>" required>
         
         <label class="datos">Precio del producto</label>   
         <input id="precio_<?php echo $ver['0'] ?>" name="precio" type="number" placeholder="Ingrese el precio" value="<?php echo $ver[4] ?>" required>
         
        <label class="datos">Categoría</label> 
         <input id="categoria_<?php echo $ver['0'] ?>" name="categoria" type="text" placeholder="Ingrese la categoria" value="<?php echo $ver[5] ?>" required>
         
        <label class="datos">Enlace a la primera imagen</label>  
           <div class="help">
              <i href="#imagenes_popup_ver" uk-toggle class="fas fa-question-circle"></i><input  name="imagen" id="imagen_<?php echo $ver['0'] ?>" type="text" placeholder="Ingrese el enlace a la imagen" value="<?php echo $ver[6] ?>" required>
              
           </div>
           
     <label class="datos">Enlace a la segunda imagen</label>
       <input  id="imagen01_<?php echo $ver['0'] ?>" name="imagen01" type="text" placeholder="Ingrese el enlace a la segunda imagen" value="<?php echo $ver[7] ?>">
       
   <label class="datos">Enlace a la tercera imagen</label>
    <input id="imagen02_<?php echo $ver['0'] ?>" name="imagen02" type="text" placeholder="Ingrese el enlace a la tercera imagen" value="<?php echo $ver[8] ?>">
    
    
     <label class="datos">Enlace al modal</label>         
     <input  id="modal1_<?php echo $ver['0'] ?>" name="modal1" type="text" placeholder="Ingrese el enlace al primer modal" value="<?php echo $ver['modal1'] ?>" required>
        </div>

        <div class="uk-modal-footer uk-text-right">
          <button onclick="Hola(document.getElementById('id_<?php echo $ver['0'] ?>').value, document.getElementById('nombre_<?php echo $ver['0'] ?>').value,document.getElementById('descripcion_<?php echo $ver['0'] ?>').value,document.getElementById('cantidad_<?php echo $ver['0'] ?>').value,document.getElementById('precio_<?php echo $ver['0'] ?>').value,document.getElementById('categoria_<?php echo $ver['0'] ?>').value,document.getElementById('imagen_<?php echo $ver['0'] ?>').value,document.getElementById('imagen01_<?php echo $ver['0'] ?>').value,document.getElementById('imagen02_<?php echo $ver['0'] ?>').value,document.getElementById('modal1_<?php echo $ver['0'] ?>').value);" data-id="<?php echo $ver[0] ?>"class="button primary compradores"  value="editar_productos"> <i class="fas fa-pen"></i> Editar producto</button>
          <div id="resultado"></div>
          </form>
        </div>
    </div>
</div>

<div id="eliminar__productos_<?php echo $ver['0'] ?>" uk-modal>
    <div class="uk-modal-dialog">
     <div class="uk-modal-body">      
    <h3 class="uk-text-center">¿Desea eliminar a este producto?</h3>
      <button class="uk-modal-close-default" type="button" uk-close></button>
      <div class="eliminar">
            <a class="button primary eliminar__si" onclick="eliminar_producto((id =<?php echo $ver['0'] ?>)) ">Si <i class="fas fa-check"></i></a>
            <a class="button primary  uk-modal-close">No <i class="fas fa-times"></i></a>
     </div>     
      </div>    
    </div>
</div>

<?php
}
?>
        </div>
</div>



  <div id="agregar__productos" uk-modal>
    <div class="uk-modal-dialog">

        <button class="uk-modal-close-default" type="button" uk-close></button>

        <div class="modal__header">Agregar producto</div>
   
        <div class="uk-modal-body" uk-overflow-auto>
          <form method="post" action="productos/agregar_productos.php/">
              
            <label class="datos">Ingrese número del producto</label>
            <input  name="id" type="number" ng-model="number" min="1" placeholder="Ingrese número de producto" value="" required >
                
            <label class="datos">Ingrese nombre del producto</label>    
             <input  name="nombre" type="text" placeholder="Ingrese nombre de producto" value="" required >
             
            <label class="datos">Ingrese una descripción</label>   
            <textarea maxlength="100" class="descripcion" name="descripcion" placeholder="Ingrese una descripción"></textarea>
   
              
            <label class="datos">Ingrese cantidad disponible</label> 
            <input  name="cantidad" type="text" placeholder="Ingrese la cantidad" value="" required>
            
             <label class="datos">Ingrese el precio</label> 
              <input  name="precio" min="1" type="number" placeholder="Ingrese el precio" value="" required>
            
         <label class="datos">Seleccione el nombre de categoría</label>  
         <select name="categoria">  
         <?php $productosp1 = 'SELECT * FROM `categorias` ORDER BY `id` ASC' ;     
               $result3 = mysqli_query($conn,$productosp1);

           while($mostrar_productosp1 = mysqli_fetch_array($result3)){
         ?>   
            <option style="width: 100%;display: block;margin: auto;"><?php echo $mostrar_productosp1['nombre']?></option>
       <?php 
           }
         ?>    
          </select> 
         
         
          <label class="datos">Ingrese enlace a la primera imagen</label> 
        <div class="help">  
          <i href="#imagenes_popup" uk-toggle class="fas fa-question-circle"></i>
          <input  name="imagen" type="text" placeholder="Ingrese el enlace a la imagen" value="" required>
         </div> 
             
        <label class="datos">Ingrese enlace a la segunda imagen</label>
        <input  name="imagen01" type="text" placeholder="Ingrese el enlace a la segunda imagen" value="">
              
        <label class="datos">Ingrese enlace a la tercera imagen</label>
        <input  name="imagen02" type="text" placeholder="Ingrese el enlace a la tercera imagen" value="">
       
       <label class="datos">Ingrese enlace al modal</label>
       <input  name="modal1" type="text" placeholder="Ingrese el enlace al primer modal" value="">

        </div>

        <div class="uk-modal-footer uk-text-right">
             <button type="submit" class="button primary compradores" value="agregar_productos"> <i class="fas fa-plus"></i> Cargar producto</button>
            </form>
        </div>
    </div>
</div>


<?php include 'imagenes_popup.php' ?>
<?php include 'imagenes_popup_ver.php' ?>

<script>
    function eliminar_producto(id){
       $.post( "productos/eliminar_productos.php", { id : id } );
        alertify.notify('producto eliminado con exito','success',8)

    }
</script>

<script>
function Hola(id,nombre,descripcion,cantidad,precio,categoria,imagen,imagen01,imagen02,modal1) {
     var parametros = {"id":id,"nombre":nombre,"descripcion":descripcion,"cantidad":cantidad,"precio":precio,"categoria":categoria,"imagen":imagen,"imagen01":imagen01,"imagen02":imagen02,"modal1":modal1};
        {
            $.ajax({
                url: "productos/editar_productos.php",
                type: "POST",
                data: parametros,
                success: function(resp){
                 $('#resultados').html(resp)
                 alertify.notify('cambios aplicados con exito','success',8)
                }      
            });
        }
}
</script>
