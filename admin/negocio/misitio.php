         <div id="sitio" class="uk-container  uk-container-large wrap">
        <header class="caption"><i class="fas fa-desktop"> </i> DATOS DEL SITIO</header>         
         <div class="uk-overflow-auto">     
             <table class="uk-table uk-table-striped ">
         <thead>    
             <tr>
                <th>TITULO</th>
                <th>DESCRIPCIÓN</th>
                <th>FAVICÓN</th>
                <th>IMAGEN DE SITIO</th>
                 <th>EDITAR</th>
  
              </tr>
        </thead>        
        <?php $negocio = 'SELECT * from negocio_misitio' ;     
          $result = mysqli_query($conn,$negocio);
        
        ?>
        
        
         <?php
           while($mostrar = mysqli_fetch_array($result)){
         ?>    
         <tbody>
              <tr>
                   <td><?php echo $mostrar['title'] ?></td>
                   <td><?php echo $mostrar['descripcion'] ?></td>
                   <td><a href="../../images/<?php echo $mostrar['favicon'] ?>" target="Blank"><img class="img__sitio" src="../../images/<?php echo $mostrar['favicon'] ?>" loading="lazzy"/></a></td>
                   <td><a href="../../images/<?php echo $mostrar['imagen_sitio'] ?>" target="Blank"><img class="img__sitio" src="../../images/<?php echo $mostrar['imagen_sitio'] ?>" loading="lazzy"/></a></td>
                   <td><a  class="button primary edit" href="#editar__misitio" uk-toggle> <i class="fas fa-pen"></i> Editar</a></td>
              </tr>
            </tbody>

            </table>
        </div>    
    </div>

<div id="editar__misitio" uk-modal>
    <div class="uk-modal-dialog">

        <button class="uk-modal-close-default" type="button" uk-close></button>

        <div class="modal__header"> Datos del sitio</div>
   
        <div class="uk-modal-body" uk-overflow-auto>
          <form method="post" action="negocio/editar_misitio.php/"  enctype="multipart/form-data">
              <label class="datos"><i class="far fa-edit"></i>Titulo</label>
                <input  name="title" type="text" placeholder="Ingrese el titulo de sitio web" value="<?php echo $mostrar['title'] ?>" >
                <label class="datos"><i class="far fa-comment-alt"></i>Descripción del sitio web</label>
                <textarea class="descripcion" name="descripcion" type="text" placeholder="Ingrese una breve descripción del sitio web" ><?php echo $mostrar['descripcion'] ?></textarea disabled>
                <label class="datos"><i class="far fa-image"></i>Favicón</label>
                <input type="file" accept="image/jpeg,image/ico"  name="favicon" >
                <img onerror="this.style.display='none'" src="../../images/<?php echo $mostrar['favicon'] ?>" class="productos__images"> 
                <label class="datos"><i class="far fa-image"></i>Imagen del sitio web</label>
                 <input type="file" accept="image/* "  name="imagen_sitio" >
                <img onerror="this.style.display='none'" src="../../images/<?php echo $mostrar['imagen_sitio'] ?>" class="productos__images"> 

        </div>

        <div class="uk-modal-footer uk-text-right">
            <button type="submit" class="button primary compradores" value="enviar" onclick="compradores()" > <i class="fas fa-pen"></i> Editar datos</button>
            </form>
        </div>
    </div>
</div>

<?php
 }
?>  