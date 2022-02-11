
    <div class="card" data-id="<?php echo '0', $productosp1['id'] ?>" id="<?php echo $productosp1['id'] ?>">
    <a href="#" class="image"><img  href="<?php echo '#',$productosp1['modal1'] ?>" uk-toggle src="<?php echo 'images/', $productosp1['imagen'] ?>" class="card-img-top" alt="..."></a>
      <div id="<?php echo $productosp1['id'] ?>" class="card-body">
        <h5 class="card-title"><?php echo $productosp1['id'], '. '?><?php echo $productosp1['nombre'] ?></h5>
         <h5 class="card-text"><?php echo '$',$productosp1['precio'] ?></h5>
        <p class="card-text "><?php echo $productosp1['descripcion'] ?></p>
      </div>
    </div>