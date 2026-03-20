<?php
// ESTRUCTURA COMPLETA CON TODOS LOS VIDEOS ORGANIZADOS
$plataforma = [
    'nombre' => 'BioReto Academy',
    'version' => 'ECOEMS 2026'
];

// TODOS LOS 25 VIDEOS ORGANIZADOS POR ORDEN LÓGICO
$videos_organizados = [
    // PRESENTACIÓN
    'video0' => [
        'materia' => 'presentacion', 
        'titulo' => 'Presentación del Proyecto BioReto 2026', 
        'descripcion' => 'Introducción completa a la plataforma y metodología de estudio.',
        'youtube' => 'KM6df1FB1zM', 
        'notebooklm' => ''
    ],
    
    // BIOLOGÍA (6 videos)
    'video1' => [
        'materia' => 'biologia', 
        'titulo' => 'Biología Celular - Estructura y Función', 
        'descripcion' => 'Célula eucariota, procariota, organelos celulares y sus funciones específicas.',
        'youtube' => 'oYErXuJtZQA', 
        'notebooklm' => 'https://notebooklm.google.com/notebook/1f40c8a5-0ea0-40b6-b1d8-91cc223304e4'
    ],
    'video2' => [
        'materia' => 'biologia', 
        'titulo' => 'Genética y Herencia Mendeliana', 
        'descripcion' => 'Leyes de Mendel, herencia de caracteres y resolución de problemas genéticos.',
        'youtube' => 'unnsdgKbGTg', 
        'notebooklm' => 'https://notebooklm.google.com/notebook/081ab961-4c44-43ab-a68c-c5eadfe7980b'
    ],
    'video3' => [
        'materia' => 'biologia', 
        'titulo' => 'Sistema Nervioso y Endocrino', 
        'descripcion' => 'Estructura y función del sistema nervioso, hormonal y su integración.',
        'youtube' => 'hPMZ-LP2V6g', 
        'notebooklm' => 'https://notebooklm.google.com/notebook/ca387d8c-a743-48a9-922d-26373e948715'
    ],
    'video10' => [
        'materia' => 'biologia', 
        'titulo' => 'Metabolismo Celular', 
        'descripcion' => 'Procesos metabólicos, respiración celular, fotosíntesis y obtención de energía.',
        'youtube' => 'NaHxdPXs9XM', 
        'notebooklm' => 'https://notebooklm.google.com/notebook/ba64e657-f1e5-4739-97be-8d543f35a565'
    ],
    'video11' => [
        'materia' => 'biologia', 
        'titulo' => 'Anatomía Humana - Sistema Digestivo', 
        'descripcion' => 'Estructura y función del sistema digestivo humano y proceso de digestión.',
        'youtube' => 'PNShc_2dnYY', 
        'notebooklm' => 'https://notebooklm.google.com/notebook/e726391d-fe58-4b13-b446-c6533fb18042'
    ],
    'video20' => [
        'materia' => 'biologia', 
        'titulo' => 'Evolución y Selección Natural', 
        'descripcion' => 'Teorías evolutivas, mecanismos de selección natural y evidencias de la evolución.',
        'youtube' => '5jdwdpAteYc', 
        'notebooklm' => 'https://notebooklm.google.com/notebook/fc7112a2-14af-43b5-950d-9d7a080515d3'
    ],
    
    // QUÍMICA (5 videos)
    'video4' => [
        'materia' => 'quimica', 
        'titulo' => 'Tabla Periódica y Propiedades', 
        'descripcion' => 'Organización de elementos, grupos, períodos y propiedades periódicas fundamentales.',
        'youtube' => '_Bdi2HpCC5Y', 
        'notebooklm' => 'https://notebooklm.google.com/notebook/e79cca86-53d6-4294-90cc-b6c4c41cf0b4'
    ],
    'video5' => [
        'materia' => 'quimica', 
        'titulo' => 'Enlaces Químicos y Molecularidad', 
        'descripcion' => 'Tipos de enlaces químicos, geometría molecular y propiedades de los compuestos.',
        'youtube' => '21ckQUi85BU', 
        'notebooklm' => 'https://notebooklm.google.com/notebook/be3c5227-90c1-4d21-b7b4-e3013cf1b3ca'
    ],
    'video12' => [
        'materia' => 'quimica', 
        'titulo' => 'Reacciones Químicas y Estequiometría', 
        'descripcion' => 'Balanceo de ecuaciones químicas y cálculos estequiométricos básicos.',
        'youtube' => 'c7HKPeYonC0', 
        'notebooklm' => 'https://notebooklm.google.com/notebook/7d4a39a1-f8e6-4d1d-a4c5-228934121408'
    ],
    'video13' => [
        'materia' => 'quimica', 
        'titulo' => 'Química Orgánica - Hidrocarburos', 
        'descripcion' => 'Introducción a los compuestos orgánicos, hidrocarburos y nomenclatura básica.',
        'youtube' => '1LxS-uhrojU', 
        'notebooklm' => 'https://notebooklm.google.com/notebook/451ea89a-b294-4b2f-9376-92b821ef5817'
    ],
    'video21' => [
        'materia' => 'quimica', 
        'titulo' => 'Soluciones y Concentraciones', 
        'descripcion' => 'Preparación de soluciones, cálculos de concentración y propiedades coligativas.',
        'youtube' => 'ZzZ9PA9wObU', 
        'notebooklm' => 'https://notebooklm.google.com/notebook/be28d280-3531-44cb-a6c5-717dc21b2a51'
    ],
    
    // FÍSICA (5 videos)
    'video6' => [
        'materia' => 'fisica', 
        'titulo' => 'Cinemática - Movimiento Rectilíneo', 
        'descripcion' => 'Conceptos de posición, velocidad, aceleración y ecuaciones del movimiento rectilíneo.',
        'youtube' => 'RzwwnW7K6Zg', 
        'notebooklm' => 'https://notebooklm.google.com/notebook/cc877779-605d-4472-8c93-6a8f9fc690a3'
    ],
    'video7' => [
        'materia' => 'fisica', 
        'titulo' => 'Dinámica - Leyes de Newton', 
        'descripcion' => 'Aplicación de las tres leyes de Newton, fuerzas y diagramas de cuerpo libre.',
        'youtube' => '7YaFtSciRLA', 
        'notebooklm' => 'https://notebooklm.google.com/notebook/6cfefedf-5339-4ae9-8798-a6b902af5559'
    ],
    'video14' => [
        'materia' => 'fisica', 
        'titulo' => 'Energía y Trabajo', 
        'descripcion' => 'Conceptos de energía, trabajo, potencia y conservación de la energía.',
        'youtube' => '-wd-aZRR2bw', 
        'notebooklm' => 'https://notebooklm.google.com/notebook/bf3a28c2-448a-4652-be08-61435e88a8c2'
    ],
    'video15' => [
        'materia' => 'fisica', 
        'titulo' => 'Electricidad y Magnetismo', 
        'descripcion' => 'Conceptos básicos de electricidad, magnetismo y electromagnetismo.',
        'youtube' => 'WvH5mItNjtk', 
        'notebooklm' => 'https://notebooklm.google.com/notebook/059967f8-229b-48a2-93cf-77b733b7ecf5'
    ],
    'video22' => [
        'materia' => 'fisica', 
        'titulo' => 'Óptica y Ondas', 
        'descripcion' => 'Comportamiento de la luz, fenómenos ondulatorios y principios ópticos.',
        'youtube' => 'sPwjVE0f9Ic', 
        'notebooklm' => 'https://notebooklm.google.com/notebook/0c3109a3-4859-437b-bdb1-ea830c765c2f'
    ],
    
    // MATEMÁTICAS (4 videos)
    'video8' => [
        'materia' => 'matematicas', 
        'titulo' => 'Álgebra - Ecuaciones y Sistemas', 
        'descripcion' => 'Resolución de ecuaciones lineales, cuadráticas y sistemas de ecuaciones.',
        'youtube' => 'wJ05bGztCmo', 
        'notebooklm' => 'https://notebooklm.google.com/notebook/ef823779-3e15-4471-9b11-385ad0663a3c'
    ],
    'video16' => [
        'materia' => 'matematicas', 
        'titulo' => 'Geometría y Trigonometría', 
        'descripcion' => 'Conceptos geométricos, teoremas fundamentales y funciones trigonométricas.',
        'youtube' => '7DE4s-S4B-Q', 
        'notebooklm' => 'https://notebooklm.google.com/notebook/ae23c70d-857f-4435-83b8-ed960551b126'
    ],
    'video17' => [
        'materia' => 'matematicas', 
        'titulo' => 'Cálculo Diferencial', 
        'descripcion' => 'Introducción al cálculo, límites, derivadas y aplicaciones prácticas.',
        'youtube' => 'hmBcAtn345U', 
        'notebooklm' => 'https://notebooklm.google.com/notebook/44a5a00c-0df3-4e76-913d-91901187ec31'
    ],
    'video23' => [
        'materia' => 'matematicas', 
        'titulo' => 'Estadística y Probabilidad', 
        'descripcion' => 'Análisis de datos, medidas de tendencia central y conceptos probabilísticos.',
        'youtube' => 'QHCMxDidmmE', 
        'notebooklm' => 'https://notebooklm.google.com/notebook/1b19afdc-aad1-4e9b-b99f-834b2bc2ab32'
    ],
    
    // ECOLOGÍA (4 videos)
    'video9' => [
        'materia' => 'ecologia', 
        'titulo' => 'Ecosistemas y Cadenas Alimenticias', 
        'descripcion' => 'Componentes de los ecosistemas, flujo de energía y relaciones tróficas.',
        'youtube' => 'WWSIHQYwO3I', 
        'notebooklm' => 'https://notebooklm.google.com/notebook/ba64e657-f1e5-4739-97be-8d543f35a565'
    ],
    'video18' => [
        'materia' => 'ecologia', 
        'titulo' => 'Contaminación Ambiental', 
        'descripcion' => 'Tipos de contaminación, sus efectos en el medio ambiente y medidas de control.',
        'youtube' => 'jjDeYQfSDQQ', 
        'notebooklm' => 'https://notebooklm.google.com/notebook/720a82a4-23d3-4fe0-9261-66b02748838b'
    ],
    'video19' => [
        'materia' => 'ecologia', 
        'titulo' => 'Desarrollo Sostenible', 
        'descripcion' => 'Conceptos de sostenibilidad, desarrollo responsable y conservación de recursos.',
        'youtube' => '6Mtmn6oeCWs', 
        'notebooklm' => 'https://notebooklm.google.com/notebook/77273295-83cf-4164-9887-750c44321201'
    ],
    'video24' => [
        'materia' => 'ecologia', 
        'titulo' => 'Biodiversidad y Conservación', 
        'descripcion' => 'Importancia de la biodiversidad, especies en peligro y estrategias de conservación.',
        'youtube' => 'VffgSWI-1rg', 
        'notebooklm' => 'https://notebooklm.google.com/notebook/9d09f7cf-bf62-40c3-b910-c533e1be4776'
    ]
];

// MATERIAS ORGANIZADAS
$materias = [
    'biologia' => ['nombre' => 'Biología', 'color' => '#4caf50', 'icono' => 'fa-dna', 'videos' => 6],
    'quimica' => ['nombre' => 'Química', 'color' => '#ff9800', 'icono' => 'fa-flask', 'videos' => 5],
    'fisica' => ['nombre' => 'Física', 'color' => '#2196f3', 'icono' => 'fa-atom', 'videos' => 5],
    'matematicas' => ['nombre' => 'Matemáticas', 'color' => '#9c27b0', 'icono' => 'fa-calculator', 'videos' => 4],
    'ecologia' => ['nombre' => 'Ecología', 'color' => '#00bcd4', 'icono' => 'fa-leaf', 'videos' => 4]
];

// SIMULADORES
$simuladores = [
    [
        'titulo' => 'Simulador Completo ECOEMS',
        'descripcion' => '128 preguntas en 3 horas - Réplica exacta del examen UNAM',
        'ruta' => 'simuladores/simulador_completo.php',
        'icono' => 'fa-brain',
        'color' => '#ff4081'
    ],
    [
        'titulo' => 'Simulador de Biología',
        'descripcion' => '40 preguntas específicas de biología celular y genética',
        'ruta' => 'simuladores/biologia.php',
        'icono' => 'fa-dna',
        'color' => '#4caf50'
    ]
];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BioReto Academy - Plataforma Completa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* RESET COMPLETO */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background: #0a0f2d;
            color: white;
            font-family: Arial, sans-serif;
            /* SIN padding-top aquí - se maneja con márgenes */
        }
        
        /* NAVBAR FIJO SOLO PARA NAVEGACIÓN */
        .navbar-fixed {
            background: #1a237e !important;
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
            height: 60px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.3);
        }
        
        .navbar-brand {
            font-size: 1.2rem;
            font-weight: bold;
        }
        
        .nav-link {
            font-size: 0.85rem;
            padding: 0.4rem 0.8rem;
        }
        
        /* CONTENEDOR DE MATERIAS SEPARADO Y FIJO */
        .materias-fixed {
            position: fixed;
            top: 60px; /* Justo debajo del navbar */
            left: 0;
            width: 100%;
            background: #283593;
            padding: 10px 15px;
            z-index: 999;
            display: flex;
            gap: 10px;
            overflow-x: auto;
            border-bottom: 2px solid #00bcd4;
            box-shadow: 0 4px 8px rgba(0,0,0,0.2);
            height: 55px;
        }
        
        .materias-inner {
            display: flex;
            gap: 10px;
            width: 100%;
            justify-content: center;
        }
        
        .materia-btn {
            background: transparent;
            border: 2px solid;
            color: white;
            padding: 6px 15px;
            border-radius: 20px;
            cursor: pointer;
            white-space: nowrap;
            font-weight: bold;
            transition: all 0.3s ease;
            flex-shrink: 0;
            font-size: 0.85rem;
        }
        
        .materia-btn.active, .materia-btn:hover {
            background: #00bcd4;
            color: #0a0f2d;
            transform: scale(1.05);
            box-shadow: 0 4px 8px rgba(0,188,212,0.3);
        }
        
        /* CONTENIDO PRINCIPAL CON MARGEN PARA ELEMENTOS FIJOS */
        .main-content {
            margin-top: 115px; /* 60px navbar + 55px materias */
            padding-bottom: 50px;
        }
        
        /* HERO SECTION */
        .hero {
            background: linear-gradient(135deg, #1a237e 0%, #283593 100%);
            padding: 40px 0 30px;
            text-align: center;
            border-radius: 0 0 20px 20px;
            margin-bottom: 30px;
        }
        
        .hero h1 {
            font-size: 2rem;
            font-weight: bold;
            margin-bottom: 0.5rem;
            background: linear-gradient(45deg, #00bcd4, #ff4081);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        
        /* SECCIONES DE VIDEO - CORREGIDAS */
        .videos-container {
            min-height: 500px;
        }
        
        .video-section {
            display: none;
            animation: fadeIn 0.5s ease;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        .video-section.active {
            display: block;
        }
        
        .video-card {
            background: rgba(255,255,255,0.1);
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 25px;
            border-left: 4px solid #00bcd4;
            transition: transform 0.3s ease;
        }
        
        .video-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.2);
        }
        
        .contenedor-principal {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px;
            margin: 15px 0;
        }
        
        @media (max-width: 768px) {
            .contenedor-principal {
                grid-template-columns: 1fr;
            }
            
            .materias-fixed {
                justify-content: flex-start;
                padding: 10px 5px;
            }
            
            .materia-btn {
                padding: 5px 10px;
                font-size: 0.75rem;
            }
        }
        
        .video-container iframe {
            width: 100%;
            height: 250px;
            border-radius: 10px;
            border: none;
        }
        
        .notebooklm-container {
            background: rgba(0,188,212,0.15);
            padding: 15px;
            border-radius: 8px;
            border: 1px solid #00bcd4;
            text-align: center;
        }
        
        .infografia-container {
            text-align: center;
            margin: 15px 0;
        }
        
        .infografia-img {
            max-width: 350px;
            width: 100%;
            border-radius: 10px;
            border: 2px solid #00bcd4;
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        }
        
        /* OTRAS SECCIONES */
        .section-title {
            text-align: center;
            font-size: 1.8rem;
            margin-bottom: 2rem;
            color: #00bcd4;
            font-weight: bold;
            padding-bottom: 10px;
            border-bottom: 2px solid rgba(0,188,212,0.3);
        }
        
        .btn-custom {
            padding: 10px 20px;
            border-radius: 25px;
            font-weight: bold;
            border: none;
            font-size: 0.9rem;
            transition: all 0.3s ease;
        }
        
        .btn-custom:hover {
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.3);
        }
        
        .fase-card {
            background: rgba(255,255,255,0.1);
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 15px;
            border-left: 4px solid;
        }
        
        .simulador-card {
            background: rgba(255,255,255,0.1);
            padding: 25px;
            border-radius: 10px;
            text-align: center;
            border: 2px solid;
            margin-bottom: 15px;
            transition: all 0.3s ease;
            height: 100%;
        }
        
        .simulador-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.3);
        }
        
        .curso-card {
            background: rgba(255,255,255,0.1);
            padding: 30px;
            border-radius: 15px;
            text-align: center;
            border: 2px solid #4caf50;
            max-width: 600px;
            margin: 0 auto;
        }
        
        /* CARACTERÍSTICAS DEL SIMULADOR */
        .caracteristicas-simulador {
            margin: 40px 0; 
            padding: 40px 20px; 
            background: rgba(255,255,255,0.05);
            border-radius: 20px; 
            border: 1px solid rgba(255,255,255,0.1);
        }
        
        .caracteristica-card {
            background: rgba(255,255,255,0.08);
            padding: 25px;
            border-radius: 15px;
            transition: all 0.3s ease;
            border: 1px solid rgba(255,255,255,0.1);
            height: 100%;
        }
        
        .caracteristica-card:hover {
            transform: translateY(-10px);
            background: rgba(255,255,255,0.12);
            box-shadow: 0 15px 30px rgba(0,0,0,0.2);
        }
    </style>
</head>
<body>
    <!-- NAVBAR FIJO SOLO CON NAVEGACIÓN -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-fixed">
        <div class="container">
            <a class="navbar-brand" href="#inicio">
                <i class="fas fa-graduation-cap me-1"></i>BioReto Academy
            </a>
            <div class="navbar-nav ms-auto">
                <a class="nav-link" href="#inicio">Inicio</a>
                <a class="nav-link" href="#estrategia">Estrategia</a>
                <a class="nav-link" href="#temario">Videos</a>
                <a class="nav-link" href="#simuladores">Simuladores</a>
                <a class="nav-link" href="#udemy">Curso Udemy</a>
            </div>
        </div>
    </nav>

    <!-- MATERIAS FIJO - SEPARADO DEL NAVBAR -->
    <div class="materias-fixed">
        <div class="materias-inner">
            <?php foreach($materias as $key => $materia): ?>
                <button class="materia-btn" 
                        data-materia="<?php echo $key; ?>"
                        style="border-color: <?php echo $materia['color']; ?>;">
                    <i class="fas <?php echo $materia['icono']; ?> me-1"></i>
                    <?php echo $materia['nombre']; ?>
                    <span class="badge bg-light text-dark ms-1" style="font-size: 0.6rem;"><?php echo $materia['videos']; ?></span>
                </button>
            <?php endforeach; ?>
        </div>
    </div>

    <!-- CONTENIDO PRINCIPAL -->
    <div class="main-content">
        <!-- HERO -->
        <section id="inicio" class="hero">
            <div class="container">
                <h1>BioReto Academy ECOEMS 2026</h1>
                <p class="lead mb-3">25 Videos + Infografías + NotebookLM + Simuladores</p>
                <div class="d-flex gap-3 justify-content-center flex-wrap">
                    <a href="#temario" class="btn btn-primary btn-custom">
                        <i class="fas fa-play-circle me-1"></i>Ver Videos
                    </a>
                    <a href="#simuladores" class="btn btn-danger btn-custom">
                        <i class="fas fa-gamepad me-1"></i>Simuladores
                    </a>
                    <a href="https://www.udemy.com/course/ecoems2026conia/?referralCode=B2F05026985A2564FAAC" 
                       target="_blank" class="btn btn-success btn-custom">
                        <i class="fas fa-gift me-1"></i>Curso Gratis Udemy
                    </a>
                </div>
            </div>
        </section>

        <!-- ESTRATEGIA -->
        <section id="estrategia" class="container py-4">
            <h2 class="section-title">Estrategia 2026</h2>
            <div class="row">
                <div class="col-lg-6 mb-4">
                    <div class="fase-card" style="border-color: #00bcd4;">
                        <h4 style="color: #00bcd4;">
                            <i class="fas fa-rocket me-2"></i>Fase 1: Contenido
                        </h4>
                        <p class="mb-2">25 videos organizados con infografías y NotebookLM.</p>
                        <div class="progress mb-2" style="height: 15px;">
                            <div class="progress-bar" style="width: 100%; background: #00bcd4; font-size: 0.7rem;">
                                25/25 VIDEOS COMPLETOS
                            </div>
                        </div>
                        <small class="text-muted"><i class="fas fa-check-circle me-1"></i>Disponible ahora</small>
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="fase-card" style="border-color: #ff4081;">
                        <h4 style="color: #ff4081;">
                            <i class="fas fa-sync-alt me-2"></i>Fase 2: Simuladores
                        </h4>
                        <p class="mb-2">Pruebas interactivas en carpeta simuladores/</p>
                        <div class="alert alert-info text-dark mb-0 p-2" style="font-size: 0.8rem;">
                            <i class="fas fa-clock me-1"></i><strong>Disponible:</strong> Ahora
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- VIDEOS TEMARIO -->
        <section id="temario" class="container py-4">
            <h2 class="section-title mb-4">Contenido Educativo</h2>
            
            <div class="videos-container">
                <!-- PRESENTACIÓN (SIEMPRE VISIBLE AL PRINCIPIO) -->
                <div class="video-section active" id="section-presentacion">
                    <h3 class="text-center mb-4" style="color: #00bcd4;">
                        <i class="fas fa-play-circle me-2"></i>Presentación
                    </h3>
                    
                    <?php $video = $videos_organizados['video0']; ?>
                    <div class="video-card">
                        <h4 class="text-center mb-2"><?php echo $video['titulo']; ?></h4>
                        <p class="text-center mb-3"><?php echo $video['descripcion']; ?></p>
                        
                        <div class="video-container mx-auto" style="max-width: 800px;">
                            <iframe src="https://www.youtube.com/embed/<?php echo $video['youtube']; ?>" 
                                    allowfullscreen></iframe>
                        </div>
                        
                        <div class="infografia-container">
                            <a href="video0/infografia.png" target="_blank">
                                <img src="video0/infografia.png" alt="Infografía" class="infografia-img">
                            </a>
                        </div>
                        
                        <div class="text-center mt-3">
                            <a href="video0/infografia.png" class="btn btn-outline-light btn-sm me-2" target="_blank">
                                <i class="fas fa-image me-1"></i>Infografía
                            </a>
                            <a href="video0/presentacion.pdf" class="btn btn-outline-light btn-sm" target="_blank">
                                <i class="fas fa-file-pdf me-1"></i>PDF
                            </a>
                        </div>
                    </div>
                </div>

                <!-- MATERIAS (OCULTAS INICIALMENTE) -->
                <?php foreach($materias as $materia_key => $materia): ?>
                    <div class="video-section" id="section-<?php echo $materia_key; ?>">
                        <h3 class="text-center mb-4" style="color: <?php echo $materia['color']; ?>;">
                            <i class="fas <?php echo $materia['icono']; ?> me-2"></i>
                            <?php echo $materia['nombre']; ?>
                        </h3>
                        
                        <?php 
                        // Filtrar videos por materia
                        $videos_materia = array_filter($videos_organizados, function($v) use ($materia_key) {
                            return $v['materia'] == $materia_key;
                        });
                        
                        foreach($videos_materia as $video_key => $video): ?>
                            <div class="video-card">
                                <div class="d-flex justify-content-between align-items-start mb-2">
                                    <h5 style="color: <?php echo $materia['color']; ?>;">
                                        <?php echo $video['titulo']; ?>
                                    </h5>
                                    <span class="badge" style="background: <?php echo $materia['color']; ?>; font-size: 0.7rem;">
                                        <?php echo strtoupper($video_key); ?>
                                    </span>
                                </div>
                                <p class="mb-3 small"><?php echo $video['descripcion']; ?></p>
                                
                                <div class="contenedor-principal">
                                    <!-- VIDEO -->
                                    <div class="video-container">
                                        <iframe src="https://www.youtube.com/embed/<?php echo $video['youtube']; ?>" 
                                                allowfullscreen></iframe>
                                    </div>
                                    
                                    <!-- NOTEBOOKLM -->
                                    <?php if(!empty($video['notebooklm'])): ?>
                                    <div class="notebooklm-container">
                                        <h6><i class="fas fa-brain me-1"></i>NotebookLM</h6>
                                        <p class="mb-2 small">Asistente de IA para este tema</p>
                                        <a href="<?php echo $video['notebooklm']; ?>" 
                                           class="btn btn-primary btn-sm" 
                                           target="_blank">
                                            <i class="fas fa-external-link-alt me-1"></i>Abrir Notebook
                                        </a>
                                    </div>
                                    <?php endif; ?>
                                </div>
                                
                                <!-- INFOGRAFÍA -->
                                <div class="infografia-container">
                                    <a href="<?php echo $video_key; ?>/infografia.png" target="_blank">
                                        <img src="<?php echo $video_key; ?>/infografia.png" 
                                             alt="Infografía <?php echo $video['titulo']; ?>" 
                                             class="infografia-img">
                                    </a>
                                </div>
                                
                                <!-- RECURSOS -->
                                <div class="text-center mt-3">
                                    <a href="<?php echo $video_key; ?>/infografia.png" 
                                       class="btn btn-outline-light btn-sm me-2" 
                                       target="_blank">
                                        <i class="fas fa-image me-1"></i>Infografía
                                    </a>
                                    <a href="<?php echo $video_key; ?>/presentacion.pdf" 
                                       class="btn btn-outline-light btn-sm me-2" 
                                       target="_blank">
                                        <i class="fas fa-file-pdf me-1"></i>PDF
                                    </a>
                                    <?php if(!empty($video['notebooklm'])): ?>
                                    <a href="<?php echo $video['notebooklm']; ?>" 
                                       class="btn btn-outline-light btn-sm" 
                                       target="_blank">
                                        <i class="fas fa-brain me-1"></i>NotebookLM
                                    </a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>

        <!-- SIMULADORES -->
        <section id="simuladores" class="container py-4">
            <h2 class="section-title">Simuladores Interactivos</h2>
            
            <div class="row mb-5">
                <?php foreach($simuladores as $simulador): ?>
                    <div class="col-lg-6 mb-4">
                        <div class="simulador-card" style="border-color: <?php echo $simulador['color']; ?>;">
                            <div style="color: <?php echo $simulador['color']; ?>; font-size: 2.5rem; margin-bottom: 15px;">
                                <i class="fas <?php echo $simulador['icono']; ?>"></i>
                            </div>
                            <h4 class="mb-3"><?php echo $simulador['titulo']; ?></h4>
                            <p class="mb-3"><?php echo $simulador['descripcion']; ?></p>
                            <a href="<?php echo $simulador['ruta']; ?>" class="btn btn-primary btn-lg">
                                <i class="fas fa-play me-1"></i>Comenzar Simulación
                            </a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            
            <!-- CARACTERÍSTICAS DEL SIMULADOR -->
            <div class="caracteristicas-simulador">
                <h3 class="text-center mb-5" style="color: #00bcd4; font-size: 2rem;">
                    🚀 Características Avanzadas del Simulador
                </h3>
                
                <div class="row">
                    <!-- Característica 1 -->
                    <div class="col-md-4 mb-4">
                        <div class="caracteristica-card">
                            <div style="font-size: 2.5em; margin-bottom: 15px; color: #8e44ad;">🏆</div>
                            <h5 style="color: #fff; margin-bottom: 12px;">Simulación Completa Ecoems</h5>
                            <p style="color: #ccc; line-height: 1.6;">
                                128 preguntas en 3 horas exactas, réplica del examen real UNAM.
                            </p>
                        </div>
                    </div>
                    
                    <!-- Característica 2 -->
                    <div class="col-md-4 mb-4">
                        <div class="caracteristica-card">
                            <div style="font-size: 2.5em; margin-bottom: 15px; color: #3498db;">📚</div>
                            <h5 style="color: #fff; margin-bottom: 12px;">Multi-Guía Inteligente</h5>
                            <p style="color: #ccc; line-height: 1.6;">
                                Combina preguntas de guías 2021-2025 para preparación integral.
                            </p>
                        </div>
                    </div>
                    
                    <!-- Característica 3 -->
                    <div class="col-md-4 mb-4">
                        <div class="caracteristica-card">
                            <div style="font-size: 2.5em; margin-bottom: 15px; color: #2ecc71;">🎛️</div>
                            <h5 style="color: #fff; margin-bottom: 12px;">Filtros Personalizables</h5>
                            <p style="color: #ccc; line-height: 1.6;">
                                Selecciona materias específicas y número de preguntas.
                            </p>
                        </div>
                    </div>
                </div>
                
                <!-- Botón principal -->
                <div class="text-center mt-5">
                    <a href="simuladores/simulador_completo.php" 
                       class="btn btn-danger btn-lg px-5 py-3"
                       style="border-radius: 30px; font-size: 1.1rem;">
                        🚀 EMPEZAR SIMULACIÓN COMPLETA
                    </a>
                </div>
            </div>
        </section>

        <!-- CURSO UDEMY -->
        <section id="udemy" class="container py-4">
            <h2 class="section-title">Curso Udemy Gratuito</h2>
            
            <div class="curso-card">
                <span class="badge bg-success p-2 mb-3" style="font-size: 0.9rem;">
                    <i class="fas fa-crown me-1"></i>ACCESO 100% GRATUITO
                </span>
                <h4 class="mb-3">ECOEMS 2026: Preparación Integral con IA</h4>
                <p class="mb-3">Todo el contenido + material adicional + actualizaciones</p>
                
                <div class="bg-success p-4 rounded mb-3">
                    <div class="text-light text-decoration-line-through">Precio original: $499 MXN</div>
                    <div class="fw-bold text-white fs-4 mb-3">GRATIS PARA ESTUDIANTES</div>
                    <a href="https://www.udemy.com/course/ecoems2026conia/?referralCode=B2F05026985A2564FAAC" 
                       target="_blank" 
                       class="btn btn-light btn-lg">
                        <i class="fas fa-shopping-cart me-2"></i>OBTENER ACCESO GRATIS
                    </a>
                </div>
                <p class="small text-muted mt-2">
                    <i class="fas fa-external-link-alt me-1"></i>Se abrirá en Udemy.com
                </p>
            </div>
        </section>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            console.log('=== BIO RETO ACADEMY - INICIANDO ===');
            
            const materiasBtns = document.querySelectorAll('.materia-btn');
            const videoSections = document.querySelectorAll('.video-section');
            const presentacionSection = document.getElementById('section-presentacion');
            
            console.log('Botones de materia encontrados:', materiasBtns.length);
            console.log('Secciones de video encontradas:', videoSections.length);
            
            // Mostrar solo presentación inicialmente
            videoSections.forEach(section => {
                if(section.id !== 'section-presentacion') {
                    section.style.display = 'none';
                } else {
                    section.classList.add('active');
                }
            });
            
            // Función para mostrar una sección específica
            function mostrarSeccion(materiaId) {
                console.log('Mostrando sección para:', materiaId);
                
                // Ocultar todas las secciones
                videoSections.forEach(section => {
                    section.style.display = 'none';
                    section.classList.remove('active');
                });
                
                // Mostrar la sección correspondiente
                const targetSection = document.getElementById('section-' + materiaId);
                if(targetSection) {
                    targetSection.style.display = 'block';
                    targetSection.classList.add('active');
                    console.log('✅ Sección mostrada:', targetSection.id);
                    
                    // Desplazar suavemente a la sección
                    setTimeout(() => {
                        targetSection.scrollIntoView({ 
                            behavior: 'smooth',
                            block: 'start',
                            inline: 'nearest'
                        });
                    }, 100);
                } else {
                    console.error('❌ Sección no encontrada:', 'section-' + materiaId);
                    // Mostrar presentación como fallback
                    presentacionSection.style.display = 'block';
                    presentacionSection.classList.add('active');
                }
            }
            
            // Click en botones de materia
            materiasBtns.forEach(btn => {
                btn.addEventListener('click', function() {
                    const materia = this.getAttribute('data-materia');
                    console.log('Click en botón de materia:', materia);
                    
                    // Quitar active de todos los botones
                    materiasBtns.forEach(b => b.classList.remove('active'));
                    
                    // Agregar active al botón clickeado
                    this.classList.add('active');
                    
                    // Mostrar la sección correspondiente
                    mostrarSeccion(materia);
                });
            });
            
            // Navegación suave para enlaces del navbar
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function(e) {
                    e.preventDefault();
                    const targetId = this.getAttribute('href');
                    
                    // Si es el enlace a temario, mostrar presentación
                    if(targetId === '#temario') {
                        // Quitar active de todos los botones
                        materiasBtns.forEach(b => b.classList.remove('active'));
                        
                        // Mostrar presentación
                        videoSections.forEach(section => {
                            section.style.display = 'none';
                            section.classList.remove('active');
                        });
                        presentacionSection.style.display = 'block';
                        presentacionSection.classList.add('active');
                    }
                    
                    // Desplazar a la sección
                    const target = document.querySelector(targetId);
                    if(target) {
                        window.scrollTo({
                            top: target.offsetTop - 115, // 60px navbar + 55px materias
                            behavior: 'smooth'
                        });
                    }
                });
            });
            
            // Efecto hover para tarjetas
            const cards = document.querySelectorAll('.caracteristica-card, .simulador-card');
            cards.forEach(card => {
                card.addEventListener('mouseenter', function() {
                    this.style.transform = 'translateY(-10px)';
                });
                card.addEventListener('mouseleave', function() {
                    this.style.transform = 'translateY(0)';
                });
            });
            
            // Verificar que todas las secciones existen
            materiasBtns.forEach(btn => {
                const materia = btn.getAttribute('data-materia');
                const sectionId = 'section-' + materia;
                const section = document.getElementById(sectionId);
                console.log('Verificando:', sectionId, '→', section ? '✅ Existe' : '❌ No existe');
            });
        });
    </script>
</body>
</html>