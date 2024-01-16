<?php
  $negocio = 'SELECT * FROM negocio' ;     
  $resultados = mysqli_query($conn,$negocio);          
 ?> 
 
     <?php
        while($negocio= mysqli_fetch_array($resultados)){
     ?> 
  <div class="whatsapp">
                <a href="<?php echo $negocio['whatsapp2'] ?>" class="boton-flotante" target="_blank"
                    title="Consultame por Whatsapp sobre stock,envios y detalles en general">
                    <img  src="https://img.gs/jhcplzwzdm/40x40,3x/https://cdn.pixabay.com/photo/2015/08/03/13/58/soon-873316_960_720.png"  onerror="this.style='display:none'" alt="WhatsApp" />
                </a>
            </div>

            <div class="telegram">
                <a href="<?php echo $negocio['telegram'] ?>" class="boton-flotante" target="_blank"
                    title="Consultame por Whatsapp sobre stock,envios y detalles en general">
                    <img src="https://img.gs/jhcplzwzdm/40x40,3x/https://cdn.pixabay.com/photo/2020/10/17/13/21/telegram-5662082_960_720.png " onerror="this.style='display:none'"  alt="Telegram" />
                </a>
            </div>
<?php
 }
?>