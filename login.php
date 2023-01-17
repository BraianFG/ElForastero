<?php
session_start();
require_once 'database.php';

     $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
     mysqli_real_escape_string($conn, $email);
     
    $password =filter_var($_POST['password'], FILTER_SANITIZE_STRING);
     mysqli_real_escape_string($conn , $password);
     
     $email = strtolower($email);
    
    $query = "SELECT * FROM usuarios WHERE email = '$email'";
    $query2 ="SELECT * FROM usuarios_eliminados = '$email' ";
    $result = mysqli_query($conn, $query);
    $result2 = mysqli_query($conn, $query2);
       
    if(empty($email) || empty($password)){
         echo "<script>alertify.notify('No deje sus datos de ingreso vacios','error',5)</script>";
    }
    
    if(!empty($result) AND (mysqli_num_rows($result)==1)){
        $fila = mysqli_fetch_array($result);
        if(password_verify($password, $fila['password'])) {
         echo '<script>location.href = "index2"</script>';
             $_SESSION["id"] = $fila['id'];
             $_SESSION["nombre"] =  $fila['nombre'];
             $_SESSION["apellido"] = $fila['apellido'];
             $_SESSION["carrito"];
        }else{
            echo "<script>alertify.notify('contraseña incorrecta','error',5)</script>";
        }

    }else{
         echo "<script>alertify.notify('correo no existente','error',5)</script>";  
    }
    
    
    if(!empty($result2) AND (mysqli_num_rows($result2)==1)){
        $fila = mysqli_fetch_array($result);
        if(password_verify($password, $fila['password'])) {
           echo '<script>location.href = "eliminado"</script>';
        }
    }
  ?>
