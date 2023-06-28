<?php require '../../../database.php' ;

    session_start();
    if (isset($_SESSION["id_admin"])){
       $id_admin=$_SESSION["id_admin"];
    }else{
        header('Location:..');
    }

?>
<html>
    <head>
         <?php include "../../assets/php/head.php" ?>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer" async></script>
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
<body class="is-preload">
   <!-- Header -->    
 <div class="directorio__imagenes">
<?php
    $thefolder = "../../../images";
    $count = 0;
    if ($handler = opendir($thefolder)) {
    	echo "<ul>";
        while (false !== ($file = readdir($handler))) {
        if($file != '.' && $file != '..'){
            echo "<li class='lista__item'>
                <a id='$count' href='$thefolder/$file' target='_blank'><img src='https://img.gs/jhcplzwzdm/3x,100,quality=medium/http://tiendaelforastero.com.ar/images/$file' height='50' width='50'></a>";  
            include "lista.php";
            echo"<a class='fas fa-download' href='https://img.gs/jhcplzwzdm/3x,130,quality=high/http://tiendaelforastero.com.ar/images/$file' download></a>
             </li>";    
            include "eliminar_imagen.php";
            $count ++;
        }
        
    }  
        echo "</ul>";
        closedir($handler);
    }

?>


    <?php include "../../assets/css/main.php" ?>
</div>
</body>
</html>
   
