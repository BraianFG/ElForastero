<div class="mini-post card uk-container"  data-id="<?php echo $productosp1['0'] ?>"  id="<?php echo $productosp1['id'] ?>">
       <a href="#<?php echo 'abc__',$productosp1['id'] ,$productosp1['modal1'] ?>" title="ver imagen" uk-toggle class="image"><img class="lazyload card-img-top" src="images/blanco.webp"data-src="https://img.gs/jhcplzwzdm/3x,150x150,quality=high/http://tiendaelforastero.com.ar/images/<?php echo $productosp1['imagen'] ?>" alt="<?php echo  $productosp1['nombre'] ?>" class="card-img-top" width="600" heigh="300" onerror="this.src='images/blanco.webp';"></a>
      <div class="card-body">
        <h3 class="card-title"><?php echo $productosp1['id'], '. '?><?php echo $productosp1['nombre'] ?></h3>
        
    <div class="detalles">  
         <p class="card-text card-text-precio" data-precio=<?php echo $productosp1['precio'] ?> ><?php echo '$',$productosp1['precio'] ?></p>
           <p class="card-text "><?php echo 'Disponible : ', $productosp1['cantidad'] ?></p>
        <p class="card-text "><?php echo 'descripción : ', $productosp1['descripcion'] ?></p>
   </div>  
   <div class="reaccion">
       <button type="button" id="reaccion_<?php echo $productosp1['0'] ?>" alt="reacionar">+</button><p id="reacciones_<?php echo $productosp1['0'] ?>"></p>
   </div>
        <ul class="mini-post_lista">
         <?php include 'botones.php'?>
        </ul> 
      </div>
       <p class="uk-text-small">Art. actualizado: <?php echo $productosp1['fecha2'] , ' ', $productosp1['hora2'] ?></p>
    </div>
    