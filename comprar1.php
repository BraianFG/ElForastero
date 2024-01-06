<?php
session_set_cookie_params(60*60*24*18);
session_start();
include 'database.php';
$id = $_SESSION["id"];

// SDK de Mercado Pago
require __DIR__ .  '/vendor/autoload.php';
// Agrega credenciales
?>

<?php
  $negocio = "SELECT * FROM MercadoPago WHERE 1" ;     
  $resultados = mysqli_query($conn,$negocio);          
        while($negocio= mysqli_fetch_array($resultados)){
 
     MercadoPago\SDK::setAccessToken("$negocio[1]");

    }
?>

 <?php
  $negocio = "SELECT * FROM totalPedido WHERE UsuarioID = '$id'" ;     
  $resultados = mysqli_query($conn,$negocio);          
        while($negocio= mysqli_fetch_array($resultados)){

   $mp = "SELECT * FROM MercadoPago WHERE 1" ;     
    $resultados = mysqli_query($conn,$mp);          
        while($mp= mysqli_fetch_array($resultados)){        
      $comision= $mp[3];
      $total = ($negocio['total'] * $comision)/100;
   }  
 ?>
   
  <?php 
    // Crea un objeto de preferencia
    $preference = new MercadoPago\Preference();
    $item = new MercadoPago\Item();
    $item->title = 'Su compra';
    $item->quantity = 1;
    $item->unit_price = $negocio['total'] + $total;
    $preference->items = array($item);
    $preference->save();
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
         <?php include "assets/php/head.php" ?>
         <?php include "assets/css/style.php" ?>
        <?php include "assets/js/Google-Analytics.php" ?>
       <?php include "assets/js/script.php" ?>
       <script src="https://sdk.mercadopago.com/js/v2"></script>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js" integrity="sha512-n/4gHW3atM3QqRcbCn6ewmpxcLAHGaDjpEBu4xZd47N0W2oQ+6q7oc3PXstrJYXcbNU1OHdQ1T7pAP+gi5Yu8g==" crossorigin="anonymous" referrerpolicy="no-referrer" async></script>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/solid.min.js" integrity="sha512-C92U8X5fKxCN7C6A/AttDsqXQiB7gxwvg/9JCxcqR6KV+F0nvMBwL4wuQc+PwCfQGfazIe7Cm5g0VaHaoZ/BOQ==" crossorigin="anonymous" referrerpolicy="no-referrer" async></script>
       
              <?php include "assets/css/main.php" ?>
    </head>
<body>   
     <?php include "assets/php/navbar2.php" ?>  
    <div id="resultados" class="uk-container uk-container-xsmall wrapp"> 
    <div class="uk-alert">
<?php
      $mp = "SELECT * FROM MercadoPago WHERE 1" ;     
      $resultados = mysqli_query($conn,$mp);          
        while($mp= mysqli_fetch_array($resultados)){    
?>
        <p class="panel__texto"><i class="fas fa-bullhorn"></i>Se aplicará un <?php echo $mp[3]?>% de recargo por la comisión de Mercado Pago</p>
<?php
}
?>
    </div>
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
                   <td><img src="images/<?php echo $mostrar_productosp1['imagen'] ?>" alt="miniatura" width="50" height="50"/></td>
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
     <div class="total">Total: $ <span id="total"><?php echo $negocio['total'] + $total ?></span></div> 
    <?php
      }
    ?>      
 </div>    
</div>    

     </div>  
        <div style="margin-top:-2em" class="modal__botones carrito uk-container uk-container-xsmall ">
            <a href="/index2" class="button__modal volver">
                 <i class="fas fa-undo"></i>Volver</a>
               <div class="comprar"></div>
                </ul>
        </div>
   
<script>
<?php
  $negocio = "SELECT * FROM MercadoPago WHERE 1" ;     
  $resultados = mysqli_query($conn,$negocio);          
        while($negocio= mysqli_fetch_array($resultados)){
  ?>            
    // Agrega credenciales de SDK
  const mp = new MercadoPago('<?php echo $negocio[2]?>', {
        locale: 'es-AR'
  });

<?php
}
?>
  // Inicializa el checkout
  mp.checkout({
      preference: {
          id: '<?php echo $preference->id ?>'
      },
      render: {
            container: '.comprar', // Indica el nombre de la clase donde se mostrará el botón de pago
            label: 'pagar', // Cambia el texto del botón de pago (opcional)
      }
});
</script>
             
     <!-- footer -->
   <div class="uk-container uk-container-xsmall"> 
      <div class="uk-card uk-card-default uk-card-body uk-text-center">
       <p>¿No le convence este medio de pago? , <a class="marron" href="pagos"><i class="fa-solid fa-circle-arrow-right"></i> Pruebe alguna de las otras opciones </a></p>
     </div>
   <div class="uk-container uk-container-xsmall">        
          <?php include 'assets/php/footer.php'?>
   </div>
   
  <?php 
  $negocio = 'SELECT * FROM estilos' ;     
  $resultados = mysqli_query($conn,$negocio);          
 ?> 
         
<?php
        while($negocio= mysqli_fetch_array($resultados)){
?>    
      <style>
          .mercadopago-button {
                background-color:<?php echo $negocio['color2'] ?>;
                justify-content: center;
                border: 0;
                text-align: left;
                outline: 0;
                display: flex;
                flex: 1;
                height: 4.8em;
                margin-top: 0.5em;
                width: 10.5em;
                text-align: center;
                align-items: center;
                box-sizing: border-box;
            }
      </style>
<?php
 }
?>

<?php include 'assets/php/contacto.php'?>
</body>
</html>
