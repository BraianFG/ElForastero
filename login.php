<?php
session_start();
require 'database.php';

     $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
     mysqli_real_escape_string($conn, $email);
     
    $password =filter_var($_POST['password'], FILTER_SANITIZE_STRING);
     mysqli_real_escape_string($conn , $password);
     
     $email = strtolower($email);
    
    $query = "SELECT * FROM usuarios WHERE email = '$email'";
    $result = mysqli_query($conn, $query);
    
    
    if(!empty($result) && (mysqli_num_rows($result)==1)){
        $fila = mysqli_fetch_array($result);
        if(password_verify($password, $fila['password'])) {
         echo '<script>location.href = "/"</script>';
             $_SESSION["id"] = $fila['id'];
             $_SESSION["nombre"] =  $fila['nombre'];
             $_SESSION["apellido"] = $fila['apellido'];
             $_SESSION["carrito"];
             
        }else{
            if(empty($password)){
                echo "<script>alertify.notify('Escriba su contraseña','error',5)</script>";
            }else{
                echo "<script>alertify.notify('contraseña incorrecta','error',5)</script>";
            }        
        }

    }else{
         $query2 ="SELECT * FROM usuarios_eliminados WHERE email = '$email' ";
    $result2 = mysqli_query($conn, $query2);
    if(!empty($result2) && (mysqli_num_rows($result2)==1)){
        $fila2 = mysqli_fetch_array($result2);
         echo '<script>location.href = "eliminado"</script>';
     }else{
             if(empty($email)){
         echo "<script>alertify.notify('Escriba su correo','error',5)</script>";
    }else{
      echo "<script>alertify.notify('correo no existente','error',5)</script>";      
    } 
     }    
    }
    
    
  ?>
