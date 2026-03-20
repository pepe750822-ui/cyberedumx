<?php
// ecoems2026.php - VERSIÓN ANIME PARA JÓVENES DE 14 AÑOS
// VERSIÓN 9.0 - CON CHATBOT ANIME INTEGRADO

error_reporting(E_ALL);
ini_set('display_errors', 1);

// ===================== CONFIGURACIÓN =====================
$config = [
    'nombre_plataforma' => 'ECOEMS 2026 - ¡APRENDE CON ANIME!',
    'version' => 'Anime 9.0',
    'fecha_examen' => '2026-06-15',
    'autor' => 'CyberEdu MX & BioReto Academy',
    'udemy_url' => 'https://www.udemy.com/course/ecoems2026conia/?referralCode=B2F05026985A2564FAAC',
    'ga_id' => 'G-88JWPSS4QL',
    'whatsapp' => '55 2326 9241',
    'email' => 'JoseLuisGlez@cyberedumx.com',
    'sitio_principal' => 'https://cyberedumx.com',
    'csv_file' => 'youtube-playlist-links-PLG1K4pAhMRgJRmanxPmX3AeAMpLS-sXlG-2025-12-18.csv',
    'simulador_completo' => 'https://cyberedumx.com/ecoems2026/simuladores/simulador_completo.php',
    'chatbot_api' => 'https://cyberedumx.com/ecoems2026/chatbot/chatbot.php',
    'theme' => 'anime'
];

// ===================== RUTAS ABSOLUTAS =====================
define('BASE_PATH', $_SERVER['DOCUMENT_ROOT'] . '/');
define('WEB_BASE', 'https://cyberedumx.com/');

// ===================== URLs REALES DE NOTEBOOKLM =====================
$notebooklm_urls = [
    // Estrategia (Video 0)
    0 => "https://notebooklm.google.com/notebook/c703574a-ebf5-4586-b1ea-bec4b944718f",
    2 => "https://notebooklm.google.com/notebook/1f40c8a5-0ea0-40b6-b1d8-91cc223304e4",
    3 => "https://notebooklm.google.com/notebook/081ab961-4c44-43ab-a68c-c5eadfe7980b",
    4 => "https://notebooklm.google.com/notebook/ca387d8c-a743-48a9-922d-26373e948715",
    5 => "https://notebooklm.google.com/notebook/e79cca86-53d6-4294-90cc-b6c4c41cf0b4",

    // Habilidad matemática (Videos 6-10)
    6 => "https://notebooklm.google.com/notebook/be3c5227-90c1-4d21-b7b4-e3013cf1b3ca",
    7 => "https://notebooklm.google.com/notebook/cc877779-605d-4472-8c93-6a8f9fc690a3",
    8 => "https://notebooklm.google.com/notebook/6cfefedf-5339-4ae9-8798-a6b902af5559",
    9 => "https://notebooklm.google.com/notebook/ef823779-3e15-4471-9b11-385ad0663a3c",
    10 => "https://notebooklm.google.com/notebook/ba64e657-f1e5-4739-97be-8d543f35a565",

    // Biología (Videos 11-17)
    11 => "https://notebooklm.google.com/notebook/e726391d-fe58-4b13-b446-c6533fb18042",
    12 => "https://notebooklm.google.com/notebook/7d4a39a1-f8e6-4d1d-a4c5-228934121408",
    13 => "https://notebooklm.google.com/notebook/451ea89a-b294-4b2f-9376-92b821ef5817",
    14 => "https://notebooklm.google.com/notebook/bf3a28c2-448a-4652-be08-61435e88a8c2",
    15 => "https://notebooklm.google.com/notebook/059967f8-229b-48a2-93cf-77b733b7ecf5",
    16 => "https://notebooklm.google.com/notebook/ae23c70d-857f-4435-83b8-ed960551b126",
    17 => "https://notebooklm.google.com/notebook/44a5a00c-0df3-4e76-913d-91901187ec31",

    // Física (Videos 18-24)
    18 => "https://notebooklm.google.com/notebook/720a82a4-23d3-4fe0-9261-66b02748838b",
    19 => "https://notebooklm.google.com/notebook/77273295-83cf-4164-9887-750c44321201",
    20 => "https://notebooklm.google.com/notebook/fc7112a2-14af-43b5-950d-9d7a080515d3",
    21 => "https://notebooklm.google.com/notebook/be28d280-3531-44cb-a6c5-717dc21b2a51",
    22 => "https://notebooklm.google.com/notebook/0c3109a3-4859-437b-bdb1-ea830c765c2f",
    23 => "https://notebooklm.google.com/notebook/1b19afdc-aad1-4e9b-b99f-834b2bc2ab32",
    24 => "https://notebooklm.google.com/notebook/9d09f7cf-bf62-40c3-b910-c533e1be4776",

    // Química (Videos 25-30)
    25 => "https://notebooklm.google.com/notebook/ac61a2d3-8012-4dbb-b5d6-ebf9a10d1eae",
    26 => "https://notebooklm.google.com/notebook/1b3ea2a2-3054-407c-a428-5d709211c5a9",
    27 => "https://notebooklm.google.com/notebook/1f866752-38bf-4a3e-8875-88a4c4bd2d51",
    28 => "https://notebooklm.google.com/notebook/638d67e0-93c1-46ee-9999-73abcd0f954b",
    29 => "https://notebooklm.google.com/notebook/a4f90bbb-2b3b-4fcf-9ad0-aa4647e10566",
    30 => "https://notebooklm.google.com/notebook/4ad04b91-d573-42a5-88a1-94e16f7b6c56",

    // Matemáticas (Videos 31-44)
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
    42 => "https://notebooklm.google.com/notebook/e3aaf0e6-4ce6-49b5-9064-ba2392a77142",
    43 => "https://notebooklm.google.com/notebook/6dd560f5-02aa-451f-9c5c-9f13344f09bf",
    44 => "https://notebooklm.google.com/notebook/e730c8ff-f4d0-48fb-b26a-7bc7381bf082",

    // Historia (Videos 45-58)
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

    // Español (Videos 59-68)
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

    // Formación cívica (Videos 69-76)
    69 => "https://notebooklm.google.com/notebook/97b5e050-e817-4e5e-8109-20437d928b06?authuser=2",
    70 => "https://notebooklm.google.com/notebook/e62bb360-3aa6-4d9b-ba3a-137823a1d244",
    71 => "https://notebooklm.google.com/notebook/a9e8e17f-1de3-4d6c-81b6-bb114e0f9aae?authuser=1",
    72 => "https://notebooklm.google.com/notebook/8a8e756a-528a-4aa0-b961-868c83c4b4e1?authuser=2",
    73 => "https://notebooklm.google.com/notebook/06445714-fd9c-492d-9414-f481edfd77a8?authuser=2",
    74 => "https://notebooklm.google.com/notebook/06445714-fd9c-492d-9414-f481edfd77a8?authuser=2",
    75 => "https://notebooklm.google.com/notebook/3c581b0e-3fe4-45d5-bb5d-5a8a53c31559?authuser=2",
    76 => "https://notebooklm.google.com/notebook/1213542f-637e-4f51-b6a5-c21446451c8e?authuser=2",

    // Geografía (Videos 77-86)
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

    // Repaso (Videos 87-90)
    87 => "https://notebooklm.google.com/notebook/373ae22b-35f0-4234-b0d8-bf77f072312e?authuser=2",
    88 => "https://notebooklm.google.com/notebook/c157bddd-48d6-403e-b64c-d8b4ecfa4735?authuser=2",
    89 => "https://notebooklm.google.com/notebook/49423274-2ae1-4c7b-9f6d-be236728e224?authuser=2",
    90 => "https://notebooklm.google.com/notebook/94e8963d-4d80-4564-8c9a-1b13717371ba?authuser=2"
];

// ===================== VARIABLES SEO =====================
$current_url = "https://cyberedumx.com" . (isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : '');
$meta_description = "¡Aprende para el ECOEMS 2026 con estilo anime! 91 videos divertidos, simulador tipo videojuego y material descargable. Especial para jóvenes de 14 años.";
$meta_keywords = "ECOEMS 2026 anime, CyberEdu MX, examen preparatoria México, videos anime educativo, jóvenes 14 años, anime educativo";

// ===================== FUNCIONES =====================
function calcularDiasHasta($fecha)
{
    $hoy = new DateTime();
    $examen = new DateTime($fecha);
    $diferencia = $hoy->diff($examen);
    return $diferencia->days;
}

function extraerIdYouTube($url)
{
    $patron = '/(?:youtube\.com\/(?:[^\/]+\/.+\/|(?:v|e(?:mbed)?)\/|.*[?&]v=)|youtu\.be\/)([^"&?\/\s]{11})/';
    preg_match($patron, $url, $matches);
    return isset($matches[1]) ? $matches[1] : 'dQw4w9WgXcQ';
}

// ===================== FUNCIÓN MEJORADA PARA BUSCAR ARCHIVOS =====================
function buscarArchivosEnVideo($numero)
{
    $resultado = [
        'pdf' => null,
        'imagen' => null,
        'audio' => null,
        'pdf_url' => null,
        'imagen_url' => null,
        'audio_url' => null
    ];

    // RUTA FÍSICA en el servidor
    $carpeta_video = BASE_PATH . "ecoems2026/videos/video{$numero}/";

    // URL PÚBLICA para el navegador
    $url_base = WEB_BASE . "ecoems2026/videos/video{$numero}/";

    // Nombres de archivos esperados
    $archivos_esperados = [
        'infografia' => ['infografia.png', 'infografia.jpg', 'infografia.jpeg', 'infografia.gif', 'infografia.webp'],
        'presentacion' => ['presentacion.pdf', 'material.pdf', 'apuntes.pdf', 'contenido.pdf'],
        'podcast' => ['podcast.mp3', 'audio.mp3', 'explicacion.mp3', 'podcast.m4a', 'audio.m4a']
    ];

    if (is_dir($carpeta_video)) {
        // Obtener lista de archivos
        $archivos_existentes = scandir($carpeta_video);

        // DEBUG: Mostrar archivos encontrados
        error_log("Video {$numero} - Archivos en carpeta: " . implode(", ", $archivos_existentes));

        // Buscar infografía
        foreach ($archivos_esperados['infografia'] as $nombre_img) {
            if (in_array($nombre_img, $archivos_existentes)) {
                $ruta_fisica = $carpeta_video . $nombre_img;
                if (is_file($ruta_fisica) && is_readable($ruta_fisica)) {
                    $resultado['imagen'] = $ruta_fisica;
                    $resultado['imagen_url'] = $url_base . $nombre_img;
                    error_log("Video {$numero} - Imagen encontrada: {$nombre_img}");
                    break;
                }
            }
        }

        // Buscar PDF
        foreach ($archivos_esperados['presentacion'] as $nombre_pdf) {
            if (in_array($nombre_pdf, $archivos_existentes)) {
                $ruta_fisica = $carpeta_video . $nombre_pdf;
                if (is_file($ruta_fisica) && is_readable($ruta_fisica)) {
                    $resultado['pdf'] = $ruta_fisica;
                    $resultado['pdf_url'] = $url_base . $nombre_pdf;
                    error_log("Video {$numero} - PDF encontrado: {$nombre_pdf}");
                    break;
                }
            }
        }

        // Buscar audio
        foreach ($archivos_esperados['podcast'] as $nombre_audio) {
            if (in_array($nombre_audio, $archivos_existentes)) {
                $ruta_fisica = $carpeta_video . $nombre_audio;
                if (is_file($ruta_fisica) && is_readable($ruta_fisica)) {
                    $resultado['audio'] = $ruta_fisica;
                    $resultado['audio_url'] = $url_base . $nombre_audio;
                    error_log("Video {$numero} - Audio encontrado: {$nombre_audio}");
                    break;
                }
            }
        }

    } else {
        error_log("ADVERTENCIA: Carpeta no existe: " . $carpeta_video);
    }

    return $resultado;
}

function limpiarTitulo($titulo)
{
    $titulo = preg_replace('/\*{1,2}(.*?)\*{1,2}/', '$1', $titulo);
    $titulo = preg_replace('/[^\x20-\x7E\x{00C0}-\x{00FF}\x{0100}-\x{017F}]/u', '', $titulo);
    $titulo = trim($titulo);
    return $titulo;
}

// ===================== FUNCIÓN PARA LEER VIDEOS =====================
function leerCSVVideos($archivo_csv, $notebooklm_urls)
{
    $videos = [];

    if (($handle = fopen($archivo_csv, 'r')) !== FALSE) {
        $encabezados = fgetcsv($handle, 1000, ',');

        while (($fila = fgetcsv($handle, 1000, ',')) !== FALSE) {
            if (count($fila) < count($encabezados)) {
                $fila = array_pad($fila, count($encabezados), '');
            }

            $video = array_combine($encabezados, $fila);

            if (isset($video['videoId']) && isset($video['title'])) {
                $numero = isset($video['position']) ? (int) $video['position'] : 0;
                $titulo = limpiarTitulo($video['title']);
                $youtube_id = $video['videoId'];

                $materia = determinarMateria($numero);
                $duracion = determinarDuracion($numero);

                // Usar URL real de NotebookLM si existe
                $notebooklm_url = isset($notebooklm_urls[$numero]) ? $notebooklm_urls[$numero] :
                    "https://notebooklm.google.com/notebook/" . substr(md5($youtube_id), 0, 16);

                $archivos = buscarArchivosEnVideo($numero);

                $videos[] = [
                    'id' => $numero,
                    'titulo' => $titulo,
                    'descripcion' => generarDescripcion($materia, $numero),
                    'materia' => $materia,
                    'youtube_id' => $youtube_id,
                    'embed_url' => 'https://www.youtube.com/embed/' . $youtube_id . '?rel=0',
                    'watch_url' => 'https://www.youtube.com/watch?v=' . $youtube_id,
                    'notebooklm' => $notebooklm_url,
                    'duracion' => $duracion,
                    'archivos' => [
                        'pdf' => $archivos['pdf_url'],
                        'imagen' => $archivos['imagen_url'],
                        'audio' => $archivos['audio_url'],
                        'pdf_fisico' => $archivos['pdf'],
                        'imagen_fisica' => $archivos['imagen'],
                        'audio_fisico' => $archivos['audio']
                    ]
                ];
            }
        }
        fclose($handle);
    }

    usort($videos, function ($a, $b) {
        return $a['id'] <=> $b['id'];
    });

    return $videos;
}

function determinarMateria($numero)
{
    if ($numero == 0)
        return 'estrategia';
    if ($numero >= 1 && $numero <= 5)
        return 'habilidad_verbal';
    if ($numero >= 6 && $numero <= 10)
        return 'habilidad_matematica';
    if ($numero >= 11 && $numero <= 17)
        return 'biologia';
    if ($numero >= 18 && $numero <= 24)
        return 'fisica';
    if ($numero >= 25 && $numero <= 30)
        return 'quimica';
    if ($numero >= 31 && $numero <= 44)
        return 'matematicas';
    if ($numero >= 45 && $numero <= 58)
        return 'historia';
    if ($numero >= 59 && $numero <= 68)
        return 'espanol';
    if ($numero >= 69 && $numero <= 76)
        return 'formacion_civica';
    if ($numero >= 77 && $numero <= 86)
        return 'geografia';
    if ($numero >= 87 && $numero <= 90)
        return 'repaso';

    return 'repaso';
}

function determinarDuracion($numero)
{
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

function generarDescripcion($materia, $numero)
{
    $descripciones = [
        'estrategia' => '¡Comienza tu aventura anime! Aprende el método épico para dominar el examen.',
        'habilidad_verbal' => '¡Nivel 1: Habilidad Verbal! Mejora tu comprensión como un héroe de anime.',
        'habilidad_matematica' => '¡Nivel 2: Lógica Matemática! Resuelve problemas como un genio anime.',
        'biologia' => '¡Nivel 3: Biología! Descubre los secretos de la vida como un científico anime.',
        'fisica' => '¡Nivel 4: Física! Domina las leyes del universo en estilo anime.',
        'quimica' => '¡Nivel 5: Química! Experimenta con elementos como un alquimista anime.',
        'matematicas' => '¡Nivel 6: Matemáticas Avanzadas! Conquista fórmulas como un maestro anime.',
        'historia' => '¡Nivel 7: Historia! Viaja en el tiempo con estilo anime.',
        'espanol' => '¡Nivel 8: Español! Domina el lenguaje como un poeta anime.',
        'formacion_civica' => '¡Nivel 9: Formación Cívica! Conviértete en un ciudadano héroe anime.',
        'geografia' => '¡Nivel 10: Geografía! Explora el mundo en modo anime.',
        'repaso' => '¡Nivel Final: Repaso Épico! Prepárate para la batalla final del examen.'
    ];

    return $descripciones[$materia] ?? "¡Video anime educativo número {$numero} para el ECOEMS 2026!";
}

// ===================== CARGAR 91 VIDEOS DESDE CSV =====================
$archivo_csv = $config['csv_file'];
$videos = [];

if (file_exists($archivo_csv)) {
    $videos = leerCSVVideos($archivo_csv, $notebooklm_urls);
    $total_videos = count($videos);

    if ($total_videos < 91) {
        for ($i = $total_videos; $i <= 90; $i++) {
            $archivos = buscarArchivosEnVideo($i);

            // Usar URL real de NotebookLM si existe
            $notebooklm_url = isset($notebooklm_urls[$i]) ? $notebooklm_urls[$i] :
                "https://notebooklm.google.com/notebook/" . substr(md5($i), 0, 16);

            $videos[] = [
                'id' => $i,
                'titulo' => "¡Video {$i} - ECOEMS 2026 Anime Style!",
                'descripcion' => generarDescripcion(determinarMateria($i), $i),
                'materia' => determinarMateria($i),
                'youtube_id' => 'dQw4w9WgXcQ',
                'embed_url' => 'https://www.youtube.com/embed/dQw4w9WgXcQ?rel=0',
                'watch_url' => 'https://www.youtube.com/watch?v=dQw4w9WgXcQ',
                'notebooklm' => $notebooklm_url,
                'duracion' => determinarDuracion($i),
                'archivos' => [
                    'pdf' => $archivos['pdf_url'],
                    'imagen' => $archivos['imagen_url'],
                    'audio' => $archivos['audio_url'],
                    'pdf_fisico' => $archivos['pdf'],
                    'imagen_fisica' => $archivos['imagen'],
                    'audio_fisico' => $archivos['audio']
                ]
            ];
        }
        $total_videos = 91;
    }
} else {
    for ($i = 0; $i <= 90; $i++) {
        $archivos = buscarArchivosEnVideo($i);

        // Usar URL real de NotebookLM si existe
        $notebooklm_url = isset($notebooklm_urls[$i]) ? $notebooklm_urls[$i] :
            "https://notebooklm.google.com/notebook/" . substr(md5($i), 0, 16);

        $videos[] = [
            'id' => $i,
            'titulo' => "¡Video {$i} - ECOEMS 2026 Anime Style!",
            'descripcion' => generarDescripcion(determinarMateria($i), $i),
            'materia' => determinarMateria($i),
            'youtube_id' => 'dQw4w9WgXcQ',
            'embed_url' => 'https://www.youtube.com/embed/dQw4w9WgXcQ?rel=0',
            'watch_url' => 'https://www.youtube.com/watch?v=dQw4w9WgXcQ',
            'notebooklm' => $notebooklm_url,
            'duracion' => determinarDuracion($i),
            'archivos' => [
                'pdf' => $archivos['pdf_url'],
                'imagen' => $archivos['imagen_url'],
                'audio' => $archivos['audio_url'],
                'pdf_fisico' => $archivos['pdf'],
                'imagen_fisica' => $archivos['imagen'],
                'audio_fisico' => $archivos['audio']
            ]
        ];
    }
    $total_videos = 91;
}

$dias_restantes = calcularDiasHasta($config['fecha_examen']);

// ===================== MATERIAS CON TEMA ANIME =====================
$materias = [
    'estrategia' => [
        'nombre' => '¡ESTRATEGIA!',
        'color' => '#FF6B8B',
        'icono' => 'fa-gamepad',
        'descripcion' => 'Estrategia anime épica'
    ],
    'habilidad_verbal' => [
        'nombre' => 'HABILIDAD VERBAL',
        'color' => '#4ECDC4',
        'icono' => 'fa-comment-dots',
        'descripcion' => 'Comprensión nivel anime'
    ],
    'habilidad_matematica' => [
        'nombre' => 'HABILIDAD MAT.',
        'color' => '#FFD166',
        'icono' => 'fa-brain',
        'descripcion' => 'Razonamiento superpoder'
    ],
    'biologia' => [
        'nombre' => 'BIOLOGÍA',
        'color' => '#06D6A0',
        'icono' => 'fa-dna',
        'descripcion' => 'Ciencias biológicas anime'
    ],
    'fisica' => [
        'nombre' => 'FÍSICA',
        'color' => '#118AB2',
        'icono' => 'fa-atom',
        'descripcion' => 'Fuerzas y energía anime'
    ],
    'quimica' => [
        'nombre' => 'QUÍMICA',
        'color' => '#FF9E6D',
        'icono' => 'fa-flask',
        'descripcion' => 'Alquimia moderna anime'
    ],
    'matematicas' => [
        'nombre' => 'MATEMÁTICAS',
        'color' => '#9D4EDD',
        'icono' => 'fa-calculator',
        'descripcion' => 'Matemáticas nivel pro'
    ],
    'historia' => [
        'nombre' => 'HISTORIA',
        'color' => '#EF476F',
        'icono' => 'fa-hourglass-half',
        'descripcion' => 'Historia en anime'
    ],
    'espanol' => [
        'nombre' => 'ESPAÑOL',
        'color' => '#6A4C93',
        'icono' => 'fa-book-open',
        'descripcion' => 'Lengua y literatura anime'
    ],
    'formacion_civica' => [
        'nombre' => 'FORMACIÓN CÍVICA',
        'color' => '#3A86FF',
        'icono' => 'fa-user-shield',
        'descripcion' => 'Ciudadanía heroica'
    ],
    'geografia' => [
        'nombre' => 'GEOGRAFÍA',
        'color' => '#1B9AAA',
        'icono' => 'fa-globe-americas',
        'descripcion' => 'Aventura geográfica'
    ],
    'repaso' => [
        'nombre' => 'REPASO FINAL',
        'color' => '#FF006E',
        'icono' => 'fa-swords',
        'descripcion' => 'Batalla final anime'
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

// Contar archivos encontrados
$archivos_encontrados = [
    'imagenes' => 0,
    'pdfs' => 0,
    'audios' => 0
];

foreach ($videos as $video) {
    if ($video['archivos']['imagen'])
        $archivos_encontrados['imagenes']++;
    if ($video['archivos']['pdf'])
        $archivos_encontrados['pdfs']++;
    if ($video['archivos']['audio'])
        $archivos_encontrados['audios']++;
}
?>
<!DOCTYPE html>
<html lang="es-MX">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>ECOEMS 2026: Temario Completo, Guía y Simulador | CyberEdu MX</title>

    <!-- META TAGS SEO -->
    <meta name="description"
        content="Domina el ECOEMS 2026 con 91 videos, temario oficial simplificado y simulador tipo examen. Prepárate gratis para el ingreso a preparatoria con CyberEdu MX.">
    <meta name="keywords"
        content="Temario ECOEMS 2026, Guía ECOEMS 2026, Registro ECOEMS, COMIPEMS vs ECOEMS, Simulador ECOEMS gratis">
    <meta name="author" content="CyberEdu MX">

    <!-- OPEN GRAPH TAGS -->
    <meta property="og:title" content="ECOEMS 2026 Anime Style - 91 Videos Divertidos">
    <meta property="og:description" content="<?php echo htmlspecialchars($meta_description, ENT_QUOTES, 'UTF-8'); ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo $current_url; ?>">
    <meta property="og:image" content="https://cyberedumx.com/assets/og-ecoems.jpg">
    <meta property="og:locale" content="es_MX">

    <!-- TWITTER CARD -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="ECOEMS 2026 Anime Style - 91 Videos Divertidos">
    <meta name="twitter:description" content="<?php echo htmlspecialchars($meta_description, ENT_QUOTES, 'UTF-8'); ?>">
    <meta name="twitter:image" content="https://cyberedumx.com/assets/og-ecoems.jpg">

    <!-- GOOGLE ANALYTICS -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo $config['ga_id']; ?>"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());
        gtag('config', '<?php echo $config['ga_id']; ?>');
    </script>

    <!-- BOOTSTRAP 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- GOOGLE FONTS ANIME STYLE -->
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700;800&family=Comic+Neue:wght@400;700&display=swap"
        rel="stylesheet">

    <!-- PRELOAD DE RECURSOS IMPORTANTES -->
    <link rel="preload" as="style" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="preload" as="font" href="https://fonts.gstatic.com/s/poppins/v15/pxiEyp8kv8JHgFVrJJfedw.ttf" crossorigin>

    <!-- STRUCTURED DATA PARA SEO -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Course",
        "name": "ECOEMS 2026 Anime Style",
        "description": "<?php echo addslashes($meta_description); ?>",
        "provider": {
            "@type": "Organization",
            "name": "CyberEdu MX",
            "sameAs": "https://cyberedumx.com"
        },
        "hasCourseInstance": {
            "@type": "CourseInstance",
            "courseMode": "online",
            "courseWorkload": "PT91H",
            "numberOfCredits": "91"
        }
    }
    </script>

    <style>
        :root {
            --anime-pink: #FF6B8B;
            --anime-blue: #4ECDC4;
            --anime-yellow: #FFD166;
            --anime-green: #06D6A0;
            --anime-purple: #9D4EDD;
            --anime-red: #EF476F;
            --anime-dark: #1A1A2E;
            --anime-light: #F8F9FF;
        }

        body {
            font-family: 'Poppins', 'Comic Neue', sans-serif;
            background: linear-gradient(135deg, #0f0c29, #302b63, #24243e);
            min-height: 100vh;
            padding-top: 80px !important;
            color: white;
            background-attachment: fixed;
        }

        /* ============ MEJORAS DE ACCESIBILIDAD ============ */
        .sr-only {
            position: absolute;
            width: 1px;
            height: 1px;
            padding: 0;
            margin: -1px;
            overflow: hidden;
            clip: rect(0, 0, 0, 0);
            white-space: nowrap;
            border: 0;
        }

        .focus-visible:focus-visible {
            outline: 3px solid var(--anime-yellow);
            outline-offset: 2px;
        }

        /* ============ MEJORAS DE PERFORMANCE ============ */
        .video-thumbnail img {
            content-visibility: auto;
        }

        /* ============ ESTILOS PARA NAVEGACIÓN ============ */
        #navbar {
            background: rgba(26, 26, 46, 0.95);
            backdrop-filter: blur(10px);
            box-shadow: 0 4px 30px rgba(255, 107, 139, 0.3);
            border-bottom: 3px solid var(--anime-pink);
            z-index: 10000;
            position: fixed;
            top: 0;
            width: 100%;
        }

        /* BANNER BETA */
        #beta-banner {
            background: linear-gradient(90deg, #1A1A2E, #9D4EDD);
            border-bottom: 2px solid #4ECDC4;
            padding: 8px 0;
            text-align: center;
            font-size: 0.85rem;
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 11000;
        }

        #beta-banner a {
            color: #4ECDC4;
            text-decoration: underline;
            font-weight: bold;
            margin-left: 10px;
        }

        body.with-beta-banner {
            padding-top: 120px !important;
        }

        .beta-fixed-bottom {
            position: fixed;
            bottom: 20px;
            left: 20px;
            background: #1A1A2E;
            border: 2px solid #4ECDC4;
            padding: 10px 20px;
            border-radius: 50px;
            z-index: 10000;
            display: flex;
            align-items: center;
            gap: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
            animation: slideUp 0.5s ease-out;
        }

        @keyframes slideUp {
            from {
                transform: translateY(100px);
                opacity: 0;
            }

            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        #online-users-badge {
            background: rgba(0, 0, 0, 0.6);
            color: var(--anime-green);
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 0.9rem;
            border: 1px solid var(--anime-green);
            display: flex;
            align-items: center;
            gap: 8px;
            margin-right: 15px;
            box-shadow: 0 0 10px rgba(6, 214, 160, 0.2);
        }

        #online-users-badge i {
            font-size: 0.8rem;
            animation: pulse-green 2s infinite;
        }

        @keyframes pulse-green {
            0% {
                text-shadow: 0 0 0 rgba(6, 214, 160, 0.7);
            }

            50% {
                text-shadow: 0 0 10px rgba(6, 214, 160, 0.7);
            }

            100% {
                text-shadow: 0 0 0 rgba(6, 214, 160, 0.7);
            }
        }

        .navbar-brand {
            font-family: 'Comic Neue', cursive;
            font-weight: 700;
            font-size: 1.8rem;
            background: linear-gradient(45deg, var(--anime-pink), var(--anime-blue));
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
        }

        .header-main {
            background: rgba(26, 26, 46, 0.8);
            backdrop-filter: blur(10px);
            border: 3px solid var(--anime-pink);
            border-radius: 20px;
            padding: 40px 0;
            text-align: center;
            margin-bottom: 30px;
            position: relative;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(255, 107, 139, 0.2);
            margin-top: 20px;
        }

        .video-counter {
            font-size: 5rem;
            font-weight: 800;
            font-family: 'Comic Neue', cursive;
            background: linear-gradient(45deg, #FF6B8B, #FFD166, #4ECDC4);
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
            text-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
            margin: 15px 0;
            position: relative;
            display: inline-block;
        }

        .video-counter::after {
            content: 'EPISODIOS';
            position: absolute;
            bottom: -25px;
            left: 50%;
            transform: translateX(-50%);
            font-size: 1.2rem;
            color: var(--anime-yellow);
            font-weight: 600;
        }

        .video-card {
            background: rgba(26, 26, 46, 0.9);
            border-radius: 15px;
            overflow: hidden;
            margin-bottom: 30px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
            border: 2px solid transparent;
            transition: all 0.3s ease;
            height: 100%;
            position: relative;
        }

        .video-card:hover {
            transform: translateY(-10px) scale(1.02);
            box-shadow: 0 20px 40px rgba(255, 107, 139, 0.4);
            border-color: var(--anime-pink);
        }

        .video-thumbnail {
            position: relative;
            height: 200px;
            overflow: hidden;
            background: linear-gradient(135deg, #1A1A2E, #16213E);
            cursor: pointer;
        }

        .video-thumbnail img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .video-card:hover .video-thumbnail img {
            transform: scale(1.1);
        }

        .play-button {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: linear-gradient(45deg, #FF6B8B, #EF476F);
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 24px;
            opacity: 0.9;
            transition: all 0.3s;
            box-shadow: 0 5px 15px rgba(239, 71, 111, 0.4);
            border: 3px solid white;
            z-index: 10;
        }

        .play-button:hover {
            transform: translate(-50%, -50%) scale(1.2);
            box-shadow: 0 10px 25px rgba(239, 71, 111, 0.6);
        }

        .badge-anime {
            background: linear-gradient(45deg, var(--anime-purple), var(--anime-blue));
            border-radius: 20px;
            padding: 5px 15px;
            font-weight: 600;
            font-family: 'Comic Neue', cursive;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.2);
        }

        .btn-youtube {
            background: linear-gradient(45deg, #FF0000, #CC0000);
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 10px;
            font-weight: 700;
            font-family: 'Comic Neue', cursive;
            transition: all 0.3s;
            width: 100%;
            font-size: 1rem;
            box-shadow: 0 5px 15px rgba(255, 0, 0, 0.3);
            cursor: pointer;
        }

        .btn-youtube:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(255, 0, 0, 0.4);
        }

        .btn-notebook {
            background: linear-gradient(45deg, #4285F4, #0d47a1);
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 10px;
            font-weight: 700;
            font-family: 'Comic Neue', cursive;
            transition: all 0.3s;
            width: 100%;
            font-size: 1rem;
            box-shadow: 0 5px 15px rgba(66, 133, 244, 0.3);
            cursor: pointer;
            text-decoration: none;
            display: block;
            text-align: center;
        }

        .btn-notebook:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(66, 133, 244, 0.4);
            color: white;
            text-decoration: none;
        }

        .infografia-directa {
            margin-top: 15px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 10px;
            padding: 15px;
            border: 2px dashed var(--anime-yellow);
            text-align: center;
            backdrop-filter: blur(5px);
        }

        .infografia-imagen {
            width: 100%;
            max-height: 150px;
            object-fit: contain;
            border-radius: 10px;
            cursor: pointer;
            transition: transform 0.3s;
            border: 2px solid var(--anime-green);
            background: white;
            padding: 5px;
        }

        .infografia-imagen:hover {
            transform: scale(1.05);
        }

        .pdf-preview {
            margin-top: 15px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 10px;
            padding: 15px;
            border-left: 5px solid var(--anime-red);
        }

        .audio-player {
            background: rgba(255, 255, 255, 0.1);
            border-radius: 10px;
            padding: 15px;
            margin: 15px 0;
            border: 2px solid var(--anime-purple);
        }

        .filter-btn {
            background: rgba(255, 255, 255, 0.1);
            border: 2px solid transparent;
            border-radius: 25px;
            padding: 8px 20px;
            margin: 5px;
            color: white;
            font-weight: 600;
            font-family: 'Comic Neue', cursive;
            transition: all 0.3s;
            cursor: pointer;
        }

        .filter-btn:hover,
        .filter-btn.active {
            background: linear-gradient(45deg, var(--anime-pink), var(--anime-blue));
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(255, 107, 139, 0.4);
        }

        .modal-content {
            background: #1A1A2E;
            border: 3px solid var(--anime-pink);
            border-radius: 15px;
            color: white;
        }

        footer {
            background: rgba(26, 26, 46, 0.95);
            border-top: 3px solid var(--anime-pink);
            backdrop-filter: blur(10px);
            margin-top: 50px;
        }

        @keyframes float {

            0%,
            100% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-10px);
            }
        }

        .floating {
            animation: float 3s ease-in-out infinite;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .video-card {
            animation: fadeInUp 0.5s ease-out forwards;
            animation-fill-mode: both;
        }

        /* ============ FILTRO FIJO EN LA PARTE SUPERIOR ============ */
        #filtro-fijo {
            position: sticky;
            top: 80px;
            z-index: 990;
            background: linear-gradient(135deg, rgba(15, 12, 41, 0.98), rgba(48, 43, 99, 0.98));
            backdrop-filter: blur(10px);
            border-bottom: 3px solid var(--anime-purple);
            box-shadow: 0 5px 25px rgba(0, 0, 0, 0.5);
            padding: 15px 0;
            margin-bottom: 30px;
            width: 100%;
        }

        #filtro-fijo .container {
            position: relative;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }

        #filtro-fijo h5 {
            color: var(--anime-yellow);
            font-family: 'Comic Neue', cursive;
            margin-bottom: 15px;
            font-size: 1.2rem;
            text-align: center;
            display: block;
        }

        #filtro-fijo .filtros-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            gap: 8px;
            padding: 0;
            width: 100%;
            margin: 0 auto;
        }

        #filtro-fijo .filter-btn {
            background: rgba(255, 255, 255, 0.1);
            border: 2px solid transparent;
            border-radius: 25px;
            padding: 8px 16px;
            color: white;
            font-weight: 600;
            font-family: 'Comic Neue', cursive;
            transition: all 0.3s;
            cursor: pointer;
            font-size: 0.9rem;
            white-space: nowrap;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            min-width: 70px;
        }

        #filtro-fijo .filter-btn:hover,
        #filtro-fijo .filter-btn.active {
            background: linear-gradient(45deg, var(--anime-pink), var(--anime-blue));
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(255, 107, 139, 0.4);
            border-color: white;
            color: white;
        }

        #filtro-fijo .filter-btn i {
            margin-right: 6px;
            font-size: 0.9rem;
        }

        #filtro-fijo .filter-btn .badge {
            background: rgba(0, 0, 0, 0.3);
            color: white;
            font-size: 0.8rem;
            margin-left: 6px;
            padding: 3px 8px;
            border-radius: 10px;
        }

        .nombre-corto {
            display: none;
        }

        .nombre-completo {
            display: inline;
        }

        /* Contador de filtro */
        #contador-filtro-fijo {
            position: absolute;
            top: -10px;
            right: 15px;
            background: var(--anime-purple);
            color: white;
            padding: 5px 15px;
            border-radius: 20px;
            font-family: 'Comic Neue', cursive;
            font-weight: 600;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.3);
            border: 2px solid white;
            font-size: 0.9rem;
            z-index: 991;
            display: flex;
            align-items: center;
        }

        /* Botón reset filtro */
        #reset-filtro-fijo {
            position: absolute;
            top: -10px;
            left: 15px;
            background: var(--anime-blue);
            color: white;
            border: none;
            padding: 5px 15px;
            border-radius: 20px;
            font-family: 'Comic Neue', cursive;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s;
            border: 2px solid white;
            font-size: 0.9rem;
            z-index: 991;
            display: none;
            align-items: center;
        }

        #reset-filtro-fijo:hover {
            background: var(--anime-green);
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(78, 205, 196, 0.4);
        }

        /* Ajuste específico para el botón "TODAS" */
        #filtro-fijo .filter-btn[data-filter="all"] {
            background: linear-gradient(45deg, var(--anime-green), var(--anime-blue));
            color: white;
        }

        /* Contador adicional en la sección de videos */
        #contador-filtro-videos {
            background: var(--anime-purple);
            color: white;
            padding: 8px 20px;
            border-radius: 20px;
            font-family: 'Comic Neue', cursive;
            font-weight: 600;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.3);
            border: 2px solid white;
            margin-bottom: 20px;
            display: inline-block;
        }

        /* Botón reset adicional en la sección de videos */
        #reset-filtro-videos {
            background: var(--anime-blue);
            color: white;
            border: none;
            padding: 8px 20px;
            border-radius: 20px;
            font-family: 'Comic Neue', cursive;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s;
            border: 2px solid white;
            margin-bottom: 20px;
            display: none;
        }

        #reset-filtro-videos:hover {
            background: var(--anime-green);
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(78, 205, 196, 0.4);
        }

        /* ============ REPRODUCTOR GRANDE Y MEJORADO ============ */
        #videoPlayerContainer {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 90%;
            max-width: 1000px;
            height: 80vh;
            max-height: 600px;
            background: #1A1A2E;
            border: 5px solid var(--anime-pink);
            border-radius: 20px;
            z-index: 9999;
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.8);
            display: none;
            overflow: hidden;
            resize: both;
            min-width: 400px;
            min-height: 300px;
        }

        #videoPlayerContainer.active {
            display: flex;
            flex-direction: column;
            animation: slideInScale 0.3s ease-out;
        }

        @keyframes slideInScale {
            from {
                opacity: 0;
                transform: translate(-50%, -50%) scale(0.8);
            }

            to {
                opacity: 1;
                transform: translate(-50%, -50%) scale(1);
            }
        }

        .player-header {
            background: linear-gradient(45deg, #1A1A2E, #16213E);
            padding: 15px 20px;
            border-bottom: 3px solid var(--anime-pink);
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-shrink: 0;
        }

        .player-title {
            color: var(--anime-yellow);
            font-weight: bold;
            font-size: 1.2rem;
            font-family: 'Comic Neue', cursive;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            max-width: 70%;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.5);
        }

        .player-controls {
            display: flex;
            gap: 10px;
            align-items: center;
        }

        .player-btn {
            background: linear-gradient(45deg, var(--anime-blue), var(--anime-green));
            color: white;
            border: none;
            padding: 8px 15px;
            border-radius: 8px;
            cursor: pointer;
            font-size: 0.9rem;
            transition: all 0.3s;
            font-family: 'Comic Neue', cursive;
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .player-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(78, 205, 196, 0.4);
        }

        .player-btn-danger {
            background: linear-gradient(45deg, var(--anime-red), #FF0000);
            padding: 8px 12px;
        }

        .player-body {
            flex: 1;
            position: relative;
            min-height: 0;
        }

        .player-body iframe {
            width: 100%;
            height: 100%;
            border: none;
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
        }

        .player-footer {
            background: rgba(0, 0, 0, 0.3);
            padding: 10px 20px;
            border-top: 2px solid rgba(255, 255, 255, 0.1);
            flex-shrink: 0;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .player-stats {
            color: var(--anime-blue);
            font-size: 0.9rem;
        }

        /* OVERLAY DE FONDO */
        #playerOverlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.8);
            backdrop-filter: blur(5px);
            z-index: 9998;
            display: none;
        }

        #playerOverlay.active {
            display: block;
            animation: fadeIn 0.3s ease-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        /* BOTÓN MINIMIZAR */
        #videoPlayerContainer.minimized {
            width: 300px;
            height: 60px;
            max-width: 300px;
            max-height: 60px;
            bottom: 20px;
            right: 20px;
            top: auto;
            left: auto;
            transform: none;
            overflow: visible;
        }

        #videoPlayerContainer.minimized .player-body,
        #videoPlayerContainer.minimized .player-footer {
            display: none;
        }

        #videoPlayerContainer.minimized .player-header {
            height: 100%;
        }

        /* ============ RESPONSIVE PARA FILTRO FIJO ============ */
        @media (max-width: 1200px) {
            #filtro-fijo .filter-btn {
                padding: 7px 14px;
                font-size: 0.85rem;
                min-width: 65px;
            }
        }

        @media (max-width: 992px) {
            #filtro-fijo {
                padding: 12px 0;
            }

            #filtro-fijo h5 {
                font-size: 1.1rem;
                margin-bottom: 12px;
            }

            #filtro-fijo .filtros-container {
                gap: 6px;
            }

            #filtro-fijo .filter-btn {
                padding: 6px 12px;
                font-size: 0.8rem;
                min-width: 60px;
            }

            /* Mostrar solo iconos en botones largos */
            #filtro-fijo .filter-btn[data-filter="habilidad_verbal"] .nombre-completo,
            #filtro-fijo .filter-btn[data-filter="habilidad_matematica"] .nombre-completo,
            #filtro-fijo .filter-btn[data-filter="formacion_civica"] .nombre-completo {
                display: none;
            }

            #filtro-fijo .filter-btn[data-filter="habilidad_verbal"] .nombre-corto,
            #filtro-fijo .filter-btn[data-filter="habilidad_matematica"] .nombre-corto,
            #filtro-fijo .filter-btn[data-filter="formacion_civica"] .nombre-corto {
                display: inline;
            }
        }

        @media (max-width: 768px) {
            body {
                padding-top: 70px !important;
            }

            #filtro-fijo {
                padding: 10px 0;
                margin-bottom: 20px;
            }

            #filtro-fijo h5 {
                font-size: 1rem;
                margin-bottom: 10px;
            }

            #filtro-fijo .filtros-container {
                gap: 5px;
            }

            #filtro-fijo .filter-btn {
                padding: 5px 10px;
                font-size: 0.75rem;
                min-width: 55px;
                border-radius: 20px;
            }

            .nombre-completo {
                display: none !important;
            }

            .nombre-corto {
                display: inline !important;
            }

            #contador-filtro-fijo,
            #reset-filtro-fijo {
                top: -8px;
                font-size: 0.8rem;
                padding: 4px 10px;
            }

            .video-counter {
                font-size: 3.5rem;
            }
        }

        @media (max-width: 576px) {
            body {
                padding-top: 65px !important;
            }

            #filtro-fijo {
                padding: 8px 0;
                margin-bottom: 15px;
            }

            #filtro-fijo h5 {
                font-size: 0.9rem;
                margin-bottom: 8px;
            }

            #filtro-fijo .filtros-container {
                gap: 4px;
            }

            #filtro-fijo .filter-btn {
                padding: 4px 8px;
                font-size: 0.7rem;
                min-width: 50px;
                border-radius: 15px;
            }

            /* Solo iconos en móviles muy pequeños */
            #filtro-fijo .filter-btn span:not(.badge) {
                display: none !important;
            }

            #filtro-fijo .filter-btn .badge {
                display: none !important;
            }

            #filtro-fijo .filter-btn i {
                margin-right: 0;
            }

            .video-counter {
                font-size: 3rem;
            }
        }

        @media (max-width: 480px) {
            body {
                padding-top: 60px !important;
            }

            #filtro-fijo {
                padding: 6px 0;
                margin-bottom: 10px;
            }

            #filtro-fijo h5 {
                font-size: 0.85rem;
            }
        }

        /* ============ ESTILOS CHATBOT ANIME ECOEMS 2026 ============ */
        @keyframes slideInUpChat {
            from {
                opacity: 0;
                transform: translateY(30px) translateX(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0) translateX(0);
            }
        }

        @keyframes slideOutDownChat {
            from {
                opacity: 1;
                transform: translateY(0) translateX(0);
            }

            to {
                opacity: 0;
                transform: translateY(30px) translateX(30px);
            }
        }

        @keyframes typing {

            0%,
            60%,
            100% {
                transform: translateY(0);
            }

            30% {
                transform: translateY(-5px);
            }
        }

        .typing-dot {
            width: 8px;
            height: 8px;
            background: var(--anime-blue);
            border-radius: 50%;
            animation: typing 1.4s infinite;
        }

        /* Estilos de mensajes */
        .chatbot-message {
            display: flex;
            margin-bottom: 20px;
            animation: fadeIn 0.3s ease-out;
        }

        .chatbot-bot-message {
            flex-direction: row;
        }

        .chatbot-user-message {
            flex-direction: row-reverse;
        }

        .chatbot-avatar {
            flex-shrink: 0;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 12px;
        }

        .chatbot-bot-message .chatbot-avatar {
            background: linear-gradient(45deg, var(--anime-blue), var(--anime-green));
            color: white;
        }

        .chatbot-user-message .chatbot-avatar {
            background: linear-gradient(45deg, var(--anime-pink), var(--anime-purple));
            color: white;
        }

        .chatbot-content {
            max-width: 280px;
        }

        .chatbot-name {
            font-size: 12px;
            font-weight: 600;
            margin-bottom: 5px;
            font-family: 'Comic Neue', cursive;
        }

        .chatbot-text {
            background: rgba(255, 255, 255, 0.1);
            padding: 12px 15px;
            border-radius: 15px;
            color: white;
            font-size: 14px;
            line-height: 1.4;
            white-space: pre-line;
        }

        .chatbot-bot-message .chatbot-text {
            border-top-left-radius: 5px;
            border-left: 3px solid var(--anime-blue);
        }

        .chatbot-user-message .chatbot-text {
            border-top-right-radius: 5px;
            border-right: 3px solid var(--anime-pink);
            background: rgba(255, 107, 139, 0.15);
        }

        .chatbot-time {
            font-size: 11px;
            color: rgba(255, 255, 255, 0.5);
            margin-top: 5px;
            text-align: right;
        }

        .chatbot-quick-btn {
            background: rgba(255, 255, 255, 0.1);
            color: white;
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 15px;
            padding: 6px 12px;
            font-size: 12px;
            cursor: pointer;
            transition: all 0.3s;
            font-family: 'Poppins';
            flex-shrink: 0;
        }

        .chatbot-quick-btn:hover {
            background: rgba(78, 205, 196, 0.2);
            border-color: var(--anime-blue);
            transform: translateY(-2px);
        }

        /* Scrollbar personalizado para el chatbot */
        #chatbot-messages::-webkit-scrollbar {
            width: 6px;
        }

        #chatbot-messages::-webkit-scrollbar-track {
            background: rgba(255, 255, 255, 0.05);
            border-radius: 3px;
        }

        #chatbot-messages::-webkit-scrollbar-thumb {
            background: var(--anime-pink);
            border-radius: 3px;
        }

        #chatbot-messages::-webkit-scrollbar-thumb:hover {
            background: var(--anime-blue);
        }

        /* ============ MEJORAS DE PERFORMANCE PARA IMÁGENES ============ */
        .youtube-thumbnail {
            content-visibility: auto;
        }

        .youtube-thumbnail[loading="lazy"] {
            opacity: 0;
            transition: opacity 0.3s;
        }

        .youtube-thumbnail.loaded {
            opacity: 1;
        }
    </style>
</head>

<body class="with-beta-banner">
    <!-- BETA HEADER BANNER -->
    <div id="beta-banner">
        🔥 <strong>NUEVA VERSIÓN BIORETO PRO:</strong> Prueba el nuevo simulador 2026.
        <a href="https://cyberedumx.lovable.app/" target="_blank">IR A LA VERSIÓN PRO <i
                class="fas fa-external-link-alt"></i></a>
    </div>

    <!-- BETA FLOATING BUTTON -->
    <div class="beta-fixed-bottom d-none d-md-flex">
        <div style="background: #4ECDC4; width: 10px; height: 10px; border-radius: 50%; animation: pulse 2s infinite;">
        </div>
        <span style="font-weight: bold; font-size: 0.85rem;">🔥 BIORETO PRO v2.0</span>
        <a href="https://cyberedumx.lovable.app/" target="_blank"
            style="background: #4ECDC4; color: #1A1A2E; padding: 5px 15px; border-radius: 20px; text-decoration: none; font-weight: bold; font-size: 0.8rem;">PROBAR
            AHORA</a>
    </div>

    <!-- NAVBAR ANIME -->
    <nav id="navbar" class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand focus-visible" href="#inicio" aria-label="ECOEMS 2026 Anime Edition">
                <i class="fas fa-gamepad me-2"></i>
                ECOEMS 2026
                <span class="badge bg-warning ms-2">ANIME EDITION</span>
            </a>
            <div class="d-flex align-items-center">
                <div id="online-users-badge" style="display: none;">
                    <i class="fas fa-circle"></i>
                    <span id="online-users-count">...</span> online
                </div>
                <button class="navbar-toggler focus-visible" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNav" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active focus-visible" href="#inicio">INICIO</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link focus-visible" href="#filtro-fijo">FILTRAR</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link focus-visible" href="https://cyberedumx.com/guias.html">GUÍAS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link focus-visible" href="/mi_progreso.php">
                            <i class="fas fa-chart-line me-1"></i>MI PROGRESO
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link focus-visible" href="https://cyberedumx.com/libro/manual_digital_ECOEMS.html"
                            style="background: linear-gradient(45deg, var(--anime-green), var(--anime-blue)); padding: 8px 16px; border-radius: 20px; font-weight: 700;">
                            <i class="fas fa-book-open me-1"></i>MANUAL DIGITAL
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link focus-visible" href="#herramientas">PODERES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link focus-visible" href="#simulador">BATALLA FINAL</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- CONTENIDO PRINCIPAL -->
    <div class="container" id="inicio">
        <!-- FILTRO FIJO EN LA PARTE SUPERIOR -->
        <div id="filtro-fijo">
            <button id="reset-filtro-fijo" class="focus-visible" aria-label="Ver todos los videos">
                <i class="fas fa-redo me-1"></i>VER TODOS
            </button>
            <div id="contador-filtro-fijo">
                <i class="fas fa-video me-1"></i>
                <span id="contador-numero-fijo">91</span> VIDEOS
            </div>

            <h5 class="text-center">
                <i class="fas fa-filter me-2"></i>FILTRAR POR MISIÓN
            </h5>

            <div class="filtros-container">
                <button class="filter-btn active focus-visible" data-filter="all"
                    aria-label="Mostrar todas las materias">
                    <i class="fas fa-globe"></i>
                    <span class="nombre-completo">TODAS</span>
                    <span class="nombre-corto">TODO</span>
                    <span class="badge">91</span>
                </button>
                <?php foreach ($materias as $id => $materia):
                    // Textos abreviados para móviles
                    $nombres_cortos = [
                        'habilidad_verbal' => 'VERBAL',
                        'habilidad_matematica' => 'MAT.',
                        'formacion_civica' => 'CÍVICA',
                        'estrategia' => 'ESTRA.',
                        'biologia' => 'BIO',
                        'fisica' => 'FÍSICA',
                        'quimica' => 'QUÍM',
                        'matematicas' => 'MATES',
                        'historia' => 'HIST',
                        'espanol' => 'ESP',
                        'geografia' => 'GEO',
                        'repaso' => 'REP'
                    ];
                    $nombre_corto = $nombres_cortos[$id] ?? substr($materia['nombre'], 0, 4);
                    ?>
                    <button class="filter-btn focus-visible" data-filter="<?php echo $id; ?>"
                        style="border-color: <?php echo $materia['color']; ?>;"
                        aria-label="Filtrar por <?php echo $materia['nombre']; ?>">
                        <i class="fas <?php echo $materia['icono']; ?>"
                            style="color: <?php echo $materia['color']; ?>;"></i>
                        <span class="nombre-completo"><?php echo $materia['nombre']; ?></span>
                        <span class="nombre-corto"><?php echo $nombre_corto; ?></span>
                        <span class="badge"><?php echo $videos_por_materia[$id] ?? 0; ?></span>
                    </button>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- HEADER PRINCIPAL -->
        <div class="header-main">
            <h1 class="display-5 fw-bold mb-2">¡ECOEMS 2026!</h1>
            <p class="lead mb-3 fs-4" style="color: var(--anime-yellow); font-family: 'Comic Neue', cursive;">
                LA AVENTURA ANIME PARA APROBAR TU EXAMEN
            </p>

            <div class="video-counter floating">91</div>

            <div class="d-flex flex-wrap justify-content-center gap-3 mt-4">
                <span class="badge-anime">
                    <i class="fab fa-youtube me-2"></i>91 Videos Anime
                </span>
                <span class="badge-anime">
                    <i class="fas fa-clock me-2"></i><?php echo $dias_restantes; ?> Días Restantes
                </span>
                <span class="badge-anime">
                    <i class="fas fa-image me-2"></i><?php echo $archivos_encontrados['imagenes']; ?> Infografías
                </span>
                <a href="https://cyberedumx.com/ecoems2026/simuladores/simulador_completo.php" target="_blank"
                    class="game-btn"
                    onclick="gtag('event', 'simulator_click', {'event_category': 'engagement', 'event_label': 'ecoems_hero_simulator'})">
                    <i class="fas fa-gamepad me-2"></i>SIMULADOR CLÁSICO
                </a>
                <a href="https://cyberedumx.com/ecoems2026/simulador1000.html" target="_blank" class="game-btn"
                    style="background: linear-gradient(45deg, #FFD166, #FF6B8B); border: 2px solid white; animation: pulse 2s infinite;"
                    onclick="gtag('event', 'simulator_click', {'event_category': 'engagement', 'event_label': 'ecoems_super_simulator'})">
                    <i class="fas fa-rocket me-2"></i>¡SIMULADOR 1000!
                </a>
                <span class="badge-anime">
                    <i class="fas fa-robot me-2"></i>Chatbot Anime
                </span>
            </div>

            <div class="mt-4">
                <a href="https://cyberedumx.com/guias.html" class="btn focus-visible"
                    style="background: linear-gradient(45deg, var(--anime-purple), var(--anime-blue)); color: white; font-weight: bold; border-radius: 20px; padding: 12px 30px; box-shadow: 0 5px 15px rgba(157, 78, 221, 0.4);">
                    <i class="fas fa-book-open me-2"></i>¡ACCEDER A LAS GUÍAS!
                </a>
            </div>

            <p class="mt-4" style="color: var(--anime-green); max-width: 600px; margin: 0 auto;">
                <i class="fas fa-quote-left me-2"></i>
                Aprende como si fuera tu serie anime favorita. ¡91 episodios épicos para conquistar el ECOEMS 2026!
                <i class="fas fa-quote-right ms-2"></i>
            </p>
        </div>
    </div>

    <!-- MODAL PARA IMÁGENES -->
    <div class="modal fade" id="imageModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="imageModalTitle">🖼️ INFOGRAFÍA</h5>
                    <button type="button" class="btn-close btn-close-white focus-visible" data-bs-dismiss="modal"
                        aria-label="Cerrar modal"></button>
                </div>
                <div class="modal-body text-center">
                    <img id="modalImage" class="img-fluid" src="" alt="Infografía"
                        style="max-height: 70vh; border-radius: 10px;">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary focus-visible"
                        data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- OVERLAY PARA REPRODUCTOR -->
    <div id="playerOverlay" aria-hidden="true"></div>

    <!-- REPRODUCTOR GRANDE MEJORADO -->
    <div id="videoPlayerContainer" role="dialog" aria-labelledby="videoPlayerTitle" aria-modal="true">
        <div class="player-header">
            <div class="player-title" id="videoPlayerTitle">🎬 REPRODUCTOR ANIME - ECOEMS 2026</div>
            <div class="player-controls">
                <button class="player-btn focus-visible" id="minimizePlayer" title="Minimizar"
                    aria-label="Minimizar reproductor">
                    <i class="fas fa-window-minimize"></i>
                    <span>Minimizar</span>
                </button>
                <button class="player-btn focus-visible" id="toggleFullscreen" title="Pantalla Completa"
                    aria-label="Pantalla completa">
                    <i class="fas fa-expand"></i>
                    <span>Pantalla Completa</span>
                </button>
                <button class="player-btn player-btn-danger focus-visible" id="closeVideoPlayer" title="Cerrar"
                    aria-label="Cerrar reproductor">
                    <i class="fas fa-times"></i>
                    <span>Cerrar</span>
                </button>
            </div>
        </div>
        <div class="player-body">
            <iframe id="videoPlayer" src=""
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen referrerpolicy="strict-origin-when-cross-origin" title="Reproductor de video YouTube"
                loading="lazy">
            </iframe>
        </div>
        <div class="player-footer">
            <div class="player-stats">
                <i class="fas fa-eye me-1"></i>
                <span id="playerViews">0 vistas</span>
            </div>
            <div class="player-stats">
                <i class="fas fa-clock me-1"></i>
                <span id="playerDuration">0:00</span>
            </div>
            <a href="#videoGrid" class="game-btn" style="font-size: 0.9rem; padding: 8px 15px; margin-left: auto;">
                <i class="fas fa-arrow-down me-2"></i>Ver Lista de Episodios
            </a>
        </div>
    </div>
    </section>

    <!-- ESTRATEGIA ANIME -->
    <div class="container mb-5">
        <div class="card border-0" style="background: rgba(26, 26, 46, 0.8); border: 3px solid var(--anime-pink);">
            <div class="card-header text-center py-3" style="background: linear-gradient(45deg, #1A1A2E, #16213E);">
                <h4 class="mb-0" style="color: var(--anime-yellow); font-family: 'Comic Neue', cursive;">
                    <i class="fas fa-chess-knight me-2"></i>¡MISIÓN: APROBAR EL ECOEMS 2026!
                </h4>
            </div>
            <div class="card-body">
                <div class="row g-4">
                    <div class="col-md-6">
                        <div class="p-3"
                            style="background: rgba(255, 107, 139, 0.1); border-radius: 10px; border-left: 5px solid var(--anime-pink);">
                            <h5 style="color: var(--anime-pink);">
                                <i class="fas fa-rocket me-2"></i>FASE 1: ENTRENAMIENTO ANIME
                            </h5>
                            <p class="mb-0">91 episodios de entrenamiento intensivo. ¡Construye tu base de conocimientos
                                como un héroe anime!</p>
                            <ul class="mt-2 mb-0">
                                <li>✔️ Conocimiento válido para 2026, 2027 y más</li>
                                <li>✔️ Podcast anime para cada episodio</li>
                                <li>✔️ Infografías estilo manga</li>
                                <li>✔️ <strong>Chatbot anime 24/7</strong></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="p-3"
                            style="background: rgba(78, 205, 196, 0.1); border-radius: 10px; border-left: 5px solid var(--anime-blue);">
                            <h5 style="color: var(--anime-blue);">
                                <i class="fas fa-sync-alt me-2"></i>FASE 2: ACTUALIZACIÓN 2026
                            </h5>
                            <p class="mb-0">Cuando se publique la guía oficial (abril 2026). ¡Episodios especiales de
                                actualización!</p>
                            <ul class="mt-2 mb-0">
                                <li>🔄 Videos resolviendo 128 preguntas nuevas</li>
                                <li>🔄 Estrategias actualizadas</li>
                                <li>🔄 Sin costo extra - ¡Incluido en la misión!</li>
                                <li>🔄 <strong>Chatbot actualizado automáticamente</strong></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Curso Udemy -->
                <div class="mt-4 p-3"
                    style="background: linear-gradient(45deg, rgba(255, 209, 102, 0.2), rgba(255, 107, 139, 0.2)); border-radius: 10px;">
                    <div class="d-flex align-items-center flex-wrap">
                        <div class="flex-shrink-0 me-3">
                            <i class="fab fa-udemy fa-3x" style="color: var(--anime-yellow);"></i>
                        </div>
                        <div class="flex-grow-1">
                            <h5 class="mb-1" style="color: white;">¡CURSO COMPLETO EN UDEMY!</h5>
                            <p class="mb-2">Resuelve las 128 preguntas con el <strong>Método Triple Anime</strong></p>
                            <a href="<?php echo $config['udemy_url']; ?>" target="_blank" class="btn focus-visible"
                                style="background: linear-gradient(45deg, var(--anime-yellow), var(--anime-pink)); color: white; font-weight: bold;"
                                rel="noopener noreferrer">
                                <i class="fab fa-udemy me-1"></i>¡ACCEDER AL CURSO!
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ESTADÍSTICAS ANIME -->
    <div class="container mb-5">
        <h4 class="text-center mb-4" style="color: var(--anime-green); font-family: 'Comic Neue', cursive;">
            <i class="fas fa-chart-line me-2"></i>TUS ESTADÍSTICAS DE HÉROE
        </h4>
        <div class="row g-4">
            <?php
            $stats = [
                ['icon' => 'fab fa-youtube', 'color' => '#FF0000', 'value' => '91', 'label' => 'Episodios'],
                ['icon' => 'fas fa-image', 'color' => '#9D4EDD', 'value' => $archivos_encontrados['imagenes'], 'label' => 'Infografías'],
                ['icon' => 'fas fa-calendar-alt', 'color' => '#4ECDC4', 'value' => $dias_restantes, 'label' => 'Días Restantes'],
                ['icon' => 'fas fa-trophy', 'color' => '#FFD166', 'value' => '0%', 'label' => 'Progreso']
            ];

            foreach ($stats as $stat):
                ?>
                <div class="col-md-3 col-6">
                    <div class="text-center p-3"
                        style="background: rgba(255, 255, 255, 0.1); border-radius: 15px; border: 2px solid <?php echo $stat['color']; ?>;">
                        <i class="<?php echo $stat['icon']; ?> fa-3x mb-3"
                            style="color: <?php echo $stat['color']; ?>;"></i>
                        <h3 class="mb-1" style="font-size: 2.5rem; font-weight: 800; color: white;">
                            <?php echo $stat['value']; ?>
                        </h3>
                        <p class="mb-0" style="color: <?php echo $stat['color']; ?>; font-weight: 600;">
                            <?php echo $stat['label']; ?>
                        </p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <!-- 91 VIDEOS ANIME -->
    <div id="contenedor-videos" class="container">
        <!-- Controles de filtro adicionales -->
        <div class="text-center mb-4">
            <button id="reset-filtro-videos" class="me-3 focus-visible" aria-label="Ver todos los videos">
                <i class="fas fa-redo me-1"></i>VER TODOS LOS VIDEOS
            </button>
            <span id="contador-filtro-videos">
                <i class="fas fa-video me-1"></i>
                <span id="contador-numero-videos">91</span> VIDEOS MOSTRADOS
            </span>
        </div>

        <h3 class="text-center mb-4" style="color: var(--anime-pink); font-family: 'Comic Neue', cursive;">
            <i class="fab fa-youtube me-2"></i>91 EPISODIOS DE LA SERIE ANIME ECOEMS 2026
        </h3>

        <div class="row" id="videoGrid">
            <?php foreach ($videos as $video):
                $materia_info = $materias[$video['materia']] ?? $materias['historia'];
                $archivos = $video['archivos'];

                // Usar hqdefault como calidad por defecto
                $youtube_id = $video['youtube_id'];
                $thumbnail_url = "https://img.youtube.com/vi/{$youtube_id}/hqdefault.jpg";
                ?>
                <div class="col-xl-4 col-lg-6 mb-4 video-item" data-materia="<?php echo $video['materia']; ?>">
                    <div class="video-card">
                        <!-- MINIATURA -->
                        <div class="video-thumbnail" data-video-url="<?php echo $video['embed_url']; ?>"
                            data-video-title="<?php echo htmlspecialchars($video['titulo'], ENT_QUOTES, 'UTF-8'); ?>"
                            data-video-duration="<?php echo $video['duracion']; ?>" role="button" tabindex="0"
                            aria-label="Reproducir video: <?php echo htmlspecialchars($video['titulo'], ENT_QUOTES, 'UTF-8'); ?>">

                            <img src="<?php echo $thumbnail_url; ?>"
                                alt="<?php echo htmlspecialchars($video['titulo'], ENT_QUOTES, 'UTF-8'); ?> - Anime ECOEMS 2026"
                                class="youtube-thumbnail" loading="lazy"
                                onerror="this.onerror=null; this.src='https://img.youtube.com/vi/<?php echo $youtube_id; ?>/mqdefault.jpg';"
                                onload="this.classList.add('loaded')">

                            <div class="play-button" aria-hidden="true">
                                <i class="fas fa-play"></i>
                            </div>
                            <div class="position-absolute top-0 start-0 m-2">
                                <span class="badge bg-dark p-2"
                                    style="font-family: 'Comic Neue', cursive; font-size: 1.1rem;">
                                    EPISODIO <?php echo str_pad($video['id'], 2, '0', STR_PAD_LEFT); ?>
                                </span>
                            </div>
                            <div class="position-absolute bottom-0 end-0 m-2">
                                <span class="badge bg-dark p-1">
                                    <i class="fas fa-clock me-1"></i><?php echo $video['duracion']; ?>
                                </span>
                            </div>
                        </div>

                        <!-- CONTENIDO -->
                        <div class="p-3">
                            <!-- MATERIA -->
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <span class="badge p-2"
                                    style="background: <?php echo $materia_info['color']; ?>20; color: <?php echo $materia_info['color']; ?>; border: 1px solid <?php echo $materia_info['color']; ?>;">
                                    <i class="fas <?php echo $materia_info['icono']; ?> me-1"></i>
                                    <?php echo $materia_info['nombre']; ?>
                                </span>
                                <span class="badge bg-success">
                                    <i class="fas fa-check me-1"></i>¡DISPONIBLE!
                                </span>
                            </div>

                            <!-- TÍTULO -->
                            <h6 class="fw-bold mb-2" style="color: white; min-height: 60px;">
                                <?php echo htmlspecialchars($video['titulo'], ENT_QUOTES, 'UTF-8'); ?>
                            </h6>

                            <!-- DESCRIPCIÓN -->
                            <p class="mb-3" style="color: #CCCCCC; font-size: 0.9rem; min-height: 60px;">
                                <?php echo htmlspecialchars($video['descripcion'], ENT_QUOTES, 'UTF-8'); ?>
                            </p>

                            <!-- BOTONES PRINCIPALES -->
                            <div class="row g-2 mb-3">
                                <div class="col-6">
                                    <button class="btn-youtube play-video-fixed focus-visible"
                                        data-video-url="<?php echo $video['embed_url']; ?>"
                                        data-video-title="<?php echo htmlspecialchars($video['titulo'], ENT_QUOTES, 'UTF-8'); ?>"
                                        data-video-duration="<?php echo $video['duracion']; ?>"
                                        aria-label="Ver episodio: <?php echo htmlspecialchars($video['titulo'], ENT_QUOTES, 'UTF-8'); ?>">
                                        <i class="fab fa-youtube me-1"></i>VER EPISODIO
                                    </button>
                                </div>
                                <div class="col-6">
                                    <a href="<?php echo $video['notebooklm']; ?>" target="_blank"
                                        class="btn-notebook focus-visible" rel="noopener noreferrer"
                                        aria-label="Abrir NotebookLM para este video">
                                        <i class="fas fa-robot me-1"></i>NOTEBOOKLM AI
                                    </a>
                                </div>
                            </div>

                            <!-- INFOGRAFÍA -->
                            <?php if ($archivos['imagen']): ?>
                                <div class="infografia-directa">
                                    <div style="color: var(--anime-yellow); font-weight: 600; margin-bottom: 10px;">
                                        <i class="fas fa-image me-2"></i>
                                        INFOGRAFÍA DEL EPISODIO
                                    </div>
                                    <img src="<?php echo $archivos['imagen']; ?>" class="infografia-imagen"
                                        alt="Infografía anime del episodio <?php echo $video['id']; ?>"
                                        data-image-url="<?php echo $archivos['imagen']; ?>"
                                        data-image-title="Infografía - <?php echo htmlspecialchars($video['titulo'], ENT_QUOTES, 'UTF-8'); ?>"
                                        loading="lazy" onload="this.classList.add('loaded')">
                                    <div class="mt-2">
                                        <button class="btn btn-sm me-2 focus-visible"
                                            style="background: var(--anime-blue); color: white;"
                                            data-image-url="<?php echo $archivos['imagen']; ?>"
                                            data-image-title="Infografía - <?php echo htmlspecialchars($video['titulo'], ENT_QUOTES, 'UTF-8'); ?>"
                                            aria-label="Ampliar infografía">
                                            <i class="fas fa-expand me-1"></i>Ampliar
                                        </button>
                                        <a href="<?php echo $archivos['imagen']; ?>" download class="btn btn-sm focus-visible"
                                            style="background: var(--anime-green); color: white;"
                                            aria-label="Descargar infografía">
                                            <i class="fas fa-download me-1"></i>Descargar
                                        </a>
                                    </div>
                                </div>
                            <?php endif; ?>

                            <!-- PDF -->
                            <?php if ($archivos['pdf']): ?>
                                <div class="pdf-preview">
                                    <div style="color: var(--anime-red); font-weight: 600; margin-bottom: 10px;">
                                        <i class="fas fa-file-pdf me-2"></i>
                                        MATERIAL PDF DEL EPISODIO
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div>
                                            <i class="fas fa-file-pdf fa-2x me-2" style="color: var(--anime-red);"></i>
                                            <span style="color: #CCCCCC;">Material complementario</span>
                                        </div>
                                        <div>
                                            <a href="<?php echo $archivos['pdf']; ?>" target="_blank"
                                                class="btn btn-sm me-1 focus-visible"
                                                style="background: var(--anime-red); color: white;" rel="noopener noreferrer"
                                                aria-label="Ver PDF">
                                                <i class="fas fa-eye me-1"></i>Ver PDF
                                            </a>
                                            <a href="<?php echo $archivos['pdf']; ?>" download class="btn btn-sm focus-visible"
                                                style="border: 1px solid var(--anime-red); color: var(--anime-red);"
                                                aria-label="Descargar PDF">
                                                <i class="fas fa-download me-1"></i>Descargar
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>

                            <!-- AUDIO -->
                            <?php if ($archivos['audio']): ?>
                                <div class="audio-player">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <div style="color: var(--anime-purple); font-weight: 600;">
                                            <i class="fas fa-podcast me-1"></i>
                                            PODCAST DEL EPISODIO
                                        </div>
                                        <span class="badge" style="background: var(--anime-purple);">¡Escucha sin
                                            pantalla!</span>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <audio controls style="width: 100%; height: 40px;"
                                            aria-label="Reproductor de audio del episodio">
                                            <source src="<?php echo $archivos['audio']; ?>" type="audio/mpeg">
                                            Tu navegador no soporta el elemento de audio.
                                        </audio>
                                        <a href="<?php echo $archivos['audio']; ?>" download
                                            class="btn btn-sm ms-2 focus-visible"
                                            style="background: var(--anime-green); color: white;" aria-label="Descargar audio">
                                            <i class="fas fa-download"></i>
                                        </a>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <!-- HERRAMIENTAS ANIME -->
    <div class="container mb-5" id="herramientas">
        <div class="card border-0" style="background: rgba(26, 26, 46, 0.8); border: 3px solid var(--anime-blue);">
            <div class="card-header text-center py-3" style="background: linear-gradient(45deg, #1A1A2E, #16213E);">
                <h4 class="mb-0" style="color: var(--anime-blue); font-family: 'Comic Neue', cursive;">
                    <i class="fas fa-tools me-2"></i>TUS PODERES ESPECIALES
                </h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4 mb-4">
                        <div class="text-center p-3 h-100"
                            style="background: rgba(78, 205, 196, 0.1); border-radius: 15px; border: 2px solid var(--anime-blue);">
                            <i class="fas fa-robot fa-3x mb-3" style="color: var(--anime-blue);"></i>
                            <h5 style="color: var(--anime-blue);">CHATBOT ANIME</h5>
                            <p style="color: #CCCCCC;">Tu asistente anime 24/7 para resolver todas tus dudas</p>
                            <p class="small" style="color: var(--anime-blue);">¡Haz cualquier pregunta!</p>
                            <button id="open-chatbot-from-tools" class="btn btn-sm mt-2 focus-visible"
                                style="background: var(--anime-blue); color: white;" aria-label="Abrir chatbot anime">
                                <i class="fas fa-comment me-2"></i>¡ABRIR CHATBOT!
                            </button>
                        </div>
                    </div>

                    <div class="col-md-4 mb-4">
                        <div class="text-center p-3 h-100"
                            style="background: rgba(239, 71, 111, 0.1); border-radius: 15px; border: 2px solid var(--anime-red);">
                            <i class="fas fa-gamepad fa-3x mb-3" style="color: var(--anime-red);"></i>
                            <h5 style="color: var(--anime-red);">SIMULADOR GAMING</h5>
                            <p style="color: #CCCCCC;">Practica con exámenes como en un videojuego</p>
                            <p class="small" style="color: var(--anime-red);">5 años de exámenes (2021-2025)</p>

                            <!-- BOTÓN SIMULADOR -->
                            <a href="<?php echo $config['simulador_completo']; ?>" target="_blank"
                                class="btn btn-sm mt-2 focus-visible"
                                style="background: var(--anime-red); color: white;"
                                onclick="gtag('event', 'simulator_start', {'event_category': 'engagement'});"
                                rel="noopener noreferrer" aria-label="Iniciar simulador de examen">
                                <i class="fas fa-play me-2"></i>¡INICIAR SIMULADOR!
                            </a>

                            <div class="mt-2 small" style="color: var(--anime-green);">
                                <i class="fas fa-check-circle me-1"></i>Simulador verificado ✓
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 mb-4">
                        <div class="text-center p-3 h-100"
                            style="background: rgba(255, 209, 102, 0.1); border-radius: 15px; border: 2px solid var(--anime-yellow);">
                            <i class="fab fa-udemy fa-3x mb-3" style="color: var(--anime-yellow);"></i>
                            <h5 style="color: var(--anime-yellow);">CURSO UDEMY</h5>
                            <p style="color: #CCCCCC;">128 preguntas resueltas con método anime</p>
                            <p class="small" style="color: var(--anime-yellow);">Método Triple con NotebookLM</p>
                            <a href="<?php echo $config['udemy_url']; ?>" target="_blank"
                                class="btn btn-sm mt-2 focus-visible"
                                style="background: var(--anime-yellow); color: #1A1A2E;" rel="noopener noreferrer"
                                aria-label="Acceder al curso Udemy">
                                <i class="fab fa-udemy me-1"></i>¡ACCEDER AL CURSO!
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- SECCIÓN TUTOR IA -->
    <section class="tutor-ia-section" style="padding: 100px 0; background: linear-gradient(135deg, #1A1A2E 0%, #16213E 100%); color: white; border-top: 3px solid var(--anime-pink); text-align: center;">
        <div class="container">
            <h2 class="cyber-font" style="font-size: 2.5rem; margin-bottom: 30px; font-weight: bold; background: linear-gradient(90deg, var(--anime-blue), var(--anime-purple)); -webkit-background-clip: text; background-clip: text; color: transparent;">Tu Tutor con Inteligencia Artificial</h2>
            <div style="max-width: 800px; margin: 0 auto;">
                <p style="font-size: 1.2rem; margin-bottom: 40px; color: #bdc3c7;">Estudia con un tutor personalizado impulsado por Claude AI de Anthropic. Te explica cualquier tema del temario ECOEMS, te hace quizzes interactivos y adapta el estudio a tus áreas débiles. Disponible 24/7 por solo $25 pesos al mes.</p>
                <a href="https://cyberedumx.lovable.app/" target="_blank" class="btn btn-lg px-5 py-3" style="background: linear-gradient(45deg, var(--anime-pink), var(--anime-red)); color: white; border-radius: 50px; font-weight: bold; font-size: 1.2rem; border: none; box-shadow: 0 10px 20px rgba(255, 107, 139, 0.4);">Probar el Tutor IA Gratis</a>
            </div>
        </div>
    </section>

    <!-- FOOTER ANIME -->
    <footer class="py-5 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4">
                    <h5 style="color: var(--anime-yellow);">
                        <i class="fas fa-gamepad me-2"></i>
                        ECOEMS 2026 ANIME
                    </h5>
                    <p class="mb-2" style="color: white;"><strong>LA AVENTURA PARA APROBAR TU EXAMEN</strong></p>
                    <p style="color: #CCCCCC;">Método anime de dos fases para dominar el examen.</p>
                    <p style="color: var(--anime-blue);">Versión <?php echo $config['version']; ?> | 91 Episodios</p>
                </div>
                <div class="col-md-4 mb-4">
                    <h5 style="color: var(--anime-green);">
                        <i class="fas fa-link me-2"></i>ENLACES RÁPIDOS
                    </h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#inicio" style="color: white; text-decoration: none;"
                                class="focus-visible">🏠 Inicio</a></li>
                        <li class="mb-2"><a href="#filtro-fijo" style="color: white; text-decoration: none;"
                                class="focus-visible">🔍 Filtrar Videos</a></li>
                        <li class="mb-2"><a href="#herramientas" style="color: white; text-decoration: none;"
                                class="focus-visible">⚡ Tus Poderes</a></li>
                        <li class="mb-2"><a href="<?php echo $config['simulador_completo']; ?>"
                                style="color: white; text-decoration: none;" class="focus-visible">🎮 Batalla Final</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4 mb-4">
                    <h5 style="color: var(--anime-pink);">
                        <i class="fas fa-envelope me-2"></i>CONTACTO
                    </h5>
                    <ul class="list-unstyled">
                        <li class="mb-2">
                            <i class="fab fa-whatsapp me-2" style="color: var(--anime-green);"></i>
                            <span style="color: white;"><?php echo $config['whatsapp']; ?></span>
                        </li>
                        <li class="mb-2">
                            <i class="fas fa-envelope me-2" style="color: var(--anime-blue);"></i>
                            <span style="color: white;"><?php echo $config['email']; ?></span>
                        </li>
                        <li class="mb-2">
                            <i class="fas fa-globe me-2" style="color: var(--anime-yellow);"></i>
                            <span style="color: white;"><?php echo $config['sitio_principal']; ?></span>
                        </li>
                    </ul>
                    <div class="mt-3">
                        <span class="badge me-2 p-2" style="background: var(--anime-green);">
                            <i class="fas fa-video me-1"></i>
                            <span id="footerProgress">0/91</span>
                        </span>
                        <span class="badge p-2" style="background: var(--anime-purple);">
                            <i class="fas fa-headphones me-1"></i>
                            <span id="footerAudios"><?php echo $archivos_encontrados['audios']; ?>/91</span>
                        </span>
                    </div>
                </div>
            </div>
            <hr style="background: var(--anime-pink); height: 2px;">
            <div class="text-center">
                <p class="mb-0" style="color: white;">
                    &copy; <?php echo date('Y'); ?> <?php echo $config['autor']; ?>. Aventura Anime ECOEMS 2026.
                </p>
                <p class="mt-2" style="color: var(--anime-blue);">
                    <i class="fas fa-sync-alt me-1"></i>
                    ¡Actualización a Guía 2026 garantizada cuando se publique en abril 2026!
                </p>
                <p class="mt-2 small" style="color: var(--anime-yellow);">
                    <i class="fas fa-map-marker-alt me-1"></i>
                    CyberEdu MX - ¡Educación Anime en México!
                </p>
            </div>
        </div>
    </footer>

    <!-- ==================== CHATBOT ANIME ECOEMS 2026 ==================== -->
    <div id="chatbot-anime-container" style="position: fixed; bottom: 20px; right: 20px; z-index: 9999;">
        <!-- Botón flotante anime -->
        <button id="chatbot-toggle-btn" style="background: linear-gradient(45deg, #FF6B8B, #EF476F);
                       color: white; border: none; border-radius: 50%;
                       width: 70px; height: 70px; font-size: 28px;
                       cursor: pointer; box-shadow: 0 8px 25px rgba(255, 107, 139, 0.5);
                       transition: all 0.3s; display: flex; align-items: center;
                       justify-content: center; position: relative;" class="focus-visible"
            aria-label="Abrir chatbot anime" aria-expanded="false" aria-controls="chatbot-window">
            <i class="fas fa-robot"></i>
            <span id="chatbot-notification" style="position: absolute; top: -5px; right: -5px;
                   background: var(--anime-green); color: white; border-radius: 50%;
                   width: 25px; height: 25px; font-size: 12px; display: none;
                   align-items: center; justify-content: center; border: 2px solid white;" aria-label="Nuevo mensaje">
                💬
            </span>
        </button>

        <!-- Ventana del chat -->
        <div id="chatbot-window" style="display: none; width: 380px; height: 550px;
                    background: rgba(26, 26, 46, 0.98); border-radius: 20px;
                    border: 3px solid var(--anime-pink); box-shadow: 0 15px 40px rgba(0,0,0,0.6);
                    backdrop-filter: blur(10px); overflow: hidden; position: absolute;
                    bottom: 90px; right: 0; animation: slideInUpChat 0.3s ease-out;" role="dialog"
            aria-label="Chatbot anime asistente" aria-modal="true">

            <!-- Header -->
            <div style="background: linear-gradient(45deg, #1A1A2E, #16213E);
                        padding: 15px 20px; border-bottom: 2px solid var(--anime-pink);">
                <div style="display: flex; align-items: center;">
                    <div style="position: relative;">
                        <i class="fas fa-robot" style="color: var(--anime-blue); font-size: 24px;
                           margin-right: 12px; animation: float 3s ease-in-out infinite;"></i>
                        <div style="position: absolute; top: -5px; right: -5px; width: 12px;
                             height: 12px; background: var(--anime-green); border-radius: 50%;
                             border: 2px solid #1A1A2E;"></div>
                    </div>
                    <div>
                        <h5 style="margin: 0; color: white; font-family: 'Comic Neue', cursive;
                                   font-weight: 700; font-size: 1.1rem;">
                            Anime Assistant ECOEMS 2026
                        </h5>
                        <p style="margin: 2px 0 0; color: var(--anime-yellow); font-size: 0.8rem;">
                            <i class="fas fa-bolt"></i> Asistente IA 24/7
                        </p>
                    </div>
                    <button id="chatbot-close-btn" style="margin-left: auto; background: none;
                            border: none; color: white; cursor: pointer; font-size: 18px;
                            transition: transform 0.2s;" class="focus-visible" aria-label="Cerrar chatbot">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>

            <!-- Mensajes -->
            <div id="chatbot-messages" style="height: 380px; overflow-y: auto; padding: 20px;
                        scroll-behavior: smooth;" role="log" aria-live="polite">

                <!-- Mensaje de bienvenida -->
                <div class="chatbot-message chatbot-bot-message">
                    <div class="chatbot-avatar">
                        <i class="fas fa-robot"></i>
                    </div>
                    <div class="chatbot-content">
                        <div class="chatbot-name" style="color: var(--anime-blue);">
                            <i class="fas fa-robot"></i> Anime Assistant
                        </div>
                        <div class="chatbot-text">
                            🎌 <strong>¡Konnichiwa, futuro héroe!</strong><br><br>
                            Soy tu asistente anime del ECOEMS 2026. Puedo:
                            <br>• 📚 Explicarte cualquier video
                            <br>• 🎯 Recomendarte episodios
                            <br>• 📊 Mostrar tu progreso
                            <br>• 💪 Generar ejercicios
                            <br><br>
                            <em>¿En qué puedo ayudarte hoy?</em>
                        </div>
                        <div class="chatbot-time">Ahora</div>
                    </div>
                </div>

            </div>

            <!-- Input y controles -->
            <div style="padding: 15px 20px; border-top: 1px solid rgba(255,255,255,0.1);
                        background: rgba(0,0,0,0.2);">

                <!-- Preguntas rápidas -->
                <div id="chatbot-quick-questions"
                    style="display: flex; gap: 8px; margin-bottom: 12px; flex-wrap: wrap;">
                    <button class="chatbot-quick-btn focus-visible" data-question="¿Qué es el ECOEMS?"
                        aria-label="Preguntar: ¿Qué es el ECOEMS?">
                        ¿Qué es el ECOEMS?
                    </button>
                    <button class="chatbot-quick-btn focus-visible" data-question="Recomiéndame un video"
                        aria-label="Pedir recomendación de video">
                        📹 Videos
                    </button>
                    <button class="chatbot-quick-btn focus-visible" data-question="Mi progreso"
                        aria-label="Ver mi progreso">
                        📊 Progreso
                    </button>
                    <button class="chatbot-quick-btn focus-visible" data-question="Ejercicio de matemáticas"
                        aria-label="Pedir ejercicio de matemáticas">
                        🧠 Ejercicio
                    </button>
                </div>

                <!-- Área de entrada -->
                <div style="display: flex; gap: 10px;">
                    <input type="text" id="chatbot-input" placeholder="Escribe tu pregunta sobre ECOEMS 2026..." style="flex: 1; padding: 12px 18px; border-radius: 25px;
                                  border: 2px solid var(--anime-purple); 
                                  background: rgba(255,255,255,0.1); 
                                  color: white; outline: none; font-family: 'Poppins';
                                  font-size: 14px; transition: all 0.3s;" class="focus-visible"
                        aria-label="Escribe tu pregunta para el chatbot">
                    <button id="chatbot-send-btn" style="background: linear-gradient(45deg, #FF6B8B, #EF476F);
                                   color: white; border: none; border-radius: 50%;
                                   width: 48px; height: 48px; cursor: pointer;
                                   display: flex; align-items: center; justify-content: center;
                                   transition: all 0.3s; font-size: 18px;" class="focus-visible"
                        aria-label="Enviar mensaje">
                        <i class="fas fa-paper-plane"></i>
                    </button>
                </div>

                <!-- Indicador de escritura -->
                <div id="chatbot-typing" style="display: none; margin-top: 10px; padding: 8px 15px;
                     background: rgba(78, 205, 196, 0.1); border-radius: 15px;
                     border-left: 3px solid var(--anime-blue);" aria-label="Chatbot está escribiendo...">
                    <div style="display: flex; align-items: center; gap: 10px;">
                        <div style="display: flex; gap: 4px;">
                            <div class="typing-dot" style="animation-delay: 0s;"></div>
                            <div class="typing-dot" style="animation-delay: 0.2s;"></div>
                            <div class="typing-dot" style="animation-delay: 0.4s;"></div>
                        </div>
                        <span style="color: var(--anime-blue); font-size: 13px;">
                            Anime Assistant está pensando...
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- SCRIPTS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- CARGAR SCRIPTS CRÍTICOS PRIMERO -->
    <script>
        // ==================== CÓDIGO CRÍTICO INICIAL ====================
        // Función para cargar recursos no críticos
        function loadNonCriticalResources() {
            // Esta función se puede usar para cargar recursos adicionales
            // después de que la página esté lista
        }

        // Detectar si el usuario prefiere movimiento reducido
        const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

        if (prefersReducedMotion) {
            // Desactivar animaciones si el usuario prefiere movimiento reducido
            document.documentElement.style.setProperty('--animation-duration', '0s');
        }
    </script>

    <!-- SCRIPT PRINCIPAL (DIFERIDO) -->
    <script defer>
        // ==================== REPRODUCTOR GRANDE MEJORADO ====================
        // Variables globales
        let videoProgress = JSON.parse(localStorage.getItem('ecoems2026_progress') || '{"watched":[], "percentage":0}');
        const TOTAL_VIDEOS = 91;
        let currentVideoUrl = '';
        let currentVideoTitle = '';
        let currentVideoDuration = '';
        let isMinimized = false;
        let currentFilter = 'all';
        let videoItems = [];

        // Inicialización
        document.addEventListener('DOMContentLoaded', function () {
            console.log('ECOEMS 2026 ANIME EDITION - Versión 9.0 - Con Chatbot Integrado');

            // Obtener todos los elementos de video
            videoItems = Array.from(document.querySelectorAll('.video-item'));
            console.log('Total videos cargados:', videoItems.length);

            // Configurar todos los event listeners
            setupEventListeners();

            // Actualizar progreso
            updateStats();

            // Configurar controles del reproductor
            document.getElementById('closeVideoPlayer').addEventListener('click', closeVideoPlayer);
            document.getElementById('minimizePlayer').addEventListener('click', toggleMinimize);
            document.getElementById('toggleFullscreen').addEventListener('click', toggleFullscreen);
            // Configurar filtros fijos
            setupFixedFilters();

            // Cerrar con tecla ESC
            document.addEventListener('keydown', function (e) {
                if (e.key === 'Escape') {
                    closeVideoPlayer();
                }
            });

            // Cerrar al hacer clic en el overlay
            document.getElementById('playerOverlay').addEventListener('click', closeVideoPlayer);

            // Botones reset filtro
            document.getElementById('reset-filtro-fijo').addEventListener('click', resetFilter);
            document.getElementById('reset-filtro-videos').addEventListener('click', resetFilter);

            // Botón para abrir chatbot desde herramientas
            document.getElementById('open-chatbot-from-tools').addEventListener('click', function () {
                if (typeof window.openChatbot === 'function') {
                    window.openChatbot();
                }
            });

            // Cargar recursos no críticos después de que todo esté listo
            setTimeout(loadNonCriticalResources, 1000);
        });

        function setupFixedFilters() {
            console.log('Configurando filtros fijos...');

            const contadorFijo = document.getElementById('contador-numero-fijo');
            const contadorVideos = document.getElementById('contador-numero-videos');
            const resetFiltroFijo = document.getElementById('reset-filtro-fijo');
            const resetFiltroVideos = document.getElementById('reset-filtro-videos');

            // Función para aplicar filtro
            function applyFilter(filter) {
                console.log('Aplicando filtro:', filter);
                let visibleCount = 0;

                videoItems.forEach(item => {
                    if (filter === 'all' || item.getAttribute('data-materia') === filter) {
                        item.style.display = 'block';
                        item.style.animation = 'fadeInUp 0.5s ease-out';
                        visibleCount++;
                    } else {
                        item.style.display = 'none';
                    }
                });

                // Actualizar contadores
                contadorFijo.textContent = visibleCount;
                contadorVideos.textContent = visibleCount;

                // Mostrar/ocultar botones reset
                if (filter === 'all') {
                    resetFiltroFijo.style.display = 'none';
                    resetFiltroVideos.style.display = 'none';
                } else {
                    resetFiltroFijo.style.display = 'flex';
                    resetFiltroVideos.style.display = 'inline-block';
                }

                // Guardar filtro actual
                currentFilter = filter;

                // Google Analytics
                if (typeof gtag !== 'undefined') {
                    gtag('event', 'filter_apply', {
                        'event_category': 'anime_filter',
                        'event_label': filter,
                        'value': 1
                    });
                }

                // Hacer scroll suave hacia los videos si no es "all"
                if (filter !== 'all') {
                    setTimeout(() => {
                        document.getElementById('contenedor-videos').scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });
                    }, 300);
                }
            }

            // Agregar event listeners a los botones de filtro fijo
            document.querySelectorAll('#filtro-fijo .filter-btn').forEach(button => {
                button.addEventListener('click', function (e) {
                    e.preventDefault();

                    console.log('Botón de filtro fijo clickeado:', this.getAttribute('data-filter'));

                    // Remover active de todos
                    document.querySelectorAll('#filtro-fijo .filter-btn').forEach(btn => {
                        btn.classList.remove('active');
                    });

                    // Agregar active al actual
                    this.classList.add('active');

                    const filter = this.getAttribute('data-filter');

                    // Aplicar filtro
                    applyFilter(filter);
                });
            });

            // Función para resetear filtro
            window.resetFilter = function () {
                console.log('Reseteando filtro');
                const allBtn = document.querySelector('#filtro-fijo .filter-btn[data-filter="all"]');
                if (allBtn) {
                    allBtn.click();
                }
            };

            // Inicializar con filtro "all"
            applyFilter('all');
        }

        function setupEventListeners() {
            // 1. Videos - Usar reproductor grande
            document.addEventListener('click', function (e) {
                // Botones "VER EPISODIO"
                const youtubeBtn = e.target.closest('.play-video-fixed');
                if (youtubeBtn) {
                    e.preventDefault();
                    const videoUrl = youtubeBtn.getAttribute('data-video-url');
                    const videoTitle = youtubeBtn.getAttribute('data-video-title');
                    const videoDuration = youtubeBtn.getAttribute('data-video-duration');

                    if (!videoUrl || videoUrl.includes('dQw4w9WgXcQ')) {
                        alert('¡Video en preparación! Este episodio estará disponible pronto.');
                        return;
                    }

                    // Abrir en reproductor grande
                    openLargeVideoPlayer(videoUrl, videoTitle, videoDuration);

                    // Google Analytics
                    if (typeof gtag !== 'undefined') {
                        gtag('event', 'video_play', {
                            'event_category': 'anime_video',
                            'event_label': 'Episodio Anime',
                            'value': 1
                        });
                    }
                    return;
                }

                // Miniaturas de video
                const videoThumbnail = e.target.closest('.video-thumbnail');
                if (videoThumbnail) {
                    e.preventDefault();
                    const videoUrl = videoThumbnail.getAttribute('data-video-url');
                    const videoTitle = videoThumbnail.getAttribute('data-video-title');
                    const videoDuration = videoThumbnail.getAttribute('data-video-duration');

                    if (!videoUrl || videoUrl.includes('dQw4w9WgXcQ')) {
                        alert('¡Video en preparación! Este episodio estará disponible pronto.');
                        return;
                    }

                    // Abrir en reproductor grande
                    openLargeVideoPlayer(videoUrl, videoTitle, videoDuration);

                    // Google Analytics
                    if (typeof gtag !== 'undefined') {
                        gtag('event', 'video_play', {
                            'event_category': 'anime_video',
                            'event_label': 'Episodio Anime',
                            'value': 1
                        });
                    }
                    return;
                }

                // Botones de play
                const playButton = e.target.closest('.play-button');
                if (playButton) {
                    e.preventDefault();
                    const thumbnail = playButton.closest('.video-thumbnail');
                    if (thumbnail) {
                        const videoUrl = thumbnail.getAttribute('data-video-url');
                        const videoTitle = thumbnail.getAttribute('data-video-title');
                        const videoDuration = thumbnail.getAttribute('data-video-duration');

                        if (!videoUrl || videoUrl.includes('dQw4w9WgXcQ')) {
                            alert('¡Video en preparación! Este episodio estará disponible pronto.');
                            return;
                        }

                        // Abrir en reproductor grande
                        openLargeVideoPlayer(videoUrl, videoTitle, videoDuration);

                        // Google Analytics
                        if (typeof gtag !== 'undefined') {
                            gtag('event', 'video_play', {
                                'event_category': 'anime_video',
                                'event_label': 'Episodio Anime',
                                'value': 1
                            });
                        }
                    }
                    return;
                }

                // Imágenes de infografía
                const infografiaImg = e.target.closest('.infografia-imagen');
                if (infografiaImg) {
                    e.preventDefault();
                    const imageUrl = infografiaImg.getAttribute('data-image-url');
                    const imageTitle = infografiaImg.getAttribute('data-image-title');
                    openImageModal(imageUrl, imageTitle);
                    return;
                }

                // Botones "Ampliar" de infografía
                const ampliarBtn = e.target.closest('.infografia-directa button[data-image-url]');
                if (ampliarBtn) {
                    e.preventDefault();
                    const imageUrl = ampliarBtn.getAttribute('data-image-url');
                    const imageTitle = ampliarBtn.getAttribute('data-image-title');
                    openImageModal(imageUrl, imageTitle);
                    return;
                }

                // Progreso
                const progressBtn = e.target.closest('.btn-progress');
                if (progressBtn) {
                    e.preventDefault();
                    const videoId = parseInt(progressBtn.getAttribute('data-video-id'));
                    toggleProgress(videoId, progressBtn);
                    return;
                }
            });
        }

        // Función para abrir reproductor grande
        function openLargeVideoPlayer(videoUrl, videoTitle, videoDuration) {
            if (!videoUrl || videoUrl.includes('dQw4w9WgXcQ')) {
                alert('¡Video en preparación! Este episodio estará disponible pronto.');
                return;
            }

            // Guardar información actual
            currentVideoUrl = videoUrl;
            currentVideoTitle = videoTitle;
            currentVideoDuration = videoDuration;

            // RASTREO AUTOMÁTICO
            if (window.Tracking) {
                const match = videoTitle.match(/Video\s*(\d+)/i);
                if (match) {
                    window.Tracking.trackVideo(match[1], 'General');
                }
            }

            // Actualizar título
            const titleElement = document.getElementById('videoPlayerTitle');
            if (titleElement) {
                titleElement.textContent = '🎬 ' + videoTitle.substring(0, 50) + (videoTitle.length > 50 ? '...' : '');
            }

            // Actualizar duración
            const durationElement = document.getElementById('playerDuration');
            if (durationElement && videoDuration) {
                durationElement.textContent = videoDuration;
            }

            // Establecer URL del video con autoplay
            const videoPlayer = document.getElementById('videoPlayer');
            if (videoPlayer) {
                // Primero vaciar el src para evitar conflictos
                videoPlayer.src = '';

                // Crear nueva URL con autoplay
                const embedUrl = videoUrl.includes('?') ?
                    videoUrl + '&autoplay=1' :
                    videoUrl + '?autoplay=1';

                // Pequeño retraso para evitar conflictos
                setTimeout(() => {
                    videoPlayer.src = embedUrl;
                }, 100);
            }

            // Mostrar reproductor y overlay
            const playerContainer = document.getElementById('videoPlayerContainer');
            const playerOverlay = document.getElementById('playerOverlay');

            if (playerContainer) {
                // Remover estado minimizado si existe
                playerContainer.classList.remove('minimized');
                isMinimized = false;

                // Actualizar botón minimizar
                const minimizeBtn = document.getElementById('minimizePlayer');
                if (minimizeBtn) {
                    minimizeBtn.innerHTML = '<i class="fas fa-window-minimize"></i><span>Minimizar</span>';
                }

                playerContainer.classList.add('active');
                playerContainer.style.display = 'flex';
            }

            if (playerOverlay) {
                playerOverlay.classList.add('active');
            }

            // Deshabilitar scroll del body
            document.body.style.overflow = 'hidden';
        }

        // Función para cerrar reproductor
        function closeVideoPlayer() {
            const playerContainer = document.getElementById('videoPlayerContainer');
            const playerOverlay = document.getElementById('playerOverlay');
            const videoPlayer = document.getElementById('videoPlayer');

            // Ocultar reproductor y overlay
            if (playerContainer) {
                playerContainer.classList.remove('active');

                setTimeout(() => {
                    playerContainer.style.display = 'none';
                }, 300);
            }

            if (playerOverlay) {
                playerOverlay.classList.remove('active');
            }

            // Detener video
            if (videoPlayer) {
                // Enviar comando para pausar video de YouTube
                try {
                    videoPlayer.contentWindow.postMessage('{"event":"command","func":"pauseVideo","args":""}', '*');
                } catch (e) {
                    console.log('No se pudo pausar el video automáticamente');
                }

                // Vaciar src después de un tiempo
                setTimeout(() => {
                    videoPlayer.src = '';
                }, 500);
            }

            // Habilitar scroll del body
            document.body.style.overflow = '';
        }

        // Función para minimizar/maximizar reproductor
        function toggleMinimize() {
            const playerContainer = document.getElementById('videoPlayerContainer');
            const minimizeBtn = document.getElementById('minimizePlayer');

            if (!isMinimized) {
                // Minimizar
                playerContainer.classList.add('minimized');
                minimizeBtn.innerHTML = '<i class="fas fa-window-maximize"></i><span>Maximizar</span>';
                isMinimized = true;
            } else {
                // Maximizar
                playerContainer.classList.remove('minimized');
                minimizeBtn.innerHTML = '<i class="fas fa-window-minimize"></i><span>Minimizar</span>';
                isMinimized = false;
            }
        }

        // Función para pantalla completa
        function toggleFullscreen() {
            const videoPlayer = document.getElementById('videoPlayer');
            if (videoPlayer) {
                if (videoPlayer.requestFullscreen) {
                    videoPlayer.requestFullscreen();
                } else if (videoPlayer.webkitRequestFullscreen) {
                    videoPlayer.webkitRequestFullscreen();
                } else if (videoPlayer.msRequestFullscreen) {
                    videoPlayer.msRequestFullscreen();
                }
            }
        }


        // Función para mostrar notificación
        function showNotification(message, type) {
            const notification = document.createElement('div');
            notification.className = `notification ${type}`;
            notification.style.cssText = `
                position: fixed;
                top: 100px;
                right: 20px;
                background: ${type === 'success' ? 'var(--anime-green)' : 'var(--anime-red)'};
                color: white;
                padding: 15px 20px;
                border-radius: 10px;
                z-index: 10000;
                box-shadow: 0 5px 15px rgba(0,0,0,0.3);
                animation: slideInRight 0.3s ease-out;
                font-family: 'Comic Neue', cursive;
                font-weight: 600;
            `;

            notification.innerHTML = `
                <i class="fas fa-${type === 'success' ? 'check-circle' : 'exclamation-circle'} me-2"></i>
                ${message}
            `;

            document.body.appendChild(notification);

            setTimeout(() => {
                notification.style.animation = 'slideOutRight 0.3s ease-out forwards';
                setTimeout(() => {
                    document.body.removeChild(notification);
                }, 300);
            }, 3000);

            // Agregar estilos de animación si no existen
            if (!document.getElementById('notification-styles')) {
                const style = document.createElement('style');
                style.id = 'notification-styles';
                style.textContent = `
                    @keyframes slideInRight {
                        from { transform: translateX(100%); opacity: 0; }
                        to { transform: translateX(0); opacity: 1; }
                    }
                    @keyframes slideOutRight {
                        from { transform: translateX(0); opacity: 1; }
                        to { transform: translateX(100%); opacity: 0; }
                    }
                `;
                document.head.appendChild(style);
            }
        }

        // Función para abrir modal de imágenes
        function openImageModal(imageUrl, imageTitle) {
            if (!imageUrl) {
                alert('No hay infografía disponible para este episodio');
                return;
            }

            const titleElement = document.getElementById('imageModalTitle');
            const modalImage = document.getElementById('modalImage');

            if (titleElement) titleElement.textContent = '🖼️ ' + imageTitle;
            if (modalImage) {
                modalImage.src = imageUrl;
                modalImage.alt = imageTitle;
            }

            const imageModal = new bootstrap.Modal(document.getElementById('imageModal'));
            imageModal.show();
        }

        // ==================== PROGRESO ====================
        function toggleProgress(videoId, button) {
            const index = videoProgress.watched.indexOf(videoId);

            if (index === -1) {
                // Marcar como visto
                videoProgress.watched.push(videoId);
                button.innerHTML = '<i class="fas fa-check-circle me-2"></i><span>¡VISTO!</span>';
                button.style.background = 'var(--anime-green)';
                button.style.color = 'white';
                button.style.borderColor = 'var(--anime-green)';

                // Mostrar notificación
                showNotification('¡Episodio marcado como visto!', 'success');

                // Disparar evento para el chatbot
                const event = new CustomEvent('progressUpdated', {
                    detail: { videoId: videoId }
                });
                document.dispatchEvent(event);
            } else {
                // Quitar visto
                videoProgress.watched.splice(index, 1);
                button.innerHTML = '<i class="far fa-circle me-1"></i><span>¡MARCAR COMO VISTO!</span>';
                button.style.background = 'rgba(78, 205, 196, 0.2)';
                button.style.color = 'var(--anime-blue)';
                button.style.borderColor = 'var(--anime-blue)';
            }

            // Actualizar porcentaje
            videoProgress.percentage = Math.round((videoProgress.watched.length / TOTAL_VIDEOS) * 100);

            // Guardar en localStorage
            localStorage.setItem('ecoems2026_progress', JSON.stringify(videoProgress));

            // Actualizar estadísticas
            updateStats();
        }


        function updateStats() {
            const watchedCount = videoProgress.watched.length;
            const percentage = Math.round((watchedCount / TOTAL_VIDEOS) * 100);

            // Actualizar contador de progreso
            const footerProgress = document.getElementById('footerProgress');
            if (footerProgress) {
                footerProgress.textContent = watchedCount + '/' + TOTAL_VIDEOS;
            }

            // Actualizar porcentaje en la página principal
            document.querySelectorAll('.fa-trophy').forEach(icon => {
                const parentCard = icon.closest('.text-center');
                if (parentCard) {
                    const h3 = parentCard.querySelector('h3');
                    if (h3) {
                        h3.textContent = percentage + '%';
                    }
                }
            });
        }

        // Detectar cuando el usuario sale de la página
        window.addEventListener('beforeunload', function () {
            // Detener el video antes de salir
            const videoPlayer = document.getElementById('videoPlayer');
            if (videoPlayer && videoPlayer.src) {
                try {
                    videoPlayer.contentWindow.postMessage('{"event":"command","func":"pauseVideo","args":""}', '*');
                } catch (e) {
                    // Ignorar errores
                }
            }
        });
    </script>

    <!-- ==================== SCRIPT DEL CHATBOT (DIFERIDO) ==================== -->
    <script defer>
        // CHATBOT ANIME ECOEMS 2026 - SCRIPT PRINCIPAL
        document.addEventListener('DOMContentLoaded', function () {
            console.log('🎌 Chatbot Anime ECOEMS 2026 - Cargando...');

            // Elementos del DOM
            const chatbotToggle = document.getElementById('chatbot-toggle-btn');
            const chatbotWindow = document.getElementById('chatbot-window');
            const chatbotClose = document.getElementById('chatbot-close-btn');
            const chatbotInput = document.getElementById('chatbot-input');
            const chatbotSend = document.getElementById('chatbot-send-btn');
            const chatbotMessages = document.getElementById('chatbot-messages');
            const chatbotTyping = document.getElementById('chatbot-typing');
            const quickQuestions = document.querySelectorAll('.chatbot-quick-btn');

            // Estado del chatbot
            const chatbotState = {
                isOpen: false,
                isTyping: false,
                conversationId: generateConversationId(),
                studentId: getStudentId(),
                progress: getStudentProgress(),
                history: []
            };

            // URLs
            const CHATBOT_API_URL = '<?php echo $config['chatbot_api']; ?>';
            const FALLBACK_API_URL = 'chatbot/chatbot.php';

            // ==================== FUNCIONES PRINCIPALES ====================

            function generateConversationId() {
                return 'conv_' + Date.now() + '_' + Math.random().toString(36).substr(2, 9);
            }

            function getStudentId() {
                let id = localStorage.getItem('ecoems_student_id');
                if (!id) {
                    id = 'student_' + Math.random().toString(36).substr(2, 9);
                    localStorage.setItem('ecoems_student_id', id);
                }
                return id;
            }

            function getStudentProgress() {
                try {
                    const progress = JSON.parse(localStorage.getItem('ecoems2026_progress') || '{"watched": []}');
                    return progress.watched || [];
                } catch (e) {
                    return [];
                }
            }

            // ==================== MANEJO DE INTERFAZ ====================

            chatbotToggle.addEventListener('click', function () {
                toggleChatbot();
            });

            chatbotClose.addEventListener('click', function () {
                closeChatbot();
            });

            function toggleChatbot() {
                if (chatbotState.isOpen) {
                    closeChatbot();
                } else {
                    openChatbot();
                }
            }

            // Función global para abrir chatbot desde otras partes
            window.openChatbot = function () {
                if (!chatbotState.isOpen) {
                    openChatbot();
                }
            };

            function openChatbot() {
                chatbotState.isOpen = true;
                chatbotWindow.style.display = 'block';
                chatbotWindow.style.animation = 'slideInUpChat 0.3s ease-out';

                // Actualizar aria-expanded
                chatbotToggle.setAttribute('aria-expanded', 'true');

                // Ocultar notificación
                document.getElementById('chatbot-notification').style.display = 'none';

                // Enfocar input después de animación
                setTimeout(() => {
                    chatbotInput.focus();
                }, 400);

                // Registrar evento en analytics
                if (typeof gtag !== 'undefined') {
                    gtag('event', 'chatbot_open', {
                        'event_category': 'engagement',
                        'event_label': 'Anime Chatbot'
                    });
                }
            }

            function closeChatbot() {
                chatbotState.isOpen = false;
                chatbotWindow.style.animation = 'slideOutDownChat 0.3s ease-out forwards';

                // Actualizar aria-expanded
                chatbotToggle.setAttribute('aria-expanded', 'false');

                setTimeout(() => {
                    chatbotWindow.style.display = 'none';
                }, 300);
            }

            // ==================== MANEJO DE MENSAJES ====================

            chatbotSend.addEventListener('click', sendMessage);
            chatbotInput.addEventListener('keypress', function (e) {
                if (e.key === 'Enter' && !e.shiftKey) {
                    e.preventDefault();
                    sendMessage();
                }
            });

            quickQuestions.forEach(btn => {
                btn.addEventListener('click', function () {
                    const question = this.getAttribute('data-question');
                    chatbotInput.value = question;
                    sendMessage();
                });
            });

            async function sendMessage() {
                const message = chatbotInput.value.trim();
                if (!message) return;

                // Agregar mensaje del usuario
                addMessage(message, 'user');

                // Limpiar input
                chatbotInput.value = '';

                // Mostrar indicador de escritura
                showTypingIndicator();

                try {
                    // Enviar al servidor
                    const response = await sendToChatbotAPI(message);

                    // Ocultar indicador de escritura
                    hideTypingIndicator();

                    // Procesar respuesta
                    processBotResponse(response);

                } catch (error) {
                    console.error('Error del chatbot:', error);
                    hideTypingIndicator();

                    // Respuesta de fallback
                    addMessage('¡Ups! Estoy teniendo problemas técnicos. ¿Podrías intentarlo de nuevo?', 'bot');
                }
            }

            function addMessage(text, sender) {
                const messageDiv = document.createElement('div');
                messageDiv.className = `chatbot-message chatbot-${sender}-message`;

                const time = new Date().toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' });

                messageDiv.innerHTML = `
                    <div class="chatbot-avatar">
                        <i class="fas ${sender === 'user' ? 'fa-user' : 'fa-robot'}"></i>
                    </div>
                    <div class="chatbot-content">
                        <div class="chatbot-name">
                            ${sender === 'user' ? 'Tú' : '<i class="fas fa-robot"></i> Anime Assistant'}
                        </div>
                        <div class="chatbot-text">${formatMessage(text)}</div>
                        <div class="chatbot-time">${time}</div>
                    </div>
                `;

                chatbotMessages.appendChild(messageDiv);
                scrollToBottom();

                // Guardar en historial
                chatbotState.history.push({
                    sender: sender,
                    text: text,
                    time: time
                });
            }

            function formatMessage(text) {
                // Formatear texto con emojis y estilos
                return text
                    .replace(/\*\*(.*?)\*\*/g, '<strong>$1</strong>')
                    .replace(/\n/g, '<br>')
                    .replace(/📹/g, '📹')
                    .replace(/🎌/g, '🎌')
                    .replace(/⚡/g, '⚡')
                    .replace(/💪/g, '💪')
                    .replace(/📚/g, '📚')
                    .replace(/🎯/g, '🎯');
            }

            function showTypingIndicator() {
                chatbotState.isTyping = true;
                chatbotTyping.style.display = 'block';
                scrollToBottom();
            }

            function hideTypingIndicator() {
                chatbotState.isTyping = false;
                chatbotTyping.style.display = 'none';
            }

            function scrollToBottom() {
                setTimeout(() => {
                    chatbotMessages.scrollTop = chatbotMessages.scrollHeight;
                }, 100);
            }

            // ==================== COMUNICACIÓN CON API ====================

            async function sendToChatbotAPI(message) {
                const payload = {
                    message: message,
                    studentId: chatbotState.studentId,
                    progress: chatbotState.progress,
                    conversationHistory: chatbotState.history.slice(-5),
                    conversationId: chatbotState.conversationId
                };

                // Intentar con la URL principal primero
                try {
                    const response = await fetch(CHATBOT_API_URL, {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'Accept': 'application/json'
                        },
                        body: JSON.stringify(payload)
                    });

                    if (response.ok) {
                        return await response.json();
                    } else {
                        throw new Error(`HTTP error! status: ${response.status}`);
                    }

                } catch (primaryError) {
                    console.warn('Primary API failed, trying fallback:', primaryError);

                    // Intentar con fallback local
                    try {
                        const response = await fetch(FALLBACK_API_URL, {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                'Accept': 'application/json'
                            },
                            body: JSON.stringify(payload)
                        });

                        if (response.ok) {
                            return await response.json();
                        }
                    } catch (fallbackError) {
                        console.error('Both APIs failed:', fallbackError);
                        throw fallbackError;
                    }
                }
            }

            function processBotResponse(response) {
                // Agregar respuesta del bot
                addMessage(response.response, 'bot');

                // Procesar acciones adicionales
                if (response.actions && Array.isArray(response.actions)) {
                    response.actions.forEach(action => {
                        executeAction(action);
                    });
                }

                // Actualizar preguntas rápidas si están en la respuesta
                if (response.quick_replies && Array.isArray(response.quick_replies)) {
                    updateQuickReplies(response.quick_replies);
                }

                // Actualizar estado del progreso si es necesario
                if (response.action === 'show_progress') {
                    updateProgressDisplay();
                }
            }

            function executeAction(action) {
                switch (action.type) {
                    case 'play_video':
                        // Usar el reproductor existente
                        if (window.openLargeVideoPlayer) {
                            window.openLargeVideoPlayer(
                                action.embed_url,
                                action.title,
                                '5:00'
                            );
                        } else {
                            // Fallback: abrir en nueva pestaña
                            window.open(action.embed_url, '_blank');
                        }
                        break;

                    case 'abrir_whatsapp':
                        window.open("https://wa.me/525523269241?text=Hola! Vengo del chatbot de la web y tengo dudas.", '_blank');
                        break;

                    case 'save_exercise':
                        // Guardar ejercicio en localStorage
                        localStorage.setItem('last_exercise', JSON.stringify(action.data));
                        break;

                    case 'open_notebook':
                        window.open(action.url, '_blank');
                        break;
                }
            }

            function updateQuickReplies(replies) {
                const container = document.getElementById('chatbot-quick-questions');
                container.innerHTML = '';

                replies.slice(0, 4).forEach(reply => {
                    const button = document.createElement('button');
                    button.className = 'chatbot-quick-btn focus-visible';
                    button.textContent = reply.length > 20 ? reply.substring(0, 20) + '...' : reply;
                    button.setAttribute('data-question', reply);
                    button.setAttribute('aria-label', `Preguntar: ${reply}`);

                    button.addEventListener('click', function () {
                        chatbotInput.value = reply;
                        sendMessage();
                    });

                    container.appendChild(button);
                });
            }

            function updateProgressDisplay() {
                // Sincronizar progreso del chatbot con el principal
                chatbotState.progress = getStudentProgress();
            }

            // ==================== INICIALIZACIÓN AVANZADA ====================

            // Mostrar notificación después de 30 segundos si el usuario no ha abierto el chat
            setTimeout(() => {
                if (!chatbotState.isOpen && !localStorage.getItem('chatbot_notified')) {
                    document.getElementById('chatbot-notification').style.display = 'flex';
                    localStorage.setItem('chatbot_notified', 'true');
                }
            }, 30000);

            // Sincronizar con el progreso principal
            window.addEventListener('storage', function (e) {
                if (e.key === 'ecoems2026_progress') {
                    chatbotState.progress = getStudentProgress();
                }
            });

            // Escuchar eventos de progreso desde la página principal
            document.addEventListener('progressUpdated', function () {
                chatbotState.progress = getStudentProgress();

                // Si el chat está abierto, actualizar mensaje
                if (chatbotState.isOpen) {
                    setTimeout(() => {
                        addMessage('¡Veo que completaste un episodio nuevo! 🎉 ¿Necesitas ayuda con algo más?', 'bot');
                    }, 1000);
                }
            });

            // Cerrar chat al hacer clic fuera de él
            document.addEventListener('click', function (e) {
                if (chatbotState.isOpen &&
                    !chatbotWindow.contains(e.target) &&
                    !chatbotToggle.contains(e.target)) {
                    closeChatbot();
                }
            });

            console.log('✅ Chatbot Anime ECOEMS 2026 - Listo para usar!');
        });
    </script>
    <script>
        // ACTUALIZAR USUARIOS ONLINE
        function updateOnlineUsers() {
            fetch('https://cyberedumx.com/api.php?action=active_users')
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        const count = data.online_users;
                        const badge = document.getElementById('online-users-badge');
                        const countSpan = document.getElementById('online-users-count');

                        countSpan.textContent = count;
                        badge.style.display = 'flex'; // Mostrar solo cuando hay datos
                    }
                })
                .catch(error => console.error('Error fetching online users:', error));
        }

        // Iniciar actualización
        document.addEventListener('DOMContentLoaded', () => {
            updateOnlineUsers(); // Primera carga inmediata
            setInterval(updateOnlineUsers, 60000); // Actualizar cada minuto
        });
    </script>
    <script src="tracking.js"></script>
</body>

</html>