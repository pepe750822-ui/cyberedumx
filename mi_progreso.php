<?php
// mi_progreso.php
require_once 'config.php';

// Intentar obtener el ID de la URL
$userId = $_GET['u'] ?? 0;
$user = null;
$error = "";

if ($userId) {
    try {
        $stmt = $pdo->prepare("SELECT * FROM usuarios_seguimiento WHERE id = ?");
        $stmt->execute([$userId]);
        $user = $stmt->fetch();

        if (!$user) {
            $error = "Usuario no encontrado en la base de datos.";
        } else {
            // Estadísticas por materia
            $stmt = $pdo->prepare("SELECT materia, COUNT(*) as total FROM progreso_videos WHERE usuario_id = ? GROUP BY materia");
            $stmt->execute([$userId]);
            $progresoMaterias = $stmt->fetchAll();

            // Tiempo total
            $stmt = $pdo->prepare("SELECT SUM(duracion_segundos) FROM sesiones_seguimiento WHERE usuario_id = ?");
            $stmt->execute([$userId]);
            $tiempoTotalSec = $stmt->fetchColumn();
            $tiempoTotalMin = round($tiempoTotalSec / 60, 1);

            // Últimos videos vistos
            $stmt = $pdo->prepare("SELECT video_id, materia, fecha_visto FROM progreso_videos WHERE usuario_id = ? ORDER BY fecha_visto DESC LIMIT 10");
            $stmt->execute([$userId]);
            $ultimosVideos = $stmt->fetchAll();
        }
    } catch (Exception $e) {
        $error = "Error de conexión: " . $e->getMessage();
    }
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Progreso - CyberEdu MX</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary: #3498DB;
            --secondary: #2ECC71;
            --dark: #2C3E50;
        }

        body {
            background: #f0f2f5;
            font-family: 'Inter', sans-serif;
            color: var(--dark);
        }

        .stats-header {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            color: white;
            padding: 40px 0;
            border-radius: 0 0 30px 30px;
            margin-bottom: 30px;
        }

        .card-stats {
            border: none;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s;
        }

        .card-stats:hover {
            transform: translateY(-5px);
        }

        .progress {
            height: 10px;
            border-radius: 5px;
        }

        .materia-badge {
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 600;
        }

        .loading-screen {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: white;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            z-index: 10000;
        }
    </style>
</head>

<body>

    <?php if (!$userId): ?>
        <div class="loading-screen" id="id-checker">
            <div class="spinner-border text-primary mb-3" role="status"></div>
            <p>Cargando tu progreso personalizado...</p>
        </div>
        <script>
            const storedId = localStorage.getItem('tracking_user_id');
            if (storedId) {
                window.location.href = 'mi_progreso.php?u=' + storedId;
            } else {
                document.getElementById('id-checker').innerHTML = `
                <div class="container text-center mt-5">
                    <i class="fas fa-user-slash fa-4x text-muted mb-4"></i>
                    <h2>No se encontró tu sesión</h2>
                    <p class="text-muted">Parece que aún no te has registrado en el curso o borraste tus datos de navegación.</p>
                    <a href="index.html" class="btn btn-primary mt-3">Ir al Inicio para Registrarme</a>
                </div>
            `;
            }
        </script>
    <?php elseif ($error): ?>
        <div class="container text-center mt-5">
            <div class="alert alert-danger"><?php echo $error; ?></div>
            <a href="index.html" class="btn btn-primary">Volver al inicio</a>
        </div>
    <?php else: ?>
        <!-- CONTENIDO DEL DASHBOARD SI TODO ESTÁ BIEN -->
        <div class="stats-header text-center">
            <div class="container">
                <h1>¡Hola, <?php echo htmlspecialchars($user['nombre']); ?>!</h1>
                <p class="lead">Este es el resumen de tu aventura de aprendizaje en ECOEMS 2026</p>
                <div class="row mt-4">
                    <div class="col-6 col-md-3">
                        <h3><?php echo $tiempoTotalMin ?? 0; ?></h3>
                        <small>Minutos de estudio</small>
                    </div>
                    <div class="col-6 col-md-3">
                        <h3><?php echo count($progresoMaterias ?? []); ?></h3>
                        <small>Materias iniciadas</small>
                    </div>
                    <div class="col-6 col-md-3">
                        <h3><?php echo count($ultimosVideos ?? []); ?></h3>
                        <small>Videos vistos</small>
                    </div>
                    <div class="col-6 col-md-3">
                        <h3><?php echo round((($tiempoTotalMin ?? 0) / 1440) * 100, 1); ?>%</h3>
                        <small>Meta diaria</small>
                    </div>
                </div>
            </div>
        </div>

        <div class="container pb-5">
            <div class="row">
                <div class="col-md-8">
                    <h4 class="mb-4"><i class="fas fa-chart-line me-2 text-primary"></i>Tu Progreso por Materias</h4>
                    <?php if (empty($progresoMaterias)): ?>
                        <div class="alert alert-info">Aún no hemos detectado videos vistos. ¡Empieza a estudiar para ver tu
                            avance aquí!</div>
                    <?php else: ?>
                        <div class="row g-3">
                            <?php foreach ($progresoMaterias as $m): ?>
                                <div class="col-md-6">
                                    <div class="card card-stats p-3">
                                        <div class="d-flex justify-content-between align-items-center mb-2">
                                            <span
                                                class="fw-bold"><?php echo strtoupper(str_replace('_', ' ', $m['materia'] ?: 'General')); ?></span>
                                            <span class="text-muted small"><?php echo $m['total']; ?> videos</span>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar bg-success"
                                                style="width: <?php echo min(100, $m['total'] * 10); ?>%"></div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>

                    <h4 class="mt-5 mb-4"><i class="fas fa-history me-2 text-primary"></i>Historial Reciente</h4>
                    <div class="card card-stats p-0 overflow-hidden">
                        <ul class="list-group list-group-flush">
                            <?php if (empty($ultimosVideos)): ?>
                                <li class="list-group-item text-center p-4">No hay videos en el historial todavía.</li>
                            <?php else: ?>
                                <?php foreach ($ultimosVideos as $v): ?>
                                    <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                        <div>
                                            <i class="fas fa-play-circle text-primary me-3"></i>
                                            <span>Video #<?php echo $v['video_id']; ?></span>
                                            <span
                                                class="badge bg-light text-dark ms-2 materia-badge"><?php echo $v['materia'] ?: 'General'; ?></span>
                                        </div>
                                        <small
                                            class="text-muted"><?php echo date('d M, H:i', strtotime($v['fecha_visto'])); ?></small>
                                    </li>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card card-stats p-4 text-center bg-white">
                        <i class="fas fa-trophy fa-3x text-warning mb-3"></i>
                        <h5>Siguiente Logro</h5>
                        <p class="text-muted small">¡Sigue estudiando para desbloquear nuevas medallas y reconocimientos!
                        </p>
                        <hr>
                        <a href="dashboard.php" class="btn btn-primary w-100">Continuar Estudiando</a>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>
</body>

</html>