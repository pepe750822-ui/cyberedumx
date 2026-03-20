<?php
// test.php - Archivo de diagnóstico
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

echo "✅ PHP está funcionando correctamente<br>";

// Probar conexión a la base de datos
try {
    $pdo = new PDO("mysql:host=localhost;dbname=u149467987_ecoems2026;charset=utf8mb4", "u149467987_ecoemuser", "Gopl750822#");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "✅ Conexión a la base de datos exitosa<br>";
    
    // Probar consulta simple
    $stmt = $pdo->query("SELECT COUNT(*) as total FROM materias");
    $result = $stmt->fetch();
    echo "✅ Tabla 'materias' existe: " . $result['total'] . " registros<br>";
    
} catch(PDOException $e) {
    echo "❌ Error de base de datos: " . $e->getMessage() . "<br>";
}

echo "✅ Script completado sin errores";
?>