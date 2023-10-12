
<section id="footer" class="uk-container">
   <?php
  $negocio = 'SELECT * FROM negocio' ;     
  $resultados = mysqli_query($conn,$negocio);          
 ?> 
         
    <?php
        while($negocio= mysqli_fetch_array($resultados)){
     ?> 
            <!-- Footer -->
                <section class="icons">
                    <a  role="link" href="<?php echo $negocio['telegram'] ?>" title="ir a Telegram"><i class="fa-telegram">c</i></a>
                    <a role="link"  href="<?php echo $negocio['facebook'] ?>" title="Ir a Facebook"><i class="fa-facebook">s</i></a>
                    <a role="link"  href="<?php echo $negocio['instagram'] ?>" title="Ir a Instagram"><i class="fa-instagram">s</i></a>
                    <a  role="link" href="<?php echo $negocio['whatsapp'] ?>" title="Ir a Whatsapp"><i class="fa-whatsapp">s</i></a>
                    <a  role="link" href="<?php echo 'mailto:',$negocio['email'] ?>" title="Enviar un Correo"><i class="fa-envelope">s</i></a>
                    <a role="link"  href="https://github.com/BraianFG/ElForastero" target="Blank" title="Ir a Github"><i class="fa-github">s</i></a>
                    <a  role="link" class="label" href="#info2" title="Acerca de la tienda" uk-toggle> <i class="fa-info">a</i></a>

                </section>
                
              <section class="icons">
                <img class="lazyload" data-src="<?php echo $negocio['mediosPago'] ?>"  onerror="this.style='display:none'"
                title="Mercado Pago - Medios de pago" alt="Mercado Pago - Medios de pago" 
                width="300" height="80"/>
                
                <a href="<?php echo $negocio['registro'] ?>" title="ir a AFIP" target="_F960AFIPInfo"><img  onerror="this.style='display:none'" height="80" width="40"class="lazyload"  data-src="<?php echo $negocio['imagenRegistro']?>" alt="Registro en AFIP" border="0"></a> </li>
              </section>

                                        
               <p class="copyright">Hecho por <a
                        href="../Braian" title="Hecho por BraianFG287" target="_Blank" class="autor">Braian FG287 </a> a partír de una plantilla de <a role="link"
                        href="http://html5up.net" target="_Blank" title="ir a HTML5UP">HTML5 UP</a>,icono vectoriales extridos desde <a role="link"
                        href="https://pixabay.com" class="autor" target="_Blank" title="ir a Pixabay">Pixabay</a> y <a href="https://fontawesome.com/" title="ir a Fontawesome" class="autor"  target="_Blank" >Fontawesome</a>
                </p>
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
