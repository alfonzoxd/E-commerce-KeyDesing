@extends('layouts.app')

@section('title', 'KeyDesign - Inicio')

@section('content')
    @include('sections.video-banner')
    @include('sections.about-us')
    @include('sections.segmentation')
    @include('sections.special-keyboards')
    @include('sections.customer-reviews')
    @include('sections.personalized-advice')
    @include('partials.footer')
@endsection

<!-- Botón flotante del chatbot -->
<div id="chatbot-button" class="chatbot-button">
    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M20 2H4C2.9 2 2 2.9 2 4V22L6 18H20C21.1 18 22 17.1 22 16V4C22 2.9 21.1 2 20 2ZM20 16H5.17L4 17.17V4H20V16ZM7 9H17V11H7V9ZM7 12H15V14H7V12Z" fill="currentColor"/>
    </svg>
    <span class="chatbot-tooltip">¿Necesitas ayuda?</span>
</div>

<!-- Ventana del chatbot -->
<div id="chatbot-window" class="chatbot-window">
    <div class="chatbot-header">
        <div class="chatbot-title">
            <h4>KeyDesign Assistant</h4>
            <span class="chatbot-status">En línea</span>
        </div>
        <button id="chatbot-close" class="chatbot-close">×</button>
    </div>

    <div class="chatbot-messages" id="chatbot-messages">
        <div class="message bot-message">
            <div class="message-avatar">🤖</div>
            <div class="message-content">
                <p>¡Hola! Soy el asistente de KeyDesign. ¿En qué puedo ayudarte hoy?</p>
                <div class="quick-buttons">
                    <button class="quick-btn" data-message="¿Qué tipos de teclados tienen disponibles?">Tipos de teclados</button>
                    <button class="quick-btn" data-message="¿Cuáles son los precios?">Precios</button>
                    <button class="quick-btn" data-message="¿Hacen envíos a todo el país?">Envíos</button>
                </div>
            </div>
        </div>
    </div>

    <div class="chatbot-input">
        <input type="text" id="chatbot-message-input" placeholder="Escribe tu mensaje..." maxlength="500">
        <button id="chatbot-send" type="button">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M2 21L23 12L2 3V10L17 12L2 14V21Z" fill="currentColor"/>
            </svg>
        </button>
    </div>
</div>

<style>
.chatbot-button {
    position: fixed;
    bottom: 20px;
    right: 20px;
    width: 60px;
    height: 60px;
    background: linear-gradient(135deg, #dc2626 0%, #7f1d1d 100%);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    box-shadow: 0 4px 12px rgba(0,0,0,0.15);
    transition: all 0.3s ease;
    z-index: 1000;
    color: white;
}

.chatbot-button:hover {
    transform: scale(1.1);
    box-shadow: 0 6px 20px rgba(0,0,0,0.2);
}

.chatbot-tooltip {
    position: absolute;
    right: 70px;
    top: 50%;
    transform: translateY(-50%);
    background: #1f1f1f;
    color: #dc2626;
    padding: 8px 12px;
    border-radius: 6px;
    font-size: 14px;
    white-space: nowrap;
    opacity: 0;
    visibility: hidden;
    transition: all 0.3s ease;
    border: 1px solid #dc2626;
}

.chatbot-button:hover .chatbot-tooltip {
    opacity: 1;
    visibility: visible;
}

.chatbot-tooltip::after {
    content: '';
    position: absolute;
    left: 100%;
    top: 50%;
    transform: translateY(-50%);
    border: 6px solid transparent;
    border-left-color: #1f1f1f;
}

.chatbot-window {
    position: fixed;
    bottom: 20px;
    right: 20px;
    width: 350px;
    height: 500px;
    background: white;
    border-radius: 12px;
    box-shadow: 0 8px 32px rgba(0,0,0,0.1);
    display: none;
    flex-direction: column;
    z-index: 1001;
    overflow: hidden;
}

.chatbot-window.active {
    display: flex;
    animation: slideUp 0.3s ease-out;
}

@keyframes slideUp {
    from {
        transform: translateY(20px);
        opacity: 0;
    }
    to {
        transform: translateY(0);
        opacity: 1;
    }
}

.chatbot-header {
    background: linear-gradient(135deg, #dc2626 0%, #7f1d1d 100%);
    color: white;
    padding: 16px;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.chatbot-title h4 {
    margin: 0;
    font-size: 16px;
    font-weight: 600;
}

.chatbot-status {
    font-size: 12px;
    opacity: 0.9;
}

.chatbot-close {
    background: none;
    border: none;
    color: white;
    font-size: 24px;
    cursor: pointer;
    padding: 0;
    width: 30px;
    height: 30px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
    transition: background 0.2s ease;
}

.chatbot-close:hover {
    background: rgba(255,255,255,0.1);
}

.chatbot-messages {
    flex: 1;
    padding: 16px;
    overflow-y: auto;
    background: #1a1a1a;
}

.message {
    display: flex;
    margin-bottom: 16px;
    animation: fadeIn 0.3s ease-out;
}

@keyframes fadeIn {
    from {
        opacity: 0;
        transform: translateY(10px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.message-avatar {
    width: 32px;
    height: 32px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-right: 12px;
    font-size: 16px;
    flex-shrink: 0;
}

.bot-message .message-avatar {
    background: linear-gradient(135deg, #dc2626 0%, #7f1d1d 100%);
}

.user-message {
    flex-direction: row-reverse;
}

.user-message .message-avatar {
    background: #dc2626;
    margin-left: 12px;
    margin-right: 0;
}

.user-message .message-avatar::after {
    content: '👤';
    font-size: 14px;
}

.message-content {
    max-width: 70%;
    background: #2d2d2d;
    color: white;
    padding: 12px;
    border-radius: 12px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.3);
}

.user-message .message-content {
    background: #dc2626;
    color: white;
}

.message-content p {
    margin: 0;
    font-size: 14px;
    line-height: 1.4;
}

.quick-buttons {
    margin-top: 12px;
    display: flex;
    flex-wrap: wrap;
    gap: 8px;
}

.quick-btn {
    background: #1f1f1f;
    border: 1px solid #dc2626;
    color: #dc2626;
    padding: 6px 12px;
    border-radius: 16px;
    font-size: 12px;
    cursor: pointer;
    transition: all 0.2s ease;
}

.quick-btn:hover {
    background: #dc2626;
    color: white;
    border-color: #dc2626;
}

.chatbot-input {
    padding: 16px;
    background: #2d2d2d;
    border-top: 1px solid #dc2626;
    display: flex;
    gap: 8px;
}

.chatbot-input input {
    flex: 1;
    padding: 12px;
    border: 1px solid #dc2626;
    background: #1a1a1a;
    color: white;
    border-radius: 24px;
    font-size: 14px;
    outline: none;
    transition: border-color 0.2s ease;
}

.chatbot-input input::placeholder {
    color: #888;
}

.chatbot-input input:focus {
    border-color: #dc2626;
}

.chatbot-input button {
    width: 44px;
    height: 44px;
    background: linear-gradient(135deg, #dc2626 0%, #7f1d1d 100%);
    border: none;
    border-radius: 50%;
    color: white;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: transform 0.2s ease;
}

.chatbot-input button:hover {
    transform: scale(1.05);
}

/* Responsive */
@media (max-width: 768px) {
    .chatbot-window {
        bottom: 0;
        right: 0;
        left: 0;
        width: 100%;
        height: 100vh;
        border-radius: 0;
    }

    .chatbot-button {
        bottom: 20px;
        right: 20px;
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const chatbotButton = document.getElementById('chatbot-button');
    const chatbotWindow = document.getElementById('chatbot-window');
    const chatbotClose = document.getElementById('chatbot-close');
    const chatbotMessages = document.getElementById('chatbot-messages');
    const messageInput = document.getElementById('chatbot-message-input');
    const sendButton = document.getElementById('chatbot-send');

    const botResponses = {
        'tipos de teclados': 'Tenemos una amplia variedad: Teclados mecánicos, membrana, gaming, inalámbricos, compactos y de oficina. ¿Te interesa algún tipo en particular?',
        'precios': 'Nuestros precios van desde $50 para teclados básicos hasta $300 para modelos gaming premium. ¿Tienes un presupuesto en mente?',
        'envíos': 'Sí, hacemos envíos a todo el país. Envío gratuito en compras mayores a $100. El tiempo de entrega es de 2-5 días hábiles.',
        'garantía': 'Todos nuestros teclados tienen garantía de 1 año. Los modelos premium incluyen 2 años de garantía.',
        'personalización': 'Ofrecemos personalización de teclas, iluminación RGB y grabado láser. ¡Haz tu teclado único!',
        'gaming': 'Nuestros teclados gaming incluyen switches Cherry MX, iluminación RGB, teclas programables y modo gaming.',
        'mecánicos': 'Los teclados mecánicos ofrecen mejor respuesta tactil, durabilidad y precisión. Ideales para gaming y trabajo intensivo.',
        'inalámbricos': 'Tenemos teclados inalámbricos con conectividad Bluetooth y receptor USB. Hasta 30 días de batería.',
        'ayuda': 'Puedo ayudarte con información sobre productos, precios, envíos, garantías y recomendaciones. ¿Qué necesitas saber?'
    };

    chatbotButton.addEventListener('click', function() {
        chatbotWindow.classList.add('active');
        chatbotButton.style.display = 'none';
        messageInput.focus();
    });

    chatbotClose.addEventListener('click', function() {
        chatbotWindow.classList.remove('active');
        chatbotButton.style.display = 'flex';
    });

    function sendMessage() {
        const message = messageInput.value.trim();
        if (message) {
            addMessage(message, 'user');
            messageInput.value = '';

            setTimeout(() => {
                const botResponse = getBotResponse(message);
                addMessage(botResponse, 'bot');
            }, 1000);
        }
    }

    function addMessage(text, sender) {
        const messageDiv = document.createElement('div');
        messageDiv.className = `message ${sender}-message`;

        const avatar = document.createElement('div');
        avatar.className = 'message-avatar';
        if (sender === 'bot') {
            avatar.textContent = '🤖';
        }

        const content = document.createElement('div');
        content.className = 'message-content';
        content.innerHTML = `<p>${text}</p>`;

        messageDiv.appendChild(avatar);
        messageDiv.appendChild(content);
        chatbotMessages.appendChild(messageDiv);

        chatbotMessages.scrollTop = chatbotMessages.scrollHeight;
    }

    function getBotResponse(message) {
        const lowerMessage = message.toLowerCase();

        for (const [key, response] of Object.entries(botResponses)) {
            if (lowerMessage.includes(key)) {
                return response;
            }
        }

        return 'Gracias por tu mensaje. Un representante se pondrá en contacto contigo pronto. ¿Hay algo más en lo que pueda ayudarte?';
    }

    sendButton.addEventListener('click', sendMessage);

    messageInput.addEventListener('keypress', function(e) {
        if (e.key === 'Enter') {
            sendMessage();
        }
    });

    document.addEventListener('click', function(e) {
        if (e.target.classList.contains('quick-btn')) {
            const message = e.target.getAttribute('data-message');
            addMessage(message, 'user');

            setTimeout(() => {
                const botResponse = getBotResponse(message);
                addMessage(botResponse, 'bot');
            }, 1000);
        }
    });
});
</script>
