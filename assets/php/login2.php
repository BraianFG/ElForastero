<?php
session_start();
    include 'database.php';

     $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
     mysqli_real_escape_string($conn, $email);
     
    $password =filter_var($_POST['password'], FILTER_SANITIZE_STRING);
     mysqli_real_escape_string($conn , $password);
     
     $email = strtolower($email);
    
    $query = "SELECT * FROM usuarios_recuperar WHERE email = '$email'";
    $result = mysqli_query($conn, $query);
    
    
    if(!empty($result) && (mysqli_num_rows($result)==1)){
        $fila = mysqli_fetch_array($result);
        if(password_verify($password, $fila['password'])) {
         echo '<script>location.href = "index2"</script>';
             $_SESSION["id"] = $fila['id'];
        }
    
    }
  ?>
