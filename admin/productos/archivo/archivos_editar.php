<?php
    session_start();
    if (isset($_SESSION["id_admin"])){
       $id_admin=$_SESSION["id_admin"];
    }else{
        header('Location:../../ingresar');
    } 
    
$nombre1 = filter_var($_POST['nombre1'], FILTER_SANITIZE_STRING);
$nombre2 = filter_var($_POST['nombre2'], FILTER_SANITIZE_STRING);


 if (rename("../../images/$nombre1" , "../../images/$nombre2")) {
  header('Location: ../');
}
else {
    header('Location: ../');
}

?>