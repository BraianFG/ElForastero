<?php
session_set_cookie_params(60*60*24*18);
session_start();
include 'database.php';
$id = $_SESSION["id"];

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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js" integrity="sha512-n/4gHW3atM3QqRcbCn6ewmpxcLAHGaDjpEBu4xZd47N0W2oQ+6q7oc3PXstrJYXcbNU1OHdQ1T7pAP+gi5Yu8g==" crossorigin="anonymous" referrerpolicy="no-referrer" async></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" async/>

       <?php include "assets/js/script.php" ?>
       <?php include "assets/css/main.php" ?>
    </head>
<body>   
     <?php include "assets/php/navbar2.php" ?>  
   <div class="uk-container uk-container-large wrapp"> 
       <section class="uk-text-center">
          <h2 class="titulo">¿Cómo desea pagar?</h3>
          <p>Seleccione alguna modalidad de pago</p>
       </section>
        
     <div class="uk-child-width-1-3@m uk-grid-small uk-grid-match" uk-grid>
        <div>
            <div class="uk-card uk-card-default uk-card-body">
                <h3 class="uk-card-title titulo">Pagar con mercado Pago</h3>
                <p>Pague a tráves de link de pago,ideal para compras con tarjeta o distancia.</p>
                <a  class="button primary" href="comprar1">Elegír esta opción <i class="fa-solid fa-circle-arrow-right"></i></a>
            </div>
        </div>
        <div>
            <div class="uk-card uk-card-default uk-card-body">
                <h3 class="uk-card-title titulo">Pagar con transferencia</h3>
                <p>Pague con transferencia desde su cuenta bancaria o billetera virtual de confianza.</p>
                <a class="button primary" href="comprar2">Elegír esta opción <i class="fa-solid fa-circle-arrow-right"></i></a>
            </div>
        </div>
        <div>
            <div class="uk-card uk-card-default uk-card-body">
                <h3 class="uk-card-title titulo">Acordar con el vendedor</h3>
                <p>Acuerde con el vendedor de como,donde y cuando desea pagar su pedido.</p>
                 <a class="button primary" href="comprar3">Elegír esta opción <i class="fa-solid fa-circle-arrow-right"></i></a>
            </div>
        </div>
    </div>

     
     <!-- footer -->
      <div class="uk-container uk-container-large"> 
         <?php include "assets/php/footer.php" ?>
      </div> 
</body>
</html>