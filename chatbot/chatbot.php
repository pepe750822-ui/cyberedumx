<?php
// chatbot/chatbot.php
header('Content-Type: application/json');

$input = json_decode(file_get_contents('php://input'), true);
$message = $input['message'] ?? '';

// Respuestas inteligentes
$responses = [
    'hola' => '🎌 ¡Konnichiwa! ¿Listo para entrenar para el ECOEMS 2026?',
    'ecoems' => '📅 ECOEMS 2026: 15 de junio de 2026. ¡91 episodios para dominar!',
    'progreso' => '📊 Tu progreso se guarda automáticamente. ¡Sigue viendo episodios!',
    'default' => '🤔 Pregúntame sobre videos, ejercicios, o el examen ECOEMS 2026.'
];

$response = $responses['default'];

foreach ($responses as $key => $value) {
    if (stripos($message, $key) !== false) {
        $response = $value;
        break;
    }
}

echo json_encode([
    'response' => $response,
    'timestamp' => date('Y-m-d H:i:s')
]);
?>