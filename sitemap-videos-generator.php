<?php
// sitemap-videos-generator.php
header('Content-Type: application/xml');

// Configuración
$site_url = 'https://cyberedumx.com';
$lastmod = date('Y-m-d');

// Videos del 0 al 90
$videos = [];
for ($i = 0; $i <= 90; $i++) {
    $videos[] = [
        'id' => $i,
        'title' => getVideoTitle($i),
        'description' => getVideoDescription($i),
        'duration' => getVideoDuration($i),
        'youtube_id' => 'dQw4w9WgXcQ' // Reemplazar con ID real
    ];
}

// Funciones auxiliares (puedes integrar con tu código existente)
function getVideoTitle($id) {
    $titles = [
        0 => 'Estrategia Inteligente ECOEMS 2026',
        1 => 'Habilidad Verbal - Comprensión Lectora',
        2 => 'Habilidad Verbal - Vocabulario y Sinónimos',
        // ... agregar más títulos
    ];
    return isset($titles[$id]) ? $titles[$id] : "Video $id - ECOEMS 2026";
}

function getVideoDescription($id) {
    return "Video educativo número $id para preparación ECOEMS 2026";
}

function getVideoDuration($id) {
    return 300; // 5 minutos en segundos
}

// Generar XML
echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"' . "\n";
echo '        xmlns:video="http://www.google.com/schemas/sitemap-video/1.1">' . "\n";
echo "\n";

foreach ($videos as $video) {
    echo "    <url>\n";
    echo "        <loc>" . htmlspecialchars($site_url . "/curso/ecoems-2026-estrategia-inteligente#video-" . $video['id']) . "</loc>\n";
    echo "        <lastmod>" . $lastmod . "</lastmod>\n";
    echo "        <changefreq>monthly</changefreq>\n";
    echo "        <priority>0.6</priority>\n";
    echo "        <video:video>\n";
    echo "            <video:thumbnail_loc>https://img.youtube.com/vi/" . $video['youtube_id'] . "/hqdefault.jpg</video:thumbnail_loc>\n";
    echo "            <video:title>" . htmlspecialchars($video['title']) . "</video:title>\n";
    echo "            <video:description>" . htmlspecialchars($video['description']) . "</video:description>\n";
    echo "            <video:content_loc>https://www.youtube.com/watch?v=" . $video['youtube_id'] . "</video:content_loc>\n";
    echo "            <video:duration>" . $video['duration'] . "</video:duration>\n";
    echo "            <video:publication_date>" . $lastmod . "T00:00:00+00:00</video:publication_date>\n";
    echo "            <video:family_friendly>yes</video:family_friendly>\n";
    echo "            <video:tag>ECOEMS 2026</video:tag>\n";
    echo "            <video:tag>CyberEdu MX</video:tag>\n";
    echo "            <video:category>Educación</video:category>\n";
    echo "        </video:video>\n";
    echo "    </url>\n";
    echo "\n";
}

echo '</urlset>';
?>