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
           <p id="dato_nombre"><i class="fas fa-user"></i> <?php echo $negocio['nombre'] ?></p>
           <p><i class="fas fa-envelope"></i> <?php echo $negocio['email']?></p>
           <a href="#editar" uk-toggle><i class="fas fa-edit"></i>Editar mis datos</a>
      <?php
        }
      ?>
            <a href="salir.php?salir=1" class="button primary compradores" >Cerrar Sesión <i class="fas fa-sign-out-alt "></i> </a>
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
    <form method="POST" action="return false" onsubmit="return false"> 
         <label class="datos"><i class="fas fa-user"></i>Nombre</label>
         <input id="nombre" type="text" id="nombre" name="nombre" class="compradores" value="<?php echo $negocio['nombre'] ?>" required>

           <button id="panel_admin" onclick="Validar_admin(document.getElementById('nombre').value)" class="button primary"><i class="fas fa-edit "></i> Editar mis datos </button>
           <div id="resultado_panel"></div>
    </form>         
    </div>
    </div>
</div>    

        <script>
 
        function Validar_admin(nombre)
        {
            $.ajax({
                url: "assets/php/editar.php",
                type: "POST",
                data: "nombre="+nombre,
                success: function(resp){
                  $('#resultado_panel').html(resp)
                }  
            })
            
            $("#panel_admin").load('assets/php/panel2.php');
            alertify.notify('Cambios aplicados correctamente','success',8);
        }
        </script>
        
      <?php
          }
        ?>           