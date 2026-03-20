// chatbot-enhanced-simple.js - CHATBOT MEJORADO SIN COMPLEJIDAD
class EnhancedSimpleChatbot {
    constructor() {
        this.learningSystem = new SimpleLearningChatbot();
        this.currentConversationId = null;
        this.setupChatbot();
    }

    setupChatbot() {
        // Esperar a que el DOM cargue
        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', () => this.initialize());
        } else {
            this.initialize();
        }
    }

    initialize() {
        this.findChatElements();
        this.addFeedbackButtons();
        this.setupEventListeners();
        this.showWelcomeMessage();
        this.setupImprovementAlerts();
    }

    findChatElements() {
        // Buscar elementos del chat (ajusta estos selectores según tu HTML)
        this.chatMessages = document.getElementById('chat-messages') || 
                            document.querySelector('.chat-messages') ||
                            this.createChatContainer();
        
        this.chatInput = document.getElementById('chat-input') ||
                         document.querySelector('.chat-input') ||
                         document.querySelector('input[type="text"]');
        
        this.sendBtn = document.getElementById('send-btn') ||
                       document.querySelector('.send-btn') ||
                       document.querySelector('button');
    }

    createChatContainer() {
        // Crear contenedor si no existe
        const container = document.createElement('div');
        container.id = 'chat-messages-simple';
        container.style.cssText = `
            max-height: 300px;
            overflow-y: auto;
            padding: 10px;
            background: rgba(0,0,0,0.1);
            border-radius: 10px;
            margin-bottom: 10px;
        `;
        
        // Buscar donde insertarlo
        const chatWindow = document.querySelector('.anime-chat-window') ||
                          document.getElementById('chatbot-window');
        
        if (chatWindow) {
            chatWindow.insertBefore(container, chatWindow.querySelector('.chat-input-area'));
        }
        
        return container;
    }

    addFeedbackButtons() {
        // Observar nuevos mensajes del bot
        const observer = new MutationObserver((mutations) => {
            mutations.forEach((mutation) => {
                mutation.addedNodes.forEach((node) => {
                    if (node.classList && 
                        (node.classList.contains('bot-message') || 
                         node.classList.contains('message') && 
                         !node.classList.contains('user-message'))) {
                        
                        setTimeout(() => this.addFeedbackToMessage(node), 100);
                    }
                });
            });
        });

        if (this.chatMessages) {
            observer.observe(this.chatMessages, { childList: true });
        }
    }

    addFeedbackToMessage(messageElement) {
        // Verificar si ya tiene botones de feedback
        if (messageElement.querySelector('.feedback-buttons')) return;
        
        const feedbackDiv = document.createElement('div');
        feedbackDiv.className = 'feedback-buttons';
        feedbackDiv.style.cssText = `
            display: flex;
            gap: 5px;
            margin-top: 8px;
            justify-content: flex-end;
        `;
        
        const helpfulBtn = this.createFeedbackButton('👍', 'positive', 'Fue útil');
        const notHelpfulBtn = this.createFeedbackButton('👎', 'negative', 'No fue útil');
        
        feedbackDiv.appendChild(helpfulBtn);
        feedbackDiv.appendChild(notHelpfulBtn);
        messageElement.appendChild(feedbackDiv);
        
        // Guardar referencia a la conversación
        if (this.currentConversationId) {
            messageElement.dataset.conversationId = this.currentConversationId;
        }
    }

    createFeedbackButton(emoji, type, tooltip) {
        const button = document.createElement('button');
        button.innerHTML = emoji;
        button.title = tooltip;
        button.style.cssText = `
            background: ${type === 'positive' ? 'rgba(6, 214, 160, 0.2)' : 'rgba(239, 71, 111, 0.2)'};
            border: 1px solid ${type === 'positive' ? '#06D6A0' : '#EF476F'};
            color: ${type === 'positive' ? '#06D6A0' : '#EF476F'};
            border-radius: 50%;
            width: 30px;
            height: 30px;
            cursor: pointer;
            font-size: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.2s;
        `;
        
        button.onmouseenter = () => {
            button.style.transform = 'scale(1.1)';
            button.style.background = type === 'positive' 
                ? 'rgba(6, 214, 160, 0.4)' 
                : 'rgba(239, 71, 111, 0.4)';
        };
        
        button.onmouseleave = () => {
            button.style.transform = 'scale(1)';
            button.style.background = type === 'positive' 
                ? 'rgba(6, 214, 160, 0.2)' 
                : 'rgba(239, 71, 111, 0.2)';
        };
        
        button.onclick = (e) => {
            e.stopPropagation();
            this.handleFeedback(type, button);
        };
        
        return button;
    }

    handleFeedback(type, button) {
        const messageElement = button.closest('.bot-message, .message');
        const conversationId = messageElement?.dataset.conversationId;
        
        if (conversationId) {
            const isPositive = type === 'positive';
            this.learningSystem.recordFeedback(parseInt(conversationId), isPositive);
            
            // Mostrar confirmación
            button.innerHTML = isPositive ? '✅' : '❌';
            button.style.background = isPositive 
                ? 'rgba(6, 214, 160, 0.6)' 
                : 'rgba(239, 71, 111, 0.6)';
            button.style.cursor = 'default';
            button.onclick = null;
            
            // Deshabilitar el otro botón
            const sibling = button.parentElement.querySelector(
                isPositive ? 'button:nth-child(2)' : 'button:nth-child(1)'
            );
            if (sibling) {
                sibling.style.opacity = '0.5';
                sibling.style.cursor = 'default';
                sibling.onclick = null;
            }
            
            // Mostrar mensaje de agradecimiento
            setTimeout(() => {
                const thanks = document.createElement('div');
                thanks.textContent = isPositive ? '¡Gracias!' : 'Mejoraremos...';
                thanks.style.cssText = `
                    color: ${isPositive ? '#06D6A0' : '#EF476F'};
                    font-size: 0.8rem;
                    margin-top: 5px;
                `;
                button.parentElement.appendChild(thanks);
            }, 300);
        }
    }

    setupEventListeners() {
        // Enviar mensaje con Enter
        if (this.chatInput) {
            this.chatInput.addEventListener('keypress', (e) => {
                if (e.key === 'Enter' && !e.shiftKey) {
                    e.preventDefault();
                    this.sendMessage();
                }
            });
        }
        
        // Enviar mensaje con botón
        if (this.sendBtn) {
            this.sendBtn.addEventListener('click', () => this.sendMessage());
        }
        
        // Seguimiento de conversiones
        document.addEventListener('click', (e) => {
            const whatsappBtn = e.target.closest('[href*="whatsapp"], .whatsapp-btn');
            const udemyBtn = e.target.closest('[href*="udemy"], .udemy-btn');
            
            if (whatsappBtn || udemyBtn) {
                this.learningSystem.memory.stats.conversions++;
                this.learningSystem.saveMemory();
            }
        });
    }

    sendMessage() {
        if (!this.chatInput || !this.chatMessages) return;
        
        const userMessage = this.chatInput.value.trim();
        if (!userMessage) return;
        
        // Mostrar mensaje del usuario
        this.addUserMessage(userMessage);
        this.chatInput.value = '';
        
        // Procesar y mostrar respuesta
        setTimeout(() => {
            const botResponse = this.learningSystem.findBestResponse(userMessage);
            this.addBotMessage(botResponse);
            
            // Guardar ID de conversación para feedback
            this.currentConversationId = Date.now();
            
            // Scroll al final
            this.scrollToBottom();
        }, 500);
    }

    addUserMessage(text) {
        const messageDiv = document.createElement('div');
        messageDiv.className = 'user-message-simple';
        messageDiv.style.cssText = `
            background: linear-gradient(45deg, #FF6B8B, #EF476F);
            color: white;
            padding: 10px 15px;
            border-radius: 18px;
            margin-bottom: 10px;
            max-width: 80%;
            align-self: flex-end;
            margin-left: auto;
            word-wrap: break-word;
        `;
        messageDiv.textContent = text;
        
        this.chatMessages.appendChild(messageDiv);
    }

    addBotMessage(text) {
        const messageDiv = document.createElement('div');
        messageDiv.className = 'bot-message-simple';
        messageDiv.style.cssText = `
            background: rgba(255, 255, 255, 0.1);
            color: white;
            padding: 10px 15px;
            border-radius: 18px;
            margin-bottom: 10px;
            max-width: 80%;
            border-left: 3px solid #4ECDC4;
            word-wrap: break-word;
        `;
        
        // Formatear texto (mantener saltos de línea)
        const lines = text.split('\n');
        lines.forEach((line, index) => {
            const p = document.createElement('p');
            p.textContent = line;
            p.style.margin = index === 0 ? '0 0 5px 0' : '5px 0';
            messageDiv.appendChild(p);
        });
        
        this.chatMessages.appendChild(messageDiv);
        this.scrollToBottom();
    }

    scrollToBottom() {
        if (this.chatMessages) {
            this.chatMessages.scrollTop = this.chatMessages.scrollHeight;
        }
    }

    showWelcomeMessage() {
        setTimeout(() => {
            const welcomeMessage = `¡Hola! Soy tu asistente inteligente. 🤖

Cada día aprendo de nuestras conversaciones para ayudarte mejor.

¿En qué puedo asistirte hoy?`;
            
            this.addBotMessage(welcomeMessage);
        }, 1000);
    }

    setupImprovementAlerts() {
        // Mostrar mejora cada 50 conversaciones
        setInterval(() => {
            const stats = this.learningSystem.getStats();
            if (stats.totalConversations % 50 === 0) {
                this.showImprovementMessage();
            }
        }, 60000); // Revisar cada minuto
    }

    showImprovementMessage() {
        const improvementMessages = [
            "💡 **He aprendido de nuestras conversaciones anteriores** y ahora puedo ayudarte aún mejor.",
            "🚀 **Mejora detectada:** He optimizado mis respuestas basándome en el feedback recibido.",
            "🧠 **Nuevo conocimiento adquirido:** He aprendido nuevas formas de responder a tus preguntas."
        ];
        
        const randomMessage = improvementMessages[
            Math.floor(Math.random() * improvementMessages.length)
        ];
        
        this.addBotMessage(randomMessage);
    }

    // Métodos públicos para control
    getStats() {
        return this.learningSystem.getStats();
    }
    
    train(question, response) {
        return this.learningSystem.trainManual(question, response);
    }
    
    exportData() {
        return this.learningSystem.exportData();
    }
    
    importData(data) {
        return this.learningSystem.importData(data);
    }
}

// Inicializar automáticamente
document.addEventListener('DOMContentLoaded', () => {
    setTimeout(() => {
        try {
            window.simpleChatbot = new EnhancedSimpleChatbot();
            console.log('🤖 Chatbot simple mejorado cargado');
        } catch (error) {
            console.error('Error cargando chatbot simple:', error);
        }
    }, 2000);
});