import Swal from "sweetalert2";

// Função para mostrar uma notificação
export function showNotification(title, text, icon) {
    Swal.fire({
        title: title,
        text: text,
        icon: icon,
        confirmButtonText: "OK",
    });
}
