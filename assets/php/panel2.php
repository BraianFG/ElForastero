   <div id="user2" uk-modal>
   <div class="uk-modal-dialog">
             <button class="uk-modal-close-default" type="button" uk-close></button>
    <?php
       $usuario = "SELECT `nombre` FROM `usuarios` WHERE `id` ='$id';";     
       $resultados2 = mysqli_query($conn,$usuario);          
        while($usuario= mysqli_fetch_array($resultados2)){
     ?>          
        <div class="modal__header">Hola <?php echo $usuario['nombre']?></div>
    <?php
        }
    ?>
        <div class="uk-modal-body">
             <a class="items" href="index2">Productos</a>
             <a class="items" href="favoritos"> Productos favoritos</a>
             <a class="items" href="admin/productos/fpdf/fpdf/Lista.php">Ver lista en pdf</a>
             <a class="items" href="#datos" uk-toggle> Datos personales</a>
             <a class="items" href="resumen">Carrito</a>
             <a class="items" href="comprar">Pedidos</a>
             <a class="items" href="mensaje" class="set__text">Mensajes</a>
             <a class="items" href="#eliminar_cuenta" uk-toggle class="set__text">Eliminar cuenta</a>
                <?php
          $negocio = "SELECT * FROM usuarios WHERE id = '$id' " ;     
          $resultados = mysqli_query($conn,$negocio);          
         ?> 
            <?php
                while($negocio= mysqli_fetch_array($resultados)){
             ?>
             <a class="items" href="app/ElForastero.apk" download ><i class="fas fa-download"></i>Descargar APP</a>
        <?php
                }
        ?>            
             <a class="items margen__abajo" href="#info" uk-toggle >Acerca de esta tienda</a>
            <a href="salir.php?salir=1" class="button primary compradores" >Cerrar Sesión</a>
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
        <div class="uk-modal-body ">
    <form class="uk-container" method="POST" action="return false" onsubmit="return false"> 
         <label class="datos"><i class="fas fa-user"></i>Nombre</label>
         <input type="text" id="nombre" name="nombre" class="compradores" value="<?php echo $negocio['nombre'] ?>">
         <label class="datos"><i class="fas fa-user"></i>Apellido</label> 
         <input type="text" id="apellido" name="apellido" class="compradores" value="<?php echo $negocio['apellido'] ?>" >
         <label class="datos"><i class="fas fa-compass"></i>Dirección</label> 
         <input type="text" id="direccion" name="direccion" class="compradores" value="<?php echo $negocio['direccion'] ?>">
         <label class="datos"><i class="fas fa-city"></i>Ciudad</label> 
        <input type="text" id="ciudad" name="ciudad"  value="<?php echo $negocio['ciudad'] ?>">
        
        <label class="datos"><i class="fas fa-mail-bulk"></i>Código postal</label> 
        <input type="text" id="codPostal" name="codPostal" class="compradores" value="<?php echo $negocio['codPostal'] ?>" maxlength="4">
        
        <label class="datos"><i class="fas fa-phone"></i>Celular</label>
         <input type="tel" id="celular" name="celular" class="compradores" value="<?php echo $negocio['celular'] ?>">

           <button onclick="Validar(document.getElementById('nombre').value, document.getElementById('apellido').value,document.getElementById('direccion').value,document.getElementById('ciudad').value,document.getElementById('codPostal').value,document.getElementById('celular').value,);"class="button primary">Editar mis datos  </button>
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

  <div id="eliminar_cuenta" uk-modal>
    <div class="uk-modal-dialog">
     <div class="uk-modal-body">      
    <h3 class="uk-text-center">¿Desea eliminar su cuenta?</h3>
      <button class="uk-modal-close-default" type="button" uk-close></button>
      <div class="eliminar">
            <a href="index2" class="button primary eliminar__si" onclick="eliminar_cuenta((id ='<?php echo $id ?>'));salir();">Si <i class="fas fa-check"></i></a>
            <a href="#" class="button primary  uk-modal-close">No <i class="fas fa-times"></i></a>
     </div>     
      </div>    
    </div>
</div>

<script asycn>
    function eliminar_cuenta(id){
        $.post('assets/php/eliminar_cuenta.php',{id:id});
    }
    
    function salir(){
        $.post('assets/php/salir.php',{});
    }
</script>