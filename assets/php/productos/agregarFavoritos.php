        <script defer>
        document.querySelector("#favoritos_<?php echo $productosp1['0'] ?>").addEventListener("click",presionar2);
        
        function presionar2(){
            $.post( "assets/php/productos/reaccionesFavoritos.php", { 
             idproducto:"<?php echo $productosp1['0'] ?>", 
             nombre:"<?php echo $productosp1['1'] ?>",
             descripcion:"",
             precio:"<?php echo $productosp1['4']?>" ,
             imagen:"<?php echo $productosp1['6'] ?>",
                
            });
         alertify.notify('Producto añadido a favoritos', 'success', 5);
        }

    </script>