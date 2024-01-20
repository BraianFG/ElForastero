<?php
  require '../database.php';
 
   session_start();
    if (isset($_SESSION["id"])){
     $UsuarioID = $_SESSION["id"];
     $nombre = $_SESSION["nombre"];
     $apellido = $_SESSION["apellido"];
    }else{
       header('Location: ../../../ingresar');
    }
    
    $idproducto = filter_var($_POST['idproducto'], FILTER_SANITIZE_NUMBER_INT);
    mysqli_real_escape_string($conn , $idproducto);
    
    $sql3="DELETE FROM `favoritos` WHERE `favoritos`.`usuarioID`='$UsuarioID' AND `favoritos`.`idproducto`='$idproducto';";
    $resultInsert3 = mysqli_query($conn, $sql3);
    mysqli_close($conn);   
?>
