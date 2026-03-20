<?php
// ecoems2026.php - VERSIÓN FUNCIONAL HOSTINGER
error_reporting(0); // Desactivar errores para producción
ini_set('display_errors', 0);

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

function buscarArchivosEnVideo($numero) {
    // RUTA SIMPLIFICADA - SOLO BUSCA MP3
    $carpeta = "ecoems2026/video{$numero}/";
    $resultado = ['pdf' => null, 'imagen' => null, 'audio' => null];
    
    // Buscar podcast.mp3 directamente
    $ruta_podcast = $carpeta . "podcast.mp3";
    if (file_exists($ruta_podcast)) {
        $resultado['audio'] = $ruta_podcast;
    }
    
    return $resultado;
}

function leerCSVVideos($archivo_csv) {
    $videos = [];
    
    if (file_exists($archivo_csv) && ($handle = fopen($archivo_csv, 'r')) !== FALSE) {
        $encabezados = fgetcsv($handle, 1000, ',');
        
        while (($fila = fgetcsv($handle, 1000, ',')) !== FALSE) {
            if (count($fila) < count($encabezados)) continue;
            
            $video = array_combine($encabezados, $fila);
            
            if (isset($video['videoId']) && isset($video['title'])) {
                $numero = (int)($video['position'] ?? 0);
                $titulo = htmlspecialchars($video['title']);
                $youtube_id = $video['videoId'];
                
                $videos[] = [
                    'id' => $numero,
                    'titulo' => $titulo,
                    'descripcion' => "Video educativo #$numero para preparación ECOEMS 2026",
                    'materia' => determinarMateria($numero),
                    'youtube_id' => $youtube_id,
                    'embed_url' => 'https://www.youtube.com/embed/' . $youtube_id,
                    'notebooklm' => 'https://notebooklm.google.com/',
                    'duracion' => '5:00',
                    'archivos' => buscarArchivosEnVideo($numero)
                ];
            }
        }
        fclose($handle);
    }
    
    // Completar hasta 91 videos si el CSV no los tiene todos
    if (count($videos) < 91) {
        $video_ids = array_column($videos, 'id');
        for ($i = 0; $i <= 90; $i++) {
            if (!in_array($i, $video_ids)) {
                $videos[] = [
                    'id' => $i,
                    'titulo' => "Video $i - ECOEMS 2026 Estrategia Inteligente",
                    'descripcion' => 'Contenido educativo para preparación ECOEMS 2026.',
                    'materia' => determinarMateria($i),
                    'youtube_id' => 'dQw4w9WgXcQ',
                    'embed_url' => 'https://www.youtube.com/embed/dQw4w9WgXcQ',
                    'notebooklm' => 'https://notebooklm.google.com/',
                    'duracion' => '5:00',
                    'archivos' => buscarArchivosEnVideo($i)
                ];
            }
        }
    }
    
    // Ordenar por ID
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
    return 'repaso';
}

// ===================== CARGAR DATOS =====================
$dias_restantes = calcularDiasHasta($config['fecha_examen']);
$videos = leerCSVVideos($config['csv_file']);
$total_videos = count($videos);

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
    $videos_por_materia[$materia] = ($videos_por_materia[$materia] ?? 0) + 1;
}

// Verificar simulador
$simulador_completo_existe = file_exists($config['simulador_completo']);
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
    
    <style>
        :root { --primary-color: #2c3e50; --secondary-color: #3498db; }
        body { font-family: 'Segoe UI', sans-serif; background: #f5f7fa; padding-top: 80px; }
        #navbar { background: linear-gradient(135deg, var(--primary-color), #1a2530); }
        .video-card { background: white; border-radius: 15px; margin-bottom: 30px; box-shadow: 0 10px 30px rgba(0,0,0,0.1); }
        .video-thumbnail { height: 200px; overflow: hidden; background: #34495e; cursor: pointer; position: relative; }
        .play-button { position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); background: rgba(255,0,0,0.8); width: 60px; height: 60px; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-size: 24px; }
        .audio-player { background: #f8f9fa; border-radius: 10px; padding: 15px; margin: 15px 0; }
    </style>
</head>
<body>
    <!-- NAVBAR -->
    <nav id="navbar" class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand fw-bold fs-4" href="#"><i class="fas fa-chess me-2"></i>ECOEMS 2026</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link active" href="#inicio">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link" href="#videos">Videos</a></li>
                    <li class="nav-item"><a class="nav-link" href="#simulador">Simulador</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- HEADER -->
    <div class="container mt-4" id="inicio">
        <div class="header-main text-center text-white p-5 rounded-3" style="background: linear-gradient(135deg, #2c3e50, #1a2530);">
            <h1 class="display-4 fw-bold">ECOEMS 2026</h1>
            <p class="lead fs-3">ESTRATEGIA INTELIGENTE</p>
            <div class="video-counter display-1 fw-bold text-success">91</div>
            <p class="fs-5">VIDEOS FUNDAMENTALES</p>
        </div>
    </div>

    <!-- VIDEOS -->
    <div class="container my-5" id="videos">
        <h2 class="mb-4 text-center"><i class="fab fa-youtube me-2"></i>91 VIDEOS ECOEMS 2026</h2>
        
        <!-- Filtros -->
        <div class="bg-light p-4 rounded-3 mb-4">
            <h4><i class="fas fa-filter me-2"></i>Filtrar por Materia</h4>
            <div class="d-flex flex-wrap gap-2">
                <button class="btn btn-primary filter-btn active" data-filter="all">Todas</button>
                <?php foreach($materias as $id => $materia): ?>
                <button class="btn filter-btn" data-filter="<?php echo $id; ?>" style="background:<?php echo $materia['color']; ?>20;color:<?php echo $materia['color']; ?>;border:2px solid <?php echo $materia['color']; ?>;">
                    <i class="fas <?php echo $materia['icono']; ?> me-2"></i><?php echo $materia['nombre']; ?>
                    <span class="badge bg-dark ms-2"><?php echo $videos_por_materia[$id] ?? 0; ?></span>
                </button>
                <?php endforeach; ?>
            </div>
        </div>
        
        <!-- Grid de Videos -->
        <div class="row" id="videoGrid">
            <?php foreach($videos as $video): 
                $materia_info = $materias[$video['materia']] ?? $materias['historia'];
                $archivos = $video['archivos'];
            ?>
            <div class="col-xl-4 col-lg-6 mb-4 video-item" data-materia="<?php echo $video['materia']; ?>">
                <div class="video-card h-100">
                    <!-- Miniatura -->
                    <div class="video-thumbnail" onclick="playVideo('<?php echo $video['embed_url']; ?>', '<?php echo addslashes($video['titulo']); ?>')">
                        <img src="https://img.youtube.com/vi/<?php echo $video['youtube_id']; ?>/mqdefault.jpg" alt="Miniatura" class="w-100 h-100 object-fit-cover">
                        <div class="play-button"><i class="fas fa-play"></i></div>
                        <div class="position-absolute top-0 start-0 p-2">
                            <span class="badge bg-dark fs-6">#<?php echo str_pad($video['id'], 2, '0', STR_PAD_LEFT); ?></span>
                        </div>
                    </div>
                    
                    <!-- Contenido -->
                    <div class="p-4">
                        <!-- Materia -->
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <span class="badge rounded-pill p-2" style="background:<?php echo $materia_info['color']; ?>20;color:<?php echo $materia_info['color']; ?>;">
                                <i class="fas <?php echo $materia_info['icono']; ?> me-2"></i><?php echo $materia_info['nombre']; ?>
                            </span>
                            <span class="badge bg-success"><i class="fas fa-check me-1"></i>Disponible</span>
                        </div>
                        
                        <!-- Título -->
                        <h5 class="fw-bold mb-3"><?php echo htmlspecialchars($video['titulo']); ?></h5>
                        
                        <!-- Botones -->
                        <div class="row g-3 mb-3">
                            <div class="col-6">
                                <button class="btn btn-danger w-100" onclick="playVideo('<?php echo $video['embed_url']; ?>', '<?php echo addslashes($video['titulo']); ?>')">
                                    <i class="fab fa-youtube me-2"></i>Ver Video
                                </button>
                            </div>
                            <div class="col-6">
                                <button class="btn btn-primary w-100" onclick="window.open('<?php echo $video['notebooklm']; ?>', '_blank')">
                                    <i class="fas fa-brain me-2"></i>NotebookLM
                                </button>
                            </div>
                        </div>
                        
                        <!-- Audio -->
                        <?php if($archivos['audio']): ?>
                        <div class="audio-player">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <span class="fw-bold"><i class="fas fa-volume-up me-2"></i>Audio</span>
                                <span class="badge bg-info">Reproducir sin pantalla</span>
                            </div>
                            <audio controls class="w-100">
                                <source src="<?php echo $archivos['audio']; ?>" type="audio/mpeg">
                            </audio>
                            <a href="<?php echo $archivos['audio']; ?>" download class="btn btn-outline-primary btn-sm w-100 mt-2">
                                <i class="fas fa-download me-2"></i>Descargar Audio
                            </a>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>

    <!-- SIMULADOR -->
    <div class="container my-5" id="simulador">
        <div class="card border-danger">
            <div class="card-header bg-danger text-white">
                <h3 class="mb-0"><i class="fas fa-tasks me-2"></i>SIMULADOR COMPLETO</h3>
            </div>
            <div class="card-body">
                <?php if($simulador_completo_existe): ?>
                <p class="fs-5">Ubicado en: <code>ecoems2026/simuladores/simulador_completo.php</code></p>
                <button class="btn btn-danger btn-lg" onclick="window.open('<?php echo $config['simulador_completo']; ?>', '_blank')">
                    <i class="fas fa-play me-2"></i>Iniciar Simulador
                </button>
                <?php else: ?>
                <div class="alert alert-warning">
                    <i class="fas fa-exclamation-triangle me-2"></i>El simulador estará disponible próximamente
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <!-- FOOTER -->
    <footer class="bg-dark text-white py-5">
        <div class="container text-center">
            <p>&copy; <?php echo date('Y'); ?> <?php echo $config['autor']; ?></p>
            <p class="small">ECOEMS 2026 - Estrategia Inteligente | <?php echo $total_videos; ?> Videos</p>
        </div>
    </footer>

    <!-- Modal para Video -->
    <div class="modal fade" id="videoModal" tabindex="-1">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title" id="videoModalTitle"></h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body p-0">
                    <div class="ratio ratio-16x9">
                        <iframe id="videoIframe" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Play Video
        function playVideo(embedUrl, title) {
            document.getElementById('videoIframe').src = embedUrl + '?autoplay=1';
            document.getElementById('videoModalTitle').textContent = title;
            new bootstrap.Modal(document.getElementById('videoModal')).show();
        }
        
        // Filtros
        document.querySelectorAll('.filter-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                document.querySelectorAll('.filter-btn').forEach(b => b.classList.remove('active'));
                this.classList.add('active');
                
                const filter = this.getAttribute('data-filter');
                document.querySelectorAll('.video-item').forEach(item => {
                    item.style.display = (filter === 'all' || item.getAttribute('data-materia') === filter) ? 'block' : 'none';
                });
            });
        });
        
        // Limpiar iframe al cerrar modal
        document.getElementById('videoModal').addEventListener('hidden.bs.modal', function() {
            document.getElementById('videoIframe').src = '';
        });
    </script>
</body>
</html>