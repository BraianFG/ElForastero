<?php
// Token del bot
$botToken = '7685655811:AAH5daJMUYPWRnxZCVEY2Xe9jb-gZ80ETZU';
$apiUrl = "https://api.telegram.org/bot$botToken/";
$archivo = "chat_ids.txt";

// Leer IDs existentes
$chatIds = file($archivo, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

// Escuchar actualizaciones entrantes (solo para capturar nuevos IDs)
$update = json_decode(file_get_contents("php://input"), true);

if (isset($update["message"]["chat"]["id"])) {
    $newId = $update["message"]["chat"]["id"];
    if (!in_array($newId, $chatIds)) {
        file_put_contents($archivo, $newId . PHP_EOL, FILE_APPEND);
    }
    exit; // No enviar respuesta de bucle
}

// Enviar mensaje desde formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $message = trim($_POST['message']);

    if (empty($message)) {
        $response = 'Error: El mensaje no puede estar vacío.';
        $status = 'error';
    } else {
        $errorCount = 0;
        foreach ($chatIds as $chatId) {
            $data = [
                'chat_id' => $chatId,
                'text' => $message,
                'parse_mode' => 'HTML'
            ];

            $ch = curl_init($apiUrl . "sendMessage");
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);

            $result = curl_exec($ch);
            $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
            curl_close($ch);

            if ($httpCode !== 200 || !$result) {
                $errorCount++;
            }

            usleep(500000); // medio segundo entre envíos
        }

        if ($errorCount === 0) {
            $response = '¡Mensaje enviado a todos los chats!';
            $status = 'success';
        } else {
            $response = "Se enviaron los mensajes, pero hubo $errorCount error(es).";
            $status = 'warning';
        }
    }

    header('Location: index.php?response=' . urlencode($response) . '&status=' . $status);
    exit;
} else {
    header('Location: index.php ');
    exit;
}
?>
