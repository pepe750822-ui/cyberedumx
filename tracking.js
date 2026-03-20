/**
 * tracking.js - Client-side tracking for CyberEdu MX
 */

const Tracking = {
    userId: localStorage.getItem('tracking_user_id'),
    sesionId: null,
    startTime: Date.now(),
    lastHeartbeat: Date.now(),
    heartbeatInterval: 30000, // 30 segundos

    init: function () {
        if (!this.userId) {
            this.showModal();
        } else {
            this.startSession();
        }
    },

    showModal: function () {
        // Crear el modal dinámicamente si no existe
        const modalHtml = `
            <div id="tracking-modal" style="position:fixed;top:0;left:0;width:100%;height:100%;background:rgba(0,0,0,0.8);display:flex;justify-content:center;align-items:center;z-index:9999;font-family: 'Inter', sans-serif;">
                <div style="background:white;padding:30px;border-radius:15px;max-width:400px;width:90%;text-align:center;box-shadow: 0 10px 25px rgba(0,0,0,0.2);">
                    <h2 style="color:#2c3e50;margin-bottom:15px;">¡Bienvenido a ECOEMS 2026!</h2>
                    <p style="color:#7f8c8d;margin-bottom:20px;">Para acceder al contenido gratuito, por favor déjanos tus datos.</p>
                    <input type="text" id="track-name" placeholder="Nombre completo" style="width:100%;padding:12px;margin-bottom:10px;border:1px solid #ddd;border-radius:8px;">
                    <input type="email" id="track-email" placeholder="Correo electrónico" style="width:100%;padding:12px;margin-bottom:10px;border:1px solid #ddd;border-radius:8px;">
                    <select id="track-country" style="width:100%;padding:12px;margin-bottom:20px;border:1px solid #ddd;border-radius:8px;">
                        <option value="">Selecciona tu país</option>
                        <option value="Mexico">México</option>
                        <option value="Colombia">Colombia</option>
                        <option value="Argentina">Argentina</option>
                        <option value="Peru">Perú</option>
                        <option value="Chile">Chile</option>
                        <option value="Otro">Otro</option>
                    </select>
                    <button onclick="Tracking.register()" style="background:#2ecc71;color:white;border:none;padding:12px 25px;border-radius:8px;cursor:pointer;font-weight:600;width:100%;">Comenzar ahora</button>
                </div>
            </div>
        `;
        document.body.insertAdjacentHTML('beforeend', modalHtml);
    },

    register: function () {
        const nombre = document.getElementById('track-name').value;
        const correo = document.getElementById('track-email').value;
        const pais = document.getElementById('track-country').value;

        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!nombre || !correo || !pais) {
            alert("Por favor rellena todos los campos.");
            return;
        }

        if (!emailRegex.test(correo)) {
            alert("Por favor ingresa un correo electrónico válido.");
            return;
        }

        const formData = new FormData();
        formData.append('action', 'registrar');
        formData.append('nombre', nombre);
        formData.append('correo', correo);
        formData.append('pais', pais);

        fetch('api_tracking.php', {
            method: 'POST',
            body: formData
        })
            .then(r => r.json())
            .then(data => {
                if (data.success) {
                    this.userId = data.user_id;
                    localStorage.setItem('tracking_user_id', data.user_id);
                    document.getElementById('tracking-modal').remove();
                    this.startSession();
                } else {
                    alert("Error: " + data.error);
                }
            });
    },

    startSession: function () {
        const formData = new FormData();
        formData.append('action', 'iniciar_sesion');
        formData.append('user_id', this.userId);
        formData.append('pagina', window.location.pathname);

        fetch('api_tracking.php', {
            method: 'POST',
            body: formData
        })
            .then(r => r.json())
            .then(data => {
                if (data.success) {
                    this.sesionId = data.sesion_id;
                    this.setupHeartbeat();
                }
            });
    },

    setupHeartbeat: function () {
        setInterval(() => {
            this.sendHeartbeat();
        }, this.heartbeatInterval);

        // También al cerrar la página
        window.addEventListener('beforeunload', () => {
            this.sendHeartbeat();
        });
    },

    sendHeartbeat: function () {
        if (!this.sesionId) return;

        const now = Date.now();
        const diff = Math.round((now - this.lastHeartbeat) / 1000);
        this.lastHeartbeat = now;

        const avanceData = this.getAvance();

        const formData = new FormData();
        formData.append('action', 'heartbeat');
        formData.append('sesion_id', this.sesionId);
        formData.append('duracion', diff);
        formData.append('avance', avanceData.titulo);

        // Si hay un video detectado, enviarlo también
        if (avanceData.videoId !== null) {
            this.trackVideo(avanceData.videoId, avanceData.materia);
        }

        // Usar sendBeacon para asegurar que se envíe incluso al cerrar
        if (navigator.sendBeacon) {
            navigator.sendBeacon('api_tracking.php', formData);
        } else {
            fetch('api_tracking.php', { method: 'POST', body: formData });
        }
    },

    trackVideo: function (videoId, materia) {
        if (!this.userId || !videoId) return;

        console.log(`Tracking video: ${videoId} in ${materia}`);
        const formData = new FormData();
        formData.append('action', 'marcar_video');
        formData.append('user_id', this.userId);
        formData.append('video_id', videoId);
        formData.append('materia', materia || 'General');

        fetch('api_tracking.php', { method: 'POST', body: formData });
    },

    // Nueva función para rastreo manual o desde otros scripts
    trackNotebookLM: function (videoId, materia) {
        console.log(`Tracking NotebookLM click for video: ${videoId}`);
        // Por ahora lo contamos como video visto si hace clic en NotebookLM
        this.trackVideo(videoId, materia);
    },

    getAvance: function () {
        let videoId = null;
        let materia = '';

        // Detección mejorada
        const activeVideoElement = document.querySelector('.video-card.active, .accordion-button:not(.collapsed), [data-current-video]');
        if (activeVideoElement) {
            const text = activeVideoElement.innerText || '';
            const match = text.match(/Video\s*(\d+)/i);
            if (match) videoId = match[1];
        }

        if (!videoId && window.currentVideoId !== undefined) {
            videoId = window.currentVideoId;
        }

        // Detectar materia
        const materiaEl = document.querySelector('.materia-title, h1, h2, .breadcrumb-item.active');
        materia = materiaEl ? materiaEl.innerText.trim() : 'General';

        return {
            titulo: document.title,
            videoId: videoId,
            materia: materia
        };
    },

    // Escuchar clics en NotebookLM automáticamente
    bindEvents: function () {
        document.addEventListener('click', (e) => {
            const target = e.target.closest('a');
            if (target && (target.href.includes('notebooklm.google.com') || target.innerText.includes('NotebookLM'))) {
                const videoId = this.getAvance().videoId;
                const materia = this.getAvance().materia;
                this.trackNotebookLM(videoId, materia);
            }
        });
    }
};

// Exponer Tracking globalmente para que otros PHP puedan llamarlo
window.Tracking = Tracking;

// Inicializar cuando el DOM esté listo
document.addEventListener('DOMContentLoaded', () => {
    Tracking.init();
    Tracking.bindEvents();
});
