let userChoices = [];
let currentStep = 0;

const steps = [
    {
        question: "Poderia nos informar qual seria a sua categoria?",
        options: [
            { text: "Mobilidade", value: "Mobilidade" },
            { text: "Truck", value: "Truck" },
        ],
    },
    {
        question: "Você é uma empresa, usuário ou motorista?",
        options: [
            { text: "Sou empresa", value: "Mobilidade_Empresa" },
            { text: "Sou usuário", value: "Mobilidade_Usuario" },
            { text: "Sou motorista", value: "Mobilidade_Motorista" },
        ],
        parent: "Mobilidade",
    },
    {
        question: "Você é uma empresa, transportadora ou operador logístico?",
        options: [
            { text: "Embarcador", value: "Truck_Embarcador" },
            { text: "Transportadora", value: "Truck_Transportadora" },
            { text: "Operador logístico", value: "Truck_Operador_Logistico" },
        ],
        parent: "Truck",
    },
    {
        question: "Quer se cadastrar ou já tem um cadastro?",
        options: [
            { text: "Cadastrar", value: "Cadastrar" },
            { text: "Sou cadastrado", value: "Sou_cadastrado" },
        ],
        parent: "Mobilidade_Empresa",
    },
    {
        question: "Quer se cadastrar ou já tem um cadastro?",
        options: [
            { text: "Cadastrar", value: "Cadastrar" },
            { text: "Sou cadastrado", value: "Sou_cadastrado" },
        ],
        parent: "Mobilidade_Usuario",
    },
    {
        question: "Quer se cadastrar ou já tem um cadastro?",
        options: [
            { text: "Cadastrar", value: "Cadastrar" },
            { text: "Sou cadastrado", value: "Sou_cadastrado" },
        ],
        parent: "Mobilidade_Motorista",
    },
    {
        question: "Quer se cadastrar ou já tem um cadastro?",
        options: [
            { text: "Cadastrar", value: "Cadastrar" },
            { text: "Sou cadastrado", value: "Sou_cadastrado" },
        ],
        parent: "Truck_Embarcador",
    },
    {
        question: "Quer se cadastrar ou já tem um cadastro?",
        options: [
            { text: "Cadastrar", value: "Cadastrar" },
            { text: "Sou cadastrado", value: "Sou_cadastrado" },
        ],
        parent: "Truck_Transportadora",
    },
    {
        question: "Quer se cadastrar ou já tem um cadastro?",
        options: [
            { text: "Cadastrar", value: "Cadastrar" },
            { text: "Sou cadastrado", value: "Sou_cadastrado" },
        ],
        parent: "Truck_Operador_Logistico",
    },
    {
        question: "Você quer fazer login ou precisa de atendimento?",
        options: [
            { text: "Login", value: "Login" },
            { text: "Atendimento", value: "Atendimento" },
        ],
        parent: "Sou_cadastrado",
    },
];

function sendMessage(choice) {
    userChoices.push(choice);
    currentStep++;
    const nextStep = steps.find((step) => step.parent === choice);

    if (nextStep) {
        renderStep(nextStep);
    } else {
        if (choice === "Cadastrar") {
            renderForm();
        } else if (choice === "Login" || choice === "Atendimento") {
            handleFinalChoice(choice);
        }
    }
}

function handleFinalChoice(choice) {
    const lastChoices = userChoices.slice(-3).join("_");

    const urlMap = {
        Mobilidade_Empresa_Sou_cadastrado_Login:
            "https://app.tkx.log.br/site/login",
        Mobilidade_Usuario_Sou_cadastrado_Login:
            "https://app.tkx.log.br/site/login",
        Mobilidade_Motorista_Sou_cadastrado_Login:
            "https://play.google.com/store/apps/developer?id=Via+Integra+Tecnologia",
        Truck_Embarcador_Sou_cadastrado_Login:
            "https://tkx.truck.log.br/socket/public/expedition/admin/app/tkx/login",
        Truck_Transportadora_Sou_cadastrado_Login:
            "https://tkx.truck.log.br/socket/public/expedition/admin/app/tkx/login",
    };

    const defaultUrl = "https://wa.me/5535999746660";

    if (choice === "Login" && urlMap[lastChoices]) {
        window.location.href = urlMap[lastChoices];
    } else if (choice === "Atendimento") {
        window.location.href = defaultUrl;
    } else {
        window.location.href = defaultUrl;
    }
}

function goBack() {
    if (currentStep > 0) {
        userChoices.pop();
        currentStep--;
        const previousChoice = userChoices[userChoices.length - 1];
        if (previousChoice) {
            const previousStep = steps.find((step) =>
                step.options.some((option) => option.value === previousChoice)
            );
            if (previousStep) {
                renderStep(previousStep);
            }
        } else {
            renderStep(steps[0]);
        }
    }
}

function renderStep(step) {
    const chatbotMessages = document.getElementById("chatbot-messages");
    chatbotMessages.innerHTML = `
        <div class="chatbot-content">
            ${
                currentStep > 0
                    ? `
            <button class="rounded-circle p-2 cursor-pointer border-0" onclick="goBack()">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-move-left"><path d="M6 8L2 12L6 16"/><path d="M2 12H22"/></svg>
            </button>
            `
                    : ""
            }
            <p class="justify-content-center align-items-center d-flex text-center mt-5">${
                step.question
            }</p>
            <div class="d-flex flex-column gap-3">
                ${step.options
                    .map(
                        (option) => `
                    <button class="btn border company-btn rounded-full" onclick="sendMessage('${option.value}')">
                        ${option.text}
                    </button>
                `
                    )
                    .join("")}
            </div>
        </div>
    `;
}

function renderForm() {
    const chatbotMessages = document.getElementById("chatbot-messages");
    chatbotMessages.innerHTML = `
        <div class="chatbot-content">
           ${
               currentStep > 0
                   ? `
            <button class="rounded-circle p-2 cursor-pointer border-0" onclick="goBack()">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-move-left"><path d="M6 8L2 12L6 16"/><path d="M2 12H22"/></svg>
            </button>
            `
                   : ""
           }
            <p class="justify-content-center d-flex text-center mt-5">Por favor, preencha o formulário abaixo:</p>
            <form id="registrationForm" onsubmit="submitForm(event)">
                <div class="mb-3">
                    <input type="text" class="form-control input-field" placeholder="Seu nome" id="name" required>
                </div>
                <div class="mb-3">
                    <input type="email" class="form-control input-field"  placeholder="Seu email"   id="email" required>
                </div>
                <div class="mb-3">
                    <input type="tel" class="form-control input-field"  placeholder="Seu telefone" id="phone" required>
                </div>
                <button type="submit" class="btn btn-secondary w-100">Enviar</button>
            </form>
        </div>
    `;

    const phoneInput = document.getElementById("phone");
    phoneInput.addEventListener("input", applyPhoneMask);
}

function applyPhoneMask(event) {
    const input = event.target;
    let value = input.value.replace(/\D/g, "");
    if (value.length > 11) value = value.slice(0, 11);

    const formattedValue = value.replace(
        /^(\d{2})(\d{5})(\d{4})$/,
        "($1) $2-$3"
    );
    input.value = formattedValue;
}

function submitForm(event) {
    event.preventDefault();
    const form = document.getElementById("registrationForm");
    const formData = new FormData(form);
    const data = {
        name: formData.get("name"),
        email: formData.get("email"),
        phone: formData.get("phone"),
        choices: userChoices,
    };

    fetch("/api/save-choices", {
        method: "POST",
        headers: {
            "Content-Type": "application/json",
            "X-CSRF-TOKEN": document
                .querySelector('meta[name="csrf-token"]')
                .getAttribute("content"),
        },
        body: JSON.stringify(data),
    })
        .then((response) => response.json())
        .then(() => {
            showModal();
        })
        .catch((error) => {
            console.error("Error:", error);
        });
}

function toggleChatbot() {
    var chatbotWindow = document.getElementById("chatbot-window");
    if (chatbotWindow.classList.contains("show")) {
        chatbotWindow.classList.remove("show");
    } else {
        setTimeout(() => {
            chatbotWindow.classList.add("show");
            renderStep(steps[0]);
        }, 180);
    }
}

function showModal() {
    document.getElementById("successModal").style.display = "flex";
    const confirm = document.getElementById("confirmButton");
    confirm.addEventListener("click", function () {
        closeModal();
        toggleChatbot();
    });
}

function closeModal() {
    document.getElementById("successModal").style.display = "none";
}

document.getElementById("supportBtn").addEventListener("click", toggleChatbot);
