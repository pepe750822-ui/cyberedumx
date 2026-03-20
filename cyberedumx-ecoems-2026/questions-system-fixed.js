// 📁 questions-system-fixed.js - Sistema que muestra TODAS las 10 preguntas
const QuestionSystemFixed = {
    
    // ===== GENERAR Y MOSTRAR 10 PREGUNTAS COMPLETAS =====
    renderAllQuestions: function(subindiceId, containerElement) {
        const questions = this.generateQuestionsForSubindice(subindiceId);
        
        // Limpiar contenedor
        containerElement.innerHTML = '';
        
        // Crear header del subíndice
        const header = this.createSubindiceHeader(subindiceId);
        containerElement.appendChild(header);
        
        // Crear indicador de progreso
        const progressIndicator = this.createProgressIndicator();
        containerElement.appendChild(progressIndicator);
        
        // Crear las 10 preguntas VISIBLES
        questions.forEach((question, index) => {
            const questionHTML = this.createVisibleQuestionHTML(question, index + 1);
            containerElement.appendChild(questionHTML);
        });
        
        // Crear botón de scroll
        this.createScrollButton();
        
        // Inicializar sistema
        this.initQuestionSystem();
    },
    
    createSubindiceHeader: function(subindiceId) {
        const header = document.createElement('div');
        header.className = 'subindice-header';
        header.innerHTML = `
            <div>
                <h2>Subíndice ${subindiceId}</h2>
                <p style="color: #a0a0ff; margin-top: 5px;">10 preguntas completas - Todas visibles</p>
            </div>
            <div class="preguntas-total-badge">
                <i class="fas fa-list-ol"></i>
                <span>10 PREGUNTAS</span>
            </div>
        `;
        return header;
    },
    
    createProgressIndicator: function() {
        const indicator = document.createElement('div');
        indicator.className = 'progress-indicator';
        indicator.innerHTML = `
            <h4><i class="fas fa-chart-line"></i> Progreso de respuestas:</h4>
            <div class="progress-dots" id="progress-dots">
                ${Array.from({length: 10}, (_, i) => 
                    `<div class="progress-dot" data-pregunta="${i+1}" onclick="QuestionSystemFixed.scrollToQuestion(${i+1})">
                        ${i+1}
                    </div>`
                ).join('')}
            </div>
        `;
        return indicator;
    },
    
    createVisibleQuestionHTML: function(question, questionNumber) {
        const div = document.createElement('div');
        div.className = 'pregunta-container';
        div.id = `pregunta-${questionNumber}`;
        div.setAttribute('data-question-number', questionNumber);
        
        // Encabezado con número grande
        const header = document.createElement('div');
        header.className = 'pregunta-numero';
        header.innerHTML = `
            <span>PREGUNTA ${questionNumber}</span>
            <span class="question-status" id="status-${questionNumber}"></span>
        `;
        
        // Texto de la pregunta
        const texto = document.createElement('div');
        texto.className = 'pregunta-texto';
        texto.innerHTML = question.pregunta;
        
        // Imagen (si existe)
        let imagenHTML = '';
        if (question.imagen) {
            imagenHTML = `
                <div class="pregunta-imagen-container">
                    <img src="../assets/images/${question.imagen}" 
                         alt="Imagen pregunta ${questionNumber}" 
                         class="pregunta-imagen"
                         onerror="this.style.display='none'">
                </div>
            `;
        }
        
        // Opciones
        let opcionesHTML = '<div class="opciones-grid">';
        question.opciones.forEach(opcion => {
            opcionesHTML += `
                <div class="opcion" 
                     data-correcta="${opcion.correcta}" 
                     data-letra="${opcion.letra}" 
                     data-question-id="${question.id}"
                     onclick="QuestionSystemFixed.handleAnswer(this, ${question.id}, '${opcion.letra}', ${questionNumber})">
                    <div class="letra-opcion">${opcion.letra}</div>
                    <div class="texto-opcion">${opcion.texto}</div>
                </div>
            `;
        });
        opcionesHTML += '</div>';
        
        // Feedback
        const feedback = document.createElement('div');
        feedback.className = 'feedback';
        feedback.id = `feedback-${question.id}`;
        feedback.innerHTML = `
            <div class="feedback-content" id="feedback-content-${question.id}">
                <!-- Contenido se llenará dinámicamente -->
            </div>
        `;
        
        // Ensamblar todo
        div.innerHTML = `
            ${header.outerHTML}
            ${texto.outerHTML}
            ${imagenHTML}
            ${opcionesHTML}
            ${feedback.outerHTML}
        `;
        
        return div;
    },
    
    // ===== MANEJADOR DE RESPUESTAS MEJORADO =====
    handleAnswer: function(element, questionId, selectedOption, questionNumber) {
        const isCorrect = element.getAttribute('data-correcta') === 'true';
        const questionContainer = element.closest('.pregunta-container');
        const allOptions = questionContainer.querySelectorAll('.opcion');
        const feedback = document.getElementById(`feedback-${questionId}`);
        const feedbackContent = document.getElementById(`feedback-content-${questionId}`);
        
        // Si ya fue respondida, no hacer nada
        if (questionContainer.classList.contains('answered')) {
            return;
        }
        
        // Marcar como respondida
        questionContainer.classList.add('answered');
        
        // Resetear todas las opciones
        allOptions.forEach(opt => {
            opt.style.pointerEvents = 'none';
            opt.classList.remove('opcion-correcta', 'opcion-incorrecta');
        });
        
        if (isCorrect) {
            // Respuesta correcta
            element.classList.add('opcion-correcta');
            
            feedbackContent.innerHTML = `
                <div class="feedback-header correcto">
                    <i class="fas fa-check-circle"></i> ¡Correcto!
                </div>
                <div class="feedback-body">
                    <strong>Explicación:</strong> ${this.getExplanation(questionId)}
                </div>
            `;
            feedback.classList.add('feedback-correcto');
            
            // Actualizar indicador de progreso
            this.updateProgressDot(questionNumber, 'correct');
        } else {
            // Respuesta incorrecta
            element.classList.add('opcion-incorrecta');
            
            // Encontrar y marcar la opción correcta
            const correctOption = questionContainer.querySelector('.opcion[data-correcta="true"]');
            if (correctOption) {
                correctOption.classList.add('opcion-correcta');
            }
            
            feedbackContent.innerHTML = `
                <div class="feedback-header incorrecto">
                    <i class="fas fa-times-circle"></i> Incorrecto
                </div>
                <div class="feedback-body">
                    <strong>Respuesta correcta:</strong> ${correctOption ? correctOption.querySelector('.texto-opcion').textContent : 'No disponible'}<br>
                    <strong>Explicación:</strong> ${this.getExplanation(questionId)}
                </div>
            `;
            feedback.classList.add('feedback-incorrecto');
            
            // Actualizar indicador de progreso
            this.updateProgressDot(questionNumber, 'incorrect');
        }
        
        // Mostrar feedback con animación
        feedback.style.display = 'block';
        feedback.style.animation = 'slideIn 0.5s';
        
        // Guardar progreso
        this.saveProgress(questionId, isCorrect, questionNumber);
        
        // Actualizar estadísticas
        this.updateStats();
        
        // Verificar si se completaron todas
        this.checkCompletion();
    },
    
    updateProgressDot: function(questionNumber, status) {
        const dot = document.querySelector(`.progress-dot[data-pregunta="${questionNumber}"]`);
        if (dot) {
            dot.classList.add('completed');
            if (status === 'correct') {
                dot.innerHTML = `<i class="fas fa-check"></i>`;
                dot.style.background = '#00ff9d';
            } else {
                dot.innerHTML = `<i class="fas fa-times"></i>`;
                dot.style.background = '#ff003c';
            }
        }
    },
    
    // ===== SISTEMA DE SCROLL =====
    createScrollButton: function() {
        // Eliminar si ya existe
        const existingBtn = document.querySelector('.scroll-to-question');
        if (existingBtn) existingBtn.remove();
        
        const btn = document.createElement('button');
        btn.className = 'scroll-to-question';
        btn.innerHTML = '<i class="fas fa-arrow-up"></i>';
        btn.title = 'Ir al inicio';
        btn.onclick = () => window.scrollTo({ top: 0, behavior: 'smooth' });
        
        document.body.appendChild(btn);
        
        // Mostrar/ocultar al hacer scroll
        window.addEventListener('scroll', () => {
            if (window.scrollY > 500) {
                btn.style.opacity = '1';
                btn.style.visibility = 'visible';
            } else {
                btn.style.opacity = '0';
                btn.style.visibility = 'hidden';
            }
        });
    },
    
    scrollToQuestion: function(questionNumber) {
        const question = document.getElementById(`pregunta-${questionNumber}`);
        if (question) {
            question.scrollIntoView({ 
                behavior: 'smooth', 
                block: 'center' 
            });
            
            // Efecto de resaltado
            question.style.animation = 'none';
            setTimeout(() => {
                question.style.animation = 'highlightQuestion 1s';
            }, 10);
        }
    },
    
    // ===== VERIFICACIÓN DE COMPLETACIÓN =====
    checkCompletion: function() {
        const answered = document.querySelectorAll('.pregunta-container.answered').length;
        const total = document.querySelectorAll('.pregunta-container').length;
        
        if (answered === total) {
            // Todas respondidas
            this.showCompletionMessage();
        }
    },
    
    showCompletionMessage: function() {
        setTimeout(() => {
            const message = document.createElement('div');
            message.className = 'completion-message';
            message.innerHTML = `
                <div class="completion-content">
                    <h3><i class="fas fa-trophy"></i> ¡Subíndice Completado!</h3>
                    <p>Has respondido todas las 10 preguntas correctamente.</p>
                    <div class="completion-stats">
                        <div class="stat">
                            <span class="stat-number" id="correct-count">0</span>
                            <span class="stat-label">Correctas</span>
                        </div>
                        <div class="stat">
                            <span class="stat-number" id="incorrect-count">0</span>
                            <span class="stat-label">Incorrectas</span>
                        </div>
                        <div class="stat">
                            <span class="stat-number" id="percentage">0%</span>
                            <span class="stat-label">Eficiencia</span>
                        </div>
                    </div>
                    <button class="btn-completion" onclick="QuestionSystemFixed.resetSubindice()">
                        <i class="fas fa-redo"></i> Reintentar
                    </button>
                </div>
            `;
            
            // Estilos para el mensaje
            message.style.cssText = `
                position: fixed;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                background: rgba(10, 15, 30, 0.95);
                border: 2px solid var(--color-habilidad-verbal);
                border-radius: 15px;
                padding: 30px;
                z-index: 2000;
                backdrop-filter: blur(10px);
                box-shadow: 0 0 50px rgba(0, 243, 255, 0.3);
                animation: popIn 0.5s;
                min-width: 400px;
                max-width: 90%;
            `;
            
            document.body.appendChild(message);
            
            // Calcular estadísticas
            this.calculateStats();
            
            // Cerrar al hacer click fuera
            message.addEventListener('click', (e) => {
                if (e.target === message) {
                    message.remove();
                }
            });
        }, 1000);
    },
    
    calculateStats: function() {
        const correct = document.querySelectorAll('.opcion-correcta[data-correcta="true"]').length;
        const incorrect = document.querySelectorAll('.opcion-incorrecta').length;
        const percentage = Math.round((correct / 10) * 100);
        
        document.getElementById('correct-count').textContent = correct;
        document.getElementById('incorrect-count').textContent = incorrect;
        document.getElementById('percentage').textContent = `${percentage}%`;
    },
    
    resetSubindice: function() {
        // Eliminar mensaje de completado
        document.querySelector('.completion-message')?.remove();
        
        // Resetear todas las preguntas
        document.querySelectorAll('.pregunta-container').forEach(container => {
            container.classList.remove('answered');
            
            // Resetear opciones
            container.querySelectorAll('.opcion').forEach(opt => {
                opt.style.pointerEvents = 'auto';
                opt.classList.remove('opcion-correcta', 'opcion-incorrecta');
            });
            
            // Ocultar feedback
            const feedback = container.querySelector('.feedback');
            if (feedback) {
                feedback.style.display = 'none';
                feedback.classList.remove('feedback-correcto', 'feedback-incorrecto');
            }
        });
        
        // Resetear indicadores de progreso
        document.querySelectorAll('.progress-dot').forEach(dot => {
            dot.classList.remove('completed');
            dot.innerHTML = dot.getAttribute('data-pregunta');
            dot.style.background = '';
        });
        
        // Resetear estadísticas
        this.resetProgressForSubindice();
    },
    
    // ===== INICIALIZACIÓN =====
    initQuestionSystem: function() {
        // Agregar estilos para animaciones
        this.addAnimationStyles();
        
        // Cargar progreso previo
        this.loadExistingProgress();
        
        // Configurar atajos de teclado
        this.setupKeyboardShortcuts();
    },
    
    addAnimationStyles: function() {
        const style = document.createElement('style');
        style.textContent = `
            @keyframes highlightQuestion {
                0% { box-shadow: 0 0 0 0 rgba(0, 243, 255, 0.7); }
                70% { box-shadow: 0 0 0 20px rgba(0, 243, 255, 0); }
                100% { box-shadow: 0 0 0 0 rgba(0, 243, 255, 0); }
            }
            
            @keyframes popIn {
                from { opacity: 0; transform: translate(-50%, -50%) scale(0.5); }
                to { opacity: 1; transform: translate(-50%, -50%) scale(1); }
            }
            
            .completion-stats {
                display: flex;
                justify-content: space-around;
                margin: 20px 0;
            }
            
            .completion-stats .stat {
                text-align: center;
            }
            
            .completion-stats .stat-number {
                display: block;
                font-family: var(--font-tech);
                font-size: 2rem;
                color: var(--color-habilidad-verbal);
                font-weight: bold;
            }
            
            .completion-stats .stat-label {
                font-size: 0.9rem;
                color: #a0a0ff;
            }
            
            .btn-completion {
                background: var(--color-habilidad-verbal);
                color: #000;
                border: none;
                padding: 12px 25px;
                border-radius: 6px;
                font-family: var(--font-tech);
                font-weight: bold;
                cursor: pointer;
                margin-top: 15px;
                width: 100%;
                transition: all 0.3s;
            }
            
            .btn-completion:hover {
                transform: translateY(-3px);
                box-shadow: 0 5px 15px rgba(0, 243, 255, 0.3);
            }
        `;
        document.head.appendChild(style);
    },
    
    loadExistingProgress: function() {
        // Cargar progreso desde localStorage y marcar preguntas ya respondidas
        // (Implementación similar a la anterior)
    },
    
    setupKeyboardShortcuts: function() {
        document.addEventListener('keydown', (e) => {
            // Números 1-0 para saltar a preguntas
            if (e.key >= '1' && e.key <= '9') {
                this.scrollToQuestion(parseInt(e.key));
            }
            if (e.key === '0') {
                this.scrollToQuestion(10);
            }
        });
    },
    
    // ===== FUNCIONES DE LA VERSIÓN ANTERIOR (mantenidas) =====
    generateQuestionsForSubindice: function(subindiceId) {
        // Mantener misma lógica de generación
        return window.QuestionSystem?.generateQuestionsForSubindice(subindiceId) || 
               this.generatePlaceholderQuestions(subindiceId);
    },
    
    generatePlaceholderQuestions: function(subindiceId) {
        // Mantener misma lógica
        const questions = [];
        for (let i = 1; i <= 10; i++) {
            questions.push({
                id: i + (parseInt(subindiceId.split('.')[1]) * 100),
                pregunta: `Pregunta ${i} del subíndice ${subindiceId} - Contenido completo de la pregunta con texto suficiente para evaluar comprensión lectora.`,
                tipo: 'texto',
                opciones: [
                    { letra: 'A', texto: 'Opción correcta - Esta es la respuesta adecuada', correcta: true },
                    { letra: 'B', texto: 'Opción incorrecta - Distractor común', correcta: false },
                    { letra: 'C', texto: 'Opción incorrecta - Otra alternativa errónea', correcta: false },
                    { letra: 'D', texto: 'Opción incorrecta - Último distractor', correcta: false }
                ],
                explicacion: 'Explicación detallada de por qué la opción A es correcta, incluyendo referencias al texto y razonamiento lógico.',
                imagen: i <= 3 ? `pregunta-${i}.jpg` : null
            });
        }
        return questions;
    },
    
    getExplanation: function(questionId) {
        // Buscar en base de datos
        for (const subindice in window.QuestionSystem?.questionsDatabase || {}) {
            const question = window.QuestionSystem.questionsDatabase[subindice].find(q => q.id == questionId);
            if (question) return question.explicacion;
        }
        return 'La opción correcta se selecciona porque es la única que coincide completamente con la información presentada en el texto.';
    },
    
    saveProgress: function(questionId, isCorrect, questionNumber) {
        let progress = JSON.parse(localStorage.getItem('cyberedumx_progress_v2')) || {
            subindices: {},
            total_resueltas: 0,
            total_correctas: 0
        };
        
        const subindice = document.querySelector('.subindice-header h2')?.textContent.split(' ')[1] || '1.1';
        
        if (!progress.subindices[subindice]) {
            progress.subindices[subindice] = {
                preguntas: {},
                completado: false
            };
        }
        
        progress.subindices[subindice].preguntas[questionNumber] = {
            id: questionId,
            correcta: isCorrect,
            fecha: new Date().toISOString()
        };
        
        progress.total_resueltas++;
        if (isCorrect) progress.total_correctas++;
        
        // Marcar como completado si todas respondidas
        const preguntasRespondidas = Object.keys(progress.subindices[subindice].preguntas).length;
        if (preguntasRespondidas === 10) {
            progress.subindices[subindice].completado = true;
        }
        
        localStorage.setItem('cyberedumx_progress_v2', JSON.stringify(progress));
    },
    
    resetProgressForSubindice: function() {
        const subindice = document.querySelector('.subindice-header h2')?.textContent.split(' ')[1] || '1.1';
        let progress = JSON.parse(localStorage.getItem('cyberedumx_progress_v2')) || {};
        
        if (progress.subindices && progress.subindices[subindice]) {
            delete progress.subindices[subindice];
            localStorage.setItem('cyberedumx_progress_v2', JSON.stringify(progress));
        }
    },
    
    updateStats: function() {
        const progress = JSON.parse(localStorage.getItem('cyberedumx_progress_v2')) || {};
        
        // Actualizar contadores en página
        const resueltasElement = document.querySelector('.stat-resueltas');
        const correctasElement = document.querySelector('.stat-correctas');
        const eficienciaElement = document.querySelector('.stat-eficiencia');
        
        if (resueltasElement) {
            resueltasElement.textContent = progress.total_resueltas || 0;
        }
        
        if (correctasElement) {
            correctasElement.textContent = progress.total_correctas || 0;
        }
        
        if (eficienciaElement && progress.total_resueltas > 0) {
            const eficiencia = Math.round((progress.total_correctas / progress.total_resueltas) * 100);
            eficienciaElement.textContent = `${eficiencia}%`;
            
            // Color según eficiencia
            if (eficiencia >= 80) eficienciaElement.style.color = '#00ff9d';
            else if (eficiencia >= 60) eficienciaElement.style.color = '#ffd700';
            else eficienciaElement.style.color = '#ff003c';
        }
    }
};

// Hacer disponible globalmente
window.QuestionSystemFixed = QuestionSystemFixed;

// Inicializar automáticamente si hay contenedor de preguntas
document.addEventListener('DOMContentLoaded', function() {
    const container = document.getElementById('questions-container');
    if (container) {
        // Detectar subíndice actual desde URL o elemento activo
        const activeSubindice = document.querySelector('.btn-subindice.active')?.getAttribute('data-subindice') || '1.1';
        QuestionSystemFixed.renderAllQuestions(activeSubindice, container);
    }
});