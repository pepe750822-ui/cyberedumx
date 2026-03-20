<?php
// api.php - Endpoints para AJAX
require_once 'config.php';

header('Content-Type: application/json');

// Permitir CORS
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header('Access-Control-Allow-Headers: Content-Type');

$action = $_GET['action'] ?? $_POST['action'] ?? '';

try {
    switch($action) {
        case 'obtener_preguntas':
            $tema_id = $_GET['tema_id'] ?? 0;
            $limite = $_GET['limite'] ?? 10;
            
            if($tema_id > 0) {
                $sql = "SELECT p.*, t.nombre as tema_nombre 
                        FROM preguntas p 
                        JOIN temas t ON p.tema_id = t.id 
                        WHERE p.tema_id = ? AND p.estado = 'activo' 
                        ORDER BY RAND() 
                        LIMIT ?";
                $stmt = $pdo->prepare($sql);
                $stmt->execute([$tema_id, $limite]);
            } else {
                $sql = "SELECT p.*, t.nombre as tema_nombre 
                        FROM preguntas p 
                        JOIN temas t ON p.tema_id = t.id 
                        WHERE p.estado = 'activo' 
                        ORDER BY RAND() 
                        LIMIT ?";
                $stmt = $pdo->prepare($sql);
                $stmt->execute([$limite]);
            }
            
            $preguntas = $stmt->fetchAll();
            
            // Obtener opciones para cada pregunta
            foreach($preguntas as &$pregunta) {
                $stmt_opciones = $pdo->prepare("SELECT * FROM opciones_respuesta WHERE pregunta_id = ? ORDER BY orden");
                $stmt_opciones->execute([$pregunta['id']]);
                $pregunta['opciones'] = $stmt_opciones->fetchAll();
            }
            
            echo json_encode(['success' => true, 'data' => $preguntas]);
            break;
            
        case 'obtener_temas':
            $materia_id = $_GET['materia_id'] ?? 0;
            
            if($materia_id > 0) {
                $sql = "SELECT * FROM temas WHERE materia_id = ? AND estado = 'activo' ORDER BY orden";
                $stmt = $pdo->prepare($sql);
                $stmt->execute([$materia_id]);
            } else {
                $sql = "SELECT t.*, m.nombre as materia_nombre 
                        FROM temas t 
                        JOIN materias m ON t.materia_id = m.id 
                        WHERE t.estado = 'activo' 
                        ORDER BY m.orden, t.orden";
                $stmt = $pdo->prepare($sql);
                $stmt->execute();
            }
            
            $temas = $stmt->fetchAll();
            echo json_encode(['success' => true, 'data' => $temas]);
            break;
            
        case 'registrar_respuesta':
            $usuario_id = $_POST['usuario_id'] ?? 1;
            $pregunta_id = $_POST['pregunta_id'] ?? 0;
            $respuesta_id = $_POST['respuesta_id'] ?? 0;
            $es_correcta = $_POST['es_correcta'] ?? 0;
            $tiempo_respuesta = $_POST['tiempo_respuesta'] ?? 0;
            
            if($pregunta_id > 0 && $respuesta_id > 0) {
                $sql = "INSERT INTO progreso_usuarios (usuario_id, pregunta_id, respuesta_id, es_correcta, tiempo_respuesta) 
                        VALUES (?, ?, ?, ?, ?)";
                $stmt = $pdo->prepare($sql);
                $result = $stmt->execute([$usuario_id, $pregunta_id, $respuesta_id, $es_correcta, $tiempo_respuesta]);
                
                echo json_encode(['success' => $result]);
            } else {
                echo json_encode(['success' => false, 'message' => 'Datos incompletos']);
            }
            break;
            
        case 'obtener_estadisticas':
            $usuario_id = $_GET['usuario_id'] ?? 1;
            
            // Estadísticas generales
            $stmt = $pdo->prepare("
                SELECT 
                    COUNT(*) as total_preguntas,
                    SUM(es_correcta) as preguntas_correctas,
                    AVG(tiempo_respuesta) as tiempo_promedio
                FROM progreso_usuarios 
                WHERE usuario_id = ?
            ");
            $stmt->execute([$usuario_id]);
            $estadisticas = $stmt->fetch(PDO::FETCH_ASSOC);
            
            echo json_encode(['success' => true, 'data' => $estadisticas]);
            break;
            
        case 'registrar_suscripcion':
            $nombre = $_POST['nombre'] ?? '';
            $email = $_POST['email'] ?? '';
            $telefono = $_POST['telefono'] ?? '';
            $origen = $_POST['origen'] ?? 'landing_page';
            
            if($email || $telefono) {
                // Guardar en CSV para asegurar persistencia simple
                $archivo = 'contactos_leads.csv';
                $es_nuevo = !file_exists($archivo);
                $fp = fopen($archivo, 'a');
                
                if($es_nuevo) {
                    fputcsv($fp, ['Fecha', 'Nombre', 'Email', 'Telefono', 'Origen']);
                }
                
                fputcsv($fp, [date('Y-m-d H:i:s'), $nombre, $email, $telefono, $origen]);
                fclose($fp);
                
                echo json_encode(['success' => true, 'message' => 'Registro guardado']);
            } else {
                echo json_encode(['success' => false, 'message' => 'Faltan datos de contacto']);
            }
            break;

        case 'active_users':
            $file = 'active_users.json';
            $current_time = time();
            $timeout = 300; // 5 minutos de inactividad
            
            // Obtener IP del usuario
            $user_ip = $_SERVER['REMOTE_ADDR'];
            
            // Cargar usuarios actuales
            $users = [];
            if (file_exists($file)) {
                $content = file_get_contents($file);
                if ($content) {
                    $users = json_decode($content, true) ?? [];
                }
            }
            
            // Actualizar o agregar usuario actual
            $users[$user_ip] = $current_time;
            
            // Limpiar usuarios inactivos y contar
            $active_count = 0;
            $new_users = [];
            
            foreach ($users as $ip => $last_seen) {
                if (($current_time - $last_seen) < $timeout) {
                    $new_users[$ip] = $last_seen;
                    $active_count++;
                }
            }
            
            // Guardar lista actualizada
            file_put_contents($file, json_encode($new_users));
            
            echo json_encode(['success' => true, 'online_users' => $active_count]);
            break;

        default:
            echo json_encode(['success' => false, 'message' => 'Acción no válida']);
    }
} catch(Exception $e) {
    echo json_encode(['success' => false, 'message' => 'Error: ' . $e->getMessage()]);
}
?>