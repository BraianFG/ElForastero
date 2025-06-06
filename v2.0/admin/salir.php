<?php
session_start();

// Verificamos si la sesión está activa
if (isset($_SESSION['id_admin'])) {

    // Comprobamos si la solicitud viene de un formulario legítimo (con el token CSRF)
    if (isset($_POST['salir']) && isset($_POST['csrf_token'])) {
        
        // Verificamos si el token CSRF es válido
        if ($_POST['csrf_token'] === $_SESSION['csrf_token']) {
            
            // Eliminar la sesión
            unset($_SESSION["id_admin"]);
            
            // Redirigir a la página de inicio de sesión
            header('Location: ingresar');
            exit;  // Importante para detener la ejecución del script
        } else {
            // Si el token CSRF no es válido, redirigimos o mostramos un mensaje de error
            echo "<script>alert('Token CSRF inválido.');</script>";
            header('Location: index.php');
            exit;
        }
    }
} else {
    // Si no hay sesión activa, redirigimos al login
    header('Location: ingresar');
    exit;
}
?>