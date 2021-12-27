<?php 
  $id_admin = $_SESSION['id_admin'];
?>
<div id="user2" uk-modal>
   <div class="uk-modal-dialog">
             <button class="uk-modal-close-default" type="button" uk-close></button>
          <div class="modal__header">Panel de Administrador</div>
      <?php
        $negocio = "SELECT * FROM admin WHERE id = '$id_admin' " ;     
        $resultados = mysqli_query($conn,$negocio);          
        while($negocio= mysqli_fetch_array($resultados)){
       ?>      
        <div class="uk-modal-body">
           <p><i class="fas fa-user"></i> <?php echo $negocio['nombre'] ?></p>
           <p><i class="fas fa-envelope"></i> <?php echo $negocio['email']?></p>
           <a href="#editar" uk-toggle><i class="fas fa-edit"></i>Editar mis datos</a>
      <?php
        }
      ?>
            <a href="salir.php?salir=1" class="button primary compradores" >Cerrar Sessión <i class="fas fa-sign-out-alt "></i> </a>
    </div>
    </div>
</div>    

<div id="editar" uk-modal>
   <div class="uk-modal-dialog">
             <button class="uk-modal-close-default" type="button" uk-close></button>
          <div class="modal__header">Editar mis datos</div>
        <div class="uk-modal-body">
<?php
        $negocio = "SELECT * FROM admin WHERE id = '$id_admin' " ;     
        $resultados = mysqli_query($conn,$negocio);          
        while($negocio= mysqli_fetch_array($resultados)){
       ?>                
    <form method="post" action="assets/php/editar.php"> 
         <label class="datos"><i class="fas fa-user"></i>Nombre</label>
         <input type="text" name="nombre" class="compradores" value="<?php echo $negocio['nombre'] ?>" required>
      <?php
          }
        ?>   
           <button tpye="submit" class="button primary"><i class="fas fa-edit "></i> Editar mis datos  </button>
    </form>         
    </div>
    </div>
</div>    