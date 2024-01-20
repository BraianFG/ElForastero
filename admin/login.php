<?php
session_start();
    require '../assets/php/database.php';
  
     $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
     mysqli_real_escape_string($conn, $email);
     
    $password =filter_var($_POST['password'], FILTER_SANITIZE_STRING);
     mysqli_real_escape_string($conn , $password);
 
    $query = "SELECT * FROM admin WHERE email= '$email'";
    $result = mysqli_query($conn, $query);
      $email = strtolower($email);
      
    if(empty($email) || empty($password)){
         echo "<script>alertify.notify('No deje sus datos de ingreso vacios','error',5)</script>";
    }
    
    if(!empty($result) AND (mysqli_num_rows($result)==1)){
        $fila = mysqli_fetch_array($result);
        if(password_verify($password, $fila['password'])) {
               echo '<script>location.href = "index"</script>';
             $_SESSION["id_admin"] = $fila['id'];
             include '../visitas.php';
       }else{
         echo "<script>alertify.notify('contraseña incorrecta','error',5)</script>";
        }
    }else{
         echo "<script>alertify.notify('correo no existente','error',5)</script>";

    }
    
?>