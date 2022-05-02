<!--- Modal1 -->
  <div id="<?php echo $productosp1['modal1'] ?>" uk-modal>
                        <div class="uk-modal-dialog">
                            <div class="modal__header"><?php echo $productosp1['nombre'] ?></div>
                            <button class="uk-modal-close-default" type="button" uk-close></button>
                            <img class="modal__imagen"  src="https://img.gs/jhcplzwzdm/150,3x,format=JPEG,quality=high/https://tiendaelforastero.com.ar/images/<?php echo $productosp1['imagen'] ?>">
                            <div class="modal__botones popup">
                                 <a class="button__modal borrar borrar__carrito" href="<?php echo '#',$productosp1['modal1'] ?>"  uk-toggle> <i
                                        class="fa fa-arrow-left"></i> Anterior </a>
                                <a href="<?php echo '#',$productosp1['modal2'] ?>"  class="button__modal agregar agregar__carrito" uk-toggle> Siguiente <i
                                        class="fa fa-arrow-right"> </i> </a>
                        </div>
                    </div>    
    </div>
<!--Modal2 -->
  <div id="<?php echo $productosp1['modal2'] ?>" uk-modal>
                        <div class="uk-modal-dialog">
                            <div class="modal__header"><?php echo $productosp1['nombre'] ?></div>
                            <button class="uk-modal-close-default" type="button" uk-close></button>
                            <img class="modal__imagen" src="https://img.gs/jhcplzwzdm/150,3x,format=JPEG,quality=high/https://tiendaelforastero.com.ar/images/<?php echo $productosp1['imagen01'] ?>" >
                              <div class="modal__botones popup">
                                    <a href="<?php echo '#',$productosp1['modal1'] ?>" class="button__modal borrar borrar__carrito" uk-toggle> <i
                                            class="fa fa-arrow-left"></i> Anterior </a>
                                    <a href="<?php echo '#',$productosp1['modal3'] ?>" class="button__modal agregar agregar__carrito" uk-toggle> Siguiente <i
                                            class="fa fa-arrow-right"> </i> </a>
                            </div>                
                        </div>
                    </div>
                    
<!--Modal3 -->
 <div id="<?php echo $productosp1['modal3'] ?>" uk-modal>
                        <div class="uk-modal-dialog">
                            <div class="modal__header"><?php echo $productosp1['nombre'] ?></div>
                            <button class="uk-modal-close-default" type="button" uk-close></button>
                            <img class="modal__imagen" src="https://img.gs/jhcplzwzdm/150,3x,format=JPEG,quality=high/https://tiendaelforastero.com.ar/images/<?php echo $productosp1['imagen02'] ?>" >
                          <div class="modal__botones popup">    
                                <a href="<?php echo '#',$productosp1['modal2'] ?>" class="button__modal borrar borrar__carrito"  uk-toggle> <i
                                        class="fa fa-arrow-left"></i> Anterior </a>
                                <a href="<?php echo '#',$productosp1['modal4'] ?>" class="button__modal agregar agregar__carrito" uk-toggle> Siguiente <i
                                        class="fa fa-arrow-right"> </i> </a>
                        </div>
                    </div> 
                </div>    
                    

<!--Modal4 -->
 <div id="<?php echo $productosp1['modal4'] ?>" uk-modal>
                        <div class="uk-modal-dialog">
                            <div class="modal__header"><?php echo $productosp1['nombre'] ?></div>
                            <button class="uk-modal-close-default" type="button" uk-close></button>
                            <img class="modal__imagen"  src="https://img.gs/jhcplzwzdm/150,3x,format=JPEG,quality=high/https://tiendaelforastero.com.ar/images/<?php echo $productosp1['imagen03'] ?>" >
                            <div class="modal__botones popup ">    
                                <a href="<?php echo '#',$productosp1['modal3'] ?>" class="button__modal borrar borrar__carrito" uk-toggle> <i
                                        class="fa fa-arrow-left"></i> Anterior </a>
                                <a href="<?php echo '#',$productosp1['modal5'] ?>" class="button__modal agregar agregar__carrito" uk-toggle> Siguiente <i
                                        class="fa fa-arrow-right"> </i> </a>
                            </div>
                        </div>
                     </div>
<!--Modal 5 -->
    
                  <div id="<?php echo $productosp1['modal5'] ?>" uk-modal>
                        <div class="uk-modal-dialog">
                            <div class="modal__header"><?php echo $productosp1['nombre'] ?></div>
                            <button class="uk-modal-close-default" type="button" uk-close></button>
                            <img class="modal__imagen"  src="https://img.gs/jhcplzwzdm/150,3x,format=JPEG,quality=high/https://tiendaelforastero.com.ar/images/<?php echo $productosp1['imagen04'] ?>">
                            <div class="modal__botones popup">    
                                <a href="<?php echo '#',$productosp1['modal4'] ?>"  class="button__modal borrar borrar__carrito" uk-toggle> <i
                                        class="fa fa-arrow-left"></i> Anterior </a>
                                <a href="<?php echo '#',$productosp1['modal5'] ?>" class="button__modal agregar agregar__carrito" uk-toggle> Siguiente <i
                                        class="fa fa-arrow-right"> </i> </a>
                            </div>
                        </div>    
                    </div>