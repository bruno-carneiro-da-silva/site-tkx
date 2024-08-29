import { showNotification } from "./notifications";

document.addEventListener("DOMContentLoaded", function () {
    const locationInput = document.getElementById("location-input");
    const destinationInput = document.getElementById("destination-input");

    let debounceTimeout;

    function debounce(func, delay) {
        return function () {
            const context = this;
            const args = arguments;
            clearTimeout(debounceTimeout);
            debounceTimeout = setTimeout(
                () => func.apply(context, args),
                delay
            );
        };
    }

    function initializeAutocomplete(input) {
        const autocomplete = new google.maps.places.Autocomplete(input);
        autocomplete.addListener("place_changed", function () {
            const place = autocomplete.getPlace();
            if (!place.geometry) {
                showNotification(
                    "Erro",
                    "Nenhuma informação de localização disponível para o local inserido.",
                    "error"
                );
                return;
            }

            showNotification(
                "Sucesso",
                "Local selecionado: " + place.geometry.location.toString(),
                "success"
            );
        });
    }

    locationInput.addEventListener(
        "input",
        debounce(function () {
            initializeAutocomplete(locationInput);
        }, 2000)
    );

    destinationInput.addEventListener(
        "input",
        debounce(function () {
            initializeAutocomplete(destinationInput);
        }, 2000)
    );
});
