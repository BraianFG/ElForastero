<?php
    include 'database.php';
    session_start();
    if (isset($_SESSION["id_admin"]) && $_SESSION['id_admin'] == 1){
    }else{
     header('Location: index');
    }
    
?>
<html>

<head>
      <?php include"assets/php/head.php"  ?>
</head>    
<body>
   <?php include "assets/php/navbar2.php" ?> 
      <?php include "assets/php/panel.php" ?> 
   <?php include 'assets/css/main.php' ?> 
 <body>
     
 </body>  
 </html>