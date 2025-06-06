<?php
session_start();
if (isset($_SESSION['id_admin'])) {
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <?php include "../../../assets/php/head.php" ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <!-- AlertifyJS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
    <script src="https://cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        body {
            background: linear-gradient(to right, #6a11cb, #2575fc);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .login-card {
            background-color: #fff;
            border: none;
            border-radius: 20px;
            padding: 40px 30px;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.2);
            width: 95%;
            max-width: 400px;
        }
        .login-title {
            font-weight: 600;
            color: #333;
        }
        .form-control {
            border-radius: 12px;
        }
        .btn-primary {
            border-radius: 12px;
        }
        .input-group-text {
            background-color: #f0f0f0;
            border-radius: 12px 0 0 12px;
        }
    </style>
</head>
<body class="d-flex align-items-center justify-content-center vh-100">

    <div class="login-card container">
        <h4 class="text-center login-title mb-4">Iniciar Sesión</h4>
        <form id="loginForm">
            <div class="mb-3">
                <label for="email" class="form-label">Correo electrónico</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="fa fa-user"></i></span>
                    <input type="email" class="form-control" name="email" id="email">
                </div>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Contraseña</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="fa fa-lock"></i></span>
                    <input type="password" class="form-control" name="password" id="password">
                    <span class="input-group-text" id="togglePassword" style="cursor: pointer;">
                        <i class="fa fa-eye"></i>
                    </span>
                </div>
            </div>
            <button type="submit" class="btn btn-primary w-100 mt-3">Entrar</button>
        </form>
    </div>

    <?php if (isset($_GET['error'])): ?>
    <script>
        alertify.notify("<?= htmlspecialchars($_GET['error']) ?>", 'error', 5);
    </script>
    <?php endif; ?>
    
<script>
$(document).ready(function() {
    $('#loginForm').submit(function(event) {
        event.preventDefault();  // Evitar el envío tradicional del formulario

        var email = $('#email').val();
        var password = $('#password').val();

        // Validación de campos vacíos
        if (!email || !password) {
            alertify.error('Por favor, ingrese el correo electrónico y la contraseña.', 5);
            return;
        }

        // Validación del formato de correo electrónico
        var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(email)) {
            alertify.error('Por favor, ingrese un correo electrónico válido.', 5);
            return;
        }

        // Realizamos la petición AJAX
        $.ajax({
            url: './login.php',  // Cambia por el nombre de tu archivo PHP que procesa el login
            type: 'POST',
            data: {
                email: email,
                password: password
            },
            success: function(response) {
                if (response == 'success') {
                    // Redirigir a la página principal si el login es exitoso
                    window.location.href = 'index.php';  
                } else {
                    // Condicional para manejar errores específicos de correo electrónico o contraseña
                    if (response == 'Correo electrónico no encontrado') {
                        alertify.error('El correo electrónico no está registrado.', 5);
                    } else if (response == 'Contraseña incorrecta') {
                        alertify.error('La contraseña que ingresaste es incorrecta.', 5);
                    } else {
                        // Si el error no es específico, muestra un mensaje general
                        alertify.error(response, 5);
                    }
                }
            },
            error: function() {
                // Mostrar un mensaje genérico de error si algo falla en la solicitud AJAX
                
                //alertify.error('Hubo un error al procesar la solicitud. Intenta nuevamente.', 5);
            }
        });
    });
});
</script>

<script>
$(document).ready(function() {
    // Alternar visibilidad de la contraseña
    $('#togglePassword').click(function() {
        var passwordField = $('#password');
        var icon = $(this).find('i');

        if (passwordField.attr('type') === 'password') {
            passwordField.attr('type', 'text');
            icon.removeClass('fa-eye').addClass('fa-eye-slash');
        } else {
            passwordField.attr('type', 'password');
            icon.removeClass('fa-eye-slash').addClass('fa-eye');
        }
    });

    // Validar el formulario
    $('#loginForm').submit(function(event) {
        event.preventDefault();  // Prevenir envío tradicional

        var email = $('#email').val();
        var password = $('#password').val();

        // Validación personalizada
        if (!email || !password) {
            alertify.error('Por favor, ingrese el correo electrónico y la contraseña.', 5);
            return;
        }

        var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(email)) {
            alertify.error('Por favor, ingrese un correo electrónico válido.', 5);
            return;
        }

        // Realizar la solicitud AJAX
        $.ajax({
            url: 'login_ajax.php',
            type: 'POST',
            data: {
                email: email,
                password: password
            },
            success: function(response) {
                if (response === 'success') {
                    window.location.href = 'index.php';
                } else {
                    if (response === 'Correo electrónico no encontrado') {
                        alertify.error('El correo electrónico no está registrado.', 5);
                    } else if (response === 'Contraseña incorrecta') {
                        alertify.error('La contraseña que ingresaste es incorrecta.', 5);
                    } else {
                        alertify.error('Error desconocido. Por favor intenta de nuevo.', 5);
                    }
                }
            },
            error: function(xhr, status, error) {
                alertify.error('Hubo un error al procesar la solicitud. Intenta nuevamente.', 5);
            }
        });
    });
});
</script>




<style>
    /* Personalización de AlertifyJS */
    .ajs-message.ajs-error {
        background-color: #d9534f !important; /* Color rojo de fondo */
        color: white !important;  /* Texto blanco */
        border-radius: 8px; /* Bordes redondeados */
        padding: 12px 20px;
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.2);
        font-size: 16px;
    }

    .ajs-message.ajs-success {
        background-color: #5bc0de !important; /* Color azul de fondo */
        color: white !important;
        border-radius: 8px;
        padding: 12px 20px;
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.2);
        font-size: 16px;
    }

    .ajs-button {
        display: none; /* Ocultar botones de alerta */
    }

    /* Personalizar la animación de la notificación */
    .ajs-show {
        animation: fadeIn 0.5s ease-out;
    }

    .ajs-hide {
        animation: fadeOut 0.5s ease-in;
    }

    @keyframes fadeIn {
        0% { opacity: 0; }
        100% { opacity: 1; }
    }

    @keyframes fadeOut {
        0% { opacity: 1; }
        100% { opacity: 0; }
    }
</style>
</body>
</html>
