<?php
// DATOS DE LA PLATAFORMA
$plataforma = [
    'nombre' => 'CyberEdu MX',
    'slogan' => 'Plataforma Educativa ECOEMS 2026',
    'version' => 'BioReto Academy'
];

// FUNCIÓN PARA NORMALIZAR TEXTO (QUITAR ACENTOS)
function normalizarTexto($texto) {
    $texto = strtolower($texto);
    $acentos = [
        'á' => 'a', 'é' => 'e', 'í' => 'i', 'ó' => 'o', 'ú' => 'u',
        'à' => 'a', 'è' => 'e', 'ì' => 'i', 'ò' => 'o', 'ù' => 'u',
        'ä' => 'a', 'ë' => 'e', 'ï' => 'i', 'ö' => 'o', 'ü' => 'u',
        'â' => 'a', 'ê' => 'e', 'î' => 'i', 'ô' => 'o', 'û' => 'u',
        'ã' => 'a', 'ñ' => 'n', 'ç' => 'c',
        'Á' => 'a', 'É' => 'e', 'Í' => 'i', 'Ó' => 'o', 'Ú' => 'u',
        'À' => 'a', 'È' => 'e', 'Ì' => 'i', 'Ò' => 'o', 'Ù' => 'u',
        'Ä' => 'a', 'Ë' => 'e', 'Ï' => 'i', 'Ö' => 'o', 'Ü' => 'u',
        'Â' => 'a', 'Ê' => 'e', 'Î' => 'i', 'Ô' => 'o', 'Û' => 'u',
        'Ã' => 'a', 'Ñ' => 'n', 'Ç' => 'c'
    ];
    return strtr($texto, $acentos);
}

// MATERIAS COMPLETAS ECOEMS
$materias = [
    ['id' => 1, 'nombre' => 'Habilidad Matemática', 'color' => '#ff6b00', 'icono' => 'fas fa-brain', 'simulador' => 'skillMathReto'],
    ['id' => 2, 'nombre' => 'Habilidad Verbal', 'color' => '#2196f3', 'icono' => 'fas fa-comments', 'simulador' => 'skillVerbalReto'],
    ['id' => 3, 'nombre' => 'Matemáticas', 'color' => '#00f0ff', 'icono' => 'fas fa-calculator', 'simulador' => 'MathReto'],
    ['id' => 4, 'nombre' => 'Español', 'color' => '#f44336', 'icono' => 'fas fa-book', 'simulador' => 'VerbalReto'],
    ['id' => 5, 'nombre' => 'Física', 'color' => '#ff0080', 'icono' => 'fas fa-atom', 'simulador' => 'FisicaReto'],
    ['id' => 6, 'nombre' => 'Química', 'color' => '#00ff88', 'icono' => 'fas fa-flask', 'simulador' => 'QuimicaReto'],
    ['id' => 7, 'nombre' => 'Biología', 'color' => '#4caf50', 'icono' => 'fas fa-dna', 'simulador' => 'BioReto'],
    ['id' => 8, 'nombre' => 'Historia', 'color' => '#9c27b0', 'icono' => 'fas fa-monument', 'simulador' => 'HistoriaReto'],
    ['id' => 9, 'nombre' => 'Geografía', 'color' => '#ff9800', 'icono' => 'fas fa-globe-americas', 'simulador' => 'GeoReto'],
    ['id' => 10, 'nombre' => 'Cívica y Ética', 'color' => '#795548', 'icono' => 'fas fa-balance-scale', 'simulador' => 'CivicaReto']
];

// ESTRUCTURA DE LA SERIE BIO RETO ACADEMY - NUEVO ENFOQUE
$estructura_proyecto = [
    'fase_actual' => [
        'titulo' => 'FASE 1: TEMARIO COMPLETO ECOEMS',
        'subtitulo' => '40 Videos • Contenido Fundamental • 4 Minutos c/u',
        'descripcion' => 'Cobertura 100% del temario actual (205 subíndices) - Conocimiento que NUNCA caduca',
        'caracteristicas' => [
            '📚 205 subíndices del temario oficial',
            '⏱️ Videos de 4 minutos máximo',
            '🎯 Enfoque puro en teoría y conceptos',
            '🔄 Contenido atemporal y perdurable',
            '📊 Infografías y resúmenes incluidos'
        ],
        'progreso' => 8, // videos actualmente publicados - ACTUALIZAR ESTE NÚMERO
        'total' => 40,
        'estado' => 'EN PRODUCCIÓN'
    ],
    'fase_futura' => [
        'titulo' => 'FASE 2: PREGUNTAS GUÍA 2026',
        'subtitulo' => 'Videos Adicionales • Actualización Gratuita',
        'descripcion' => 'Resolución de 128 preguntas cuando salga la nueva guía ECOEMS 2026',
        'caracteristicas' => [
            '🆓 Actualización gratuita incluida',
            '❓ 128 preguntas resueltas',
            '📅 Disponible Abril-Mayo 2026',
            '🎬 Mismo formato de 4 minutos',
            '🔄 Contenido siempre actualizado'
        ],
        'progreso' => 0,
        'total' => 128,
        'estado' => 'PROGRAMADO 2026'
    ]
];

// CURSO DE 128 PREGUNTAS UDEMY
$curso_128_preguntas = [
    'titulo' => 'ECOEMS 2026: 128 Preguntas Resueltas con NotebookLM',
    'descripcion' => 'Curso completo resolviendo las 128 preguntas específicas de la guía oficial ECOEMS 2026 usando NotebookLM e inteligencia artificial.',
    'video_presentacion' => 'https://www.youtube.com/embed/gIkpUoR112s',
    'caracteristicas' => [
        '128 preguntas resueltas y explicadas',
        'Video en vivo de resolución paso a paso',
        'Material descargable con soluciones',
        'Acceso gratuito durante desarrollo',
        'Actualización 2026 garantizada',
        'Soporte con NotebookLM'
    ],
    'udemy_url' => 'https://www.udemy.com/course/ecoems2026conia/?referralCode=B2F05026985A2564FAAC',
    'estado' => 'En Desarrollo - Gratuito'
];

// SERIE BIO RETO ACADEMY - VIDEOS DE TEMARIO (FASE 1)
// ACTUALIZAR ESTE ARRAY CON LOS NUEVOS VIDEOS QUE VAYAS SUBIENDO
$videos_temario = [
    'presentacion' => [
        [
            'titulo' => 'BIO RETO ACADEMY - ESTRATEGIA 2026: Contenido Fundamental + Actualizaciones',
            'materia' => 'Presentación del Proyecto',
            'descripcion' => 'Explicación completa de nuestra estrategia: Videos de temario fundamental (no caducan) + Actualizaciones gratuitas cuando salga guía 2026.',
            'url_youtube' => 'https://www.youtube.com/embed/QaYetUSqeU0',
            'duracion' => '15:30',
            'notebooklm_url' => '#',
            'infografia_url' => 'video0/infografia.png',
            'presentacion_pdf' => 'video0/presentacion.pdf',
            'vistas' => '0',
            'serie' => 'Presentación',
            'nuevo' => true
        ]
    ],
    'habilidad-verbal' => [
        [
            'titulo' => 'HABILIDAD VERBAL - Comprensión Lectora (Temario Fundamental)',
            'materia' => 'Habilidad Verbal',
            'descripcion' => 'Fundamentos de comprensión lectora - Contenido atemporal que servirá para ECOEMS 2026, 2027, 2028...',
            'url_youtube' => 'https://www.youtube.com/embed/CT-SfMG_7aU',
            'duracion' => '4:15',
            'notebooklm_url' => 'https://notebooklm.google.com/notebook/1448e1f0-6be3-4342-8ea1-6b7d236dc91c',
            'infografia_url' => 'video1/infografia.png',
            'presentacion_pdf' => 'video1/presentacion.pdf',
            'vistas' => '0',
            'serie' => '1/40',
            'nuevo' => true
        ],
        [
            'titulo' => 'HABILIDAD VERBAL - Vocabulario en Contexto (Temario Fundamental)',
            'materia' => 'Habilidad Verbal',
            'descripcion' => 'Estrategias para vocabulario en contexto - Conocimiento fundamental que nunca caduca.',
            'url_youtube' => 'https://www.youtube.com/embed/IUqXDYHJXmY',
            'duracion' => '3:45',
            'notebooklm_url' => 'https://notebooklm.google.com/notebook/3f6ad146-accb-47fd-8c1a-7d9ec7fe526c',
            'infografia_url' => 'video2/infografia.png',
            'presentacion_pdf' => 'video2/presentacion.pdf',
            'vistas' => '0',
            'serie' => '2/40',
            'nuevo' => true
        ],
        [
            'titulo' => 'HABILIDAD VERBAL - Temas Faltantes 1.4, 1.5, 1.6 (Temario Fundamental)',
            'materia' => 'Habilidad Verbal',
            'descripcion' => 'Completamos todos los temas de habilidad verbal - Contenido esencial perdurable.',
            'url_youtube' => 'https://www.youtube.com/embed/KU1fK6GCI4Y',
            'duracion' => '4:30',
            'notebooklm_url' => 'https://notebooklm.google.com/notebook/a60cc1a6-fa52-4256-8f55-65f87afbf88d',
            'infografia_url' => 'video3/infografia.png',
            'presentacion_pdf' => 'video3/presentacion.pdf',
            'vistas' => '0',
            'serie' => '3/40',
            'nuevo' => true
        ]
    ],
    'habilidad-matematica' => [
        [
            'titulo' => 'HABILIDAD MATEMÁTICA - Sucesiones Numéricas (Temario Fundamental)',
            'materia' => 'Habilidad Matemática',
            'descripcion' => 'Fundamentos de sucesiones numéricas - Contenido esencial que permanece igual cada año.',
            'url_youtube' => 'https://www.youtube.com/embed/xFAzqiYED_I',
            'duracion' => '4:20',
            'notebooklm_url' => 'https://notebooklm.google.com/notebook/2af65a9b-9db1-42d6-a10b-935396ce7ad5',
            'infografia_url' => 'video4/infografia.png',
            'presentacion_pdf' => 'video4/presentacion.pdf',
            'vistas' => '0',
            'serie' => '4/40',
            'nuevo' => true
        ],
        [
            'titulo' => 'HABILIDAD MATEMÁTICA - Series Espaciales (Temario Fundamental)',
            'materia' => 'Habilidad Matemática',
            'descripcion' => 'Series espaciales - Conceptos fundamentales que no cambian con el tiempo.',
            'url_youtube' => 'https://www.youtube.com/embed/v5gOgbsMhh8',
            'duracion' => '3:55',
            'notebooklm_url' => 'https://notebooklm.google.com/notebook/93eeb5d3-9df7-4981-9765-61b4106e01f7',
            'infografia_url' => 'video5/infografia.png',
            'presentacion_pdf' => 'video5/presentacion.pdf',
            'vistas' => '0',
            'serie' => '5/40',
            'nuevo' => true
        ],
        [
            'titulo' => 'HABILIDAD MATEMÁTICA - Imaginación Espacial (Temario Fundamental)',
            'materia' => 'Habilidad Matemática',
            'descripcion' => 'Desarrollo de imaginación espacial - Habilidad fundamental permanente.',
            'url_youtube' => 'https://www.youtube.com/embed/8u8nHI_bHYg',
            'duracion' => '4:10',
            'notebooklm_url' => 'https://notebooklm.google.com/notebook/4ea69f89-5eae-403a-ac51-1f570eb6ef53',
            'infografia_url' => 'video6/infografia.png',
            'presentacion_pdf' => 'video6/presentacion.pdf',
            'vistas' => '0',
            'serie' => '6/40',
            'nuevo' => true
        ],
        [
            'titulo' => 'HABILIDAD MATEMÁTICA - Problemas de Razonamiento (Temario Fundamental)',
            'materia' => 'Habilidad Matemática',
            'descripcion' => 'Resolución de problemas de razonamiento - Métodos fundamentales atemporales.',
            'url_youtube' => 'https://www.youtube.com/embed/3uR4FKgs3ig',
            'duracion' => '4:25',
            'notebooklm_url' => 'https://notebooklm.google.com/notebook/bb1d2f12-477b-431c-aea2-66ad7bbe769e',
            'infografia_url' => 'video7/infografia.png',
            'presentacion_pdf' => 'video7/presentacion.pdf',
            'vistas' => '0',
            'serie' => '7/40',
            'nuevo' => true
        ]
    ],
    'biologia' => [
        [
            'titulo' => 'BIOLOGÍA - Biodiversidad y Evolución (Temario Fundamental)',
            'materia' => 'Biología',
            'descripcion' => 'Conceptos fundamentales de biodiversidad y evolución - Conocimiento científico que no cambia.',
            'url_youtube' => 'https://www.youtube.com/embed/x4tZzlkUf5Q',
            'duracion' => '4:10',
            'notebooklm_url' => 'https://notebooklm.google.com/notebook/ef61e5fd-8e83-4329-906b-be89521846ec',
            'infografia_url' => 'video8/infografia.png',
            'presentacion_pdf' => 'video8/presentacion.pdf',
            'vistas' => '0',
            'serie' => '8/40',
            'nuevo' => true
        ]
    ],
    // ESTRUCTURA PARA LAS PRÓXIMAS MATERIAS - AGREGAR VIDEOS AQUÍ
    'matematicas' => [
        // PRÓXIMOS VIDEOS DE MATEMÁTICAS
    ],
    'fisica' => [
        // PRÓXIMOS VIDEOS DE FÍSICA
    ],
    'quimica' => [
        // PRÓXIMOS VIDEOS DE QUÍMICA
    ],
    'historia' => [
        // PRÓXIMOS VIDEOS DE HISTORIA
    ],
    'geografia' => [
        // PRÓXIMOS VIDEOS DE GEOGRAFÍA
    ],
    'civica' => [
        // PRÓXIMOS VIDEOS DE CÍVICA Y ÉTICA
    ],
    'espanol' => [
        // PRÓXIMOS VIDEOS DE ESPAÑOL
    ]
];

// INSTRUCCIONES PARA ACTUALIZAR:
/*
1. ACTUALIZAR EL NÚMERO DE PROGRESO: Cambiar 'progreso' en $estructura_proyecto['fase_actual']
2. AGREGAR NUEVOS VIDEOS: Copiar la estructura de video en la materia correspondiente
3. ACTUALIZAR LOS NÚMEROS DE SERIE: Cambiar 'serie' => 'X/40' según corresponda
4. SUBIR ARCHIVOS AL SERVIDOR: infografia.png y presentacion.pdf en carpeta videoX/
*/

// Calcular progreso automáticamente
$total_videos_publicados = 0;
foreach($videos_temario as $materia => $videos) {
    if($materia != 'presentacion') {
        $total_videos_publicados += count($videos);
    }
}

// Actualizar progreso automáticamente
$estructura_proyecto['fase_actual']['progreso'] = $total_videos_publicados;
$progreso_fase1 = round(($estructura_proyecto['fase_actual']['progreso'] / $estructura_proyecto['fase_actual']['total']) * 100, 1);

// Contadores por materia
$contadores_materias = [];
foreach($videos_temario as $materia => $videos) {
    if($materia != 'presentacion') {
        $contadores_materias[$materia] = count($videos);
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CyberEdu MX - ECOEMS 2026 | BioReto Academy</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <style>
        :root {
            --primary: #00f0ff;
            --secondary: #ff0080;
            --accent: #00ff88;
            --dark: #0a0a1a;
            --card: #11112a;
            --text-light: #ffffff;
            --cyberedu-blue: #2962ff;
            --cyberedu-green: #00c853;
            --curso-color: #9c27b0;
            --bioreto-color: #4caf50;
            --fase1-color: #2196f3;
            --fase2-color: #ff9800;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            background: var(--dark);
            color: var(--text-light);
            font-family: 'Poppins', sans-serif;
            line-height: 1.7;
            overflow-x: hidden;
        }

        .navbar {
            background: rgba(10, 10, 26, 0.95);
            backdrop-filter: blur(10px);
            padding: 1rem 0;
            border-bottom: 1px solid rgba(0, 240, 255, 0.2);
        }

        .navbar-brand {
            font-weight: 800;
            font-size: 1.6rem;
            color: var(--primary) !important;
        }

        .nav-link {
            color: var(--text-light) !important;
            font-weight: 500;
            margin: 0 0.5rem;
            transition: all 0.3s ease;
        }

        .nav-link:hover {
            color: var(--primary) !important;
            transform: translateY(-2px);
        }

        .hero {
            background: linear-gradient(135deg, #0a0a1a 0%, #1a1a3a 100%);
            padding: 140px 0 100px;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .hero h1 {
            font-size: 3.5rem;
            font-weight: 800;
            margin-bottom: 1rem;
            background: linear-gradient(45deg, var(--primary), var(--accent));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .hero-subtitle {
            font-size: 1.3rem;
            color: rgba(255, 255, 255, 0.8);
            margin-bottom: 3rem;
        }

        .btn-cyberedu {
            background: linear-gradient(45deg, var(--cyberedu-blue), #2962ff);
            color: white;
            padding: 15px 30px;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 600;
            border: none;
            display: inline-flex;
            align-items: center;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(41, 98, 255, 0.4);
        }

        .btn-cyberedu:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(41, 98, 255, 0.6);
            color: white;
        }

        .btn-curso-128 {
            background: linear-gradient(45deg, var(--curso-color), #7b1fa2);
            color: white;
            padding: 15px 30px;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 600;
            border: none;
            display: inline-flex;
            align-items: center;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(156, 39, 176, 0.4);
        }

        .btn-curso-128:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(156, 39, 176, 0.6);
            color: white;
        }

        .btn-bioreto {
            background: linear-gradient(45deg, var(--bioreto-color), #2e7d32);
            color: white;
            padding: 15px 30px;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 600;
            border: none;
            display: inline-flex;
            align-items: center;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(76, 175, 80, 0.4);
        }

        .btn-bioreto:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(76, 175, 80, 0.6);
            color: white;
        }

        .btn-notebooklm {
            background: linear-gradient(45deg, #ff6d00, #ffab00);
            color: white;
            padding: 10px 20px;
            border-radius: 25px;
            text-decoration: none;
            font-weight: 500;
            border: none;
            display: inline-flex;
            align-items: center;
            transition: all 0.3s ease;
            box-shadow: 0 3px 10px rgba(255, 109, 0, 0.3);
        }

        .btn-notebooklm:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(255, 109, 0, 0.4);
            color: white;
        }

        .btn-pdf {
            background: linear-gradient(45deg, #f44336, #d32f2f);
            color: white;
            padding: 10px 20px;
            border-radius: 25px;
            text-decoration: none;
            font-weight: 500;
            border: none;
            display: inline-flex;
            align-items: center;
            transition: all 0.3s ease;
            box-shadow: 0 3px 10px rgba(244, 67, 54, 0.3);
        }

        .btn-pdf:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(244, 67, 54, 0.4);
            color: white;
        }

        .materia-btn {
            background: var(--card);
            border: 2px solid transparent;
            color: white;
            padding: 12px 25px;
            border-radius: 50px;
            margin: 0.5rem;
            transition: all 0.3s ease;
            font-weight: 500;
            cursor: pointer;
        }

        .materia-btn:hover, .materia-btn.active {
            transform: translateY(-3px);
            border-color: var(--primary);
            box-shadow: 0 5px 15px rgba(0, 240, 255, 0.3);
        }

        .bioreto-section {
            background: linear-gradient(135deg, #1a1a3a 0%, #2a2a4a 100%);
            padding: 100px 0;
            position: relative;
        }

        .video-card {
            background: var(--card);
            border-radius: 15px;
            overflow: hidden;
            margin-bottom: 2rem;
            border: 1px solid rgba(255, 255, 255, 0.1);
            transition: all 0.3s ease;
            height: 100%;
        }

        .video-card:hover {
            transform: translateY(-5px);
            border-color: var(--bioreto-color);
            box-shadow: 0 10px 25px rgba(76, 175, 80, 0.2);
        }

        .video-embed-container {
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
            margin-bottom: 1.5rem;
        }

        .section-title {
            font-size: 3rem;
            font-weight: 800;
            text-align: center;
            margin-bottom: 1rem;
            background: linear-gradient(45deg, var(--primary), var(--accent));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .section-subtitle {
            text-align: center;
            color: rgba(255, 255, 255, 0.8);
            font-size: 1.2rem;
            margin-bottom: 3rem;
        }

        .fase-card {
            background: var(--card);
            border-radius: 20px;
            padding: 2.5rem;
            border: 2px solid;
            transition: all 0.3s ease;
            height: 100%;
            position: relative;
        }

        .fase-1 {
            border-color: var(--fase1-color);
        }

        .fase-2 {
            border-color: var(--fase2-color);
        }

        .curso-card {
            background: var(--card);
            border-radius: 20px;
            padding: 2.5rem;
            border: 2px solid var(--curso-color);
            transition: all 0.3s ease;
            height: 100%;
            position: relative;
        }

        .curso-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 15px 30px rgba(156, 39, 176, 0.3);
        }

        .fase-card:hover, .curso-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.3);
        }

        .badge-estado {
            background: linear-gradient(45deg, #00c853, #00e676);
            color: white;
            padding: 0.5rem 1.5rem;
            border-radius: 50px;
            font-weight: 700;
            font-size: 0.9rem;
        }

        .badge-programado {
            background: linear-gradient(45deg, #ff9800, #ff5722);
            color: white;
            padding: 0.5rem 1.5rem;
            border-radius: 50px;
            font-weight: 700;
            font-size: 0.9rem;
        }

        .badge-gratis {
            background: linear-gradient(45deg, #9c27b0, #7b1fa2);
            color: white;
            padding: 0.5rem 1.5rem;
            border-radius: 50px;
            font-weight: 700;
            font-size: 0.9rem;
        }

        /* ============================================= */
        /* SISTEMA DE VIDEOS MEJORADO */
        /* ============================================= */

        .video-section {
            display: none;
        }

        .video-section.active {
            display: block;
            animation: fadeIn 0.5s ease-in;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .search-container {
            background: rgba(255,255,255,0.05);
            border-radius: 15px;
            padding: 1.5rem;
            margin-bottom: 2rem;
            border: 1px solid rgba(0, 240, 255, 0.2);
        }

        .search-box {
            background: rgba(255,255,255,0.1);
            border: 2px solid var(--primary);
            border-radius: 50px;
            padding: 12px 20px;
            color: white;
            width: 100%;
            font-size: 1rem;
            transition: all 0.3s ease;
        }

        .search-box:focus {
            outline: none;
            box-shadow: 0 0 0 3px rgba(0, 240, 255, 0.3);
            background: rgba(255,255,255,0.15);
        }

        .search-box::placeholder {
            color: rgba(255,255,255,0.6);
        }

        .video-count {
            background: var(--primary);
            color: var(--dark);
            border-radius: 50%;
            width: 24px;
            height: 24px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-size: 0.8rem;
            font-weight: 700;
            margin-left: 8px;
        }

        .vistas-badge {
            background: linear-gradient(45deg, #9c27b0, #e91e63);
            color: white;
            padding: 0.3rem 0.8rem;
            border-radius: 15px;
            font-size: 0.8rem;
            font-weight: 600;
        }

        .video-stats {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1rem;
        }

        .video-description {
            color: #b0b0b0 !important;
            font-size: 0.95rem;
            line-height: 1.6;
            margin-bottom: 1rem;
        }

        .presentacion-card {
            background: var(--card);
            border-radius: 20px;
            padding: 2rem;
            border: 2px solid var(--bioreto-color);
            margin-bottom: 3rem;
            text-align: center;
        }

        .presentacion-video {
            max-width: 800px;
            margin: 0 auto;
        }

        /* INFOGRAFÍA INTEGRADA */
        .infografia-integrada {
            background: rgba(255,255,255,0.05);
            border-radius: 15px;
            padding: 1.5rem;
            margin: 1.5rem 0;
            border: 1px solid rgba(33, 150, 243, 0.3);
        }

        .infografia-img {
            max-width: 100%;
            border-radius: 10px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.3);
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .infografia-img:hover {
            transform: scale(1.02);
            box-shadow: 0 8px 25px rgba(0,0,0,0.4);
        }

        .recursos-adicionales {
            background: rgba(255,255,255,0.05);
            border-radius: 15px;
            padding: 1.5rem;
            margin-top: 1rem;
            border: 1px solid rgba(255,255,255,0.1);
        }

        .botones-recursos {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 10px;
            margin-top: 1rem;
        }

        .badge-nuevo {
            background: linear-gradient(45deg, #ff4081, #f50057);
            color: white;
            padding: 0.3rem 0.8rem;
            border-radius: 10px;
            font-size: 0.7rem;
            font-weight: 700;
            margin-left: 0.5rem;
        }

        .badge-serie {
            background: linear-gradient(45deg, #2196f3, #1976d2);
            color: white;
            padding: 0.3rem 0.8rem;
            border-radius: 10px;
            font-size: 0.7rem;
            font-weight: 700;
        }

        .badge-fundamental {
            background: linear-gradient(45deg, #4caf50, #2e7d32);
            color: white;
            padding: 0.3rem 0.8rem;
            border-radius: 10px;
            font-size: 0.7rem;
            font-weight: 700;
        }

        .materia-vacia {
            text-align: center;
            padding: 4rem 2rem;
            background: rgba(255,255,255,0.05);
            border-radius: 15px;
            border: 2px dashed rgba(255,255,255,0.2);
        }

        .materia-vacia i {
            font-size: 3rem;
            color: rgba(255,255,255,0.3);
            margin-bottom: 1rem;
        }

        .estrategia-banner {
            background: linear-gradient(135deg, #1a237e, #283593);
            padding: 80px 0;
            position: relative;
            overflow: hidden;
        }

        .curso-section {
            background: linear-gradient(135deg, #1a1a3a 0%, #2a2a4a 100%);
            padding: 100px 0;
        }

        .estrategia-banner::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" opacity="0.1"><polygon points="50,0 100,50 50,100 0,50" fill="white"/></svg>');
            background-size: 80px 80px;
        }

        @media (max-width: 768px) {
            .hero h1 {
                font-size: 2.2rem;
            }
            
            .section-title {
                font-size: 2rem;
            }
            
            .hero-buttons {
                flex-direction: column;
                gap: 1rem;
            }

            .botones-recursos {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <i class="fas fa-graduation-cap me-2"></i><?php echo $plataforma['nombre']; ?>
            </a>
            <div class="navbar-nav ms-auto">
                <a class="nav-link" href="#index">Inicio</a>
                <a class="nav-link" href="#estrategia">Estrategia 2026</a>
                <a class="nav-link" href="#temario">Temario Fundamental</a>
                <a class="nav-link" href="#curso-128">Curso 128 Preguntas</a>
                <a class="nav-link" href="#simuladores">Simuladores</a>
            </div>
        </div>
    </nav>

    <!-- HERO SECTION -->
    <section id="index" class="hero">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <h1>BioReto Academy ECOEMS 2026</h1>
                    <p class="hero-subtitle">Contenido Fundamental que Nunca Caduca + Actualizaciones Gratuitas</p>
                    
                    <div class="d-flex gap-3 justify-content-center flex-wrap hero-buttons">
                        <a href="#estrategia" class="btn-bioreto">
                            <i class="fas fa-chess-knight me-2"></i>ESTRATEGIA 2026
                        </a>
                        <a href="#temario" class="btn-cyberedu">
                            <i class="fas fa-play-circle me-2"></i>TEMARIO FUNDAMENTAL
                        </a>
                        <a href="#curso-128" class="btn-curso-128">
                            <i class="fas fa-list-check me-2"></i>128 PREGUNTAS UDEMY
                        </a>
                        <a href="#simuladores" class="btn-cyberedu">
                            <i class="fas fa-gamepad me-2"></i>SIMULADORES
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ESTRATEGIA 2026 -->
    <section id="estrategia" class="estrategia-banner">
        <div class="container">
            <h2 class="section-title">Estrategia Inteligente 2026</h2>
            <p class="section-subtitle">Contenido Fundamental Perdurable + Actualizaciones Gratuitas</p>

            <div class="row">
                <div class="col-lg-6 mb-4">
                    <div class="fase-card fase-1">
                        <div class="d-flex justify-content-between align-items-start mb-4">
                            <h3 style="color: var(--fase1-color);">
                                <i class="fas fa-rocket me-2"></i>
                                <?php echo $estructura_proyecto['fase_actual']['titulo']; ?>
                            </h3>
                            <span class="badge-estado"><?php echo $estructura_proyecto['fase_actual']['estado']; ?></span>
                        </div>
                        
                        <p class="mb-3" style="color: var(--fase1-color); font-weight: 600;">
                            <?php echo $estructura_proyecto['fase_actual']['subtitulo']; ?>
                        </p>
                        
                        <p class="mb-4" style="color: rgba(255,255,255,0.8);">
                            <?php echo $estructura_proyecto['fase_actual']['descripcion']; ?>
                        </p>

                        <div class="mb-4">
                            <?php foreach($estructura_proyecto['fase_actual']['caracteristicas'] as $caracteristica): ?>
                                <div class="d-flex align-items-center mb-2">
                                    <i class="fas fa-check-circle me-2" style="color: var(--fase1-color);"></i>
                                    <span><?php echo $caracteristica; ?></span>
                                </div>
                            <?php endforeach; ?>
                        </div>

                        <div class="progress-container">
                            <div class="d-flex justify-content-between mb-2">
                                <small>Progreso Fase 1</small>
                                <small><?php echo $estructura_proyecto['fase_actual']['progreso']; ?>/<?php echo $estructura_proyecto['fase_actual']['total']; ?> videos</small>
                            </div>
                            <div class="progress" style="height: 12px; background: rgba(255,255,255,0.1); border-radius: 10px;">
                                <div class="progress-bar" style="width: <?php echo $progreso_fase1; ?>%; background: var(--fase1-color);">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 mb-4">
                    <div class="fase-card fase-2">
                        <div class="d-flex justify-content-between align-items-start mb-4">
                            <h3 style="color: var(--fase2-color);">
                                <i class="fas fa-sync-alt me-2"></i>
                                <?php echo $estructura_proyecto['fase_futura']['titulo']; ?>
                            </h3>
                            <span class="badge-programado"><?php echo $estructura_proyecto['fase_futura']['estado']; ?></span>
                        </div>
                        
                        <p class="mb-3" style="color: var(--fase2-color); font-weight: 600;">
                            <?php echo $estructura_proyecto['fase_futura']['subtitulo']; ?>
                        </p>
                        
                        <p class="mb-4" style="color: rgba(255,255,255,0.8);">
                            <?php echo $estructura_proyecto['fase_futura']['descripcion']; ?>
                        </p>

                        <div class="mb-4">
                            <?php foreach($estructura_proyecto['fase_futura']['caracteristicas'] as $caracteristica): ?>
                                <div class="d-flex align-items-center mb-2">
                                    <i class="fas fa-gift me-2" style="color: var(--fase2-color);"></i>
                                    <span><?php echo $caracteristica; ?></span>
                                </div>
                            <?php endforeach; ?>
                        </div>

                        <div class="text-center mt-4">
                            <div class="alert alert-warning" style="background: rgba(255,152,0,0.1); border-color: var(--fase2-color); color: #ff9800;">
                                <i class="fas fa-clock me-2"></i>
                                <strong>Disponible Abril-Mayo 2026</strong><br>
                                <small>Actualización gratuita para todos los estudiantes</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CURSO 128 PREGUNTAS UDEMY -->
    <section id="curso-128" class="curso-section">
        <div class="container">
            <h2 class="section-title">Curso 128 Preguntas ECOEMS</h2>
            <p class="section-subtitle">Resolución completa con NotebookLM e Inteligencia Artificial</p>

            <div class="row align-items-stretch">
                <div class="col-lg-6 mb-4">
                    <div class="curso-card">
                        <div class="d-flex justify-content-between align-items-start mb-4">
                            <h3 style="color: var(--curso-color);">
                                <i class="fas fa-list-check me-2"></i>
                                <?php echo $curso_128_preguntas['titulo']; ?>
                            </h3>
                            <div class="d-flex flex-column gap-2">
                                <span class="badge-gratis">¡GRATIS!</span>
                                <span class="badge-programado">EN DESARROLLO</span>
                            </div>
                        </div>
                        
                        <p class="mb-4" style="font-size: 1.1rem; color: rgba(255, 255, 255, 0.8);">
                            <?php echo $curso_128_preguntas['descripcion']; ?>
                        </p>

                        <div class="mb-4">
                            <?php foreach($curso_128_preguntas['caracteristicas'] as $caracteristica): ?>
                                <div class="d-flex align-items-center mb-2">
                                    <i class="fas fa-check-circle me-2" style="color: var(--curso-color);"></i>
                                    <span><?php echo $caracteristica; ?></span>
                                </div>
                            <?php endforeach; ?>
                        </div>

                        <div class="text-center mt-4">
                            <a href="<?php echo $curso_128_preguntas['udemy_url']; ?>" 
                               target="_blank" 
                               class="btn-curso-128 btn-lg w-100">
                                <i class="fas fa-play-circle me-2"></i>ACCEDER GRATIS AL CURSO
                            </a>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-6 mb-4">
                    <div class="curso-card">
                        <h4 style="color: var(--curso-color); margin-bottom: 1.5rem;">
                            <i class="fas fa-play-circle me-2"></i>Video de Presentación
                        </h4>
                        
                        <div class="video-embed-container">
                            <div class="ratio ratio-16x9">
                                <iframe src="<?php echo $curso_128_preguntas['video_presentacion']; ?>" 
                                        title="Presentación Curso 128 Preguntas ECOEMS 2026"
                                        frameborder="0" 
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                                        allowfullscreen>
                                </iframe>
                            </div>
                        </div>

                        <div class="text-center mt-4">
                            <div class="alert alert-info" style="background: rgba(33,150,243,0.1); border-color: #2196f3; color: #2196f3;">
                                <i class="fas fa-info-circle me-2"></i>
                                <strong>Curso Complementario</strong><br>
                                <small>Ideal para practicar después de ver los videos de temario fundamental</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- TEMARIO FUNDAMENTAL -->
    <section id="temario" class="bioreto-section">
        <div class="container">
            <h2 class="section-title">Temario Fundamental ECOEMS</h2>
            <p class="section-subtitle"><?php echo $estructura_proyecto['fase_actual']['progreso']; ?> Videos Publicados • Contenido Atemporal • 205 Subíndices • 4 Minutos c/u</p>

            <!-- PRESENTACIÓN DE LA ESTRATEGIA -->
            <div class="presentacion-card">
                <h3 style="color: var(--bioreto-color); margin-bottom: 1.5rem;">
                    <i class="fas fa-chess-knight me-2"></i>¿Por Qué Esta Estrategia?
                </h3>
                <?php foreach($videos_temario['presentacion'] as $video): ?>
                    <div class="presentacion-video">
                        <div class="video-card">
                            <div class="p-4">
                                <h4 style="color: var(--bioreto-color); margin-bottom: 1rem;"><?php echo $video['titulo']; ?></h4>
                                <p class="video-description"><?php echo $video['descripcion']; ?></p>
                                
                                <div class="video-embed-container">
                                    <div class="ratio ratio-16x9">
                                        <iframe src="<?php echo $video['url_youtube']; ?>" 
                                                title="<?php echo $video['titulo']; ?>"
                                                frameborder="0" 
                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                                                allowfullscreen>
                                        </iframe>
                                    </div>
                                </div>

                                <!-- INFOGRAFÍA INTEGRADA -->
                                <?php if(isset($video['infografia_url']) && $video['infografia_url']): ?>
                                <div class="infografia-integrada">
                                    <h5 style="color: #2196f3; margin-bottom: 1rem; text-align: center;">
                                        <i class="fas fa-chart-bar me-2"></i>Infografía de la Estrategia
                                    </h5>
                                    <div class="text-center">
                                        <img src="<?php echo $video['infografia_url']; ?>" 
                                             alt="Infografía <?php echo $video['titulo']; ?>"
                                             class="infografia-img"
                                             onclick="abrirImagen('<?php echo $video['infografia_url']; ?>')">
                                    </div>
                                </div>
                                <?php endif; ?>
                                
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="badge bg-primary"><?php echo $video['materia']; ?></span>
                                    <div class="d-flex gap-2">
                                        <span class="badge bg-dark"><?php echo $video['duracion']; ?></span>
                                        <span class="vistas-badge">
                                            <i class="fas fa-eye me-1"></i><?php echo $video['vistas']; ?> vistas
                                        </span>
                                        <?php if(isset($video['serie'])): ?>
                                            <span class="badge-serie"><?php echo $video['serie']; ?></span>
                                        <?php endif; ?>
                                        <?php if(isset($video['nuevo']) && $video['nuevo']): ?>
                                            <span class="badge-nuevo">NUEVO</span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <!-- BOTONES DE MATERIAS -->
            <div class="text-center mb-5">
                <h4 class="mb-4" style="color: var(--bioreto-color);">
                    <i class="fas fa-play-circle me-2"></i>Selecciona una Materia
                </h4>

                <!-- BARRA DE BÚSQUEDA -->
                <div class="search-container">
                    <div class="row align-items-center">
                        <div class="col-md-8 mx-auto">
                            <input type="text" 
                                   class="search-box" 
                                   id="buscarVideos"
                                   placeholder="🔍 Buscar videos por título o descripción...">
                        </div>
                        <div class="col-md-2 text-center mt-2 mt-md-0">
                            <span class="badge bg-primary" id="totalVideos">
                                <?php echo $total_videos_publicados; ?> videos
                            </span>
                        </div>
                    </div>
                </div>

                <!-- BOTONES CON CONTADOR -->
                <div class="d-flex flex-wrap justify-content-center">
                    <?php
                    $materias_nombres = [
                        'biologia' => 'Biología',
                        'matematicas' => 'Matemáticas', 
                        'fisica' => 'Física',
                        'quimica' => 'Química',
                        'historia' => 'Historia',
                        'geografia' => 'Geografía',
                        'civica' => 'Cívica y Ética',
                        'habilidad-matematica' => 'Habilidad Matemática',
                        'habilidad-verbal' => 'Habilidad Verbal',
                        'espanol' => 'Español'
                    ];
                    
                    $materias_colores = [
                        'biologia' => '#4caf50',
                        'matematicas' => '#00f0ff',
                        'fisica' => '#ff0080',
                        'quimica' => '#00ff88',
                        'historia' => '#9c27b0',
                        'geografia' => '#ff9800',
                        'civica' => '#795548',
                        'habilidad-matematica' => '#ff6b00',
                        'habilidad-verbal' => '#2196f3',
                        'espanol' => '#f44336'
                    ];
                    
                    $materias_iconos = [
                        'biologia' => 'fa-dna',
                        'matematicas' => 'fa-calculator',
                        'fisica' => 'fa-atom',
                        'quimica' => 'fa-flask',
                        'historia' => 'fa-monument',
                        'geografia' => 'fa-globe-americas',
                        'civica' => 'fa-balance-scale',
                        'habilidad-matematica' => 'fa-brain',
                        'habilidad-verbal' => 'fa-comments',
                        'espanol' => 'fa-book'
                    ];
                    
                    foreach($materias_nombres as $key => $nombre): 
                        $cantidad_videos = $contadores_materias[$key] ?? 0;
                    ?>
                        <button class="materia-btn <?php echo $key == 'habilidad-verbal' ? 'active' : ''; ?>" 
                                data-materia="<?php echo $key; ?>" 
                                style="border-color: <?php echo $materias_colores[$key]; ?>;">
                            <i class="fas <?php echo $materias_iconos[$key]; ?> me-2"></i><?php echo $nombre; ?>
                            <?php if($cantidad_videos > 0): ?>
                                <span class="video-count"><?php echo $cantidad_videos; ?></span>
                            <?php endif; ?>
                        </button>
                    <?php endforeach; ?>
                </div>
            </div>

            <!-- CONTENEDOR PRINCIPAL DE VIDEOS -->
            <div id="videoSectionsContainer">
                <!-- VIDEOS POR MATERIA -->
                <?php foreach($videos_temario as $materia => $videos): ?>
                    <?php if($materia != 'presentacion'): ?>
                        <div class="video-section <?php echo $materia == 'habilidad-verbal' ? 'active' : ''; ?>" 
                             id="videos-<?php echo $materia; ?>">
                            
                            <h4 class="text-center mb-4" style="color: <?php echo $materias_colores[$materia]; ?>;">
                                <i class="fas <?php echo $materias_iconos[$materia]; ?> me-2"></i>
                                <?php echo $materias_nombres[$materia]; ?>
                                <small class="ms-2">(<?php echo count($videos); ?> videos)</small>
                            </h4>
                            
                            <?php if(count($videos) > 0): ?>
                                <div class="row">
                                    <?php foreach($videos as $index => $video): ?>
                                        <div class="col-lg-6 mb-4" 
                                             data-video-title="<?php echo normalizarTexto($video['titulo']); ?>" 
                                             data-video-desc="<?php echo normalizarTexto($video['descripcion']); ?>"
                                             data-video-serie="<?php echo isset($video['serie']) ? $video['serie'] : ''; ?>"
                                             data-video-nuevo="<?php echo isset($video['nuevo']) ? 'true' : 'false'; ?>">
                                            <div class="video-card">
                                                <div class="p-3">
                                                    <div class="d-flex justify-content-between align-items-start mb-2">
                                                        <h5 style="color: var(--bioreto-color); margin-bottom: 1rem; flex: 1;">
                                                            <?php echo $video['titulo']; ?>
                                                        </h5>
                                                        <div class="d-flex gap-1">
                                                            <?php if(isset($video['nuevo']) && $video['nuevo']): ?>
                                                                <span class="badge-nuevo">NUEVO</span>
                                                            <?php endif; ?>
                                                            <span class="badge-fundamental">FUNDAMENTAL</span>
                                                        </div>
                                                    </div>
                                                    
                                                    <?php if(isset($video['serie'])): ?>
                                                        <div class="mb-2">
                                                            <span class="badge-serie">Serie: <?php echo $video['serie']; ?></span>
                                                        </div>
                                                    <?php endif; ?>
                                                    
                                                    <p class="video-description"><?php echo $video['descripcion']; ?></p>
                                                    
                                                    <div class="video-stats">
                                                        <span class="badge bg-primary"><?php echo $video['materia']; ?></span>
                                                        <div class="d-flex gap-2">
                                                            <span class="badge bg-dark"><?php echo $video['duracion']; ?></span>
                                                            <span class="vistas-badge">
                                                                <i class="fas fa-eye me-1"></i><?php echo $video['vistas']; ?> vistas
                                                            </span>
                                                        </div>
                                                    </div>
                                                    
                                                    <!-- VIDEO EMBEBIDO -->
                                                    <div class="video-embed-container">
                                                        <div class="ratio ratio-16x9">
                                                            <iframe src="<?php echo $video['url_youtube']; ?>" 
                                                                    title="<?php echo $video['titulo']; ?>"
                                                                    frameborder="0" 
                                                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                                                                    allowfullscreen>
                                                            </iframe>
                                                        </div>
                                                    </div>

                                                    <!-- INFOGRAFÍA INTEGRADA -->
                                                    <?php if(isset($video['infografia_url']) && $video['infografia_url']): ?>
                                                    <div class="infografia-integrada">
                                                        <h6 style="color: #2196f3; margin-bottom: 1rem; text-align: center;">
                                                            <i class="fas fa-chart-bar me-2"></i>Infografía del Video
                                                        </h6>
                                                        <div class="text-center">
                                                            <img src="<?php echo $video['infografia_url']; ?>" 
                                                                 alt="Infografía <?php echo $video['titulo']; ?>"
                                                                 class="infografia-img"
                                                                 onclick="abrirImagen('<?php echo $video['infografia_url']; ?>')">
                                                        </div>
                                                    </div>
                                                    <?php endif; ?>

                                                    <!-- RECURSOS ADICIONALES -->
                                                    <div class="recursos-adicionales">
                                                        <h6 class="text-center mb-3" style="color: var(--bioreto-color);">
                                                            <i class="fas fa-download me-2"></i>Recursos Adicionales
                                                        </h6>
                                                        
                                                        <div class="botones-recursos">
                                                            <?php if($video['notebooklm_url'] != '#'): ?>
                                                            <a href="<?php echo $video['notebooklm_url']; ?>" target="_blank" 
                                                               class="btn-notebooklm">
                                                                <i class="fas fa-brain me-2"></i>NotebookLM
                                                            </a>
                                                            <?php endif; ?>
                                                            
                                                            <?php if(isset($video['presentacion_pdf']) && $video['presentacion_pdf']): ?>
                                                            <a href="<?php echo $video['presentacion_pdf']; ?>" target="_blank" 
                                                               class="btn-pdf">
                                                                <i class="fas fa-file-pdf me-2"></i>Descargar PDF
                                                            </a>
                                                            <?php endif; ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            <?php else: ?>
                                <div class="materia-vacia">
                                    <i class="fas fa-video-slash"></i>
                                    <h5 style="color: rgba(255,255,255,0.5);">Próximamente</h5>
                                    <p style="color: rgba(255,255,255,0.4);">Los videos de esta materia estarán disponibles pronto</p>
                                    <span class="badge-fundamental">CONTENIDO FUNDAMENTAL</span>
                                </div>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- SIMULADORES -->
    <section id="simuladores" style="padding: 100px 0; background: #0a0a1a;">
        <div class="container">
            <h2 class="section-title">10 Simuladores Interactivos</h2>
            <p class="section-subtitle">Practica con simuladores especializados por materia ECOEMS</p>
            
            <div class="simulator-container">
                <div style="padding: 50px; text-align: center; color: #333; height: 100%;">
                    <i class="fas fa-gamepad fa-5x" style="color: #4caf50; margin-bottom: 30px;"></i>
                    <h3 style="color: #2e7d32; margin-bottom: 15px; font-size: 2.5rem;">10 Simuladores ECOEMS 2026</h3>
                    <p style="color: #666; margin-bottom: 40px; font-size: 1.1rem;">Selecciona un simulador para comenzar tu práctica</p>
                    
                    <div class="row">
                        <?php foreach($materias as $materia): ?>
                            <div class="col-md-6 col-lg-4 mb-4">
                                <div class="simulator-menu-item" onclick="cargarSimulador('<?php echo $materia['simulador']; ?>')">
                                    <i class="<?php echo $materia['icono']; ?> fa-3x mb-3" style="color: <?php echo $materia['color']; ?>;"></i>
                                    <h5><?php echo $materia['nombre']; ?></h5>
                                    <p>Simulador <?php echo $materia['simulador']; ?></p>
                                    <div class="badge bg-success">Disponible</div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- WHATSAPP FLOAT -->
    <div class="whatsapp-float">
        <a href="https://wa.me/525523269241?text=Hola,%20me%20interesa%20BioReto%20Academy%20ECOEMS%202026" 
           target="_blank" class="whatsapp-btn">
            <i class="fab fa-whatsapp"></i>
        </a>
    </div>

    <!-- MODAL PARA VISUALIZAR IMAGEN -->
    <div class="modal fade" id="modalImagen" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content bg-dark">
                <div class="modal-header">
                    <h5 class="modal-title text-white">Infografía</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body text-center">
                    <img id="imagenModal" src="" alt="" class="img-fluid" style="max-height: 70vh;">
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
// =============================================
// SISTEMA DE VIDEOS MEJORADO
// =============================================

class VideoManager {
    constructor() {
        this.currentMateria = 'habilidad-verbal';
        this.init();
    }

    init() {
        this.setupEventListeners();
        console.log('✅ BioReto Academy - Estrategia 2026 inicializada');
    }

    setupEventListeners() {
        // Botones de materia
        document.querySelectorAll('.materia-btn').forEach(btn => {
            btn.addEventListener('click', (e) => {
                const materia = e.currentTarget.getAttribute('data-materia');
                this.cambiarMateria(materia, e.currentTarget);
            });
        });

        // Búsqueda en tiempo real
        const buscarInput = document.getElementById('buscarVideos');
        if (buscarInput) {
            buscarInput.addEventListener('input', (e) => {
                this.buscarVideos(e.target.value);
            });
        }
    }

    cambiarMateria(materia, boton) {
        console.log('🔄 Cambiando a materia:', materia);
        
        if (this.currentMateria === materia) return;

        // Ocultar sección actual
        const seccionActual = document.getElementById('videos-' + this.currentMateria);
        if (seccionActual) {
            seccionActual.classList.remove('active');
        }

        // Mostrar nueva sección
        const nuevaSeccion = document.getElementById('videos-' + materia);
        if (nuevaSeccion) {
            nuevaSeccion.classList.add('active');
        }

        // Actualizar botones
        this.actualizarBotonesActivos(boton);

        this.currentMateria = materia;
    }

    actualizarBotonesActivos(botonActivo) {
        document.querySelectorAll('.materia-btn').forEach(btn => {
            btn.classList.remove('active');
        });
        botonActivo.classList.add('active');
    }

    buscarVideos(termino) {
        const terminoNormalizado = this.normalizarTexto(termino.toLowerCase().trim());
        
        if (terminoNormalizado === '') {
            this.mostrarTodosLosVideos();
            return;
        }

        let resultadosEncontrados = 0;
        
        document.querySelectorAll('.video-section').forEach(seccion => {
            let videosEnSeccion = 0;
            const videos = seccion.querySelectorAll('.col-lg-6');
            
            videos.forEach(video => {
                const titulo = video.getAttribute('data-video-title') || '';
                const descripcion = video.getAttribute('data-video-desc') || '';
                
                if (titulo.includes(terminoNormalizado) || descripcion.includes(terminoNormalizado)) {
                    video.style.display = 'block';
                    videosEnSeccion++;
                    resultadosEncontrados++;
                } else {
                    video.style.display = 'none';
                }
            });

            // Actualizar contador de la sección
            const contadorSeccion = seccion.querySelector('h4 small');
            if (contadorSeccion) {
                contadorSeccion.textContent = `(${videosEnSeccion} de ${videos.length} videos)`;
            }
        });

        this.actualizarContadorBusqueda(resultadosEncontrados, termino);
    }

    normalizarTexto(texto) {
        return texto
            .normalize("NFD")
            .replace(/[\u0300-\u036f]/g, "")
            .toLowerCase();
    }

    mostrarTodosLosVideos() {
        document.querySelectorAll('.video-section').forEach(seccion => {
            const videos = seccion.querySelectorAll('.col-lg-6');
            videos.forEach(video => {
                video.style.display = 'block';
            });
            
            // Restaurar contador original
            const totalVideos = videos.length;
            const contador = seccion.querySelector('h4 small');
            if (contador) {
                contador.textContent = `(${totalVideos} videos)`;
            }
        });

        const totalVideosElement = document.getElementById('totalVideos');
        if (totalVideosElement) {
            totalVideosElement.textContent = '<?php echo $total_videos_publicados; ?> videos';
            totalVideosElement.className = 'badge bg-primary';
        }
    }

    actualizarContadorBusqueda(resultados, termino) {
        const contador = document.getElementById('totalVideos');
        if (contador) {
            if (resultados === 0) {
                contador.textContent = '0 resultados';
                contador.className = 'badge bg-danger';
            } else {
                contador.textContent = `${resultados} resultados para "${termino}"`;
                contador.className = 'badge bg-success';
            }
        }
    }
}

// =============================================
// INICIALIZACIÓN
// =============================================

document.addEventListener('DOMContentLoaded', function() {
    console.log('🚀 Inicializando BioReto Academy - Estrategia 2026...');
    
    // Inicializar gestor de videos
    window.videoManager = new VideoManager();
    
    console.log('✅ Plataforma lista - Contenido Fundamental + Actualizaciones Futuras');
    
    // Navegación suave
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });
});

// Función para abrir imagen en modal
function abrirImagen(src) {
    document.getElementById('imagenModal').src = src;
    const modal = new bootstrap.Modal(document.getElementById('modalImagen'));
    modal.show();
}

function cargarSimulador(simulador) {
    alert(`🎮 Simulador ${simulador} - Esta funcionalidad estará disponible próximamente`);
}
    </script>
</body>
</html>