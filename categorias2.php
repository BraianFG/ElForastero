<?php
   include 'database.php';
    session_start();
    if (isset($_SESSION["id"])){
      $id = $_SESSION["id"];
    }else{
       header('Location: categorias');
    }
?>
<html>
<head>
   <?php include "assets/php/head.php" ?>
       <?php include 'assets/css/main.php' ?>
       <?php include 'assets/css/style.php' ?>
    <?php include "assets/js/Google-Analytics.php" ?>
    <?php include "assets/js/script.php" ?>
    <?php include "assets/php/navbar.php" ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/solid.min.js" integrity="sha512-C92U8X5fKxCN7C6A/AttDsqXQiB7gxwvg/9JCxcqR6KV+F0nvMBwL4wuQc+PwCfQGfazIe7Cm5g0VaHaoZ/BOQ==" crossorigin="anonymous" referrerpolicy="no-referrer" async></script>
</head>
<body>
<div class="uk-container wrapp">  
     <div class="uk-child-width-1-3@m uk-grid-small uk-grid-match" uk-grid>
          <?php 
              $productos = "SELECT * FROM `categorias`;";
              $resultp1 = mysqli_query($conn,$productos);          
            
               while($productosp1= mysqli_fetch_array($resultp1)){
                   
             ?>  
            <div>
                <div class="uk-card uk-card-default uk-card-body">
                    <p class="uk-card-title titulo"><?php echo $productosp1['nombre']?></p>
                    <a class="button primary" href="<?php echo $productosp1['nombre']?>"><?php echo $productosp1['nombre']?><i class="fa-solid fa-circle-arrow-right"></i></a>
                </div>
            </div>
         
             <?php
                }
             ?>
      <div>
    </div>