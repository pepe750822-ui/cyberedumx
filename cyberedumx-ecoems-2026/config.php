<?php
// 📁 CONFIG.PHP - Configuración oficial CyberEduMX - BioReto Academy
// Datos obtenidos del curso oficial: https://cyberedumx.com/curso/ecoems-2026-estrategia-inteligente

return [
    // 🎌 INFORMACIÓN DEL CURSO OFICIAL
    'curso' => [
        'nombre' => 'ECOEMS 2026 Estrategia Inteligente',
        'eslogan' => '¡La aventura anime para aprobar tu examen!',
        'autor' => 'CyberEdu MX & BioReto Academy',
        'anio' => '2026',
        'descripcion' => '91 episodios de entrenamiento intensivo estilo anime para conquistar el ECOEMS 2026.',
        'videos_totales' => 91,
        'infografias_totales' => 57,
        'dias_restantes' => 163,
    ],
    
    // 🔗 ENLACES OFICIALES
    'enlaces' => [
        'udemy' => 'https://www.udemy.com/course/ecoems2026conia/?referrarCode=B2F05026985A2564FAAC',
        'sitio_principal' => 'https://cyberedumx.com',
        'pagina_curso' => 'https://cyberedumx.com/curso/ecoems-2026-estrategia-inteligente',
        'base_url' => 'https://cyberedumx.com/ecoems2026',
        'simulador_completo' => 'https://cyberedumx.com/ecoems2026/simuladores/simulador_completo.php',
        'whatsapp' => 'https://wa.me/5523269241',
        'email' => 'mailto:JoseLuisGlez@cyberedumx.com',
    ],
    
    // 📞 CONTACTO OFICIAL
    'contacto' => [
        'whatsapp_numero' => '55 2326 9241',
        'whatsapp_formateado' => '+52 55 2326 9241',
        'email' => 'JoseLuisGlez@cyberedumx.com',
        'responsable' => 'José Luis González',
        'chatbot_24_7' => 'Disponible en la plataforma oficial',
    ],
    
    // 🎬 ESTRUCTURA DE 91 VIDEOS ANIME
    'videos_anime' => [
        'total' => 91,
        'duracion_promedio' => '5:15 minutos',
        'temas' => [
            'Episodios 1-5' => 'Habilidad Verbal',
            'Episodios 6-10' => 'Habilidad Matemática',
            'Episodios 11-17' => 'Biología',
            'Episodios 18-24' => 'Física',
            'Episodios 25-30' => 'Química',
            'Episodios 31-35' => 'Matemáticas',
            'Episodios 36-40' => 'Español',
            'Episodios 41-45' => 'Historia',
            'Episodios 46-50' => 'Geografía',
            'Episodios 51-55' => 'Formación Cívica',
            'Episodios 56-91' => 'Integración y Simuladores',
        ],
    ],
    
    // 📚 10 MATERIAS CON SUBÍNDICES (Basado en guía oficial)
    'materias' => [
        'habilidad_verbal' => [
            'nombre' => 'Habilidad Verbal',
            'icono' => 'fa-language',
            'color' => '#00f3ff',
            'subindices' => 10,
            'preguntas_totales' => 100,
            'porcentaje_examen' => '9.4%',
            'episodios_anime' => '1-5',
        ],
        'habilidad_matematica' => [
            'nombre' => 'Habilidad Matemática',
            'icono' => 'fa-calculator',
            'color' => '#00ff9d',
            'subindices' => 4,
            'preguntas_totales' => 40,
            'porcentaje_examen' => '8.2%',
            'episodios_anime' => '6-10',
        ],
        'matematicas' => [
            'nombre' => 'Matemáticas',
            'icono' => 'fa-square-root-alt',
            'color' => '#ff003c',
            'subindices' => 21,
            'preguntas_totales' => 210,
            'porcentaje_examen' => '18.5%',
            'episodios_anime' => '31-35',
        ],
        'fisica' => [
            'nombre' => 'Física',
            'icono' => 'fa-atom',
            'color' => '#ff6b00',
            'subindices' => 9,
            'preguntas_totales' => 90,
            'porcentaje_examen' => '9.8%',
            'episodios_anime' => '18-24',
        ],
        'quimica' => [
            'nombre' => 'Química',
            'icono' => 'fa-flask',
            'color' => '#9d00ff',
            'subindices' => 6,
            'preguntas_totales' => 60,
            'porcentaje_examen' => '7.2%',
            'episodios_anime' => '25-30',
        ],
        'biologia' => [
            'nombre' => 'Biología',
            'icono' => 'fa-dna',
            'color' => '#ff00ff',
            'subindices' => 6,
            'preguntas_totales' => 60,
            'porcentaje_examen' => '9.4%',
            'episodios_anime' => '11-17',
        ],
        'espanol' => [
            'nombre' => 'Español',
            'icono' => 'fa-book',
            'color' => '#ffd700',
            'subindices' => 15,
            'preguntas_totales' => 150,
            'porcentaje_examen' => '12.3%',
            'episodios_anime' => '36-40',
        ],
        'historia' => [
            'nombre' => 'Historia',
            'icono' => 'fa-landmark',
            'color' => '#ff6b9d',
            'subindices' => 10,
            'preguntas_totales' => 100,
            'porcentaje_examen' => '10.1%',
            'episodios_anime' => '41-45',
        ],
        'geografia' => [
            'nombre' => 'Geografía',
            'icono' => 'fa-globe-americas',
            'color' => '#00e5ff',
            'subindices' => 7,
            'preguntas_totales' => 70,
            'porcentaje_examen' => '8.7%',
            'episodios_anime' => '46-50',
        ],
        'formacion_civica' => [
            'nombre' => 'Formación Cívica y Ética',
            'icono' => 'fa-balance-scale',
            'color' => '#9dff00',
            'subindices' => 9,
            'preguntas_totales' => 90,
            'porcentaje_examen' => '6.4%',
            'episodios_anime' => '51-55',
        ],
    ],
    
    // 🎯 METADATOS SEO
    'seo' => [
        'titulo' => 'CyberEduMX - ECOEMS 2026 | Sistema de Preparación con 91 Videos Anime',
        'descripcion' => 'Prepara tu examen ECOEMS 2026 con 91 episodios anime, 10 materias organizadas por subíndices, simulador gaming y chatbot 24/7. Curso oficial de CyberEdu MX & BioReto Academy.',
        'keywords' => 'ECOEMS 2026, examen media superior, IPN UNAM, preparación anime, CyberEdu MX, BioReto Academy, simulador examen',
        'autor' => 'CyberEdu MX & BioReto Academy',
        'google_analytics' => 'G-88JWPSS4QL',
    ],
    
    // ⚙️ CONFIGURACIÓN TÉCNICA
    'tecnica' => [
        'version' => '2.0',
        'fecha_actualizacion' => '2025-12-18',
        'youtube_playlist' => 'youtube-playlist-links-PLG1K4pAhMRgJRmanxPmX3AeAMpLS-sXlG-2025-12-18.csv',
        'actualizacion_2026' => 'Abril 2026 - 128 preguntas nuevas',
    ],
];
?>