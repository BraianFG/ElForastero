   <?php
  $negocio = 'SELECT * FROM negocio' ;     
  $resultados = mysqli_query($conn,$negocio);          
 ?> 
         
    <?php
        while($negocio= mysqli_fetch_array($resultados)){
     ?> 
          
  <hr class="footer">
            <!-- Footer -->
            <section id="footer">
                <ul class="icons">
                    <li><a href="<?php echo $negocio['telegram'] ?>" class="fab fa-telegram-plane"><span
                                class="label">Telegram</span></a></li>
                    <li><a href="<?php echo $negocio['facebook'] ?>" class="fab fa-facebook-f"><span class="label">Facebook</span></a></li>
                    <li><a href="<?php echo $negocio['instagram'] ?>" class="fab fa-instagram"><span class="label">Instagram</span></a></li>
                    <li><a href="<?php echo $negocio['whatsapp'] ?>" class="fab fa-whatsapp"><span
                                class="label">WB</span></a></li>
                       <li><a href="<?php echo 'mailto:',$negocio['email'] ?>" class="fas fa-envelope"><span
                                class="label">Email</span></a></li>
                </ul>
                <img src="https://imgmp.mlstatic.com/org-img/banners/ar/medios/online/468X60.jpg" 
                title="Mercado Pago - Medios de pago" alt="Mercado Pago - Medios de pago" 
                 width="468" height="60"/>
                <p class="copyright">Hecho por Braian FG287 a partír de una plantilla de <a
                        href="http://html5up.net" target="_Blank">HTML5 UP</a>,icono vectoriales extridos desde <a
                        href="https://pixabay.com" target="_Blank" >Pixabay</a> y <a href="https://fontawesome.com/" target="_Blank" >Fontawesome</a></p>
              </section>
        </div>
<?php
}
?>