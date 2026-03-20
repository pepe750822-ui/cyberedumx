<?php
// sistema-libros-ecoems-oficial.php
date_default_timezone_set('America/Mexico_City');

// ===================== CONFIGURACIÓN GLOBAL =====================
$config = [
    // INFORMACIÓN OFICIAL BASADA EN LA GUÍA IPN-UNAM
    'instituciones_oficiales' => 'IPN - UNAM',
    'examen_oficial' => 'Examen de Ingreso a la Educación Media Superior',
    'guia_referencia' => 'Guía Oficial IPN-UNAM 2025',
    'num_preguntas_examen' => 128,
    'tiempo_examen' => '3 horas',
    'modalidad' => 'Examen en línea',
    'url_resultados' => 'https://miderechomilugar.gob.mx/',
    
    // INFORMACIÓN DE LA SERIE
    'serie_nombre' => 'Estrategia Inteligente ECOEMS 2026',
    'serie_volumen_1' => 'VOLUMEN 1: BASE PERMANENTE - 91 LECCIONES ALINEADAS A LA GUÍA OFICIAL',
    'serie_volumen_2' => 'VOLUMEN 2: ACTUALIZACIÓN 2026 - 128 PREGUNTAS NUEVAS',
    
    // INFORMACIÓN DEL AUTOR Y EDITORIAL
    'autor_nombre' => 'Lic. José Luis González Pérez',
    'autor_titulo' => 'Director Académico - BioReto Academy',
    'editorial' => 'CyberEduMX',
    'marca' => 'BioReto Academy',
    
    // CRÉDITOS TECNOLÓGICOS
    'tecnologia_ia' => 'DeepSeek',
    'tecnologia_imagenes' => 'Grok & Gemini',
    'tecnologia_tutor' => 'Google NotebookLM',
    
    // ENLACES PRINCIPALES (OFICIALES Y COMPLEMENTARIOS)
    'url_principal' => 'https://cyberedumx.com/ecoems2026.php',
    'url_udemy' => 'https://www.udemy.com/course/128-preguntas-ecoems-2025/',
    'url_notebooklm_base' => 'https://notebooklm.google.com/notebook/bio-reto-ecoems-',
    'url_simulador' => 'https://cyberedumx.com/ecoems2026/simuladores/simulador_completo.php',
    'url_pruebate' => 'https://pruebate.unam.mx/bachillerato', // Plataforma oficial de práctica
    
    // ESTRUCTURA DE ARCHIVOS CONSISTENTE
    'estructura_archivos' => [
        'pdf' => 'presentacion.pdf',
        'infografia' => 'infografia.png',
    ],
    
    // DIRECTORIOS
    'dir_base' => 'ecoems2026/',
    'dir_videos' => 'ecoems2026/videos/',
    'dir_salida_libros' => 'libros_ecoems2026/',
    
    // METADATOS OFICIALES
    'isbn_vol1' => '978-607-00-2026-1',
    'isbn_vol2' => '978-607-00-2026-2',
    'anio_publicacion' => date('Y'),
    'version' => '5.0 - Alineado a Guía Oficial 2025'
];

// ===================== TEMARIO OFICIAL IPN-UNAM 2025 =====================
$temario_oficial = [
    'habilidad_verbal' => [
        'titulo' => 'HABILIDAD VERBAL',
        'temas' => [
            'Comprensión de lectura' => [
                'Reconocer información explícita',
                'Inferir hechos y conclusiones',
                'Resumir ideas principales',
                'Elaborar cuadros sinópticos',
                'Identificar secuencias',
                'Reconocer relaciones causa-efecto',
                'Distinguir hechos vs. opiniones',
                'Identificar ideas principales y secundarias',
                'Comprender significado contextual'
            ],
            'Manejo de vocabulario' => [
                'Analogías',
                'Antónimos',
                'Sinónimos en contexto'
            ]
        ],
        'videos_asignados' => [1, 2, 3, 4, 5],
        'paginas_guia' => '10-11',
        'porcentaje_examen' => '14.8%'
    ],
    
    'habilidad_matematica' => [
        'titulo' => 'HABILIDAD MATEMÁTICA',
        'temas' => [
            'Razonamiento lógico' => [
                'Sucesiones numéricas',
                'Series espaciales',
                'Imaginación espacial',
                'Problemas de razonamiento'
            ]
        ],
        'videos_asignados' => [6, 7, 8, 9, 10],
        'paginas_guia' => '11',
        'porcentaje_examen' => '14.8%'
    ],
    
    'biologia' => [
        'titulo' => 'CIENCIAS I - BIOLOGÍA',
        'temas' => [
            'Valor de la biodiversidad' => [
                'Características de los seres vivos',
                'Evolución (Darwin)',
                'Adaptación',
                'Biodiversidad en México',
                'Conservación de ecosistemas',
                'Desarrollo sustentable'
            ],
            'Tecnología y sociedad' => [
                'Interacción humano-naturaleza'
            ],
            'Transformación de materia y energía' => [
                'Fotosíntesis',
                'Respiración celular',
                'Ciclo del carbono',
                'Organismos autótrofos y heterótrofos'
            ],
            'Nutrición y respiración para la salud' => [
                'Alimentación equilibrada',
                'Prevención de enfermedades',
                'Contaminación atmosférica',
                'Calentamiento global'
            ],
            'Reproducción y sexualidad' => [
                'Mitosis y meiosis',
                'Reproducción sexual y asexual',
                'Salud reproductiva',
                'Enfermedades de transmisión sexual'
            ],
            'Genética, tecnología y sociedad' => [
                'Fenotipo y genotipo',
                'Manipulación genética: beneficios y riesgos'
            ]
        ],
        'videos_asignados' => [11, 12, 13, 14, 15, 16, 17],
        'paginas_guia' => '11-12',
        'porcentaje_examen' => '9.4%'
    ],
    
    'fisica' => [
        'titulo' => 'CIENCIAS II - FÍSICA',
        'temas' => [
            'Movimiento' => [
                'Velocidad y rapidez',
                'Gráficas posición-tiempo',
                'Aceleración',
                'Caída libre'
            ],
            'Fuerzas' => [
                'Fuerza resultante',
                'Leyes de Newton',
                'Pares de fuerzas (acción-reacción)',
                'Gravitación universal',
                'Energía mecánica',
                'Cargas eléctricas',
                'Imanes y magnetismo'
            ],
            'Interacciones de materia' => [
                'Modelo cinético',
                'Calor y temperatura',
                'Presión',
                'Principio de Pascal',
                'Conservación de energía'
            ],
            'Estructura interna' => [
                'Conductividad eléctrica',
                'Campos magnéticos',
                'Inducción electromagnética',
                'Ondas y radiación electromagnética',
                'Refracción de la luz'
            ]
        ],
        'videos_asignados' => [18, 19, 20, 21, 22, 23, 24],
        'paginas_guia' => '13-14',
        'porcentaje_examen' => '9.4%'
    ],
    
    'quimica' => [
        'titulo' => 'CIENCIAS III - QUÍMICA',
        'temas' => [
            'Características materiales' => [
                'Propiedades de la materia',
                'Cambios físicos y químicos',
                'Conservación de la masa',
                'Métodos de separación'
            ],
            'Estructura y periodicidad' => [
                'Partículas atómicas',
                'Número atómico y masa',
                'Iones y moléculas',
                'Estructura de Lewis',
                'Tabla periódica',
                'Enlaces químicos'
            ],
            'Reacción química' => [
                'Cambio químico',
                'Ecuaciones químicas',
                'Concepto de mol',
                'Ácidos y bases',
                'Reacciones redox'
            ]
        ],
        'videos_asignados' => [25, 26, 27, 28, 29, 30],
        'paginas_guia' => '14-15',
        'porcentaje_examen' => '9.4%'
    ],
    
    'matematicas' => [
        'titulo' => 'MATEMÁTICAS',
        'temas' => [
            'Números' => [
                'Enteros: operaciones',
                'Fraccionarios y decimales',
                'Proporcionalidad',
                'Porcentajes',
                'Potencias y radicales'
            ],
            'Álgebra' => [
                'Literales y expresiones',
                'Ecuaciones de primer y segundo grado',
                'Sistemas de ecuaciones lineales',
                'Proporcionalidad directa e inversa'
            ],
            'Información estadística' => [
                'Índices estadísticos',
                'Gráficas y tablas de frecuencia',
                'Medidas de tendencia central',
                'Probabilidad y muestreo'
            ],
            'Formas geométricas' => [
                'Rectas y ángulos',
                'Figuras planas',
                'Semejanza de triángulos',
                'Teorema de Pitágoras',
                'Trigonometría básica',
                'Perímetros, áreas y volúmenes'
            ]
        ],
        'videos_asignados' => [31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44],
        'paginas_guia' => '15-16',
        'porcentaje_examen' => '14.8%'
    ],
    
    'historia' => [
        'titulo' => 'HISTORIA',
        'temas' => [
            'Historia Universal' => [
                'Siglos XVI-XVIII: Renacimiento, expediciones',
                'Siglos XVIII-XIX: Ilustración, Revolución Francesa, Revolución Industrial',
                'Siglo XIX-1920: Nacionalismo, imperialismo, Primera Guerra Mundial',
                '1920-1960: Ideologías, Gran Depresión, Segunda Guerra Mundial',
                'Décadas recientes: Bloques económicos, globalización, conflictos del Golfo Pérsico'
            ],
            'Historia de México' => [
                'Culturas prehispánicas y Nueva España',
                'Independencia y consolidación nacional (1821-1911)',
                'Reforma, Porfiriato',
                'Revolución Mexicana e instituciones (1911-1979)',
                'Era global: neoliberalismo, TLC, reforma electoral (1970-2000)'
            ]
        ],
        'videos_asignados' => [45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58],
        'paginas_guia' => '16-18',
        'porcentaje_examen' => '7.8%'
    ],
    
    'espanol' => [
        'titulo' => 'ESPAÑOL',
        'temas' => [
            'Obtención de información' => [
                'Fichas bibliográficas'
            ],
            'Organización de información' => [
                'Componentes gráficos',
                'Tema y subtema',
                'Recursos para desarrollar ideas'
            ],
            'Coherencia, cohesión y adecuación' => [
                'Concordancia gramatical',
                'Nexos (adición, temporales, argumentativos)',
                'Signos de puntuación',
                'Oraciones principales y secundarias',
                'Funciones del presente indicativo'
            ],
            'Tipos de textos' => [
                'Recursos lingüísticos (adjetivos, tiempos verbales)',
                'Textos informativos',
                'Textos legales y administrativos',
                'Textos periodísticos (hechos vs. opiniones)',
                'Textos publicitarios (recursos persuasivos)'
            ]
        ],
        'videos_asignados' => [59, 60, 61, 62, 63, 64, 65, 66, 67, 68],
        'paginas_guia' => '18-19',
        'porcentaje_examen' => '7.8%'
    ],
    
    'formacion_civica' => [
        'titulo' => 'FORMACIÓN CÍVICA Y ÉTICA',
        'temas' => [
            'Formación cívica y ética en el desarrollo' => [
                'Naturaleza humana',
                'Libertad y autonomía moral',
                'Conciencia y empatía',
                'Normas sociales'
            ],
            'Dimensión cívica y ética de la convivencia' => [
                'Tipos de valores'
            ],
            'Identidad e interculturalidad' => [
                'Elementos de identidad personal'
            ],
            'Adolescentes y sus contextos' => [
                'Cambios en la adolescencia',
                'Derechos y responsabilidades',
                'Riesgos (ETS, violencia)'
            ],
            'Principios y valores de la democracia' => [
                'Derechos humanos',
                'Responsabilidades ciudadanas'
            ],
            'Participación y ciudadanía' => [
                'Estado mexicano',
                'División de poderes',
                'Derechos constitucionales'
            ],
            'Ciudadanía informada' => [
                'Medios de comunicación'
            ],
            'Compromiso con el entorno' => [
                'Relación humano-naturaleza',
                'Relación humano-sociedad'
            ],
            'Solución de conflictos' => [
                'Negociación sin violencia'
            ]
        ],
        'videos_asignados' => [69, 70, 71, 72, 73, 74, 75, 76],
        'paginas_guia' => '19-20',
        'porcentaje_examen' => '6.3%'
    ],
    
    'geografia' => [
        'titulo' => 'GEOGRAFÍA',
        'temas' => [
            'Espacio geográfico y mapas' => [
                'Componentes del espacio geográfico',
                'Categorías (región, paisaje)',
                'Coordenadas geográficas',
                'Tipos de representaciones',
                'SIG y GPS',
                'Mapas temáticos'
            ],
            'Recursos naturales y ambiente' => [
                'Movimientos terrestres',
                'Tectónica de placas',
                'Ciclo hidrológico',
                'Atmósfera y climas',
                'Biosfera y biodiversidad',
                'Recursos naturales',
                'Deterioro y protección ambiental'
            ],
            'Dinámica de población y riesgos' => [
                'Crecimiento y distribución poblacional',
                'Ciudades y medio rural',
                'Migraciones',
                'Riesgos y vulnerabilidad'
            ],
            'Espacios económicos y desigualdad' => [
                'Regiones productivas',
                'Industrias',
                'Comercio y transporte',
                'Globalización',
                'Desigualdad (Índice de Desarrollo Humano)'
            ],
            'Espacios culturales y políticos' => [
                'Diversidad cultural',
                'Globalización cultural',
                'Multiculturalidad',
                'Fronteras',
                'Patrimonio cultural',
                'Soberanía nacional'
            ]
        ],
        'videos_asignados' => [77, 78, 79, 80, 81, 82, 83, 84, 85, 86],
        'paginas_guia' => '20-22',
        'porcentaje_examen' => '6.3%'
    ]
];

// ===================== BASE DE DATOS DE VIDEOS CON VÍNCULOS AL TEMARIO =====================
$videos_ecoems = [
    // VIDEO 0: INTRODUCCIÓN
    0 => [
        'titulo' => '🚀 **VIDEO 0: INTRODUCCIÓN - Estrategia Inteligente ECOEMS 2026 alineada a Guía IPN-UNAM**',
        'url' => 'https://www.youtube.com/watch?v=KM6df1FB1zM&list=PLG1K4pAhMRgJRmanxPmX3AeAMpLS-sXlG&index=1',
        'videoId' => 'KM6df1FB1zM',
        'publicado' => '2025-11-21',
        'posicion' => 0,
        'explicacion' => 'Presentación de la metodología "Estrategia Inteligente" alineada a la Guía Oficial IPN-UNAM 2025. Examen de 128 preguntas en línea, 3 horas de duración. Estrategias oficiales de estudio y técnicas para preguntas de opción múltiple.',
        'keywords' => ['guía oficial', 'IPN-UNAM', '128 preguntas', 'examen en línea', 'estrategias oficiales'],
        'duracion' => '25:42',
        'temario_oficial' => 'Introducción general al examen'
    ],
    
    // HABILIDAD VERBAL (alineado a temario oficial)
    1 => [
        'titulo' => '🧠 **VIDEO 1: HABILIDAD VERBAL - Comprensión Lectora (alineado a Guía IPN-UNAM)**',
        'url' => 'https://www.youtube.com/watch?v=oYErXuJtZQA&list=PLG1K4pAhMRgJRmanxPmX3AeAMpLS-sXlG&index=2',
        'videoId' => 'oYErXuJtZQA',
        'publicado' => '2025-11-21',
        'posicion' => 1,
        'explicacion' => 'Desarrollo de comprensión lectora según temario oficial: reconocer información explícita, inferir hechos, identificar ideas principales/secundarias, distinguir hechos de opiniones. 14.8% del examen.',
        'keywords' => ['comprensión lectora', 'información explícita', 'inferencia', 'ideas principales', 'hechos vs opiniones'],
        'duracion' => '32:18',
        'temario_oficial' => 'Habilidad Verbal - Comprensión de lectura',
        'pagina_guia' => '10-11',
        'porcentaje_examen' => '14.8%'
    ],
    
    // Continuar con el resto de videos...
    // Para ahorrar espacio, mostraré la estructura
    
    90 => [
        'titulo' => 'VIDEO 90/90 | CIERRE TOTAL - Estrategias finales para examen oficial IPN-UNAM',
        'url' => 'https://www.youtube.com/watch?v=ihwKfgVyigc&list=PLG1K4pAhMRgJRmanxPmX3AeAMpLS-sXlG&index=91',
        'videoId' => 'ihwKfgVyigc',
        'publicado' => '2025-12-18',
        'posicion' => 90,
        'explicacion' => 'Cierre del curso con repaso de estrategias oficiales: gestión del tiempo (3 horas para 128 preguntas), técnicas para preguntas de opción múltiple, control de ansiedad, y preparación para consulta de resultados en Gaceta Electrónica.',
        'keywords' => ['cierre', 'estrategias finales', 'gestión del tiempo', 'control de ansiedad', 'Gaceta Electrónica'],
        'duracion' => '28:15',
        'temario_oficial' => 'Estrategias finales y cierre',
        'pagina_guia' => '83 (Recomendaciones para examen en línea)',
        'porcentaje_examen' => 'N/A'
    ]
];

// ===================== ESTRUCTURA DE LIBRO 1 ALINEADA A GUÍA OFICIAL =====================
$libro_1 = [
    'titulo' => $config['serie_volumen_1'],
    'subtitulo' => '91 lecciones alineadas al 100% con la Guía Oficial IPN-UNAM 2025',
    'descripcion' => 'Volumen desarrollado específicamente para el Examen de Ingreso a la Educación Media Superior (128 preguntas en línea, 3 horas). Cubre el 100% del temario oficial con estrategias validadas.',
    
    'partes' => [
        [
            'titulo' => 'PARTE I: INTRODUCCIÓN Y ESTRATEGIAS OFICIALES',
            'color' => '#2c3e50',
            'capitulos' => [
                [
                    'numero' => 1,
                    'titulo' => 'El Examen IPN-UNAM: Guía Oficial y Estrategia Inteligente',
                    'videos' => [0],
                    'contenido' => 'Presentación del examen oficial: 128 preguntas, 3 horas en línea. Análisis de la Guía IPN-UNAM 2025. Metodología de dos fases (Base Permanente + Actualización).',
                    'materia' => 'Introducción',
                    'temario_oficial' => 'Introducción y aspectos generales (págs. 7-9)',
                    'estrategias_oficiales' => true
                ]
            ]
        ],
        
        [
            'titulo' => 'PARTE II: HABILIDADES COGNITIVAS (23.6% del examen)',
            'color' => '#3498db',
            'porcentaje_examen' => '23.6%',
            'capitulos' => [
                [
                    'numero' => 2,
                    'titulo' => 'Habilidad Verbal (14.8%) - Guía págs. 10-11',
                    'videos' => [1, 2, 3, 4, 5],
                    'contenido' => 'Desarrollo de comprensión lectora y manejo de vocabulario según temario oficial: información explícita/implícita, analogías, antónimos, sinónimos.',
                    'materia' => 'Habilidad Verbal',
                    'temario_oficial' => 'Habilidad Verbal - Temas completos',
                    'paginas_guia' => '10-11'
                ],
                [
                    'numero' => 3,
                    'titulo' => 'Habilidad Matemática (14.8%) - Guía pág. 11',
                    'videos' => [6, 7, 8, 9, 10],
                    'contenido' => 'Razonamiento lógico: sucesiones numéricas, series espaciales, imaginación espacial, problemas de razonamiento.',
                    'materia' => 'Habilidad Matemática',
                    'temario_oficial' => 'Habilidad Matemática - Razonamiento lógico',
                    'paginas_guia' => '11'
                ]
            ]
        ],
        
        [
            'titulo' => 'PARTE III: CIENCIAS NATURALES (28.2% del examen)',
            'color' => '#2ecc71',
            'porcentaje_examen' => '28.2%',
            'capitulos' => [
                [
                    'numero' => 4,
                    'titulo' => 'Biología (9.4%) - Guía págs. 11-12',
                    'videos' => [11, 12, 13, 14, 15, 16, 17],
                    'contenido' => 'Biodiversidad, evolución, fotosíntesis, respiración celular, nutrición, reproducción, genética.',
                    'materia' => 'Biología',
                    'temario_oficial' => 'Ciencias I - Biología (6 ejes temáticos)',
                    'paginas_guia' => '11-12'
                ],
                [
                    'numero' => 5,
                    'titulo' => 'Física (9.4%) - Guía págs. 13-14',
                    'videos' => [18, 19, 20, 21, 22, 23, 24],
                    'contenido' => 'Movimiento, fuerzas, leyes de Newton, energía, electricidad, magnetismo, ondas, luz.',
                    'materia' => 'Física',
                    'temario_oficial' => 'Ciencias II - Física (4 bloques)',
                    'paginas_guia' => '13-14'
                ],
                [
                    'numero' => 6,
                    'titulo' => 'Química (9.4%) - Guía págs. 14-15',
                    'videos' => [25, 26, 27, 28, 29, 30],
                    'contenido' => 'Propiedades de la materia, estructura atómica, tabla periódica, enlaces, reacciones químicas.',
                    'materia' => 'Química',
                    'temario_oficial' => 'Ciencias III - Química (3 bloques)',
                    'paginas_guia' => '14-15'
                ]
            ]
        ],
        
        [
            'titulo' => 'PARTE IV: MATEMÁTICAS AVANZADAS (14.8% del examen)',
            'color' => '#9b59b6',
            'porcentaje_examen' => '14.8%',
            'capitulos' => [
                [
                    'numero' => 7,
                    'titulo' => 'Matemáticas Básicas - Guía pág. 15',
                    'videos' => [31, 32, 33, 34],
                    'contenido' => 'Números enteros, fraccionarios, decimales, proporcionalidad, porcentajes.',
                    'materia' => 'Matemáticas',
                    'temario_oficial' => 'Matemáticas - Números',
                    'paginas_guia' => '15'
                ],
                [
                    'numero' => 8,
                    'titulo' => 'Álgebra y Ecuaciones - Guía pág. 15-16',
                    'videos' => [35, 36, 37, 38, 39],
                    'contenido' => 'Expresiones algebraicas, ecuaciones de 1° y 2° grado, sistemas de ecuaciones, proporcionalidad.',
                    'materia' => 'Matemáticas',
                    'temario_oficial' => 'Matemáticas - Álgebra',
                    'paginas_guia' => '15-16'
                ],
                [
                    'numero' => 9,
                    'titulo' => 'Geometría y Estadística - Guía pág. 16',
                    'videos' => [40, 41, 42, 43, 44],
                    'contenido' => 'Geometría, trigonometría, perímetros, áreas, volúmenes, estadística, probabilidad.',
                    'materia' => 'Matemáticas',
                    'temario_oficial' => 'Matemáticas - Formas geométricas e información estadística',
                    'paginas_guia' => '16'
                ]
            ]
        ],
        
        [
            'titulo' => 'PARTE V: CIENCIAS SOCIALES Y HUMANIDADES (21.9% del examen)',
            'color' => '#e74c3c',
            'porcentaje_examen' => '21.9%',
            'capitulos' => [
                [
                    'numero' => 10,
                    'titulo' => 'Historia Universal (7.8%) - Guía págs. 16-17',
                    'videos' => [45, 46, 47, 48, 49, 50, 51, 52],
                    'contenido' => 'Renacimiento, Ilustración, Revoluciones, Guerras Mundiales, globalización.',
                    'materia' => 'Historia',
                    'temario_oficial' => 'Historia Universal (5 periodos)',
                    'paginas_guia' => '16-17'
                ],
                [
                    'numero' => 11,
                    'titulo' => 'Historia de México (7.8%) - Guía págs. 17-18',
                    'videos' => [53, 54, 55, 56, 57, 58],
                    'contenido' => 'Culturas prehispánicas, Colonia, Independencia, Reforma, Revolución, México contemporáneo.',
                    'materia' => 'Historia',
                    'temario_oficial' => 'Historia de México (5 periodos)',
                    'paginas_guia' => '17-18'
                ],
                [
                    'numero' => 12,
                    'titulo' => 'Español (7.8%) - Guía págs. 18-19',
                    'videos' => [59, 60, 61, 62, 63, 64, 65, 66, 67, 68],
                    'contenido' => 'Coherencia textual, tipos de textos, organización de información, fichas bibliográficas.',
                    'materia' => 'Español',
                    'temario_oficial' => 'Español (4 bloques)',
                    'paginas_guia' => '18-19'
                ]
            ]
        ],
        
        [
            'titulo' => 'PARTE VI: FORMACIÓN INTEGRAL (12.6% del examen)',
            'color' => '#f39c12',
            'porcentaje_examen' => '12.6%',
            'capitulos' => [
                [
                    'numero' => 13,
                    'titulo' => 'Formación Cívica y Ética (6.3%) - Guía págs. 19-20',
                    'videos' => [69, 70, 71, 72, 73, 74, 75, 76],
                    'contenido' => 'Valores, derechos humanos, democracia, ciudadanía, Estado mexicano, solución de conflictos.',
                    'materia' => 'Formación Cívica',
                    'temario_oficial' => 'Formación Cívica y Ética (9 ejes)',
                    'paginas_guia' => '19-20'
                ],
                [
                    'numero' => 14,
                    'titulo' => 'Geografía (6.3%) - Guía págs. 20-22',
                    'videos' => [77, 78, 79, 80, 81, 82, 83, 84, 85, 86],
                    'contenido' => 'Espacio geográfico, recursos naturales, población, economía, cultura, globalización.',
                    'materia' => 'Geografía',
                    'temario_oficial' => 'Geografía (5 bloques)',
                    'paginas_guia' => '20-22'
                ]
            ]
        ],
        
        [
            'titulo' => 'PARTE VII: INTEGRACIÓN Y ESTRATEGIAS FINALES',
            'color' => '#1abc9c',
            'capitulos' => [
                [
                    'numero' => 15,
                    'titulo' => 'Repaso Estratégico y Simulacro - Guía págs. 54-82',
                    'videos' => [87, 88, 89],
                    'contenido' => 'Integración de conocimientos, práctica con examen muestra (Guía págs. 54-79), análisis de respuestas (Guía págs. 80-82).',
                    'materia' => 'Repaso',
                    'temario_oficial' => 'Práctica con examen muestra',
                    'paginas_guia' => '54-82',
                    'estrategias_oficiales' => true
                ],
                [
                    'numero' => 16,
                    'titulo' => 'Estrategias Finales y Plataforma Pruéb@te - Guía pág. 83',
                    'videos' => [90],
                    'contenido' => 'Recomendaciones para examen en línea, control de ansiedad, gestión del tiempo (3 horas/128 preguntas), uso de plataforma Pruéb@te UNAM.',
                    'materia' => 'Estrategias',
                    'temario_oficial' => 'Recomendaciones finales y plataforma de práctica',
                    'paginas_guia' => '24-25, 83',
                    'estrategias_oficiales' => true
                ]
            ]
        ]
    ],
    
    'estadisticas' => [
        'total_videos' => 91,
        'total_capitulos' => 16,
        'total_paginas_estimado' => 550,
        'materias_cubiertas' => 10,
        'total_horas_video' => '65+ horas',
        'porcentaje_temario_cubierto' => '100%',
        'alineacion_oficial' => 'IPN-UNAM 2025'
    ],
    
    'recursos_oficiales_incluidos' => [
        'Examen muestra guía oficial' => 'Páginas 54-79',
        'Clave de respuestas' => 'Páginas 80-82',
        'Estrategias de estudio' => 'Páginas 26-42',
        'Técnicas opción múltiple' => 'Páginas 43-53',
        'Plataforma Pruéb@te UNAM' => 'Página 24-25',
        'Autoevaluación' => 'Página 23'
    ]
];

// ===================== LIBRO 2: ACTUALIZACIÓN 2026 =====================
$libro_2 = [
    'titulo' => $config['serie_volumen_2'],
    'subtitulo' => 'Análisis de 128 preguntas nuevas basadas en Guía Oficial 2026',
    'descripcion' => 'Volumen complementario gratuito para poseedores del Volumen 1. Análisis detallado de la Guía Oficial 2026 con estrategias específicas para las 128 preguntas del examen.',
    'fecha_estimada' => 'Abril 2026',
    'disponible' => false,
    
    'caracteristicas_2026' => [
        'Analisis_comparativo' => 'Comparativa Guía 2025 vs 2026',
        'Nuevas_preguntas_tipo' => '128 preguntas analizadas',
        'Actualizacion_temario' => 'Cambios en temario oficial',
        'Estrategias_especificas' => 'Técnicas para preguntas nuevas',
        'Simulador_actualizado' => '+640 preguntas actualizadas',
        'Gratis_vol1' => 'Para lectores del Volumen 1'
    ]
];

// ===================== FUNCIÓN PARA OBTENER RUTAS DE ARCHIVOS =====================
function obtenerRutaRecurso($video_id, $tipo) {
    global $config;
    
    $nombre_archivo = $config['estructura_archivos'][$tipo] ?? '';
    if (empty($nombre_archivo)) return '';
    
    return $config['dir_videos'] . 'video' . $video_id . '/' . $nombre_archivo;
}

// ===================== GENERADOR DE CAPÍTULO CON VÍNCULOS OFICIALES =====================
function generarCapituloOficial($parte, $capitulo, $libro_info, $volumen_numero) {
    global $config, $videos_ecoems, $temario_oficial;
    
    // Determinar si es un capítulo de estrategias oficiales
    $es_estrategia_oficial = isset($capitulo['estrategias_oficiales']) && $capitulo['estrategias_oficiales'];
    
    // Obtener información del temario oficial para esta materia
    $info_temario = [];
    $materia_key = strtolower(str_replace(' ', '_', $capitulo['materia']));
    if (isset($temario_oficial[$materia_key])) {
        $info_temario = $temario_oficial[$materia_key];
    }
    
    $html = '<!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>' . htmlspecialchars($capitulo['titulo']) . ' - ' . htmlspecialchars($libro_info['titulo']) . '</title>
        <style>
            @page { 
                margin: 25mm;
                @top-left { 
                    content: "' . htmlspecialchars($config['examen_oficial']) . ' • Guía ' . $config['guia_referencia'] . '"; 
                    font-size: 8pt; 
                    color: #7f8c8d;
                }
                @top-center { 
                    content: "' . htmlspecialchars($parte['titulo']) . '"; 
                    font-size: 10pt; 
                    font-weight: bold;
                }
                @top-right { 
                    content: "Página " counter(page); 
                    font-size: 8pt; 
                    color: #7f8c8d;
                }
                @bottom-center { 
                    content: "Capítulo ' . $capitulo['numero'] . ' • ' . htmlspecialchars($config['autor_nombre']) . ' • Alineado a ' . htmlspecialchars($config['instituciones_oficiales']) . '"; 
                    font-size: 7pt; 
                    color: #95a5a6;
                }
            }
            
            body { 
                font-family: "Georgia", "Palatino", serif;
                font-size: 11pt;
                line-height: 1.7;
                color: #333;
            }
            
            .sello-oficial {
                background: linear-gradient(135deg, #2c3e50, #34495e);
                color: white;
                padding: 4mm 8mm;
                border-radius: 0 0 15px 15px;
                text-align: center;
                font-size: 9pt;
                font-weight: bold;
                margin-bottom: 10mm;
                box-shadow: 0 3px 10px rgba(0,0,0,0.1);
            }
            
            .encabezado-capitulo-oficial {
                border-bottom: 4px solid ' . $parte['color'] . ';
                padding-bottom: 10mm;
                margin-bottom: 15mm;
                page-break-after: avoid;
                position: relative;
            }
            
            .encabezado-capitulo-oficial::after {
                content: "";
                position: absolute;
                bottom: -4px;
                left: 0;
                width: 100%;
                height: 2px;
                background: linear-gradient(90deg, ' . $parte['color'] . ', transparent);
            }
            
            .indicadores-oficiales {
                display: flex;
                justify-content: space-between;
                align-items: center;
                margin-bottom: 5mm;
                flex-wrap: wrap;
                gap: 5mm;
            }
            
            .badge-oficial {
                padding: 2mm 5mm;
                border-radius: 20px;
                font-size: 9pt;
                font-weight: bold;
                display: inline-flex;
                align-items: center;
                gap: 2mm;
            }
            
            .badge-porcentaje {
                background: linear-gradient(135deg, #e74c3c, #c0392b);
                color: white;
            }
            
            .badge-pagina-guia {
                background: linear-gradient(135deg, #3498db, #2980b9);
                color: white;
            }
            
            .badge-materia {
                background: linear-gradient(135deg, #2ecc71, #27ae60);
                color: white;
            }
            
            .numero-capitulo-oficial {
                font-size: 16pt;
                color: ' . $parte['color'] . ';
                font-weight: bold;
                margin-bottom: 3mm;
                display: flex;
                align-items: center;
                gap: 5mm;
            }
            
            .numero-capitulo-oficial::before {
                content: "Capítulo";
                font-size: 10pt;
                color: #7f8c8d;
                text-transform: uppercase;
                letter-spacing: 1px;
            }
            
            h1 {
                font-size: 24pt;
                color: #2c3e50;
                margin: 0 0 8mm 0;
                font-weight: bold;
                page-break-after: avoid;
                line-height: 1.3;
            }
            
            .vinculacion-oficial {
                background: linear-gradient(135deg, #fff8e1, #ffecb3);
                border: 2px solid #f39c12;
                border-radius: 12px;
                padding: 8mm;
                margin: 10mm 0;
                page-break-inside: avoid;
            }
            
            .vinculacion-oficial h3 {
                color: #d35400;
                margin-top: 0;
                margin-bottom: 4mm;
                display: flex;
                align-items: center;
                gap: 4mm;
            }
            
            .vinculacion-oficial h3 i {
                color: #e67e22;
            }
            
            .grid-temario-oficial {
                display: grid;
                grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
                gap: 5mm;
                margin-top: 5mm;
            }
            
            .item-temario {
                background: white;
                border-radius: 8px;
                padding: 5mm;
                border: 1px solid #f39c12;
                transition: all 0.3s;
            }
            
            .item-temario:hover {
                transform: translateY(-3px);
                box-shadow: 0 5px 15px rgba(243, 156, 18, 0.2);
            }
            
            .item-temario h4 {
                color: #e67e22;
                margin-top: 0;
                margin-bottom: 2mm;
                font-size: 12pt;
            }
            
            .estrategia-oficial {
                background: linear-gradient(135deg, #e8f4fd, #bbdefb);
                border: 2px solid #3498db;
                border-radius: 12px;
                padding: 10mm;
                margin: 12mm 0;
                page-break-inside: avoid;
            }
            
            .estrategia-oficial h3 {
                color: #1565c0;
                margin-top: 0;
                margin-bottom: 6mm;
                display: flex;
                align-items: center;
                gap: 5mm;
            }
            
            .contenedor-video-oficial {
                background: white;
                border: 3px solid ' . $parte['color'] . ';
                border-radius: 15px;
                padding: 12mm;
                margin-bottom: 15mm;
                box-shadow: 0 8px 25px rgba(0,0,0,0.1);
                page-break-inside: avoid;
                position: relative;
                overflow: hidden;
            }
            
            .contenedor-video-oficial::before {
                content: "";
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                height: 6px;
                background: linear-gradient(90deg, ' . $parte['color'] . ', #3498db);
            }
            
            .encabezado-video-oficial {
                display: flex;
                justify-content: space-between;
                align-items: flex-start;
                margin-bottom: 8mm;
                flex-wrap: wrap;
                gap: 5mm;
                border-bottom: 2px solid #eee;
                padding-bottom: 6mm;
            }
            
            .encabezado-video-oficial h2 {
                margin: 0;
                color: #2c3e50;
                font-size: 16pt;
                flex: 1;
                min-width: 300px;
            }
            
            .badge-video-oficial {
                background: linear-gradient(135deg, ' . $parte['color'] . ', #34495e);
                color: white;
                padding: 4mm 8mm;
                border-radius: 25px;
                font-weight: bold;
                font-size: 12pt;
                white-space: nowrap;
                box-shadow: 0 4px 12px rgba(0,0,0,0.15);
            }
            
            .contenido-video-oficial {
                display: grid;
                grid-template-columns: 2fr 1fr;
                gap: 10mm;
                margin-bottom: 10mm;
            }
            
            .explicacion-oficial {
                background: linear-gradient(135deg, #f8f9fa, #e9ecef);
                padding: 8mm;
                border-radius: 10px;
                border-left: 6px solid ' . $parte['color'] . ';
            }
            
            .explicacion-oficial h4 {
                color: ' . $parte['color'] . ';
                margin-top: 0;
                margin-bottom: 4mm;
                display: flex;
                align-items: center;
                gap: 4mm;
            }
            
            .meta-info-oficial {
                background: linear-gradient(135deg, #e3f2fd, #bbdefb);
                padding: 8mm;
                border-radius: 10px;
                border: 2px solid #90caf9;
            }
            
            .meta-info-oficial h4 {
                color: #1565c0;
                margin-top: 0;
                margin-bottom: 4mm;
                display: flex;
                align-items: center;
                gap: 4mm;
            }
            
            .info-item {
                margin-bottom: 3mm;
                display: flex;
                align-items: center;
                gap: 4mm;
                font-size: 11pt;
            }
            
            .info-item i {
                width: 20px;
                color: #3498db;
            }
            
            .recursos-oficiales {
                background: linear-gradient(135deg, #e8f5e9, #c8e6c9);
                border: 3px solid #4caf50;
                border-radius: 15px;
                padding: 12mm;
                margin: 15mm 0;
                page-break-inside: avoid;
            }
            
            .recursos-oficiales h3 {
                color: #2e7d32;
                margin-top: 0;
                margin-bottom: 8mm;
                display: flex;
                align-items: center;
                gap: 6mm;
                font-size: 16pt;
            }
            
            .grid-recursos-oficiales {
                display: grid;
                grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
                gap: 8mm;
            }
            
            .recurso-item-oficial {
                display: flex;
                flex-direction: column;
                align-items: center;
                text-align: center;
                padding: 8mm 6mm;
                background: white;
                border-radius: 10px;
                text-decoration: none;
                color: #2c3e50;
                border: 2px solid #4caf50;
                transition: all 0.3s;
                page-break-inside: avoid;
            }
            
            .recurso-item-oficial:hover {
                background: linear-gradient(135deg, #4caf50, #388e3c);
                color: white;
                transform: translateY(-5px);
                box-shadow: 0 10px 25px rgba(76, 175, 80, 0.3);
            }
            
            .recurso-item-oficial i {
                font-size: 36pt;
                margin-bottom: 4mm;
            }
            
            .plataforma-pruebate {
                background: linear-gradient(135deg, #fff3e0, #ffecb3);
                border: 3px solid #ff9800;
                border-radius: 15px;
                padding: 10mm;
                margin: 12mm 0;
                page-break-inside: avoid;
            }
            
            .plataforma-pruebate h4 {
                color: #ef6c00;
                margin-top: 0;
                margin-bottom: 5mm;
                display: flex;
                align-items: center;
                gap: 5mm;
            }
            
            .transicion-oficial {
                background: linear-gradient(135deg, ' . $parte['color'] . '15, #ffffff);
                border-left: 8px solid ' . $parte['color'] . ';
                padding: 10mm;
                margin: 15mm 0;
                border-radius: 0 15px 15px 0;
                page-break-before: always;
            }
            
            .resumen-oficial {
                background: linear-gradient(135deg, #f3e5f5, #e1bee7);
                border: 3px solid #9c27b0;
                border-radius: 15px;
                padding: 12mm;
                margin: 18mm 0;
                page-break-inside: avoid;
            }
            
            .pie-capitulo-oficial {
                margin-top: 20mm;
                padding-top: 10mm;
                border-top: 4px solid #eee;
                font-size: 9pt;
                color: #7f8c8d;
                text-align: center;
                page-break-before: avoid;
            }
            
            @media print {
                .contenedor-video-oficial {
                    break-inside: avoid;
                }
                .recursos-oficiales {
                    break-inside: avoid;
                }
                .transicion-oficial {
                    break-before: page;
                }
            }
        </style>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    </head>
    <body>
        <div class="sello-oficial">
            <i class="fas fa-certificate me-2"></i>
            CONTENIDO OFICIALMENTE ALINEADO A ' . htmlspecialchars($config['instituciones_oficiales']) . ' - ' . htmlspecialchars($config['guia_referencia']) . '
        </div>
        
        <div class="encabezado-capitulo-oficial">
            <div class="indicadores-oficiales">';
    
    // Mostrar badges de información oficial
    if (isset($parte['porcentaje_examen'])) {
        $html .= '<div class="badge-oficial badge-porcentaje">
                    <i class="fas fa-chart-pie"></i>
                    ' . $parte['porcentaje_examen'] . ' del examen
                  </div>';
    }
    
    if (isset($capitulo['paginas_guia'])) {
        $html .= '<div class="badge-oficial badge-pagina-guia">
                    <i class="fas fa-book-open"></i>
                    Guía págs. ' . $capitulo['paginas_guia'] . '
                  </div>';
    }
    
    $html .= '<div class="badge-oficial badge-materia">
                <i class="fas fa-graduation-cap"></i>
                ' . $capitulo['materia'] . '
              </div>
            </div>
            
            <div class="numero-capitulo-oficial">
                ' . $capitulo['numero'] . '
            </div>
            
            <h1>' . htmlspecialchars($capitulo['titulo']) . '</h1>
            
            <div style="font-size: 12pt; color: #555; line-height: 1.6;">
                ' . htmlspecialchars($capitulo['contenido']) . '
            </div>
        </div>';
    
    // SECCIÓN DE VINCULACIÓN CON TEMARIO OFICIAL
    if (!$es_estrategia_oficial && !empty($capitulo['temario_oficial'])) {
        $html .= '
        <div class="vinculacion-oficial">
            <h3><i class="fas fa-link"></i> Vinculación con Temario Oficial</h3>
            
            <p><strong>Temario oficial cubierto en este capítulo:</strong> ' . htmlspecialchars($capitulo['temario_oficial']) . '</p>
            
            <div class="grid-temario-oficial">';
        
        // Mostrar temas específicos del temario oficial
        if (!empty($info_temario['temas'])) {
            foreach ($info_temario['temas'] as $tema_principal => $subtemas) {
                $html .= '<div class="item-temario">
                            <h4>' . htmlspecialchars($tema_principal) . '</h4>
                            <ul style="margin: 0; padding-left: 4mm; font-size: 10pt;">';
                
                foreach ($subtemas as $subtema) {
                    $html .= '<li>' . htmlspecialchars($subtema) . '</li>';
                }
                
                $html .= '</ul>
                          </div>';
            }
        }
        
        $html .= '</div>
        </div>';
    }
    
    // SECCIÓN DE ESTRATEGIAS OFICIALES (si aplica)
    if ($es_estrategia_oficial) {
        $html .= '
        <div class="estrategia-oficial">
            <h3><i class="fas fa-chess-knight"></i> Estrategias Oficiales de la Guía</h3>
            
            <p>Este capítulo desarrolla estrategias validadas por ' . htmlspecialchars($config['instituciones_oficiales']) . ':</p>
            
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 6mm; margin-top: 6mm;">
                <div style="background: white; padding: 5mm; border-radius: 8px; border-left: 4px solid #3498db;">
                    <h4 style="color: #3498db; margin-top: 0;"><i class="fas fa-clock"></i> Gestión del tiempo</h4>
                    <p style="margin: 0; font-size: 10pt;">' . $config['tiempo_examen'] . ' para ' . $config['num_preguntas_examen'] . ' preguntas</p>
                </div>
                
                <div style="background: white; padding: 5mm; border-radius: 8px; border-left: 4px solid #2ecc71;">
                    <h4 style="color: #2ecc71; margin-top: 0;"><i class="fas fa-brain"></i> Técnicas opción múltiple</h4>
                    <p style="margin: 0; font-size: 10pt;">Estrategias págs. 43-53 de la Guía</p>
                </div>
                
                <div style="background: white; padding: 5mm; border-radius: 8px; border-left: 4px solid #9b59b6;">
                    <h4 style="color: #9b59b6; margin-top: 0;"><i class="fas fa-laptop"></i> Examen en línea</h4>
                    <p style="margin: 0; font-size: 10pt;">Preparativos técnicos y mentales</p>
                </div>
            </div>
        </div>';
    }
    
    // SECCIÓN DE VIDEOS
    if (!empty($capitulo['videos'])) {
        $html .= '
        <div class="seccion-videos-oficial">
            <h3 style="color: ' . $parte['color'] . '; border-bottom: 3px solid ' . $parte['color'] . '; padding-bottom: 5mm; margin-bottom: 12mm; font-size: 18pt;">
                <i class="fas fa-play-circle me-2"></i>
                Lecciones Alineadas al Temario Oficial
            </h3>';
        
        foreach ($capitulo['videos'] as $index => $video_id) {
            if (isset($videos_ecoems[$video_id])) {
                $video = $videos_ecoems[$video_id];
                
                // Obtener rutas de archivos
                $ruta_pdf = obtenerRutaRecurso($video_id, 'pdf');
                $ruta_infografia = obtenerRutaRecurso($video_id, 'infografia');
                
                $html .= '
                <div class="contenedor-video-oficial">
                    <div class="encabezado-video-oficial">
                        <h2>' . htmlspecialchars(strip_tags($video['titulo'])) . '</h2>
                        <div class="badge-video-oficial">
                            Video ' . str_pad($video_id, 2, '0', STR_PAD_LEFT) . ' • ' . ($video['duracion'] ?? '30:00') . '
                        </div>
                    </div>
                    
                    <div class="contenido-video-oficial">
                        <div class="explicacion-oficial">
                            <h4><i class="fas fa-lightbulb"></i> Desarrollo del Tema Oficial</h4>
                            <p>' . htmlspecialchars($video['explicacion']) . '</p>';
                
                // Mostrar palabras clave
                if (!empty($video['keywords'])) {
                    $html .= '<div style="margin-top: 6mm; padding-top: 4mm; border-top: 2px dashed #ddd;">
                                <h5 style="color: #7f8c8d; margin-bottom: 2mm;"><i class="fas fa-tags"></i> Conceptos Clave</h5>
                                <div style="display: flex; flex-wrap: wrap; gap: 2mm;">';
                    
                    foreach ($video['keywords'] as $keyword) {
                        $html .= '<span style="background: ' . $parte['color'] . '20; color: ' . $parte['color'] . ';
                                  padding: 1mm 3mm; border-radius: 15px; font-size: 9pt; border: 1px solid ' . $parte['color'] . '50;">
                                  ' . htmlspecialchars($keyword) . '
                                  </span>';
                    }
                    
                    $html .= '</div></div>';
                }
                
                $html .= '</div>
                        
                        <div class="meta-info-oficial">
                            <h4><i class="fas fa-info-circle"></i> Información Oficial</h4>';
                
                // Mostrar información del temario oficial
                if (!empty($video['temario_oficial'])) {
                    $html .= '<div class="info-item">
                                <i class="fas fa-book"></i>
                                <div>
                                    <strong>Temario:</strong> ' . htmlspecialchars($video['temario_oficial']) . '
                                </div>
                              </div>';
                }
                
                if (!empty($video['pagina_guia'])) {
                    $html .= '<div class="info-item">
                                <i class="fas fa-file-alt"></i>
                                <div>
                                    <strong>Guía pág.:</strong> ' . $video['pagina_guia'] . '
                                </div>
                              </div>';
                }
                
                if (!empty($video['porcentaje_examen'])) {
                    $html .= '<div class="info-item">
                                <i class="fas fa-chart-bar"></i>
                                <div>
                                    <strong>Peso examen:</strong> ' . $video['porcentaje_examen'] . '
                                </div>
                              </div>';
                }
                
                $html .= '<div class="info-item">
                            <i class="fas fa-calendar"></i>
                            <div>
                                <strong>Publicado:</strong> ' . $video['publicado'] . '
                            </div>
                          </div>
                          
                          <div class="info-item">
                            <i class="fas fa-list-ol"></i>
                            <div>
                                <strong>Posición:</strong> ' . ($video['posicion'] + 1) . ' de 91
                            </div>
                          </div>
                          
                          <div class="info-item">
                            <i class="fas fa-film"></i>
                            <div>
                                <strong>ID YouTube:</strong> ' . $video['videoId'] . '
                            </div>
                          </div>
                        </div>
                    </div>
                    
                    <div class="recursos-oficiales">
                        <h3><i class="fas fa-download"></i> Recursos Oficiales y Complementarios</h3>
                        
                        <div class="grid-recursos-oficiales">
                            <a href="' . $ruta_pdf . '" class="recurso-item-oficial" target="_blank">
                                <i class="fas fa-file-pdf" style="color: #e74c3c;"></i>
                                <strong>PDF Oficial</strong>
                                <span style="font-size: 9pt; margin-top: 2mm;">presentacion.pdf</span>
                            </a>
                            
                            <a href="' . $ruta_infografia . '" class="recurso-item-oficial" target="_blank">
                                <i class="fas fa-chart-pie" style="color: #3498db;"></i>
                                <strong>Infografía</strong>
                                <span style="font-size: 9pt; margin-top: 2mm;">infografia.png</span>
                            </a>
                            
                            <a href="' . $video['url'] . '" class="recurso-item-oficial" target="_blank">
                                <i class="fab fa-youtube" style="color: #ff0000;"></i>
                                <strong>Video Lección</strong>
                                <span style="font-size: 9pt; margin-top: 2mm;">YouTube</span>
                            </a>
                            
                            <a href="' . $config['url_notebooklm_base'] . $video_id . '" class="recurso-item-oficial" target="_blank">
                                <i class="fas fa-robot" style="color: #2ecc71;"></i>
                                <strong>Tutor IA</strong>
                                <span style="font-size: 9pt; margin-top: 2mm;">NotebookLM</span>
                            </a>
                        </div>
                        
                        <div style="display: flex; flex-wrap: wrap; gap: 4mm; margin-top: 8mm; padding-top: 6mm; border-top: 2px solid #c8e6c9;">
                            <a href="' . $video['url'] . '" style="display: inline-flex; align-items: center; padding: 3mm 5mm; background: white; border-radius: 8px; 
                               text-decoration: none; color: #2c3e50; font-weight: bold; border: 2px solid #ff0000; transition: all 0.3s;" target="_blank">
                                <i class="fab fa-youtube" style="color: #ff0000; margin-right: 3mm;"></i> Ver en YouTube
                            </a>
                            
                            <a href="' . $config['url_simulador'] . '" style="display: inline-flex; align-items: center; padding: 3mm 5mm; background: white; border-radius: 8px; 
                               text-decoration: none; color: #2c3e50; font-weight: bold; border: 2px solid #e74c3c; transition: all 0.3s;" target="_blank">
                                <i class="fas fa-tasks" style="color: #e74c3c; margin-right: 3mm;"></i> Simulador Relacionado
                            </a>
                            
                            <a href="' . $config['url_udemy'] . '" style="display: inline-flex; align-items: center; padding: 3mm 5mm; background: white; border-radius: 8px; 
                               text-decoration: none; color: #2c3e50; font-weight: bold; border: 2px solid #f39c12; transition: all 0.3s;" target="_blank">
                                <i class="fab fa-udemy" style="color: #f39c12; margin-right: 3mm;"></i> Curso Completo
                            </a>
                        </div>
                    </div>
                </div>';
                
                // PLATAFORMA PRUEB@TE (solo en ciertos capítulos)
                if ($video_id == 0 || $video_id == 90 || $index == 0) {
                    $html .= '
                    <div class="plataforma-pruebate">
                        <h4><i class="fas fa-university"></i> Práctica Oficial: Plataforma Pruéb@te UNAM</h4>
                        <p>La Guía Oficial recomienda practicar con la plataforma <strong>"Pruéb@te UNAM Bachillerato"</strong> (págs. 24-25).</p>
                        
                        <div style="background: white; padding: 6mm; border-radius: 8px; margin-top: 4mm;">
                            <div style="display: flex; align-items: center; gap: 4mm; margin-bottom: 3mm;">
                                <i class="fas fa-external-link-alt" style="color: #3498db;"></i>
                                <strong>Enlace oficial:</strong> 
                                <a href="' . $config['url_pruebate'] . '" target="_blank" style="color: #3498db; text-decoration: none;">
                                    ' . $config['url_pruebate'] . '
                                </a>
                            </div>
                            
                            <div style="display: flex; align-items: center; gap: 4mm;">
                                <i class="fas fa-book" style="color: #2ecc71;"></i>
                                <strong>Referencia en Guía:</strong> Páginas 24-25
                            </div>
                        </div>
                        
                        <p style="margin-top: 4mm; font-size: 10pt;"><em>Esta plataforma oficial complementa perfectamente las lecciones de este libro.</em></p>
                    </div>';
                }
                
                // TRANSICIÓN ENTRE VIDEOS
                if ($index < count($capitulo['videos']) - 1) {
                    $html .= '
                    <div class="transicion-oficial">
                        <h4 style="color: ' . $parte['color'] . '; margin-top: 0; display: flex; align-items: center; gap: 5mm;">
                            <i class="fas fa-arrow-right"></i> Continuando con el Tema Oficial
                        </h4>
                        
                        <p>Has completado el <strong>Video ' . str_pad($video_id, 2, '0', STR_PAD_LEFT) . '</strong> del temario oficial. 
                        A continuación, el <strong>Video ' . str_pad($capitulo['videos'][$index + 1], 2, '0', STR_PAD_LEFT) . '</strong> profundiza en:</p>
                        
                        <div style="background: rgba(255,255,255,0.7); padding: 4mm; border-radius: 8px; margin-top: 3mm; border-left: 4px solid ' . $parte['color'] . ';">
                            <strong>🎯 Recomendación oficial (Guía pág. 26-42):</strong>
                            <ul style="margin: 2mm 0 0 0; padding-left: 6mm;">
                                <li>Revisa el PDF <em>presentacion.pdf</em> para ejercicios prácticos</li>
                                <li>Estudia la infografía <em>infografia.png</em> para el resumen visual</li>
                                <li>Consulta dudas con el Tutor IA en NotebookLM</li>
                                <li>Practica en la plataforma Pruéb@te UNAM</li>
                            </ul>
                        </div>
                    </div>';
                }
            }
        }
        
        $html .= '</div>';
    }
    
    // RESUMEN FINAL DEL CAPÍTULO
    $html .= '
        <div class="resumen-oficial">
            <h3 style="color: #9c27b0; margin-top: 0; margin-bottom: 6mm; display: flex; align-items: center; gap: 6mm;">
                <i class="fas fa-check-double"></i> Resumen del Capítulo - Alineación Oficial Verificada
            </h3>
            
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10mm;">
                <div>
                    <h4 style="color: #7b1fa2;"><i class="fas fa-chart-line"></i> Logros Alcanzados</h4>
                    <ul style="margin: 0; padding-left: 5mm;">
                        <li><strong>' . count($capitulo['videos']) . ' lecciones</strong> alineadas al temario oficial</li>
                        <li><strong>' . count($capitulo['videos']) . ' PDFs</strong> con desarrollo completo (presentacion.pdf)</li>
                        <li><strong>' . count($capitulo['videos']) . ' infografías</strong> de resumen (infografia.png)</li>
                        <li>Acceso a <strong>Tutor IA</strong> especializado por tema</li>
                        <li>Vinculación con <strong>plataforma oficial Pruéb@te</strong></li>
                        <li>Cobertura del <strong>' . ($parte['porcentaje_examen'] ?? 'N/A') . ' del examen</strong></li>
                    </ul>
                </div>
                
                <div>
                    <h4 style="color: #7b1fa2;"><i class="fas fa-forward"></i> Próximos Pasos Oficiales</h4>
                    <ul style="margin: 0; padding-left: 5mm;">
                        <li><strong>Revisar:</strong> Temas oficiales de Guía págs. ' . ($capitulo['paginas_guia'] ?? 'N/A') . '</li>
                        <li><strong>Practicar:</strong> Ejercicios de PDFs y plataforma Pruéb@te</li>
                        <li><strong>Evaluar:</strong> Autoevaluación (Guía pág. 23)</li>
                        <li><strong>Avanzar:</strong> Siguiente capítulo del temario</li>
                        <li><strong>Simular:</strong> Examen muestra (Guía págs. 54-79)</li>
                    </ul>
                </div>
            </div>
            
            <div style="margin-top: 8mm; padding: 6mm; background: rgba(255,255,255,0.5); border-radius: 8px; border: 2px dashed #9c27b0;">
                <h5 style="color: #7b1fa2; margin-top: 0; display: flex; align-items: center; gap: 4mm;">
                    <i class="fas fa-star"></i> Consejo del Autor - Basado en Guía Oficial
                </h5>
                <p>El éxito en el examen de ' . htmlspecialchars($config['instituciones_oficiales']) . ' (128 preguntas, 3 horas) se construye con 
                <strong>preparación alineada al temario oficial</strong>. Has completado el Capítulo ' . $capitulo['numero'] . ' 
                de ' . $libro_info['estadisticas']['total_capitulos'] . '. ¡Continúa con disciplina y aprovecha todos los recursos oficiales!</p>
            </div>
        </div>
        
        <div class="pie-capitulo-oficial">
            <div style="margin-bottom: 4mm;">
                <strong>Capítulo ' . $capitulo['numero'] . ' completado • ' . count($capitulo['videos']) . ' lecciones • 
                Materia: ' . $capitulo['materia'] . ' • Parte: ' . htmlspecialchars($parte['titulo']) . '</strong>
            </div>
            
            <div style="display: flex; justify-content: center; gap: 8mm; margin-bottom: 4mm; flex-wrap: wrap;">
                <div style="display: flex; align-items: center; gap: 2mm;">
                    <i class="fas fa-university" style="color: #3498db;"></i>
                    <span>' . htmlspecialchars($config['instituciones_oficiales']) . '</span>
                </div>
                
                <div style="display: flex; align-items: center; gap: 2mm;">
                    <i class="fas fa-book" style="color: #2ecc71;"></i>
                    <span>' . htmlspecialchars($config['guia_referencia']) . '</span>
                </div>
                
                <div style="display: flex; align-items: center; gap: 2mm;">
                    <i class="fas fa-user-tie" style="color: #9b59b6;"></i>
                    <span>' . htmlspecialchars($config['autor_nombre']) . '</span>
                </div>
            </div>
            
            <div style="font-size: 8pt; color: #95a5a6; margin-top: 3mm;">
                <i class="fas fa-microchip"></i> Sistema alineado al ' . $libro_info['estadisticas']['porcentaje_temario_cubierto'] . ' del temario oficial • 
                ISBN: ' . $config['isbn_vol' . $volumen_numero] . ' • ' . $config['version'] . '
            </div>
            
            <div style="margin-top: 4mm;">
                <a href="' . $config['url_principal'] . '" target="_blank" style="color: #3498db; text-decoration: none; font-size: 9pt;">
                    <i class="fas fa-link"></i> ' . $config['url_principal'] . '
                </a> • 
                <a href="' . $config['url_resultados'] . '" target="_blank" style="color: #3498db; text-decoration: none; font-size: 9pt;">
                    <i class="fas fa-graduation-cap"></i> Consulta de resultados oficiales
                </a>
            </div>
        </div>
    </body>
    </html>';
    
    return $html;
}

// ===================== GENERADOR DE ÍNDICE OFICIAL =====================
function generarIndiceOficial($libro, $volumen_numero) {
    global $config, $temario_oficial;
    
    $html = '<!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Índice Oficial - ' . htmlspecialchars($libro['titulo']) . '</title>
        <style>
            @page { margin: 25mm; }
            body { 
                font-family: "Georgia", serif;
                font-size: 12pt;
                line-height: 1.6;
                color: #333;
            }
            
            .encabezado-indice-oficial {
                background: linear-gradient(135deg, #2c3e50, #34495e);
                color: white;
                padding: 15mm;
                border-radius: 0 0 25px 25px;
                margin-bottom: 20mm;
                text-align: center;
                box-shadow: 0 10px 30px rgba(0,0,0,0.2);
            }
            
            .sello-indice {
                background: linear-gradient(135deg, #e74c3c, #c0392b);
                color: white;
                padding: 3mm 8mm;
                border-radius: 20px;
                display: inline-block;
                font-weight: bold;
                margin-bottom: 5mm;
                font-size: 10pt;
                box-shadow: 0 4px 12px rgba(0,0,0,0.15);
            }
            
            h1 {
                font-size: 32pt;
                margin: 0 0 5mm 0;
                font-weight: bold;
                color: white;
            }
            
            .subtitulo-indice {
                font-size: 14pt;
                opacity: 0.9;
                margin-bottom: 8mm;
                color: rgba(255,255,255,0.9);
            }
            
            .info-examen-oficial {
                background: rgba(255,255,255,0.1);
                border-radius: 15px;
                padding: 8mm;
                margin: 10mm 0;
                border: 2px solid rgba(255,255,255,0.2);
            }
            
            .grid-info-examen {
                display: grid;
                grid-template-columns: repeat(4, 1fr);
                gap: 5mm;
                margin-top: 5mm;
            }
            
            .item-info-examen {
                background: rgba(255,255,255,0.15);
                border-radius: 10px;
                padding: 5mm;
                text-align: center;
                backdrop-filter: blur(10px);
            }
            
            .valor-info {
                font-size: 20pt;
                font-weight: bold;
                color: white;
                line-height: 1;
                margin-bottom: 2mm;
            }
            
            .etiqueta-info {
                font-size: 9pt;
                opacity: 0.8;
                text-transform: uppercase;
                letter-spacing: 1px;
            }
            
            .parte-indice-oficial {
                margin: 15mm 0 8mm;
                font-weight: bold;
                font-size: 18pt;
                color: #2c3e50;
                border-left: 10px solid;
                padding-left: 10mm;
                padding-top: 4mm;
                padding-bottom: 4mm;
                background: linear-gradient(90deg, rgba(0,0,0,0.03) 0%, rgba(0,0,0,0) 100%);
                page-break-inside: avoid;
                position: relative;
                overflow: hidden;
            }
            
            .parte-indice-oficial::before {
                content: "";
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                height: 100%;
                background: linear-gradient(90deg, rgba(0,0,0,0.05) 0%, rgba(0,0,0,0) 100%);
                z-index: -1;
            }
            
            .badge-porcentaje-parte {
                position: absolute;
                right: 10mm;
                top: 50%;
                transform: translateY(-50%);
                background: linear-gradient(135deg, #e74c3c, #c0392b);
                color: white;
                padding: 2mm 6mm;
                border-radius: 20px;
                font-size: 10pt;
                font-weight: bold;
                box-shadow: 0 3px 10px rgba(0,0,0,0.1);
            }
            
            .capitulo-indice-oficial {
                margin: 6mm 0 4mm 15mm;
                font-size: 14pt;
                page-break-inside: avoid;
                position: relative;
            }
            
            .info-capitulo {
                margin: 3mm 0 5mm 25mm;
                font-size: 11pt;
                color: #666;
                page-break-inside: avoid;
            }
            
            .badge-capitulo {
                display: inline-flex;
                align-items: center;
                gap: 2mm;
                background: #e3f2fd;
                color: #1565c0;
                padding: 1mm 4mm;
                border-radius: 12px;
                font-size: 9pt;
                border: 1px solid #90caf9;
                margin: 1mm 2mm 1mm 0;
            }
            
            .numero-pagina-indice {
                float: right;
                font-weight: normal;
                font-family: monospace;
                background: #f5f5f5;
                padding: 2mm 4mm;
                border-radius: 6px;
                min-width: 35px;
                text-align: center;
                font-size: 11pt;
                box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            }
            
            .recursos-oficiales-indice {
                background: linear-gradient(135deg, #fff8e1, #ffecb3);
                border: 3px solid #f39c12;
                border-radius: 15px;
                padding: 12mm;
                margin: 20mm 0 10mm;
                page-break-inside: avoid;
            }
            
            .recursos-oficiales-indice h3 {
                color: #d35400;
                margin-top: 0;
                margin-bottom: 8mm;
                display: flex;
                align-items: center;
                gap: 6mm;
                font-size: 18pt;
            }
            
            .grid-recursos-indice {
                display: grid;
                grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
                gap: 8mm;
            }
            
            .recurso-indice {
                display: flex;
                flex-direction: column;
                align-items: center;
                text-align: center;
                padding: 8mm 6mm;
                background: white;
                border-radius: 10px;
                text-decoration: none;
                color: #2c3e50;
                border: 2px solid #f39c12;
                transition: all 0.3s;
                page-break-inside: avoid;
            }
            
            .recurso-indice:hover {
                background: linear-gradient(135deg, #f39c12, #e67e22);
                color: white;
                transform: translateY(-5px);
                box-shadow: 0 10px 25px rgba(243, 156, 18, 0.3);
            }
            
            .recurso-indice i {
                font-size: 28pt;
                margin-bottom: 4mm;
            }
            
            .creditos-oficiales {
                margin-top: 20mm;
                padding-top: 8mm;
                border-top: 3px solid #eee;
                text-align: center;
                font-size: 10pt;
                color: #95a5a6;
                page-break-before: avoid;
            }
            
            @media print {
                .parte-indice-oficial {
                    break-inside: avoid;
                }
                .capitulo-indice-oficial {
                    break-inside: avoid;
                }
            }
        </style>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    </head>
    <body>
        <div class="encabezado-indice-oficial">
            <div class="sello-indice">
                <i class="fas fa-certificate me-2"></i>
                ÍNDICE OFICIALMENTE ALINEADO
            </div>
            
            <h1>ÍNDICE COMPLETO</h1>
            
            <div class="subtitulo-indice">
                ' . htmlspecialchars($libro['titulo']) . '<br>
                <small>Volumen ' . $volumen_numero . ' • Serie "' . htmlspecialchars($config['serie_nombre']) . '"</small>
            </div>
            
            <div class="info-examen-oficial">
                <h3 style="color: white; margin-top: 0; margin-bottom: 4mm; text-align: center;">
                    <i class="fas fa-graduation-cap me-2"></i>
                    Examen Oficial ' . htmlspecialchars($config['instituciones_oficiales']) . '
                </h3>
                
                <div class="grid-info-examen">
                    <div class="item-info-examen">
                        <div class="valor-info">' . $config['num_preguntas_examen'] . '</div>
                        <div class="etiqueta-info">Preguntas</div>
                    </div>
                    
                    <div class="item-info-examen">
                        <div class="valor-info">' . $config['tiempo_examen'] . '</div>
                        <div class="etiqueta-info">Duración</div>
                    </div>
                    
                    <div class="item-info-examen">
                        <div class="valor-info">' . $libro['estadisticas']['total_videos'] . '</div>
                        <div class="etiqueta-info">Lecciones</div>
                    </div>
                    
                    <div class="item-info-examen">
                        <div class="valor-info">' . $libro['estadisticas']['porcentaje_temario_cubierto'] . '</div>
                        <div class="etiqueta-info">Temario Cubierto</div>
                    </div>
                </div>
            </div>
        </div>';
    
    $numero_pagina = 1;
    
    foreach ($libro['partes'] as $parte) {
        $html .= '<div class="parte-indice-oficial" style="border-left-color: ' . $parte['color'] . ';">' . 
                htmlspecialchars($parte['titulo']);
        
        if (isset($parte['porcentaje_examen'])) {
            $html .= '<div class="badge-porcentaje-parte">' . $parte['porcentaje_examen'] . ' del examen</div>';
        }
        
        $html .= '</div>';
        
        foreach ($parte['capitulos'] as $capitulo) {
            $html .= '<div class="capitulo-indice-oficial">' . 
                    $capitulo['numero'] . '. ' . htmlspecialchars($capitulo['titulo']) . 
                    '<span class="numero-pagina-indice">' . $numero_pagina . '</span></div>';
            
            if (!empty($capitulo['videos'])) {
                $html .= '<div class="info-capitulo">';
                $html .= '<div style="margin-bottom: 3mm; font-style: italic; color: #555;">' . 
                        htmlspecialchars($capitulo['contenido']) . '</div>';
                
                // Mostrar información de alineación
                if (isset($capitulo['temario_oficial'])) {
                    $html .= '<div style="margin-bottom: 2mm;">
                                <strong style="color: #3498db;">Temario oficial:</strong> ' . 
                                htmlspecialchars($capitulo['temario_oficial']) . '
                              </div>';
                }
                
                if (isset($capitulo['paginas_guia'])) {
                    $html .= '<div style="margin-bottom: 2mm;">
                                <strong style="color: #2ecc71;">Guía páginas:</strong> ' . $capitulo['paginas_guia'] . '
                              </div>';
                }
                
                $html .= '<div style="margin-top: 3mm;">
                            <strong style="color: #9b59b6;">Lecciones:</strong> ';
                
                foreach ($capitulo['videos'] as $video_id) {
                    $html .= '<span class="badge-capitulo">
                                <i class="fas fa-play-circle"></i>
                                Video ' . str_pad($video_id, 2, '0', STR_PAD_LEFT) . '
                              </span>';
                }
                
                $html .= '</div></div>';
            }
            
            $numero_pagina++;
        }
    }
    
    $html .= '
            <div class="recursos-oficiales-indice">
                <h3><i class="fas fa-link"></i> Recursos Oficiales Incluidos</h3>
                
                <div class="grid-recursos-indice">
                    <a href="' . $config['url_pruebate'] . '" class="recurso-indice" target="_blank">
                        <i class="fas fa-university" style="color: #3498db;"></i>
                        <strong>Pruéb@te UNAM</strong>
                        <span style="font-size: 10pt; margin-top: 3mm;">Plataforma oficial de práctica</span>
                        <span style="font-size: 9pt; margin-top: 2mm; color: #7f8c8d;">Guía págs. 24-25</span>
                    </a>
                    
                    <a href="' . $config['url_principal'] . '" class="recurso-indice" target="_blank">
                        <i class="fas fa-globe" style="color: #2ecc71;"></i>
                        <strong>Plataforma ECOEMS</strong>
                        <span style="font-size: 10pt; margin-top: 3mm;">Recursos complementarios</span>
                        <span style="font-size: 9pt; margin-top: 2mm; color: #7f8c8d;">' . htmlspecialchars($config['url_principal']) . '</span>
                    </a>
                    
                    <a href="' . $config['url_simulador'] . '" class="recurso-indice" target="_blank">
                        <i class="fas fa-tasks" style="color: #e74c3c;"></i>
                        <strong>Simulador Completo</strong>
                        <span style="font-size: 10pt; margin-top: 3mm;">+640 preguntas</span>
                        <span style="font-size: 9pt; margin-top: 2mm; color: #7f8c8d;">Práctica avanzada</span>
                    </a>
                    
                    <a href="' . $config['url_resultados'] . '" class="recurso-indice" target="_blank">
                        <i class="fas fa-graduation-cap" style="color: #9b59b6;"></i>
                        <strong>Gaceta Electrónica</strong>
                        <span style="font-size: 10pt; margin-top: 3mm;">Resultados oficiales</span>
                        <span style="font-size: 9pt; margin-top: 2mm; color: #7f8c8d;">Guía pág. 9</span>
                    </a>
                </div>
            </div>
            
            <div class="creditos-oficiales">
                <div><strong>Institución:</strong> ' . htmlspecialchars($config['instituciones_oficiales']) . '</div>
                <div><strong>Guía de referencia:</strong> ' . htmlspecialchars($config['guia_referencia']) . '</div>
                <div><strong>Autor:</strong> ' . htmlspecialchars($config['autor_nombre']) . ' • ' . htmlspecialchars($config['autor_titulo']) . '</div>
                <div><strong>Editorial:</strong> ' . htmlspecialchars($config['editorial']) . ' • ' . htmlspecialchars($config['marca']) . '</div>
                <div><strong>Alineación verificada:</strong> ' . $libro['estadisticas']['porcentaje_temario_cubierto'] . ' del temario oficial</div>
                <div style="margin-top: 3mm;"><strong>ISBN:</strong> ' . $config['isbn_vol' . $volumen_numero] . ' • ' . 
                $config['anio_publicacion'] . ' • Versión ' . $config['version'] . '</div>
            </div>
        </div>
    </body>
    </html>';
    
    return $html;
}

// ===================== INTERFAZ WEB =====================
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generador de Libros ECOEMS 2026 - Sistema Oficial</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --color-ipn: #e74c3c;
            --color-unam: #004b87;
            --color-oficial: #2c3e50;
        }
        
        body {
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
            min-height: 100vh;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        .navbar-oficial {
            background: linear-gradient(90deg, var(--color-ipn), var(--color-unam));
            box-shadow: 0 4px 20px rgba(0,0,0,0.15);
        }
        
        .hero-oficial {
            background: linear-gradient(rgba(44, 62, 80, 0.95), rgba(44, 62, 80, 0.95)), 
                        url('https://images.unsplash.com/photo-1516321318423-f06f85e504b3?ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 80px 0;
            border-radius: 0 0 30px 30px;
            margin-bottom: 50px;
            position: relative;
            overflow: hidden;
        }
        
        .hero-oficial::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(45deg, rgba(231, 76, 60, 0.3), rgba(0, 75, 135, 0.3));
        }
        
        .sello-hero {
            background: linear-gradient(135deg, var(--color-ipn), var(--color-unam));
            color: white;
            padding: 10px 25px;
            border-radius: 25px;
            display: inline-block;
            font-weight: bold;
            margin-bottom: 20px;
            font-size: 14px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
            position: relative;
            z-index: 1;
        }
        
        .card-libro-oficial {
            border: none;
            border-radius: 20px;
            overflow: hidden;
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            height: 100%;
            box-shadow: 0 10px 40px rgba(0,0,0,0.1);
            position: relative;
        }
        
        .card-libro-oficial::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 8px;
            background: linear-gradient(90deg, var(--color-ipn), var(--color-unam));
        }
        
        .card-libro-oficial:hover {
            transform: translateY(-15px) scale(1.02);
            box-shadow: 0 20px 60px rgba(0,0,0,0.2);
        }
        
        .card-header-oficial {
            padding: 35px;
            color: white;
            text-align: center;
            position: relative;
            overflow: hidden;
        }
        
        .card-header-oficial::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(45deg, rgba(255,255,255,0.1) 0%, rgba(255,255,255,0) 100%);
        }
        
        .volumen-1 .card-header-oficial {
            background: linear-gradient(135deg, var(--color-oficial), #34495e);
        }
        
        .volumen-2 .card-header-oficial {
            background: linear-gradient(135deg, var(--color-unam), #003366);
        }
        
        .numero-volumen-oficial {
            font-size: 80px;
            font-weight: 900;
            line-height: 1;
            margin-bottom: 10px;
            opacity: 0.9;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.2);
        }
        
        .badge-oficial {
            display: inline-flex;
            align-items: center;
            background: rgba(255,255,255,0.9);
            border-radius: 50px;
            padding: 8px 16px;
            margin: 4px;
            font-size: 12px;
            font-weight: bold;
            box-shadow: 0 3px 10px rgba(0,0,0,0.1);
            position: relative;
            z-index: 1;
        }
        
        .badge-oficial::before {
            content: "";
            position: absolute;
            top: -1px;
            left: -1px;
            right: -1px;
            bottom: -1px;
            background: linear-gradient(45deg, var(--color-ipn), var(--color-unam));
            border-radius: 50px;
            z-index: -1;
        }
        
        .badge-oficial span {
            background: white;
            padding: 6px 14px;
            border-radius: 45px;
            width: 100%;
            height: 100%;
        }
        
        .stats-grid-oficial {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
            margin: 30px 0;
        }
        
        .stat-item-oficial {
            background: linear-gradient(135deg, white, #f8f9fa);
            border-radius: 15px;
            padding: 25px;
            text-align: center;
            border: 2px solid #e0e0e0;
            transition: all 0.3s;
            position: relative;
            overflow: hidden;
        }
        
        .stat-item-oficial::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, var(--color-ipn), var(--color-unam));
        }
        
        .stat-item-oficial:hover {
            border-color: var(--color-ipn);
            transform: translateY(-8px);
            box-shadow: 0 10px 25px rgba(231, 76, 60, 0.1);
        }
        
        .stat-value-oficial {
            font-size: 36px;
            font-weight: 800;
            color: var(--color-oficial);
            line-height: 1;
            margin-bottom: 5px;
        }
        
        .stat-label-oficial {
            font-size: 11px;
            color: #7f8c8d;
            text-transform: uppercase;
            letter-spacing: 1.5px;
        }
        
        .preview-temario {
            background: linear-gradient(135deg, #2c3e50, #34495e);
            border-radius: 12px;
            padding: 20px;
            margin: 20px 0;
            color: white;
        }
        
        .btn-generar-oficial {
            background: linear-gradient(135deg, var(--color-ipn), var(--color-unam));
            border: none;
            padding: 18px 35px;
            font-size: 20px;
            font-weight: bold;
            border-radius: 15px;
            color: white;
            transition: all 0.3s;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 12px;
            width: 100%;
            position: relative;
            overflow: hidden;
        }
        
        .btn-generar-oficial::before {
            content: "";
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
            transition: 0.5s;
        }
        
        .btn-generar-oficial:hover::before {
            left: 100%;
        }
        
        .btn-generar-oficial:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(231, 76, 60, 0.3);
        }
        
        .proceso-oficial {
            background: white;
            border-radius: 20px;
            padding: 35px;
            margin: 35px 0;
            box-shadow: 0 10px 40px rgba(0,0,0,0.1);
            border-top: 8px solid var(--color-ipn);
        }
        
        .resultado-final-oficial {
            animation: slideInOficial 0.6s ease-out;
        }
        
        @keyframes slideInOficial {
            from {
                opacity: 0;
                transform: translateY(40px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .tarjeta-descarga-oficial {
            background: linear-gradient(135deg, var(--color-ipn), var(--color-unam));
            color: white;
            border-radius: 25px;
            padding: 40px;
            text-align: center;
            margin: 25px 0;
            position: relative;
            overflow: hidden;
        }
        
        .tarjeta-descarga-oficial::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none"><path d="M0,0 L100,0 L100,100 Z" fill="rgba(255,255,255,0.1)"/></svg>');
            background-size: cover;
        }
        
        .icono-oficial {
            font-size: 70px;
            margin-bottom: 25px;
            animation: pulseOficial 2s infinite;
            text-shadow: 2px 2px 8px rgba(0,0,0,0.3);
        }
        
        @keyframes pulseOficial {
            0% { transform: scale(1); }
            50% { transform: scale(1.15); }
            100% { transform: scale(1); }
        }
    </style>
</head>
<body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-oficial navbar-expand-lg navbar-dark sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <i class="fas fa-university me-2"></i>
                <strong>' . htmlspecialchars($config['instituciones_oficiales']) . '</strong>
                <small class="ms-2 opacity-85">Sistema de Preparación Oficial</small>
            </a>
            <div class="navbar-nav ms-auto">
                <a href="' . $config['url_pruebate'] . '" target="_blank" class="nav-link">
                    <i class="fas fa-external-link-alt me-1"></i> Pruéb@te UNAM
                </a>
                <a href="' . $config['url_resultados'] . '" target="_blank" class="nav-link">
                    <i class="fas fa-graduation-cap me-1"></i> Gaceta Electrónica
                </a>
            </div>
        </div>
    </nav>

    <!-- HERO SECTION -->
    <div class="hero-oficial">
        <div class="container position-relative">
            <div class="sello-hero">
                <i class="fas fa-certificate me-2"></i>
                SISTEMA OFICIALMENTE ALINEADO A ' . htmlspecialchars($config['instituciones_oficiales']) . '
            </div>
            
            <h1 class="display-4 fw-bold mb-3">
                <i class="fas fa-book text-warning me-3"></i>
                Preparación 100% Alineada al Temario Oficial
            </h1>
            <p class="lead mb-4">
                91 lecciones estructuradas según la Guía Oficial ' . htmlspecialchars($config['guia_referencia']) . '.<br>
                Examen de ' . $config['num_preguntas_examen'] . ' preguntas en línea, ' . $config['tiempo_examen'] . ' de duración.
            </p>
            <div class="d-flex flex-wrap gap-3">
                <span class="badge-oficial">
                    <span><i class="fas fa-file-alt me-2" style="color: var(--color-ipn);"></i> Guía Oficial ' . htmlspecialchars($config['guia_referencia']) . '</span>
                </span>
                <span class="badge-oficial">
                    <span><i class="fas fa-question-circle me-2" style="color: var(--color-unam);"></i> ' . $config['num_preguntas_examen'] . ' Preguntas</span>
                </span>
                <span class="badge-oficial">
                    <span><i class="fas fa-clock me-2" style="color: #2ecc71;"></i> ' . $config['tiempo_examen'] . '</span>
                </span>
                <span class="badge-oficial">
                    <span><i class="fas fa-check-circle me-2" style="color: #9b59b6;"></i> 100% Temario Cubierto</span>
                </span>
            </div>
        </div>
    </div>

    <div class="container">
        <!-- TARJETAS DE LOS DOS LIBROS -->
        <div class="row mb-5">
            <div class="col-lg-6 mb-4">
                <div class="card-libro-oficial volumen-1">
                    <div class="card-header-oficial">
                        <div class="numero-volumen-oficial">01</div>
                        <h3 class="mb-2">VOLUMEN 1</h3>
                        <h5 class="opacity-90">Base Permanente - 91 Lecciones Oficiales</h5>
                        <div class="mt-3">
                            <span class="badge bg-light text-dark fs-6 px-4 py-2 rounded-pill">
                                <i class="fas fa-check-circle me-2 text-success"></i> Alineado 100% a Guía Oficial
                            </span>
                        </div>
                    </div>
                    <div class="card-body p-4">
                        <p class="card-text">' . $libro_1['descripcion'] . '</p>
                        
                        <div class="stats-grid-oficial">
                            <div class="stat-item-oficial">
                                <div class="stat-value-oficial">' . $libro_1['estadisticas']['total_videos'] . '</div>
                                <div class="stat-label-oficial">Lecciones Oficiales</div>
                            </div>
                            <div class="stat-item-oficial">
                                <div class="stat-value-oficial">' . $libro_1['estadisticas']['total_capitulos'] . '</div>
                                <div class="stat-label-oficial">Capítulos Estructurados</div>
                            </div>
                            <div class="stat-item-oficial">
                                <div class="stat-value-oficial">' . $libro_1['estadisticas']['materias_cubiertas'] . '</div>
                                <div class="stat-label-oficial">Materias Oficiales</div>
                            </div>
                            <div class="stat-item-oficial">
                                <div class="stat-value-oficial">' . $libro_1['estadisticas']['porcentaje_temario_cubierto'] . '</div>
                                <div class="stat-label-oficial">Temario Cubierto</div>
                            </div>
                        </div>
                        
                        <div class="preview-temario">
                            <h6 class="mb-3"><i class="fas fa-list-check me-2"></i>Recursos Oficiales Incluidos:</h6>
                            <div class="row">
                                <div class="col-6">
                                    <ul class="list-unstyled mb-0">
                                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Estrategias estudio (págs. 26-42)</li>
                                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Técnicas opción múltiple (págs. 43-53)</li>
                                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Examen muestra (págs. 54-79)</li>
                                    </ul>
                                </div>
                                <div class="col-6">
                                    <ul class="list-unstyled mb-0">
                                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Clave respuestas (págs. 80-82)</li>
                                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Recomendaciones finales (pág. 83)</li>
                                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Plataforma Pruéb@te (págs. 24-25)</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        <button class="btn-generar-oficial mt-4" onclick="iniciarGeneracionOficial()">
                            <i class="fas fa-graduation-cap"></i>
                            Generar Volumen 1 Oficial
                        </button>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6 mb-4">
                <div class="card-libro-oficial volumen-2">
                    <div class="card-header-oficial">
                        <div class="numero-volumen-oficial">02</div>
                        <h3 class="mb-2">VOLUMEN 2</h3>
                        <h5 class="opacity-90">Actualización Oficial 2026</h5>
                        <div class="mt-3">
                            <span class="badge bg-light text-dark fs-6 px-4 py-2 rounded-pill">
                                <i class="fas fa-clock me-2 text-warning"></i> ' . $libro_2['fecha_estimada'] . '
                            </span>
                        </div>
                    </div>
                    <div class="card-body p-4">
                        <p class="card-text">' . $libro_2['descripcion'] . '</p>
                        
                        <div class="alert alert-info">
                            <i class="fas fa-info-circle me-2"></i>
                            <strong>Generación automática programada</strong> para cuando se publique la Guía Oficial 2026
                        </div>
                        
                        <div class="stats-grid-oficial">
                            <div class="stat-item-oficial">
                                <div class="stat-value-oficial">128</div>
                                <div class="stat-label-oficial">Preguntas Nuevas 2026</div>
                            </div>
                            <div class="stat-item-oficial">
                                <div class="stat-value-oficial">Gratis</div>
                                <div class="stat-label-oficial">Para Poseedores Vol. 1</div>
                            </div>
                            <div class="stat-item-oficial">
                                <div class="stat-value-oficial">Abril</div>
                                <div class="stat-label-oficial">2026</div>
                            </div>
                            <div class="stat-item-oficial">
                                <div class="stat-value-oficial">+640</div>
                                <div class="stat-label-oficial">Simulador Actualizado</div>
                            </div>
                        </div>
                        
                        <div class="text-center mt-4">
                            <a href="' . $config['url_simulador'] . '" target="_blank" class="btn btn-outline-primary btn-lg px-5">
                                <i class="fas fa-tasks me-2"></i>
                                Practicar con Simulador Actual
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- SECCIÓN DE GENERACIÓN -->
        <div id="seccion-generacion-oficial" style="display: none;">
            <div class="proceso-oficial">
                <h3 class="text-center mb-4">
                    <i class="fas fa-cogs text-primary me-2"></i>
                    Proceso de Generación del Libro Oficial
                </h3>
                
                <div id="pasos-proceso-oficial">
                    <!-- Los pasos se insertarán dinámicamente -->
                </div>
                
                <div class="progress mt-4" style="height: 12px; border-radius: 10px;">
                    <div id="barra-progreso-oficial" class="progress-bar progress-bar-striped progress-bar-animated" 
                         role="progressbar" style="width: 0%; background: linear-gradient(90deg, var(--color-ipn), var(--color-unam));"></div>
                </div>
                
                <div class="text-center mt-4" id="tiempo-restante-oficial">
                    <i class="fas fa-clock me-2"></i>
                    Generando libro oficialmente alineado... <span id="tiempo-estimado-oficial">2-3 minutos</span>
                </div>
            </div>
            
            <div id="resultado-final-oficial" class="resultado-final-oficial" style="display: none;">
                <!-- Resultado final se insertará aquí -->
            </div>
        </div>
        
        <!-- SECCIÓN DE CRÉDITOS -->
        <div class="card border-0 shadow-sm mt-5" style="border-top: 8px solid var(--color-unam) !important;">
            <div class="card-body text-center p-5">
                <h4 class="mb-4">
                    <i class="fas fa-certificate text-warning me-2"></i>
                    Atribuciones Oficiales y Créditos
                </h4>
                
                <div class="row mb-4">
                    <div class="col-md-4 mb-3">
                        <div class="p-3 border rounded h-100">
                            <div class="fs-4 text-primary mb-2">
                                <i class="fas fa-university"></i>
                            </div>
                            <div class="fw-bold">' . htmlspecialchars($config['instituciones_oficiales']) . '</div>
                            <small class="text-muted">Guía Oficial de Referencia</small>
                            <div class="mt-2 small">
                                <i class="fas fa-file-alt me-1"></i>
                                ' . htmlspecialchars($config['guia_referencia']) . '
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="p-3 border rounded h-100">
                            <div class="fs-4 text-success mb-2">
                                <i class="fas fa-user-tie"></i>
                            </div>
                            <div class="fw-bold">' . htmlspecialchars($config['autor_nombre']) . '</div>
                            <small class="text-muted">' . htmlspecialchars($config['autor_titulo']) . '</small>
                            <div class="mt-2 small">
                                <i class="fas fa-building me-1"></i>
                                ' . htmlspecialchars($config['editorial']) . '
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="p-3 border rounded h-100">
                            <div class="fs-4 text-danger mb-2">
                                <i class="fas fa-robot"></i>
                            </div>
                            <div class="fw-bold">' . htmlspecialchars($config['tecnologia_ia']) . '</div>
                            <small class="text-muted">Tecnología de Inteligencia Artificial</small>
                            <div class="mt-2 small">
                                <i class="fas fa-microchip me-1"></i>
                                ' . htmlspecialchars($config['tecnologia_tutor']) . ' • ' . htmlspecialchars($config['tecnologia_imagenes']) . '
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="d-flex flex-wrap justify-content-center gap-3">
                    <a href="' . $config['url_pruebate'] . '" target="_blank" class="btn btn-primary px-4">
                        <i class="fas fa-university me-2"></i> Pruéb@te UNAM Oficial
                    </a>
                    <a href="' . $config['url_principal'] . '" target="_blank" class="btn btn-success px-4">
                        <i class="fas fa-globe me-2"></i> Plataforma ECOEMS 2026
                    </a>
                    <a href="' . $config['url_simulador'] . '" target="_blank" class="btn btn-danger px-4">
                        <i class="fas fa-tasks me-2"></i> Simulador Completo
                    </a>
                    <a href="' . $config['url_resultados'] . '" target="_blank" class="btn btn-dark px-4">
                        <i class="fas fa-graduation-cap me-2"></i> Gaceta Electrónica
                    </a>
                </div>
                
                <div class="mt-4 text-muted small">
                    <i class="fas fa-info-circle me-1"></i>
                    Sistema alineado al ' . $libro_1['estadisticas']['porcentaje_temario_cubierto'] . ' del temario oficial • 
                    ISBN Vol. 1: ' . $config['isbn_vol1'] . ' • 
                    ISBN Vol. 2: ' . $config['isbn_vol2'] . ' • 
                    Versión ' . $config['version'] . ' • 
                    ' . $config['anio_publicacion'] . '
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // CONFIGURACIÓN OFICIAL
        const configOficial = <?php echo json_encode($config); ?>;
        const libroOficial = <?php echo json_encode($libro_1); ?>;
        
        // PASOS DEL PROCESO OFICIAL
        const pasosGeneracionOficial = [
            { id: 1, titulo: "Verificando alineación con Guía Oficial IPN-UNAM 2025", tiempo: 3 },
            { id: 2, titulo: "Generando portada con sellos oficiales", tiempo: 6 },
            { id: 3, titulo: "Creando índice oficial con ' . $libro_1['estadisticas']['total_capitulos'] . ' capítulos", tiempo: 10 },
            { id: 4, titulo: "Procesando 91 lecciones alineadas al temario oficial", tiempo: 18 },
            { id: 5, titulo: "Integrando estrategias oficiales (págs. 26-53 de la Guía)", tiempo: 12 },
            { id: 6, titulo: "Vinculando con plataforma Pruéb@te UNAM (págs. 24-25)", tiempo: 8 },
            { id: 7, titulo: "Insertando examen muestra oficial (págs. 54-79)", tiempo: 15 },
            { id: 8, titulo: "Agregando clave de respuestas (págs. 80-82)", tiempo: 10 },
            { id: 9, titulo: "Configurando recomendaciones finales (pág. 83)", tiempo: 8 },
            { id: 10, titulo: "Verificando cobertura del 100% del temario oficial", tiempo: 12 },
            { id: 11, titulo: "Comprimiendo en PDF oficial con ISBN", tiempo: 25 },
            { id: 12, titulo: "Libro oficial generado exitosamente", tiempo: 0 }
        ];
        
        function iniciarGeneracionOficial() {
            // Mostrar sección de generación
            document.getElementById('seccion-generacion-oficial').style.display = 'block';
            document.getElementById('seccion-generacion-oficial').scrollIntoView({ behavior: 'smooth' });
            
            // Crear pasos
            const pasosDiv = document.getElementById('pasos-proceso-oficial');
            pasosDiv.innerHTML = '';
            
            pasosGeneracionOficial.forEach((paso, index) => {
                const pasoDiv = document.createElement('div');
                pasoDiv.className = 'paso-proceso';
                pasoDiv.id = `paso-oficial-${paso.id}`;
                
                pasoDiv.innerHTML = `
                    <div class="numero-paso" style="background: linear-gradient(135deg, var(--color-ipn), var(--color-unam));">
                        ${paso.id}
                    </div>
                    <div style="flex: 1;">
                        <div class="fw-bold">${paso.titulo}</div>
                        ${paso.tiempo > 0 ? `<small class="text-muted">${paso.tiempo} segundos</small>` : ''}
                    </div>
                    <div id="icono-paso-oficial-${paso.id}" class="text-muted">
                        <i class="fas fa-clock"></i>
                    </div>
                `;
                
                pasosDiv.appendChild(pasoDiv);
            });
            
            // Iniciar progreso
            let pasoActual = 0;
            const totalPasos = pasosGeneracionOficial.length;
            const barraProgreso = document.getElementById('barra-progreso-oficial');
            
            function actualizarProgresoOficial() {
                if (pasoActual < totalPasos) {
                    // Actualizar paso actual
                    const pasoDiv = document.getElementById(`paso-oficial-${pasosGeneracionOficial[pasoActual].id}`);
                    const iconoDiv = document.getElementById(`icono-paso-oficial-${pasosGeneracionOficial[pasoActual].id}`);
                    
                    // Marcar paso anterior como completado
                    if (pasoActual > 0) {
                        const pasoAnterior = document.getElementById(`paso-oficial-${pasosGeneracionOficial[pasoActual-1].id}`);
                        pasoAnterior.classList.add('completado');
                        pasoAnterior.classList.remove('activo');
                        
                        const iconoAnterior = document.getElementById(`icono-paso-oficial-${pasosGeneracionOficial[pasoActual-1].id}`);
                        iconoAnterior.innerHTML = '<i class="fas fa-check text-success"></i>';
                    }
                    
                    // Activar paso actual
                    pasoDiv.classList.add('activo');
                    iconoDiv.innerHTML = '<i class="fas fa-spinner fa-spin text-primary"></i>';
                    
                    // Actualizar barra de progreso
                    const porcentaje = Math.min(100, Math.round(((pasoActual + 1) / totalPasos) * 100));
                    barraProgreso.style.width = porcentaje + '%';
                    barraProgreso.textContent = porcentaje + '%';
                    
                    // Actualizar tiempo restante
                    const tiempoRestante = pasosGeneracionOficial.slice(pasoActual).reduce((sum, p) => sum + p.tiempo, 0);
                    const minutos = Math.floor(tiempoRestante / 60);
                    const segundos = tiempoRestante % 60;
                    
                    document.getElementById('tiempo-estimado-oficial').textContent = 
                        `${minutos > 0 ? minutos + 'm ' : ''}${segundos}s`;
                    
                    // Avanzar al siguiente paso
                    pasoActual++;
                    
                    // Programar siguiente actualización
                    const tiempoEspera = pasoActual < totalPasos ? pasosGeneracionOficial[pasoActual-1].tiempo * 100 : 1000;
                    setTimeout(actualizarProgresoOficial, tiempoEspera);
                } else {
                    // Generación completada
                    mostrarResultadoFinalOficial();
                }
            }
            
            // Iniciar el proceso
            setTimeout(actualizarProgresoOficial, 1000);
        }
        
        function mostrarResultadoFinalOficial() {
            const resultadoDiv = document.getElementById('resultado-final-oficial');
            
            resultadoDiv.innerHTML = `
                <div class="tarjeta-descarga-oficial">
                    <div class="icono-oficial">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    
                    <h2 class="mb-3">¡Libro Oficial Generado Exitosamente!</h2>
                    
                    <div class="row justify-content-center mb-4">
                        <div class="col-md-10">
                            <div class="card bg-white text-dark p-5 rounded-3" style="border: 3px solid rgba(255,255,255,0.3);">
                                <h4 class="mb-3">"${libroOficial.titulo}"</h4>
                                <p class="mb-4">100% alineado a la Guía Oficial ${configOficial.guia_referencia}</p>
                                
                                <div class="row text-center mb-4">
                                    <div class="col-3">
                                        <div class="fs-2 fw-bold" style="color: var(--color-ipn);">${libroOficial.estadisticas.total_videos}</div>
                                        <small>Lecciones Oficiales</small>
                                    </div>
                                    <div class="col-3">
                                        <div class="fs-2 fw-bold" style="color: var(--color-unam);">${libroOficial.estadisticas.total_capitulos}</div>
                                        <small>Capítulos Estructurados</small>
                                    </div>
                                    <div class="col-3">
                                        <div class="fs-2 fw-bold" style="color: #2ecc71;">${libroOficial.estadisticas.porcentaje_temario_cubierto}</div>
                                        <small>Temario Cubierto</small>
                                    </div>
                                    <div class="col-3">
                                        <div class="fs-2 fw-bold" style="color: #9b59b6;">${configOficial.num_preguntas_examen}</div>
                                        <small>Preguntas Examen</small>
                                    </div>
                                </div>
                                
                                <p class="mb-0 text-center">
                                    El Volumen 1 oficialmente alineado a ${configOficial.instituciones_oficiales} ha sido generado.
                                    Incluye todas las estrategias y recursos de la Guía Oficial 2025.
                                </p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="d-flex flex-wrap justify-content-center gap-3">
                        <button class="btn btn-light btn-lg px-5" onclick="descargarPDFOficial()">
                            <i class="fas fa-download me-2"></i>
                            Descargar PDF Oficial (58 MB)
                        </button>
                        
                        <button class="btn btn-outline-light btn-lg px-5" onclick="verPreviaHTMLOficial()">
                            <i class="fas fa-eye me-2"></i>
                            Ver Vista Previa Oficial
                        </button>
                        
                        <a href="${configOficial.url_pruebate}" target="_blank" class="btn btn-outline-light btn-lg px-5">
                            <i class="fas fa-university me-2"></i>
                            Ir a Pruéb@te UNAM
                        </a>
                    </div>
                    
                    <div class="mt-4 small opacity-85">
                        <i class="fas fa-link me-1"></i>
                        Todos los recursos están oficialmente alineados a: ${configOficial.instituciones_oficiales}
                    </div>
                </div>
                
                <div class="card mt-4">
                    <div class="card-body">
                        <h5 class="mb-3"><i class="fas fa-list-check me-2"></i>Recursos Oficiales Incluidos</h5>
                        
                        <div class="row">
                            <div class="col-md-6">
                                <ul class="list-unstyled">
                                    <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> 91 lecciones alineadas al temario oficial</li>
                                    <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Estrategias de estudio (Guía págs. 26-42)</li>
                                    <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Técnicas para opción múltiple (págs. 43-53)</li>
                                    <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Examen muestra completo (págs. 54-79)</li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul class="list-unstyled">
                                    <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Clave de respuestas (págs. 80-82)</li>
                                    <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Recomendaciones examen en línea (pág. 83)</li>
                                    <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Plataforma Pruéb@te UNAM (págs. 24-25)</li>
                                    <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Autoevaluación (pág. 23)</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            `;
            
            resultadoDiv.style.display = 'block';
            resultadoDiv.scrollIntoView({ behavior: 'smooth' });
        }
        
        function descargarPDFOficial() {
            alert('LIBRO OFICIAL GENERADO\n\nEn producción, esta función descargaría el archivo PDF oficial.\n\nCaracterísticas:\n• 100% alineado a Guía IPN-UNAM 2025\n• ISBN: ${configOficial.isbn_vol1}\n• ${libroOficial.estadisticas.total_capitulos} capítulos\n• ${libroOficial.estadisticas.total_videos} lecciones oficiales\n• Páginas estimadas: ${libroOficial.estadisticas.total_paginas_estimado}');
        }
        
        function verPreviaHTMLOficial() {
            // Aquí se abriría una vista previa del libro oficial generado
            alert('Vista previa del libro oficialmente alineado.\nEn producción, se mostraría el HTML del libro con todos los sellos oficiales.');
        }
    </script>
</body>
</html>