// 📁 cyber-script.js - Sistema oficial CyberEduMX ECOEMS 2026
// Con datos oficiales de: CyberEdu MX & BioReto Academy

document.addEventListener('DOMContentLoaded', function() {
    
    // ===== CONFIGURACIÓN OFICIAL =====
    const config = {
        autor: 'CyberEdu MX & BioReto Academy',
        udemy_url: 'https://www.udemy.com/course/ecoems2026conia/?referralCode=B2F05026985A2564FAAC',
        whatsapp: '55 2326 9241',
        email: 'JoseLuisGlez@cyberedumx.com',
        sitio_principal: 'https://cyberedumx.com',
        base_url: 'https://cyberedumx.com/ecoems2026',
        simulador_completo: 'https://cyberedumx.com/ecoems2026/simuladores/simulador_completo.php',
        videos_totales: 91,
        infografias_totales: 57,
        dias_restantes: 163,
    };
    
    console.log('🚀 Sistema CyberEduMX ECOEMS 2026 cargado');
    console.log('📊 Configuración oficial:', config);
    
    // ===== INICIALIZACIÓN DEL SISTEMA =====
    initCyberSystem();
    
    function initCyberSystem() {
        // 1. Contador de días real hasta examen
        setupDayCounter();
        
        // 2. Efectos de escritura cyberpunk
        setupTypewriterEffects();
        
        // 3. Sistema de progreso
        setupProgressSystem();
        
        // 4. Interacciones con tarjetas
        setupCardInteractions();
        
        // 5. Notificaciones del sistema
        setupSystemNotifications();
        
        // 6. Modo nocturno automático
        setupNightMode();
        
        // 7. Contador de tiempo de estudio
        setupStudyTimer();
        
        // 8. Conexión con datos oficiales
        setupOfficialDataConnection();
    }
    
    // ===== 1. CONTADOR DE DÍAS =====
    function setupDayCounter() {
        const fechaExamen = new Date('2026-04-15');
        const hoy = new Date();
        const diferencia = fechaExamen - hoy;
        const diasRestantes = Math.ceil(diferencia / (1000 * 60 * 60 * 24));
        
        // Actualizar todos los contadores
        document.querySelectorAll('.stat-value').forEach(stat => {
            const label = stat.closest('.stat-info-cyber').querySelector('h3').textContent;
            if (label.includes('DÍAS') || label.includes('Dias')) {
                if (diasRestantes > 0) {
                    // Animar contador
                    let contador = 0;
                    const incremento = diasRestantes / 50;
                    const intervalo = setInterval(() => {
                        contador += incremento;
                        stat.textContent = Math.floor(contador);
                        
                        if (contador >= diasRestantes) {
                            stat.textContent = diasRestantes;
                            clearInterval(intervalo);
                            
                            // Efecto especial si quedan pocos días
                            if (diasRestantes <= 30) {
                                stat.style.color = '#ff003c';
                                stat.style.animation = 'glow 1s infinite';
                            }
                        }
                    }, 30);
                }
            }
        });
        
        // Actualizar banner de días
        const bannerDias = document.querySelector('.actualizacion-2026');
        if (bannerDias && diasRestantes > 0) {
            const diasInfo = document.createElement('div');
            diasInfo.className = 'dias-info';
            diasInfo.innerHTML = `<strong>${diasRestantes} días</strong> hasta el examen (Abril 2026)`;
            bannerDias.appendChild(diasInfo);
        }
    }
    
    // ===== 2. EFECTOS DE ESCRITURA =====
    function setupTypewriterEffects() {
        // Efecto en título principal
        const mainTitle = document.querySelector('.dashboard-header h1');
        if (mainTitle) {
            const originalText = mainTitle.textContent;
            mainTitle.textContent = '';
            mainTitle.style.borderRight = '2px solid var(--cyber-blue)';
            
            let i = 0;
            const typeWriter = () => {
                if (i < originalText.length) {
                    mainTitle.textContent += originalText.charAt(i);
                    i++;
                    setTimeout(typeWriter, 50);
                } else {
                    // Parpadeo final
                    setInterval(() => {
                        mainTitle.style.borderRight = mainTitle.style.borderRight ? '' : '2px solid var(--cyber-blue)';
                    }, 500);
                }
            };
            
            setTimeout(typeWriter, 800);
        }
        
        // Efecto en nombres de materias
        const materiaTitles = document.querySelectorAll('.materia-title');
        materiaTitles.forEach((title, index) => {
            const originalText = title.textContent;
            title.textContent = '';
            
            setTimeout(() => {
                let i = 0;
                const writeTitle = () => {
                    if (i < originalText.length) {
                        title.textContent += originalText.charAt(i);
                        i++;
                        setTimeout(writeTitle, 30);
                    }
                };
                writeTitle();
            }, 300 + (index * 200));
        });
    }
    
    // ===== 3. SISTEMA DE PROGRESO =====
    function setupProgressSystem() {
        // Cargar progreso desde localStorage
        const progressData = JSON.parse(localStorage.getItem('cyberedumx_progress')) || {
            materias: {},
            preguntas_resueltas: 0,
            tiempo_estudio: 0
        };
        
        // Actualizar estadísticas
        updateStatsFromStorage(progressData);
        
        // Configurar listeners para preguntas
        document.addEventListener('click', function(e) {
            if (e.target.closest('.opcion')) {
                const materiaCard = e.target.closest('.materia-card');
                if (materiaCard) {
                    const materiaId = materiaCard.className.match(/habilidad-verbal|habilidad-matematica|matematicas|fisica|quimica|biologia|espanol|historia|geografia|formacion-civica/)[0];
                    
                    // Actualizar progreso
                    if (!progressData.materias[materiaId]) {
                        progressData.materias[materiaId] = { preguntas: 0, correctas: 0 };
                    }
                    
                    progressData.materias[materiaId].preguntas++;
                    progressData.preguntas_resueltas++;
                    
                    // Guardar en localStorage
                    localStorage.setItem('cyberedumx_progress', JSON.stringify(progressData));
                    
                    // Actualizar UI
                    updateProgressUI(materiaId, progressData.materias[materiaId]);
                    updateGlobalStats(progressData);
                }
            }
        });
        
        // Botón para resetear progreso (debug)
        const resetBtn = document.createElement('button');
        resetBtn.innerHTML = '<i class="fas fa-redo"></i>';
        resetBtn.className = 'reset-progress-btn';
        resetBtn.title = 'Reiniciar progreso';
        resetBtn.style.cssText = `
            position: fixed;
            bottom: 100px;
            right: 30px;
            background: rgba(255, 0, 60, 0.2);
            border: 1px solid #ff003c;
            color: #ff003c;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            cursor: pointer;
            z-index: 1000;
            display: none;
        `;
        document.body.appendChild(resetBtn);
        
        // Mostrar solo en desarrollo
        if (window.location.hostname === 'localhost' || window.location.hostname === '127.0.0.1') {
            resetBtn.style.display = 'flex';
            resetBtn.addEventListener('click', () => {
                if (confirm('¿Reiniciar todo el progreso?')) {
                    localStorage.removeItem('cyberedumx_progress');
                    location.reload();
                }
            });
        }
    }
    
    function updateStatsFromStorage(data) {
        // Actualizar contador de preguntas
        const preguntasStat = document.querySelector('.stat-value:nth-child(2)');
        if (preguntasStat && data.preguntas_resueltas > 0) {
            preguntasStat.textContent = data.preguntas_resueltas;
        }
        
        // Calcular eficiencia
        let correctas = 0;
        let totales = 0;
        
        Object.values(data.materias).forEach(materia => {
            correctas += materia.correctas || 0;
            totales += materia.preguntas || 0;
        });
        
        const eficienciaStat = document.querySelector('.stat-value:nth-child(4)');
        if (eficienciaStat && totales > 0) {
            const eficiencia = Math.round((correctas / totales) * 100);
            eficienciaStat.textContent = `${eficiencia}%`;
            eficienciaStat.style.color = eficiencia >= 70 ? '#00ff9d' : 
                                       eficiencia >= 50 ? '#ffd700' : '#ff003c';
        }
    }
    
    function updateProgressUI(materiaId, data) {
        const materiaCard = document.querySelector(`.${materiaId}`);
        if (materiaCard) {
            const progressFill = materiaCard.querySelector('.progress-fill');
            const progressLabel = materiaCard.querySelector('.progress-label span:last-child');
            
            // Calcular progreso basado en preguntas resueltas
            const preguntasPorMateria = {
                'habilidad-verbal': 100,
                'habilidad-matematica': 40,
                'matematicas': 210,
                'fisica': 90,
                'quimica': 60,
                'biologia': 60,
                'espanol': 150,
                'historia': 100,
                'geografia': 70,
                'formacion-civica': 90
            };
            
            const totalPreguntas = preguntasPorMateria[materiaId] || 100;
            const progreso = Math.min(Math.round((data.preguntas / totalPreguntas) * 100), 100);
            
            if (progressFill) {
                progressFill.style.width = `${progreso}%`;
            }
            
            if (progressLabel) {
                progressLabel.textContent = `${progreso}%`;
            }
        }
    }
    
    function updateGlobalStats(data) {
        // Actualizar estadísticas globales
        const totalPreguntas = 970; // Total de preguntas del curso
        const progresoTotal = Math.round((data.preguntas_resueltas / totalPreguntas) * 100);
        
        // Puedes agregar aquí actualizaciones adicionales
        console.log(`Progreso total: ${progresoTotal}%`);
    }
    
    // ===== 4. INTERACCIONES CON TARJETAS =====
    function setupCardInteractions() {
        const cards = document.querySelectorAll('.materia-card');
        
        cards.forEach(card => {
            // Efecto hover
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-8px) scale(1.02)';
                
                // Resaltar subíndices
                const subindices = this.querySelectorAll('.subindice-item');
                subindices.forEach((item, index) => {
                    setTimeout(() => {
                        item.style.backgroundColor = 'rgba(255, 255, 255, 0.05)';
                        setTimeout(() => {
                            item.style.backgroundColor = '';
                        }, 300);
                    }, index * 100);
                });
                
                // Efecto de sonido sutil
                playSoundEffect('hover');
            });
            
            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0) scale(1)';
            });
            
            // Click para acceder a la materia
            card.addEventListener('click', function(e) {
                if (!e.target.closest('.video-badge') && !e.target.closest('.btn-udemy')) {
                    playSoundEffect('click');
                    
                    // Efecto visual de click
                    const ripple = document.createElement('span');
                    const rect = this.getBoundingClientRect();
                    const x = e.clientX - rect.left;
                    const y = e.clientY - rect.top;
                    
                    ripple.style.cssText = `
                        position: absolute;
                        border-radius: 50%;
                        background: rgba(0, 243, 255, 0.3);
                        transform: scale(0);
                        animation: ripple 0.6s linear;
                        pointer-events: none;
                        width: 100px;
                        height: 100px;
                        left: ${x - 50}px;
                        top: ${y - 50}px;
                    `;
                    
                    this.appendChild(ripple);
                    
                    setTimeout(() => ripple.remove(), 600);
                }
            });
        });
        
        // Agregar animación ripple al CSS
        const rippleStyle = document.createElement('style');
        rippleStyle.textContent = `
            @keyframes ripple {
                to {
                    transform: scale(4);
                    opacity: 0;
                }
            }
        `;
        document.head.appendChild(rippleStyle);
    }
    
    // ===== 5. NOTIFICACIONES DEL SISTEMA =====
    function setupSystemNotifications() {
        // Verificar si es primera visita
        if (!localStorage.getItem('cyberedumx_first_visit')) {
            setTimeout(() => {
                showNotification({
                    title: '¡Bienvenido a CyberEduMX!',
                    message: 'Sistema oficial de preparación ECOEMS 2026',
                    type: 'success',
                    duration: 5000
                });
                localStorage.setItem('cyberedumx_first_visit', 'true');
            }, 2000);
        }
        
        // Notificación de curso oficial
        setTimeout(() => {
            showNotification({
                title: 'Curso completo disponible',
                message: 'Accede a los 91 videos anime en Udemy',
                type: 'info',
                duration: 6000,
                action: {
                    text: 'Ver curso',
                    url: config.udemy_url
                }
            });
        }, 10000);
    }
    
    function showNotification(options) {
        const notification = document.createElement('div');
        notification.className = `cyber-notification ${options.type}`;
        notification.innerHTML = `
            <div class="notification-icon">
                <i class="fas fa-${getIconForType(options.type)}"></i>
            </div>
            <div class="notification-content">
                <div class="notification-title">${options.title}</div>
                <div class="notification-message">${options.message}</div>
                ${options.action ? `<a href="${options.action.url}" target="_blank" class="notification-action">${options.action.text}</a>` : ''}
            </div>
            <div class="notification-close"><i class="fas fa-times"></i></div>
        `;
        
        // Estilos
        notification.style.cssText = `
            position: fixed;
            top: 100px;
            right: 20px;
            background: var(--panel-bg);
            border: 1px solid;
            border-color: ${getColorForType(options.type)};
            border-radius: 8px;
            padding: 15px;
            display: flex;
            align-items: flex-start;
            gap: 15px;
            min-width: 300px;
            max-width: 400px;
            transform: translateX(400px);
            opacity: 0;
            transition: transform 0.3s, opacity 0.3s;
            z-index: 10000;
            backdrop-filter: blur(10px);
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.3);
        `;
        
        document.body.appendChild(notification);
        
        // Animación entrada
        setTimeout(() => {
            notification.style.transform = 'translateX(0)';
            notification.style.opacity = '1';
        }, 10);
        
        // Cerrar al hacer click
        notification.querySelector('.notification-close').addEventListener('click', () => {
            notification.style.transform = 'translateX(400px)';
            notification.style.opacity = '0';
            setTimeout(() => notification.remove(), 300);
        });
        
        // Auto-remover
        if (options.duration) {
            setTimeout(() => {
                if (notification.parentNode) {
                    notification.style.transform = 'translateX(400px)';
                    notification.style.opacity = '0';
                    setTimeout(() => notification.remove(), 300);
                }
            }, options.duration);
        }
    }
    
    function getIconForType(type) {
        const icons = {
            'success': 'check-circle',
            'info': 'info-circle',
            'warning': 'exclamation-triangle',
            'error': 'exclamation-circle'
        };
        return icons[type] || 'info-circle';
    }
    
    function getColorForType(type) {
        const colors = {
            'success': '#00ff9d',
            'info': '#00f3ff',
            'warning': '#ffd700',
            'error': '#ff003c'
        };
        return colors[type] || '#00f3ff';
    }
    
    // ===== 6. MODO NOCTURNO =====
    function setupNightMode() {
        const hour = new Date().getHours();
        if (hour >= 18 || hour < 6) {
            document.body.classList.add('night-mode');
            
            // Agregar estilos nocturnos
            const nightStyles = document.createElement('style');
            nightStyles.textContent = `
                .night-mode {
                    --dark-bg: #050510;
                    --panel-bg: rgba(5, 10, 20, 0.95);
                    --card-bg: rgba(10, 15, 30, 0.98);
                }
                
                .night-mode .cyber-grid {
                    opacity: 0.5;
                }
            `;
            document.head.appendChild(nightStyles);
            
            // Notificación de modo nocturno
            setTimeout(() => {
                showNotification({
                    title: 'Modo nocturno activado',
                    message: 'Interfaz optimizada para estudio nocturno',
                    type: 'info',
                    duration: 3000
                });
            }, 5000);
        }
    }
    
    // ===== 7. CONTADOR DE TIEMPO DE ESTUDIO =====
    function setupStudyTimer() {
        let studyTime = parseInt(localStorage.getItem('cyberedumx_study_time')) || 0;
        
        // Actualizar cada minuto
        setInterval(() => {
            studyTime += 60; // segundos
            localStorage.setItem('cyberedumx_study_time', studyTime.toString());
            
            // Notificaciones motivacionales
            const horas = Math.floor(studyTime / 3600);
            if (horas > 0 && horas % 2 === 0 && !localStorage.getItem(`notif_${horas}h`)) {
                showNotification({
                    title: '¡Gran trabajo!',
                    message: `Llevas ${horas} horas estudiando. ¡Sigue así!`,
                    type: 'success',
                    duration: 5000
                });
                localStorage.setItem(`notif_${horas}h`, 'true');
            }
        }, 60000); // 1 minuto
        
        // Mostrar tiempo actual
        const tiempoStat = document.querySelector('.stat-value:nth-child(4)');
        if (tiempoStat) {
            const horas = Math.floor(studyTime / 3600);
            const minutos = Math.floor((studyTime % 3600) / 60);
            tiempoStat.textContent = `${horas}h ${minutos}m`;
        }
    }
    
    // ===== 8. CONEXIÓN CON DATOS OFICIALES =====
    function setupOfficialDataConnection() {
        // Mostrar datos oficiales en consola
        console.group('📡 Conexión con datos oficiales');
        console.log('Autor:', config.autor);
        console.log('Curso Udemy:', config.udemy_url);
        console.log('WhatsApp:', config.whatsapp);
        console.log('Sitio principal:', config.sitio_principal);
        console.log('Videos totales:', config.videos_totales);
        console.groupEnd();
        
        // Verificar conexión con recursos
        checkResourceAvailability();
    }
    
    function checkResourceAvailability() {
        const resources = [
            { url: config.udemy_url, name: 'Curso Udemy' },
            { url: config.sitio_principal, name: 'Sitio principal' },
            { url: config.simulador_completo, name: 'Simulador' }
        ];
        
        // Puedes implementar fetch para verificar disponibilidad
        resources.forEach(resource => {
            console.log(`🔗 ${resource.name}: ${resource.url}`);
        });
    }
    
    // ===== FUNCIONES AUXILIARES =====
    function playSoundEffect(type) {
        // Sonidos sutiles (opcional)
        if (typeof Audio !== 'undefined') {
            try {
                const sounds = {
                    'hover': 'https://assets.mixkit.co/active_storage/sfx/286/286-preview.mp3',
                    'click': 'https://assets.mixkit.co/active_storage/sfx/259/259-preview.mp3',
                    'success': 'https://assets.mixkit.co/active_storage/sfx/257/257-preview.mp3'
                };
                
                if (sounds[type]) {
                    const audio = new Audio(sounds[type]);
                    audio.volume = 0.1;
                    audio.play().catch(e => console.log("Sonido no disponible"));
                }
            } catch (e) {
                // Silenciar errores de sonido
            }
        }
    }
    
    // ===== EXPORTAR FUNCIONES PARA USO EXTERNO =====
    window.CyberEduMX = {
        config: config,
        showNotification: showNotification,
        getProgress: function() {
            return JSON.parse(localStorage.getItem('cyberedumx_progress')) || {};
        },
        resetProgress: function() {
            localStorage.removeItem('cyberedumx_progress');
            localStorage.removeItem('cyberedumx_study_time');
            localStorage.removeItem('cyberedumx_first_visit');
            location.reload();
        }
    };
    
    console.log('✅ Sistema CyberEduMX inicializado correctamente');
});

// Scripts adicionales que se ejecutan después de cargar
window.addEventListener('load', function() {
    // Efecto de carga completa
    document.body.style.opacity = '0';
    document.body.style.transition = 'opacity 0.5s';
    
    setTimeout(() => {
        document.body.style.opacity = '1';
    }, 100);
    
    // Google Analytics event
    if (typeof gtag !== 'undefined') {
        gtag('event', 'page_view', {
            'page_title': 'CyberEduMX Dashboard',
            'page_location': window.location.href
        });
    }
});