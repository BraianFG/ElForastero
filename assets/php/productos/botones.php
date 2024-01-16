<button class="button primary boton_carrito" style="margin-top:1.5em;" onclick="carrito<?php echo $productosp1['id'] ?>()"> Agregar</button>

<script>

    function carrito<?php echo $productosp1['id'] ?>(){
        alertify.notify("Producto agregado al carrito", "success");
        $.post("assets/php/productos/agregar.php", {productoID: "<?php echo $productosp1['id'] ?>", cantidad:"<?php echo $productosp1['cantidad'] ?>",precio: "<?php echo $productosp1['precio'] ?>",nombre: "<?php echo $productosp1['nombre'] ?>",
        imagen:"<?php echo $productosp1['imagen']?>"}); 
       $( "#resumen" ).load( "index.php #resumen" );
    }
</script>
    

