
 <?php 
    include '../../database.php';
    session_start();
    if (isset($_SESSION["id_admin"])){
       $id_admin=$_SESSION["id_admin"];
    }else{
        header('Location:../../ingresar');
    } 
    
    $id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
    mysqli_real_escape_string($conn , $id);
    
    $nombre = filter_var($_POST['nombre'], FILTER_SANITIZE_STRING);
    mysqli_real_escape_string($conn, $nombre);
    
    if($id  == ""){
    header("Location:../");
    }else{
     header("Location:../");
    }
    
     mysqli_real_escape_string($conn , $sql_categorias);
     
//------------------------------------------------------------------------------//

    $sql_categorias = "INSERT INTO `categorias` (`id`, `nombre`) VALUES ('$id','$nombre')";
      $resultInsert = mysqli_query($conn, $sql_categorias); 
     
     
     
$crear = touch("../../$nombre.php");
$abrir = fopen("../../$nombre.php", "a+"); 
fwrite($abrir , "<?php
   require 'database.php';
?>
<html>
<head>
   <?php include 'assets/php/head.php'?>
    <?php include 'assets/css/main.php' ?>
    <?php include 'assets/css/style.php' ?>
    <?php include 'assets/js/Google-Analytics.php' ?>
    <?php include 'assets/js/script.php' ?>
</head>
<body>
        <!-- Header -->
        <?php include 'assets/php/navbar3.php' ?>

        <!-- Menu -->
       <?php include 'assets/php/menu.php'  ?>
       
        <div class='uk-container uk-container-large'>
                
                <!-- Main -->
                <?php include 'assets/php/presentacion.php'?>
                
                <!--Selector-->
                <?php include 'assets/php/categorias/slider/slider-$nombre.php' ?>

                <!--Productos -->
                <?php include 'assets/php/categorias/productos_nologueado-$nombre.php' ?>
              
                <!-- Botones flotantes-->
                <?php include'assets/php/contacto.php' ?>
        
         <!-- Footer -->
              <?php include 'assets/php/footer.php' ?>
        </div>

</body>
</html>");
fclose($abrir);

$crear2 = touch("../../$nombre-2.php");
$abrir2 = fopen("../../$nombre-2.php", "a+"); 
fwrite($abrir2 , "<?php
   require 'database.php';
?>
<html>
<head>
   <?php include 'assets/php/head.php'?>
    <?php include 'assets/css/main.php' ?>
    <?php include 'assets/css/style.php' ?>
    <?php include 'assets/js/Google-Analytics.php' ?>
    <?php include 'assets/js/script.php' ?>
</head>
<body>
        <!-- Header -->
        <?php include 'assets/php/navbar3.php' ?>

        <!-- Menu -->
       <?php include 'assets/php/menu.php'  ?>
       
        <div class='uk-container uk-container-large'>
                
                <!-- Main -->
                <?php include 'assets/php/presentacion.php'?>
                
                <!--Selector-->
                <?php include 'assets/php/categorias/slider/slider-$nombre.php' ?>

                <!--Productos -->
                <?php include 'assets/php/categorias/productos-$nombre.php' ?>
              
                <!-- Botones flotantes-->
                <?php include'assets/php/contacto.php' ?>
        
         <!-- Footer -->
              <?php include 'assets/php/footer.php' ?>
        </div>

</body>
</html>");
fclose($abrir2);

$crear3 = touch("../../assets/php/categorias/slider/slider-$nombre.php");
$abrir3 = fopen("../../assets/php/categorias/slider/slider-$nombre.php","a+");
fwrite($abrir3,"<div class='uk-flex'>
      <select class='select' onChange=nav(this.value) class='form-select form-select-md' aria-label='.form-select-md example'>
          <option></option>
         <?php
                
              $productos = 'SELECT * FROM `productos` WHERE `categoria` = '$nombre';
              $resultp1 = mysqli_query($conn,$productos);          
            
               while($productosp1= mysqli_fetch_array($resultp1)){
                   
         ?>   
        </select>

      <select  class='select2' onChange=nav(this.value) class='form-select form-select-md' aria-label='.form-select-md example'>
        <option></option>
         <?php
                
              $productos = 'SELECT * FROM `categorias` ORDER BY `id` ASC';
              $resultp1 = mysqli_query($conn,$productos);          
            
               while($productosp1= mysqli_fetch_array($resultp1)){
                   
         ?>   
        </select>
</div> ");
fclose($abir3);