document.getElementById("supportBtn").addEventListener("click", function () {
    var chatbotWindow = document.getElementById("chatbot-window");
    if (
        chatbotWindow.style.display === "none" ||
        chatbotWindow.style.display === ""
    ) {
        chatbotWindow.style.display = "block";
    } else {
        chatbotWindow.style.display = "none";
    }
});
