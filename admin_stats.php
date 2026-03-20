<?php
// admin_stats.php
require_once 'config.php';

// Exportar a CSV si se solicita
if (isset($_GET['export'])) {
    header('Content-Type: text/csv; charset=utf-8');
    header('Content-Disposition: attachment; filename=usuarios_cyberedu_' . date('Y-m-d') . '.csv');
    $output = fopen('php://output', 'w');
    fputcsv($output, ['Nombre', 'Correo', 'Pais', 'Fecha Registro', 'Sesiones', 'Tiempo Total (min)']);

    $stmt = $pdo->query("
        SELECT u.nombre, u.correo, u.pais, u.fecha_registro, 
               COUNT(s.id) as sessions, 
               SUM(s.duracion_segundos) as total_sec
        FROM usuarios_seguimiento u
        LEFT JOIN sesiones_seguimiento s ON u.id = s.usuario_id
        GROUP BY u.id
    ");
    while ($row = $stmt->fetch()) {
        fputcsv($output, [
            $row['nombre'],
            $row['correo'],
            $row['pais'],
            $row['fecha_registro'],
            $row['sessions'],
            round($row['total_sec'] / 60, 1)
        ]);
    }
    fclose($output);
    exit;
}

// Simple protection (optional: improve this)
// if (!isset($_SESSION['admin'])) { die('Acceso denegado'); }

try {
    // Obtener estadísticas generales
    $totalUsers = $pdo->query("SELECT COUNT(*) FROM usuarios_seguimiento")->fetchColumn();
    $totalSessions = $pdo->query("SELECT COUNT(*) FROM sesiones_seguimiento")->fetchColumn();
    $totalTimeSec = $pdo->query("SELECT SUM(duracion_segundos) FROM sesiones_seguimiento")->fetchColumn();
    $totalTimeHours = round($totalTimeSec / 3600, 2);

    // Obtener lista de usuarios con su tiempo total
    $stmt = $pdo->query("
        SELECT u.*, 
               COUNT(s.id) as num_sesiones, 
               SUM(s.duracion_segundos) as tiempo_total,
               MAX(s.fecha_fin) as ultima_actividad
        FROM usuarios_seguimiento u
        LEFT JOIN sesiones_seguimiento s ON u.id = s.usuario_id
        GROUP BY u.id
        ORDER BY ultima_actividad DESC
    ");
    $users = $stmt->fetchAll();

} catch (Exception $e) {
    die("Error: " . $e->getMessage());
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Admin Stats - CyberEdu MX</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: #f4f7f6;
            font-family: 'Inter', sans-serif;
        }

        .stat-card {
            background: white;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .table-container {
            background: white;
            border-radius: 10px;
            padding: 20px;
            margin-top: 30px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>

<body class="p-4">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1>Estadísticas de Usuarios</h1>
            <a href="?export=1" class="btn btn-success">
                <i class="fas fa-file-export me-2"></i>Exportar Correos (CSV)
            </a>
        </div>

        <div class="row g-4 mb-4">
            <div class="col-md-4">
                <div class="stat-card">
                    <h5>Total Usuarios</h5>
                    <h2 class="text-primary">
                        <?php echo $totalUsers; ?>
                    </h2>
                </div>
            </div>
            <div class="col-md-4">
                <div class="stat-card">
                    <h5>Total Sesiones</h5>
                    <h2 class="text-success">
                        <?php echo $totalSessions; ?>
                    </h2>
                </div>
            </div>
            <div class="col-md-4">
                <div class="stat-card">
                    <h5>Tiempo Total (Horas)</h5>
                    <h2 class="text-warning">
                        <?php echo $totalTimeHours; ?>h
                    </h2>
                </div>
            </div>
        </div>

        <div class="table-container">
            <h3>Detalle de Usuarios</h3>
            <table class="table table-hover mt-3">
                <thead class="table-light">
                    <tr>
                        <th>Nombre</th>
                        <th>Correo</th>
                        <th>País</th>
                        <th>Registro</th>
                        <th>Sesiones</th>
                        <th>Tiempo Total</th>
                        <th>Acceso Poli ($)</th>
                        <th>Acceso UNAM ($)</th>
                        <th>Última Actividad</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($users as $u): ?>
                        <tr>
                            <td>
                                <?php echo htmlspecialchars($u['nombre']); ?>
                            </td>
                            <td>
                                <?php echo htmlspecialchars($u['correo']); ?>
                            </td>
                            <td>
                                <?php echo htmlspecialchars($u['pais']); ?>
                            </td>
                            <td>
                                <?php echo $u['fecha_registro']; ?>
                            </td>
                            <td>
                                <?php echo $u['num_sesiones']; ?>
                            </td>
                            <td>
                                <?php echo round($u['tiempo_total'] / 60, 1); ?> min
                            </td>
                            <td>
                                <div class="form-check form-switch">
                                    <input class="form-check-input access-toggle" type="checkbox" 
                                           data-user-id="<?php echo $u['id']; ?>" 
                                           data-campo="acceso_poli"
                                           <?php echo ($u['acceso_poli'] ?? 0) ? 'checked' : ''; ?>>
                                </div>
                            </td>
                            <td>
                                <div class="form-check form-switch">
                                    <input class="form-check-input access-toggle" type="checkbox" 
                                           data-user-id="<?php echo $u['id']; ?>" 
                                           data-campo="acceso_unam"
                                           <?php echo ($u['acceso_unam'] ?? 0) ? 'checked' : ''; ?>>
                                </div>
                            </td>
                            <td>
                                <?php echo $u['ultima_actividad']; ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
     <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
    $(document).ready(function() {
        $('.access-toggle').on('change', function() {
            const userId = $(this).data('user-id');
            const campo = $(this).data('campo');
            const valor = $(this).is(':checked') ? 1 : 0;
            const checkbox = $(this);

            checkbox.prop('disabled', true);

            $.post('api_admin.php', {
                user_id: userId,
                campo: campo,
                valor: valor
            }, function(response) {
                checkbox.prop('disabled', false);
                if (!response.success) {
                    alert('Error: ' + response.error);
                    checkbox.prop('checked', !valor);
                }
            }, 'json').fail(function() {
                checkbox.prop('disabled', false);
                alert('Error de conexión con el servidor.');
                checkbox.prop('checked', !valor);
            });
        });
    });
    </script>
</body>
</html>