<?php
require_once 'config.php';

try {
    // Agregar columnas de acceso si no existen
    $pdo->exec("ALTER TABLE usuarios_seguimiento ADD COLUMN IF NOT EXISTS acceso_poli TINYINT DEFAULT 0");
    $pdo->exec("ALTER TABLE usuarios_seguimiento ADD COLUMN IF NOT EXISTS acceso_unam TINYINT DEFAULT 0");

    echo "¡Base de datos actualizada correctamente!";
} catch (PDOException $e) {
    echo "Error al actualizar la base de datos: " . $e->getMessage();
}
?>