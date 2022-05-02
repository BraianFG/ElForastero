<div class="mini-post card"  data-id="<?php echo $productosp1['id'] ?>" id="<?php echo $productosp1['id'] ?>" >
       <a href="#" class="image"><img href="<?php echo '#',$productosp1['modal1'] ?>" uk-toggle src="https://img.gs/jhcplzwzdm/120x100,3x,quality=high,format=JPEG,crop,quality=high/https://tiendaelforastero.com.ar/<?php echo 'images/', $productosp1['imagen'] ?>" class="card-img-top" alt="..." loading="edager"></a>
      <div id="<?php echo $productosp1['id'] ?>" class="card-body">
        <h3 class="card-title"><?php echo $productosp1['id'], '. '?><?php echo $productosp1['nombre'] ?></h3>
        
    <div class="detalles">  
         <h5 class="card-text " data-precio=<?php echo $productosp1['precio'] ?> ><?php echo '$',$productosp1['precio'] ?></h5>
           <p class="card-text "><?php echo 'Cantidad : ', $productosp1['cantidad'] ?></p>
        <p class="card-text "><?php echo 'descripción : ', $productosp1['descripcion'] ?></p>
   </div>  
   
        <ul class="mini-post_lista">
         <?php include 'botones.php'?>
        </ul> 
      </div>
    </div>