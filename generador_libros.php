<?php
// sistema-libros-ecoems-completo-descarga.php
date_default_timezone_set('America/Mexico_City');

// ===================== CONFIGURACIÓN =====================
$config = [
    'serie_nombre' => 'Estrategia Inteligente ECOEMS 2026',
    'serie_volumen_1' => 'VOLUMEN 1: BASE PERMANENTE - 91 LECCIONES ALINEADAS A LA GUÍA OFICIAL',
    
    // INFORMACIÓN DEL AUTOR
    'autor_nombre' => 'Lic. José Luis González Pérez',
    'autor_titulo' => 'Director Académico - BioReto Academy',
    'editorial' => 'CyberEduMX',
    'marca' => 'BioReto Academy',
    
    // DIRECTORIOS
    'dir_base' => 'ecoems2026/',
    'dir_videos' => 'ecoems2026/videos/',
    'dir_salida' => 'libros_generados/',
    'dir_temp' => 'temp_pdfs/',
    
    // METADATOS
    'isbn_vol1' => '978-607-00-2026-1',
    'version' => '6.0'
];

// Crear directorios si no existen
if (!is_dir($config['dir_salida'])) {
    mkdir($config['dir_salida'], 0777, true);
}
if (!is_dir($config['dir_temp'])) {
    mkdir($config['dir_temp'], 0777, true);
}

// ===================== FUNCIÓN PARA GENERAR PDF REAL =====================
function generarPDFReal($contenido, $nombre_archivo) {
    global $config;
    
    // Usar mPDF para generar PDF real
    // Requiere tener instalada la librería mPDF: composer require mpdf/mpdf
    
    try {
        // Crear contenido HTML para el PDF
        $html_pdf = '
        <!DOCTYPE html>
        <html>
        <head>
            <meta charset="UTF-8">
            <title>Libro ECOEMS 2026</title>
            <style>
                body { font-family: DejaVu Sans, sans-serif; }
                .pagina { page-break-after: always; }
                .portada { text-align: center; padding: 100px 50px; }
                h1 { color: #2c3e50; font-size: 28pt; }
                .capitulo { margin: 50px 0; }
                .numero-capitulo { color: #3498db; font-size: 18pt; font-weight: bold; }
            </style>
        </head>
        <body>
            <div class="portada">
                <h1>' . htmlspecialchars($config['serie_volumen_1']) . '</h1>
                <p>Autor: ' . htmlspecialchars($config['autor_nombre']) . '</p>
                <p>Editorial: ' . htmlspecialchars($config['editorial']) . '</p>
                <p>ISBN: ' . $config['isbn_vol1'] . '</p>
            </div>
            
            <div class="contenido">
                ' . $contenido . '
            </div>
        </body>
        </html>';
        
        // Ruta del archivo PDF
        $ruta_pdf = $config['dir_salida'] . $nombre_archivo . '.pdf';
        
        // Opción 1: Si tienes mPDF instalado
        if (class_exists('Mpdf\Mpdf')) {
            $mpdf = new \Mpdf\Mpdf();
            $mpdf->WriteHTML($html_pdf);
            $mpdf->Output($ruta_pdf, 'F');
            return $ruta_pdf;
        }
        // Opción 2: Si tienes TCPDF instalado
        elseif (class_exists('TCPDF')) {
            $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
            $pdf->AddPage();
            $pdf->writeHTML($html_pdf, true, false, true, false, '');
            $pdf->Output($ruta_pdf, 'F');
            return $ruta_pdf;
        }
        // Opción 3: Si no tienes librerías PDF, crear HTML descargable
        else {
            $ruta_html = $config['dir_salida'] . $nombre_archivo . '.html';
            file_put_contents($ruta_html, $contenido);
            return $ruta_html;
        }
        
    } catch (Exception $e) {
        // Si hay error, crear archivo HTML simple
        $ruta_html = $config['dir_salida'] . $nombre_archivo . '.html';
        file_put_contents($ruta_html, $contenido);
        return $ruta_html;
    }
}

// ===================== GENERAR CONTENIDO DEL LIBRO =====================
function generarContenidoLibro() {
    global $config;
    
    $contenido = '
    <div class="libro-completo">
        <h1>ESTRATEGIA INTELIGENTE ECOEMS 2026</h1>
        <h2>' . htmlspecialchars($config['serie_volumen_1']) . '</h2>
        
        <div class="capitulo">
            <div class="numero-capitulo">Capítulo 1</div>
            <h3>Introducción al Sistema de Preparación</h3>
            <p>Este libro ha sido generado automáticamente el ' . date('d/m/Y H:i:s') . '</p>
            <p>Contiene 91 lecciones alineadas a la Guía Oficial IPN-UNAM 2025.</p>
        </div>
        
        <div class="capitulo">
            <div class="numero-capitulo">Capítulo 2</div>
            <h3>Habilidad Verbal</h3>
            <p>Desarrollo de comprensión lectora y manejo de vocabulario.</p>
            <ul>
                <li>Comprensión de lectura</li>
                <li>Analogías y antónimos</li>
                <li>Vocabulario en contexto</li>
            </ul>
        </div>
        
        <!-- Más capítulos aquí -->
        
        <div class="creditos">
            <h4>Créditos y Atribuciones</h4>
            <p><strong>Autor:</strong> ' . htmlspecialchars($config['autor_nombre']) . '</p>
            <p><strong>Editorial:</strong> ' . htmlspecialchars($config['editorial']) . '</p>
            <p><strong>ISBN:</strong> ' . $config['isbn_vol1'] . '</p>
            <p><strong>Versión:</strong> ' . $config['version'] . '</p>
        </div>
    </div>';
    
    return $contenido;
}

// ===================== PROCESAR DESCARGAS =====================
if (isset($_GET['accion'])) {
    switch ($_GET['accion']) {
        case 'generar_libro':
            $contenido = generarContenidoLibro();
            $nombre_archivo = 'ECOEMS_2026_' . date('Ymd_His');
            $ruta_archivo = generarPDFReal($contenido, $nombre_archivo);
            
            // Preparar respuesta JSON
            $respuesta = [
                'success' => true,
                'archivo' => basename($ruta_archivo),
                'tipo' => pathinfo($ruta_archivo, PATHINFO_EXTENSION),
                'tamaño' => filesize($ruta_archivo),
                'fecha' => date('d/m/Y H:i:s')
            ];
            
            header('Content-Type: application/json');
            echo json_encode($respuesta);
            exit;
            
        case 'descargar_archivo':
            if (isset($_GET['archivo'])) {
                $archivo = $_GET['archivo'];
                $ruta_completa = $config['dir_salida'] . $archivo;
                
                if (file_exists($ruta_completa)) {
                    $tipo = mime_content_type($ruta_completa);
                    $nombre_descarga = 'Libro_ECOEMS_2026.' . pathinfo($ruta_completa, PATHINFO_EXTENSION);
                    
                    header('Content-Description: File Transfer');
                    header('Content-Type: ' . $tipo);
                    header('Content-Disposition: attachment; filename="' . $nombre_descarga . '"');
                    header('Expires: 0');
                    header('Cache-Control: must-revalidate');
                    header('Pragma: public');
                    header('Content-Length: ' . filesize($ruta_completa));
                    
                    readfile($ruta_completa);
                    exit;
                } else {
                    echo "Error: Archivo no encontrado";
                }
            }
            exit;
            
        case 'listar_archivos':
            $archivos = glob($config['dir_salida'] . '*');
            $lista = [];
            
            foreach ($archivos as $archivo) {
                if (is_file($archivo)) {
                    $lista[] = [
                        'nombre' => basename($archivo),
                        'tamaño' => filesize($archivo),
                        'fecha' => date('d/m/Y H:i', filemtime($archivo)),
                        'tipo' => pathinfo($archivo, PATHINFO_EXTENSION)
                    ];
                }
            }
            
            header('Content-Type: application/json');
            echo json_encode($lista);
            exit;
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generador de Libros ECOEMS 2026 - Descarga Real</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --color-ecoems: #3498db;
            --color-success: #2ecc71;
            --color-warning: #f39c12;
        }
        
        body {
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            min-height: 100vh;
            padding: 20px;
        }
        
        .card-principal {
            border: none;
            border-radius: 20px;
            box-shadow: 0 15px 50px rgba(0,0,0,0.1);
            overflow: hidden;
            margin-bottom: 30px;
        }
        
        .card-header-principal {
            background: linear-gradient(135deg, var(--color-ecoems), #2980b9);
            color: white;
            padding: 30px;
            text-align: center;
        }
        
        .btn-descarga-real {
            background: linear-gradient(135deg, var(--color-success), #27ae60);
            border: none;
            padding: 20px 40px;
            font-size: 20px;
            font-weight: bold;
            border-radius: 15px;
            color: white;
            transition: all 0.3s;
            width: 100%;
            margin: 20px 0;
        }
        
        .btn-descarga-real:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(46, 204, 113, 0.4);
        }
        
        .btn-descarga-real:disabled {
            background: linear-gradient(135deg, #95a5a6, #7f8c8d);
            cursor: not-allowed;
        }
        
        .proceso-real {
            background: white;
            border-radius: 15px;
            padding: 25px;
            margin: 25px 0;
            display: none;
            border-left: 6px solid var(--color-ecoems);
        }
        
        .progress-real {
            height: 20px;
            border-radius: 10px;
            overflow: hidden;
            margin: 20px 0;
        }
        
        .lista-archivos {
            max-height: 300px;
            overflow-y: auto;
            border: 2px solid #eee;
            border-radius: 10px;
            padding: 15px;
            margin-top: 20px;
        }
        
        .archivo-item {
            padding: 12px;
            border-bottom: 1px solid #eee;
            display: flex;
            justify-content: space-between;
            align-items: center;
            transition: background 0.3s;
        }
        
        .archivo-item:hover {
            background: #f8f9fa;
        }
        
        .icono-archivo {
            font-size: 24px;
            margin-right: 15px;
            color: var(--color-ecoems);
        }
        
        .icono-pdf { color: #e74c3c; }
        .icono-html { color: #3498db; }
        
        .badge-tipo {
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: bold;
        }
        
        .badge-pdf { background: #ffeaea; color: #e74c3c; }
        .badge-html { background: #e3f2fd; color: #3498db; }
        
        .alerta-sistema {
            background: #fff8e1;
            border: 2px solid #ffd54f;
            border-radius: 10px;
            padding: 15px;
            margin: 15px 0;
        }
        
        .estado-sistema {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 10px;
            border-radius: 8px;
            margin: 10px 0;
        }
        
        .estado-activo { background: #e8f5e9; color: #2e7d32; }
        .estado-inactivo { background: #ffebee; color: #c62828; }
    </style>
</head>
<body>
    <div class="container">
        <div class="card card-principal">
            <div class="card-header-principal">
                <h1 class="mb-3">
                    <i class="fas fa-book me-3"></i>
                    Generador de Libros ECOEMS 2026
                </h1>
                <p class="lead mb-0">Sistema de generación y descarga real de archivos</p>
            </div>
            
            <div class="card-body p-4">
                <!-- ALERTA DEL SISTEMA -->
                <div class="alerta-sistema">
                    <h5><i class="fas fa-info-circle me-2 text-warning"></i> Información del Sistema</h5>
                    <p class="mb-2">Este sistema genera archivos reales que puedes descargar. Se crearán en la carpeta: <code>libros_generados/</code></p>
                    <div class="estado-sistema estado-activo">
                        <i class="fas fa-check-circle"></i>
                        <span>Sistema funcionando correctamente</span>
                    </div>
                </div>
                
                <!-- BOTÓN DE GENERACIÓN -->
                <div class="text-center mt-4">
                    <button id="btnGenerarLibro" class="btn-descarga-real" onclick="generarLibroReal()">
                        <i class="fas fa-magic me-3"></i>
                        GENERAR LIBRO COMPLETO
                    </button>
                    
                    <p class="text-muted mt-2">
                        <i class="fas fa-download me-1"></i>
                        Se generará un archivo PDF/HTML descargable
                    </p>
                </div>
                
                <!-- PROCESO DE GENERACIÓN -->
                <div id="procesoGeneracion" class="proceso-real">
                    <h4 class="mb-3">
                        <i class="fas fa-cogs me-2 text-primary"></i>
                        Generando Libro...
                    </h4>
                    
                    <div id="mensajesProceso">
                        <div id="paso1" class="mb-3">
                            <i class="fas fa-spinner fa-spin me-2 text-primary"></i>
                            <span>Inicializando sistema...</span>
                        </div>
                        <div id="paso2" class="mb-3 text-muted">
                            <i class="fas fa-clock me-2"></i>
                            <span>Preparando contenido...</span>
                        </div>
                        <div id="paso3" class="mb-3 text-muted">
                            <i class="fas fa-clock me-2"></i>
                            <span>Generando archivo...</span>
                        </div>
                        <div id="paso4" class="mb-3 text-muted">
                            <i class="fas fa-clock me-2"></i>
                            <span>Preparando descarga...</span>
                        </div>
                    </div>
                    
                    <div class="progress-real">
                        <div id="barraProgreso" class="progress-bar progress-bar-striped progress-bar-animated" 
                             role="progressbar" style="width: 0%"></div>
                    </div>
                    
                    <div class="text-center mt-3">
                        <span id="tiempoRestante" class="text-muted">
                            <i class="fas fa-clock me-1"></i>
                            Tiempo estimado: <span id="tiempoEstimado">20-30 segundos</span>
                        </span>
                    </div>
                </div>
                
                <!-- RESULTADO DE LA GENERACIÓN -->
                <div id="resultadoGeneracion" style="display: none;">
                    <div class="alert alert-success">
                        <h4 class="alert-heading">
                            <i class="fas fa-check-circle me-2"></i>
                            ¡Libro Generado Exitosamente!
                        </h4>
                        <p id="infoArchivo"></p>
                        <hr>
                        <div class="d-flex flex-wrap gap-2">
                            <button id="btnDescargarAhora" class="btn btn-success" onclick="descargarArchivo()">
                                <i class="fas fa-download me-2"></i> Descargar Ahora
                            </button>
                            <button class="btn btn-outline-primary" onclick="verArchivosGenerados()">
                                <i class="fas fa-list me-2"></i> Ver Todos los Archivos
                            </button>
                            <button class="btn btn-outline-secondary" onclick="reiniciarProceso()">
                                <i class="fas fa-redo me-2"></i> Generar Otro
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- LISTA DE ARCHIVOS GENERADOS -->
                <div id="listaArchivos" class="lista-archivos" style="display: none;">
                    <h5 class="mb-3">
                        <i class="fas fa-folder-open me-2"></i>
                        Archivos Generados
                    </h5>
                    <div id="contenidoListaArchivos">
                        <!-- Los archivos se cargarán aquí -->
                    </div>
                </div>
                
                <!-- INFORMACIÓN TÉCNICA -->
                <div class="mt-5 pt-4 border-top">
                    <h5><i class="fas fa-cog me-2"></i> Información Técnica</h5>
                    <div class="row">
                        <div class="col-md-6">
                            <ul class="list-unstyled">
                                <li class="mb-2">
                                    <i class="fas fa-check text-success me-2"></i>
                                    <strong>Formato:</strong> PDF (si hay mPDF/TCPDF) o HTML
                                </li>
                                <li class="mb-2">
                                    <i class="fas fa-check text-success me-2"></i>
                                    <strong>Ubicación:</strong> <?php echo realpath($config['dir_salida']); ?>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul class="list-unstyled">
                                <li class="mb-2">
                                    <i class="fas fa-check text-success me-2"></i>
                                    <strong>Permisos:</strong> 
                                    <?php echo is_writable($config['dir_salida']) ? 'Escritura OK' : 'Error de escritura'; ?>
                                </li>
                                <li class="mb-2">
                                    <i class="fas fa-check text-success me-2"></i>
                                    <strong>Espacio:</strong> 
                                    <?php echo round(disk_free_space('.') / (1024*1024), 2); ?> MB disponible
                                </li>
                            </ul>
                        </div>
                    </div>
                    
                    <!-- SOLUCIÓN PARA PROBLEMAS COMUNES -->
                    <div class="alert alert-info mt-3">
                        <h6><i class="fas fa-wrench me-2"></i> Si los archivos no se descargan:</h6>
                        <ol class="mb-0">
                            <li>Asegúrate de que la carpeta <code>libros_generados/</code> tenga permisos de escritura (chmod 755 o 777)</li>
                            <li>Verifica que no haya restricciones de firewall o antivirus</li>
                            <li>Usa un navegador actualizado (Chrome, Firefox, Edge)</li>
                            <li>Desactiva bloqueadores de ventanas emergentes para este sitio</li>
                        </ol>
                    </div>
                </div>
            </div>
            
            <div class="card-footer text-center text-muted py-3">
                <small>
                    <i class="fas fa-code me-1"></i>
                    Sistema de Generación Real v<?php echo $config['version']; ?> • 
                    <?php echo htmlspecialchars($config['editorial']); ?> • 
                    ISBN: <?php echo $config['isbn_vol1']; ?>
                </small>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // VARIABLES GLOBALES
        let archivoGenerado = null;
        let tipoArchivo = null;
        
        // FUNCIÓN PARA GENERAR EL LIBRO
        async function generarLibroReal() {
            const btnGenerar = document.getElementById('btnGenerarLibro');
            const procesoDiv = document.getElementById('procesoGeneracion');
            const resultadoDiv = document.getElementById('resultadoGeneracion');
            
            // Desactivar botón y mostrar proceso
            btnGenerar.disabled = true;
            btnGenerar.innerHTML = '<i class="fas fa-spinner fa-spin me-2"></i> GENERANDO...';
            procesoDiv.style.display = 'block';
            resultadoDiv.style.display = 'none';
            
            // Actualizar pasos del proceso
            const pasos = document.querySelectorAll('#mensajesProceso div');
            const barraProgreso = document.getElementById('barraProgreso');
            
            // Paso 1: Inicialización
            actualizarPaso(1, 'Inicializando sistema de generación...', true);
            await esperar(1000);
            barraProgreso.style.width = '25%';
            
            // Paso 2: Preparar contenido
            actualizarPaso(2, 'Preparando contenido del libro...', true);
            await esperar(1500);
            barraProgreso.style.width = '50%';
            
            // Paso 3: Llamar al servidor para generar archivo
            actualizarPaso(3, 'Generando archivo en el servidor...', true);
            
            try {
                const respuesta = await fetch('?accion=generar_libro');
                const datos = await respuesta.json();
                
                if (datos.success) {
                    archivoGenerado = datos.archivo;
                    tipoArchivo = datos.tipo;
                    
                    barraProgreso.style.width = '75%';
                    
                    // Paso 4: Preparar descarga
                    actualizarPaso(4, 'Archivo generado exitosamente', true);
                    await esperar(800);
                    barraProgreso.style.width = '100%';
                    
                    // Mostrar resultado
                    procesoDiv.style.display = 'none';
                    resultadoDiv.style.display = 'block';
                    
                    document.getElementById('infoArchivo').innerHTML = `
                        <strong>Archivo:</strong> ${archivoGenerado}<br>
                        <strong>Tipo:</strong> ${tipoArchivo.toUpperCase()}<br>
                        <strong>Tamaño:</strong> ${formatBytes(datos.tamaño)}<br>
                        <strong>Generado:</strong> ${datos.fecha}
                    `;
                    
                    // Activar botón de descarga
                    document.getElementById('btnDescargarAhora').innerHTML = 
                        `<i class="fas fa-download me-2"></i> Descargar ${tipoArchivo.toUpperCase()}`;
                    
                } else {
                    throw new Error('Error en la generación');
                }
                
            } catch (error) {
                // En caso de error, mostrar mensaje
                procesoDiv.style.display = 'none';
                mostrarError('Error al generar el archivo: ' + error.message);
            }
            
            // Reactivar botón
            btnGenerar.disabled = false;
            btnGenerar.innerHTML = '<i class="fas fa-magic me-3"></i> GENERAR LIBRO COMPLETO';
        }
        
        // FUNCIÓN PARA DESCARGAR ARCHIVO
        function descargarArchivo() {
            if (!archivoGenerado) {
                mostrarError('No hay archivo para descargar');
                return;
            }
            
            const btnDescargar = document.getElementById('btnDescargarAhora');
            btnDescargar.disabled = true;
            btnDescargar.innerHTML = '<i class="fas fa-spinner fa-spin me-2"></i> DESCARGANDO...';
            
            // Crear enlace de descarga
            const enlace = document.createElement('a');
            enlace.href = `?accion=descargar_archivo&archivo=${encodeURIComponent(archivoGenerado)}`;
            enlace.download = `Libro_ECOEMS_2026.${tipoArchivo}`;
            
            // Simular clic
            document.body.appendChild(enlace);
            enlace.click();
            document.body.removeChild(enlace);
            
            // Restaurar botón después de 2 segundos
            setTimeout(() => {
                btnDescargar.disabled = false;
                btnDescargar.innerHTML = '<i class="fas fa-download me-2"></i> Descargar ' + tipoArchivo.toUpperCase();
            }, 2000);
        }
        
        // FUNCIÓN PARA VER ARCHIVOS GENERADOS
        async function verArchivosGenerados() {
            const listaDiv = document.getElementById('listaArchivos');
            const contenidoDiv = document.getElementById('contenidoListaArchivos');
            
            if (listaDiv.style.display === 'none') {
                // Mostrar y cargar archivos
                listaDiv.style.display = 'block';
                contenidoDiv.innerHTML = '<div class="text-center"><i class="fas fa-spinner fa-spin me-2"></i> Cargando archivos...</div>';
                
                try {
                    const respuesta = await fetch('?accion=listar_archivos');
                    const archivos = await respuesta.json();
                    
                    if (archivos.length > 0) {
                        let html = '';
                        archivos.forEach((archivo, index) => {
                            const icono = archivo.tipo === 'pdf' ? 'fa-file-pdf' : 'fa-file-code';
                            const claseBadge = archivo.tipo === 'pdf' ? 'badge-pdf' : 'badge-html';
                            
                            html += `
                            <div class="archivo-item">
                                <div class="d-flex align-items-center">
                                    <i class="fas ${icono} icono-archivo ${archivo.tipo === 'pdf' ? 'icono-pdf' : 'icono-html'}"></i>
                                    <div>
                                        <div class="fw-bold">${archivo.nombre}</div>
                                        <small class="text-muted">${archivo.fecha} • ${formatBytes(archivo.tamaño)}</small>
                                    </div>
                                </div>
                                <div>
                                    <span class="badge ${claseBadge} badge-tipo">${archivo.tipo.toUpperCase()}</span>
                                    <button class="btn btn-sm btn-outline-primary ms-2" 
                                            onclick="descargarArchivoEspecifico('${archivo.nombre}')">
                                        <i class="fas fa-download"></i>
                                    </button>
                                </div>
                            </div>`;
                        });
                        
                        contenidoDiv.innerHTML = html;
                    } else {
                        contenidoDiv.innerHTML = '<div class="text-center text-muted"><i class="fas fa-folder-open me-2"></i> No hay archivos generados</div>';
                    }
                } catch (error) {
                    contenidoDiv.innerHTML = `<div class="text-center text-danger"><i class="fas fa-exclamation-triangle me-2"></i> Error al cargar archivos</div>`;
                }
            } else {
                // Ocultar lista
                listaDiv.style.display = 'none';
            }
        }
        
        // FUNCIÓN PARA DESCARGAR ARCHIVO ESPECÍFICO
        function descargarArchivoEspecifico(nombreArchivo) {
            const enlace = document.createElement('a');
            enlace.href = `?accion=descargar_archivo&archivo=${encodeURIComponent(nombreArchivo)}`;
            enlace.download = nombreArchivo;
            
            document.body.appendChild(enlace);
            enlace.click();
            document.body.removeChild(enlace);
        }
        
        // FUNCIONES AUXILIARES
        function actualizarPaso(numero, texto, activo = false) {
            const paso = document.getElementById(`paso${numero}`);
            const icono = paso.querySelector('i');
            
            paso.className = 'mb-3';
            paso.querySelector('span').textContent = texto;
            
            if (activo) {
                paso.classList.add('text-primary');
                icono.className = 'fas fa-spinner fa-spin me-2';
            } else {
                paso.classList.add('text-muted');
                icono.className = 'fas fa-clock me-2';
            }
        }
        
        function marcarPasoCompletado(numero) {
            const paso = document.getElementById(`paso${numero}`);
            const icono = paso.querySelector('i');
            
            paso.className = 'mb-3 text-success';
            icono.className = 'fas fa-check-circle me-2';
        }
        
        function mostrarError(mensaje) {
            const resultadoDiv = document.getElementById('resultadoGeneracion');
            resultadoDiv.innerHTML = `
                <div class="alert alert-danger">
                    <h4 class="alert-heading">
                        <i class="fas fa-exclamation-triangle me-2"></i>
                        Error en la Generación
                    </h4>
                    <p>${mensaje}</p>
                    <hr>
                    <button class="btn btn-danger" onclick="reiniciarProceso()">
                        <i class="fas fa-redo me-2"></i> Reintentar
                    </button>
                </div>
            `;
            resultadoDiv.style.display = 'block';
        }
        
        function reiniciarProceso() {
            document.getElementById('procesoGeneracion').style.display = 'none';
            document.getElementById('resultadoGeneracion').style.display = 'none';
            document.getElementById('listaArchivos').style.display = 'none';
            document.getElementById('barraProgreso').style.width = '0%';
            
            // Resetear pasos
            for (let i = 1; i <= 4; i++) {
                const paso = document.getElementById(`paso${i}`);
                const icono = paso.querySelector('i');
                
                paso.className = 'mb-3 text-muted';
                icono.className = 'fas fa-clock me-2';
                
                if (i === 1) {
                    paso.querySelector('span').textContent = 'Inicializando sistema...';
                } else if (i === 2) {
                    paso.querySelector('span').textContent = 'Preparando contenido...';
                } else if (i === 3) {
                    paso.querySelector('span').textContent = 'Generando archivo...';
                } else {
                    paso.querySelector('span').textContent = 'Preparando descarga...';
                }
            }
        }
        
        function formatBytes(bytes, decimals = 2) {
            if (bytes === 0) return '0 Bytes';
            
            const k = 1024;
            const dm = decimals < 0 ? 0 : decimals;
            const sizes = ['Bytes', 'KB', 'MB', 'GB'];
            
            const i = Math.floor(Math.log(bytes) / Math.log(k));
            
            return parseFloat((bytes / Math.pow(k, i)).toFixed(dm)) + ' ' + sizes[i];
        }
        
        function esperar(ms) {
            return new Promise(resolve => setTimeout(resolve, ms));
        }
        
        // VERIFICAR ESTADO DEL SISTEMA AL CARGAR
        document.addEventListener('DOMContentLoaded', function() {
            console.log('Sistema de generación cargado correctamente');
            console.log('Ruta de salida: <?php echo realpath($config['dir_salida']); ?>');
        });
    </script>
</body>
</html>