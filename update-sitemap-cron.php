<?php
// update-sitemap-cron.php
// Para ejecutar automáticamente con cron job cada semana

// 1. Generar sitemap principal
$xml_content = '<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <!-- Tu contenido aquí -->
</urlset>';

file_put_contents('sitemap.xml', $xml_content);

// 2. Generar sitemap de videos
// (usar la función de generación dinámica)

// 3. Ping a motores de búsqueda
$sitemap_url = 'https://cyberedumx.com/sitemap.xml';
$ping_urls = [
    'https://www.google.com/ping?sitemap=' . urlencode($sitemap_url),
    'https://www.bing.com/ping?sitemap=' . urlencode($sitemap_url)
];

foreach ($ping_urls as $url) {
    file_get_contents($url);
    sleep(1);
}

// 4. Log de la operación
$log_message = date('Y-m-d H:i:s') . " - Sitemap actualizado y ping enviado\n";
file_put_contents('sitemap-update.log', $log_message, FILE_APPEND);

echo "Sitemap actualizado exitosamente.";
?>