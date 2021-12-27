<!--- Modal1 -->
  <div id="<?php echo $productosp1['modal1'] ?>" uk-modal>
                        <div class="uk-modal-dialog">
                            <div class="modal__header"><?php echo $productosp1['nombre'] ?></div>
                            <button class="uk-modal-close-default" type="button" uk-close></button>
                            <img src="/images/<?php echo $productosp1['imagen'] ?>" height="300">
                            <div class="modal__botones">
                                <a href="<?php echo '#',$productosp1['modal1'] ?>" class="button__modal modal" uk-toggle> <i
                                        class="fa fa-arrow-left"></i> Anterior </a>
                                <a href="<?php echo '#',$productosp1['modal2'] ?>" class="button__modal modal" uk-toggle> Siguiente <i
                                        class="fa fa-arrow-right"> </i> </a>
                            </div>
                        </div>
                    </div>
    
<!--Modal2 -->
  <div id="<?php echo $productosp1['modal2'] ?>" uk-modal>
                        <div class="uk-modal-dialog">
                            <div class="modal__header"><?php echo $productosp1['nombre'] ?></div>
                            <button class="uk-modal-close-default" type="button" uk-close></button>
                            <img src="/images/<?php echo $productosp1['imagen01'] ?>" height="300">
                            <div class="modal__botones">
                                <a href="<?php echo '#',$productosp1['modal1'] ?>" class="button__modal modal" uk-toggle> <i
                                        class="fa fa-arrow-left"></i> Anterior </a>
                                <a href="<?php echo '#',$productosp1['modal3'] ?>" class="button__modal modal" uk-toggle> Siguiente <i
                                        class="fa fa-arrow-right"> </i> </a>
                            </div>
                        </div>
                    </div>
                    
<!--Modal3 -->
 <div id="<?php echo $productosp1['modal3'] ?>" uk-modal>
                        <div class="uk-modal-dialog">
                            <div class="modal__header"><?php echo $productosp1['nombre'] ?></div>
                            <button class="uk-modal-close-default" type="button" uk-close></button>
                            <img src="/images/<?php echo $productosp1['imagen02'] ?>" height="300">
                            <div class="modal__botones">
                                <a href="<?php echo '#',$productosp1['modal2'] ?>" class="button__modal modal" uk-toggle> <i
                                        class="fa fa-arrow-left"></i> Anterior </a>
                                <a href="<?php echo '#',$productosp1['modal4'] ?>" class="button__modal modal" uk-toggle> Siguiente <i
                                        class="fa fa-arrow-right"> </i> </a>
                            </div>
                        </div>
                    </div> 
                    

<!--Modal4 -->
 <div id="<?php echo $productosp1['modal4'] ?>" uk-modal>
                        <div class="uk-modal-dialog">
                            <div class="modal__header"><?php echo $productosp1['nombre'] ?></div>
                            <button class="uk-modal-close-default" type="button" uk-close></button>
                            <img src="/images/<?php echo $productosp1['imagen03'] ?>" height="300">
                            <div class="modal__botones">
                                <a href="<?php echo '#',$productosp1['modal3'] ?>" class="button__modal modal" uk-toggle> <i
                                        class="fa fa-arrow-left"></i> Anterior </a>
                                <a href="<?php echo '#',$productosp1['modal5'] ?>" class="button__modal modal" uk-toggle> Siguiente <i
                                        class="fa fa-arrow-right"> </i> </a>
                            </div>
                        </div>
                    </div> 

<!--Modal 5 -->
    
                  <div id="<?php echo $productosp1['modal5'] ?>" uk-modal>
                        <div class="uk-modal-dialog">
                            <div class="modal__header"><?php echo $productosp1['nombre'] ?></div>
                            <button class="uk-modal-close-default" type="button" uk-close></button>
                            <img src="/images/<?php echo $productosp1['imagen04'] ?>" height="300">
                            <div class="modal__botones">
                                <a href="<?php echo '#',$productosp1['modal4'] ?>" class="button__modal modal" uk-toggle> <i
                                        class="fa fa-arrow-left"></i> Anterior </a>
                                <a href="<?php echo '#',$productosp1['modal5'] ?>" class="button__modal modal" uk-toggle> Siguiente <i
                                        class="fa fa-arrow-right"> </i> </a>
                            </div>
                        </div>
                    </div> 