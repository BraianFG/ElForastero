<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js" integrity="sha512-qZvrmS2ekKPF2mSznTQsxqPgnpkI4DNTlrdUmTzrDgektczlKNRRhy5X5AAOnx5S09ydFYWWNSfcEqDTTHgtNA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<div id="producto" class="uk-container  uk-container-large wrap">
        <ul class="lista">
         <li class="lista__item"><a class="button primary" href="productos/fpdf/fpdf/Lista.php" >Descargar lista</a></li>
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
                   
                   <td><a href="https://img.gs/jhcplzwzdm/3x,130,quality=high/http://tiendaelforastero.com.ar/images/<?php echo $mostrar_productosp1['imagen'] ?>" target="_Blank"><img class="img__producto"  src="https://img.gs/jhcplzwzdm/3x,130,quality=high/http://tiendaelforastero.com.ar/images/<?php echo $mostrar_productosp1['imagen'] ?>" lazzy="loading" onerror="this.src='../../images/blanco.webp'" /></a></td>
                   
                   <td><a href="https://img.gs/jhcplzwzdm/3x,130,quality=high/http://tiendaelforastero.com.ar/images/<?php echo $mostrar_productosp1['imagen01'] ?>" target="_Blank"> <img class="img__producto" src="https://img.gs/jhcplzwzdm/3x,130,quality=high/http://tiendaelforastero.com.ar/mcmasajes/images/<?php echo $mostrar_productosp1['imagen01'] ?>" loading="lazzy"onerror="this.src='../../images/blanco.webp'"  /></a></td>
                   
                   <td><a href="https://img.gs/jhcplzwzdm/3x,130,quality=high/http://tiendaelforastero.com.ar/images/<?php echo $mostrar_productosp1['imagen02'] ?>" target="_Blank"> <img class="img__producto" src="https://img.gs/jhcplzwzdm/3x,130,quality=high/http://tiendaelforastero.com.ar/images/<?php echo $mostrar_productosp1['imagen02'] ?>" loading="lazzy" onerror="this.src='../../images/blanco.webp'"  /></a></td>
                   
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
          <form method="POST" action="productos/editar_productos.php" enctype="multipart/form-data">
              
        <label class="datos">Número de producto</label> 
         <input name="id" type="number" placeholder="Número de producto" value="<?php echo $ver[0] ?>" required >
         
         <label class="datos">Nombre del producto</label> 
         <input  name="nombre" type="text" placeholder="Ingrese nombre de producto" value="<?php echo $ver[1] ?>" required >
           
         <label class="datos">Descripción del producto</label> 
         <textarea maxlength="100" id="descripcion_<?php echo $ver['0'] ?>" class="descripcion" name="descripcion" placeholder="Ingrese una descripción"><?php echo $ver[2] ?></textarea>
              
         <label class="datos">Cantidad disponible</label> 
         <input name="cantidad" type="text" placeholder="Ingrese la cantidad" value="<?php echo $ver[3] ?>" required>
         
         <label class="datos">Precio del producto</label>   
         <input name="precio" type="number" placeholder="Ingrese el precio" value="<?php echo $ver[4] ?>" required>
         
        <label class="datos">Categoría</label> 
         <input name="categoria" type="text" placeholder="Ingrese nombre de categoria" value="<?php echo $ver[5] ?>" required >
         
          <label class="datos">Suba la primer imagen</label> 
          <input type="file"  class="imagen" accept="image/* "  name="imagen">
          <img onclick="eliminar_imagen<?php echo $ver['0'] ?>(id='<?php echo $ver['id']?>')" onerror="this.style.display='none'" src="../../images/<?php echo $ver[6] ?>" loading="lazzy" class="productos__images"> 
          <i onclick="eliminar_imagen<?php echo $ver['0'] ?>()" class="fa-solid fa-trash"></i>

         <label class="datos">Suba la segunda imagen</label> 
          <input class="imagen" type="file" accept="image/* "  name="imagen01">   
          <img  onclick="eliminar_imagen01<?php echo $ver['0'] ?>(id='<?php echo $ver['id']?>',)" onerror="this.style.display='none'" src="../../images/<?php echo $ver[7] ?>" loading="lazzy" class="productos__images">
          <i onclick="eliminar_imagen01<?php echo $ver['0'] ?>()" class="fa-solid fa-trash"></i>

          
     <div>
        <label class="datos">Suba la tercera imagen</label> 
          <input class="imagen" type="file" accept="image/* "  name="imagen02" >
          <img onerror="this.style.display='none'" loading="lazzy" src="../../images/<?php echo $ver[8] ?>" class="productos__images"> 
          <i onclick="eliminar_imagen02<?php echo $ver['0'] ?>()" class="fa-solid fa-trash"></i>
     </div>     

        </div>

        <div class="uk-modal-footer uk-text-right">
        <div class="fecha">
            <p class="datos">Última edición: <?php echo  $ver['fecha2'],' ', ' , ' ,' ',$ver['hora2']?></br>
            Fecha de públicación: <?php echo  $ver['fecha1'],' ', ' , ' ,' ',$ver['hora1']?></p>
        </div>   
          <button type="submit" class="button primary compradores"><i class="fas fa-pen"></i> Editar producto</button>
          <div id="resultado"></div>
          </form>
        </div>
    </div>
</div>

<div id="eliminar__productos_<?php echo $ver['0'] ?>" uk-modal>
    <div class="uk-modal-dialog">
     <div class="uk-modal-body">      
    <h3 class="uk-text-center">¿Desea eliminar el artículo <?php echo $ver['1'] ?>?</h3>
      <button class="uk-modal-close-default" type="button" uk-close></button>
      <div class="eliminar">
            <a class="button primary eliminar__si" onclick="eliminar_producto_<?php echo $ver['0'] ?>() ">Si <i class="fas fa-check"></i></a>
            <a class="button primary  uk-modal-close">No <i class="fas fa-times"></i></a>
     </div>     
      </div>    
    </div>
</div>

<script>
    function eliminar_producto_<?php echo $ver['0'] ?>(){
       $.post( "productos/eliminar_productos.php", { id_producto : "<?php echo $ver['0'] ?>"} );
        alertify.notify('producto eliminado con exito','success',8)

    }
    
   function eliminar_imagen<?php echo $ver["id"] ?>(){
       $.post( "productos/eliminar_imagen/eliminar_imagen.php", { id :"<?php echo $ver["id"] ?>",
       imagen:"<?php echo $ver["imagen"] ?>"});
        alertify.notify('Imagen eliminada', 'success', 5, );

    }
    
     function eliminar_imagen01<?php echo $ver["id"] ?>(){
       $.post( "productos/eliminar_imagen/eliminar_imagen01.php", { id :"<?php echo $ver["id"] ?>",
       imagen01:"<?php echo $ver["imagen01"] ?>"});
      alertify.notify('Imagen eliminada', 'success', 5, );

    }
    
    function eliminar_imagen02<?php echo $ver["id"] ?>(){
       $.post( "productos/eliminar_imagen/eliminar_imagen02.php", { id :"<?php echo $ver["id"] ?>",
          imagen02:"<?php echo $ver["imagen02"] ?>"});
      alertify.notify('Imagen eliminada', 'success', 5, );
    }
    
</script>

<?php
}
?>
        </div>
</div>

</div>



  <div id="agregar__productos" uk-modal>
    <div class="uk-modal-dialog">

        <button class="uk-modal-close-default" type="button" uk-close></button>

        <div class="modal__header">Agregar producto</div>
   
        <div class="uk-modal-body" uk-overflow-auto>
          <form method="post" action="productos/agregar_productos.php/"  enctype="multipart/form-data">
              
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
         
          <label class="datos">Suba la primer imagen</label> 
          <input type="file" accept="image/* "  name="imagen" id="imagen" required>
            
         <label class="datos">Suba la segunda imagen</label> 
          <input type="file"  accept="image/* "  name="imagen01" id="imagen01" > 
            
          <label class="datos">Suba la tercera imagen</label> 
          <input type="file" accept="image/* "  name="imagen02" id="imagen02" >
        </div>

        <div class="uk-modal-footer uk-text-right">
             <button type="submit" class="button primary compradores" value="agregar_productos"> <i class="fas fa-plus"></i> Cargar producto</button>
            </form>
        </div>
    </div>
</div>

