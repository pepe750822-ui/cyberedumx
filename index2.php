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

// SERIE BIO RETO ACADEMY - 65 VIDEOS COMPLETOS
$serie_65_videos = [
    'presentacion' => [
        [
            'titulo' => 'BIO RETO ACADEMY ECOEMS 2026 - VIDEO 0: INTRODUCCIÓN COMPLETA',
            'materia' => 'Introducción Serie 65 Videos',
            'descripcion' => 'Introducción completa a la serie de 65 videos que cubren todo el temario ECOEMS 2026.',
            'url_youtube' => 'https://www.youtube.com/embed/QaYetUSqeU0',
            'duracion' => '15:30',
            'notebooklm_url' => '#',
            'vistas' => '0',
            'serie' => '0/65',
            'nuevo' => true
        ]
    ],
    'habilidad-verbal' => [
        [
            'titulo' => 'VIDEO 1/65 BIO RETO ACADEMY: HABILIDAD VERBAL - Comprensión Lectora (4 Preguntas SEGURAS)',
            'materia' => 'Habilidad Verbal',
            'descripcion' => 'Comprensión lectora - Primer video de la serie completa de 65 videos ECOEMS 2026.',
            'url_youtube' => 'https://www.youtube.com/embed/CT-SfMG_7aU',
            'duracion' => '5:37',
            'notebooklm_url' => 'https://notebooklm.google.com/notebook/1448e1f0-6be3-4342-8ea1-6b7d236dc91c',
            'vistas' => '0',
            'serie' => '1/65',
            'nuevo' => true
        ],
        [
            'titulo' => 'VIDEO 2/65 BIO RETO ACADEMY: HABILIDAD VERBAL - Vocabulario en Contexto (12 Preguntas SEGURAS)',
            'materia' => 'Habilidad Verbal',
            'descripcion' => 'Vocabulario en contexto - 12 preguntas seguras para el examen ECOEMS 2026.',
            'url_youtube' => 'https://www.youtube.com/embed/IUqXDYHJXmY',
            'duracion' => '5:08',
            'notebooklm_url' => 'https://notebooklm.google.com/notebook/3f6ad146-accb-47fd-8c1a-7d9ec7fe526c',
            'vistas' => '0',
            'serie' => '2/65',
            'nuevo' => true
        ],
        [
            'titulo' => 'VIDEO 3/65 BIO RETO ACADEMY: HABILIDAD VERBAL COMPLETA - Temas Faltantes (1.4, 1.5, 1.6)',
            'materia' => 'Habilidad Verbal',
            'descripcion' => 'Completamos habilidad verbal con todos los temas faltantes del temario oficial.',
            'url_youtube' => 'https://www.youtube.com/embed/KU1fK6GCI4Y',
            'duracion' => '5:38',
            'notebooklm_url' => 'https://notebooklm.google.com/notebook/a60cc1a6-fa52-4256-8f55-65f87afbf88d',
            'vistas' => '0',
            'serie' => '3/65',
            'nuevo' => true
        ]
    ],
    'habilidad-matematica' => [
        [
            'titulo' => 'VIDEO 4/65 BIO RETO ACADEMY: HABILIDAD MATEMÁTICA - Sucesiones Numéricas (4 Preguntas SEGURAS)',
            'materia' => 'Habilidad Matemática',
            'descripcion' => 'Sucesiones numéricas - 4 preguntas seguras para el examen ECOEMS 2026.',
            'url_youtube' => 'https://www.youtube.com/embed/xFAzqiYED_I',
            'duracion' => '7:44',
            'notebooklm_url' => 'https://notebooklm.google.com/notebook/2af65a9b-9db1-42d6-a10b-935396ce7ad5',
            'vistas' => '0',
            'serie' => '4/65',
            'nuevo' => true
        ],
        [
            'titulo' => 'VIDEO 5/65 BIO RETO ACADEMY: HABILIDAD MATEMÁTICA - Series Espaciales (4 Preguntas SEGURAS)',
            'materia' => 'Habilidad Matemática',
            'descripcion' => 'Series espaciales - 4 preguntas seguras de habilidad matemática.',
            'url_youtube' => 'https://www.youtube.com/embed/v5gOgbsMhh8',
            'duracion' => '5:55',
            'notebooklm_url' => 'https://notebooklm.google.com/notebook/93eeb5d3-9df7-4981-9765-61b4106e01f7',
            'vistas' => '0',
            'serie' => '5/65',
            'nuevo' => true
        ],
        [
            'titulo' => 'VIDEO 6/65 BIO RETO ACADEMY: HABILIDAD MATEMÁTICA - Imaginación Espacial (4 Preguntas SEGURAS)',
            'materia' => 'Habilidad Matemática',
            'descripcion' => 'Imaginación espacial - 4 preguntas seguras para el examen.',
            'url_youtube' => 'https://www.youtube.com/embed/8u8nHI_bHYg',
            'duracion' => '6:29',
            'notebooklm_url' => 'https://notebooklm.google.com/notebook/4ea69f89-5eae-403a-ac51-1f570eb6ef53',
            'vistas' => '0',
            'serie' => '6/65',
            'nuevo' => true
        ],
        [
            'titulo' => 'VIDEO 7/65 HABILIDAD MATEMÁTICA COMPLETADA - Problemas de Razonamiento (4 Preguntas FINALES)',
            'materia' => 'Habilidad Matemática',
            'descripcion' => 'Completamos habilidad matemática con problemas de razonamiento finales.',
            'url_youtube' => 'https://www.youtube.com/embed/3uR4FKgs3ig',
            'duracion' => '6:42',
            'notebooklm_url' => 'https://notebooklm.google.com/notebook/bb1d2f12-477b-431c-aea2-66ad7bbe769e',
            'vistas' => '0',
            'serie' => '7/65',
            'nuevo' => true
        ]
    ],
    'biologia' => [
        [
            'titulo' => 'VIDEO 8/65 BIO RETO ACADEMY: BIOLOGÍA - Biodiversidad y Evolución (3 Preguntas CLAVE)',
            'materia' => 'Biología',
            'descripcion' => 'Biodiversidad y evolución - 3 preguntas clave de biología ECOEMS 2026.',
            'url_youtube' => 'https://www.youtube.com/embed/x4tZzlkUf5Q',
            'duracion' => '5:43',
            'notebooklm_url' => 'https://notebooklm.google.com/notebook/ef61e5fd-8e83-4329-906b-be89521846ec',
            'vistas' => '0',
            'serie' => '8/65',
            'nuevo' => true
        ]
    ],
    // VIDEOS POR PUBLICAR - ESTRUCTURA LISTA
    'matematicas' => [
        // Próximos videos de Matemáticas
    ],
    'fisica' => [
        // Próximos videos de Física
    ],
    'quimica' => [
        // Próximos videos de Química
    ],
    'historia' => [
        // Próximos videos de Historia
    ],
    'geografia' => [
        // Próximos videos de Geografía
    ],
    'civica' => [
        // Próximos videos de Cívica y Ética
    ],
    'espanol' => [
        // Próximos videos de Español
    ]
];

// CURSO DE 128 PREGUNTAS
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

// Calcular total de videos de la serie
$total_videos_serie = 0;
foreach($serie_65_videos as $materia => $videos) {
    if($materia != 'presentacion') {
        $total_videos_serie += count($videos);
    }
}

// Contadores por materia para la serie
$contadores_materias = [];
foreach($serie_65_videos as $materia => $videos) {
    if($materia != 'presentacion') {
        $contadores_materias[$materia] = count($videos);
    }
}

// Progreso de la serie
$progreso_serie = round(($total_videos_serie / 65) * 100, 1);
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

        .curso-section {
            background: linear-gradient(135deg, #1a1a3a 0%, #2a2a4a 100%);
            padding: 100px 0;
        }

        .curso-card {
            background: var(--card);
            border-radius: 20px;
            padding: 2.5rem;
            border: 1px solid rgba(156, 39, 176, 0.3);
            transition: all 0.3s ease;
            height: 100%;
            position: relative;
        }

        .curso-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(45deg, var(--curso-color), #7b1fa2);
        }

        .curso-card:hover {
            transform: translateY(-8px);
            border-color: var(--curso-color);
            box-shadow: 0 15px 30px rgba(156, 39, 176, 0.3);
        }

        .badge-gratis {
            background: linear-gradient(45deg, #00c853, #00e676);
            color: white;
            padding: 0.5rem 1.5rem;
            border-radius: 50px;
            font-weight: 700;
            font-size: 0.9rem;
        }

        .badge-desarrollo {
            background: linear-gradient(45deg, #ff9800, #ff5722);
            color: white;
            padding: 0.5rem 1.5rem;
            border-radius: 50px;
            font-weight: 700;
            font-size: 0.9rem;
        }

        /* ============================================= */
        /* SISTEMA DE VIDEOS SIMPLIFICADO Y FUNCIONAL */
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

        .simulator-container {
            background: white;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
            min-height: 500px;
        }

        .simulator-menu-item {
            background: #f8f9fa;
            border-radius: 15px;
            padding: 1.5rem;
            text-align: center;
            cursor: pointer;
            transition: all 0.3s ease;
            border: 2px solid transparent;
            height: 100%;
        }

        .simulator-menu-item:hover {
            transform: translateY(-5px);
            border-color: #4caf50;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
        }

        .whatsapp-float {
            position: fixed;
            bottom: 25px;
            right: 25px;
            z-index: 1000;
        }

        .whatsapp-btn {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 60px;
            height: 60px;
            background: #25d366;
            color: white;
            border-radius: 50%;
            text-decoration: none;
            font-size: 1.5rem;
            box-shadow: 0 4px 15px rgba(37, 211, 102, 0.4);
            transition: all 0.3s ease;
        }

        .whatsapp-btn:hover {
            transform: scale(1.1);
            color: white;
            box-shadow: 0 8px 25px rgba(37, 211, 102, 0.6);
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

        /* SERIE BANNER */
        .serie-banner {
            background: linear-gradient(135deg, #4caf50, #2e7d32);
            padding: 60px 0;
            position: relative;
            overflow: hidden;
        }

        .serie-banner::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" opacity="0.1"><polygon points="50,0 100,50 50,100 0,50" fill="white"/></svg>');
            background-size: 80px 80px;
        }

        .filtro-buttons .btn {
            border: 2px solid;
            font-weight: 600;
            margin: 0 5px;
        }

        .filtro-buttons .btn.active {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
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
                <a class="nav-link" href="#serie-65">Serie 65 Videos</a>
                <a class="nav-link" href="#curso-128">128 Preguntas</a>
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
                    <p class="hero-subtitle">Serie Completa de 65 Videos - Todo el Temario Oficial</p>
                    
                    <div class="d-flex gap-3 justify-content-center flex-wrap hero-buttons">
                        <a href="#serie-65" class="btn-bioreto">
                            <i class="fas fa-rocket me-2"></i>SERIE 65 VIDEOS
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

    <!-- SERIE 65 VIDEOS - BIO RETO ACADEMY -->
    <section id="serie-65" class="serie-banner">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h2 style="color: white; font-weight: 800; margin-bottom: 1rem;">
                        <i class="fas fa-rocket me-2"></i>SERIE BIO RETO ACADEMY: 65 VIDEOS
                    </h2>
                    <p style="color: rgba(255,255,255,0.9); font-size: 1.2rem; margin-bottom: 1.5rem;">
                        Cubrimos el <strong>100% del temario ECOEMS 2026</strong> con la serie más completa y actualizada
                    </p>
                    <div class="d-flex flex-wrap gap-2">
                        <span class="badge bg-light text-dark">
                            <i class="fas fa-play-circle me-1"></i>65 Videos Tutoriales
                        </span>
                        <span class="badge bg-light text-dark">
                            <i class="fas fa-brain me-1"></i>NotebookLM Incluido
                        </span>
                        <span class="badge bg-light text-dark">
                            <i class="fas fa-check-circle me-1"></i>Preguntas Seguras
                        </span>
                        <span class="badge bg-light text-dark">
                            <i class="fas fa-clock me-1"></i>Actualización 2026
                        </span>
                    </div>
                </div>
                <div class="col-lg-4 text-center">
                    <div style="background: rgba(255,255,255,0.1); border-radius: 15px; padding: 2rem;">
                        <h3 style="color: white; margin-bottom: 1rem;">Progreso Serie</h3>
                        <div class="progress" style="height: 20px; background: rgba(255,255,255,0.2); border-radius: 10px;">
                            <div class="progress-bar" style="width: <?php echo $progreso_serie; ?>%; background: #ffeb3b; color: #333; font-weight: bold;">
                                <?php echo $total_videos_serie; ?>/65
                            </div>
                        </div>
                        <p style="color: rgba(255,255,255,0.8); margin-top: 1rem; font-size: 0.9rem;">
                            <?php echo $total_videos_serie; ?> videos publicados • <?php echo (65 - $total_videos_serie); ?> por venir
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CURSO DE 128 PREGUNTAS -->
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
                                <span class="badge-desarrollo">EN DESARROLLO</span>
                            </div>
                        </div>
                        
                        <p class="mb-4" style="font-size: 1.1rem; color: rgba(255, 255, 255, 0.8);">
                            <?php echo $curso_128_preguntas['descripcion']; ?>
                        </p>

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
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- BIO RETO ACADEMY - SERIE 65 VIDEOS -->
    <section id="bioreto-academy" class="bioreto-section">
        <div class="container">
            <h2 class="section-title">BioReto Academy - Serie 65 Videos</h2>
            <p class="section-subtitle">Videos educativos organizados por materia - Temario completo ECOEMS 2026</p>

            <!-- PRESENTACIÓN DE LA SERIE -->
            <div class="presentacion-card">
                <h3 style="color: var(--bioreto-color); margin-bottom: 1.5rem;">
                    <i class="fas fa-play-circle me-2"></i>Presentación de la Serie
                </h3>
                <?php foreach($serie_65_videos['presentacion'] as $video): ?>
                    <div class="presentacion-video">
                        <div class="video-card">
                            <div class="p-4">
                                <h4 style="color: var(--bioreto-color); margin-bottom: 1rem;"><?php echo $video['titulo']; ?></h4>
                                <p class="video-description"><?php echo $video['descripcion']; ?></p>
                                
                                <div class="video-embed-container mb-3">
                                    <div class="ratio ratio-16x9">
                                        <iframe src="<?php echo $video['url_youtube']; ?>" 
                                                title="<?php echo $video['titulo']; ?>"
                                                frameborder="0" 
                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                                                allowfullscreen>
                                        </iframe>
                                    </div>
                                </div>
                                
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
                                <?php echo $total_videos_serie; ?> videos
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
                <?php foreach($serie_65_videos as $materia => $videos): ?>
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
                                                        <?php if(isset($video['nuevo']) && $video['nuevo']): ?>
                                                            <span class="badge-nuevo">NUEVO</span>
                                                        <?php endif; ?>
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
                                                    <div class="video-embed-container mb-3">
                                                        <div class="ratio ratio-16x9">
                                                            <iframe src="<?php echo $video['url_youtube']; ?>" 
                                                                    title="<?php echo $video['titulo']; ?>"
                                                                    frameborder="0" 
                                                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                                                                    allowfullscreen>
                                                            </iframe>
                                                        </div>
                                                    </div>
                                                    
                                                    <!-- BOTÓN NOTEBOOKLM -->
                                                    <?php if($video['notebooklm_url'] != '#'): ?>
                                                    <div class="text-center mt-3">
                                                        <a href="<?php echo $video['notebooklm_url']; ?>" target="_blank" 
                                                           class="btn-notebooklm w-100">
                                                            <i class="fas fa-brain me-2"></i>Material NotebookLM
                                                        </a>
                                                    </div>
                                                    <?php endif; ?>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
// =============================================
// SISTEMA DE VIDEOS SIMPLIFICADO Y FUNCIONAL
// =============================================

class VideoManager {
    constructor() {
        this.currentMateria = 'habilidad-verbal';
        this.init();
    }

    init() {
        this.setupEventListeners();
        console.log('✅ Sistema de videos inicializado - BioReto Academy');
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
        
        console.log('✅ Materia cambiada exitosamente:', materia);
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
            totalVideosElement.textContent = '<?php echo $total_videos_serie; ?> videos';
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
    console.log('🚀 Inicializando BioReto Academy...');
    
    // Inicializar gestor de videos
    window.videoManager = new VideoManager();
    
    console.log('✅ BioReto Academy inicializado correctamente');
    
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

function cargarSimulador(simulador) {
    alert(`🎮 Simulador ${simulador} - Esta funcionalidad estará disponible próximamente`);
}
    </script>
</body>
</html>