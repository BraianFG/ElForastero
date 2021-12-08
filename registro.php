<?php 
    require_once 'database.php';
    
      $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
     mysqli_real_escape_string($conn, $email);
     
    $password =filter_var($_POST['password'], FILTER_SANITIZE_STRING);
     mysqli_real_escape_string($conn , $password);
     
    $nombre =filter_var($_POST['nombre'], FILTER_SANITIZE_STRING);
    mysqli_real_escape_string($conn , $nombre);
     
    $apellido = filter_var($_POST['apellido'], FILTER_SANITIZE_STRING);
    mysqli_real_escape_string($conn , $apellido);
    
   $celular = filter_var($_POST['celular'], FILTER_SANITIZE_STRING);
    mysqli_real_escape_string($conn , $celular);
     
   $ciudad = filter_var($_POST['ciudad'], FILTER_SANITIZE_STRING);
    mysqli_real_escape_string($conn , $ciudad);
    
   $direccion = filter_var($_POST['domicilio'], FILTER_SANITIZE_STRING);
    mysqli_real_escape_string($conn , $direccion);
    
    $codPostal = filter_var($_POST['codPostal'], FILTER_SANITIZE_STRING);
    mysqli_real_escape_string($conn , $codPostal);
     
     $hash = password_hash($password ,PASSWORD_DEFAULT, ['cost' => 8]);
     
   if($nombre || $apellido || $direccion || $direccion || $email || $hash ){
       header("Location:registrarse");
   } if(strlen($password)<8){
         header("Location:registrarse");
   }else{
          header("Location:ingresar");
   }
   
//------------------------------------------------------------------------------//
    $sql="INSERT INTO `usuarios`(`nombre`,  `apellido`,`direccion`, `ciudad`, `celular`, `email`, `password`,`CodPostal`) VALUES ('$nombre','$apellido', '$direccion','$ciudad' ,'$celular','$email','$hash','$codPostal');";

      $resultInsert = mysqli_query($conn, $sql); 
      
   mysqli_close($conexion);   
//------------------------------------------------------------------------------//


?>