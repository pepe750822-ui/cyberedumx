<?php
// sitemap-generator.php
header('Content-Type: application/xml');

// Configuración
$site_url = 'https://cyberedumx.com';
$lastmod = date('Y-m-d');
$changefreq = 'weekly'; // daily, weekly, monthly, yearly

// URLs del sitio
$urls = [
    // Páginas principales
    [
        'loc' => '/',
        'priority' => '1.0',
        'changefreq' => 'daily',
        'lastmod' => $lastmod
    ],
    // Cursos
    [
        'loc' => '/curso/ecoems-2026-estrategia-inteligente',
        'priority' => '0.9',
        'changefreq' => 'daily',
        'lastmod' => $lastmod
    ],
    [
        'loc' => '/curso/ingles',
        'priority' => '0.8',
        'changefreq' => 'monthly',
        'lastmod' => $lastmod
    ],
    // Páginas de información
    [
        'loc' => '/quienes-somos',
        'priority' => '0.7',
        'changefreq' => 'monthly',
        'lastmod' => $lastmod
    ],
    [
        'loc' => '/contacto',
        'priority' => '0.6',
        'changefreq' => 'yearly',
        'lastmod' => $lastmod
    ],
    [
        'loc' => '/preguntas-frecuentes-ecoems',
        'priority' => '0.8',
        'changefreq' => 'weekly',
        'lastmod' => $lastmod
    ],
    // URLs antiguas (para redirecciones)
    [
        'loc' => '/ecoems2026.php',
        'priority' => '0.5',
        'changefreq' => 'monthly',
        'lastmod' => $lastmod
    ],
    [
        'loc' => '/ingles.html',
        'priority' => '0.4',
        'changefreq' => 'yearly',
        'lastmod' => $lastmod
    ]
];

// Generar XML
echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"' . "\n";
echo '        xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"' . "\n";
echo '        xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9' . "\n";
echo '        http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">' . "\n";
echo "\n";

foreach ($urls as $url) {
    echo "    <url>\n";
    echo "        <loc>" . htmlspecialchars($site_url . $url['loc']) . "</loc>\n";
    echo "        <lastmod>" . $url['lastmod'] . "</lastmod>\n";
    echo "        <changefreq>" . $url['changefreq'] . "</changefreq>\n";
    echo "        <priority>" . $url['priority'] . "</priority>\n";
    echo "    </url>\n";
    echo "\n";
}

echo '</urlset>';
?>