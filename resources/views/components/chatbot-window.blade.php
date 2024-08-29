<div id="chatbot-window" class="chat-container position-fixed">
    <div class="chatbot-title">
        Atendimento TKX
        <button onclick="toggleChatbot()" class="close-button">&times;</button>
    </div>
    <div id="chatbot-messages" style="padding: 10px; height: 300px; overflow-y: auto;">
        <div class="p-4 mt-5" style="background-color: #f1f1f1; border-radius: 8px;">
            <p class="justify-content-center d-flex text-center">
                Poderia nos informar qual seria a sua categoria?
            </p>
            <div class="d-flex flex-column">
                <button class="btn company-btn border mb-3 rounded-full" name="company" onclick="sendMessage('Categoria 1')">
                    Empresa
                </button>
                <button class="btn driver border rounded-full" name="driver" onclick="sendMessage('Categoria 2')">
                    Caminhoneiro(a)
                </button>
            </div>
        </div>
    </div>
</div>
