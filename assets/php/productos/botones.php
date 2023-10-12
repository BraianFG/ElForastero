<button class="button primary" onclick="carrito<?php echo $productosp1['id'] ?>()"> Agregar al carrito</button>

<script defer>

    function carrito<?php echo $productosp1['id'] ?>(){
        alertify.notify("Producto agregado al carrito", "success");
        $.post("assets/php/productos/agregar.php", {productoID: "<?php echo $productosp1['id'] ?>", cantidad:"<?php echo $productosp1['cantidad'] ?>",precio: "<?php echo $productosp1['precio'] ?>",nombre: "<?php echo $productosp1['nombre'] ?>",
        imagen:"<?php echo $productosp1['imagen']?>"}); 
       $( "#resumen" ).load( "index2.php #resumen" );
    }
    </script>
    

