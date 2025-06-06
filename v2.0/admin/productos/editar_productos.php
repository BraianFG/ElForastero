<?php 
header('Content-Type: text/plain');
require '../../../assets/php/database.php';

$id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
$nombre = filter_var($_POST['nombre'], FILTER_SANITIZE_STRING);
$descripcion = filter_var($_POST['descripcion'], FILTER_SANITIZE_STRING);
$precio = filter_var($_POST['precio'], FILTER_SANITIZE_NUMBER_INT);
$categoria = filter_var($_POST['categoria'], FILTER_SANITIZE_STRING);

// Array para guardar los campos a actualizar
$campos = [];

$campos[] = "nombre = '" . mysqli_real_escape_string($conn, $nombre) . "'";
$campos[] = "descripcion = '" . mysqli_real_escape_string($conn, $descripcion) . "'";
$campos[] = "precio = '" . mysqli_real_escape_string($conn, $precio) . "'";
$campos[] = "categoria = '" . mysqli_real_escape_string($conn, $categoria) . "'";
$campos[] = "cantidad = 0";

// Fecha y hora
date_default_timezone_set('America/Argentina/Buenos_Aires');
$fecha = date("Y-m-d");
$hora = date("H:i:s");

$campos[] = "fecha2 = '$fecha'";
$campos[] = "hora2 = '$hora'";

// Función para manejar las imágenes
function subirImagen($inputName, $campoBD) {
    global $conn, $campos;

    if (isset($_FILES[$inputName]) && is_uploaded_file($_FILES[$inputName]['tmp_name'])) {
        $nombreArchivo = basename($_FILES[$inputName]['name']);
        $rutaDestino = "../../../images/" . $nombreArchivo;

        // Mover la imagen
        if (move_uploaded_file($_FILES[$inputName]['tmp_name'], $rutaDestino)) {
            $nombreArchivo = mysqli_real_escape_string($conn, $nombreArchivo);
            $campos[] = "$campoBD = '$nombreArchivo'";
        }
    }
}

// Procesar imágenes solo si se enviaron
subirImagen('imagen', 'imagen');
subirImagen('imagen01', 'imagen01');
subirImagen('imagen02', 'imagen02');

// Unir todos los campos en una sola consulta UPDATE
$sql = "UPDATE productos SET " . implode(', ', $campos) . " WHERE id = '$id'";

// Ejecutar la consulta
$result = mysqli_query($conn, $sql);

if ($result) {
    echo "OK";
} else {
    echo "Error al actualizar: " . mysqli_error($conn);
}

mysqli_close($conn);
exit;
?>
