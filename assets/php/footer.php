
<section id="footer">
   <?php
  $negocio = 'SELECT * FROM negocio' ;     
  $resultados = mysqli_query($conn,$negocio);          
 ?> 
         
    <?php
        while($negocio= mysqli_fetch_array($resultados)){
     ?> 
            <!-- Footer -->
                <ul class="icons">
                    <li><a href="<?php echo $negocio['telegram'] ?>"><i class="fab fa-telegram-plane"><span
                                class="label">Telegram</span></i></a></li>
                    <li><a href="<?php echo $negocio['facebook'] ?>"><i class="fab fa-facebook-f"><span class="label">Facebook</span></i></a></li>
                    <li><a href="<?php echo $negocio['instagram'] ?>"><i class="fab fa-instagram"><span class="label">Instagram</span></i></a></li>
                    <li><a href="<?php echo $negocio['whatsapp'] ?>"><i class="fab fa-whatsapp"><span
                                class="label">WB</span></i></a></li>
                    <li><a href="<?php echo 'mailto:',$negocio['email'] ?>"><i class="fas fa-envelope"><span class="label">Email</span></i></a></li>
                    <li><a href="https://github.com/BraianFG/ElForastero" target="Blank"><i class="fa-brands fa-github"><span class="label">Github</span></a></i></li>
                    <li><a class="label" style="text-transform:uppercase" href="#info2" uk-toggle> <i class="fas fa-info"></i></a></li>
                </ul>
                <img src="https://img.gs/jhcplzwzdm/full,3x/https://tiendaelforastero.com.ar/images/468X60.webp" 
                title="Mercado Pago - Medios de pago" alt="Mercado Pago - Medios de pago" 
                 width="468" height="60" loading="lazy"/>
                <p class="copyright">Hecho por <a
                        href="http://braianfg287.tk" target="_Blank" class="autor">Braian FG287 </a> a partír de una plantilla de <a
                        href="http://html5up.net" target="_Blank">HTML5 UP</a>,icono vectoriales extridos desde <a
                        href="https://pixabay.com" class="autor" target="_Blank" >Pixabay</a> y <a href="https://fontawesome.com/" class="autor"  target="_Blank" >Fontawesome</a></p>
              </section>
<?php
}
?>

<div id="info2" uk-modal>
   <div class="uk-modal-dialog">
     <?php
          $negocio = "SELECT * FROM negocio" ;     
          $resultados = mysqli_query($conn,$negocio);          
         ?> 
       <?php
          while($negocio= mysqli_fetch_array($resultados)){
        ?>  
             <button class="uk-modal-close-default" type="button" uk-close></button>
          <div class="modal__header">Acerca de <?php echo $negocio['nombre']?></div>
        <div class="uk-modal-body">
             <h2 class="info__titulo"><img class="info__logo" src="images/<?php echo $negocio['logo'] ?>"><?php echo $negocio['nombre'] ?></h2>
              <p class="info__subtitulo"><?php echo $negocio['descripcion'] ?></p>
              <p class="info__descripcion"><?php echo $negocio['info']?> </p>
        <?php
                }
        ?>
    </div>
</div>    
</div>
