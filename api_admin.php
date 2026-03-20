<?php
// api_admin.php
require_once 'config.php';

header('Content-Type: application/json');

// Simple verification (could be improved)
// if (!isset($_SESSION['admin'])) { die(json_encode(['success' => false, 'error' => 'Acceso denegado'])); }

try {
    $userId = $_POST['user_id'] ?? 0;
    $campo = $_POST['campo'] ?? ''; // 'acceso_poli' o 'acceso_unam'
    $valor = $_POST['valor'] ?? 0;

    if (!$userId || !in_array($campo, ['acceso_poli', 'acceso_unam'])) {
        throw new Exception("Parámetros inválidos.");
    }

    $stmt = $pdo->prepare("UPDATE usuarios_seguimiento SET $campo = ? WHERE id = ?");
    $stmt->execute([$valor, $userId]);

    echo json_encode(['success' => true]);
} catch (Exception $e) {
    echo json_encode(['success' => false, 'error' => $e->getMessage()]);
}
?>