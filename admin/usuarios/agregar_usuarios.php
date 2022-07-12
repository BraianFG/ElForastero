<?php 
    require '../../database.php';
    
    session_start();
    if (isset($_SESSION["id_admin"])){
       $id_admin=$_SESSION["id_admin"];
    }else{
        header('Location:../../ingresar');
    } 
    
    $id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
    mysqli_real_escape_string($conn , $id);
    
    $nombre = filter_var($_POST['nombre'], FILTER_SANITIZE_STRING);
    mysqli_real_escape_string($conn , $nombre);
    
    $apellido = filter_var($_POST['apellido'], FILTER_SANITIZE_STRING);
    mysqli_real_escape_string($conn , $apellido);
    
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    mysqli_real_escape_string($conn , $email);
    
    $celular = filter_var($_POST['celular'], FILTER_SANITIZE_STRING);
    mysqli_real_escape_string($conn , $celular);
   
    $ciudad = filter_var($_POST['ciudad'], FILTER_SANITIZE_STRING);
    mysqli_real_escape_string($conn , $ciudad);
    
    $direccion = filter_var($_POST['direccion'], FILTER_SANITIZE_STRING);
    mysqli_real_escape_string($conn , $direccion);
    
    $password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);
    mysqli_real_escape_string($conn , $password);
    
    $codPostal = filter_var($_POST['codPostal'], FILTER_SANITIZE_STRING);
    mysqli_real_escape_string($conn , $codPostal);
    
    $hash = password_hash($password ,PASSWORD_DEFAULT, ['cost' => 8]);
     
   if($nombre || $apellido || $direccion || $ciudad || $email || $hash){
       header("Location:registrarse");
   } if(strlen($password)<8){
         header("Location:../../");
   }else{
          header("Location:../../");
   }
   
//------------------------------------------------------------------------------//
    $sql="INSERT INTO `usuarios`(`id` , `nombre`,  `apellido`,`direccion`, `ciudad`, `celular`, `email`, `password`,`codPostal`) VALUES ('{$id}','{$nombre}','{$apellido}',' {$direccion}','{$ciudad}','{$celular}','{$email}','$hash',$codPostal);";

      $resultInsert = mysqli_query($conn, $sql); 
      
   mysqli_close($conexion);   
//------------------------------------------------------------------------------//

