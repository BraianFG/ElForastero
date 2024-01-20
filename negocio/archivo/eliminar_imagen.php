            <script async>
                 function eliminar_<?php echo $count?>(){
                     $.post( "eliminar.php", { imagen: "<?php echo $file?>"});
                  }
            </script>