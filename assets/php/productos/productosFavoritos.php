<div class="mini-post card uk-container"  data-id="<?php echo $productosp1['0'] ?>"  id="<?php echo $productosp1['id'] ?>">
   <img class="lazyload card-img-top" src="images/blanco.webp"data-src="https://img.gs/jhcplzwzdm/3x,150x150,quality=high/http://tiendaelforastero.com.ar/images/<?php echo $productosp1['imagen'] ?>" alt="<?php echo  $productosp1['nombre'] ?>" class="card-img-top" width="600" heigh="300" onerror="this.src='images/blanco.webp';"></a>
      <div class="card-body">
        <h3 class="card-title"><?php echo $productosp1['0'], '. '?><?php echo $productosp1['nombre'] ?></h3>
        
    <div class="detalles">  
         <p class="card-text card-text-precio" data-precio=<?php echo $productosp1['precio'] ?> ><?php echo '$',$productosp1['precio'] ?></p>
        <ul class="mini-post_lista">
         <?php include 'botonFavorito.php'?>
        </ul> 
      </div>
    </div>
</div>    
    