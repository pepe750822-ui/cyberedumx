<?php
// ping-search-engines.php
function pingSearchEngines($sitemap_url) {
    $search_engines = [
        'Google' => 'https://www.google.com/ping?sitemap=',
        'Bing' => 'https://www.bing.com/ping?sitemap=',
        'Yandex' => 'https://webmaster.yandex.com/ping?sitemap='
    ];
    
    $results = [];
    
    foreach ($search_engines as $engine => $url) {
        $full_url = $url . urlencode($sitemap_url);
        
        $ch = curl_init($full_url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_TIMEOUT, 10);
        $response = curl_exec($ch);
        $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
        
        $results[$engine] = [
            'status' => $http_code,
            'message' => $http_code == 200 ? 'Success' : 'Failed',
            'url' => $full_url
        ];
        
        // Pequeña pausa entre pings
        sleep(1);
    }
    
    return $results;
}

// Usar
if (isset($_GET['ping']) && $_GET['ping'] == '1') {
    $sitemap_url = 'https://cyberedumx.com/sitemap.xml';
    $results = pingSearchEngines($sitemap_url);
    
    header('Content-Type: application/json');
    echo json_encode($results, JSON_PRETTY_PRINT);
} else {
    echo "Para ping, accede a: /ping-search-engines.php?ping=1";
}
?>