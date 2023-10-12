<div class="mini-post card uk-container mini-post_<?php echo $productosp1['id'] ?>" role="article"  data-id="<?php echo $productosp1['0'] ?>"  id="<?php echo $productosp1['id'] ?>">
       <a href="#<?php echo 'abc__',$productosp1['id'] ,$productosp1['modal1'] ?>" title="ver imagen" uk-toggle class="image"><img class="lazyload card-img-top" src="images/blanco.webp"data-src="https://img.gs/jhcplzwzdm/3x,150x150,quality=high/http://tiendaelforastero.com.ar/images/<?php echo $productosp1['imagen'] ?>" alt="<?php echo  $productosp1['nombre'] ?>" class="card-img-top" data-id="imagen"id="imagen_<?php echo $productosp1['id'] ?>"  width="150" heigh="150" onerror="this.src='images/blanco.webp';"></a>
      <div class="card-body">
        <h3 class="card-title"><?php echo $productosp1['id'], '. '?><?php echo $productosp1['nombre'] ?> <a id="favoritos_<?php echo $productosp1['0'] ?>"><img src="icons/bookmark-regular.svg" class="icon-star" width="10" height="10" alt="favoritos"/></a></h3>
        
    <div class="detalles">  
         <p class="card-text card-text-precio" data-precio=<?php echo $productosp1['precio'] ?> ><?php echo '$',$productosp1['precio'] ?></p>
           <p class="card-text "><?php echo 'Disponible : ', $productosp1['cantidad'] ?></p>
        <p class="card-text "><?php echo 'descripción : ', $productosp1['descripcion'] ?></p>
   </div>  
     <div class="uk-flex-inline">
    
       <img src="icons/heart-regular.svg" class="icon-heart" id="reaccion_<?php echo $productosp1['0'] ?>" width="10" height="10" alt="reacionar"><p id="reacciones_<?php echo $productosp1['0'] ?>"><?php echo $productosp1['14'] ?></p>

     </div>
        <div class="mini-post_lista">
         <?php include 'botones.php'?>
        </div> 
      </div>
       <p class="uk-text-small">Art. actualizado: <?php echo $productosp1['fecha2'] , ' ', $productosp1['hora2'] ?></p>
    </div>
    
    <?php include "reaccionar.php" ?>
    <?php include "agregarFavoritos.php" ?>