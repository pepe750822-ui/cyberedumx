<?php
// funciones.php - Funciones auxiliares para ECOEMS 2026
require_once 'config.php';

function obtenerMaterias() {
    global $pdo;
    $stmt = $pdo->query("SELECT * FROM materias WHERE estado = 'activo' ORDER BY orden");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function obtenerVideosPorMateria($materia_id) {
    global $pdo;
    $stmt = $pdo->prepare("SELECT * FROM videos WHERE materia_id = ? AND estado = 'activo' ORDER BY orden");
    $stmt->execute([$materia_id]);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function obtenerTemasPorMateria($materia_id) {
    global $pdo;
    $stmt = $pdo->prepare("SELECT * FROM temas WHERE materia_id = ? AND estado = 'activo' ORDER BY orden");
    $stmt->execute([$materia_id]);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function obtenerPreguntasPorTema($tema_id, $limite = 50) {
    global $pdo;
    $stmt = $pdo->prepare("
        SELECT p.* 
        FROM preguntas p
        WHERE p.tema_id = ? AND p.estado = 'activo'
        ORDER BY RAND()
        LIMIT ?
    ");
    $stmt->execute([$tema_id, $limite]);
    $preguntas = $stmt->fetchAll();
    
    // Obtener opciones para cada pregunta
    foreach($preguntas as &$pregunta) {
        $stmt_opciones = $pdo->prepare("SELECT * FROM opciones_respuesta WHERE pregunta_id = ? ORDER BY orden");
        $stmt_opciones->execute([$pregunta['id']]);
        $pregunta['opciones'] = $stmt_opciones->fetchAll();
    }
    
    return $preguntas;
}

function registrarRespuestaUsuario($usuario_id, $pregunta_id, $respuesta_id, $es_correcta, $tiempo_respuesta) {
    global $pdo;
    $stmt = $pdo->prepare("
        INSERT INTO progreso_usuarios (usuario_id, pregunta_id, respuesta_id, es_correcta, tiempo_respuesta)
        VALUES (?, ?, ?, ?, ?)
    ");
    return $stmt->execute([$usuario_id, $pregunta_id, $respuesta_id, $es_correcta, $tiempo_respuesta]);
}

// Función para insertar datos de ejemplo (ejecutar una sola vez)
function insertarDatosEjemplo() {
    global $pdo;
    
    // Insertar temas para Biología
    $temas_biologia = [
        ['Biología Celular', 'Estructura y función de la célula', 1],
        ['Genética', 'ADN, herencia y mutaciones', 2],
        ['Ecología', 'Ecosistemas y relaciones biológicas', 3],
        ['Fisiología Humana', 'Sistemas del cuerpo humano', 4]
    ];
    
    foreach($temas_biologia as $tema) {
        $stmt = $pdo->prepare("INSERT INTO temas (materia_id, nombre, descripcion, orden) VALUES (1, ?, ?, ?)");
        $stmt->execute([$tema[0], $tema[1], $tema[2]]);
    }
    
    return "Datos de ejemplo insertados correctamente";
}
?>