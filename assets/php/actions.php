<?php 
   session_start();
   include '../../database.php';
?>
      <!-- Links -->
            <section>
                <h3><strong> <i class="fas fa-store-alt"></i> Artículos </strong></h3>
                     
           
                <ul class="links" id="carrito"></ul>
            </section>
            
       <!-- Actions -->
            <section>
                <h6>Total: $ <span id="total"></span></h6>
                <ul class="actions stacked">

                    <li><a href="#" class="button primary large fit terminar-compra " target="_blank"><i
                                class="fas fa-shopping-bag fa-2x" onclick="checkout.open()" ></i> Finalizar Compra</a></li>
                    <li><a href="#" id="BorrarCarrito" class="button large fit"><i class="fas fa-trash fa-2x"></i>
                            Borrar Carrito </a></li>
                            
         </section>   
         

                       
                