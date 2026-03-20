<?php
// CONFIGURACIÓN
error_reporting(0);

// DATOS DE LA PLATAFORMA
$plataforma = [
    'nombre' => 'CyberEdu MX',
    'slogan' => 'Plataforma Educativa ECOEMS 2026',
    'version' => 'BioReto Academy'
];

// ESTRUCTURA DEL PROYECTO
$estructura_proyecto = [
    'fase_actual' => [
        'titulo' => 'FASE 1: Contenido Fundamental Atemporal',
        'descripcion' => '40 videos de temario base que NO caducan. Válidos para ECOEMS 2026, 2027, 2028...',
        'total' => 40
    ],
    'fase_futura' => [
        'titulo' => 'FASE 2: Actualizaciones Guía 2026',
        'descripcion' => 'Contenido actualizado cuando salga la guía oficial ECOEMS 2026 (Abril-Mayo 2026)',
        'total' => 20
    ]
];

// CONTADORES
$total_videos_publicados = 8;
$progreso_fase1 = ($total_videos_publicados / $estructura_proyecto['fase_actual']['total']) * 100;

// CONFIGURACIÓN DE MATERIAS
$materias_nombres = [
    'habilidad-verbal' => 'Habilidad Verbal',
    'habilidad-matematica' => 'Habilidad Matemática', 
    'biologia' => 'Biología',
    'matematicas' => 'Matemáticas',
    'fisica' => 'Física',
    'quimica' => 'Química',
    'historia-universal' => 'Historia Universal',
    'historia-mexico' => 'Historia de México',
    'geografia' => 'Geografía',
    'civica' => 'Formación Cívica',
    'espanol' => 'Español'
];

$materias_iconos = [
    'habilidad-verbal' => 'fa-brain',
    'habilidad-matematica' => 'fa-calculator',
    'biologia' => 'fa-dna',
    'matematicas' => 'fa-square-root-variable',
    'fisica' => 'fa-atom',
    'quimica' => 'fa-flask',
    'historia-universal' => 'fa-globe-americas',
    'historia-mexico' => 'fa-landmark',
    'geografia' => 'fa-map',
    'civica' => 'fa-scale-balanced',
    'espanol' => 'fa-language'
];

$materias_colores = [
    'habilidad-verbal' => '#00f0ff',
    'habilidad-matematica' => '#ff0080', 
    'biologia' => '#00ff88',
    'matematicas' => '#ff9800',
    'fisica' => '#2196f3',
    'quimica' => '#9c27b0',
    'historia-universal' => '#4caf50',
    'historia-mexico' => '#f44336',
    'geografia' => '#ffeb3b',
    'civica' => '#795548',
    'espanol' => '#607d8b'
];

$contadores_materias = [
    'habilidad-verbal' => 5,
    'habilidad-matematica' => 3,
    'biologia' => 0,
    'matematicas' => 0,
    'fisica' => 0,
    'quimica' => 0,
    'historia-universal' => 0,
    'historia-mexico' => 0,
    'geografia' => 0,
    'civica' => 0,
    'espanol' => 0
];

// VIDEOS COMPLETOS
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
            'titulo' => '🧠 VIDEO 1: HABILIDAD VERBAL - Comprensión Lectora (Parte 1) - 5 Subíndices Clave',
            'materia' => 'Habilidad Verbal',
            'descripcion' => 'Fundamentos de comprensión lectora - 5 subíndices esenciales para dominar la habilidad verbal. Contenido atemporal que servirá para ECOEMS 2026, 2027, 2028...',
            'url_youtube' => 'https://www.youtube.com/embed/oYErXuJtZQA',
            'duracion' => '4:18',
            'notebooklm_url' => 'https://notebooklm.google.com/notebook/5b92f1d5-caac-41e8-a976-c411d2c6f171',
            'infografia_url' => 'video1/infografia.png',
            'presentacion_pdf' => 'video1/presentacion.pdf',
            'vistas' => '0',
            'serie' => '1/40',
            'nuevo' => true
        ],
        [
            'titulo' => '🧠 VIDEO 2: HABILIDAD VERBAL - Comprensión Lectora (Parte 2) - 5 Subíndices Avanzados',
            'materia' => 'Habilidad Verbal',
            'descripcion' => 'Nivel avanzado de comprensión lectora - 5 subíndices complejos para excelencia en habilidad verbal. Conocimiento fundamental que nunca caduca.',
            'url_youtube' => 'https://www.youtube.com/embed/unnsdgKbGTg',
            'duracion' => '4:53',
            'notebooklm_url' => 'https://notebooklm.google.com/notebook/1f40c8a5-0ea0-40b6-b1d8-91cc223304e4',
            'infografia_url' => 'video2/infografia.png',
            'presentacion_pdf' => 'video2/presentacion.pdf',
            'vistas' => '0',
            'serie' => '2/40',
            'nuevo' => true
        ],
        [
            'titulo' => '🧠 VIDEO 3: HABILIDAD VERBAL - Manejo de Vocabulario (Parte 1) - Analogías, Antónimos y Sinónimos',
            'materia' => 'Habilidad Verbal',
            'descripcion' => 'Dominio de vocabulario esencial - Analogías, antónimos y sinónimos explicados de forma práctica. Habilidades lingüísticas fundamentales permanentes.',
            'url_youtube' => 'https://www.youtube.com/embed/hPMZ-LP2V6g',
            'duracion' => '5:30',
            'notebooklm_url' => 'https://notebooklm.google.com/notebook/081ab961-4c44-43ab-a68c-c5eadfe7980b',
            'infografia_url' => 'video3/infografia.png',
            'presentacion_pdf' => 'video3/presentacion.pdf',
            'vistas' => '0',
            'serie' => '3/40',
            'nuevo' => true
        ],
        [
            'titulo' => '🧠 VIDEO 4: HV - Manejo de Vocabulario 2 - Contexto, Múltiples Significados y Expresiones Idiomáticas',
            'materia' => 'Habilidad Verbal',
            'descripcion' => 'Vocabulario en contexto avanzado - Múltiples significados y expresiones idiomáticas. Estrategias para interpretación precisa en cualquier examen.',
            'url_youtube' => 'https://www.youtube.com/embed/_Bdi2HpCC5Y',
            'duracion' => '5:37',
            'notebooklm_url' => 'https://notebooklm.google.com/notebook/ca387d8c-a743-48a9-922d-26373e948715',
            'infografia_url' => 'video4/infografia.png',
            'presentacion_pdf' => 'video4/presentacion.pdf',
            'vistas' => '0',
            'serie' => '4/40',
            'nuevo' => true
        ],
        [
            'titulo' => '🧠 VIDEO 5: HABILIDAD VERBAL - Integración Total y Aplicación Master',
            'materia' => 'Habilidad Verbal',
            'descripcion' => 'Integración completa de habilidad verbal - Aplicación master de todos los conceptos. Síntesis de conocimientos fundamentales atemporales.',
            'url_youtube' => 'https://www.youtube.com/embed/21ckQUi85BU',
            'duracion' => '5:29',
            'notebooklm_url' => 'https://notebooklm.google.com/notebook/e79cca86-53d6-4294-90cc-b6c4c41cf0b4',
            'infografia_url' => 'video5/infografia.png',
            'presentacion_pdf' => 'video5/presentacion.pdf',
            'vistas' => '0',
            'serie' => '5/40',
            'nuevo' => true
        ]
    ],
    'habilidad-matematica' => [
        [
            'titulo' => '🎯 VIDEO 6: SUCESIONES NUMÉRICAS - IPN/UNAM 2026 | CyberEdu MX - BioReto Academy',
            'materia' => 'Habilidad Matemática',
            'descripcion' => 'Sucesiones numéricas completas - Patrones y secuencias esenciales para IPN/UNAM 2026. Métodos fundamentales que permanecen igual cada año.',
            'url_youtube' => 'https://www.youtube.com/embed/RzwwnW7K6Zg',
            'duracion' => '7:20',
            'notebooklm_url' => 'https://notebooklm.google.com/notebook/be3c5227-90c1-4d21-b7b4-e3013cf1b3ca',
            'infografia_url' => 'video6/infografia.png',
            'presentacion_pdf' => 'video6/presentacion.pdf',
            'vistas' => '0',
            'serie' => '6/40',
            'nuevo' => true
        ],
        [
            'titulo' => '🎯 VIDEO 7: SERIES ESPACIALES - IPN/UNAM 2026 | CyberEdu MX - BioReto Academy',
            'materia' => 'Habilidad Matemática',
            'descripcion' => 'Series espaciales avanzadas - Razonamiento espacial para IPN/UNAM 2026. Conceptos fundamentales que no cambian con el tiempo.',
            'url_youtube' => 'https://www.youtube.com/embed/7YaFtSciRLA',
            'duracion' => '7:23',
            'notebooklm_url' => 'https://notebooklm.google.com/notebook/cc877779-605d-4472-8c93-6a8f9fc690a3',
            'infografia_url' => 'video7/infografia.png',
            'presentacion_pdf' => 'video7/presentacion.pdf',
            'vistas' => '0',
            'serie' => '7/40',
            'nuevo' => true
        ],
        [
            'titulo' => '🎯 VIDEO 8: IMAGINACIÓN ESPACIAL - Visualización 3D IPN/UNAM 2026 | CyberEdu MX - BioReto Academy',
            'materia' => 'Habilidad Matemática',
            'descripcion' => 'Imaginación espacial 3D - Visualización tridimensional para IPN/UNAM 2026. Desarrollo de habilidad espacial fundamental permanente.',
            'url_youtube' => 'https://www.youtube.com/embed/wJ05bGztCmo',
            'duracion' => '7:17',
            'notebooklm_url' => 'https://notebooklm.google.com/notebook/6cfefedf-5339-4ae9-8798-a6b902af5559',
            'infografia_url' => 'video8/infografia.png',
            'presentacion_pdf' => 'video8/presentacion.pdf',
            'vistas' => '0',
            'serie' => '8/40',
            'nuevo' => true
        ]
    ],
    'biologia' => [],
    'matematicas' => [],
    'fisica' => [],
    'quimica' => [],
    'historia-universal' => [],
    'historia-mexico' => [],
    'geografia' => [],
    'civica' => [],
    'espanol' => []
];

// SIMULADORES POR MATERIA - ENLACES DIRECTOS A RAÍZ
$simuladores_materias = [
    'habilidad-verbal' => [
        [
            'titulo' => 'Simulador Habilidad Verbal IPN/UNAM',
            'preguntas' => '50 preguntas',
            'tiempo' => '60 minutos',
            'dificultad' => 'Intermedia',
            'color' => '#00f0ff',
            'enlace' => 'simulador_habilidad_verbal.html'
        ]
    ],
    'habilidad-matematica' => [
        [
            'titulo' => 'Simulador Habilidad Matemática IPN/UNAM',
            'preguntas' => '45 preguntas', 
            'tiempo' => '55 minutos',
            'dificultad' => 'Intermedia',
            'color' => '#ff0080',
            'enlace' => 'simulador_habilidad_matematica.html'
        ]
    ],
    'biologia' => [
        [
            'titulo' => 'Simulador Biología ECOEMS 2026',
            'preguntas' => '40 preguntas',
            'tiempo' => '45 minutos',
            'dificultad' => 'Avanzada',
            'color' => '#00ff88',
            'enlace' => 'simulador_biologia.html'
        ]
    ],
    'matematicas' => [
        [
            'titulo' => 'Simulador Matemáticas IPN/UNAM',
            'preguntas' => '35 preguntas',
            'tiempo' => '50 minutos',
            'dificultad' => 'Avanzada',
            'color' => '#ff9800',
            'enlace' => 'simulador_matematicas.html'
        ]
    ],
    'fisica' => [
        [
            'titulo' => 'Simulador Física ECOEMS 2026',
            'preguntas' => '30 preguntas',
            'tiempo' => '40 minutos',
            'dificultad' => 'Avanzada',
            'color' => '#2196f3',
            'enlace' => 'simulador_fisica.html'
        ]
    ],
    'quimica' => [
        [
            'titulo' => 'Simulador Química IPN/UNAM',
            'preguntas' => '32 preguntas',
            'tiempo' => '42 minutos',
            'dificultad' => 'Intermedia',
            'color' => '#9c27b0',
            'enlace' => 'simulador_quimica.html'
        ]
    ],
    'historia-universal' => [
        [
            'titulo' => 'Simulador Historia Universal ECOEMS',
            'preguntas' => '38 preguntas',
            'tiempo' => '35 minutos',
            'dificultad' => 'Intermedia',
            'color' => '#4caf50',
            'enlace' => 'simulador_historia_universal.html'
        ]
    ],
    'historia-mexico' => [
        [
            'titulo' => 'Simulador Historia de México IPN/UNAM',
            'preguntas' => '42 preguntas',
            'tiempo' => '38 minutos',
            'dificultad' => 'Intermedia',
            'color' => '#f44336',
            'enlace' => 'simulador_historia_mexico.html'
        ]
    ],
    'geografia' => [
        [
            'titulo' => 'Simulador Geografía ECOEMS 2026',
            'preguntas' => '36 preguntas',
            'tiempo' => '33 minutos',
            'dificultad' => 'Básica',
            'color' => '#ffeb3b',
            'enlace' => 'simulador_geografia.html'
        ]
    ],
    'civica' => [
        [
            'titulo' => 'Simulador Formación Cívica IPN/UNAM',
            'preguntas' => '34 preguntas',
            'tiempo' => '30 minutos',
            'dificultad' => 'Básica',
            'color' => '#795548',
            'enlace' => 'simulador_formacion_civica.html'
        ]
    ],
    'espanol' => [
        [
            'titulo' => 'Simulador Español ECOEMS 2026',
            'preguntas' => '40 preguntas',
            'tiempo' => '45 minutos',
            'dificultad' => 'Intermedia',
            'color' => '#607d8b',
            'enlace' => 'simulador_espanol.html'
        ]
    ]
];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($plataforma['nombre']); ?> - <?php echo htmlspecialchars($plataforma['version']); ?></title>
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
        }

        .navbar {
            background: rgba(10, 10, 26, 0.95);
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
        }

        .hero {
            background: linear-gradient(135deg, #0a0a1a 0%, #1a1a3a 100%);
            padding: 140px 0 100px;
            text-align: center;
        }

        .hero h1 {
            font-size: 3.5rem;
            font-weight: 800;
            margin-bottom: 1rem;
            background: linear-gradient(45deg, var(--primary), var(--accent));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
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

        .materia-btn.active {
            border-color: var(--primary);
        }

        .bioreto-section {
            background: linear-gradient(135deg, #1a1a3a 0%, #2a2a4a 100%);
            padding: 100px 0;
        }

        .video-card {
            background: var(--card);
            border-radius: 15px;
            padding: 25px;
            margin-bottom: 30px;
            border: 1px solid rgba(255,255,255,0.1);
        }

        .video-section {
            display: none;
        }

        .video-section.active {
            display: block;
        }

        .notebooklm-preview {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border-radius: 10px;
            padding: 40px;
            text-align: center;
            cursor: pointer;
            margin: 20px 0;
            transition: transform 0.3s ease;
        }

        .notebooklm-preview:hover {
            transform: translateY(-5px);
        }

        .nav-tabs .nav-link {
            color: rgba(255,255,255,0.7);
            border: none;
            padding: 15px 25px;
        }

        .nav-tabs .nav-link.active {
            color: #00f0ff;
            background: rgba(0, 240, 255, 0.1);
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

        .fase-card {
            background: var(--card);
            border-radius: 20px;
            padding: 2rem;
            border: 2px solid;
            height: 100%;
        }

        .curso-card {
            background: var(--card);
            border-radius: 20px;
            padding: 2rem;
            border: 2px solid var(--curso-color);
            height: 100%;
        }

        .simulator-card {
            background: #f8f9fa;
            border-radius: 15px;
            padding: 2rem;
            text-align: center;
            transition: all 0.3s ease;
            border: 2px solid transparent;
            height: 100%;
            text-decoration: none;
            display: block;
            color: inherit;
        }

        .simulator-card:hover {
            transform: translateY(-5px);
            border-color: #4caf50;
        }

        /* NUEVOS ESTILOS PARA INFOGRAFÍA Y PDF */
        .infografia-container {
            background: rgba(255,255,255,0.05);
            border-radius: 10px;
            padding: 20px;
            margin: 20px 0;
            border: 1px solid rgba(255,255,255,0.1);
        }

        .infografia-img {
            max-width: 100%;
            border-radius: 8px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.3);
            transition: transform 0.3s ease;
            cursor: pointer;
        }

        .infografia-img:hover {
            transform: scale(1.02);
        }

        .recursos-container {
            background: rgba(255,255,255,0.05);
            border-radius: 10px;
            padding: 20px;
            margin: 15px 0;
        }

        .btn-pdf {
            background: linear-gradient(45deg, #f44336, #d32f2f);
            color: white;
            padding: 12px 25px;
            border-radius: 25px;
            text-decoration: none;
            font-weight: 600;
            border: none;
            display: inline-flex;
            align-items: center;
            transition: all 0.3s ease;
        }

        .btn-pdf:hover {
            transform: translateY(-2px);
            color: white;
        }

        .btn-infografia {
            background: linear-gradient(45deg, #2196f3, #1976d2);
            color: white;
            padding: 12px 25px;
            border-radius: 25px;
            text-decoration: none;
            font-weight: 600;
            border: none;
            display: inline-flex;
            align-items: center;
            transition: all 0.3s ease;
        }

        .btn-infografia:hover {
            transform: translateY(-2px);
            color: white;
        }

        .simuladores-section {
            background: linear-gradient(135deg, #1a237e 0%, #283593 100%);
            padding: 80px 0;
        }

        .simulador-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
            margin-top: 30px;
        }

        .simulador-item {
            background: var(--card);
            border-radius: 15px;
            padding: 25px;
            border-left: 5px solid;
            transition: all 0.3s ease;
        }

        .simulador-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.3);
        }

        .btn-simulador {
            background: linear-gradient(45deg, var(--primary), var(--accent));
            color: white;
            padding: 12px 25px;
            border-radius: 25px;
            text-decoration: none;
            font-weight: 600;
            border: none;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
            width: 100%;
        }

        .btn-simulador:hover {
            transform: translateY(-2px);
            color: white;
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
        }

        @media (max-width: 768px) {
            .hero h1 {
                font-size: 2.2rem;
            }
            .section-title {
                font-size: 2rem;
            }
        }
    </style>
</head>
<body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <i class="fas fa-graduation-cap me-2"></i><?php echo htmlspecialchars($plataforma['nombre']); ?>
            </a>
            <div class="navbar-nav ms-auto">
                <a class="nav-link" href="#index">Inicio</a>
                <a class="nav-link" href="#estrategia">Estrategia</a>
                <a class="nav-link" href="#temario">Temario</a>
                <a class="nav-link" href="#curso-128">Curso 128</a>
                <a class="nav-link" href="#simuladores">Simuladores</a>
            </div>
        </div>
    </nav>

    <!-- HERO -->
    <section id="index" class="hero">
        <div class="container">
            <h1>BioReto Academy ECOEMS 2026</h1>
            <p class="lead mb-4">Contenido Fundamental + NotebookLM Integration</p>
            <div class="d-flex gap-3 justify-content-center flex-wrap">
                <a href="#estrategia" class="btn-bioreto">
                    <i class="fas fa-chess-knight me-2"></i>ESTRATEGIA 2026
                </a>
                <a href="#temario" class="btn-cyberedu">
                    <i class="fas fa-play-circle me-2"></i>TEMARIO FUNDAMENTAL
                </a>
                <a href="#curso-128" class="btn-curso-128">
                    <i class="fas fa-list-check me-2"></i>128 PREGUNTAS
                </a>
            </div>
        </div>
    </section>

    <!-- ESTRATEGIA -->
    <section id="estrategia" class="py-5" style="background: #1a237e;">
        <div class="container">
            <h2 class="section-title">Estrategia 2026</h2>
            <div class="row">
                <div class="col-lg-6 mb-4">
                    <div class="fase-card" style="border-color: var(--fase1-color);">
                        <h3 style="color: var(--fase1-color);">
                            <i class="fas fa-rocket me-2"></i>
                            <?php echo htmlspecialchars($estructura_proyecto['fase_actual']['titulo']); ?>
                        </h3>
                        <p class="mb-3"><?php echo htmlspecialchars($estructura_proyecto['fase_actual']['descripcion']); ?></p>
                        <div class="progress mb-3">
                            <div class="progress-bar" style="width: <?php echo $progreso_fase1; ?>%; background: var(--fase1-color);">
                                <?php echo $total_videos_publicados; ?>/<?php echo $estructura_proyecto['fase_actual']['total']; ?> videos
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="fase-card" style="border-color: var(--fase2-color);">
                        <h3 style="color: var(--fase2-color);">
                            <i class="fas fa-sync-alt me-2"></i>
                            <?php echo htmlspecialchars($estructura_proyecto['fase_futura']['titulo']); ?>
                        </h3>
                        <p class="mb-3"><?php echo htmlspecialchars($estructura_proyecto['fase_futura']['descripcion']); ?></p>
                        <div class="alert alert-warning">
                            Disponible Abril-Mayo 2026
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- BOTONES MATERIAS -->
    <section class="py-4">
        <div class="container text-center">
            <?php foreach($materias_nombres as $key => $nombre): ?>
                <?php $cantidad = $contadores_materias[$key] ?? 0; ?>
                <button class="materia-btn <?php echo $key == 'habilidad-verbal' ? 'active' : ''; ?>" 
                        data-materia="<?php echo $key; ?>"
                        style="border-color: <?php echo $materias_colores[$key]; ?>;">
                    <i class="fas <?php echo $materias_iconos[$key]; ?> me-2"></i><?php echo $nombre; ?>
                    <?php if($cantidad > 0): ?>
                        <span class="badge bg-primary ms-1"><?php echo $cantidad; ?></span>
                    <?php endif; ?>
                </button>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- VIDEOS -->
    <section id="temario" class="bioreto-section">
        <div class="container">
            <?php foreach($videos_temario as $materia => $videos): ?>
                <?php if($materia != 'presentacion'): ?>
                    <div class="video-section <?php echo $materia == 'habilidad-verbal' ? 'active' : ''; ?>" id="videos-<?php echo $materia; ?>">
                        <h2 class="text-center mb-5" style="color: <?php echo $materias_colores[$materia]; ?>;">
                            <i class="fas <?php echo $materias_iconos[$materia]; ?> me-2"></i>
                            <?php echo $materias_nombres[$materia]; ?>
                        </h2>
                        
                        <?php if(count($videos) > 0): ?>
                            <?php foreach($videos as $index => $video): ?>
                                <div class="video-card">
                                    <h4 class="mb-3"><?php echo htmlspecialchars($video['titulo']); ?></h4>
                                    <p class="text-muted mb-3"><?php echo htmlspecialchars($video['descripcion']); ?></p>
                                    
                                    <ul class="nav nav-tabs mb-4">
                                        <li class="nav-item">
                                            <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#video-<?php echo $materia . '-' . $index; ?>">
                                                <i class="fas fa-play-circle me-2"></i>Video
                                            </button>
                                        </li>
                                        <li class="nav-item">
                                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#notebooklm-<?php echo $materia . '-' . $index; ?>">
                                                <i class="fas fa-brain me-2"></i>NotebookLM
                                            </button>
                                        </li>
                                    </ul>

                                    <div class="tab-content">
                                        <!-- PESTAÑA VIDEO -->
                                        <div class="tab-pane fade show active" id="video-<?php echo $materia . '-' . $index; ?>">
                                            <!-- VIDEO YOUTUBE -->
                                            <div class="ratio ratio-16x9 mb-4">
                                                <iframe src="<?php echo htmlspecialchars($video['url_youtube']); ?>" 
                                                        frameborder="0" 
                                                        allowfullscreen>
                                                </iframe>
                                            </div>

                                            <!-- INFOGRAFÍA DEBAJO DEL VIDEO -->
                                            <?php if(!empty($video['infografia_url'])): ?>
                                            <div class="infografia-container">
                                                <h5 class="text-center mb-3">
                                                    <i class="fas fa-chart-bar me-2"></i>Infografía del Video
                                                </h5>
                                                <div class="text-center">
                                                    <img src="<?php echo htmlspecialchars($video['infografia_url']); ?>" 
                                                         alt="Infografía <?php echo htmlspecialchars($video['titulo']); ?>" 
                                                         class="infografia-img"
                                                         onclick="abrirImagen('<?php echo htmlspecialchars($video['infografia_url']); ?>')">
                                                </div>
                                            </div>
                                            <?php endif; ?>

                                            <!-- RECURSOS DESCARGABLES -->
                                            <div class="recursos-container">
                                                <h5 class="text-center mb-3">
                                                    <i class="fas fa-download me-2"></i>Recursos Descargables
                                                </h5>
                                                <div class="row">
                                                    <?php if(!empty($video['presentacion_pdf'])): ?>
                                                    <div class="col-md-6 mb-3">
                                                        <a href="<?php echo htmlspecialchars($video['presentacion_pdf']); ?>" 
                                                           target="_blank" 
                                                           class="btn-pdf w-100">
                                                            <i class="fas fa-file-pdf me-2"></i>Descargar Presentación PDF
                                                        </a>
                                                    </div>
                                                    <?php endif; ?>
                                                    
                                                    <?php if(!empty($video['infografia_url'])): ?>
                                                    <div class="col-md-6 mb-3">
                                                        <a href="<?php echo htmlspecialchars($video['infografia_url']); ?>" 
                                                           download 
                                                           class="btn-infografia w-100">
                                                            <i class="fas fa-image me-2"></i>Descargar Infografía
                                                        </a>
                                                    </div>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- PESTAÑA NOTEBOOKLM -->
                                        <div class="tab-pane fade" id="notebooklm-<?php echo $materia . '-' . $index; ?>">
                                            <?php if($video['notebooklm_url'] != '#'): ?>
                                                <div class="notebooklm-preview" onclick="abrirNotebookLM('<?php echo htmlspecialchars($video['notebooklm_url']); ?>', '<?php echo htmlspecialchars($video['titulo']); ?>')">
                                                    <i class="fas fa-brain fa-3x mb-3"></i>
                                                    <h4>NotebookLM AI Assistant</h4>
                                                    <p class="mb-3">Haz clic para abrir el NotebookLM especializado</p>
                                                    <button class="btn btn-light">
                                                        <i class="fas fa-external-link-alt me-2"></i>Abrir NotebookLM
                                                    </button>
                                                </div>
                                            <?php else: ?>
                                                <div class="alert alert-info">NotebookLM no disponible</div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <div class="text-center py-5">
                                <i class="fas fa-video-slash fa-3x mb-3 text-muted"></i>
                                <h5 class="text-muted">Próximamente</h5>
                                <p class="text-muted">Los videos estarán disponibles pronto</p>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- SIMULADORES -->
    <section id="simuladores" class="simuladores-section">
        <div class="container">
            <h2 class="section-title">Simuladores por Materia</h2>
            <p class="text-center mb-5">Practica con simuladores especializados para cada materia</p>
            
            <div class="simulador-grid">
                <?php foreach($simuladores_materias as $materia => $simuladores): ?>
                    <?php foreach($simuladores as $simulador): ?>
                        <div class="simulador-item" style="border-left-color: <?php echo $simulador['color']; ?>;">
                            <h4 style="color: <?php echo $simulador['color']; ?>;">
                                <i class="fas <?php echo $materias_iconos[$materia]; ?> me-2"></i>
                                <?php echo htmlspecialchars($simulador['titulo']); ?>
                            </h4>
                            <div class="simulador-info mt-3">
                                <div class="d-flex justify-content-between mb-2">
                                    <span><i class="fas fa-question-circle me-2"></i>Preguntas:</span>
                                    <strong><?php echo $simulador['preguntas']; ?></strong>
                                </div>
                                <div class="d-flex justify-content-between mb-2">
                                    <span><i class="fas fa-clock me-2"></i>Tiempo:</span>
                                    <strong><?php echo $simulador['tiempo']; ?></strong>
                                </div>
                                <div class="d-flex justify-content-between mb-3">
                                    <span><i class="fas fa-chart-line me-2"></i>Dificultad:</span>
                                    <strong><?php echo $simulador['dificultad']; ?></strong>
                                </div>
                                <a href="<?php echo htmlspecialchars($simulador['enlace']); ?>" 
                                   target="_blank" 
                                   class="btn-simulador">
                                    <i class="fas fa-play me-2"></i>Iniciar Simulador
                                </a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- MODAL PARA IMAGEN -->
    <div class="modal fade" id="imagenModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content bg-dark">
                <div class="modal-header">
                    <h5 class="modal-title text-white">Infografía</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body text-center">
                    <img id="imagenModalSrc" src="" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // CAMBIAR MATERIA
        document.querySelectorAll('.materia-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                document.querySelectorAll('.materia-btn').forEach(b => b.classList.remove('active'));
                this.classList.add('active');
                
                document.querySelectorAll('.video-section').forEach(section => {
                    section.classList.remove('active');
                });
                
                const materia = this.getAttribute('data-materia');
                document.getElementById('videos-' + materia).classList.add('active');
            });
        });

        // ABRIR NOTEBOOKLM
        function abrirNotebookLM(url, titulo) {
            window.open(url, '_blank', 'noopener,noreferrer');
            console.log('NotebookLM abierto: ' + titulo);
        }

        // ABRIR IMAGEN EN MODAL
        function abrirImagen(src) {
            document.getElementById('imagenModalSrc').src = src;
            const modal = new bootstrap.Modal(document.getElementById('imagenModal'));
            modal.show();
        }

        // NAVEGACIÓN SUAVE
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

        console.log('✅ BioReto Academy PHP - Plataforma Cargada');
    </script>
</body>
</html>