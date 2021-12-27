
    <article class="mini-post" data-id="<?php echo '0', $productosp1['id'] ?>" id="<?php echo $productosp1['id'] ?>">
                        <header>
                            <h3><a href="<?php echo '#',$productosp1['modal1'] ?>" uk-toggle  class="titulo__texto"><?php echo '0',$productosp1['id'],'. ' ,$productosp1['nombre'] ?></a></h3>
                        <div class="detalles">  
                            <h5 class="precio" data-precio=<?php echo $productosp1['precio'] ?> ><?php echo '$' , $productosp1['precio'] ?></h5>
                            <h3 class="titulo__cantidad"><?php  echo 'Descripción : ', $productosp1['descripcion']?><br><?php  echo 'Cantidad: ', $productosp1['cantidad'] ?></h3>
                              
                         </div>    
                              

                            <ul class="mini-post_lista">
                               <li><?php include"botones.php" ?></li> 
                            </ul>

                        </header>

                        <a href="#" class="image"><img href="<?php echo '#',$productosp1['modal1'] ?>" uk-toggle src="/images/<?php echo $productosp1['imagen'] ?>"
                                alt=""  loading="eager" /></a>

    </article>
