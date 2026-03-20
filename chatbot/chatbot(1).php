<?php
// chatbot/chatbot.php
header('Content-Type: application/json');
date_default_timezone_set('America/Mexico_City');

// Respuestas del chatbot
$responses = [
    'welcome' => [
        'response' => "🎌 ¡Konnichiwa! Soy tu sensei anime del ECOEMS 2026. ¡Estoy aquí para ayudarte a conquistar el examen!",
        'quick_replies' => [
            "¿Qué es el ECOEMS?",
            "Recomiéndame un video",
            "Mi progreso",
            "Ejercicio de práctica"
        ]
    ],
    'que_es_ecoems' => [
        'response' => "🎌 **ECOEMS 2026** es el Examen de Competencias para la Educación Media Superior.\n\n📅 **Fecha:** 15 de junio de 2026\n📝 **Preguntas:** 128\n📚 **Materias:** 10 áreas diferentes\n\n¡Con nuestros 91 episodios anime lo dominarás como un verdadero shonen!",
        'quick_replies' => [
            "¿Cuándo es el examen?",
            "Recomiéndame un video",
            "Ver mi progreso"
        ]
    ],
    'recomendar_video' => [
        'response' => "🎬 **¡Tengo la misión perfecta para ti!**\n\nTe recomiendo el **Episodio 0: ¡STRATEGY TIME!**\n⚡ Es el inicio perfecto para tu aventura anime.\n\n¿Quieres verlo ahora o prefieres otro tema?",
        'video' => [
            'id' => 0,
            'titulo' => '¡STRATEGY TIME! - Estrategia Anime ECOEMS 2026',
            'descripcion' => 'Aprende el método épico para dominar el examen.',
            'embed_url' => 'https://www.youtube.com/embed/dQw4w9WgXcQ?rel=0'
        ],
        'quick_replies' => [
            "Ver este video",
            "Matemáticas",
            "Historia",
            "Ciencias"
        ]
    ],
    'progreso' => [
        'response' => "📊 **Tu Progreso Anime:**\n\n✅ **Videos vistos:** 0/91\n📈 **Progreso:** 0%\n🎯 **Materias dominadas:** 0/12\n\n💪 ¡Comienza con el episodio 0 (Estrategia) y conviértete en un verdadero héroe anime!",
        'quick_replies' => [
            "Ver Episodio 0",
            "Recomiéndame un video",
            "Explicar un concepto"
        ]
    ],
    'ejercicio' => [
        'response' => "🧠 **Ejercicio de Entrenamiento Anime:**\n\n**Problema:** Resuelve: (3x + 5)² - (2x - 3)² = 45\n¿Cuál es el valor de x?\n\n💡 **Pista anime:** Recuerda las identidades notables: (a+b)² = a² + 2ab + b²\n\n¿Quieres ver la respuesta? ¡Pídemela!",
        'quick_replies' => [
            "Ver respuesta",
            "Otro ejercicio",
            "Explicar identidades notables"
        ]
    ]
];

// Obtener datos de la solicitud
$input = json_decode(file_get_contents('php://input'), true) ?: $_POST;

$message = isset($input['message']) ? trim($input['message']) : '';
$studentId = isset($input['studentId']) ? $input['studentId'] : 'unknown';
$progress = isset($input['progress']) ? (array)$input['progress'] : [];

// Determinar la intención del mensaje
function detectIntention($message) {
    $message = strtolower($message);
    
    if (strpos($message, 'hola') !== false || strpos($message, 'hi') !== false) {
        return 'welcome';
    }
    
    if (strpos($message, 'qué es') !== false || strpos($message, 'que es') !== false) {
        return 'que_es_ecoems';
    }
    
    if (strpos($message, 'recomi') !== false || strpos($message, 'video') !== false) {
        return 'recomendar_video';
    }
    
    if (strpos($message, 'progreso') !== false || strpos($message, 'avance') !== false) {
        return 'progreso';
    }
    
    if (strpos($message, 'ejercicio') !== false || strpos($message, 'practicar') !== false) {
        return 'ejercicio';
    }
    
    return 'welcome';
}

// Obtener respuesta basada en la intención
$intention = detectIntention($message);
$response = $responses[$intention] ?? $responses['welcome'];

// Si hay progreso, personalizar la respuesta
if ($intention === 'progreso' && !empty($progress)) {
    $totalVideos = 91;
    $watchedCount = count($progress);
    $percentage = round(($watchedCount / $totalVideos) * 100);
    
    $response['response'] = str_replace(
        ['0/91', '0%', '0/12'],
        ["{$watchedCount}/91", "{$percentage}%", count(array_unique($progress)) . "/12"],
        $response['response']
    );
}

// Agregar acciones si corresponde
if ($intention === 'recomendar_video' && isset($response['video'])) {
    $response['actions'] = [
        [
            'type' => 'play_video',
            'embed_url' => $response['video']['embed_url'],
            'title' => $response['video']['titulo']
        ]
    ];
}

// Devolver respuesta JSON
echo json_encode($response);
?>