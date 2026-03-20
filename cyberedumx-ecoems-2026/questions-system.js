// 📁 questions-system.js - Generador de 10 preguntas por subíndice
const QuestionSystem = {
    // ===== BASE DE DATOS DE PREGUNTAS =====
    questionsDatabase: {
        // HABILIDAD VERBAL
        '1.1': [
            {
                id: 1,
                pregunta: "Lee el texto: 'El cambio climático es uno de los mayores desafíos de nuestro tiempo. Sus efectos adversos impactan en la biodiversidad, la economía y la salud humana. La quema de combustibles fósiles, la deforestación y la agricultura intensiva son las principales causas del aumento de gases de efecto invernadero.' ¿Cuál es la principal causa del cambio climático según el texto?",
                tipo: 'texto',
                opciones: [
                    { letra: 'A', texto: 'Aumento de gases de efecto invernadero por actividades humanas', correcta: true },
                    { letra: 'B', texto: 'Fenómenos naturales cíclicos del planeta', correcta: false },
                    { letra: 'C', texto: 'La disminución de la población mundial', correcta: false },
                    { letra: 'D', texto: 'El aumento de la temperatura solar', correcta: false }
                ],
                explicacion: 'El texto menciona explícitamente que "la quema de combustibles fósiles, la deforestación y la agricultura intensiva son las principales causas del aumento de gases de efecto invernadero".',
                imagen: 'cambio-climatico.jpg'
            },
            {
                id: 2,
                pregunta: "Según el texto: 'La Revolución Industrial, iniciada en Gran Bretaña en el siglo XVIII, transformó radicalmente la economía mundial. Introdujo la producción mecanizada, desarrolló el sistema fabril y generó un éxodo masivo de población rural hacia las ciudades industriales.' ¿Dónde comenzó la Revolución Industrial?",
                tipo: 'texto',
                opciones: [
                    { letra: 'A', texto: 'Francia', correcta: false },
                    { letra: 'B', texto: 'Gran Bretaña', correcta: true },
                    { letra: 'C', texto: 'Alemania', correcta: false },
                    { letra: 'D', texto: 'Estados Unidos', correcta: false }
                ],
                explicacion: 'El texto menciona explícitamente "iniciada en Gran Bretaña en el siglo XVIII".',
                imagen: 'revolucion-industrial.jpg'
            },
            {
                id: 3,
                pregunta: "Analiza el siguiente párrafo: 'La fotosíntesis es el proceso mediante el cual las plantas verdes y algunos otros organismos utilizan la luz solar para sintetizar nutrientes a partir del dióxido de carbono y el agua.' ¿Qué elementos son necesarios para la fotosíntesis según el texto?",
                tipo: 'texto',
                opciones: [
                    { letra: 'A', texto: 'Luz solar, dióxido de carbono y agua', correcta: true },
                    { letra: 'B', texto: 'Oxígeno, nitrógeno y minerales', correcta: false },
                    { letra: 'C', texto: 'Tierra, aire y fuego', correcta: false },
                    { letra: 'D', texto: 'Clorofila solamente', correcta: false }
                ],
                explicacion: 'El texto menciona específicamente: "utilizan la luz solar para sintetizar nutrientes a partir del dióxido de carbono y el agua".',
                imagen: 'fotosintesis.jpg'
            },
            {
                id: 4,
                pregunta: "Lee atentamente: 'El sistema solar está compuesto por el Sol y todos los cuerpos celestes que giran a su alrededor, incluyendo ocho planetas, sus satélites, asteroides, cometas y meteoroides.' Según esta definición, ¿cuántos planetas hay en nuestro sistema solar?",
                tipo: 'texto',
                opciones: [
                    { letra: 'A', texto: 'Nueve planetas', correcta: false },
                    { letra: 'B', texto: 'Ocho planetas', correcta: true },
                    { letra: 'C', texto: 'Diez planetas', correcta: false },
                    { letra: 'D', texto: 'Siete planetas', correcta: false }
                ],
                explicacion: 'El texto dice claramente: "incluyendo ocho planetas".',
                imagen: 'sistema-solar.jpg'
            },
            {
                id: 5,
                pregunta: "Observa el siguiente texto: 'La democracia es un sistema político donde el poder reside en el pueblo, que elige a sus representantes mediante elecciones libres y periódicas.' ¿Qué característica principal define a la democracia según el texto?",
                tipo: 'texto',
                opciones: [
                    { letra: 'A', texto: 'El poder reside en el pueblo', correcta: true },
                    { letra: 'B', texto: 'Existe un rey o monarca', correcta: false },
                    { letra: 'C', texto: 'Hay un solo partido político', correcta: false },
                    { letra: 'D', texto: 'Las decisiones las toma el ejército', correcta: false }
                ],
                explicacion: 'La primera línea del texto establece: "La democracia es un sistema político donde el poder reside en el pueblo".',
                imagen: 'democracia.jpg'
            },
            {
                id: 6,
                pregunta: "Analiza: 'La mitosis es el proceso de división celular mediante el cual una célula madre se divide en dos células hijas genéticamente idénticas. Este proceso es fundamental para el crecimiento y la reparación de tejidos.' ¿Cuál es el resultado principal de la mitosis?",
                tipo: 'texto',
                opciones: [
                    { letra: 'A', texto: 'Dos células hijas genéticamente idénticas', correcta: true },
                    { letra: 'B', texto: 'Cuatro células con variación genética', correcta: false },
                    { letra: 'C', texto: 'Una célula más grande', correcta: false },
                    { letra: 'D', texto: 'Tres células especializadas', correcta: false }
                ],
                explicacion: 'El texto especifica: "una célula madre se divide en dos células hijas genéticamente idénticas".',
                imagen: 'mitosis.jpg'
            },
            {
                id: 7,
                pregunta: "Lee el siguiente texto sobre ecología: 'Los ecosistemas están formados por componentes bióticos (seres vivos) y abióticos (factores físicos y químicos). La interacción entre estos componentes mantiene el equilibrio ecológico.' Según el texto, ¿qué son los componentes abióticos?",
                tipo: 'texto',
                opciones: [
                    { letra: 'A', texto: 'Factores físicos y químicos', correcta: true },
                    { letra: 'B', texto: 'Solo los animales', correcta: false },
                    { letra: 'C', texto: 'Únicamente las plantas', correcta: false },
                    { letra: 'D', texto: 'Los seres humanos exclusivamente', correcta: false }
                ],
                explicacion: 'El texto define claramente: "abióticos (factores físicos y químicos)".',
                imagen: 'ecosistema.jpg'
            },
            {
                id: 8,
                pregunta: "Analiza esta definición: 'La globalización es el proceso de interconexión mundial en los ámbitos económico, político, social y cultural, facilitado por los avances tecnológicos y las comunicaciones.' ¿Qué aspectos abarca la globalización según el texto?",
                tipo: 'texto',
                opciones: [
                    { letra: 'A', texto: 'Económico, político, social y cultural', correcta: true },
                    { letra: 'B', texto: 'Solo el aspecto económico', correcta: false },
                    { letra: 'C', texto: 'Únicamente el cultural', correcta: false },
                    { letra: 'D', texto: 'Solo político y económico', correcta: false }
                ],
                explicacion: 'El texto enumera específicamente: "ámbitos económico, político, social y cultural".',
                imagen: 'globalizacion.jpg'
            },
            {
                id: 9,
                pregunta: "Lee: 'El Renacimiento fue un movimiento cultural que surgió en Italia en el siglo XIV y se extendió por Europa hasta el siglo XVI. Se caracterizó por el resurgimiento del interés por la cultura clásica grecorromana.' ¿Dónde surgió el Renacimiento?",
                tipo: 'texto',
                opciones: [
                    { letra: 'A', texto: 'Italia', correcta: true },
                    { letra: 'B', texto: 'Francia', correcta: false },
                    { letra: 'C', texto: 'España', correcta: false },
                    { letra: 'D', texto: 'Inglaterra', correcta: false }
                ],
                explicacion: 'El texto indica claramente: "surgió en Italia en el siglo XIV".',
                imagen: 'renacimiento.jpg'
            },
            {
                id: 10,
                pregunta: "Analiza el texto: 'La Constitución Mexicana de 1917 estableció los derechos sociales como el derecho a la educación, a la salud y a un trabajo digno. Fue la primera constitución en el mundo en incluir estos derechos.' ¿Qué innovación introdujo la Constitución de 1917?",
                tipo: 'texto',
                opciones: [
                    { letra: 'A', texto: 'Los derechos sociales', correcta: true },
                    { letra: 'B', texto: 'La monarquía constitucional', correcta: false },
                    { letra: 'C', texto: 'El sistema feudal', correcta: false },
                    { letra: 'D', texto: 'La esclavitud legal', correcta: false }
                ],
                explicacion: 'El texto destaca: "estableció los derechos sociales" y menciona que fue la primera en incluirlos.',
                imagen: 'constitucion-1917.jpg'
            }
        ],
        
        '1.2': [
            // 10 preguntas para Inferir hechos
            {
                id: 1,
                pregunta: "María llegó a casa con las manos llenas de bolsas de supermercado. Abrió la nevera y comenzó a guardar frutas, verduras y carnes. Luego sacó un recetario y empezó a picar cebolla. ¿Qué se puede inferir sobre lo que hará María?",
                tipo: 'inferencia',
                opciones: [
                    { letra: 'A', texto: 'Preparará la comida', correcta: true },
                    { letra: 'B', texto: 'Limpiará la casa', correcta: false },
                    { letra: 'C', texto: 'Hará ejercicio', correcta: false },
                    { letra: 'D', texto: 'Verá televisión', correcta: false }
                ],
                explicacion: 'Se infiere que preparará comida porque compró alimentos, los guardó en la nevera y empezó a picar cebolla con un recetario.',
                imagen: 'cocina.jpg'
            },
            // Agregar 9 preguntas más similares...
        ],
        
        // Más subíndices con 10 preguntas cada uno...
    },
    
    // ===== GENERADOR DE PREGUNTAS =====
    generateQuestionsForSubindice: function(subindiceId) {
        const questions = this.questionsDatabase[subindiceId];
        if (!questions || questions.length === 0) {
            console.warn(`No hay preguntas para el subíndice ${subindiceId}`);
            return this.generatePlaceholderQuestions(subindiceId);
        }
        
        return questions;
    },
    
    generatePlaceholderQuestions: function(subindiceId) {
        const placeholderQuestions = [];
        for (let i = 1; i <= 10; i++) {
            placeholderQuestions.push({
                id: i,
                pregunta: `Pregunta ${i} del subíndice ${subindiceId} - Esta es una pregunta de ejemplo. El contenido real se cargará desde la base de datos.`,
                tipo: 'placeholder',
                opciones: [
                    { letra: 'A', texto: 'Opción correcta', correcta: true },
                    { letra: 'B', texto: 'Opción incorrecta 1', correcta: false },
                    { letra: 'C', texto: 'Opción incorrecta 2', correcta: false },
                    { letra: 'D', texto: 'Opción incorrecta 3', correcta: false }
                ],
                explicacion: 'Explicación detallada de por qué la opción A es correcta.',
                imagen: null
            });
        }
        return placeholderQuestions;
    },
    
    // ===== RENDERIZADOR DE PREGUNTAS =====
    renderQuestions: function(subindiceId, containerElement) {
        const questions = this.generateQuestionsForSubindice(subindiceId);
        
        // Limpiar contenedor
        containerElement.innerHTML = '';
        
        // Crear 10 preguntas
        questions.forEach((question, index) => {
            const questionHTML = this.createQuestionHTML(question, index + 1);
            containerElement.appendChild(questionHTML);
        });
        
        // Agregar controles de navegación
        this.addNavigationControls(containerElement);
    },
    
    createQuestionHTML: function(question, questionNumber) {
        const div = document.createElement('div');
        div.className = 'pregunta-container';
        div.id = `pregunta-${questionNumber}`;
        
        // Encabezado de pregunta
        const header = document.createElement('div');
        header.className = 'pregunta-header';
        header.innerHTML = `<span class="pregunta-numero">Pregunta ${questionNumber}</span>`;
        
        // Texto de la pregunta
        const texto = document.createElement('div');
        texto.className = 'pregunta-texto';
        texto.innerHTML = question.pregunta;
        
        // Imagen (si existe)
        let imagenHTML = '';
        if (question.imagen) {
            imagenHTML = `
                <div class="pregunta-imagen-container">
                    <img src="../assets/images/${question.imagen}" alt="Imagen pregunta ${questionNumber}" class="pregunta-imagen">
                </div>
            `;
        }
        
        // Opciones
        let opcionesHTML = '<div class="opciones-grid">';
        question.opciones.forEach(opcion => {
            opcionesHTML += `
                <div class="opcion" data-correcta="${opcion.correcta}" data-letra="${opcion.letra}" onclick="QuestionSystem.handleAnswer(this, '${question.id}', '${opcion.letra}')">
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
            <div class="feedback-content">
                <strong>Explicación:</strong> ${question.explicacion}
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
    
    // ===== MANEJADOR DE RESPUESTAS =====
    handleAnswer: function(element, questionId, selectedOption) {
        const isCorrect = element.getAttribute('data-correcta') === 'true';
        const questionContainer = element.closest('.pregunta-container');
        const allOptions = questionContainer.querySelectorAll('.opcion');
        const feedback = questionContainer.querySelector('.feedback');
        
        // Resetear todas las opciones
        allOptions.forEach(opt => {
            opt.classList.remove('opcion-correcta', 'opcion-incorrecta');
            opt.style.pointerEvents = 'none'; // Desactivar más clicks
        });
        
        // Marcar selección del usuario
        if (isCorrect) {
            element.classList.add('opcion-correcta');
            feedback.classList.add('feedback-correcto');
            feedback.querySelector('.feedback-content').innerHTML = `
                <div class="feedback-header correcto">
                    <i class="fas fa-check-circle"></i> ¡Correcto!
                </div>
                <div class="feedback-body">
                    <strong>Explicación:</strong> ${this.getExplanation(questionId)}
                </div>
            `;
        } else {
            element.classList.add('opcion-incorrecta');
            feedback.classList.add('feedback-incorrecto');
            
            // Encontrar y marcar la opción correcta
            const correctOption = questionContainer.querySelector('.opcion[data-correcta="true"]');
            if (correctOption) {
                correctOption.classList.add('opcion-correcta');
            }
            
            feedback.querySelector('.feedback-content').innerHTML = `
                <div class="feedback-header incorrecto">
                    <i class="fas fa-times-circle"></i> Incorrecto
                </div>
                <div class="feedback-body">
                    <strong>Respuesta correcta:</strong> ${correctOption ? correctOption.querySelector('.texto-opcion').textContent : 'No disponible'}<br>
                    <strong>Explicación:</strong> ${this.getExplanation(questionId)}
                </div>
            `;
        }
        
        // Mostrar feedback
        feedback.style.display = 'block';
        
        // Guardar progreso
        this.saveProgress(questionId, isCorrect);
    },
    
    getExplanation: function(questionId) {
        // Buscar explicación en la base de datos
        for (const subindice in this.questionsDatabase) {
            const question = this.questionsDatabase[subindice].find(q => q.id == questionId);
            if (question) return question.explicacion;
        }
        return 'Explicación no disponible.';
    },
    
    // ===== SISTEMA DE PROGRESO =====
    saveProgress: function(questionId, isCorrect) {
        let progress = JSON.parse(localStorage.getItem('cyberedumx_progress')) || {
            preguntas_resueltas: 0,
            preguntas_correctas: 0,
            detalles: {}
        };
        
        if (!progress.detalles[questionId]) {
            progress.preguntas_resueltas++;
            if (isCorrect) progress.preguntas_correctas++;
            progress.detalles[questionId] = {
                resuelta: true,
                correcta: isCorrect,
                fecha: new Date().toISOString()
            };
            
            localStorage.setItem('cyberedumx_progress', JSON.stringify(progress));
            
            // Actualizar estadísticas en tiempo real
            this.updateStats(progress);
        }
    },
    
    updateStats: function(progress) {
        // Actualizar contadores en la página
        const stats = {
            resueltas: document.querySelector('.stat-resueltas'),
            correctas: document.querySelector('.stat-correctas'),
            eficiencia: document.querySelector('.stat-eficiencia')
        };
        
        if (stats.resueltas) {
            stats.resueltas.textContent = progress.preguntas_resueltas;
        }
        
        if (stats.correctas) {
            stats.correctas.textContent = progress.preguntas_correctas;
        }
        
        if (stats.eficiencia && progress.preguntas_resueltas > 0) {
            const eficiencia = Math.round((progress.preguntas_correctas / progress.preguntas_resueltas) * 100);
            stats.eficiencia.textContent = `${eficiencia}%`;
            
            // Color según eficiencia
            if (eficiencia >= 80) stats.eficiencia.style.color = '#00ff9d';
            else if (eficiencia >= 60) stats.eficiencia.style.color = '#ffd700';
            else stats.eficiencia.style.color = '#ff003c';
        }
    },
    
    // ===== CONTROLES DE NAVEGACIÓN =====
    addNavigationControls: function(container) {
        const nav = document.createElement('div');
        nav.className = 'preguntas-navigation';
        nav.innerHTML = `
            <button class="btn-nav" onclick="QuestionSystem.prevQuestion()">
                <i class="fas fa-chevron-left"></i> Anterior
            </button>
            <div class="pregunta-indicadores">
                ${Array.from({length: 10}, (_, i) => 
                    `<span class="indicador" data-pregunta="${i+1}" onclick="QuestionSystem.goToQuestion(${i+1})">${i+1}</span>`
                ).join('')}
            </div>
            <button class="btn-nav" onclick="QuestionSystem.nextQuestion()">
                Siguiente <i class="fas fa-chevron-right"></i>
            </button>
        `;
        
        container.parentNode.insertBefore(nav, container.nextSibling);
        
        // Agregar navegación por teclado
        this.setupKeyboardNavigation();
    },
    
    setupKeyboardNavigation: function() {
        document.addEventListener('keydown', (e) => {
            if (e.key === 'ArrowLeft') this.prevQuestion();
            if (e.key === 'ArrowRight') this.nextQuestion();
            if (e.key >= '1' && e.key <= '9') this.goToQuestion(parseInt(e.key));
            if (e.key === '0') this.goToQuestion(10);
        });
    },
    
    prevQuestion: function() {
        const current = this.getCurrentQuestion();
        if (current > 1) this.goToQuestion(current - 1);
    },
    
    nextQuestion: function() {
        const current = this.getCurrentQuestion();
        if (current < 10) this.goToQuestion(current + 1);
    },
    
    goToQuestion: function(number) {
        const question = document.getElementById(`pregunta-${number}`);
        if (question) {
            // Ocultar todas las preguntas
            document.querySelectorAll('.pregunta-container').forEach(q => {
                q.style.display = 'none';
            });
            
            // Mostrar pregunta seleccionada
            question.style.display = 'block';
            
            // Actualizar indicadores
            this.updateIndicators(number);
            
            // Scroll a la pregunta
            question.scrollIntoView({ behavior: 'smooth', block: 'start' });
        }
    },
    
    getCurrentQuestion: function() {
        const visible = document.querySelector('.pregunta-container[style*="display: block"]');
        if (visible) {
            return parseInt(visible.id.split('-')[1]);
        }
        return 1;
    },
    
    updateIndicators: function(current) {
        document.querySelectorAll('.indicador').forEach((ind, index) => {
            ind.classList.remove('active');
            if (index + 1 === current) {
                ind.classList.add('active');
            }
        });
    },
    
    // ===== INICIALIZACIÓN =====
    init: function() {
        console.log('🚀 Sistema de Preguntas cargado - 10 preguntas por subíndice');
        
        // Cargar progreso guardado
        this.loadProgress();
        
        // Inicializar navegación si hay preguntas
        if (document.querySelector('.pregunta-container')) {
            this.goToQuestion(1);
        }
    },
    
    loadProgress: function() {
        const progress = JSON.parse(localStorage.getItem('cyberedumx_progress')) || {};
        this.updateStats(progress);
        
        // Marcar preguntas ya resueltas
        if (progress.detalles) {
            Object.keys(progress.detalles).forEach(questionId => {
                const preguntaElement = document.querySelector(`[data-question-id="${questionId}"]`);
                if (preguntaElement) {
                    const indicador = preguntaElement.closest('.pregunta-container').querySelector('.pregunta-numero');
                    if (indicador) {
                        indicador.innerHTML += ' <i class="fas fa-check"></i>';
                    }
                }
            });
        }
    }
};

// Inicializar al cargar
document.addEventListener('DOMContentLoaded', () => QuestionSystem.init());

// Hacer disponible globalmente
window.QuestionSystem = QuestionSystem;