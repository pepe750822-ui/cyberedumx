<?php
// dashboard.php - VERSIÓN 15.1 CON URLs REALES
// SISTEMA DE ESTUDIO CON VISUALIZACIÓN DE ARCHIVOS EN LÍNEA

session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);

// ===================== CONFIGURACIÓN =====================
$config = [
    'nombre_plataforma' => 'CyberEduMX Dashboard - ECOEMS 2026',
    'version' => 'Dashboard Premium 15.1',
    'fecha_examen' => '2026-06-15',
    'autor' => 'CyberEdu MX & BioReto Academy',
    'udemy_url' => 'https://www.udemy.com/course/ecoems2026conia/?referralCode=B2F05026985A2564FAAC',
    'udemy_link_html' => '<a href="https://www.udemy.com/course/ecoems2026conia/?referralCode=B2F05026985A2564FAAC" target="_blank" class="btn btn-warning btn-lg fw-bold"
               onclick="gtag(\'event\', \'udemy_click\', {\'event_category\': \'conversion\', \'event_label\': \'dashboard_header\'})">
                <i class="fas fa-external-link-alt me-2"></i>Acceder al Curso en Udemy
            </a>',
    'ga_id' => 'G-88JWPSS4QL',
    'whatsapp' => '55 2326 9241',
    'email' => 'JoseLuisGlez@cyberedumx.com',
    'sitio_principal' => 'https://cyberedumx.com',
    'base_url' => 'https://cyberedumx.com/ecoems2026',
    'csv_file' => 'youtube-playlist-links-PLG1K4pAhMRgJRmanxPmX3AeAMpLS-sXlG-2025-12-18.csv',
    'simulador_completo' => 'https://cyberedumx.com/ecoems2026/simulador1000.html',
    'chatbot_api' => 'https://cyberedumx.com/ecoems2026/chatbot/chatbot.php',
    'theme' => 'cyberedu_dashboard'
];

// ===================== URLs REALES DE NOTEBOOKLM =====================
$notebooklm_urls = [
    0 => "https://notebooklm.google.com/notebook/c703574a-ebf5-4586-b1ea-bec4b944718f",
    1 => "https://notebooklm.google.com/notebook/5b92f1d5-caac-41e8-a976-c411d2c6f171",
    2 => "https://notebooklm.google.com/notebook/1f40c8a5-0ea0-40b6-b1d8-91cc223304e4",
    3 => "https://notebooklm.google.com/notebook/081ab961-4c44-43ab-a68c-c5eadfe7980b",
    4 => "https://notebooklm.google.com/notebook/ca387d8c-a743-48a9-922d-26373e948715",
    5 => "https://notebooklm.google.com/notebook/e79cca86-53d6-4294-90cc-b6c4c41cf0b4",
    6 => "https://notebooklm.google.com/notebook/be3c5227-90c1-4d21-b7b4-e3013cf1b3ca",
    7 => "https://notebooklm.google.com/notebook/cc877779-605d-4472-8c93-6a8f9fc690a3",
    8 => "https://notebooklm.google.com/notebook/6cfefedf-5339-4ae9-8798-a6b902af5559",
    9 => "https://notebooklm.google.com/notebook/ef823779-3e15-4471-9b11-385ad0663a3c",
    10 => "https://notebooklm.google.com/notebook/ba64e657-f1e5-4739-97be-8d543f35a565",
    11 => "https://notebooklm.google.com/notebook/e726391d-fe58-4b13-b446-c6533fb18042",
    12 => "https://notebooklm.google.com/notebook/7d4a39a1-f8e6-4d1d-a4c5-228934121408",
    13 => "https://notebooklm.google.com/notebook/451ea89a-b294-4b2f-9376-92b821ef5817",
    14 => "https://notebooklm.google.com/notebook/bf3a28c2-448a-4652-be08-61435e88a8c2",
    15 => "https://notebooklm.google.com/notebook/059967f8-229b-48a2-93cf-77b733b7ecf5",
    16 => "https://notebooklm.google.com/notebook/ae23c70d-857f-4435-83b8-ed960551b126",
    17 => "https://notebooklm.google.com/notebook/44a5a00c-0df3-4e76-913d-91901187ec31",
    18 => "https://notebooklm.google.com/notebook/720a82a4-23d3-4fe0-9261-66b02748838b",
    19 => "https://notebooklm.google.com/notebook/77273295-83cf-4164-9887-750c44321201",
    20 => "https://notebooklm.google.com/notebook/fc7112a2-14af-43b5-950d-9d7a080515d3",
    21 => "https://notebooklm.google.com/notebook/be28d280-3531-44cb-a6c5-717dc21b2a51",
    22 => "https://notebooklm.google.com/notebook/0c3109a3-4859-437b-bdb1-ea830c765c2f",
    23 => "https://notebooklm.google.com/notebook/1b19afdc-aad1-4e9b-b99f-834b2bc2ab32",
    24 => "https://notebooklm.google.com/notebook/9d09f7cf-bf62-40c3-b910-c533e1be4776",
    25 => "https://notebooklm.google.com/notebook/ac61a2d3-8012-4dbb-b5d6-ebf9a10d1eae",
    26 => "https://notebooklm.google.com/notebook/1b3ea2a2-3054-407c-a428-5d709211c5a9",
    27 => "https://notebooklm.google.com/notebook/1f866752-38bf-4a3e-8875-88a4c4bd2d51",
    28 => "https://notebooklm.google.com/notebook/638d67e0-93c1-46ee-9999-73abcd0f954b",
    29 => "https://notebooklm.google.com/notebook/a4f90bbb-2b3b-4fcf-9ad0-aa4647e10566",
    30 => "https://notebooklm.google.com/notebook/4ad04b91-d573-42a5-88a1-94e16f7b6c56",
    31 => "https://notebooklm.google.com/notebook/4367e365-472a-4a10-85c6-6f0c92a774bc",
    32 => "https://notebooklm.google.com/notebook/333c9fd0-b921-4e29-b918-d519f1bd3eca",
    33 => "https://notebooklm.google.com/notebook/dc1e4992-fcfc-478a-b23b-f0454ce98d1c",
    34 => "https://notebooklm.google.com/notebook/c2540665-9eae-4e13-a703-15b5b7110dfe",
    35 => "https://notebooklm.google.com/notebook/bb0d6539-6ef6-4567-990a-58aec7eb9000",
    36 => "https://notebooklm.google.com/notebook/949929df-ee15-4ebb-a5f4-d11b3320e649",
    37 => "https://notebooklm.google.com/notebook/869b3111-1a39-4543-bdc6-fbc1c0eb179f",
    38 => "https://notebooklm.google.com/notebook/a1d0623b-83e8-45c5-a5ef-c8224dfe68fc",
    39 => "https://notebooklm.google.com/notebook/efa68be6-af0a-40bb-b6e4-e9da247e85d7",
    40 => "https://notebooklm.google.com/notebook/8cd2a3d6-1e80-42a4-a879-3416468aa8af",
    41 => "https://notebooklm.google.com/notebook/3b7e8105-d320-4038-8224-6a5c5aa7f656",
    42 => "https://notebooklm.google.com/notebook/e3aaf0e6-4ce6-49b5-9064-ba2392a77146",
    43 => "https://notebooklm.google.com/notebook/6dd560f5-02aa-451f-9c5c-9f13344f09bf",
    44 => "https://notebooklm.google.com/notebook/e730c8ff-f4d0-48fb-b26a-7bc7381bf082",
    45 => "https://notebooklm.google.com/notebook/1adb38ad-34cf-4351-ba6a-99a1c09a11ca",
    46 => "https://notebooklm.google.com/notebook/eaae901a-9126-422c-8b6b-3c1bddc77b0a",
    47 => "https://notebooklm.google.com/notebook/4f024224-ccad-4a71-90a1-c10dc0fd37dc",
    48 => "https://notebooklm.google.com/notebook/0f65a5d2-3a86-410d-8868-2a6176268f8c",
    49 => "https://notebooklm.google.com/notebook/c5a62c8b-a5c5-4fa6-8629-3e234d8efa95",
    50 => "https://notebooklm.google.com/notebook/c8979d8c-8737-4f37-82a6-b95a6671610d",
    51 => "https://notebooklm.google.com/notebook/b45f755b-30f2-48c9-8fa5-add66df5c032",
    52 => "https://notebooklm.google.com/notebook/f916c0e8-4855-4c73-98b6-6358c536ad45",
    53 => "https://notebooklm.google.com/notebook/e4440488-ab2d-49cf-83f8-6ef1a209a647",
    54 => "https://notebooklm.google.com/notebook/5d417004-0f0f-4de0-b32e-18469e72be60",
    55 => "https://notebooklm.google.com/notebook/a2309238-f375-4711-aaf5-cf0b1d87fbfe",
    56 => "https://notebooklm.google.com/notebook/186439d4-fee6-4e58-ab07-83cac603b23b",
    57 => "https://notebooklm.google.com/notebook/06ca3078-0d24-4d49-b1cc-2a4f53b13ebb",
    58 => "https://notebooklm.google.com/notebook/a60024bc-13c4-4c1d-93c6-3fe7f7973a7b",
    59 => "https://notebooklm.google.com/notebook/957df4ad-c731-4e28-b624-194891a3c6b4",
    60 => "https://notebooklm.google.com/notebook/732da130-a817-40c9-b44e-2f093c9f2040",
    61 => "https://notebooklm.google.com/notebook/edc2e281-8734-4498-bb53-e340de49f446",
    62 => "https://notebooklm.google.com/notebook/b0735818-4e26-48c3-8229-dd4a040bcc58",
    63 => "https://notebooklm.google.com/notebook/936925cd-a444-424c-8f46-6c2c229d2015",
    64 => "https://notebooklm.google.com/notebook/3f5a87ec-1224-4074-99f1-48aa8f457d90",
    65 => "https://notebooklm.google.com/notebook/7e93fe0a-e276-4988-b4e6-cfb636f2d8c5",
    66 => "https://notebooklm.google.com/notebook/a2b36dc8-8dff-45ec-bc01-91aa912f6c76",
    67 => "https://notebooklm.google.com/notebook/570a3762-10b4-46f9-8195-db51d3fb1dfa",
    68 => "https://notebooklm.google.com/notebook/e7b7ecf4-a7fb-4be1-8daf-79fb9e61c14b",
    69 => "https://notebooklm.google.com/notebook/97b5e050-e817-4e5e-8109-20437d928b06?authuser=2",
    70 => "https://notebooklm.google.com/notebook/e62bb360-3aa6-4d9b-ba3a-137823a1d244",
    71 => "https://notebooklm.google.com/notebook/a9e8e17f-1de3-4d6c-81b6-bb114e0f9aae?authuser=1",
    72 => "https://notebooklm.google.com/notebook/8a8e756a-528a-4aa0-b961-868c83c4b4e1?authuser=2",
    73 => "https://notebooklm.google.com/notebook/bb8d4197-505a-4efa-a930-333dbb516d44?authuser=1",
    74 => "https://notebooklm.google.com/notebook/06445714-fd9c-492d-9414-f481edfd77a8?authuser=1",
    75 => "https://notebooklm.google.com/notebook/3c581b0e-3fe4-45d5-bb5d-5a8a53c31559?authuser=2",
    76 => "https://notebooklm.google.com/notebook/1213542f-637e-4f51-b6a5-c21446451c8e?authuser=2",
    77 => "https://notebooklm.google.com/notebook/d881ad4a-f11d-42fd-afad-522aeaaa9d37?authuser=2",
    78 => "https://notebooklm.google.com/notebook/6c664da7-ad86-4efc-bfd4-82b00aa7d613?authuser=2",
    79 => "https://notebooklm.google.com/notebook/0878e14e-a74e-416b-9c03-bc29cf6f501a?authuser=2",
    80 => "https://notebooklm.google.com/notebook/651b863e-008b-40d1-ba8e-7e24e3da51b2?authuser=2",
    81 => "https://notebooklm.google.com/notebook/d9c2f83e-d4db-499b-8cac-82d2d1d79a20?authuser=2",
    82 => "https://notebooklm.google.com/notebook/84bbb065-5fa2-4130-b1f8-d90f45923045?authuser=2",
    83 => "https://notebooklm.google.com/notebook/90120fc0-25b0-4859-83d1-bb7cca619f4e?authuser=2",
    84 => "https://notebooklm.google.com/notebook/17c9b85b-a7ce-4986-b86f-2959be589706?authuser=2",
    85 => "https://notebooklm.google.com/notebook/deca7128-9d46-4abf-9570-f08ef4f89244?authuser=2",
    86 => "https://notebooklm.google.com/notebook/5d832abe-407e-43e9-9f60-c4d9a08b2483?authuser=2",
    87 => "https://notebooklm.google.com/notebook/373ae22b-35f0-4234-b0d8-bf77f072312e?authuser=2",
    88 => "https://notebooklm.google.com/notebook/c157bddd-48d6-403e-b64c-d8b4ecfa4735?authuser=2",
    89 => "https://notebooklm.google.com/notebook/49423274-2ae1-4c7b-9f6d-be236728e224?authuser=2",
    90 => "https://notebooklm.google.com/notebook/94e8963d-4d80-4564-8c9a-1b13717371ba?authuser=2"
];

// ===================== SISTEMA DE SEGUIMIENTO =====================
class SistemaSeguimiento
{
    private static $instance = null;

    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new SistemaSeguimiento();
        }
        return self::$instance;
    }

    public function marcarVideoVisto($videoId, $tipo)
    {
        if (!isset($_SESSION['progreso_videos'])) {
            $_SESSION['progreso_videos'] = [];
        }

        if (!isset($_SESSION['progreso_videos'][$videoId])) {
            $_SESSION['progreso_videos'][$videoId] = [
                'video' => false,
                'notebooklm' => false,
                'fecha_video' => null,
                'fecha_notebooklm' => null
            ];
        }

        if ($tipo === 'video') {
            $_SESSION['progreso_videos'][$videoId]['video'] = true;
            $_SESSION['progreso_videos'][$videoId]['fecha_video'] = date('Y-m-d H:i:s');
        } elseif ($tipo === 'notebooklm') {
            $_SESSION['progreso_videos'][$videoId]['notebooklm'] = true;
            $_SESSION['progreso_videos'][$videoId]['fecha_notebooklm'] = date('Y-m-d H:i:s');
        }

        return true;
    }

    public function obtenerProgresoVideo($videoId)
    {
        return isset($_SESSION['progreso_videos'][$videoId])
            ? $_SESSION['progreso_videos'][$videoId]
            : ['video' => false, 'notebooklm' => false];
    }

    public function obtenerEstadisticasGenerales($videos)
    {
        $total_videos = count($videos);
        $videos_completos = 0;
        $puntos_obtenidos = 0;
        $puntos_totales = $total_videos * 100;

        foreach ($videos as $video) {
            $progreso = $this->obtenerProgresoVideo($video['id']);
            if ($progreso['video'] && $progreso['notebooklm']) {
                $videos_completos++;
                $puntos_obtenidos += 100;
            } elseif ($progreso['video'] || $progreso['notebooklm']) {
                $puntos_obtenidos += 50;
            }
        }

        $porcentaje_general = $total_videos > 0 ? round(($puntos_obtenidos / $puntos_totales) * 100, 1) : 0;

        return [
            'porcentaje_general' => $porcentaje_general,
            'videos_completos' => $videos_completos,
            'puntos_obtenidos' => $puntos_obtenidos,
            'puntos_totales' => $puntos_totales,
            'total_videos' => $total_videos
        ];
    }

    public function obtenerProgresoPorMateria($videos)
    {
        $materias = [
            'estrategia',
            'habilidad_verbal',
            'habilidad_matematica',
            'biologia',
            'fisica',
            'quimica',
            'matematicas',
            'historia',
            'espanol',
            'formacion_civica',
            'geografia',
            'repaso'
        ];

        $progreso_materias = [];

        foreach ($materias as $materia) {
            $videos_materia = array_filter($videos, function ($video) use ($materia) {
                return $video['materia'] === $materia;
            });

            $total_videos = count($videos_materia);
            $videos_completos = 0;
            $puntos_obtenidos = 0;
            $puntos_totales = $total_videos * 100;

            foreach ($videos_materia as $video) {
                $progreso = $this->obtenerProgresoVideo($video['id']);
                if ($progreso['video'] && $progreso['notebooklm']) {
                    $videos_completos++;
                    $puntos_obtenidos += 100;
                } elseif ($progreso['video'] || $progreso['notebooklm']) {
                    $puntos_obtenidos += 50;
                }
            }

            $porcentaje = $total_videos > 0 ? round(($puntos_obtenidos / $puntos_totales) * 100, 1) : 0;

            $progreso_materias[$materia] = [
                'porcentaje' => $porcentaje,
                'videos_completos' => $videos_completos,
                'total_videos' => $total_videos,
                'puntos_obtenidos' => $puntos_obtenidos,
                'puntos_totales' => $puntos_totales
            ];
        }

        return $progreso_materias;
    }
}

// ===================== FUNCIONES PRINCIPALES =====================
function calcularDiasHasta($fecha_examen)
{
    $hoy = new DateTime();
    $examen = new DateTime($fecha_examen);
    $diferencia = $hoy->diff($examen);
    return $diferencia->days;
}

function determinarMateriaDesdeTitulo($titulo, $position)
{
    $titulo_lower = strtolower($titulo);

    // Estrategia (solo el video 0)
    if ($position === 0 || strpos($titulo_lower, 'introducción bio reto academy') !== false) {
        return 'estrategia';
    }

    // Habilidad Verbal (videos 1-5)
    if ($position >= 1 && $position <= 5 || strpos($titulo_lower, 'habilidad verbal') !== false) {
        return 'habilidad_verbal';
    }

    // Habilidad Matemática (videos 6-10)
    if (
        $position >= 6 && $position <= 10 ||
        strpos($titulo_lower, 'habilidad matemática') !== false ||
        strpos($titulo_lower, 'series numéricas') !== false ||
        strpos($titulo_lower, 'series espaciales') !== false ||
        strpos($titulo_lower, 'imaginación espacial') !== false ||
        strpos($titulo_lower, 'problemas de razonamiento') !== false ||
        strpos($titulo_lower, 'dominio completo habilidad matemática') !== false
    ) {
        return 'habilidad_matematica';
    }

    // Biología (videos 11-17)
    if ($position >= 11 && $position <= 17) {
        return 'biologia';
    }

    // Física (videos 18-24)
    if ($position >= 18 && $position <= 24) {
        return 'fisica';
    }

    // Química (videos 25-30)
    if ($position >= 25 && $position <= 30) {
        return 'quimica';
    }

    // Matemáticas (videos 31-39)
    if ($position >= 31 && $position <= 39) {
        return 'matematicas';
    }

    // Geometría (videos 40-44)
    if ($position >= 40 && $position <= 44) {
        return 'matematicas'; // Geometría es parte de matemáticas
    }

    // Historia (videos 45-58)
    if ($position >= 45 && $position <= 58) {
        return 'historia';
    }

    // Español (videos 59-68)
    if ($position >= 59 && $position <= 68) {
        return 'espanol';
    }

    // Formación Cívica (videos 69-76)
    if ($position >= 69 && $position <= 76) {
        return 'formacion_civica';
    }

    // Geografía (videos 77-86)
    if ($position >= 77 && $position <= 86) {
        return 'geografia';
    }

    // Repaso (videos 87-90)
    if ($position >= 87 && $position <= 90) {
        return 'repaso';
    }

    return 'estrategia';
}

function generarDescripcion($materia, $titulo, $position)
{
    $descripciones = [
        'estrategia' => 'Introducción al curso ECOEMS 2026 con estrategias inteligentes para maximizar tu puntaje.',
        'habilidad_verbal' => 'Desarrollo de habilidades de comprensión lectora, vocabulario y análisis de textos.',
        'habilidad_matematica' => 'Potencia tu razonamiento lógico-matemático para el examen de admisión.',
        'biologia' => 'Conocimientos esenciales de biología para el examen ECOEMS 2026.',
        'fisica' => 'Fundamentos de física aplicados a situaciones reales del examen.',
        'quimica' => 'Principios químicos y reacciones para el examen de admisión.',
        'matematicas' => 'Matemáticas avanzadas necesarias para el examen ECOEMS.',
        'historia' => 'Eventos históricos nacionales e internacionales para el examen.',
        'espanol' => 'Dominio del lenguaje español, gramática y redacción.',
        'formacion_civica' => 'Formación cívica y ética para ciudadanos responsables.',
        'geografia' => 'Conocimientos geográficos esenciales para el examen.',
        'repaso' => 'Repaso estratégico de todos los temas del examen ECOEMS 2026.'
    ];

    $base_desc = $descripciones[$materia] ?? "Contenido educativo para el examen ECOEMS 2026.";
    $numero_video = $position + 1;

    return "Video {$numero_video}: " . $base_desc;
}

// FUNCIÓN MODIFICADA: Todos los videos tienen 5 minutos
function determinarDuracion($position)
{
    // Todos los videos tienen 5 minutos
    return '5:00';
}

// FUNCIÓN CORREGIDA: URLs reales SIN verificación (para velocidad)
function buscarArchivosEnVideo($video_id)
{
    $base_url = 'https://cyberedumx.com/ecoems2026';

    // URLS REALES según tu estructura de carpetas
    $imagen_url = $base_url . "/videos/video" . $video_id . "/infografia.png";
    $pdf_url = $base_url . "/videos/video" . $video_id . "/presentacion.pdf";
    $audio_url = $base_url . "/videos/video" . $video_id . "/podcast.mp3";

    // Asumimos que todos los archivos existen (para mostrar siempre los botones)
    return [
        'imagen_url' => $imagen_url,
        'pdf_url' => $pdf_url,
        'audio_url' => $audio_url,
        'imagen_existe' => true,
        'pdf_existe' => true,
        'audio_existe' => true
    ];
}

function cargarVideosDesdeCSV($csv_file, $notebooklm_urls)
{
    $videos = [];

    if (file_exists($csv_file)) {
        if (($handle = fopen($csv_file, "r")) !== FALSE) {
            $firstRow = true;

            while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                if ($firstRow) {
                    $firstRow = false;
                    continue;
                }

                $csv_position = intval($data[0]) - 1;
                $titulo = isset($data[1]) ? trim($data[1]) : "Video " . ($csv_position + 1);
                $videoUrl = isset($data[2]) ? trim($data[2]) : '';
                $videoId = isset($data[3]) ? trim($data[3]) : '';
                $publishedAt = isset($data[4]) ? trim($data[4]) : '';
                $position = isset($data[5]) ? intval($data[5]) : $csv_position;

                if (empty($videoId) && !empty($videoUrl)) {
                    if (preg_match('/v=([a-zA-Z0-9_-]+)/', $videoUrl, $matches)) {
                        $videoId = $matches[1];
                    }
                }

                $materia = determinarMateriaDesdeTitulo($titulo, $position);
                $descripcion = generarDescripcion($materia, $titulo, $position);
                $duracion = determinarDuracion($position); // Ahora siempre será 5:00
                $archivos = buscarArchivosEnVideo($position);

                $titulo_display = str_replace(['**', '  '], ['', ' '], $titulo);
                $titulo_display = trim($titulo_display);

                $videos[] = [
                    'id' => $position,
                    'csv_id' => $csv_position,
                    'titulo' => $titulo_display,
                    'titulo_original' => $titulo,
                    'descripcion' => $descripcion,
                    'materia' => $materia,
                    'youtube_id' => $videoId,
                    'embed_url' => 'https://www.youtube.com/embed/' . $videoId . '?rel=0&showinfo=0&modestbranding=1',
                    'watch_url' => 'https://www.youtube.com/watch?v=' . $videoId,
                    'notebooklm' => $notebooklm_urls[$position] ?? "https://notebooklm.google.com/notebook/" . substr(md5($position), 0, 16),
                    'duracion' => $duracion, // 5:00 para todos
                    'thumbnail' => 'https://img.youtube.com/vi/' . $videoId . '/hqdefault.jpg',
                    'thumbnail_max' => 'https://img.youtube.com/vi/' . $videoId . '/maxresdefault.jpg',
                    'archivos' => $archivos,
                    'published_at' => $publishedAt,
                    'original_position' => $position,
                    'csv_position' => $csv_position + 1
                ];
            }
            fclose($handle);

            usort($videos, function ($a, $b) {
                return $a['id'] - $b['id'];
            });
        }
    }

    if (empty($videos)) {
        for ($i = 0; $i <= 90; $i++) {  // Cambiado a 90 videos
            $materia = determinarMateriaDesdeTitulo("Video " . ($i + 1), $i);
            $youtube_id = substr(md5($i), 0, 11);
            $archivos = buscarArchivosEnVideo($i);

            $videos[] = [
                'id' => $i,
                'csv_id' => $i,
                'titulo' => "Video " . ($i + 1) . " - " . ucfirst(str_replace('_', ' ', $materia)) . " ECOEMS 2026",
                'titulo_original' => "Video " . ($i + 1) . " - " . ucfirst(str_replace('_', ' ', $materia)),
                'descripcion' => generarDescripcion($materia, "Video " . ($i + 1), $i),
                'materia' => $materia,
                'youtube_id' => $youtube_id,
                'embed_url' => 'https://www.youtube.com/embed/' . $youtube_id . '?rel=0',
                'watch_url' => 'https://www.youtube.com/watch?v=' . $youtube_id,
                'notebooklm' => $notebooklm_urls[$i] ?? "https://notebooklm.google.com/notebook/" . substr(md5($i), 0, 16),
                'duracion' => determinarDuracion($i), // 5:00 para todos
                'thumbnail' => 'https://img.youtube.com/vi/' . $youtube_id . '/hqdefault.jpg',
                'thumbnail_max' => 'https://img.youtube.com/vi/' . $youtube_id . '/maxresdefault.jpg',
                'archivos' => $archivos,
                'published_at' => date('Y-m-d\TH:i:s\Z'),
                'original_position' => $i,
                'csv_position' => $i + 1
            ];
        }
    }

    return $videos;
}

// Cargar videos
$videos = cargarVideosDesdeCSV($config['csv_file'], $notebooklm_urls);
$total_videos = count($videos);

// Sistema de seguimiento
$seguimiento = SistemaSeguimiento::getInstance();
$estadisticas = $seguimiento->obtenerEstadisticasGenerales($videos);
$progreso_por_materia = $seguimiento->obtenerProgresoPorMateria($videos);

// Datos del dashboard
$dias_restantes = calcularDiasHasta($config['fecha_examen']);

// Materias con colores
$materias_dashboard = [
    'estrategia' => ['nombre' => 'Estrategia', 'color' => '#FF6B8B', 'icono' => 'fa-chess'],
    'habilidad_verbal' => ['nombre' => 'Habilidad Verbal', 'color' => '#4ECDC4', 'icono' => 'fa-comment-alt'],
    'habilidad_matematica' => ['nombre' => 'Habilidad Matemática', 'color' => '#FFD166', 'icono' => 'fa-brain'],
    'biologia' => ['nombre' => 'Biología', 'color' => '#06D6A0', 'icono' => 'fa-dna'],
    'fisica' => ['nombre' => 'Física', 'color' => '#118AB2', 'icono' => 'fa-atom'],
    'quimica' => ['nombre' => 'Química', 'color' => '#FF9E6D', 'icono' => 'fa-flask'],
    'matematicas' => ['nombre' => 'Matemáticas', 'color' => '#9D4EDD', 'icono' => 'fa-calculator'],
    'historia' => ['nombre' => 'Historia', 'color' => '#EF476F', 'icono' => 'fa-landmark'],
    'espanol' => ['nombre' => 'Español', 'color' => '#6A4C93', 'icono' => 'fa-book'],
    'formacion_civica' => ['nombre' => 'Formación Cívica', 'color' => '#3A86FF', 'icono' => 'fa-user-shield'],
    'geografia' => ['nombre' => 'Geografía', 'color' => '#1B9AAA', 'icono' => 'fa-globe-americas'],
    'repaso' => ['nombre' => 'Repaso Final', 'color' => '#FF006E', 'icono' => 'fa-sync-alt']
];

// Manejar acciones AJAX
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action'])) {
    header('Content-Type: application/json');

    switch ($_POST['action']) {
        case 'marcar_video':
            if (isset($_POST['video_id'])) {
                $seguimiento->marcarVideoVisto($_POST['video_id'], 'video');
                echo json_encode([
                    'success' => true,
                    'progreso' => $seguimiento->obtenerProgresoVideo($_POST['video_id'])
                ]);
            }
            break;

        case 'marcar_notebooklm':
            if (isset($_POST['video_id'])) {
                $seguimiento->marcarVideoVisto($_POST['video_id'], 'notebooklm');
                echo json_encode([
                    'success' => true,
                    'progreso' => $seguimiento->obtenerProgresoVideo($_POST['video_id'])
                ]);
            }
            break;

        default:
            echo json_encode(['success' => false, 'message' => 'Acción no válida']);
            break;
    }
    exit;
}
?>
<!DOCTYPE html>
<html lang="es-MX">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- SEO -->
    <title>CyberEduMX Dashboard - ECOEMS 2026 | Tu Progreso de Estudio</title>
    <meta name="description"
        content="Dashboard de estudio para el ECOEMS 2026. Realiza un seguimiento de tu progreso en los 91 videos, accede a NotebookLM y material de estudio.">
    <meta name="keywords" content="ECOEMS 2026, CyberEdu MX, BioReto Academy, dashboard educativo, seguimiento estudio">
    <meta name="author" content="CyberEdu MX">
    <link rel="canonical" href="https://cyberedumx.com/dashboard.php" />

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://cyberedumx.com/dashboard.php">
    <meta property="og:title" content="CyberEduMX Dashboard - ECOEMS 2026">
    <meta property="og:description" content="Tu plataforma de seguimiento para el ECOEMS 2026.">
    <meta property="og:image" content="https://cyberedumx.com/assets/og-dashboard.jpg">
    <meta property="og:locale" content="es_MX">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://cyberedumx.com/dashboard.php">
    <meta property="twitter:title" content="CyberEduMX Dashboard - ECOEMS 2026">
    <meta property="twitter:description" content="Tu plataforma de seguimiento para el ECOEMS 2026.">
    <meta property="twitter:image" content="https://cyberedumx.com/assets/og-dashboard.jpg">

    <!-- Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo $config['ga_id']; ?>"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());
        gtag('config', '<?php echo $config['ga_id']; ?>');
    </script>

    <!-- Fonts & Icons -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Tailwind Config -->
    <script>
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "cyber-blue": "#3B82F6",
                        "cyber-purple": "#8B5CF6",
                        "cyber-green": "#10B981",
                        "cyber-red": "#EF4444",
                        "cyber-orange": "#F59E0B",
                        "cyber-dark": "#0F172A",
                        "cyber-gray": "#1E293B"
                    },
                    fontFamily: {
                        "sans": ["Inter", "system-ui", "sans-serif"]
                    },
                    animation: {
                        'fade-in': 'fadeIn 0.5s ease-out',
                        'slide-in': 'slideIn 0.3s ease-out'
                    },
                    keyframes: {
                        fadeIn: {
                            '0%': { opacity: '0' },
                            '100%': { opacity: '1' }
                        },
                        slideIn: {
                            '0%': { transform: 'translateY(10px)', opacity: '0' },
                            '100%': { transform: 'translateY(0)', opacity: '1' }
                        }
                    }
                }
            }
        }
    </script>

    <!-- CSS Personalizado -->
    <style>
        .section {
            display: none;
            animation: fadeIn 0.3s ease-out;
        }

        .section.active {
            display: block;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        .video-player-container {
            position: relative;
            padding-bottom: 56.25%;
            height: 0;
            overflow: hidden;
            background: #000;
        }

        .video-player-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border: none;
        }

        .modal {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.95);
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 1000;
            opacity: 0;
            visibility: hidden;
            transition: opacity 0.3s, visibility 0.3s;
        }

        .modal.active {
            opacity: 1;
            visibility: visible;
        }

        .modal-content {
            max-width: 90%;
            max-height: 90%;
            background: #1E293B;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.5);
        }

        .close-modal {
            position: absolute;
            top: 20px;
            right: 20px;
            background: #3B82F6;
            color: white;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
            cursor: pointer;
            border: 2px solid rgba(255, 255, 255, 0.2);
        }

        .close-modal:hover {
            background: #2563EB;
        }

        .video-card {
            transition: all 0.3s ease;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .video-card:hover {
            transform: translateY(-4px);
            border-color: #3B82F6;
            box-shadow: 0 10px 30px rgba(59, 130, 246, 0.2);
        }

        .glass-effect {
            background: rgba(30, 41, 59, 0.7);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .audio-player {
            width: 100%;
            background: #0F172A;
            border-radius: 8px;
            padding: 16px;
            border: 1px solid #334155;
        }

        .audio-player audio {
            width: 100%;
            margin-top: 10px;
        }

        .pdf-viewer {
            width: 100%;
            height: 600px;
            border: none;
            border-radius: 8px;
            background: #0F172A;
        }

        .tab-button {
            padding: 10px 20px;
            background: #1E293B;
            border: none;
            color: #94A3B8;
            cursor: pointer;
            transition: all 0.3s;
            border-radius: 6px 6px 0 0;
        }

        .tab-button.active {
            background: #3B82F6;
            color: white;
        }

        .tab-content {
            display: none;
            padding: 20px;
            background: #1E293B;
            border-radius: 0 0 8px 8px;
            border: 1px solid #334155;
            border-top: none;
        }

        .tab-content.active {
            display: block;
            animation: fadeIn 0.3s ease-out;
        }
    </style>
</head>

<body class="dark bg-gradient-to-br from-cyber-dark via-gray-900 to-cyber-dark min-h-screen font-sans text-gray-200">
    <!-- NAVBAR -->
    <nav class="fixed top-0 w-full glass-effect shadow-xl z-50 py-3 border-b border-cyber-gray">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row justify-between items-center gap-4">
                <a href="#"
                    class="text-2xl md:text-3xl font-bold bg-gradient-to-r from-cyber-blue to-cyber-purple bg-clip-text text-transparent flex items-center gap-3">
                    <div
                        class="w-10 h-10 rounded-full bg-gradient-to-r from-cyber-blue to-cyber-purple flex items-center justify-center">
                        <i class="fas fa-graduation-cap text-white"></i>
                    </div>
                    <div>
                        <span>CyberEduMX</span>
                        <span class="text-sm font-normal text-cyber-green">ECOEMS 2026</span>
                    </div>
                </a>

                <div class="flex flex-wrap justify-center gap-2 md:gap-4">
                    <a href="#"
                        class="px-4 py-2 rounded-lg bg-cyber-blue/20 hover:bg-cyber-blue/30 transition-all flex items-center gap-2"
                        onclick="mostrarSeccion('dashboard')">
                        <i class="fas fa-tachometer-alt"></i>
                        <span>Dashboard</span>
                    </a>
                    <a href="/mi_progreso.php"
                        class="px-4 py-2 rounded-lg hover:bg-cyber-gray transition-all flex items-center gap-2">
                        <i class="fas fa-chart-line"></i>
                        <span>Mi Progreso</span>
                    </a>
                    <a href="#" class="px-4 py-2 rounded-lg hover:bg-cyber-gray transition-all flex items-center gap-2"
                        onclick="mostrarSeccion('modulos')">
                        <i class="fas fa-book-open"></i>
                        <span>Módulos</span>
                    </a>
                    <a href="https://cyberedumx.com/guias.html"
                        class="px-4 py-2 rounded-lg hover:bg-cyber-gray transition-all flex items-center gap-2">
                        <i class="fas fa-file-alt"></i>
                        <span>Guías</span>
                    </a>
                    <a href="https://cyberedumx.com/libro/manual_digital_ECOEMS.html"
                        class="px-4 py-2 rounded-lg bg-gradient-to-r from-cyber-green to-emerald-500 hover:from-cyber-green/80 hover:to-emerald-500/80 transition-all flex items-center gap-2 shadow-lg">
                        <i class="fas fa-book-open"></i>
                        <span>Manual Digital</span>
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- CONTENIDO PRINCIPAL -->
    <main class="pt-20 md:pt-24 pb-12">
        <div class="container mx-auto px-4">
            <!-- DASHBOARD SECTION -->
            <div id="dashboard-section" class="section active">
                <!-- HEADER -->
                <div class="glass-effect rounded-2xl p-6 md:p-8 mb-8 shadow-2xl border border-cyber-gray">
                    <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-6 mb-6">
                        <div>
                            <h1 class="text-3xl md:text-4xl font-bold text-white mb-3">¡Bienvenido a CyberEduMX!</h1>
                            <p class="text-lg text-gray-400">Sistema de seguimiento 50/50 para el ECOEMS 2026</p>
                        </div>
                        <div class="text-center md:text-right">
                            <div class="text-4xl md:text-5xl font-bold text-cyber-green"><?php echo $dias_restantes; ?>
                            </div>
                            <div class="text-gray-400 text-sm">DÍAS RESTANTES</div>
                        </div>
                    </div>

                    <!-- ESTADÍSTICAS -->
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-4 md:gap-6 mb-8">
                        <div class="glass-effect rounded-xl p-4 md:p-6">
                            <div class="flex items-center gap-4">
                                <div
                                    class="w-12 h-12 rounded-lg bg-gradient-to-r from-cyber-green to-emerald-500 flex items-center justify-center">
                                    <i class="fas fa-chart-line text-white text-xl"></i>
                                </div>
                                <div>
                                    <div class="text-2xl md:text-3xl font-bold text-white">
                                        <?php echo $estadisticas['porcentaje_general']; ?>%
                                    </div>
                                    <div class="text-gray-400 text-sm">PROGRESO TOTAL</div>
                                </div>
                            </div>
                        </div>

                        <div class="glass-effect rounded-xl p-4 md:p-6">
                            <div class="flex items-center gap-4">
                                <div
                                    class="w-12 h-12 rounded-lg bg-gradient-to-r from-cyber-blue to-blue-500 flex items-center justify-center">
                                    <i class="fas fa-play-circle text-white text-xl"></i>
                                </div>
                                <div>
                                    <div class="text-2xl md:text-3xl font-bold text-white">
                                        <?php echo $estadisticas['videos_completos']; ?>/<?php echo $total_videos; ?>
                                    </div>
                                    <div class="text-gray-400 text-sm">VIDEOS 100%</div>
                                </div>
                            </div>
                        </div>

                        <div class="glass-effect rounded-xl p-4 md:p-6">
                            <div class="flex items-center gap-4">
                                <div
                                    class="w-12 h-12 rounded-lg bg-gradient-to-r from-cyber-purple to-purple-500 flex items-center justify-center">
                                    <i class="fas fa-star text-white text-xl"></i>
                                </div>
                                <div>
                                    <div class="text-2xl md:text-3xl font-bold text-white">
                                        <?php echo $estadisticas['puntos_obtenidos']; ?>/<?php echo $estadisticas['puntos_totales']; ?>
                                    </div>
                                    <div class="text-gray-400 text-sm">PUNTOS TOTALES</div>
                                </div>
                            </div>
                        </div>

                        <div class="glass-effect rounded-xl p-4 md:p-6">
                            <div class="flex items-center gap-4">
                                <div
                                    class="w-12 h-12 rounded-lg bg-gradient-to-r from-cyber-orange to-orange-500 flex items-center justify-center">
                                    <i class="fas fa-fire text-white text-xl"></i>
                                </div>
                                <div>
                                    <div class="text-2xl md:text-3xl font-bold text-white">7</div>
                                    <div class="text-gray-400 text-sm">DÍAS DE RACHA</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- CURSO COMPLEMENTARIO UDEMY -->
                    <div
                        class="mt-8 p-6 bg-gradient-to-r from-purple-900/30 to-blue-900/30 rounded-2xl border border-purple-700/30">
                        <div class="flex flex-col md:flex-row items-center justify-between gap-6">
                            <div class="flex-1">
                                <div class="flex items-center gap-3 mb-3">
                                    <div
                                        class="w-10 h-10 rounded-full bg-gradient-to-r from-purple-600 to-blue-600 flex items-center justify-center">
                                        <i class="fas fa-graduation-cap text-white"></i>
                                    </div>
                                    <span
                                        class="px-3 py-1 bg-purple-800/50 text-purple-300 rounded-full text-sm font-semibold">
                                        CURSO COMPLEMENTARIO
                                    </span>
                                </div>
                                <h3 class="text-xl font-bold text-white mb-2">ECOEMS 2026: 128 Preguntas Resueltas con
                                    NotebookLM</h3>
                                <p class="text-gray-300 mb-4">Profundiza tu preparación con preguntas prácticas
                                    resueltas y análisis detallados usando IA.</p>
                                <div class="flex flex-wrap gap-2 mb-4">
                                    <div class="flex items-center gap-1 text-sm text-gray-300">
                                        <i class="fas fa-check-circle text-green-400"></i>
                                        <span>128 preguntas resueltas</span>
                                    </div>
                                    <div class="flex items-center gap-1 text-sm text-gray-300">
                                        <i class="fas fa-brain text-blue-400"></i>
                                        <span>Integración con NotebookLM</span>
                                    </div>
                                    <div class="flex items-center gap-1 text-sm text-gray-300">
                                        <i class="fas fa-video text-red-400"></i>
                                        <span>Videos explicativos</span>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center">
                                <a href="<?php echo $config['udemy_url']; ?>" target="_blank"
                                    class="inline-flex items-center gap-2 px-6 py-3 bg-gradient-to-r from-purple-600 to-blue-600 text-white rounded-xl font-semibold hover:opacity-90 transition-opacity shadow-lg shadow-purple-900/30">
                                    <i class="fab fa-udemy"></i>
                                    <span>Acceder al Curso</span>
                                </a>
                                <p class="text-gray-400 text-sm mt-2">Enlace directo a Udemy</p>
                            </div>
                        </div>
                    </div>

                    <!-- BOTONES -->
                    <div class="flex flex-wrap justify-center gap-4 mt-6">
                        <button onclick="mostrarSeccion('modulos')"
                            class="px-6 py-3 bg-gradient-to-r from-cyber-blue to-cyber-purple text-white rounded-xl font-semibold hover:opacity-90 shadow-lg shadow-blue-900/30 flex items-center gap-2">
                            <i class="fas fa-play"></i>
                            <span>Continuar Estudiando</span>
                        </button>
                        <a href="https://cyberedumx.com/guias.html"
                            class="px-6 py-3 bg-gradient-to-r from-cyber-orange to-orange-600 text-white rounded-xl font-semibold hover:opacity-90 shadow-lg shadow-orange-900/30 flex items-center gap-2 text-center">
                            <i class="fas fa-book-open"></i>
                            <span>Guías de Estudio</span>
                        </a>
                    </div>
                </div>

                <!-- MÓDULOS -->
                <h2 class="text-2xl md:text-3xl font-bold mb-6 text-white flex items-center gap-3">
                    <i class="fas fa-th-large text-cyber-blue"></i>
                    Módulos del Curso
                </h2>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                    <?php foreach ($materias_dashboard as $id => $materia):
                        $progreso_materia = $progreso_por_materia[$id] ?? [
                            'porcentaje' => 0,
                            'videos_completos' => 0,
                            'total_videos' => 0
                        ];

                        $videos_materia = array_filter($videos, function ($video) use ($id) {
                            return $video['materia'] === $id;
                        });
                        $total_videos_materia = count($videos_materia);
                        ?>
                        <div class="glass-effect rounded-xl p-5 cursor-pointer hover:border-cyber-blue transition-all"
                            onclick="cargarVideosMateria('<?php echo $id; ?>')">
                            <div class="flex items-center gap-4 mb-4">
                                <div class="w-12 h-12 rounded-lg flex items-center justify-center text-xl"
                                    style="background: <?php echo $materia['color']; ?>20; color: <?php echo $materia['color']; ?>;">
                                    <i class="fas <?php echo $materia['icono']; ?>"></i>
                                </div>
                                <div class="flex-1">
                                    <h3 class="text-lg font-bold text-white"><?php echo $materia['nombre']; ?></h3>
                                    <div class="flex items-center gap-2 text-sm text-gray-400">
                                        <span><?php echo $total_videos_materia; ?> videos</span>
                                        <span>•</span>
                                        <span><?php echo $progreso_materia['videos_completos']; ?> completos</span>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-4">
                                <div class="flex justify-between text-sm text-gray-400 mb-1">
                                    <span>Progreso</span>
                                    <span class="font-semibold"
                                        style="color: <?php echo $materia['color']; ?>;"><?php echo $progreso_materia['porcentaje']; ?>%</span>
                                </div>
                                <div class="w-full bg-cyber-gray rounded-full h-2 overflow-hidden">
                                    <div class="h-2 rounded-full transition-all duration-500"
                                        style="width: <?php echo $progreso_materia['porcentaje']; ?>%; background: linear-gradient(90deg, <?php echo $materia['color']; ?>, <?php echo $materia['color']; ?>80);">
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <!-- MÓDULOS SECTION -->
            <div id="modulos-section" class="section">
                <div
                    class="flex flex-col md:flex-row justify-between items-start md:items-center gap-6 mb-8 pb-6 border-b border-cyber-gray">
                    <button onclick="mostrarSeccion('dashboard')"
                        class="flex items-center gap-2 px-4 py-2 bg-cyber-blue/20 text-white rounded-lg hover:bg-cyber-blue/30 transition-all">
                        <i class="fas fa-arrow-left"></i>
                        Volver al Dashboard
                    </button>
                    <div class="text-2xl md:text-3xl font-bold text-white flex items-center gap-3">
                        <i class="fas fa-th-large text-cyber-blue"></i>
                        Todos los Módulos
                    </div>
                    <div class="text-center md:text-right">
                        <div class="text-3xl font-bold text-cyber-green">
                            <?php echo $estadisticas['porcentaje_general']; ?>%
                        </div>
                        <div class="text-gray-400 text-sm">Progreso General</div>
                    </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6" id="modulos-container">
                </div>
            </div>

            <!-- VIDEOS POR MATERIA SECTION -->
            <div id="videos-section" class="section">
                <div
                    class="flex flex-col md:flex-row justify-between items-start md:items-center gap-6 mb-8 pb-6 border-b border-cyber-gray">
                    <button onclick="mostrarSeccion('modulos')"
                        class="flex items-center gap-2 px-4 py-2 bg-cyber-blue/20 text-white rounded-lg hover:bg-cyber-blue/30 transition-all">
                        <i class="fas fa-arrow-left"></i>
                        Volver a Módulos
                    </button>
                    <div class="text-2xl md:text-3xl font-bold text-white flex items-center gap-3" id="videos-title">
                    </div>
                    <div class="text-center md:text-right">
                        <div class="text-3xl font-bold text-cyber-green" id="videos-progress-value">0%</div>
                        <div class="text-gray-400 text-sm" id="videos-progress-label">0/0 completos</div>
                    </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6" id="videos-container">
                </div>
            </div>

            <!-- DETALLE DE VIDEO SECTION -->
            <div id="video-detail-section" class="section">
                <div
                    class="flex flex-col md:flex-row justify-between items-start md:items-center gap-6 mb-8 pb-6 border-b border-cyber-gray">
                    <button onclick="volverAVideosMateria()"
                        class="flex items-center gap-2 px-4 py-2 bg-cyber-blue/20 text-white rounded-lg hover:bg-cyber-blue/30 transition-all">
                        <i class="fas fa-arrow-left"></i>
                        Volver a Videos
                    </button>
                    <div class="text-xl md:text-2xl font-bold text-white truncate flex-1" id="video-detail-title">
                        Cargando...</div>
                    <div class="text-center md:text-right">
                        <div class="text-3xl font-bold text-cyber-green" id="video-detail-progress">0%</div>
                        <div class="text-gray-400 text-sm">Progreso</div>
                    </div>
                </div>

                <div id="video-detail-container"></div>
            </div>
        </div>
    </main>

    <!-- MODALES -->
    <div id="modal-infografia" class="modal">
        <div class="close-modal" onclick="cerrarModal('infografia')">
            <i class="fas fa-times"></i>
        </div>
        <div class="modal-content">
            <div class="p-4 border-b border-cyber-gray bg-cyber-dark">
                <h3 class="text-xl font-bold text-white" id="modal-infografia-title">Infografía</h3>
            </div>
            <div class="p-4">
                <img id="modal-infografia-imagen" src="" alt="Infografía"
                    class="w-full h-auto max-h-[70vh] object-contain">
            </div>
        </div>
    </div>

    <div id="modal-pdf" class="modal">
        <div class="close-modal" onclick="cerrarModal('pdf')">
            <i class="fas fa-times"></i>
        </div>
        <div class="modal-content w-full max-w-6xl">
            <div class="p-4 border-b border-cyber-gray bg-cyber-dark">
                <h3 class="text-xl font-bold text-white" id="modal-pdf-title">Presentación PDF</h3>
            </div>
            <div class="p-4">
                <iframe id="modal-pdf-frame" src="" class="pdf-viewer"></iframe>
            </div>
        </div>
    </div>

    <!-- FOOTER -->
    <footer class="glass-effect border-t border-cyber-gray py-8 mt-12">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row justify-between items-center gap-8">
                <div class="text-center md:text-left">
                    <div
                        class="text-2xl font-bold bg-gradient-to-r from-cyber-blue to-cyber-purple bg-clip-text text-transparent mb-2">
                        CyberEduMX</div>
                    <p class="text-gray-400">ECOEMS 2026 - Sistema de Preparación Integral</p>
                    <p class="text-gray-500 text-sm mt-2">© <?php echo date('Y'); ?> CyberEdu MX & BioReto Academy</p>
                </div>

                <div class="text-center md:text-right">
                    <div class="mb-4">
                        <span
                            class="inline-block px-3 py-1 bg-purple-800/50 text-purple-300 rounded-full text-sm font-semibold mb-2">
                            CURSO COMPLEMENTARIO
                        </span>
                        <h4 class="text-lg font-bold text-white mb-2">ECOEMS 2026: 128 Preguntas Resueltas</h4>
                        <p class="text-gray-400 text-sm mb-3">Profundiza con preguntas prácticas y NotebookLM</p>
                    </div>
                    <a href="<?php echo $config['udemy_url']; ?>" target="_blank"
                        class="px-6 py-3 bg-gradient-to-r from-purple-600 to-blue-600 text-white rounded-xl font-semibold inline-block hover:opacity-90 transition-opacity shadow-lg shadow-purple-900/30">
                        <i class="fab fa-udemy mr-2"></i> Acceder al Curso en Udemy
                    </a>
                </div>
            </div>
        </div>
    </footer>

    <!-- SCRIPTS -->
    <script>
        // VARIABLES GLOBALES
        let videosData = <?php echo json_encode($videos); ?>;
        let materiasData = <?php echo json_encode($materias_dashboard); ?>;
        let progresoMateriasData = <?php echo json_encode($progreso_por_materia); ?>;
        let materiaActual = null;
        let videoActual = null;
        let audioPlayer = null;

        // FUNCIONES DE NAVEGACIÓN
        function mostrarSeccion(seccion) {
            document.querySelectorAll('.section').forEach(s => s.classList.remove('active'));
            setTimeout(() => {
                document.getElementById(seccion + '-section').classList.add('active');
                window.scrollTo({ top: 0, behavior: 'smooth' });
            }, 50);
        }

        function cargarModulos() {
            const container = document.getElementById('modulos-container');
            let html = '';

            for (const [id, materia] of Object.entries(materiasData)) {
                const progreso = progresoMateriasData[id] || { porcentaje: 0, videos_completos: 0, total_videos: 0 };
                const videosMateria = videosData.filter(v => v.materia === id);
                const totalVideos = videosMateria.length;

                html += `
                    <div class="glass-effect rounded-xl p-5 cursor-pointer hover:border-cyber-blue transition-all"
                         onclick="cargarVideosMateria('${id}')">
                        <div class="flex items-center gap-4 mb-4">
                            <div class="w-12 h-12 rounded-lg flex items-center justify-center text-xl" style="background: ${materia.color}20; color: ${materia.color};">
                                <i class="fas ${materia.icono}"></i>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-lg font-bold text-white">${materia.nombre}</h3>
                                <div class="flex items-center gap-2 text-sm text-gray-400">
                                    <span>${totalVideos} videos</span>
                                    <span>•</span>
                                    <span>${progreso.videos_completos || 0} completos</span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="mb-4">
                            <div class="flex justify-between text-sm text-gray-400 mb-1">
                                <span>Progreso</span>
                                <span class="font-semibold" style="color: ${materia.color};">${progreso.porcentaje}%</span>
                            </div>
                            <div class="w-full bg-cyber-gray rounded-full h-2 overflow-hidden">
                                <div class="h-2 rounded-full transition-all duration-500" style="width: ${progreso.porcentaje}%; background: linear-gradient(90deg, ${materia.color}, ${materia.color}80);"></div>
                            </div>
                        </div>
                    </div>
                `;
            }

            container.innerHTML = html;
        }

        function cargarVideosMateria(materiaId) {
            materiaActual = materiaId;
            const materia = materiasData[materiaId];
            const videosMateria = videosData.filter(v => v.materia === materiaId);

            // Calcular progreso
            let puntosObtenidos = 0;
            let puntosTotales = videosMateria.length * 100;
            let videosCompletos = 0;

            videosMateria.forEach(video => {
                const progresoVideo = obtenerProgresoVideo(video.id);
                if (progresoVideo.video && progresoVideo.notebooklm) {
                    videosCompletos++;
                    puntosObtenidos += 100;
                } else if (progresoVideo.video || progresoVideo.notebooklm) {
                    puntosObtenidos += 50;
                }
            });

            const porcentajeMateria = videosMateria.length > 0 ? Math.round((puntosObtenidos / puntosTotales) * 100) : 0;

            document.getElementById('videos-title').innerHTML = `
                <i class="fas ${materia.icono}" style="color: ${materia.color};"></i>
                ${materia.nombre} (${videosMateria.length} videos)
            `;

            document.getElementById('videos-progress-value').textContent = porcentajeMateria + '%';
            document.getElementById('videos-progress-label').textContent =
                videosCompletos + '/' + videosMateria.length + ' completos';

            const container = document.getElementById('videos-container');
            let html = '';

            videosMateria.forEach(video => {
                const progresoVideo = obtenerProgresoVideo(video.id);
                const porcentajeVideo = (progresoVideo.video ? 50 : 0) + (progresoVideo.notebooklm ? 50 : 0);

                html += `
                    <div class="video-card glass-effect rounded-xl overflow-hidden cursor-pointer"
                         onclick="cargarDetalleVideo(${video.id})">
                        <div class="relative h-48 overflow-hidden">
                            <img src="${video.thumbnail}" alt="${video.titulo}" 
                                 class="w-full h-full object-cover hover:scale-105 transition-transform duration-300">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent"></div>
                            <div class="absolute top-4 right-4 bg-black/80 text-white text-xs px-2 py-1 rounded">
                                ${video.duracion}
                            </div>
                            <div class="absolute bottom-4 left-4 flex items-center gap-2">
                                <div class="w-10 h-10 bg-gradient-to-r from-cyber-blue to-cyber-purple rounded-full flex items-center justify-center text-white">
                                    <i class="fas fa-play"></i>
                                </div>
                                <div class="text-white text-sm font-semibold">Video ${video.original_position}</div>
                            </div>
                        </div>
                        
                        <div class="p-5">
                            <h3 class="text-base font-bold text-white mb-3 line-clamp-2" style="min-height: 3rem;">
                                ${video.titulo}
                            </h3>
                            
                            <div class="flex justify-between items-center mb-3">
                                <div class="flex items-center gap-2">
                                    <div class="w-6 h-6 rounded-full ${progresoVideo.video ? 'bg-green-500' : 'bg-gray-600'} flex items-center justify-center text-xs text-white">
                                        <i class="fas ${progresoVideo.video ? 'fa-check' : 'fa-play'}"></i>
                                    </div>
                                    <div class="w-6 h-6 rounded-full ${progresoVideo.notebooklm ? 'bg-green-500' : 'bg-gray-600'} flex items-center justify-center text-xs text-white">
                                        <i class="fas ${progresoVideo.notebooklm ? 'fa-check' : 'fa-book'}"></i>
                                    </div>
                                </div>
                                <div class="text-sm font-semibold ${porcentajeVideo >= 100 ? 'text-green-400' : porcentajeVideo >= 50 ? 'text-yellow-400' : 'text-red-400'}">
                                    ${porcentajeVideo}%
                                </div>
                            </div>
                            
                            <div class="w-full bg-cyber-gray rounded-full h-2">
                                <div class="h-2 rounded-full" style="width: ${porcentajeVideo}%; background: linear-gradient(90deg, ${materia.color}, ${materia.color}80);"></div>
                            </div>
                        </div>
                    </div>
                `;
            });

            container.innerHTML = html;
            mostrarSeccion('videos');
        }

        function cargarDetalleVideo(videoId) {
            videoActual = videoId;
            const video = videosData.find(v => v.id == videoId);
            const materia = materiasData[video.materia];
            const progresoVideo = obtenerProgresoVideo(videoId);
            const porcentajeVideo = (progresoVideo.video ? 50 : 0) + (progresoVideo.notebooklm ? 50 : 0);
            const archivos = video.archivos;

            // RASTREO AUTOMÁTICO
            if (window.Tracking) {
                window.Tracking.trackVideo(videoId, video.materia);
            }

            document.getElementById('video-detail-title').textContent = video.titulo;
            document.getElementById('video-detail-progress').textContent = porcentajeVideo + '%';

            // Crear pestañas para los recursos
            const recursosHTML = `
                <div class="mb-8">
                    <div class="flex flex-wrap gap-2 mb-4">
                        <button class="tab-button ${archivos.imagen_existe ? 'active' : ''}" onclick="mostrarTab('infografia')" ${!archivos.imagen_existe ? 'disabled' : ''}>
                            <i class="fas fa-image mr-2"></i>Infografía
                        </button>
                        <button class="tab-button" onclick="mostrarTab('pdf')" ${!archivos.pdf_existe ? 'disabled' : ''}>
                            <i class="fas fa-file-pdf mr-2"></i>PDF
                        </button>
                        <button class="tab-button" onclick="mostrarTab('audio')" ${!archivos.audio_existe ? 'disabled' : ''}>
                            <i class="fas fa-podcast mr-2"></i>Podcast
                        </button>
                        <button class="tab-button" onclick="mostrarTab('notebooklm')">
                            <i class="fas fa-book mr-2"></i>NotebookLM
                        </button>
                    </div>
                    
                    <div class="tab-content ${archivos.imagen_existe ? 'active' : ''}" id="tab-infografia">
                        ${archivos.imagen_existe ? `
                            <div class="text-center">
                                <img src="${archivos.imagen_url}" alt="Infografía" 
                                     class="w-full max-w-2xl mx-auto rounded-lg shadow-lg cursor-pointer hover:opacity-90 transition-opacity"
                                     onclick="mostrarInfografia('${archivos.imagen_url}', '${video.titulo}')">
                                <p class="text-gray-400 mt-4">Haz clic en la imagen para verla en tamaño completo</p>
                            </div>
                        ` : '<p class="text-gray-400 text-center">Infografía no disponible</p>'}
                    </div>
                    
                    <div class="tab-content" id="tab-pdf">
                        ${archivos.pdf_existe ? `
                            <div class="text-center">
                                <iframe src="${archivos.pdf_url}" class="pdf-viewer"></iframe>
                                <div class="mt-4">
                                    <a href="${archivos.pdf_url}" target="_blank" 
                                       class="inline-flex items-center gap-2 px-4 py-2 bg-cyber-blue text-white rounded-lg hover:bg-blue-600 transition-colors">
                                        <i class="fas fa-download"></i> Descargar PDF
                                    </a>
                                </div>
                            </div>
                        ` : '<p class="text-gray-400 text-center">PDF no disponible</p>'}
                    </div>
                    
                    <div class="tab-content" id="tab-audio">
                        ${archivos.audio_existe ? `
                            <div class="audio-player">
                                <div class="flex items-center gap-3 mb-4">
                                    <div class="w-12 h-12 rounded-full bg-gradient-to-r from-cyber-purple to-purple-500 flex items-center justify-center">
                                        <i class="fas fa-podcast text-white text-xl"></i>
                                    </div>
                                    <div>
                                        <h4 class="text-lg font-bold text-white">Podcast del Video</h4>
                                        <p class="text-gray-400 text-sm">Escucha el contenido mientras viajas o descansas</p>
                                    </div>
                                </div>
                                <audio id="audio-player" controls class="w-full">
                                    <source src="${archivos.audio_url}" type="audio/mpeg">
                                    Tu navegador no soporta el elemento de audio.
                                </audio>
                                <div class="mt-4 text-center">
                                    <a href="${archivos.audio_url}" download 
                                       class="inline-flex items-center gap-2 px-4 py-2 bg-cyber-purple text-white rounded-lg hover:bg-purple-600 transition-colors">
                                        <i class="fas fa-download"></i> Descargar MP3
                                    </a>
                                </div>
                            </div>
                        ` : '<p class="text-gray-400 text-center">Podcast no disponible</p>'}
                    </div>
                    
                    <div class="tab-content" id="tab-notebooklm">
                        <div class="text-center p-8">
                            <div class="w-20 h-20 rounded-full bg-gradient-to-r from-cyber-orange to-orange-500 flex items-center justify-center mx-auto mb-6">
                                <i class="fas fa-book text-white text-2xl"></i>
                            </div>
                            <h4 class="text-xl font-bold text-white mb-3">NotebookLM de Google</h4>
                            <p class="text-gray-400 mb-6">Accede al asistente de IA para estudiar este tema interactivamente</p>
                            <a href="${video.notebooklm}" target="_blank" 
                               class="inline-flex items-center gap-2 px-6 py-3 bg-gradient-to-r from-cyber-orange to-orange-500 text-white rounded-lg font-semibold hover:opacity-90 transition-opacity">
                                <i class="fas fa-external-link-alt"></i> Abrir NotebookLM
                            </a>
                        </div>
                    </div>
                </div>
            `;

            const container = document.getElementById('video-detail-container');
            container.innerHTML = `
                <div class="glass-effect rounded-2xl overflow-hidden shadow-2xl border border-cyber-gray">
                    <div class="p-6 border-b border-cyber-gray bg-gradient-to-r from-${video.materia === 'estrategia' ? 'pink' : video.materia === 'habilidad_verbal' ? 'teal' : 'blue'}-900/20 to-transparent">
                        <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-4">
                            <div class="flex-1 min-w-0">
                                <h2 class="text-2xl font-bold text-white mb-3">${video.titulo}</h2>
                                <div class="flex flex-wrap items-center gap-2">
                                    <div class="px-3 py-1 rounded-full text-sm" style="background: ${materia.color}20; color: ${materia.color};">
                                        <i class="fas ${materia.icono} mr-2"></i> ${materia.nombre}
                                    </div>
                                    <div class="px-3 py-1 bg-cyber-gray rounded-full text-sm text-gray-300">
                                        Video ${video.original_position}
                                    </div>
                                    <div class="px-3 py-1 bg-cyber-gray rounded-full text-sm text-gray-300">
                                        <i class="far fa-clock mr-1"></i> ${video.duracion}
                                    </div>
                                </div>
                            </div>
                            <div class="text-center mt-4 md:mt-0">
                                <div class="text-4xl font-bold ${porcentajeVideo >= 100 ? 'text-green-400' : porcentajeVideo >= 50 ? 'text-yellow-400' : 'text-red-400'}">
                                    ${porcentajeVideo}%
                                </div>
                                <div class="text-gray-400 text-sm">Progreso Total</div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="p-6">
                        <!-- VIDEO -->
                        <div class="mb-8">
                            <h3 class="text-xl font-bold text-white mb-4 flex items-center gap-2">
                                <i class="fab fa-youtube text-red-500"></i> Video del Curso
                            </h3>
                            <div class="video-player-container rounded-xl overflow-hidden shadow-xl">
                                <iframe src="${video.embed_url}" 
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                                        allowfullscreen
                                        loading="lazy">
                                </iframe>
                            </div>
                            <div class="mt-4 flex justify-between items-center text-sm text-gray-400">
                                <span>Publicado: ${new Date(video.published_at).toLocaleDateString('es-MX')}</span>
                                <a href="${video.watch_url}" target="_blank" class="text-cyber-blue hover:text-blue-400 transition-colors">
                                    <i class="fab fa-youtube mr-1"></i> Ver en YouTube
                                </a>
                            </div>
                        </div>
                        
                        <!-- SEGUIMIENTO -->
                        <div class="glass-effect rounded-xl p-6 border border-cyber-gray mb-8">
                            <h3 class="text-xl font-bold text-white mb-6 text-center">Seguimiento 50/50</h3>
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                                <div class="text-center p-5 bg-cyber-gray/50 rounded-xl">
                                    <div class="w-16 h-16 rounded-xl flex items-center justify-center text-2xl mx-auto mb-4" style="background: rgba(239, 68, 68, 0.2); color: #EF4444;">
                                        <i class="fab fa-youtube"></i>
                                    </div>
                                    <div class="text-3xl font-bold mb-2 ${progresoVideo.video ? 'text-green-400' : 'text-red-400'}">
                                        ${progresoVideo.video ? '50' : '0'}/50
                                    </div>
                                    <div class="text-gray-400">Puntos Video</div>
                                </div>
                                
                                <div class="text-center p-5 bg-cyber-gray/50 rounded-xl">
                                    <div class="w-16 h-16 rounded-xl flex items-center justify-center text-2xl mx-auto mb-4" style="background: ${materia.color}20; color: ${materia.color};">
                                        <i class="fas fa-book"></i>
                                    </div>
                                    <div class="text-3xl font-bold mb-2 ${progresoVideo.notebooklm ? 'text-green-400' : 'text-red-400'}">
                                        ${progresoVideo.notebooklm ? '50' : '0'}/50
                                    </div>
                                    <div class="text-gray-400">Puntos NotebookLM</div>
                                </div>
                                
                                <div class="text-center p-5 bg-cyber-gray/50 rounded-xl">
                                    <div class="w-16 h-16 rounded-xl flex items-center justify-center text-2xl mx-auto mb-4" style="background: rgba(16, 185, 129, 0.2); color: #10B981;">
                                        <i class="fas fa-chart-line"></i>
                                    </div>
                                    <div class="text-3xl font-bold mb-2 ${porcentajeVideo >= 100 ? 'text-green-400' : porcentajeVideo >= 50 ? 'text-yellow-400' : 'text-red-400'}">
                                        ${porcentajeVideo}%
                                    </div>
                                    <div class="text-gray-400 mb-2">Progreso Total</div>
                                    <div class="text-sm ${progresoVideo.video ? 'text-green-400' : 'text-red-400'} mb-1">
                                        <i class="fas ${progresoVideo.video ? 'fa-check-circle' : 'fa-times-circle'} mr-1"></i> Video
                                    </div>
                                    <div class="text-sm ${progresoVideo.notebooklm ? 'text-green-400' : 'text-red-400'}">
                                        <i class="fas ${progresoVideo.notebooklm ? 'fa-check-circle' : 'fa-times-circle'} mr-1"></i> NotebookLM
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- RECURSOS -->
                        <h3 class="text-xl font-bold text-white mb-6">Recursos Adicionales</h3>
                        ${recursosHTML}
                        
                        <!-- DESCRIPCIÓN -->
                        <div class="glass-effect rounded-xl p-6 border border-cyber-gray mt-8">
                            <h4 class="text-lg font-bold text-white mb-3">Descripción del Video</h4>
                            <p class="text-gray-300 leading-relaxed">${video.descripcion}</p>
                        </div>
                    </div>
                </div>
            `;

            // Inicializar audio player
            audioPlayer = document.getElementById('audio-player');

            // NO MOSTRAR AUTOMÁTICAMENTE LA INFOGRAFÍA - ELIMINADA ESTA LÍNEA

            mostrarSeccion('video-detail');
        }

        function volverAVideosMateria() {
            if (materiaActual) {
                cargarVideosMateria(materiaActual);
            } else {
                mostrarSeccion('modulos');
            }
        }

        // FUNCIONES DE PESTAÑAS
        function mostrarTab(tabId) {
            // Ocultar todas las pestañas
            document.querySelectorAll('.tab-content').forEach(tab => {
                tab.classList.remove('active');
            });
            document.querySelectorAll('.tab-button').forEach(button => {
                button.classList.remove('active');
            });

            // Mostrar la pestaña seleccionada
            document.getElementById('tab-' + tabId).classList.add('active');
            document.querySelector(`.tab-button[onclick="mostrarTab('${tabId}')"]`).classList.add('active');
        }

        // FUNCIONES DE MODALES
        function mostrarInfografia(url, titulo) {
            document.getElementById('modal-infografia-title').textContent = titulo;
            document.getElementById('modal-infografia-imagen').src = url;
            document.getElementById('modal-infografia').classList.add('active');
            document.body.style.overflow = 'hidden';
        }

        function mostrarPDF(url, titulo) {
            document.getElementById('modal-pdf-title').textContent = titulo;
            document.getElementById('modal-pdf-frame').src = url;
            document.getElementById('modal-pdf').classList.add('active');
            document.body.style.overflow = 'hidden';
        }

        function cerrarModal(tipo) {
            document.getElementById('modal-' + tipo).classList.remove('active');
            document.body.style.overflow = 'auto';

            // Detener audio si está reproduciendo
            if (tipo === 'audio' && audioPlayer) {
                audioPlayer.pause();
            }
        }

        // Cerrar modales con ESC
        document.addEventListener('keydown', function (event) {
            if (event.key === 'Escape') {
                document.querySelectorAll('.modal.active').forEach(modal => {
                    modal.classList.remove('active');
                });
                document.body.style.overflow = 'auto';
            }
        });

        // Cerrar modales haciendo clic fuera
        document.querySelectorAll('.modal').forEach(modal => {
            modal.addEventListener('click', function (event) {
                if (event.target === this) {
                    this.classList.remove('active');
                    document.body.style.overflow = 'auto';
                }
            });
        });

        // FUNCIONES DE SEGUIMIENTO
        function obtenerProgresoVideo(videoId) {
            const localStorageKey = 'progreso_video_' + videoId;
            const savedProgress = localStorage.getItem(localStorageKey);

            if (savedProgress) {
                return JSON.parse(savedProgress);
            }

            const sessionProgress = <?php echo json_encode($_SESSION['progreso_videos'] ?? []); ?>[videoId];
            if (sessionProgress) {
                return sessionProgress;
            }

            return {
                video: false,
                notebooklm: false
            };
        }

        function guardarProgresoVideo(videoId, progreso) {
            const localStorageKey = 'progreso_video_' + videoId;
            localStorage.setItem(localStorageKey, JSON.stringify(progreso));
        }

        function actualizarUIProgreso(videoId, progreso) {
            const porcentajeVideo = (progreso.video ? 50 : 0) + (progreso.notebooklm ? 50 : 0);
            document.getElementById('video-detail-progress').textContent = porcentajeVideo + '%';

            // Actualizar el estado de los indicadores de puntos
            const puntosVideo = document.querySelector('.puntos-video-status');
            const puntosLM = document.querySelector('.puntos-lm-status');
            // ... (podemos añadir más lógica de UI aquí si es necesario)
        }

        function mostrarNotificacion(mensaje, tipo) {
            const notification = document.createElement('div');
            notification.className = `fixed top-4 right-4 z-50 px-4 py-3 rounded-lg shadow-lg animate-slide-in ${tipo === 'success' ? 'bg-green-900/90 border border-green-700' : 'bg-blue-900/90 border border-blue-700'
                }`;
            notification.innerHTML = `
                <div class="flex items-center gap-3 text-white">
                    <i class="fas ${tipo === 'success' ? 'fa-check-circle' : 'fa-info-circle'}"></i>
                    <span>${mensaje}</span>
                </div>
            `;

            document.body.appendChild(notification);

            setTimeout(() => {
                notification.remove();
            }, 3000);
        }

        // INICIALIZACIÓN
        document.addEventListener('DOMContentLoaded', function () {
            cargarModulos();

            // Verificar parámetros de URL
            const urlParams = new URLSearchParams(window.location.search);
            const videoParam = urlParams.get('video');
            const materiaParam = urlParams.get('materia');

            if (videoParam !== null) {
                const videoId = parseInt(videoParam);
                if (!isNaN(videoId) && videoId >= 0 && videoId < videosData.length) {
                    cargarDetalleVideo(videoId);
                }
            } else if (materiaParam !== null && materiasData[materiaParam]) {
                cargarVideosMateria(materiaParam);
            }
        });
    </script>
    <!-- WhatsApp Floating Button -->
    <style>
        .whatsapp-float {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: #25d366;
            color: #FFF;
            border-radius: 50px;
            text-align: center;
            font-size: 30px;
            box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.2);
            z-index: 9999;
            width: 60px;
            height: 60px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .whatsapp-float:hover {
            background-color: #128c7e;
            color: #FFF;
            transform: scale(1.1);
        }

        .whatsapp-tooltip {
            position: fixed;
            bottom: 30px;
            right: 90px;
            background-color: #333;
            color: #fff;
            padding: 8px 15px;
            border-radius: 10px;
            font-size: 14px;
            visibility: hidden;
            opacity: 0;
            transition: opacity 0.3s;
            z-index: 9999;
            pointer-events: none;
            white-space: nowrap;
        }

        .whatsapp-float:hover+.whatsapp-tooltip {
            visibility: visible;
            opacity: 1;
        }

        @media screen and (max-width: 768px) {
            .whatsapp-float {
                width: 50px;
                height: 50px;
                font-size: 25px;
                bottom: 15px;
                right: 15px;
            }

            .whatsapp-tooltip {
                display: none;
            }
        }
    </style>

    <!-- Chatbot Anime Widget Component -->
    <div id="chatbot-anime-container" style="position: fixed; bottom: 90px; right: 20px; z-index: 9999;">
        <!-- Botón flotante anime -->
        <button id="chatbot-toggle-btn" style="background: linear-gradient(45deg, #FF6B8B, #EF476F);
                       color: white; border: none; border-radius: 50%;
                       width: 60px; height: 60px; font-size: 24px;
                       cursor: pointer; box-shadow: 0 8px 25px rgba(255, 107, 139, 0.5);
                       transition: all 0.3s; display: flex; align-items: center;
                       justify-content: center; position: relative;" class="focus-visible"
            aria-label="Abrir chatbot anime" aria-expanded="false">
            <i class="fas fa-robot"></i>
            <style>
                @keyframes pulse-green {
                    0% {
                        transform: scale(1);
                        box-shadow: 0 0 0 0 rgba(6, 214, 160, 0.7);
                    }

                    70% {
                        transform: scale(1.2);
                        box-shadow: 0 0 0 10px rgba(6, 214, 160, 0);
                    }

                    100% {
                        transform: scale(1);
                        box-shadow: 0 0 0 0 rgba(6, 214, 160, 0);
                    }
                }
            </style>
            <span id="chatbot-notification" style="position: absolute; top: -5px; right: -5px;
                   background: #06D6A0; color: white; border-radius: 50%;
                   width: 22px; height: 22px; font-size: 11px; display: flex;
                   align-items: center; justify-content: center; border: 2px solid white;
                   animation: pulse-green 2s infinite;">
                !
            </span>
        </button>

        <!-- Ventana del chat -->
        <div id="chatbot-window" style="display: none; width: 350px; height: 500px;
                    background: rgba(26, 26, 46, 0.98); border-radius: 20px;
                    border: 3px solid #FF6B8B; box-shadow: 0 15px 40px rgba(0,0,0,0.6);
                    backdrop-filter: blur(10px); overflow: hidden; position: absolute;
                    bottom: 80px; right: 0; flex-direction: column;">

            <!-- Header -->
            <div
                style="background: linear-gradient(45deg, #1A1A2E, #16213E);
                        padding: 15px; border-bottom: 2px solid #FF6B8B; display: flex; justify-content: space-between; align-items: center;">
                <div style="display: flex; align-items: center; gap: 10px;">
                    <i class="fas fa-robot" style="color: #4ECDC4;"></i>
                    <span style="color: white; font-weight: bold; font-family: 'Comic Neue', cursive;">CyberBot
                        Anime</span>
                </div>
                <button id="chatbot-close-btn" style="background: none; border: none; color: white; cursor: pointer;">
                    <i class="fas fa-times"></i>
                </button>
            </div>

            <!-- Mensajes -->
            <div id="chatbot-messages"
                style="flex: 1; overflow-y: auto; padding: 15px; display: flex; flex-direction: column; gap: 10px;">
                <div class="bot-msg"
                    style="background: rgba(255,255,255,0.1); padding: 10px; border-radius: 10px; border-left: 3px solid #06D6A0; align-self: flex-start; max-width: 85%; color: white;">
                    🎌 ¡Konnichiwa! Soy CyberBot. <br><br>🚀 **¡PROMO ESPECIAL!** Domina el ECOEMS 2026 (128 preguntas
                    resueltas) por solo **$50 MXN**. <br><br>¿Te gustaría aprovechar esta oferta?
                </div>
            </div>

            <!-- Input -->
            <div style="padding: 15px; background: rgba(0,0,0,0.2); display: flex; gap: 10px;">
                <input type="text" id="chatbot-input" placeholder="Pregúntame algo..."
                    style="flex: 1; background: rgba(255,255,255,0.1); border: 2px solid #9D4EDD; border-radius: 20px; padding: 8px 15px; color: white; outline: none;">
                <button id="chatbot-send-btn"
                    style="background: #EF476F; border: none; border-radius: 50%; width: 40px; height: 40px; color: white; cursor: pointer;">
                    <i class="fas fa-paper-plane"></i>
                </button>
            </div>
        </div>
    </div>

    <script>
        (function () {
            const chatToggle = document.getElementById('chatbot-toggle-btn');
            const chatWindow = document.getElementById('chatbot-window');
            const chatClose = document.getElementById('chatbot-close-btn');
            const chatInput = document.getElementById('chatbot-input');
            const chatSend = document.getElementById('chatbot-send-btn');
            const chatMessages = document.getElementById('chatbot-messages');

            chatToggle.onclick = () => {
                const isVisible = chatWindow.style.display === 'flex';
                chatWindow.style.display = isVisible ? 'none' : 'flex';
                if (!isVisible) chatInput.focus();
            };

            chatClose.onclick = () => chatWindow.style.display = 'none';

            async function sendMessage() {
                const text = chatInput.value.trim();
                if (!text) return;

                // Add User Message
                const uMsg = document.createElement('div');
                uMsg.style.cssText = 'background: rgba(255,107,139,0.1); padding: 10px; border-radius: 10px; border-right: 3px solid #FF6B8B; align-self: flex-end; max-width: 85%; color: white; word-break: break-word;';
                uMsg.textContent = text;
                chatMessages.appendChild(uMsg);
                chatInput.value = '';
                chatMessages.scrollTop = chatMessages.scrollHeight;

                try {
                    const response = await fetch('https://cyberedumx.com/ecoems2026/chatbot/chatbot.php', {
                        method: 'POST',
                        headers: { 'Content-Type': 'application/json' },
                        body: JSON.stringify({ message: text })
                    });
                    const data = await response.json();

                    // Add Bot Message
                    const bMsg = document.createElement('div');
                    bMsg.style.cssText = 'background: rgba(255,255,255,0.1); padding: 10px; border-radius: 10px; border-left: 3px solid #4ECDC4; align-self: flex-start; max-width: 85%; color: white; white-space: pre-wrap; word-break: break-word;';
                    bMsg.innerHTML = data.response.replace(/\n/g, '<br>');
                    chatMessages.appendChild(bMsg);
                    chatMessages.scrollTop = chatMessages.scrollHeight;

                    if (data.actions && data.actions.some(a => a.type === 'abrir_whatsapp')) {
                        const waLink = document.createElement('a');
                        waLink.href = "https://wa.me/525523269241?text=Hola! Vengo del chatbot de la web y tengo dudas.";
                        waLink.target = "_blank";
                        waLink.textContent = "👉 Hablar por WhatsApp";
                        waLink.style.cssText = "display: block; margin-top: 10px; color: #06D6A0; font-weight: bold; text-decoration: underline;";
                        bMsg.appendChild(waLink);
                    }

                } catch (e) {
                    console.error(e);
                }
            }

            chatSend.onclick = sendMessage;
            chatInput.onkeypress = (e) => { if (e.key === 'Enter') sendMessage(); };
        })();
    </script>

    <a href="https://wa.me/525523269241?text=Hola%20CyberEduMX!%20Me%20interesa%20m%C3%A1s%20informaci%C3%B3n%20sobre%20el%20curso%20ECOEMS%202026."
        class="whatsapp-float" target="_blank">
        <i class="fab fa-whatsapp"></i>
    </a>
    <div class="whatsapp-tooltip">¿Tienes dudas? ¡Escríbenos!</div>
    <script src="tracking.js"></script>
</body>

</html>