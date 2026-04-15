<?php
// check_videos.php — Lista qué archivos existen en /ecoems2026/videos/
// BORRAR después de usarlo

$base = __DIR__ . '/ecoems2026/videos/';
$results = [];

for ($i = 0; $i <= 90; $i++) {
    $dir = $base . "video$i/";
    if (!is_dir($dir)) {
        $results[] = ["video" => "video$i", "status" => "carpeta no existe", "files" => []];
        continue;
    }
    $files = array_values(array_filter(scandir($dir), fn($f) => !in_array($f, ['.', '..'])));
    $png   = array_filter($files, fn($f) => str_ends_with($f, '.png'));
    $pdf   = array_filter($files, fn($f) => str_ends_with($f, '.pdf'));
    $audio = array_filter($files, fn($f) => str_ends_with($f, '.mp3') || str_ends_with($f, '.m4a'));

    $missing = [];
    if (empty($png))   $missing[] = 'infografia.png';
    if (empty($pdf))   $missing[] = 'presentacion.pdf';
    if (empty($audio)) $missing[] = 'audio (mp3/m4a)';

    $results[] = [
        "video"   => "video$i",
        "ok"      => empty($missing),
        "files"   => $files,
        "missing" => $missing,
    ];
}

$total     = count($results);
$completos = count(array_filter($results, fn($r) => $r['ok'] ?? false));
$faltantes = $total - $completos;
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Check Videos — Hostinger</title>
<style>
  body { font-family: monospace; background: #0f0f1a; color: #e2e8f0; padding: 2rem; }
  h1 { color: #a78bfa; }
  .stats { display: flex; gap: 1rem; margin-bottom: 2rem; flex-wrap: wrap; }
  .stat { background: #1e1e2e; border-radius: 8px; padding: 0.75rem 1.25rem; }
  .stat span { font-size: 1.5rem; font-weight: 900; display: block; }
  .green span { color: #34d399; }
  .red span { color: #f87171; }
  table { width: 100%; border-collapse: collapse; font-size: 0.8rem; }
  th { background: #12122a; padding: 0.5rem 0.75rem; text-align: left; color: #475569; border-bottom: 1px solid #2d2d3f; }
  td { padding: 0.45rem 0.75rem; border-bottom: 1px solid #1e1e2e; }
  .ok { color: #34d399; }
  .fail { color: #f87171; }
  .missing { color: #fbbf24; font-size: 0.75rem; }
  .files { color: #64748b; font-size: 0.7rem; }
</style>
</head>
<body>
<h1>Estado de Videos en Hostinger</h1>
<div class="stats">
  <div class="stat green"><span><?= $completos ?></span>Completos</div>
  <div class="stat red"><span><?= $faltantes ?></span>Con faltantes</div>
  <div class="stat"><span><?= $total ?></span>Total</div>
</div>
<table>
  <thead><tr><th>Video</th><th>Estado</th><th>Archivos en servidor</th><th>Falta</th></tr></thead>
  <tbody>
  <?php foreach ($results as $r): ?>
    <tr>
      <td><?= $r['video'] ?></td>
      <td class="<?= ($r['ok'] ?? false) ? 'ok' : 'fail' ?>"><?= ($r['ok'] ?? false) ? '✓ Completo' : '✗ Incompleto' ?></td>
      <td class="files"><?= isset($r['files']) ? implode(', ', $r['files']) : '—' ?></td>
      <td class="missing"><?= isset($r['missing']) ? implode(', ', $r['missing']) : '' ?></td>
    </tr>
  <?php endforeach; ?>
  </tbody>
</table>
</body>
</html>
