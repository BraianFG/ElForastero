<?php
  $negocio = 'SELECT * FROM negocio' ;     
  $resultados = mysqli_query($conn,$negocio);          
 ?> 
 
     <?php
        while($negocio= mysqli_fetch_array($resultados)){
     ?> 
  <div class="whatsapp">
                <a href="<?php echo $negocio['whatsapp2'] ?>" id="boton-flotante" target="_blank"
                    title="Consultame por Whatsapp sobre stock,envios y detalles en general">
                    <img loading="lazy" src="https://cdn.pixabay.com/photo/2015/08/03/13/58/soon-873316_960_720.png" alt="WhatsApp" />
                </a>
            </div>

            <div class="telegram">
                <a href="<?php echo $negocio['telegram'] ?>" id="boton-flotante" target="_blank"
                    title="Consultame por Whatsapp sobre stock,envios y detalles en general">
                    <img loading="lazy" src="https://cdn.pixabay.com/photo/2020/10/17/13/21/telegram-5662082_960_720.png" alt="Telegram" />
                </a>
            </div>
<?php
 }
?>