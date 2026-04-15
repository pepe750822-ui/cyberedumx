<?php
// config.example.php — Copia este archivo como config.php y llena tus valores reales.
// NUNCA subas config.php a git.

error_reporting(0);
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);

define('DB_HOST', 'localhost');
define('DB_USER', 'tu_usuario_db');
define('DB_PASS', 'tu_contraseña_db');
define('DB_NAME', 'tu_nombre_db');

try {
    $pdo = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8mb4", DB_USER, DB_PASS);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch(PDOException $e) {
    error_log("DB connection error: " . $e->getMessage());
    die("Error de conexión. Por favor intenta más tarde.");
}

function hex2rgb($hex) {
    $hex = str_replace("#", "", $hex);
    if(strlen($hex) == 3) {
        $r = hexdec(substr($hex,0,1).substr($hex,0,1));
        $g = hexdec(substr($hex,1,1).substr($hex,1,1));
        $b = hexdec(substr($hex,2,1).substr($hex,2,1));
    } else {
        $r = hexdec(substr($hex,0,2));
        $g = hexdec(substr($hex,2,2));
        $b = hexdec(substr($hex,4,2));
    }
    return "$r, $g, $b";
}
?>
