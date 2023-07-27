<?php require '../../database.php' ;

    session_start();
    if (isset($_SESSION["id_admin"])){
       $id_admin=$_SESSION["id_admin"];
    }else{
        header('Location:..');
    }

?>
<html>
    <head>

         <?php include "../assets/php/head.php" ?>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer" async></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/fontawesome.min.js" integrity="sha512-c41hNYfKMuxafVVmh5X3N/8DiGFFAV/tU2oeNk+upk/dfDAdcbx5FrjFOkFhe4MOLaKlujjkyR4Yn7vImrXjzQ==" crossorigin="anonymous" referrerpolicy="no-referrer" defer></script>
    </head>
<body class="is-preload">
   <!-- Header -->    
 <div class="directorio__imagenes">
<?php
    $thefolder = "../../images";
    $count = 0;
    if ($handler = opendir($thefolder)) {
    	echo "<ul>";
        while (false !== ($file = readdir($handler))) {
        if($file != '.' && $file != '..'){
            echo "<li>
                <a id='$count' href='$thefolder/$file' target='_blank'><img src='$thefolder/$file' height='50' width='50'></a>";  
            include "lista.php";
            echo"<a class='fas fa-download' href='$thefolder/$file' download></a>
             </li>";    
            include "eliminar_imagen.php";
            $count ++;
        }
        
    }  
        echo "</ul>";
        closedir($handler);
    }

?>


    <?php include "../assets/css/main.php" ?>
</div>
</body>
</html>
   