   <div id="user2" uk-modal>
   <div class="uk-modal-dialog">
             <button class="uk-modal-close-default" type="button" uk-close></button>
          <div class="modal__header">Panel de Usuario</div>
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
                <p><i class="fas fa-phone "></i> <?php echo $negocio['celular']?> </p>
                <p><i class="fas fa-envelope "></i> <?php echo  $negocio["email"]?></p>
                <a href="#editar" class="set__text"uk-toggle><i class="fas fa-edit"></i> Editar mis datos</a><br>
                <a href="#mensaje" class="set__text" stlye ="margin-top:2em;" uk-toggle><i class="fas fa-paper-plane"></i>Enviar mensaje al vendedor</a><br>
                <a href="#estado" class="set__text" stlye ="margin-top:2em;" uk-toggle><i class="fas fa-traffic-light"></i> Estado de mis compras</a>
            <a href="salir.php?salir=1" class="button primary compradores" >Cerrar Sessión <i class="fas fa-sign-out-alt "></i> </a>
    </div>
    </div>
</div>    

<div id="editar" uk-modal>
   <div class="uk-modal-dialog">
             <button class="uk-modal-close-default" type="button" uk-close></button>
          <div class="modal__header">Editar mis datos</div>
        <div class="uk-modal-body">
    <form method="post" action="assets/php/editar.php"> 
         <label class="datos"><i class="fas fa-user"></i>Nombres</label>
         <input type="text" name="nombre" class="compradores" value="<?php echo $negocio['nombre'] ?>" required>
         <label class="datos"><i class="fas fa-user"></i>Apellidos</label> 
         <input type="text" name="apellido" class="compradores" value="<?php echo $negocio['apellido'] ?>" required >
         <label class="datos"><i class="fas fa-compass"></i>Dirección</label> 
         <input type="text" name="direccion" class="compradores" value="<?php echo $negocio['direccion'] ?>" required>
         <label class="datos"><i class="fas fa-city"></i>Ciudad</label> 
        <input type="text" name="ciudad" class="compradores" value="<?php echo $negocio['ciudad'] ?>" required>
        <label class="datos"><i class="fas fa-mail-bulk"></i>Código postal</label> 
        <input type="text" name="codPostal" class="compradores" value="<?php echo $negocio['codPostal'] ?>" required>
         <label class="datos"><i class="fas fa-phone"></i>Celular</label>
         <input type="tel" name="celular" class="compradores" value="<?php echo $negocio['celular'] ?>" required>

           <button tpye="submit" class="button primary"><i class="fas fa-edit "></i> Editar mis datos  </button>
    </form>         
    </div>
    </div>
</div>    
        <?php
          }
        ?> 
        <div id="estado" uk-modal>
   <div class="uk-modal-dialog">
             <button class="uk-modal-close-default" type="button" uk-close></button>
          <div class="modal__header">Estado de mi compra</div>
        <div class="uk-modal-body">
      <?php
          $negocio = "SELECT * FROM ventas WHERE UsuarioID = '$id' " ;     
          $resultados = mysqli_query($conn,$negocio);          
         ?> 
            <?php
                while($negocio= mysqli_fetch_array($resultados)){
             ?>
           <p><i class="fas fa-paper-plane"></i> Mensaje al vendedor: <?php echo $negocio['1']?></p>
          <p><i class="far fa-clock"></i> Fecha y hora : <?php echo $negocio['2'] ,' , ',$negocio['3']?> </p>
           <p><i class="fas fa-traffic-light"></i> Estado : <?php echo $negocio['4']?></p>
           <p> <i class="fas fa-wallet"></i> Total a pagar : <?php echo '$' ,$negocio['total']?></p>
           <p> <i class="fas fa-user"></i> Nombre del vendedor : <?php echo $negocio['7']?></p>
           <p><i class="fas fa-comment-alt"></i> Respuesta del vendedor : <?php echo $negocio['5']?></p>
       <?php
          }
        ?> 
    </div>
 <div class="uk-modal-footer">  
 <a href="#user2" uk-toggle class="button primary compradores" >Volver <i class="fas fa-undo"></i> </a>
    </div>
</div>    
</div>

<?php include 'mensaje.php' ?>