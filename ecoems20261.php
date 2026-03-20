<?php
// ecoems2026.php - VERSIÓN ESTRATEGIA INTELIGENTE CON 91 VIDEOS

error_reporting(E_ALL);
ini_set('display_errors', 1);

// ===================== CONFIGURACIÓN =====================
$config = [
    'nombre_plataforma' => 'ECOEMS 2026 - ESTRATEGIA INTELIGENTE',
    'version' => '7.2',
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

// ===================== FUNCIONES =====================
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

function buscarArchivosEnVideo($numero) {
    $resultado = [
        'pdf' => null,
        'imagen' => null,
        'audio' => null
    ];
    
    // Buscar en carpeta específica del video
    $carpeta_video = "ecoems2026/videos/video{$numero}/";
    
    if (is_dir($carpeta_video)) {
        $archivos = scandir($carpeta_video);
        foreach ($archivos as $archivo) {
            if ($archivo == '.' || $archivo == '..') continue;
            
            $ruta = $carpeta_video . $archivo;
            $extension = strtolower(pathinfo($archivo, PATHINFO_EXTENSION));
            
            // Buscar PDF
            if ($extension == 'pdf' && !$resultado['pdf']) {
                $resultado['pdf'] = $ruta;
            }
            
            // Buscar imagen
            if (in_array($extension, ['png', 'jpg', 'jpeg', 'gif', 'webp', 'svg']) && !$resultado['imagen']) {
                $resultado['imagen'] = $ruta;
            }
            
            // Buscar audio
            if (in_array($extension, ['mp3', 'm4a', 'wav', 'ogg']) && !$resultado['audio']) {
                $resultado['audio'] = $ruta;
            }
        }
    }
    
    return $resultado;
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
        
        while (($fila = fgetcsv($handle, 1000, ',')) !== FALSE) {
            // Asegurar que tenemos suficientes columnas
            if (count($fila) < count($encabezados)) {
                // Rellenar con valores vacíos si faltan columnas
                $fila = array_pad($fila, count($encabezados), '');
            }
            
            $video = array_combine($encabezados, $fila);
            
            if (isset($video['videoId']) && isset($video['title'])) {
                $numero = isset($video['position']) ? (int)$video['position'] : 0;
                $titulo = limpiarTitulo($video['title']);
                $youtube_url = isset($video['videoUrl']) ? $video['videoUrl'] : '';
                $youtube_id = $video['videoId'];
                $fecha_publicacion = isset($video['publishedAt']) ? $video['publishedAt'] : '';
                
                $materia = determinarMateria($numero);
                $duracion = determinarDuracion($numero);
                $notebooklm_url = "https://notebooklm.google.com/notebook/" . substr(md5($youtube_id), 0, 16);
                
                // Obtener archivos (incluyendo el podcast)
                $archivos = buscarArchivosEnVideo($numero);
                
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
                    'archivos' => $archivos  // Aquí incluimos los archivos encontrados
                ];
            }
        }
        fclose($handle);
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
    $duraciones = [
        'estrategia' => '4:35',
        'habilidad_verbal' => '5:10',
        'habilidad_matematica' => '5:15',
        'biologia' => '5:20',
        'fisica' => '5:15',
        'quimica' => '5:20',
        'matematicas' => '5:25',
        'historia' => '5:30',
        'espanol' => '5:15',
        'formacion_civica' => '5:20',
        'geografia' => '5:25',
        'repaso' => '5:35'
    ];
    
    $materia = determinarMateria($numero);
    return $duraciones[$materia] ?? '5:00';
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

// ===================== CARGAR 91 VIDEOS DESDE CSV =====================
$archivo_csv = $config['csv_file'];
$videos = [];

if (file_exists($archivo_csv)) {
    echo "<!-- CSV encontrado: $archivo_csv -->";
    $videos = leerCSVVideos($archivo_csv);
    $total_videos = count($videos);
    
    // Mostrar información de depuración
    echo "<!-- Videos cargados desde CSV: $total_videos -->";
    
    if ($total_videos < 91) {
        // Rellenar videos faltantes
        echo "<!-- Rellenando videos faltantes desde " . $total_videos . " hasta 90 -->";
        for ($i = $total_videos; $i <= 90; $i++) {
            $archivos = buscarArchivosEnVideo($i);
            
            $videos[] = [
                'id' => $i,
                'titulo' => "Video {$i} - ECOEMS 2026 Estrategia Inteligente",
                'descripcion' => generarDescripcion(determinarMateria($i), $i),
                'materia' => determinarMateria($i),
                'youtube_id' => 'dQw4w9WgXcQ',
                'embed_url' => 'https://www.youtube.com/embed/dQw4w9WgXcQ',
                'notebooklm' => 'https://notebooklm.google.com/notebook/' . substr(md5($i), 0, 16),
                'duracion' => determinarDuracion($i),
                'archivos' => $archivos
            ];
        }
        $total_videos = 91;
    }
} else {
    echo "<!-- CSV NO encontrado: $archivo_csv -->";
    // Si no existe el CSV, crear todos los videos desde 0 hasta 90
    for ($i = 0; $i <= 90; $i++) {
        $archivos = buscarArchivosEnVideo($i);
        
        $videos[] = [
            'id' => $i,
            'titulo' => "Video {$i} - ECOEMS 2026 Estrategia Inteligente",
            'descripcion' => generarDescripcion(determinarMateria($i), $i),
            'materia' => determinarMateria($i),
            'youtube_id' => 'dQw4w9WgXcQ',
            'embed_url' => 'https://www.youtube.com/embed/dQw4w9WgXcQ',
            'notebooklm' => 'https://notebooklm.google.com/notebook/' . substr(md5($i), 0, 16),
            'duracion' => determinarDuracion($i),
            'archivos' => $archivos
        ];
    }
    $total_videos = 91;
}

$dias_restantes = calcularDiasHasta($config['fecha_examen']);

// ===================== MATERIAS =====================
$materias = [
    'estrategia' => [
        'nombre' => 'Estrategia', 
        'color' => '#2c3e50', 
        'icono' => 'fa-chess',
        'descripcion' => 'Estrategia inteligente'
    ],
    'habilidad_verbal' => [
        'nombre' => 'Habilidad Verbal', 
        'color' => '#4caf50', 
        'icono' => 'fa-comment-alt',
        'descripcion' => 'Comprensión lectora y vocabulario'
    ],
    'habilidad_matematica' => [
        'nombre' => 'Habilidad Matemática', 
        'color' => '#ff9800', 
        'icono' => 'fa-brain',
        'descripcion' => 'Razonamiento matemático'
    ],
    'biologia' => [
        'nombre' => 'Biología', 
        'color' => '#4caf50', 
        'icono' => 'fa-dna',
        'descripcion' => 'Ciencias biológicas'
    ],
    'fisica' => [
        'nombre' => 'Física', 
        'color' => '#2196f3', 
        'icono' => 'fa-atom',
        'descripcion' => 'Ciencias físicas'
    ],
    'quimica' => [
        'nombre' => 'Química', 
        'color' => '#ff9800', 
        'icono' => 'fa-flask',
        'descripcion' => 'Ciencias químicas'
    ],
    'matematicas' => [
        'nombre' => 'Matemáticas', 
        'color' => '#9c27b0', 
        'icono' => 'fa-calculator',
        'descripcion' => 'Matemáticas avanzadas'
    ],
    'historia' => [
        'nombre' => 'Historia', 
        'color' => '#e91e63', 
        'icono' => 'fa-landmark',
        'descripcion' => 'Historia universal y de México'
    ],
    'espanol' => [
        'nombre' => 'Español', 
        'color' => '#795548', 
        'icono' => 'fa-book',
        'descripcion' => 'Lengua española y literatura'
    ],
    'formacion_civica' => [
        'nombre' => 'Formación Cívica', 
        'color' => '#3f51b5', 
        'icono' => 'fa-balance-scale',
        'descripcion' => 'Educación cívica y ética'
    ],
    'geografia' => [
        'nombre' => 'Geografía', 
        'color' => '#009688', 
        'icono' => 'fa-globe-americas',
        'descripcion' => 'Geografía física y humana'
    ],
    'repaso' => [
        'nombre' => 'Repaso', 
        'color' => '#ff5722', 
        'icono' => 'fa-sync-alt',
        'descripcion' => 'Repaso estratégico final'
    ]
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
$simuladores_info = obtenerSimuladores();
$guias_info = obtenerGuiasEstudio();

// Verificar si existe el simulador completo
$simulador_completo_existe = file_exists($config['simulador_completo']);

// Contar audios encontrados
$audios_encontrados = 0;
foreach ($videos as $video) {
    if ($video['archivos']['audio']) {
        $audios_encontrados++;
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ECOEMS 2026 - ESTRATEGIA INTELIGENTE | 91 Videos Fundamentales</title>
    
    <!-- Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo $config['ga_id']; ?>"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', '<?php echo $config['ga_id']; ?>');
    </script>
    
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- PDF.js para visualizar PDFs -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.11.174/pdf.min.js"></script>
    
    <style>
        :root {
            --primary-color: #2c3e50;
            --secondary-color: #3498db;
            --success-color: #2ecc71;
            --accent-color: #e74c3c;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            min-height: 100vh;
            padding-top: 80px;
        }
        
        #navbar {
            background: linear-gradient(135deg, var(--primary-color), #1a2530);
            box-shadow: 0 4px 20px rgba(0,0,0,0.1);
            z-index: 1000;
        }
        
        .header-main {
            background: linear-gradient(135deg, var(--primary-color), #1a2530);
            color: white;
            padding: 40px 0;
            text-align: center;
            margin-bottom: 20px;
            border-radius: 12px;
            position: relative;
            overflow: hidden;
        }
        
        .video-counter {
            font-size: 4rem;
            font-weight: bold;
            color: var(--success-color);
            text-shadow: 2px 2px 4px rgba(0,0,0,0.2);
            margin: 15px 0;
        }
        
        .video-card {
            background: white;
            border-radius: 12px;
            overflow: hidden;
            margin-bottom: 25px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.08);
            border: none;
            transition: all 0.3s ease;
            height: 100%;
            border-top: 3px solid var(--secondary-color);
        }
        
        .video-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.15);
        }
        
        .video-thumbnail {
            position: relative;
            height: 180px;
            overflow: hidden;
            background: #34495e;
            cursor: pointer;
        }
        
        .play-button {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: rgba(255, 0, 0, 0.8);
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 20px;
            opacity: 0.9;
            transition: all 0.3s;
        }
        
        .video-thumbnail:hover .play-button {
            background: rgba(255, 0, 0, 1);
            transform: translate(-50%, -50%) scale(1.1);
        }
        
        /* INFOGRAFÍA VISIBLE DIRECTAMENTE */
        .infografia-directa {
            margin-top: 15px;
            background: #f8f9fa;
            border-radius: 8px;
            padding: 12px;
            border: 1px solid #dee2e6;
            text-align: center;
        }
        
        .infografia-title {
            font-weight: 600;
            color: #2c3e50;
            margin-bottom: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 0.9rem;
        }
        
        .infografia-imagen {
            width: 100%;
            max-height: 150px;
            object-fit: contain;
            border-radius: 6px;
            cursor: pointer;
            transition: transform 0.3s;
            border: 1px solid #dee2e6;
            background: white;
            padding: 5px;
        }
        
        .infografia-imagen:hover {
            transform: scale(1.05);
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }
        
        .infografia-acciones {
            margin-top: 10px;
            display: flex;
            justify-content: center;
            gap: 10px;
        }
        
        /* PDF */
        .pdf-preview {
            margin-top: 15px;
            background: #f8f9fa;
            border-radius: 8px;
            padding: 12px;
            border: 1px solid #dee2e6;
        }
        
        .pdf-title {
            font-weight: 600;
            color: #2c3e50;
            margin-bottom: 8px;
            display: flex;
            align-items: center;
            font-size: 1rem;
        }
        
        /* Modal PDF con PDF.js */
        #pdfModal .modal-dialog {
            max-width: 95%;
            max-height: 90vh;
            margin: 2vh auto;
        }
        
        #pdfModal .modal-content {
            height: 96vh;
            display: flex;
            flex-direction: column;
        }
        
        #pdfModal .modal-header {
            background: linear-gradient(135deg, #2c3e50, #34495e);
            color: white;
            padding: 15px 20px;
            flex-shrink: 0;
        }
        
        #pdfModal .modal-body {
            flex: 1;
            overflow: hidden;
            padding: 0;
            display: flex;
            flex-direction: column;
        }
        
        #pdfModal .modal-footer {
            flex-shrink: 0;
            padding: 10px 20px;
        }
        
        /* Navegación PDF */
        .pdf-navigation {
            background: white;
            border-bottom: 1px solid #dee2e6;
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 10px;
        }
        
        .pdf-page-info {
            font-size: 14px;
            font-weight: 500;
        }
        
        .pdf-controls {
            display: flex;
            gap: 10px;
            align-items: center;
            flex-wrap: wrap;
        }
        
        /* Contenedor PDF */
        .pdf-viewer-container {
            flex: 1;
            overflow: auto;
            position: relative;
            background: #f8f9fa;
        }
        
        .pdf-canvas-container {
            margin: 0 auto;
            text-align: center;
            padding: 20px;
            min-height: 100%;
        }
        
        .pdf-canvas {
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            border: 1px solid #ddd;
            max-width: 100%;
            height: auto;
        }
        
        .pdf-loading {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        
        .pdf-loading-spinner {
            border: 4px solid #f3f3f3;
            border-top: 4px solid #3498db;
            border-radius: 50%;
            width: 40px;
            height: 40px;
            animation: spin 1s linear infinite;
            margin: 0 auto 15px;
        }
        
        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
        
        /* Modal Imágenes */
        #imageModal .modal-dialog {
            max-width: 90%;
            max-height: 90vh;
            margin: 5vh auto;
        }
        
        #imageModal .modal-body {
            padding: 0;
            text-align: center;
            background: #f8f9fa;
        }
        
        .modal-image {
            max-width: 100%;
            max-height: 70vh;
            object-fit: contain;
            margin: 0 auto;
            display: block;
        }
        
        /* Audio player */
        .audio-player {
            background: #f8f9fa;
            border-radius: 8px;
            padding: 12px;
            margin: 12px 0;
            border: 1px solid #e9ecef;
        }
        
        .btn-youtube {
            background: linear-gradient(135deg, #FF0000, #CC0000);
            color: white;
            border: none;
            padding: 8px 12px;
            border-radius: 6px;
            font-weight: 600;
            transition: all 0.3s;
            width: 100%;
            font-size: 0.9rem;
        }
        
        .btn-youtube:hover {
            background: linear-gradient(135deg, #CC0000, #990000);
            transform: translateY(-2px);
        }
        
        .btn-notebook {
            background: linear-gradient(135deg, #4285F4, #0d47a1);
            color: white;
            border: none;
            padding: 8px 12px;
            border-radius: 6px;
            font-weight: 600;
            transition: all 0.3s;
            width: 100%;
            font-size: 0.9rem;
        }
        
        .btn-notebook:hover {
            background: linear-gradient(135deg, #0d47a1, #0a3570);
            transform: translateY(-2px);
        }
        
        .stat-card {
            background: white;
            border-radius: 12px;
            padding: 20px;
            text-align: center;
            margin: 10px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.08);
            border: none;
            transition: transform 0.3s, box-shadow 0.3s;
            border-top: 3px solid var(--secondary-color);
        }
        
        .stat-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.15);
        }
        
        @media (max-width: 768px) {
            .video-counter {
                font-size: 2.5rem;
            }
            
            #pdfModal .modal-dialog {
                max-width: 100%;
                height: 100vh;
                margin: 0;
            }
            
            #pdfModal .modal-content {
                height: 100vh;
                border-radius: 0;
            }
            
            .pdf-navigation {
                flex-direction: column;
                gap: 10px;
                padding: 10px;
            }
            
            .pdf-controls {
                width: 100%;
                justify-content: center;
            }
            
            .infografia-imagen {
                max-height: 120px;
            }
        }
    </style>
</head>
<body>
    <!-- NAVBAR -->
    <nav id="navbar" class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand fw-bold fs-4" href="#">
                <i class="fas fa-chess me-2"></i>
                ECOEMS 2026
                <span class="badge bg-success ms-2">Estrategia Inteligente</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#inicio">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#videos">91 Videos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#herramientas">Herramientas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#simulador">Simulador</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- MODAL PARA PDF (CON VISOR PDF.JS) -->
    <div class="modal fade" id="pdfModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header bg-dark text-white">
                    <h5 class="modal-title" id="pdfModalTitle">PDF - Material de Estudio</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                </div>
                
                <!-- Navegación del PDF -->
                <div class="pdf-navigation">
                    <div class="pdf-page-info">
                        Página: <span id="currentPage">1</span> / <span id="totalPages">-</span>
                    </div>
                    <div class="pdf-controls">
                        <button id="prevPage" class="btn btn-sm btn-outline-secondary">
                            <i class="fas fa-chevron-left"></i> Anterior
                        </button>
                        <button id="nextPage" class="btn btn-sm btn-outline-secondary">
                            Siguiente <i class="fas fa-chevron-right"></i>
                        </button>
                        <div class="input-group input-group-sm" style="width: 100px;">
                            <input type="number" id="pageNumber" class="form-control" min="1" value="1" style="text-align: center;">
                            <button id="goToPage" class="btn btn-outline-primary">
                                <i class="fas fa-arrow-right"></i>
                            </button>
                        </div>
                        <select id="zoomLevel" class="form-select form-select-sm" style="width: 120px;">
                            <option value="0.5">50%</option>
                            <option value="0.75">75%</option>
                            <option value="1" selected>100%</option>
                            <option value="1.25">125%</option>
                            <option value="1.5">150%</option>
                            <option value="2">200%</option>
                        </select>
                    </div>
                </div>
                
                <div class="modal-body">
                    <div class="pdf-viewer-container">
                        <div class="pdf-loading" id="pdfLoading">
                            <div class="pdf-loading-spinner"></div>
                            <p>Cargando PDF...</p>
                        </div>
                        <div class="pdf-canvas-container" id="pdfCanvasContainer">
                            <!-- Aquí se renderizará el PDF -->
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="#" id="pdfDownloadLink" class="btn btn-primary">
                        <i class="fas fa-download me-2"></i>Descargar PDF
                    </a>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                        <i class="fas fa-times me-2"></i>Cerrar
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- MODAL PARA IMÁGENES -->
    <div class="modal fade" id="imageModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title" id="imageModalTitle">Infografía</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <img id="modalImage" class="modal-image" src="" alt="Infografía">
                </div>
                <div class="modal-footer">
                    <a href="#" id="imageDownloadLink" class="btn btn-primary">
                        <i class="fas fa-download me-2"></i>Descargar Imagen
                    </a>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                        <i class="fas fa-times me-2"></i>Cerrar
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- HEADER PRINCIPAL -->
    <div class="container mt-4" id="inicio">
        <div class="header-main">
            <h1 class="display-5 fw-bold mb-2">ECOEMS 2026</h1>
            <p class="lead mb-3 fs-4">ESTRATEGIA INTELIGENTE</p>
            
            <div class="video-counter">91</div>
            <div class="video-range mb-3 fs-5">VIDEOS FUNDAMENTALES DEL 0 AL 90</div>
            
            <div class="d-flex flex-wrap justify-content-center gap-2">
                <span class="badge bg-success fs-6 p-2">
                    <i class="fab fa-youtube me-2"></i>91 Videos
                </span>
                <span class="badge bg-warning fs-6 p-2">
                    <i class="fas fa-clock me-2"></i><?php echo $dias_restantes; ?> Días
                </span>
                <span class="badge bg-info fs-6 p-2">
                    <i class="fas fa-brain me-2"></i>NotebookLM
                </span>
                <span class="badge bg-danger fs-6 p-2">
                    <i class="fas fa-tasks me-2"></i>Simulador
                </span>
            </div>
        </div>
    </div>

    <!-- SECCIÓN ESTRATEGIA COMPACTA -->
    <div class="container mb-4">
        <div class="card border-0 shadow-sm">
            <div class="card-header bg-dark text-white py-3">
                <h4 class="mb-0 text-center">
                    <i class="fas fa-chess-knight me-2"></i>ESTRATEGIA INTELIGENTE ECOEMS 2026
                </h4>
            </div>
            <div class="card-body">
                <div class="row g-3 mb-3">
                    <div class="col-md-6">
                        <div class="card h-100 border-success border-2">
                            <div class="card-body">
                                <h5 class="card-title text-success">
                                    <i class="fas fa-rocket me-2"></i>FASE 1: BASE SÓLIDA
                                </h5>
                                <p class="card-text small mb-2">91 videos fundamentales que cubren el 100% del temario recurrente.</p>
                                <ul class="list-unstyled small mb-0">
                                    <li><i class="fas fa-check-circle text-success me-1"></i> Conocimiento válido para 2026, 2027 y más</li>
                                    <li><i class="fas fa-check-circle text-success me-1"></i> Audio integrado en cada video</li>
                                    <li><i class="fas fa-check-circle text-success me-1"></i> Acceso inmediato</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card h-100 border-info border-2">
                            <div class="card-body">
                                <h5 class="card-title text-info">
                                    <i class="fas fa-sync-alt me-2"></i>FASE 2: ACTUALIZACIÓN 2026
                                </h5>
                                <p class="card-text small mb-2">Cuando se publique la guía oficial ECOEMS 2026 (abril 2026).</p>
                                <ul class="list-unstyled small mb-0">
                                    <li><i class="fas fa-sync text-info me-1"></i> Actualización gratuita</li>
                                    <li><i class="fas fa-sync text-info me-1"></i> Videos resolviendo 128 preguntas nuevas</li>
                                    <li><i class="fas fa-sync text-info me-1"></i> Sin costo adicional</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Enlace Udemy compacto -->
                <div class="alert alert-warning mb-0 py-2">
                    <div class="d-flex align-items-center">
                        <div class="flex-shrink-0 me-3">
                            <i class="fab fa-udemy fs-4"></i>
                        </div>
                        <div class="flex-grow-1">
                            <h6 class="mb-1 fw-bold">Curso Udemy: ECOEMS 2026 con NotebookLM</h6>
                            <p class="mb-2 small">Resuelve las 128 preguntas con el Método Triple</p>
                            <a href="<?php echo $config['udemy_url']; ?>" target="_blank" class="btn btn-warning btn-sm">
                                <i class="fab fa-udemy me-1"></i>Acceder al Curso
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ESTADÍSTICAS -->
    <div class="container mb-4">
        <h4 class="text-center mb-4">
            <i class="fas fa-chart-bar me-2"></i>Tu Progreso
        </h4>
        <div class="row g-3">
            <div class="col-md-3 col-6">
                <div class="stat-card">
                    <i class="fab fa-youtube fa-2x mb-2" style="color: #FF0000;"></i>
                    <h3 class="mb-0">91</h3>
                    <p class="text-muted mb-0 small">Videos</p>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="stat-card">
                    <i class="fas fa-headphones fa-2x mb-2" style="color: #9b59b6;"></i>
                    <h3 class="mb-0" id="audiosDisponibles"><?php echo $audios_encontrados; ?></h3>
                    <p class="text-muted mb-0 small">Audios</p>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="stat-card">
                    <i class="fas fa-calendar-alt fa-2x mb-2" style="color: #3498db;"></i>
                    <h3 class="mb-0"><?php echo $dias_restantes; ?></h3>
                    <p class="text-muted mb-0 small">Días</p>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="stat-card">
                    <i class="fas fa-chart-line fa-2x mb-2" style="color: #2ecc71;"></i>
                    <h3 class="mb-0" id="progresoPorcentaje">0%</h3>
                    <p class="text-muted mb-0 small">Progreso</p>
                </div>
            </div>
        </div>
    </div>

    <!-- FILTROS DE VIDEOS -->
    <div class="container mb-3" id="videos">
        <div class="bg-light p-3 rounded-3 position-relative">
            <div class="position-absolute top-0 end-0 translate-middle-y mt-3 me-3">
                <span class="badge bg-danger p-2">91 Videos Fundamentales</span>
            </div>
            <h5 class="mb-2"><i class="fas fa-filter me-2"></i>Filtrar por Materia</h5>
            <div class="d-flex flex-wrap">
                <button class="btn btn-primary filter-btn active me-2 mb-2" data-filter="all">
                    Todas las Materias
                </button>
                <?php foreach($materias as $id => $materia): ?>
                <button class="btn filter-btn me-2 mb-2" 
                        data-filter="<?php echo $id; ?>"
                        style="background: <?php echo $materia['color']; ?>20; 
                               color: <?php echo $materia['color']; ?>; 
                               border: 1px solid <?php echo $materia['color']; ?>;">
                    <i class="fas <?php echo $materia['icono']; ?> me-1"></i>
                    <?php echo $materia['nombre']; ?>
                    <span class="badge bg-dark ms-1"><?php echo $videos_por_materia[$id] ?? 0; ?></span>
                </button>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <!-- LOS 91 VIDEOS FUNDAMENTALES -->
    <div class="container">
        <h3 class="mb-3 text-center">
            <i class="fab fa-youtube me-2"></i>91 VIDEOS FUNDAMENTALES ECOEMS 2026
        </h3>
        
        <div class="row" id="videoGrid">
            <?php foreach($videos as $video): 
                $materia_info = $materias[$video['materia']] ?? $materias['historia'];
                $archivos = $video['archivos'];
            ?>
            <div class="col-xl-4 col-lg-6 mb-4 video-item" data-materia="<?php echo $video['materia']; ?>">
                <div class="video-card h-100">
                    <!-- MINIATURA DEL VIDEO -->
                    <div class="video-thumbnail" onclick="playVideoEmbed('<?php echo $video['embed_url']; ?>', '<?php echo htmlspecialchars(addslashes($video['titulo'])); ?>')">
                        <img src="https://img.youtube.com/vi/<?php echo $video['youtube_id']; ?>/mqdefault.jpg" 
                             alt="<?php echo htmlspecialchars($video['titulo']); ?>">
                        <div class="play-button">
                            <i class="fas fa-play"></i>
                        </div>
                        <div class="position-absolute top-0 start-0 m-2">
                            <span class="badge bg-dark fs-6 p-1">
                                #<?php echo str_pad($video['id'], 2, '0', STR_PAD_LEFT); ?>
                            </span>
                        </div>
                        <div class="position-absolute bottom-0 end-0 m-2">
                            <span class="badge bg-dark">
                                <i class="fas fa-clock me-1"></i><?php echo $video['duracion']; ?>
                            </span>
                        </div>
                    </div>
                    
                    <!-- CONTENIDO -->
                    <div class="p-3">
                        <!-- MATERIA -->
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <span class="badge rounded-pill fs-6 p-1"
                                  style="background: <?php echo $materia_info['color']; ?>20; 
                                         color: <?php echo $materia_info['color']; ?>;">
                                <i class="fas <?php echo $materia_info['icono']; ?> me-1"></i>
                                <?php echo $materia_info['nombre']; ?>
                            </span>
                            <span class="badge bg-success">
                                <i class="fas fa-check me-1"></i>Disponible
                            </span>
                        </div>
                        
                        <!-- TÍTULO -->
                        <h6 class="fw-bold mb-2">
                            <?php echo htmlspecialchars($video['titulo']); ?>
                        </h6>
                        
                        <!-- DESCRIPCIÓN -->
                        <p class="text-muted mb-3 small">
                            <?php echo htmlspecialchars($video['descripcion']); ?>
                        </p>
                        
                        <!-- BOTONES PRINCIPALES -->
                        <div class="row g-2 mb-3">
                            <div class="col-6">
                                <button class="btn-youtube"
                                        onclick="playVideoEmbed('<?php echo $video['embed_url']; ?>', '<?php echo htmlspecialchars(addslashes($video['titulo'])); ?>')">
                                    <i class="fab fa-youtube me-1"></i>Ver Video
                                </button>
                            </div>
                            <div class="col-6">
                                <button class="btn-notebook"
                                        onclick="window.open('<?php echo $video['notebooklm']; ?>', '_blank')">
                                    <i class="fas fa-brain me-1"></i>NotebookLM
                                </button>
                            </div>
                        </div>
                        
                        <!-- INFOGRAFÍA VISIBLE DIRECTAMENTE -->
                        <?php if($archivos['imagen']): ?>
                        <div class="infografia-directa">
                            <div class="infografia-title">
                                <i class="fas fa-image me-2"></i>
                                Infografía del Video
                            </div>
                            <img src="<?php echo $archivos['imagen']; ?>" 
                                 class="infografia-imagen"
                                 alt="Infografía del video <?php echo $video['id']; ?>"
                                 onclick="abrirImagen('<?php echo $archivos['imagen']; ?>', 'Infografía - <?php echo htmlspecialchars(addslashes($video['titulo'])); ?>')"
                                 title="Haz clic para ver en tamaño completo">
                            <div class="infografia-acciones">
                                <button class="btn btn-outline-primary btn-sm" 
                                        onclick="abrirImagen('<?php echo $archivos['imagen']; ?>', 'Infografía - <?php echo htmlspecialchars(addslashes($video['titulo'])); ?>')">
                                    <i class="fas fa-expand me-1"></i>Ampliar
                                </button>
                                <a href="<?php echo $archivos['imagen']; ?>" 
                                   download
                                   class="btn btn-outline-success btn-sm">
                                    <i class="fas fa-download me-1"></i>Descargar
                                </a>
                            </div>
                        </div>
                        <?php endif; ?>
                        
                        <!-- PDF -->
                        <?php if($archivos['pdf']): ?>
                        <div class="pdf-preview mt-3">
                            <div class="pdf-title">
                                <i class="fas fa-file-pdf me-2"></i>
                                Material PDF del Video
                            </div>
                            <div class="d-flex align-items-center justify-content-between">
                                <div>
                                    <i class="fas fa-file-pdf text-danger fa-2x me-2"></i>
                                    <span class="small">Material complementario</span>
                                </div>
                                <div>
                                    <button class="btn btn-danger btn-sm me-1" 
                                            onclick="abrirPDF('<?php echo $archivos['pdf']; ?>', 'PDF - <?php echo htmlspecialchars(addslashes($video['titulo'])); ?>')">
                                        <i class="fas fa-eye me-1"></i>Ver PDF
                                    </button>
                                    <a href="<?php echo $archivos['pdf']; ?>" 
                                       download
                                       class="btn btn-outline-danger btn-sm">
                                        <i class="fas fa-download me-1"></i>Descargar
                                    </a>
                                </div>
                            </div>
                        </div>
                        <?php endif; ?>
                        
                        <!-- AUDIO -->
                        <?php if($archivos['audio']): ?>
                        <div class="audio-player mt-3">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <div>
                                    <i class="fas fa-volume-up me-1"></i>
                                    <span class="fw-bold small">Audio del Video</span>
                                </div>
                                <span class="badge bg-info small">Reproducir sin pantalla</span>
                            </div>
                            <div class="d-flex align-items-center justify-content-between">
                                <audio controls style="width: 100%; height: 40px;">
                                    <source src="<?php echo $archivos['audio']; ?>" type="audio/mpeg">
                                    Tu navegador no soporta el elemento de audio.
                                </audio>
                                <a href="<?php echo $archivos['audio']; ?>" 
                                   download
                                   class="btn btn-outline-success btn-sm ms-2">
                                    <i class="fas fa-download"></i>
                                </a>
                            </div>
                        </div>
                        <?php endif; ?>
                        
                        <!-- PROGRESO -->
                        <button class="btn btn-outline-success w-100 mt-3 btn-sm" 
                                data-video-id="<?php echo $video['id']; ?>"
                                onclick="toggleProgress(<?php echo $video['id']; ?>, this)">
                            <i class="far fa-circle me-1"></i>
                            <span>Marcar como visto</span>
                        </button>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        
        <!-- CONTADOR FINAL -->
        <div class="text-center mt-4 mb-5">
            <div class="alert alert-success py-3">
                <h5 class="mb-2"><i class="fas fa-check-circle me-2"></i>¡91 Videos Cargados!</h5>
                <p class="mb-2">Todos los videos fundamentales del ECOEMS 2026 están disponibles.</p>
                <p class="mb-0">
                    <i class="fas fa-info-circle me-1"></i>
                    <strong>Recuerda:</strong> Actualización a Guía 2026 incluida cuando se publique.
                </p>
            </div>
        </div>
    </div>

    <!-- SECCIÓN HERRAMIENTAS -->
    <div class="container mb-5" id="herramientas">
        <div class="card border-0 shadow-sm">
            <div class="card-header bg-primary text-white py-3">
                <h4 class="mb-0 text-center">
                    <i class="fas fa-tools me-2"></i>HERRAMIENTAS DE APOYO
                </h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <div class="card h-100 border-primary">
                            <div class="card-body text-center">
                                <i class="fas fa-brain fa-3x text-primary mb-3"></i>
                                <h5>NotebookLM IA</h5>
                                <p class="small">Asistente IA personalizado para cada video</p>
                                <p class="small text-muted">91 notebooks disponibles</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="card h-100 border-danger">
                            <div class="card-body text-center">
                                <i class="fas fa-tasks fa-3x text-danger mb-3"></i>
                                <h5>Simulador</h5>
                                <p class="small">Practica con exámenes reales</p>
                                <p class="small text-muted">5 años de exámenes (2021-2025)</p>
                                <?php if($simulador_completo_existe): ?>
                                <button class="btn btn-danger btn-sm mt-2" onclick="window.open('<?php echo $config['simulador_completo']; ?>', '_blank')">
                                    <i class="fas fa-play me-2"></i>Iniciar Simulador
                                </button>
                                <?php else: ?>
                                <span class="badge bg-warning text-dark mt-2">
                                    <i class="fas fa-clock me-1"></i>Próximamente
                                </span>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="card h-100 border-warning">
                            <div class="card-body text-center">
                                <i class="fab fa-udemy fa-3x text-warning mb-3"></i>
                                <h5>Curso Udemy</h5>
                                <p class="small">128 preguntas resueltas</p>
                                <p class="small text-muted">Método Triple con NotebookLM</p>
                                <a href="<?php echo $config['udemy_url']; ?>" target="_blank" class="btn btn-warning btn-sm mt-2">
                                    <i class="fab fa-udemy me-1"></i>Acceder al Curso
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- SIMULADOR COMPLETO -->
    <div class="container my-4" id="simulador">
        <div class="card border-danger">
            <div class="card-header bg-danger text-white py-3">
                <h4 class="mb-0"><i class="fas fa-tasks me-2"></i>SIMULADOR COMPLETO ECOEMS</h4>
            </div>
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <h5><code>simulador_completo.php</code></h5>
                        <p class="mb-2">Ubicado en: <code>ecoems2026/simuladores/simulador_completo.php</code></p>
                        <p class="mb-2">Practica con 5 años de exámenes reales (2021-2025)</p>
                        <ul class="list-unstyled mb-3">
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i><strong>640+ preguntas reales</strong></li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Sistema de cronometraje real del examen</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Explicaciones detalladas de cada respuesta</li>
                            <li class="mb-2"><i class="fas fa-sync-alt text-info me-2"></i><strong>Actualización a Guía 2026 incluida</strong></li>
                        </ul>
                        <?php if($simulador_completo_existe): ?>
                        <button class="btn btn-danger btn-lg" onclick="window.open('<?php echo $config['simulador_completo']; ?>', '_blank')">
                            <i class="fas fa-play me-2"></i>Iniciar Simulador Completo
                        </button>
                        <?php else: ?>
                        <div class="alert alert-warning py-2">
                            <i class="fas fa-exclamation-triangle me-2"></i>
                            El simulador estará disponible próximamente
                        </div>
                        <?php endif; ?>
                    </div>
                    <div class="col-md-4 text-center">
                        <i class="fas fa-chart-line fa-6x text-danger"></i>
                        <p class="mt-3"><strong>simulador_completo.php</strong></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- FOOTER -->
    <footer class="bg-dark text-white py-5 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4">
                    <h5>
                        <i class="fas fa-chess me-2"></i>
                        ECOEMS 2026
                    </h5>
                    <p class="mb-2"><strong>ESTRATEGIA INTELIGENTE</strong></p>
                    <p class="small">Método de dos fases para dominar el examen.</p>
                    <p class="small">Versión <?php echo $config['version']; ?> | 91 Videos</p>
                </div>
                <div class="col-md-4 mb-4">
                    <h5><i class="fas fa-link me-2"></i>Enlaces Rápidos</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#inicio" class="text-white text-decoration-none">Inicio</a></li>
                        <li class="mb-2"><a href="#videos" class="text-white text-decoration-none">91 Videos</a></li>
                        <li class="mb-2"><a href="#herramientas" class="text-white text-decoration-none">Herramientas</a></li>
                        <li class="mb-2"><a href="#simulador" class="text-white text-decoration-none">Simulador</a></li>
                    </ul>
                </div>
                <div class="col-md-4 mb-4">
                    <h5><i class="fas fa-envelope me-2"></i>Contacto</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><i class="fab fa-whatsapp me-2"></i><?php echo $config['whatsapp']; ?></li>
                        <li class="mb-2"><i class="fas fa-envelope me-2"></i><?php echo $config['email']; ?></li>
                        <li class="mb-2"><i class="fas fa-globe me-2"></i><?php echo $config['sitio_principal']; ?></li>
                    </ul>
                    <div class="mt-3">
                        <span class="badge bg-success p-2 me-2">
                            <i class="fas fa-video me-1"></i>
                            <span id="footerProgress">0/91</span>
                        </span>
                        <span class="badge bg-info p-2">
                            <i class="fas fa-headphones me-1"></i>
                            <span id="footerAudios"><?php echo $audios_encontrados; ?>/91</span>
                        </span>
                    </div>
                </div>
            </div>
            <hr class="bg-white my-4">
            <div class="text-center">
                <p class="mb-0">&copy; <?php echo date('Y'); ?> <?php echo $config['autor']; ?>. Estrategia Inteligente ECOEMS 2026.</p>
                <p class="mt-2">
                    <i class="fas fa-sync-alt me-1"></i>
                    Actualización a Guía 2026 garantizada cuando se publique en abril 2026.
                </p>
            </div>
        </div>
    </footer>

    <!-- MODAL PARA VIDEOS EMBEBIDOS -->
    <div class="modal fade" id="videoModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header bg-dark text-white">
                    <h5 class="modal-title" id="videoModalTitle">Reproductor de Video</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body p-0">
                    <div class="ratio ratio-16x9">
                        <iframe id="videoPlayer" src="" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        // Variables globales para el visor PDF
        let pdfDoc = null;
        let currentPage = 1;
        let pageRendering = false;
        let pageNumPending = null;
        let scale = 1.0;
        const canvas = document.createElement('canvas');
        const ctx = canvas.getContext('2d');
        
        // Variables para seguimiento de progreso
        const TOTAL_VIDEOS = 91;
        let progress = {
            watched: [],
            percentage: 0
        };
        
        // ==================== FUNCIONES DE PROGRESO ====================
        function loadProgress() {
            const saved = localStorage.getItem('ecoems2026_progress');
            if (saved) {
                progress = JSON.parse(saved);
            }
            updateStats();
            updateProgressButtons();
        }
        
        function saveProgress() {
            localStorage.setItem('ecoems2026_progress', JSON.stringify(progress));
            updateStats();
        }
        
        function toggleProgress(videoId, button) {
            const index = progress.watched.indexOf(videoId);
            if (index === -1) {
                progress.watched.push(videoId);
                button.innerHTML = '<i class="fas fa-check-circle me-2"></i><span>Visto</span>';
                button.className = 'btn btn-success w-100 mt-3 btn-sm';
            } else {
                progress.watched.splice(index, 1);
                button.innerHTML = '<i class="far fa-circle me-2"></i><span>Marcar como visto</span>';
                button.className = 'btn btn-outline-success w-100 mt-3 btn-sm';
            }
            saveProgress();
        }
        
        function updateProgressButtons() {
            document.querySelectorAll('[data-video-id]').forEach(button => {
                const videoId = parseInt(button.getAttribute('data-video-id'));
                if (progress.watched.includes(videoId)) {
                    button.innerHTML = '<i class="fas fa-check-circle me-2"></i><span>Visto</span>';
                    button.className = 'btn btn-success w-100 mt-3 btn-sm';
                }
            });
        }
        
        function updateStats() {
            const watchedCount = progress.watched.length;
            const percentage = Math.round((watchedCount / TOTAL_VIDEOS) * 100);
            
            document.getElementById('progresoPorcentaje').textContent = percentage + '%';
            document.getElementById('footerProgress').textContent = watchedCount + '/' + TOTAL_VIDEOS;
        }
        
        // ==================== FUNCIONES DE VIDEOS ====================
        function playVideoEmbed(embedUrl, title) {
            const videoModal = new bootstrap.Modal(document.getElementById('videoModal'));
            document.getElementById('videoModalTitle').textContent = title;
            document.getElementById('videoPlayer').src = embedUrl + '?autoplay=1';
            videoModal.show();
            
            // Limpiar cuando se cierre el modal
            document.getElementById('videoModal').addEventListener('hidden.bs.modal', function() {
                document.getElementById('videoPlayer').src = '';
            });
        }
        
        // ==================== FUNCIONES PARA PDF EMBEBIDO (PDF.js) ====================
        function renderPage(num) {
            if (pdfDoc === null) return;
            
            pageRendering = true;
            
            pdfDoc.getPage(num).then(function(page) {
                const viewport = page.getViewport({ scale: scale });
                canvas.height = viewport.height;
                canvas.width = viewport.width;
                
                const container = document.getElementById('pdfCanvasContainer');
                container.innerHTML = '';
                
                canvas.className = 'pdf-canvas';
                container.appendChild(canvas);
                
                const renderContext = {
                    canvasContext: ctx,
                    viewport: viewport
                };
                const renderTask = page.render(renderContext);
                
                renderTask.promise.then(function() {
                    pageRendering = false;
                    if (pageNumPending !== null) {
                        renderPage(pageNumPending);
                        pageNumPending = null;
                    }
                    
                    document.getElementById('currentPage').textContent = num;
                    document.getElementById('pageNumber').value = num;
                });
            });
            
            document.getElementById('prevPage').disabled = (num <= 1);
            document.getElementById('nextPage').disabled = (num >= pdfDoc.numPages);
        }
        
        function queueRenderPage(num) {
            if (pageRendering) {
                pageNumPending = num;
            } else {
                renderPage(num);
            }
        }
        
        function abrirPDF(pdfUrl, titulo) {
            console.log('Abriendo PDF:', pdfUrl);
            
            document.getElementById('pdfModalTitle').textContent = titulo;
            
            const downloadLink = document.getElementById('pdfDownloadLink');
            downloadLink.href = pdfUrl;
            downloadLink.download = pdfUrl.split('/').pop();
            
            const pdfLoading = document.getElementById('pdfLoading');
            const pdfCanvasContainer = document.getElementById('pdfCanvasContainer');
            
            pdfLoading.style.display = 'block';
            pdfCanvasContainer.innerHTML = '';
            
            currentPage = 1;
            scale = 1.0;
            pdfDoc = null;
            
            const loadingTask = pdfjsLib.getDocument(pdfUrl);
            
            loadingTask.promise.then(function(pdfDoc_) {
                pdfDoc = pdfDoc_;
                
                document.getElementById('totalPages').textContent = pdfDoc.numPages;
                document.getElementById('pageNumber').max = pdfDoc.numPages;
                
                pdfLoading.style.display = 'none';
                renderPage(currentPage);
                
                const pdfModal = new bootstrap.Modal(document.getElementById('pdfModal'));
                pdfModal.show();
                
            }).catch(function(error) {
                console.error('Error al cargar el PDF:', error);
                pdfLoading.innerHTML = `
                    <div class="text-danger">
                        <i class="fas fa-exclamation-triangle fa-3x mb-3"></i>
                        <p class="mb-3">Error al cargar el PDF. Intenta una de las siguientes opciones:</p>
                        <div class="d-flex flex-column gap-2">
                            <a href="${pdfUrl}" target="_blank" class="btn btn-outline-primary">
                                <i class="fas fa-external-link-alt me-2"></i>Abrir en nueva pestaña
                            </a>
                            <a href="${pdfUrl}" download class="btn btn-primary">
                                <i class="fas fa-download me-2"></i>Descargar PDF
                            </a>
                        </div>
                    </div>
                `;
            });
            
            document.getElementById('prevPage').onclick = function() {
                if (currentPage <= 1) return;
                currentPage--;
                queueRenderPage(currentPage);
            };
            
            document.getElementById('nextPage').onclick = function() {
                if (currentPage >= pdfDoc.numPages) return;
                currentPage++;
                queueRenderPage(currentPage);
            };
            
            document.getElementById('goToPage').onclick = function() {
                const pageNum = parseInt(document.getElementById('pageNumber').value);
                if (pageNum >= 1 && pageNum <= pdfDoc.numPages) {
                    currentPage = pageNum;
                    queueRenderPage(currentPage);
                }
            };
            
            document.getElementById('pageNumber').addEventListener('keypress', function(e) {
                if (e.key === 'Enter') {
                    document.getElementById('goToPage').click();
                }
            });
            
            document.getElementById('zoomLevel').onchange = function() {
                scale = parseFloat(this.value);
                queueRenderPage(currentPage);
            };
            
            document.getElementById('pdfModal').addEventListener('hidden.bs.modal', function() {
                console.log('Cerrando modal PDF');
                pdfCanvasContainer.innerHTML = '';
                pdfLoading.style.display = 'block';
                pdfLoading.innerHTML = `
                    <div class="pdf-loading-spinner"></div>
                    <p>Cargando PDF...</p>
                `;
                
                document.getElementById('currentPage').textContent = '1';
                document.getElementById('totalPages').textContent = '-';
                document.getElementById('pageNumber').value = '1';
                document.getElementById('zoomLevel').value = '1';
                
                pdfDoc = null;
            });
        }
        
        // ==================== FUNCIONES PARA IMÁGENES ====================
        function abrirImagen(imagenUrl, titulo) {
            console.log('Abriendo imagen:', imagenUrl);
            
            document.getElementById('imageModalTitle').textContent = titulo;
            
            const modalImage = document.getElementById('modalImage');
            const imageDownloadLink = document.getElementById('imageDownloadLink');
            
            modalImage.src = imagenUrl;
            modalImage.alt = titulo;
            imageDownloadLink.href = imagenUrl;
            imageDownloadLink.download = titulo.replace(/[^a-z0-9]/gi, '_').toLowerCase() + '.jpg';
            
            const imageModal = new bootstrap.Modal(document.getElementById('imageModal'));
            imageModal.show();
        }
        
        // ==================== FILTRADO ====================
        document.querySelectorAll('.filter-btn').forEach(button => {
            button.addEventListener('click', function() {
                document.querySelectorAll('.filter-btn').forEach(btn => {
                    btn.classList.remove('active');
                });
                
                this.classList.add('active');
                
                const filter = this.getAttribute('data-filter');
                const videoItems = document.querySelectorAll('.video-item');
                
                videoItems.forEach(item => {
                    if (filter === 'all' || item.getAttribute('data-materia') === filter) {
                        item.style.display = 'block';
                    } else {
                        item.style.display = 'none';
                    }
                });
            });
        });
        
        // ==================== INICIALIZACIÓN ====================
        document.addEventListener('DOMContentLoaded', function() {
            console.log('ECOEMS 2026 - ESTRATEGIA INTELIGENTE');
            console.log('91 videos fundamentales cargados');
            console.log('Visor PDF configurado con PDF.js');
            
            loadProgress();
            
            // Actualizar contadores en footer cada segundo
            setInterval(() => {
                const watchedCount = progress.watched.length;
                document.querySelector('#footerProgress').textContent = watchedCount + '/' + TOTAL_VIDEOS;
            }, 1000);
        });
    </script>
</body>
</html>