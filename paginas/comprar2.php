<?php
session_set_cookie_params(60*60*24*18);
session_start();
require "../assets/php/database.php";
$id = $_SESSION["id"];
?>

 <?php
  $negocio = "SELECT * FROM totalPedido WHERE UsuarioID = '$id'" ;     
  $resultados = mysqli_query($conn,$negocio);          
        while($negocio= mysqli_fetch_array($resultados)){
 }
  ?>
  
<?php
    if (isset($_SESSION["id"])){
     $id = $_SESSION["id"];
    }else{
       header('Location: ingresar');
    }
?>

<html>
    <head>
        <!-- UIkit CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.17.11/dist/css/uikit.min.css"/>

<!-- UIkit JS -->
<script src="https://cdn.jsdelivr.net/npm/uikit@3.17.11/dist/js/uikit.min.js" defer></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.17.11/dist/js/uikit-icons.min.js" defer></script>
         <?php include "../assets/php/head.php" ?>
         <?php include "../assets/css/style.php" ?>
       <?php include "../assets/js/script.php" ?>
       <script src="https://sdk.mercadopago.com/js/v2"></script>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js" integrity="sha512-n/4gHW3atM3QqRcbCn6ewmpxcLAHGaDjpEBu4xZd47N0W2oQ+6q7oc3PXstrJYXcbNU1OHdQ1T7pAP+gi5Yu8g==" crossorigin="anonymous" referrerpolicy="no-referrer" async></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/solid.min.js" integrity="sha512-C92U8X5fKxCN7C6A/AttDsqXQiB7gxwvg/9JCxcqR6KV+F0nvMBwL4wuQc+PwCfQGfazIe7Cm5g0VaHaoZ/BOQ==" crossorigin="anonymous" referrerpolicy="no-referrer" async></script>
              <?php include "../assets/css/main.php" ?>
    </head>
<body>   
     <?php include "../assets/php/navbar2.php" ?>  
    <div id="resultados" class="uk-container uk-container-xsmall wrapp"> 
    <table class="uk-table uk-table-striped">
              <div class="modal__header">Pedidos</caption>
         <thead>    
             <tr>
                <th>Artículo</th>
                <th>Cantidad</th>
                <th>Precio</th>
                <th>Imagen</th>
            </tr>
        </thead>        
      <?php $productosp1 = "SELECT `imagen`, SUM(`cantidad`), SUM(`precio`),`nombreProduc` ,`prodcutoID` FROM `pedidos` WHERE UsuarioID = '$id' GROUP BY `cantidad`,`prodcutoID`; ";     
          $result3 = mysqli_query($conn,$productosp1);

           while($mostrar_productosp1 = mysqli_fetch_array($result3)){
         ?>    
         <tbody>
              <tr>
                   <td><?php echo $mostrar_productosp1['nombreProduc'] ?></td>
                   <td ><?php echo $mostrar_productosp1['SUM(`cantidad`)'] ?></td>
                   <td><?php echo '$ ',$mostrar_productosp1['SUM(`precio`)'] ?></td>
                   <td><img src="../images/<?php echo $mostrar_productosp1['imagen'] ?>" alt="miniatura" width="50" height="50"/></td>
              </tr>
            </tbody>
  <?php
 }
?> 
  
    </table>
    <?php 
         $negocio = "SELECT * FROM totalPedido WHERE UsuarioID = '$id'" ;     
         $resultados = mysqli_query($conn,$negocio);          
            while($negocio= mysqli_fetch_array($resultados)){
    ?>      
     <div class="total">Total: $ <span id="total"><?php echo $negocio['total'] ?></span></div> 
  
  
        <div class="modal__botones" style="margin-top:-5em;margin-bottom:5em" >
            <a href="<?=$_SERVER["HTTP_REFERER"]?>" class="button__modal borrar borrar__carrito"><i class="fas fa-undo"></i>Volver</a>
            <a href="#datos_bancarios" uk-toggle class="button__modal agregar agregar__carrito"><i class="fa-solid fa-bag-shopping"></i> Comprar</a>
        </div>
     </div>  
</div>
   
         <?php include "../assets/php/footer.php" ?>
       </div>


      
     <div id="datos_bancarios" uk-modal>
     <div class="uk-modal-dialog">
         <button class="uk-modal-close-default" type="button" uk-close></button> 
        <div class="modal__header">Pago con transferencia</div>
         <?php 
              $negocio = "SELECT * FROM transferencia" ;     
              $resultados = mysqli_query($conn,$negocio);          
               while($ver= mysqli_fetch_array($resultados)){
         ?>  
                <p><i class="fas fa-user"></i> Nombre : <?php echo $ver[0]?></p>
                <p><i class="fas fa-user"></i> Apellido : <?php echo $ver[1]?></p>
                <p><i class="fa-solid fa-address-card"></i> CUIT/CUIL : <?php echo $ver[2]?></p>
                <p><i class="fa-solid fa-building-columns"></i> Banco o billetera virtual : <?php echo $ver[3]?></p>
                <p><i class="fa-solid fa-money-bill-transfer"></i> CBU/CVU : <?php echo $ver[4]?></p>
                <p><i class="fa-solid fa-money-bill-transfer"></i> N° de cuenta : <?php echo $ver[5]?></p>
                <p><i class="fa-solid fa-address-card"></i> Alias : <?php echo $ver[6]?></p>
                <a class="button primary" href="../assets/php/datos/datos.php"
                  onclick="descargar();eliminar_archivo()"> <i class="fa-solid fa-circle-down"></i>Ver remito</a> 
           <?php
               }
            ?>  
            
   <?php
      }
    ?>    
     </div
     </div>
         
<?php include '../assets/php/contacto.php'?>
</body>
</html>

<script>
    function eliminar_archivo(){
       $.post("datos/eliminar_datos.php" , {id:<?php echo $id ?>});
    }
</script>