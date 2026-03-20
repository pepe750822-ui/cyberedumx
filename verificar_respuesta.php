<?php
// verificar_respuesta.php
include 'config.php';
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = json_decode(file_get_contents('php://input'), true);
    $pregunta_id = $data['pregunta_id'];
    $respuesta_usuario = $data['respuesta_usuario'];
    
    try {
        // Obtener la pregunta con su explicación REAL de la base de datos
        $sql = "SELECT respuesta_correcta, explicacion FROM preguntas WHERE id = ?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$pregunta_id]);
        $pregunta = $stmt->fetch();
        
        if ($pregunta) {
            $es_correcta = ($respuesta_usuario === $pregunta['respuesta_correcta']);
            
            // Usar la explicación REAL de la base de datos
            // Si no hay explicación, generar una básica
            if (empty($pregunta['explicacion'])) {
                if ($es_correcta) {
                    $explicacion = "¡Respuesta correcta! Has seleccionado la opción adecuada. La respuesta {$respuesta_usuario} es correcta para esta pregunta.";
                } else {
                    $explicacion = "La respuesta correcta es {$pregunta['respuesta_correcta']}. Compara tu selección con la respuesta correcta para identificar dónde necesitas reforzar tu conocimiento.";
                }
            } else {
                // USAR EXPLICACIÓN REAL DE LA BASE DE DATOS
                $explicacion = $pregunta['explicacion'];
            }
            
            echo json_encode([
                'es_correcta' => $es_correcta,
                'respuesta_correcta' => $pregunta['respuesta_correcta'],
                'explicacion' => $explicacion
            ]);
        } else {
            echo json_encode(['error' => 'Pregunta no encontrada']);
        }
    } catch (PDOException $e) {
        echo json_encode(['error' => 'Error en la base de datos: ' . $e->getMessage()]);
    }
} else {
    echo json_encode(['error' => 'Método no permitido']);
}
?>