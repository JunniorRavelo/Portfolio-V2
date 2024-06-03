<?php

/* Este acceso de token es un ejemplo lo cuales no sirve. */

// Define el token de acceso de tu bot de Telegram
$botToken = '7008617537:AAGw__qro5UE_eMSf1zQ-EI2WGcqGrasNUc'; // Reemplaza con tu token de acceso

// Define el ID de chat donde quieres enviar el mensaje
$chatId = '6350696942'; // Reemplaza con tu chat ID

// Obtiene el nombre del archivo actualmente en ejecución
$currentPage = basename($_SERVER['SCRIPT_NAME']);

// Obtiene la fecha y hora actual
$currentDateTime = date('Y-m-d H:i:s');

// Obtiene la dirección IP del visitante
$ipAddress = $_SERVER['REMOTE_ADDR'];

// Obtiene el navegador del visitante
$userAgent = $_SERVER['HTTP_USER_AGENT'];

// Obtiene el idioma del visitante
$language = $_SERVER['HTTP_ACCEPT_LANGUAGE'];

// Obtiene la información de geolocalización basada en la IP (evita hacerlo para localhost)
$country = 'Unknown';
if ($ipAddress !== '::1' && $ipAddress !== '127.0.0.1') {
    $geoInfo = file_get_contents("http://ipinfo.io/{$ipAddress}/json");
    $geoInfo = json_decode($geoInfo, true);
    $country = isset($geoInfo['country']) ? $geoInfo['country'] : 'Unknown';
}

// Define el mensaje que quieres enviar
$message = "DATE : $currentDateTime\nPAG: $currentPage\nIPV6: $ipAddress\nNAV: $userAgent\nLANGUAGE: $language\nCOUNTRU: $country";

// Construye la URL para enviar el mensaje
$telegramUrl = "https://api.telegram.org/bot{$botToken}/sendMessage?chat_id={$chatId}&text=" . urlencode($message);

// Envía la solicitud para enviar el mensaje
$response = file_get_contents($telegramUrl);

// Verifica si se envió correctamente
if ($response === false) {
    echo 'Error al enviar el mensaje.';
} else {
    echo 'Mensaje enviado correctamente.';
}
?>
