<?php
session_start();
require '../../assets/php/database.php'; // Asegúrate de incluir tu archivo de conexión a la base de datos

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Recuperar datos del formulario
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Verificar si el usuario existe
    $consulta = "SELECT * FROM admin WHERE email = '$email'";
    $resultado = mysqli_query($conn, $consulta);

    if (mysqli_num_rows($resultado) > 0) {
        $usuario = mysqli_fetch_assoc($resultado);

        // Verificar la contraseña
        if (password_verify($password, $usuario['password'])) {
            // Iniciar sesión
            $_SESSION['id_admin'] = $usuario['id'];
            $_SESSION['email'] = $usuario['email'];
            echo 'success';  // Enviar respuesta exitosa
        } else {
            echo 'Contraseña incorrecta';
        }
    } else {
        echo 'Usuario no encontrado';
    }
}
?>