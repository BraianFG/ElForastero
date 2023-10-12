 <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js" defer></script>
 <div class="uk-container  uk-container-large wrap">
    <ul class="lista">
        <li class="lista__item"><a class="button primary" href="../admin" >Volver</a></li>
        <li class="lista__item">  <a href="visitas/visitas.pdf"  download class="button primary" id="descarga">Descargar datos</a> </li>
    </ul>
</div> 

 <div class="uk-container  uk-container-large wrap">
          <?php include 'tablaVisitas.php' ?>     
 </div>             
     
<script>
    document.querySelector("#descarga").addEventListener("click" , () => {
         <?php 
         
         $archivo ="visitas/visitas.csv";
          if(file_exists($archivo)){
              unlink($archivo);
          }
            $crear = touch("visitas/visitas.csv");  
            $sql = "SELECT * FROM visitas";
            $result3 = mysqli_query($conn,$sql);
            while($mostrar_productosp1 = mysqli_fetch_array($result3))
           {
            $num= $mostrar_productosp1['num'];
            $ip= $mostrar_productosp1['ip'];
            $pagina= $mostrar_productosp1['pagina'];
            $pais=$mostrar_productosp1['pais'];
            $ciudad= $mostrar_productosp1['ciudad'];
            $navegador= $mostrar_productosp1['navegador'];
            $so= $mostrar_productosp1['sistema_operativo'];
            $dispositivo= $mostrar_productosp1['dispositivo']; 
            $referido = $mostrar_productosp1['referido'];
            $fecha= $mostrar_productosp1['fecha'];
            $hora= $mostrar_productosp1['hora'];
            
               $datos = fopen("visitas/visitas.csv", "a+"); 
               fwrite($datos , "N° : $num");
               fwrite($datos , "\n");
               fwrite($datos , "IP : $ip");
               fwrite($datos , "\n");
               fwrite($datos , "Página : $pagina");
               fwrite($datos , "\n");
               fwrite($datos , "País : $pais");
               fwrite($datos , "\n");
               fwrite($datos , "Ciudad : $ciudad");
               fwrite($datos , "\n");
               fwrite($datos , "Navegador : $navegador");
               fwrite($datos , "\n");
               fwrite($datos , "Sistema Operativo : $so");
               fwrite($datos , "\n");
               fwrite($datos , "Dispostivo : $dispositivo");
               fwrite($datos , "\n");
               fwrite($datos , "Referido : $referido");
               fwrite($datos , "\n");
               fwrite($datos , "Fecha : $fecha");
               fwrite($datos , "\n");
               fwrite($datos , "Hora : $hora");
               fwrite($datos , "\n \n");
          fclose($datos);
          }     
          
          doc.text("<?php $crear ?>");
          doc.save("visitas.pdf");
        ?>
        
        
    })
    

</script>

