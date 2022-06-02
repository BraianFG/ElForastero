<?php include '../database.php' ?>
<html>
    <head>
         <?php include "../assets/php/head.php" ?>
    </head>
<body class="is-preload">
   <!-- Header -->    
 <div class="directorio__imagenes">
<?php
    $sitio= "tiendaelforastero.com.ar";
    $thefolder = "../../images";
    
    
    
    if ($handler = opendir($thefolder)) {
    	echo "<ul>";
        while (false !== ($file = readdir($handler))) {
        if($file != '.' && $file != '..'){
                echo "<li style='list-style:none;'>
                <a style='text-decoration: none;' href='../../images/$file' target='_blank'> $file</a>
                </li>";

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
   