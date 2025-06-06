<?php
$token = "7685655811:AAH5daJMUYPWRnxZCVEY2Xe9jb-gZ80ETZU";
$website = "https://api.telegram.org/bot" . $token;

// Obtener la actualización
$update = file_get_contents("php://input");
$update = json_decode($update, true);

// Verificar si hay mensaje
if (isset($update["message"])) {
    $messageData = $update["message"];
    $chatId = $messageData["chat"]["id"];
    $messageText = $messageData["text"] ?? '';

    // Guardar chat_id si no existe (grupos, canales, usuarios)
    $archivo = "chat_ids.txt";
    $chatIds = file_exists($archivo) ? file($archivo, FILE_IGNORE_NEW_LINES) : [];

    if (!in_array($chatId, $chatIds)) {
        file_put_contents($archivo, $chatId . PHP_EOL, FILE_APPEND);
    }

$botUsername = "TuBotUsername"; // sin el @, ej: CompreBot
$cmd = explode(" ", $messageText)[0]; // solo el comando

// Filtrar @botname si es que lo escribieron
$cmd = explode("@", $cmd)[0];


    // Procesar comandos
    $response = "";
    switch ($cmd) {
        case "/start":
            $response = "Hola 👋, te enviaremos productos recomendados cada día.";
            break;
        case "/direccion":
            $response = "Estamos en Belgrano 117, Chivilcoy, Buenos Aires.";
            break;
        case "/contactame":
            $response = "Envíame un mensaje @CompreEnElForastero";
            break;
        default:
            //$response = "Dijiste: $messageText";
    }

    // Enviar mensaje
    file_get_contents($website . "/sendMessage?chat_id=$chatId&text=" . urlencode($response));
}
?>
