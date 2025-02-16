<?php
// URL del video de Dailymotion
$video_url = 'https://www.dailymotion.com/video/x9eh45w'; // Cambia esto por la URL de tu video

// URL de la API de SaveFrom.net
$api_url = "https://api.savefrom.net/1/single?url=$video_url";

// Obtener la respuesta de la API
$response = @file_get_contents($api_url);

if ($response === FALSE) {
    die('No se pudo acceder a la API. Verifica tu conexión a Internet.');
}

// Decodificar la respuesta JSON
$data = json_decode($response, true);

// Verificar si se obtuvo la URL del video
if (isset($data['url'])) {
    echo "URL de descarga MP4: " . $data['url'];
} else {
    echo 'No se pudo obtener la URL del video.';
    if (isset($data['error'])) {
        echo "\nError: " . $data['error'] . " - " . $data['error_description'];
    }
}
?>
