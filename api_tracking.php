<?php
// api_tracking.php
require_once 'config.php';

header('Content-Type: application/json');

$action = $_POST['action'] ?? $_GET['action'] ?? '';

try {
    switch ($action) {
        case 'registrar':
            $nombre = $_POST['nombre'] ?? '';
            $correo = $_POST['correo'] ?? '';
            $pais = $_POST['pais'] ?? '';

            if (empty($nombre) || empty($correo)) {
                throw new Exception("Nombre y correo son requeridos.");
            }

            if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
                throw new Exception("El formato del correo electrónico no es válido.");
            }

            // Buscar o crear usuario
            $stmt = $pdo->prepare("SELECT id FROM usuarios_seguimiento WHERE correo = ?");
            $stmt->execute([$correo]);
            $user = $stmt->fetch();

            if (!$user) {
                $stmt = $pdo->prepare("INSERT INTO usuarios_seguimiento (nombre, correo, pais) VALUES (?, ?, ?)");
                $stmt->execute([$nombre, $correo, $pais]);
                $userId = $pdo->lastInsertId();
            } else {
                $userId = $user['id'];
                // Actualizar nombre y país si cambiaron
                $stmt = $pdo->prepare("UPDATE usuarios_seguimiento SET nombre = ?, pais = ? WHERE id = ?");
                $stmt->execute([$nombre, $pais, $userId]);
            }

            echo json_encode(['success' => true, 'user_id' => $userId]);
            break;

        case 'iniciar_sesion':
            $userId = $_POST['user_id'] ?? 0;
            $pagina = $_POST['pagina'] ?? '';

            if (!$userId)
                throw new Exception("Usuario no identificado.");

            $stmt = $pdo->prepare("INSERT INTO sesiones_seguimiento (usuario_id, pagina_actual) VALUES (?, ?)");
            $stmt->execute([$userId, $pagina]);
            $sesionId = $pdo->lastInsertId();

            echo json_encode(['success' => true, 'sesion_id' => $sesionId]);
            break;

        case 'heartbeat':
            $sesionId = $_POST['sesion_id'] ?? 0;
            $duracion = $_POST['duracion'] ?? 0; // Segundos adicionales
            $avance = $_POST['avance'] ?? '';

            if (!$sesionId)
                throw new Exception("Sesión no válida.");

            $stmt = $pdo->prepare("UPDATE sesiones_seguimiento SET duracion_segundos = duracion_segundos + ?, ultimo_avance = ?, fecha_fin = CURRENT_TIMESTAMP WHERE id = ?");
            $stmt->execute([$duracion, $avance, $sesionId]);

            echo json_encode(['success' => true]);
            break;

        case 'marcar_video':
            $userId = $_POST['user_id'] ?? 0;
            $videoId = $_POST['video_id'] ?? -1;
            $materia = $_POST['materia'] ?? '';

            if (!$userId || $videoId < 0)
                throw new Exception("Datos insuficientes.");

            $stmt = $pdo->prepare("INSERT INTO progreso_videos (usuario_id, video_id, materia) VALUES (?, ?, ?) ON DUPLICATE KEY UPDATE fecha_visto = CURRENT_TIMESTAMP");
            $stmt->execute([$userId, $videoId, $materia]);

            echo json_encode(['success' => true]);
            break;

        case 'obtener_progreso_usuario':
            $userId = $_GET['user_id'] ?? 0;
            if (!$userId)
                throw new Exception("Usuario no identificado.");

            // Estadísticas por materia
            $stmt = $pdo->prepare("SELECT materia, COUNT(*) as total FROM progreso_videos WHERE usuario_id = ? GROUP BY materia");
            $stmt->execute([$userId]);
            $progresoMaterias = $stmt->fetchAll();

            // Tiempo total
            $stmt = $pdo->prepare("SELECT SUM(duracion_segundos) FROM sesiones_seguimiento WHERE usuario_id = ?");
            $stmt->execute([$userId]);
            $tiempoTotal = $stmt->fetchColumn();

            // Últimos videos
            $stmt = $pdo->prepare("SELECT video_id, materia, fecha_visto FROM progreso_videos WHERE usuario_id = ? ORDER BY fecha_visto DESC LIMIT 5");
            $stmt->execute([$userId]);
            $ultimosVideos = $stmt->fetchAll();

            echo json_encode([
                'success' => true,
                'materias' => $progresoMaterias,
                'tiempo_total' => $tiempoTotal,
                'ultimos_videos' => $ultimosVideos
            ]);
            break;

        default:
            throw new Exception("Acción no reconocida.");
    }
} catch (Exception $e) {
    echo json_encode(['success' => false, 'error' => $e->getMessage()]);
}
?>