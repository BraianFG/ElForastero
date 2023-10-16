<?php
   require "database.php";
    $email = strtolower($email);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $query = "SELECT * FROM usuarios WHERE email = '$email'";
    $result = mysqli_query($conn, $query);
    if(empty($email)){
         echo "<script>alertify.notify('Escriba su correo','error',5)</script>";
    }else{
      echo "<script>alertify.notify('Mensaje enviado al correo electrónico','succes',5)</script>";      
        $link = " Recupere su contraseña en https://tiendaelforastero.com.ar/recuperarContrasena ,
        P.D el link expriar en 10minutos";
        $headers = 'From: braian@tiendaelforastero.com' . "\r\n" .
        "Reply-To: '$email'". "\r\n" .
        'X-Mailer: PHP/' . phpversion();
        mail($email,"Recuperar contraseña",$link,$headers);
    }
    
?>