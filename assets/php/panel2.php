   <div id="user2" uk-modal>
   <div class="uk-modal-dialog">
             <button class="uk-modal-close-default" type="button" uk-close></button>
        <div class="modal__header">Panel de Usuario</div>
        <div class="uk-modal-body">
            <a href="#datos" uk-toggle> <i class="fas fa-user"></i> Datos personales</a><br>
             <a href="resumen"><i class="fas fa-shopping-cart"></i>Resumen de compra</a><br>
             <a href="comprar"><i class="fas fa-tags"></i>Pedidos</a><br>
             <a href="mensaje" class="set__text" stlye ="margin-top:2em;"><i class="fas fa-paper-plane"></i>Enviar mensaje</a><br>
            <a download href="elforastero.apk"><i class="fas fa-download"></i>Descargar APP</a></br>
             <a href="#info" uk-toggle><i class="fas fa-info"></i>Acerca de esta tienda</a>
            <a href="salir.php?salir=1" class="button primary compradores" >Cerrar Sesión <i class="fas fa-sign-out-alt "></i> </a>
    </div>
    </div>
</div>    

 <?php
    $negocio = "SELECT * FROM usuarios WHERE id = '$id' " ;     
    $resultados = mysqli_query($conn,$negocio);          

    while($negocio= mysqli_fetch_array($resultados)){
?>
<div id="editar" uk-modal>
   <div class="uk-modal-dialog">
             <button class="uk-modal-close-default" type="button" uk-close></button>
          <div class="modal__header">Editar mis datos</div>
        <div class="uk-modal-body">
    <form method="POST" action="return false" onsubmit="return false"> 
         <label class="datos"><i class="fas fa-user"></i>Nombres</label>
         <input type="text" id="nombre" name="nombre" class="compradores" value="<?php echo $negocio['nombre'] ?>" required>
         <label class="datos"><i class="fas fa-user"></i>Apellidos</label> 
         <input type="text" id="apellido" name="apellido" class="compradores" value="<?php echo $negocio['apellido'] ?>" required >
         <label class="datos"><i class="fas fa-compass"></i>Dirección</label> 
         <input type="text" id="direccion" name="direccion" class="compradores" value="<?php echo $negocio['direccion'] ?>" required>
         <label class="datos"><i class="fas fa-city"></i>Ciudad</label> 
        <input type="text" id="ciudad" name="ciudad" class="compradores" value="<?php echo $negocio['ciudad'] ?>" required>
        <label class="datos"><i class="fas fa-mail-bulk"></i>Código postal</label> 
        <input type="text"id="codPostal" name="codPostal" class="compradores" value="<?php echo $negocio['codPostal'] ?>" required>
         <label class="datos"><i class="fas fa-phone"></i>Celular</label>
         <input type="tel" id="celular" name="celular" class="compradores" value="<?php echo $negocio['celular'] ?>" required>

           <button onclick="Validar(document.getElementById('nombre').value, document.getElementById('apellido').value,document.getElementById('direccion').value,document.getElementById('ciudad').value,document.getElementById('codPostal').value,document.getElementById('celular').value,);"class="button primary"><i class="fas fa-edit "></i> Editar mis datos  </button>
    </form>  
    <div id="resultado_panel"></div>
    
       <script>      
         function Validar(nombre,apellido,direccion,ciudad,codPostal,celular)
        {
            var parametros = {"nombre":nombre,"apellido":apellido,"direccion":direccion,"ciudad":ciudad,"codPostal":codPostal,"celular":celular};
            $.ajax({
                url: "assets/php/editar.php",
                type: "POST",
                data: parametros,
                success: function(resp){
                 $('#resultado_panel').html(resp)
                }  
                      
            });
        }
        
        </script>
    </div>
    </div>
</div>    

<?php
    }
?>

<div id="datos" uk-modal>
   <div class="uk-modal-dialog">
             <button class="uk-modal-close-default" type="button" uk-close></button>
          <div class="modal__header">Mis datos personales</div>
        <div class="uk-modal-body">
            <?php
          $negocio = "SELECT * FROM usuarios WHERE id = '$id' " ;     
          $resultados = mysqli_query($conn,$negocio);          
         ?> 
            <?php
                while($negocio= mysqli_fetch_array($resultados)){
             ?>
                <p><i class="fas fa-user "></i> <?php echo $negocio['nombre']  ,'   ', $negocio['apellido'] ?></p>
                <p><i class="fas fa-map "></i> <?php echo $negocio['direccion'] ,' , ',$negocio['ciudad'] . ' ', '(' , $negocio['codPostal'] ,')'?></p>
                <p><i class="fas fa-phone"></i> <?php echo $negocio['celular']?> </p>
                <p><i class="fas fa-envelope "></i> <?php echo  $negocio["email"]?></p>
                <a href="#editar" class="set__text"uk-toggle><i class="fas fa-edit"></i> Editar mis datos</a><br>
        <?php
                }
        ?>
    </div>
 <div class="uk-modal-footer">  
 <a href="#user2" uk-toggle class="button primary compradores" >Volver <i class="fas fa-undo"></i> </a>
    </div>
</div>    
</div>

<div id="info" uk-modal>
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
 <div class="uk-modal-footer">  
 <a href="#user2" uk-toggle class="button primary compradores" >Volver <i class="fas fa-undo"></i> </a>
    </div>
</div>    
</div>
