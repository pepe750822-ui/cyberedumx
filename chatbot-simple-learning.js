// chatbot-simple-learning.js - SISTEMA DE APRENDIZAJE SIN API
class SimpleLearningChatbot {
    constructor() {
        this.storageKey = 'chatbot_memory_v3';
        this.feedbackKey = 'chatbot_feedback_v3';
        this.metricsKey = 'chatbot_metrics_v3';
        
        this.memory = this.loadMemory();
        this.setupAutoSave();
        this.initializeDailyLearning();
    }

    loadMemory() {
        const defaultMemory = {
            conversations: [],
            patterns: {
                'sucesiones': ['sucesion', 'secuencia', 'patron', 'numero sigue', 'serie'],
                'precio': ['precio', 'costo', 'cuanto', 'valor', 'tarifa'],
                'curso': ['curso', 'udemy', 'clase', 'leccion', 'aprender'],
                'ecoems': ['ecoems', 'examen', 'prueba', 'admission'],
                'whatsapp': ['whatsapp', 'contacto', 'escribir', 'hablar']
            },
            responses: {
                'sucesiones': [
                    "Tenemos un curso especializado en sucesiones con guías 2021-2025 resueltas por $40 MXN. ¿Te interesa?",
                    "Las sucesiones son patrones numéricos. Ofrecemos técnicas avanzadas en nuestro curso. ¿Quieres ver un ejemplo?"
                ],
                'precio': [
                    "Curso de sucesiones: $40 MXN\nCurso completo ECOEMS: $50 MXN\nPaquete 2 en 1: $70 MXN\n¿Cuál te interesa?",
                    "Tenemos ofertas especiales hoy. Curso de sucesiones por solo $40 (normal $399). ¿Te gustaría tu código?"
                ]
            },
            successfulAnswers: {},
            problemQuestions: [],
            stats: {
                totalChats: 0,
                positiveFeedback: 0,
                negativeFeedback: 0,
                conversions: 0,
                lastLearning: new Date().toISOString()
            }
        };

        try {
            const saved = localStorage.getItem(this.storageKey);
            return saved ? JSON.parse(saved) : defaultMemory;
        } catch (e) {
            return defaultMemory;
        }
    }

    saveMemory() {
        try {
            localStorage.setItem(this.storageKey, JSON.stringify(this.memory));
        } catch (e) {
            console.log('Error guardando, pero continuamos...');
        }
    }

    setupAutoSave() {
        // Guardar cada 2 minutos
        setInterval(() => this.saveMemory(), 120000);
        
        // Guardar al cerrar la página
        window.addEventListener('beforeunload', () => this.saveMemory());
    }

    // Método principal para procesar preguntas
    findBestResponse(userMessage) {
        userMessage = userMessage.toLowerCase();
        this.memory.stats.totalChats++;
        
        // 1. Buscar por patrones exactos
        for (const [category, patterns] of Object.entries(this.memory.patterns)) {
            if (patterns.some(pattern => userMessage.includes(pattern))) {
                const response = this.getCategoryResponse(category, userMessage);
                this.recordConversation(userMessage, response, category);
                return response;
            }
        }
        
        // 2. Buscar en respuestas exitosas anteriores
        const similarQuestion = this.findSimilarQuestion(userMessage);
        if (similarQuestion) {
            this.recordConversation(userMessage, similarQuestion.response, 'similar');
            return similarQuestion.response;
        }
        
        // 3. Respuesta por defecto
        const defaultResponse = this.getDefaultResponse(userMessage);
        this.recordConversation(userMessage, defaultResponse, 'default');
        return defaultResponse;
    }

    getCategoryResponse(category, userMessage) {
        const responses = this.memory.responses[category] || [
            "Puedo ayudarte con eso. ¿Podrías ser más específico?",
            "Interesante pregunta. Déjame darte la mejor información al respecto."
        ];
        
        // Seleccionar respuesta basada en efectividad anterior
        if (this.memory.successfulAnswers[category]) {
            const successful = this.memory.successfulAnswers[category]
                .sort((a, b) => b.score - a.score)[0];
            if (successful) return successful.response;
        }
        
        // Respuesta aleatoria de la categoría
        return responses[Math.floor(Math.random() * responses.length)];
    }

    findSimilarQuestion(userMessage) {
        if (this.memory.conversations.length === 0) return null;
        
        const words = userMessage.split(' ').filter(w => w.length > 3);
        if (words.length === 0) return null;
        
        // Buscar conversaciones similares
        const similar = this.memory.conversations.filter(conv => {
            const convWords = conv.message.split(' ').filter(w => w.length > 3);
            const matches = words.filter(w => 
                convWords.some(cw => cw.includes(w) || w.includes(cw))
            );
            return matches.length >= 2;
        });
        
        if (similar.length > 0) {
            // Ordenar por feedback positivo
            const best = similar.sort((a, b) => 
                (b.positiveFeedback || 0) - (a.positiveFeedback || 0)
            )[0];
            
            return {
                response: best.response,
                confidence: 0.7
            };
        }
        
        return null;
    }

    getDefaultResponse(userMessage) {
        const defaultResponses = [
            "Interesante pregunta. ¿Podrías decirme si es sobre cursos, precios o material de estudio?",
            "Voy a ayudarte con eso. Para ser más preciso, ¿podrías reformular tu pregunta?",
            "Estoy aquí para ayudarte. ¿Te refieres a algo específico del ECOEMS o de nuestros cursos?"
        ];
        
        // Si parece ser sobre precios
        if (userMessage.includes('$') || userMessage.includes('peso') || userMessage.includes('dinero')) {
            return "Hablando de precios, tenemos ofertas especiales hoy. ¿Te interesa saber más?";
        }
        
        // Si parece ser una pregunta
        if (userMessage.includes('?') || userMessage.includes('cómo') || userMessage.includes('qué')) {
            return "Buena pregunta. Déjame darte la información más actualizada que tengo.";
        }
        
        return defaultResponses[Math.floor(Math.random() * defaultResponses.length)];
    }

    recordConversation(userMessage, response, category) {
        const conversation = {
            id: Date.now(),
            timestamp: new Date().toISOString(),
            message: userMessage,
            response: response,
            category: category,
            positiveFeedback: 0,
            negativeFeedback: 0
        };
        
        this.memory.conversations.push(conversation);
        
        // Mantener máximo 500 conversaciones
        if (this.memory.conversations.length > 500) {
            this.memory.conversations = this.memory.conversations.slice(-500);
        }
    }

    // Sistema de feedback SIMPLE
    recordFeedback(conversationId, isPositive) {
        const conversation = this.memory.conversations.find(c => c.id === conversationId);
        
        if (conversation) {
            if (isPositive) {
                conversation.positiveFeedback = (conversation.positiveFeedback || 0) + 1;
                this.memory.stats.positiveFeedback++;
                
                // Aprender de este éxito
                this.learnFromSuccess(conversation);
            } else {
                conversation.negativeFeedback = (conversation.negativeFeedback || 0) + 1;
                this.memory.stats.negativeFeedback++;
                
                // Marcar como problema
                this.recordProblem(conversation);
            }
            
            this.saveMemory();
        }
    }

    learnFromSuccess(conversation) {
        const category = conversation.category;
        
        if (!this.memory.successfulAnswers[category]) {
            this.memory.successfulAnswers[category] = [];
        }
        
        // Agregar o actualizar respuesta exitosa
        const existing = this.memory.successfulAnswers[category]
            .find(item => item.response === conversation.response);
        
        if (existing) {
            existing.score += 1;
            existing.lastUsed = new Date().toISOString();
        } else {
            this.memory.successfulAnswers[category].push({
                response: conversation.response,
                score: 1,
                lastUsed: new Date().toISOString(),
                questionPattern: conversation.message.substring(0, 50)
            });
        }
        
        // Mantener solo las 10 mejores por categoría
        if (this.memory.successfulAnswers[category].length > 10) {
            this.memory.successfulAnswers[category] = this.memory.successfulAnswers[category]
                .sort((a, b) => b.score - a.score)
                .slice(0, 10);
        }
    }

    recordProblem(conversation) {
        this.memory.problemQuestions.push({
            question: conversation.message,
            wrongResponse: conversation.response,
            timestamp: new Date().toISOString()
        });
        
        // Mantener máximo 50 problemas
        if (this.memory.problemQuestions.length > 50) {
            this.memory.problemQuestions = this.memory.problemQuestions.slice(-50);
        }
    }

    // Aprendizaje automático simple
    initializeDailyLearning() {
        // Ejecutar "aprendizaje" cada día a medianoche
        const now = new Date();
        const midnight = new Date(now);
        midnight.setHours(24, 0, 0, 0);
        const timeUntilMidnight = midnight - now;
        
        setTimeout(() => {
            this.dailyLearningCycle();
            // Repetir cada 24 horas
            setInterval(() => this.dailyLearningCycle(), 24 * 60 * 60 * 1000);
        }, timeUntilMidnight);
    }

    dailyLearningCycle() {
        console.log('🤖 Chatbot: Ciclo de aprendizaje diario iniciado');
        
        // 1. Limpiar conversaciones antiguas (más de 30 días)
        const thirtyDaysAgo = new Date();
        thirtyDaysAgo.setDate(thirtyDaysAgo.getDate() - 30);
        
        this.memory.conversations = this.memory.conversations.filter(conv => 
            new Date(conv.timestamp) > thirtyDaysAgo
        );
        
        // 2. Optimizar respuestas basadas en feedback
        this.optimizeResponses();
        
        // 3. Aprender nuevos patrones de preguntas frecuentes
        this.learnNewPatterns();
        
        // 4. Actualizar estadísticas
        this.memory.stats.lastLearning = new Date().toISOString();
        
        this.saveMemory();
        console.log('🤖 Chatbot: Ciclo de aprendizaje completado');
    }

    optimizeResponses() {
        // Ordenar respuestas por efectividad
        Object.keys(this.memory.responses).forEach(category => {
            if (this.memory.successfulAnswers[category]) {
                // Mover respuestas exitosas al principio
                const successful = this.memory.successfulAnswers[category]
                    .sort((a, b) => b.score - a.score)
                    .slice(0, 3)
                    .map(item => item.response);
                
                // Combinar con respuestas base
                this.memory.responses[category] = [
                    ...new Set([...successful, ...this.memory.responses[category]])
                ].slice(0, 5); // Máximo 5 respuestas por categoría
            }
        });
    }

    learnNewPatterns() {
        // Aprender de las 10 preguntas más frecuentes
        const questionCounts = {};
        
        this.memory.conversations.forEach(conv => {
            questionCounts[conv.message] = (questionCounts[conv.message] || 0) + 1;
        });
        
        const frequentQuestions = Object.entries(questionCounts)
            .sort((a, b) => b[1] - a[1])
            .slice(0, 10);
        
        // Intentar categorizar preguntas frecuentes no categorizadas
        frequentQuestions.forEach(([question, count]) => {
            if (count >= 3) {
                this.categorizeQuestion(question);
            }
        });
    }

    categorizeQuestion(question) {
        const words = question.toLowerCase().split(' ');
        
        // Palabras clave por categoría
        const categoryKeywords = {
            'sucesiones': ['sucesion', 'patron', 'numero', 'sigue', 'secuencia'],
            'precio': ['precio', 'costo', 'cuanto', 'valor', 'peso'],
            'curso': ['curso', 'udemy', 'clase', 'aprender', 'estudiar'],
            'whatsapp': ['whatsapp', 'contacto', 'escribir', 'hablar', 'mensaje']
        };
        
        for (const [category, keywords] of Object.entries(categoryKeywords)) {
            const matches = words.filter(word => keywords.includes(word));
            if (matches.length >= 2) {
                // Agregar nuevas palabras al patrón
                words.forEach(word => {
                    if (word.length > 3 && !this.memory.patterns[category].includes(word)) {
                        this.memory.patterns[category].push(word);
                    }
                });
                break;
            }
        }
    }

    // Métodos para obtener estadísticas
    getStats() {
        const totalFeedback = this.memory.stats.positiveFeedback + this.memory.stats.negativeFeedback;
        const satisfaction = totalFeedback > 0 ? 
            (this.memory.stats.positiveFeedback / totalFeedback) * 100 : 0;
        
        const conversionRate = this.memory.stats.totalChats > 0 ?
            (this.memory.stats.conversions / this.memory.stats.totalChats) * 100 : 0;
        
        // Preguntas más frecuentes
        const questionCounts = {};
        this.memory.conversations.forEach(conv => {
            questionCounts[conv.message] = (questionCounts[conv.message] || 0) + 1;
        });
        
        const commonQuestions = Object.entries(questionCounts)
            .sort((a, b) => b[1] - a[1])
            .slice(0, 5);
        
        return {
            totalConversations: this.memory.conversations.length,
            userSatisfaction: satisfaction.toFixed(1),
            conversionRate: conversionRate.toFixed(1),
            commonQuestions: commonQuestions,
            categories: Object.keys(this.memory.patterns).length,
            problemsCount: this.memory.problemQuestions.length,
            lastLearning: this.memory.stats.lastLearning
        };
    }

    // Método para entrenar manualmente
    trainManual(question, correctResponse, category = null) {
        if (!category) {
            // Intentar detectar categoría
            for (const [cat, patterns] of Object.entries(this.memory.patterns)) {
                if (patterns.some(pattern => question.includes(pattern))) {
                    category = cat;
                    break;
                }
            }
        }
        
        if (!category) category = 'general';
        
        // Agregar como respuesta exitosa
        this.learnFromSuccess({
            message: question,
            response: correctResponse,
            category: category
        });
        
        // Agregar a respuestas de la categoría
        if (!this.memory.responses[category]) {
            this.memory.responses[category] = [];
        }
        
        if (!this.memory.responses[category].includes(correctResponse)) {
            this.memory.responses[category].unshift(correctResponse);
        }
        
        this.saveMemory();
        return true;
    }

    // Método para exportar datos
    exportData() {
        return {
            memory: this.memory,
            stats: this.getStats(),
            exportDate: new Date().toISOString()
        };
    }

    // Método para importar datos
    importData(data) {
        if (data.memory) {
            this.memory = data.memory;
            this.saveMemory();
            return true;
        }
        return false;
    }
}

// Hacer disponible globalmente
window.SimpleLearningChatbot = SimpleLearningChatbot;