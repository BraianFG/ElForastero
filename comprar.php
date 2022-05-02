<?php
session_set_cookie_params(60*60*24*18);
session_start();
include 'database.php';
$id = $_SESSION["id"];

// SDK de Mercado Pago
require __DIR__ .  '/vendor/autoload.php';
// Agrega credenciales
MercadoPago\SDK::setAccessToken('APP_USR-5946296600794681-071419-17807207f136314c898e73c447f1c1d0-335219991');
?>

 <?php
  $negocio = "SELECT * FROM totalPedido WHERE UsuarioID = '$id'" ;     
  $resultados = mysqli_query($conn,$negocio);          
        while($negocio= mysqli_fetch_array($resultados)){
            
    // Crea un objeto de preferencia
    $preference = new MercadoPago\Preference();
    $item = new MercadoPago\Item();
    $item->title = 'Su compra';
    $item->quantity = 1;
    $item->unit_price = $negocio['total'];
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
              <?php include "assets/css/main.php" ?>
    </head>
<body>   
     <?php include "assets/php/navbar2.php" ?>  
    <div id="resultados" class="uk-container uk-container-xsmall wrapp"> 
    <table class="uk-table uk-table-striped">
              <div class="modal__header">Pedidos</caption>
         <thead>    
             <tr>
                <th>Artículo</th>
                <th>Cantidad</th>
                <th>Precio</th>
            </tr>
        </thead>        
   <?php $productosp1 = "SELECT * FROM `pedidos` WHERE UsuarioID = '$id' " ;     
          $result3 = mysqli_query($conn,$productosp1);
        
        ?>
        
        
         <?php
           while($mostrar_productosp1 = mysqli_fetch_array($result3)){
         ?>    
         <tbody>
              <tr>
                   <td><?php echo $mostrar_productosp1['5'] ?></td>
                   <td ><?php echo $mostrar_productosp1['6'] ?></td>
                   <td><?php echo '$',$mostrar_productosp1['7'] ?></td>
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
     <div style="margin-top:-1.2em" class="total">Total: $ <span id="total"><?php echo $negocio['total']?></span></div> 
    <?php
      }
    ?>      
 </div>    
</div>    

     </div>  
        <div class="modal__botones carrito uk-container uk-container-xsmall ">
            <a href="/index2" class="button__modal volver">
                 <i class="fas fa-undo"></i>Volver</a>
               <div class="comprar"></div>
                </ul>
        </div>
   
<script>
    // Agrega credenciales de SDK
  const mp = new MercadoPago('TEST-a12f8a47-a8fa-4f90-aa7f-ab6ad20fe03d', {
        locale: 'es-AR'
  });

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
         <?php include "assets/php/footer.php" ?>
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
</body>
</html>
