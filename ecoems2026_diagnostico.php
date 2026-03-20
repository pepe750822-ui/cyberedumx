<?php
// ecoems2026.php - VERSIÓN CON DIAGNÓSTICO COMPLETO
error_reporting(E_ALL);
ini_set('display_errors', 1);

// ===================== CONFIGURACIÓN =====================
$config = [
    'nombre_plataforma' => 'ECOEMS 2026 - ESTRATEGIA INTELIGENTE',
    'version' => '7.2-DIAG',
    'fecha_examen' => '2026-06-15',
    'autor' => 'CyberEdu MX & BioReto Academy',
    'udemy_url' => 'https://www.udemy.com/course/ecoems2026conia/?referralCode=B2F05026985A2564FAAC',
    'ga_id' => 'G-88JWPSS4QL',
    'whatsapp' => '55 2326 9241',
    'email' => 'JoseLuisGlez@cyberedumx.com',
    'sitio_principal' => 'https://cyberedumx.com',
    'csv_file' => 'youtube-playlist-links-PLG1K4pAhMRgJRmanxPmX3AeAMpLS-sXlG-2025-12-18.csv',
    'simulador_completo' => 'ecoems2026/simuladores/simulador_completo.php'
];

// ===================== DIAGNÓSTICO INICIAL =====================
echo "<!-- =========== INICIO DIAGNÓSTICO =========== -->\n";
echo "<!-- Servidor: " . $_SERVER['SERVER_SOFTWARE'] . " -->\n";
echo "<!-- PHP Version: " . phpversion() . " -->\n";
echo "<!-- Directorio actual: " . __DIR__ . " -->\n";
echo "<!-- Archivo CSV: " . $config['csv_file'] . " -->\n";
echo "<!-- ¿CSV existe?: " . (file_exists($config['csv_file']) ? 'SÍ' : 'NO') . " -->\n";

// Función de diagnóstico mejorada
function buscarArchivosEnVideo($numero) {
    $carpeta = "ecoems2026/video{$numero}/";
    $resultado = [
        'pdf' => null,
        'imagen' => null,
        'audio' => null
    ];
    
    // DEBUG: Información de la carpeta
    echo "<!-- Video {$numero}: Buscando en carpeta '{$carpeta}' -->\n";
    echo "<!-- Video {$numero}: ¿Carpeta existe?: " . (is_dir($carpeta) ? 'SÍ' : 'NO') . " -->\n";
    
    if (!is_dir($carpeta)) {
        echo "<!-- Video {$numero}: Carpeta NO encontrada -->\n";
        return $resultado;
    }
    
    // DEBUG: Listar contenido de la carpeta
    echo "<!-- Video {$numero}: Escaneando carpeta... -->\n";
    $archivos = scandir($carpeta);
    
    foreach ($archivos as $archivo) {
        if ($archivo == '.' || $archivo == '..') continue;
        
        $ruta = $carpeta . $archivo;
        $extension = strtolower(pathinfo($archivo, PATHINFO_EXTENSION));
        
        echo "<!-- Video {$numero}: Archivo encontrado: {$archivo} (Tipo: {$extension}) -->\n";
        
        if ($extension == 'pdf' && !$resultado['pdf']) {
            $resultado['pdf'] = $ruta;
            echo "<!-- Video {$numero}: PDF asignado: {$ruta} -->\n";
        }
        
        if (in_array($extension, ['png', 'jpg', 'jpeg', 'gif', 'webp']) && !$resultado['imagen']) {
            $resultado['imagen'] = $ruta;
            echo "<!-- Video {$numero}: Imagen asignada: {$ruta} -->\n";
        }
        
        if ($extension == 'mp3' && !$resultado['audio']) {
            $resultado['audio'] = $ruta;
            echo "<!-- Video {$numero}: MP3 asignado: {$ruta} -->\n";
        }
    }
    
    // Busqueda específica para podcast.mp3
    $ruta_podcast = $carpeta . "podcast.mp3";
    echo "<!-- Video {$numero}: Buscando específicamente podcast.mp3 en {$ruta_podcast} -->\n";
    echo "<!-- Video {$numero}: ¿podcast.mp3 existe?: " . (file_exists($ruta_podcast) ? 'SÍ' : 'NO') . " -->\n";
    
    if (!$resultado['audio'] && file_exists($ruta_podcast)) {
        $resultado['audio'] = $ruta_podcast;
        echo "<!-- Video {$numero}: podcast.mp3 asignado: {$ruta_podcast} -->\n";
    }
    
    // DEBUG: Resumen final
    echo "<!-- Video {$numero}: RESULTADO FINAL -->\n";
    echo "<!-- Video {$numero}: Audio: " . ($resultado['audio'] ? $resultado['audio'] : 'NO ENCONTRADO') . " -->\n";
    echo "<!-- Video {$numero}: PDF: " . ($resultado['pdf'] ? $resultado['pdf'] : 'NO') . " -->\n";
    echo "<!-- Video {$numero}: Imagen: " . ($resultado['imagen'] ? $resultado['imagen'] : 'NO') . " -->\n";
    
    return $resultado;
}

// ===================== FUNCIONES RESTANTES (MANTENER IGUAL) =====================
function calcularDiasHasta($fecha) {
    $hoy = new DateTime();
    $examen = new DateTime($fecha);
    return $hoy->diff($examen)->days;
}

function extraerIdYouTube($url) {
    $patron = '/(?:youtube\.com\/(?:[^\/]+\/.+\/|(?:v|e(?:mbed)?)\/|.*[?&]v=)|youtu\.be\/)([^"&?\/\s]{11})/';
    preg_match($patron, $url, $matches);
    return isset($matches[1]) ? $matches[1] : 'dQw4w9WgXcQ';
}

function obtenerSimuladores() {
    $simuladores = [
        'completo' => null,
        'por_materia' => []
    ];
    
    $carpeta = "ecoems2026/simuladores/";
    
    if (is_dir($carpeta)) {
        $archivos = scandir($carpeta);
        foreach ($archivos as $archivo) {
            if ($archivo == '.' || $archivo == '..') continue;
            
            $ruta = $carpeta . $archivo;
            $extension = strtolower(pathinfo($archivo, PATHINFO_EXTENSION));
            
            if (in_array($extension, ['php', 'html', 'htm'])) {
                $nombre = ucwords(str_replace(['_', '-', '.php', '.html', '.htm'], ' ', $archivo));
                
                if (stripos($archivo, 'completo') !== false) {
                    $simuladores['completo'] = $ruta;
                } else {
                    $simuladores['por_materia'][] = [
                        'nombre' => $nombre,
                        'ruta' => $ruta
                    ];
                }
            }
        }
    }
    
    return $simuladores;
}

function obtenerGuiasEstudio() {
    $guias = [];
    $carpeta = "ecoems2026/guias/";
    
    if (is_dir($carpeta)) {
        $archivos = scandir($carpeta);
        foreach ($archivos as $archivo) {
            if ($archivo == '.' || $archivo == '..') continue;
            
            $extension = strtolower(pathinfo($archivo, PATHINFO_EXTENSION));
            if ($extension == 'pdf') {
                preg_match('/(\d{4})/', $archivo, $matches);
                $year = $matches[1] ?? str_replace(['guia', '.pdf', '.PDF'], '', $archivo);
                $guias[$year] = $carpeta . $archivo;
            }
        }
    }
    
    krsort($guias);
    return $guias;
}

function limpiarTitulo($titulo) {
    $titulo = preg_replace('/\*{1,2}(.*?)\*{1,2}/', '$1', $titulo);
    $titulo = preg_replace('/[^\x20-\x7E\x{00C0}-\x{00FF}\x{0100}-\x{017F}]/u', '', $titulo);
    $titulo = trim($titulo);
    return $titulo;
}

function leerCSVVideos($archivo_csv) {
    $videos = [];
    
    if (($handle = fopen($archivo_csv, 'r')) !== FALSE) {
        $encabezados = fgetcsv($handle, 1000, ',');
        
        echo "<!-- CSV: Encabezados encontrados: " . implode(', ', $encabezados) . " -->\n";
        $contador = 0;
        
        while (($fila = fgetcsv($handle, 1000, ',')) !== FALSE) {
            $contador++;
            echo "<!-- CSV Línea {$contador}: Procesando... -->\n";
            
            $video = array_combine($encabezados, $fila);
            
            if (isset($video['videoId']) && isset($video['title'])) {
                $numero = (int)$video['position'];
                $titulo = limpiarTitulo($video['title']);
                $youtube_url = $video['videoUrl'];
                $youtube_id = $video['videoId'];
                $fecha_publicacion = $video['publishedAt'];
                
                $materia = determinarMateria($numero);
                $duracion = determinarDuracion($numero);
                $notebooklm_url = "https://notebooklm.google.com/notebook/" . substr(md5($youtube_id), 0, 16);
                
                $videos[] = [
                    'id' => $numero,
                    'titulo' => $titulo,
                    'descripcion' => generarDescripcion($materia, $numero),
                    'materia' => $materia,
                    'youtube' => $youtube_url,
                    'youtube_id' => $youtube_id,
                    'embed_url' => 'https://www.youtube.com/embed/' . $youtube_id,
                    'notebooklm' => $notebooklm_url,
                    'duracion' => $duracion,
                    'fecha_publicacion' => $fecha_publicacion,
                    'archivos' => buscarArchivosEnVideo($numero)
                ];
                
                echo "<!-- CSV: Video {$numero} agregado: {$titulo} -->\n";
            }
        }
        fclose($handle);
        echo "<!-- CSV: Total videos procesados: {$contador} -->\n";
    } else {
        echo "<!-- ERROR: No se pudo abrir el archivo CSV -->\n";
    }
    
    usort($videos, function($a, $b) {
        return $a['id'] <=> $b['id'];
    });
    
    return $videos;
}

function determinarMateria($numero) {
    if ($numero == 0) return 'estrategia';
    if ($numero >= 1 && $numero <= 5) return 'habilidad_verbal';
    if ($numero >= 6 && $numero <= 10) return 'habilidad_matematica';
    if ($numero >= 11 && $numero <= 17) return 'biologia';
    if ($numero >= 18 && $numero <= 24) return 'fisica';
    if ($numero >= 25 && $numero <= 30) return 'quimica';
    if ($numero >= 31 && $numero <= 44) return 'matematicas';
    if ($numero >= 45 && $numero <= 58) return 'historia';
    if ($numero >= 59 && $numero <= 68) return 'espanol';
    if ($numero >= 69 && $numero <= 76) return 'formacion_civica';
    if ($numero >= 77 && $numero <= 86) return 'geografia';
    if ($numero >= 87 && $numero <= 90) return 'repaso';
    
    return 'repaso';
}

function determinarDuracion($numero) {
    return '5:00';
}

function generarDescripcion($materia, $numero) {
    $descripciones = [
        'estrategia' => 'Introducción a la estrategia inteligente ECOEMS 2026. Aprende el método de dos fases para dominar el examen.',
        'habilidad_verbal' => 'Desarrollo de habilidades de comprensión lectora y análisis textual para el ECOEMS 2026.',
        'habilidad_matematica' => 'Razonamiento lógico-matemático y resolución de problemas estratégicos.',
        'biologia' => 'Conceptos fundamentales de biología para el examen ECOEMS 2026.',
        'fisica' => 'Principios físicos esenciales para la preparación del examen.',
        'quimica' => 'Fundamentos químicos clave para el ECOEMS 2026.',
        'matematicas' => 'Álgebra, geometría y matemáticas avanzadas para el examen.',
        'historia' => 'Historia universal y de México para el ECOEMS 2026.',
        'espanol' => 'Lengua española y literatura para la preparación del examen.',
        'formacion_civica' => 'Educación cívica y ética para el ECOEMS 2026.',
        'geografia' => 'Geografía física y humana esencial para el examen.',
        'repaso' => 'Repaso estratégico final para el ECOEMS 2026.'
    ];
    
    return $descripciones[$materia] ?? "Video educativo número {$numero} para preparación ECOEMS 2026.";
}

// ===================== CARGAR 91 VIDEOS =====================
echo "<!-- =========== INICIANDO CARGA DE VIDEOS =========== -->\n";
$archivo_csv = $config['csv_file'];
$videos = [];

if (file_exists($archivo_csv)) {
    echo "<!-- CSV encontrado, leyendo... -->\n";
    $videos = leerCSVVideos($archivo_csv);
    $total_videos = count($videos);
    
    echo "<!-- Videos del CSV: {$total_videos} -->\n";
    
    if ($total_videos < 91) {
        echo "<!-- CSV tiene menos de 91 videos, completando... -->\n";
        for ($i = $total_videos; $i <= 90; $i++) {
            $videos[] = [
                'id' => $i,
                'titulo' => "Video {$i} - ECOEMS 2026 Estrategia Inteligente",
                'descripcion' => 'Contenido educativo para preparación ECOEMS 2026.',
                'materia' => determinarMateria($i),
                'youtube_id' => 'dQw4w9WgXcQ',
                'embed_url' => 'https://www.youtube.com/embed/dQw4w9WgXcQ',
                'notebooklm' => 'https://notebooklm.google.com/',
                'duracion' => '5:00',
                'archivos' => ['pdf' => null, 'imagen' => null, 'audio' => null]
            ];
        }
        $total_videos = 91;
    }
} else {
    echo "<!-- CSV NO encontrado, creando videos de ejemplo -->\n";
    for ($i = 0; $i <= 90; $i++) {
        $videos[] = [
            'id' => $i,
            'titulo' => "Video {$i} - ECOEMS 2026 Estrategia Inteligente",
            'descripcion' => 'Video educativo para preparación ECOEMS 2026.',
            'materia' => determinarMateria($i),
            'youtube_id' => 'dQw4w9WgXcQ',
            'embed_url' => 'https://www.youtube.com/embed/dQw4w9WgXcQ',
            'notebooklm' => 'https://notebooklm.google.com/',
            'duracion' => '5:00',
            'archivos' => buscarArchivosEnVideo($i) // Aún busca archivos reales
        ];
    }
    $total_videos = 91;
}

echo "<!-- Total videos cargados: {$total_videos} -->\n";

$dias_restantes = calcularDiasHasta($config['fecha_examen']);

// ===================== MATERIAS =====================
$materias = [
    'estrategia' => ['nombre' => 'Estrategia', 'color' => '#2c3e50', 'icono' => 'fa-chess'],
    'habilidad_verbal' => ['nombre' => 'Habilidad Verbal', 'color' => '#4caf50', 'icono' => 'fa-comment-alt'],
    'habilidad_matematica' => ['nombre' => 'Habilidad Matemática', 'color' => '#ff9800', 'icono' => 'fa-brain'],
    'biologia' => ['nombre' => 'Biología', 'color' => '#4caf50', 'icono' => 'fa-dna'],
    'fisica' => ['nombre' => 'Física', 'color' => '#2196f3', 'icono' => 'fa-atom'],
    'quimica' => ['nombre' => 'Química', 'color' => '#ff9800', 'icono' => 'fa-flask'],
    'matematicas' => ['nombre' => 'Matemáticas', 'color' => '#9c27b0', 'icono' => 'fa-calculator'],
    'historia' => ['nombre' => 'Historia', 'color' => '#e91e63', 'icono' => 'fa-landmark'],
    'espanol' => ['nombre' => 'Español', 'color' => '#795548', 'icono' => 'fa-book'],
    'formacion_civica' => ['nombre' => 'Formación Cívica', 'color' => '#3f51b5', 'icono' => 'fa-balance-scale'],
    'geografia' => ['nombre' => 'Geografía', 'color' => '#009688', 'icono' => 'fa-globe-americas'],
    'repaso' => ['nombre' => 'Repaso', 'color' => '#ff5722', 'icono' => 'fa-sync-alt']
];

// Calcular videos por materia
$videos_por_materia = [];
foreach ($videos as $video) {
    $materia = $video['materia'];
    if (!isset($videos_por_materia[$materia])) {
        $videos_por_materia[$materia] = 0;
    }
    $videos_por_materia[$materia]++;
}

// ===================== OBTENER RECURSOS =====================
echo "<!-- Buscando simuladores... -->\n";
$simuladores_info = obtenerSimuladores();
echo "<!-- Simuladores encontrados: " . count($simuladores_info['por_materia']) . " -->\n";

echo "<!-- Buscando guías... -->\n";
$guias_info = obtenerGuiasEstudio();
echo "<!-- Guías encontradas: " . count($guias_info) . " -->\n";

$simulador_completo_existe = file_exists($config['simulador_completo']);
echo "<!-- Simulador completo existe: " . ($simulador_completo_existe ? 'SÍ' : 'NO') . " -->\n";

echo "<!-- =========== FIN DIAGNÓSTICO INICIAL =========== -->\n";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ECOEMS 2026 - DIAGNÓSTICO | 91 Videos</title>
    
    <style>
        .debug-panel {
            background: #ff6b6b;
            color: white;
            padding: 15px;
            margin: 20px 0;
            border-radius: 10px;
            font-family: monospace;
            font-size: 12px;
        }
        .debug-title {
            font-weight: bold;
            margin-bottom: 10px;
            font-size: 16px;
        }
        .video-debug {
            background: #2c3e50;
            color: #ecf0f1;
            padding: 10px;
            margin: 5px 0;
            border-radius: 5px;
            font-size: 11px;
        }
    </style>
</head>
<body>
    <!-- PANEL DE DIAGNÓSTICO VISIBLE -->
    <div class="debug-panel">
        <div class="debug-title">DIAGNÓSTICO ECOEMS 2026</div>
        <div><strong>Servidor:</strong> <?php echo $_SERVER['SERVER_SOFTWARE']; ?></div>
        <div><strong>PHP:</strong> <?php echo phpversion(); ?></div>
        <div><strong>Directorio:</strong> <?php echo __DIR__; ?></div>
        <div><strong>Archivo CSV:</strong> <?php echo $config['csv_file']; ?> 
            (<?php echo file_exists($config['csv_file']) ? 'EXISTE' : 'NO EXISTE'; ?>)</div>
        <div><strong>Total videos cargados:</strong> <?php echo $total_videos; ?></div>
        <div><strong>Simulador completo:</strong> <?php echo $simulador_completo_existe ? 'EXISTE' : 'NO EXISTE'; ?></div>
        
        <!-- RESUMEN DE AUDIOS (primeros 10 videos) -->
        <div style="margin-top: 15px;">
            <strong>Estatus de Audios (primeros 10 videos):</strong>
            <?php 
            for ($i = 0; $i <= 10; $i++) {
                $audio_path = "ecoems2026/video{$i}/podcast.mp3";
                $exists = file_exists($audio_path);
                echo "<div class='video-debug'>";
                echo "Video {$i}: ";
                echo $exists ? "✅ podcast.mp3 ENCONTRADO" : "❌ podcast.mp3 NO ENCONTRADO";
                if (!$exists) {
                    // Verificar otras posibles rutas
                    $alt_path = "ecoems2026/video{$i}/audio.mp3";
                    if (file_exists($alt_path)) echo " (pero audio.mp3 SÍ existe)";
                }
                echo "</div>";
            }
            ?>
        </div>
    </div>
    
    <!-- RESTO DEL HTML DE TU SITIO (mantener igual) -->
    
<?php
// ===================== RENDERIZAR VIDEOS CON DIAGNÓSTICO =====================
echo "<!-- =========== INICIANDO RENDERIZADO DE VIDEOS =========== -->\n";

foreach($videos as $video): 
    $materia_info = $materias[$video['materia']] ?? $materias['historia'];
    $archivos = $video['archivos'];
    
    // DIAGNÓSTICO DETALLADO POR VIDEO
    echo "<!-- RENDER Video {$video['id']} -->\n";
    echo "<!-- Video {$video['id']} Audio path: " . ($archivos['audio'] ? $archivos['audio'] : 'NULO') . " -->\n";
    echo "<!-- Video {$video['id']} Carpeta real: " . (is_dir("ecoems2026/video{$video['id']}/") ? 'EXISTE' : 'NO EXISTE') . " -->\n";
    echo "<!-- Video {$video['id']} podcast.mp3: " . 
         (file_exists("ecoems2026/video{$video['id']}/podcast.mp3") ? 'EXISTE' : 'NO EXISTE') . " -->\n";
?>
    <div class="col-xl-4 col-lg-6 mb-4 video-item" data-materia="<?php echo $video['materia']; ?>">
        <div class="video-card h-100">
            <!-- MINIATURA DEL VIDEO -->
            <div class="video-thumbnail">
                <img src="https://img.youtube.com/vi/<?php echo $video['youtube_id']; ?>/mqdefault.jpg">
                <div class="play-button"><i class="fas fa-play"></i></div>
                <div class="video-badge">
                    <span class="badge bg-dark fs-6 p-2">#<?php echo str_pad($video['id'], 2, '0', STR_PAD_LEFT); ?></span>
                </div>
            </div>
            
            <div class="p-4">
                <!-- MATERIA -->
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <span class="badge rounded-pill fs-6 p-2">
                        <i class="fas <?php echo $materia_info['icono']; ?> me-2"></i>
                        <?php echo $materia_info['nombre']; ?>
                    </span>
                </div>
                
                <!-- TÍTULO -->
                <h5 class="fw-bold mb-3"><?php echo htmlspecialchars($video['titulo']); ?></h5>
                
                <!-- DIAGNÓSTICO VISIBLE EN TARJETA -->
                <div class="alert alert-<?php echo $archivos['audio'] ? 'success' : 'warning'; ?> p-2 mb-3">
                    <small>
                        <i class="fas fa-<?php echo $archivos['audio'] ? 'check-circle' : 'exclamation-triangle'; ?> me-1"></i>
                        Audio: <?php echo $archivos['audio'] ? 'ENCONTRADO' : 'NO ENCONTRADO'; ?>
                        <?php if($archivos['audio']): ?>
                            <br><small><?php echo $archivos['audio']; ?></small>
                        <?php endif; ?>
                    </small>
                </div>
                
                <!-- AUDIO PLAYER (SOLO SI EXISTE) -->
                <?php if($archivos['audio']): ?>
                <div class="audio-player">
                    <div class="audio-player-title">
                        <i class="fas fa-volume-up me-2"></i>
                        Audio disponible
                    </div>
                    <audio controls style="width: 100%">
                        <source src="<?php echo $archivos['audio']; ?>" type="audio/mpeg">
                        Tu navegador no soporta audio.
                    </audio>
                </div>
                <?php else: ?>
                <div class="alert alert-danger p-2">
                    <small>
                        <i class="fas fa-times-circle me-1"></i>
                        ERROR: No se encontró podcast.mp3 en ecoems2026/video<?php echo $video['id']; ?>/
                    </small>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
<?php 
endforeach;
echo "<!-- =========== FIN RENDERIZADO =========== -->\n";
?>

<!-- SCRIPTS DE DIAGNÓSTICO -->
<script>
// Mostrar información de diagnóstico en consola
console.log("=== DIAGNÓSTICO ECOEMS 2026 ===");
console.log("Total videos: <?php echo $total_videos; ?>");
console.log("Días restantes: <?php echo $dias_restantes; ?>");
console.log("CSV cargado: <?php echo file_exists($config['csv_file']) ? 'SÍ' : 'NO'; ?>");

// Verificar rutas de audio en consola
<?php
for ($i = 0; $i <= 10; $i++) {
    $audio_path = "ecoems2026/video{$i}/podcast.mp3";
    echo "console.log('Video {$i}: ' + ('<?php echo file_exists($audio_path) ? '✅' : '❌'; ?>'));\n";
}
?>
</script>
</body>
</html><?php
// ecoems2026.php - VERSIÓN CON DIAGNÓSTICO COMPLETO
error_reporting(E_ALL);
ini_set('display_errors', 1);

// ===================== CONFIGURACIÓN =====================
$config = [
    'nombre_plataforma' => 'ECOEMS 2026 - ESTRATEGIA INTELIGENTE',
    'version' => '7.2-DIAG',
    'fecha_examen' => '2026-06-15',
    'autor' => 'CyberEdu MX & BioReto Academy',
    'udemy_url' => 'https://www.udemy.com/course/ecoems2026conia/?referralCode=B2F05026985A2564FAAC',
    'ga_id' => 'G-88JWPSS4QL',
    'whatsapp' => '55 2326 9241',
    'email' => 'JoseLuisGlez@cyberedumx.com',
    'sitio_principal' => 'https://cyberedumx.com',
    'csv_file' => 'youtube-playlist-links-PLG1K4pAhMRgJRmanxPmX3AeAMpLS-sXlG-2025-12-18.csv',
    'simulador_completo' => 'ecoems2026/simuladores/simulador_completo.php'
];

// ===================== DIAGNÓSTICO INICIAL =====================
echo "<!-- =========== INICIO DIAGNÓSTICO =========== -->\n";
echo "<!-- Servidor: " . $_SERVER['SERVER_SOFTWARE'] . " -->\n";
echo "<!-- PHP Version: " . phpversion() . " -->\n";
echo "<!-- Directorio actual: " . __DIR__ . " -->\n";
echo "<!-- Archivo CSV: " . $config['csv_file'] . " -->\n";
echo "<!-- ¿CSV existe?: " . (file_exists($config['csv_file']) ? 'SÍ' : 'NO') . " -->\n";

// Función de diagnóstico mejorada
function buscarArchivosEnVideo($numero) {
    $carpeta = "ecoems2026/video{$numero}/";
    $resultado = [
        'pdf' => null,
        'imagen' => null,
        'audio' => null
    ];
    
    // DEBUG: Información de la carpeta
    echo "<!-- Video {$numero}: Buscando en carpeta '{$carpeta}' -->\n";
    echo "<!-- Video {$numero}: ¿Carpeta existe?: " . (is_dir($carpeta) ? 'SÍ' : 'NO') . " -->\n";
    
    if (!is_dir($carpeta)) {
        echo "<!-- Video {$numero}: Carpeta NO encontrada -->\n";
        return $resultado;
    }
    
    // DEBUG: Listar contenido de la carpeta
    echo "<!-- Video {$numero}: Escaneando carpeta... -->\n";
    $archivos = scandir($carpeta);
    
    foreach ($archivos as $archivo) {
        if ($archivo == '.' || $archivo == '..') continue;
        
        $ruta = $carpeta . $archivo;
        $extension = strtolower(pathinfo($archivo, PATHINFO_EXTENSION));
        
        echo "<!-- Video {$numero}: Archivo encontrado: {$archivo} (Tipo: {$extension}) -->\n";
        
        if ($extension == 'pdf' && !$resultado['pdf']) {
            $resultado['pdf'] = $ruta;
            echo "<!-- Video {$numero}: PDF asignado: {$ruta} -->\n";
        }
        
        if (in_array($extension, ['png', 'jpg', 'jpeg', 'gif', 'webp']) && !$resultado['imagen']) {
            $resultado['imagen'] = $ruta;
            echo "<!-- Video {$numero}: Imagen asignada: {$ruta} -->\n";
        }
        
        if ($extension == 'mp3' && !$resultado['audio']) {
            $resultado['audio'] = $ruta;
            echo "<!-- Video {$numero}: MP3 asignado: {$ruta} -->\n";
        }
    }
    
    // Busqueda específica para podcast.mp3
    $ruta_podcast = $carpeta . "podcast.mp3";
    echo "<!-- Video {$numero}: Buscando específicamente podcast.mp3 en {$ruta_podcast} -->\n";
    echo "<!-- Video {$numero}: ¿podcast.mp3 existe?: " . (file_exists($ruta_podcast) ? 'SÍ' : 'NO') . " -->\n";
    
    if (!$resultado['audio'] && file_exists($ruta_podcast)) {
        $resultado['audio'] = $ruta_podcast;
        echo "<!-- Video {$numero}: podcast.mp3 asignado: {$ruta_podcast} -->\n";
    }
    
    // DEBUG: Resumen final
    echo "<!-- Video {$numero}: RESULTADO FINAL -->\n";
    echo "<!-- Video {$numero}: Audio: " . ($resultado['audio'] ? $resultado['audio'] : 'NO ENCONTRADO') . " -->\n";
    echo "<!-- Video {$numero}: PDF: " . ($resultado['pdf'] ? $resultado['pdf'] : 'NO') . " -->\n";
    echo "<!-- Video {$numero}: Imagen: " . ($resultado['imagen'] ? $resultado['imagen'] : 'NO') . " -->\n";
    
    return $resultado;
}

// ===================== FUNCIONES RESTANTES (MANTENER IGUAL) =====================
function calcularDiasHasta($fecha) {
    $hoy = new DateTime();
    $examen = new DateTime($fecha);
    return $hoy->diff($examen)->days;
}

function extraerIdYouTube($url) {
    $patron = '/(?:youtube\.com\/(?:[^\/]+\/.+\/|(?:v|e(?:mbed)?)\/|.*[?&]v=)|youtu\.be\/)([^"&?\/\s]{11})/';
    preg_match($patron, $url, $matches);
    return isset($matches[1]) ? $matches[1] : 'dQw4w9WgXcQ';
}

function obtenerSimuladores() {
    $simuladores = [
        'completo' => null,
        'por_materia' => []
    ];
    
    $carpeta = "ecoems2026/simuladores/";
    
    if (is_dir($carpeta)) {
        $archivos = scandir($carpeta);
        foreach ($archivos as $archivo) {
            if ($archivo == '.' || $archivo == '..') continue;
            
            $ruta = $carpeta . $archivo;
            $extension = strtolower(pathinfo($archivo, PATHINFO_EXTENSION));
            
            if (in_array($extension, ['php', 'html', 'htm'])) {
                $nombre = ucwords(str_replace(['_', '-', '.php', '.html', '.htm'], ' ', $archivo));
                
                if (stripos($archivo, 'completo') !== false) {
                    $simuladores['completo'] = $ruta;
                } else {
                    $simuladores['por_materia'][] = [
                        'nombre' => $nombre,
                        'ruta' => $ruta
                    ];
                }
            }
        }
    }
    
    return $simuladores;
}

function obtenerGuiasEstudio() {
    $guias = [];
    $carpeta = "ecoems2026/guias/";
    
    if (is_dir($carpeta)) {
        $archivos = scandir($carpeta);
        foreach ($archivos as $archivo) {
            if ($archivo == '.' || $archivo == '..') continue;
            
            $extension = strtolower(pathinfo($archivo, PATHINFO_EXTENSION));
            if ($extension == 'pdf') {
                preg_match('/(\d{4})/', $archivo, $matches);
                $year = $matches[1] ?? str_replace(['guia', '.pdf', '.PDF'], '', $archivo);
                $guias[$year] = $carpeta . $archivo;
            }
        }
    }
    
    krsort($guias);
    return $guias;
}

function limpiarTitulo($titulo) {
    $titulo = preg_replace('/\*{1,2}(.*?)\*{1,2}/', '$1', $titulo);
    $titulo = preg_replace('/[^\x20-\x7E\x{00C0}-\x{00FF}\x{0100}-\x{017F}]/u', '', $titulo);
    $titulo = trim($titulo);
    return $titulo;
}

function leerCSVVideos($archivo_csv) {
    $videos = [];
    
    if (($handle = fopen($archivo_csv, 'r')) !== FALSE) {
        $encabezados = fgetcsv($handle, 1000, ',');
        
        echo "<!-- CSV: Encabezados encontrados: " . implode(', ', $encabezados) . " -->\n";
        $contador = 0;
        
        while (($fila = fgetcsv($handle, 1000, ',')) !== FALSE) {
            $contador++;
            echo "<!-- CSV Línea {$contador}: Procesando... -->\n";
            
            $video = array_combine($encabezados, $fila);
            
            if (isset($video['videoId']) && isset($video['title'])) {
                $numero = (int)$video['position'];
                $titulo = limpiarTitulo($video['title']);
                $youtube_url = $video['videoUrl'];
                $youtube_id = $video['videoId'];
                $fecha_publicacion = $video['publishedAt'];
                
                $materia = determinarMateria($numero);
                $duracion = determinarDuracion($numero);
                $notebooklm_url = "https://notebooklm.google.com/notebook/" . substr(md5($youtube_id), 0, 16);
                
                $videos[] = [
                    'id' => $numero,
                    'titulo' => $titulo,
                    'descripcion' => generarDescripcion($materia, $numero),
                    'materia' => $materia,
                    'youtube' => $youtube_url,
                    'youtube_id' => $youtube_id,
                    'embed_url' => 'https://www.youtube.com/embed/' . $youtube_id,
                    'notebooklm' => $notebooklm_url,
                    'duracion' => $duracion,
                    'fecha_publicacion' => $fecha_publicacion,
                    'archivos' => buscarArchivosEnVideo($numero)
                ];
                
                echo "<!-- CSV: Video {$numero} agregado: {$titulo} -->\n";
            }
        }
        fclose($handle);
        echo "<!-- CSV: Total videos procesados: {$contador} -->\n";
    } else {
        echo "<!-- ERROR: No se pudo abrir el archivo CSV -->\n";
    }
    
    usort($videos, function($a, $b) {
        return $a['id'] <=> $b['id'];
    });
    
    return $videos;
}

function determinarMateria($numero) {
    if ($numero == 0) return 'estrategia';
    if ($numero >= 1 && $numero <= 5) return 'habilidad_verbal';
    if ($numero >= 6 && $numero <= 10) return 'habilidad_matematica';
    if ($numero >= 11 && $numero <= 17) return 'biologia';
    if ($numero >= 18 && $numero <= 24) return 'fisica';
    if ($numero >= 25 && $numero <= 30) return 'quimica';
    if ($numero >= 31 && $numero <= 44) return 'matematicas';
    if ($numero >= 45 && $numero <= 58) return 'historia';
    if ($numero >= 59 && $numero <= 68) return 'espanol';
    if ($numero >= 69 && $numero <= 76) return 'formacion_civica';
    if ($numero >= 77 && $numero <= 86) return 'geografia';
    if ($numero >= 87 && $numero <= 90) return 'repaso';
    
    return 'repaso';
}

function determinarDuracion($numero) {
    return '5:00';
}

function generarDescripcion($materia, $numero) {
    $descripciones = [
        'estrategia' => 'Introducción a la estrategia inteligente ECOEMS 2026. Aprende el método de dos fases para dominar el examen.',
        'habilidad_verbal' => 'Desarrollo de habilidades de comprensión lectora y análisis textual para el ECOEMS 2026.',
        'habilidad_matematica' => 'Razonamiento lógico-matemático y resolución de problemas estratégicos.',
        'biologia' => 'Conceptos fundamentales de biología para el examen ECOEMS 2026.',
        'fisica' => 'Principios físicos esenciales para la preparación del examen.',
        'quimica' => 'Fundamentos químicos clave para el ECOEMS 2026.',
        'matematicas' => 'Álgebra, geometría y matemáticas avanzadas para el examen.',
        'historia' => 'Historia universal y de México para el ECOEMS 2026.',
        'espanol' => 'Lengua española y literatura para la preparación del examen.',
        'formacion_civica' => 'Educación cívica y ética para el ECOEMS 2026.',
        'geografia' => 'Geografía física y humana esencial para el examen.',
        'repaso' => 'Repaso estratégico final para el ECOEMS 2026.'
    ];
    
    return $descripciones[$materia] ?? "Video educativo número {$numero} para preparación ECOEMS 2026.";
}

// ===================== CARGAR 91 VIDEOS =====================
echo "<!-- =========== INICIANDO CARGA DE VIDEOS =========== -->\n";
$archivo_csv = $config['csv_file'];
$videos = [];

if (file_exists($archivo_csv)) {
    echo "<!-- CSV encontrado, leyendo... -->\n";
    $videos = leerCSVVideos($archivo_csv);
    $total_videos = count($videos);
    
    echo "<!-- Videos del CSV: {$total_videos} -->\n";
    
    if ($total_videos < 91) {
        echo "<!-- CSV tiene menos de 91 videos, completando... -->\n";
        for ($i = $total_videos; $i <= 90; $i++) {
            $videos[] = [
                'id' => $i,
                'titulo' => "Video {$i} - ECOEMS 2026 Estrategia Inteligente",
                'descripcion' => 'Contenido educativo para preparación ECOEMS 2026.',
                'materia' => determinarMateria($i),
                'youtube_id' => 'dQw4w9WgXcQ',
                'embed_url' => 'https://www.youtube.com/embed/dQw4w9WgXcQ',
                'notebooklm' => 'https://notebooklm.google.com/',
                'duracion' => '5:00',
                'archivos' => ['pdf' => null, 'imagen' => null, 'audio' => null]
            ];
        }
        $total_videos = 91;
    }
} else {
    echo "<!-- CSV NO encontrado, creando videos de ejemplo -->\n";
    for ($i = 0; $i <= 90; $i++) {
        $videos[] = [
            'id' => $i,
            'titulo' => "Video {$i} - ECOEMS 2026 Estrategia Inteligente",
            'descripcion' => 'Video educativo para preparación ECOEMS 2026.',
            'materia' => determinarMateria($i),
            'youtube_id' => 'dQw4w9WgXcQ',
            'embed_url' => 'https://www.youtube.com/embed/dQw4w9WgXcQ',
            'notebooklm' => 'https://notebooklm.google.com/',
            'duracion' => '5:00',
            'archivos' => buscarArchivosEnVideo($i) // Aún busca archivos reales
        ];
    }
    $total_videos = 91;
}

echo "<!-- Total videos cargados: {$total_videos} -->\n";

$dias_restantes = calcularDiasHasta($config['fecha_examen']);

// ===================== MATERIAS =====================
$materias = [
    'estrategia' => ['nombre' => 'Estrategia', 'color' => '#2c3e50', 'icono' => 'fa-chess'],
    'habilidad_verbal' => ['nombre' => 'Habilidad Verbal', 'color' => '#4caf50', 'icono' => 'fa-comment-alt'],
    'habilidad_matematica' => ['nombre' => 'Habilidad Matemática', 'color' => '#ff9800', 'icono' => 'fa-brain'],
    'biologia' => ['nombre' => 'Biología', 'color' => '#4caf50', 'icono' => 'fa-dna'],
    'fisica' => ['nombre' => 'Física', 'color' => '#2196f3', 'icono' => 'fa-atom'],
    'quimica' => ['nombre' => 'Química', 'color' => '#ff9800', 'icono' => 'fa-flask'],
    'matematicas' => ['nombre' => 'Matemáticas', 'color' => '#9c27b0', 'icono' => 'fa-calculator'],
    'historia' => ['nombre' => 'Historia', 'color' => '#e91e63', 'icono' => 'fa-landmark'],
    'espanol' => ['nombre' => 'Español', 'color' => '#795548', 'icono' => 'fa-book'],
    'formacion_civica' => ['nombre' => 'Formación Cívica', 'color' => '#3f51b5', 'icono' => 'fa-balance-scale'],
    'geografia' => ['nombre' => 'Geografía', 'color' => '#009688', 'icono' => 'fa-globe-americas'],
    'repaso' => ['nombre' => 'Repaso', 'color' => '#ff5722', 'icono' => 'fa-sync-alt']
];

// Calcular videos por materia
$videos_por_materia = [];
foreach ($videos as $video) {
    $materia = $video['materia'];
    if (!isset($videos_por_materia[$materia])) {
        $videos_por_materia[$materia] = 0;
    }
    $videos_por_materia[$materia]++;
}

// ===================== OBTENER RECURSOS =====================
echo "<!-- Buscando simuladores... -->\n";
$simuladores_info = obtenerSimuladores();
echo "<!-- Simuladores encontrados: " . count($simuladores_info['por_materia']) . " -->\n";

echo "<!-- Buscando guías... -->\n";
$guias_info = obtenerGuiasEstudio();
echo "<!-- Guías encontradas: " . count($guias_info) . " -->\n";

$simulador_completo_existe = file_exists($config['simulador_completo']);
echo "<!-- Simulador completo existe: " . ($simulador_completo_existe ? 'SÍ' : 'NO') . " -->\n";

echo "<!-- =========== FIN DIAGNÓSTICO INICIAL =========== -->\n";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ECOEMS 2026 - DIAGNÓSTICO | 91 Videos</title>
    
    <style>
        .debug-panel {
            background: #ff6b6b;
            color: white;
            padding: 15px;
            margin: 20px 0;
            border-radius: 10px;
            font-family: monospace;
            font-size: 12px;
        }
        .debug-title {
            font-weight: bold;
            margin-bottom: 10px;
            font-size: 16px;
        }
        .video-debug {
            background: #2c3e50;
            color: #ecf0f1;
            padding: 10px;
            margin: 5px 0;
            border-radius: 5px;
            font-size: 11px;
        }
    </style>
</head>
<body>
    <!-- PANEL DE DIAGNÓSTICO VISIBLE -->
    <div class="debug-panel">
        <div class="debug-title">DIAGNÓSTICO ECOEMS 2026</div>
        <div><strong>Servidor:</strong> <?php echo $_SERVER['SERVER_SOFTWARE']; ?></div>
        <div><strong>PHP:</strong> <?php echo phpversion(); ?></div>
        <div><strong>Directorio:</strong> <?php echo __DIR__; ?></div>
        <div><strong>Archivo CSV:</strong> <?php echo $config['csv_file']; ?> 
            (<?php echo file_exists($config['csv_file']) ? 'EXISTE' : 'NO EXISTE'; ?>)</div>
        <div><strong>Total videos cargados:</strong> <?php echo $total_videos; ?></div>
        <div><strong>Simulador completo:</strong> <?php echo $simulador_completo_existe ? 'EXISTE' : 'NO EXISTE'; ?></div>
        
        <!-- RESUMEN DE AUDIOS (primeros 10 videos) -->
        <div style="margin-top: 15px;">
            <strong>Estatus de Audios (primeros 10 videos):</strong>
            <?php 
            for ($i = 0; $i <= 10; $i++) {
                $audio_path = "ecoems2026/video{$i}/podcast.mp3";
                $exists = file_exists($audio_path);
                echo "<div class='video-debug'>";
                echo "Video {$i}: ";
                echo $exists ? "✅ podcast.mp3 ENCONTRADO" : "❌ podcast.mp3 NO ENCONTRADO";
                if (!$exists) {
                    // Verificar otras posibles rutas
                    $alt_path = "ecoems2026/video{$i}/audio.mp3";
                    if (file_exists($alt_path)) echo " (pero audio.mp3 SÍ existe)";
                }
                echo "</div>";
            }
            ?>
        </div>
    </div>
    
    <!-- RESTO DEL HTML DE TU SITIO (mantener igual) -->
    
<?php
// ===================== RENDERIZAR VIDEOS CON DIAGNÓSTICO =====================
echo "<!-- =========== INICIANDO RENDERIZADO DE VIDEOS =========== -->\n";

foreach($videos as $video): 
    $materia_info = $materias[$video['materia']] ?? $materias['historia'];
    $archivos = $video['archivos'];
    
    // DIAGNÓSTICO DETALLADO POR VIDEO
    echo "<!-- RENDER Video {$video['id']} -->\n";
    echo "<!-- Video {$video['id']} Audio path: " . ($archivos['audio'] ? $archivos['audio'] : 'NULO') . " -->\n";
    echo "<!-- Video {$video['id']} Carpeta real: " . (is_dir("ecoems2026/video{$video['id']}/") ? 'EXISTE' : 'NO EXISTE') . " -->\n";
    echo "<!-- Video {$video['id']} podcast.mp3: " . 
         (file_exists("ecoems2026/video{$video['id']}/podcast.mp3") ? 'EXISTE' : 'NO EXISTE') . " -->\n";
?>
    <div class="col-xl-4 col-lg-6 mb-4 video-item" data-materia="<?php echo $video['materia']; ?>">
        <div class="video-card h-100">
            <!-- MINIATURA DEL VIDEO -->
            <div class="video-thumbnail">
                <img src="https://img.youtube.com/vi/<?php echo $video['youtube_id']; ?>/mqdefault.jpg">
                <div class="play-button"><i class="fas fa-play"></i></div>
                <div class="video-badge">
                    <span class="badge bg-dark fs-6 p-2">#<?php echo str_pad($video['id'], 2, '0', STR_PAD_LEFT); ?></span>
                </div>
            </div>
            
            <div class="p-4">
                <!-- MATERIA -->
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <span class="badge rounded-pill fs-6 p-2">
                        <i class="fas <?php echo $materia_info['icono']; ?> me-2"></i>
                        <?php echo $materia_info['nombre']; ?>
                    </span>
                </div>
                
                <!-- TÍTULO -->
                <h5 class="fw-bold mb-3"><?php echo htmlspecialchars($video['titulo']); ?></h5>
                
                <!-- DIAGNÓSTICO VISIBLE EN TARJETA -->
                <div class="alert alert-<?php echo $archivos['audio'] ? 'success' : 'warning'; ?> p-2 mb-3">
                    <small>
                        <i class="fas fa-<?php echo $archivos['audio'] ? 'check-circle' : 'exclamation-triangle'; ?> me-1"></i>
                        Audio: <?php echo $archivos['audio'] ? 'ENCONTRADO' : 'NO ENCONTRADO'; ?>
                        <?php if($archivos['audio']): ?>
                            <br><small><?php echo $archivos['audio']; ?></small>
                        <?php endif; ?>
                    </small>
                </div>
                
                <!-- AUDIO PLAYER (SOLO SI EXISTE) -->
                <?php if($archivos['audio']): ?>
                <div class="audio-player">
                    <div class="audio-player-title">
                        <i class="fas fa-volume-up me-2"></i>
                        Audio disponible
                    </div>
                    <audio controls style="width: 100%">
                        <source src="<?php echo $archivos['audio']; ?>" type="audio/mpeg">
                        Tu navegador no soporta audio.
                    </audio>
                </div>
                <?php else: ?>
                <div class="alert alert-danger p-2">
                    <small>
                        <i class="fas fa-times-circle me-1"></i>
                        ERROR: No se encontró podcast.mp3 en ecoems2026/video<?php echo $video['id']; ?>/
                    </small>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
<?php 
endforeach;
echo "<!-- =========== FIN RENDERIZADO =========== -->\n";
?>

<!-- SCRIPTS DE DIAGNÓSTICO -->
<script>
// Mostrar información de diagnóstico en consola
console.log("=== DIAGNÓSTICO ECOEMS 2026 ===");
console.log("Total videos: <?php echo $total_videos; ?>");
console.log("Días restantes: <?php echo $dias_restantes; ?>");
console.log("CSV cargado: <?php echo file_exists($config['csv_file']) ? 'SÍ' : 'NO'; ?>");

// Verificar rutas de audio en consola
<?php
for ($i = 0; $i <= 10; $i++) {
    $audio_path = "ecoems2026/video{$i}/podcast.mp3";
    echo "console.log('Video {$i}: ' + ('<?php echo file_exists($audio_path) ? '✅' : '❌'; ?>'));\n";
}
?>
</script>
</body>
</html>