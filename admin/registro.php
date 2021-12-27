<?php 
    require_once 'database.php';
    $id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
    mysqli_real_escape_string($conn , $id);
    
    $nombre = filter_var($_POST['nombre'], FILTER_SANITIZE_STRING);
    mysqli_real_escape_string($conn , $nombre);
    
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    mysqli_real_escape_string($conn , $email);
    
    $password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);
    mysqli_real_escape_string($conn , $password);
    
    mysqli_real_escape_string($conn , $sql);
    
     $hash = password_hash($password ,PASSWORD_DEFAULT, ['cost' => 8]);
     
   if($nombre || $email || $password ){
       header("Location:registrarse");
   } if(strlen($_POST['password'])<8){
         header("Location:registrarse");
   }else{
          header("Location:ingresar");
   }
   

//------------------------------------------------------------------------------//
$sql = "INSERT INTO `admin`(`nombre`, `email`, `password`) VALUES ('$nombre','$email','$hash')";

      $resultInsert = mysqli_query($conn, $sql); 
      
   mysqli_close($conexion);   
//------------------------------------------------------------------------------//


?>