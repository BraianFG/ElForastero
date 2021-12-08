         <div class="uk-container  uk-container-large wrap">
        <div class="uk-overflow-auto">     
             <table class="uk-table uk-table-striped ">
              <caption> <i class="fas fa-desktop"> </i> DATOS DEL SITIO</caption>
         <thead>    
             <tr>
                <th>TITLE</th>
                <th>DESCRIPCION</th>
                <th>FAVICÓN</th>
                <th>NOMBRE DE SITIO</th>
                <th>IMAGEN DE SITIO</th>
                <th>TITULO DE SITIO</th>
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
                   <td><?php echo $mostrar['favicon'] ?></td>
                   <td><?php echo $mostrar['nombre_sitio'] ?></td>
                   <td><?php echo $mostrar['imagen_sitio'] ?></td>
                   <td><?php echo $mostrar['titulo_sitio'] ?></td>
                   <td><a  class="button primary edit" href="#editar__misitio" uk-toggle> <i class="fas fa-pen"></i> Editar</a></td>
              </tr>
            </tbody>

            </table>
        </div>    
    </div>

<div id="editar__misitio" uk-modal>
    <div class="uk-modal-dialog">

        <button class="uk-modal-close-default" type="button" uk-close></button>

        <div class="modal__header"> Editar datos del sitio web</div>
   
        <div class="uk-modal-body" uk-overflow-auto>
          <form method="post" action="negocio/editar_misitio.php/">
              <label class="datos"><i class="far fa-edit"></i>Titulo del sitio web</label>
                <input  name="title" type="text" placeholder="Ingrese el titulo de sitio web" value="<?php echo $mostrar['title'] ?>" >
                <label class="datos"><i class="far fa-comment-alt"></i>Descripción del sitio web</label>
                <textarea name="descripcion" type="text" placeholder="Ingrese una breve descripción del sitio web" ><?php echo $mostrar['descripcion'] ?></textarea>
                <label class="datos"><i class="far fa-image"></i>Favicón</label>
                <input  name="favicon" type="text" placeholder="Ingrese favicón del sitio web " value="<?php echo $mostrar['favicon'] ?>"  >
               <label class="datos"><i class="far fa-edit"></i>Nombre del sitio web</label>
               <input  name="nombre_sitio" type="text" placeholder="Ingrese nombre del sitio web" value="<?php echo $mostrar['nombre_sitio'] ?>" >
               <label class="datos"><i class="far fa-image"></i>Imagen del sitio web</label>
                <input  name="imagen_sitio" type="text" placeholder="Ingrese ruta de la imagen del sitio web" value="<?php echo $mostrar['imagen_sitio'] ?>" >
               <label class="datos"><i class="far fa-edit"></i>Titulo del sitio web</label>    
                <input  name="titulo_sitio" type="text" placeholder="Ingrese titulo del sitio web" value="<?php echo $mostrar['titulo_sitio'] ?>" >
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