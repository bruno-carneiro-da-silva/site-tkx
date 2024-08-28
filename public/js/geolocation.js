function getUserLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition, showError);
    } else {
        alert("Geolocalização não é suportada por este navegador.");
    }
}

function showPosition(position) {
    const latitude = position.coords.latitude;
    const longitude = position.coords.longitude;
    const locationInput = document.getElementById("location-input");

    // Buscar a chave de API do Google Maps
    fetch("/api/google-maps-key")
        .then((response) => response.json())
        .then((data) => {
            const apiKey = data.api_key;
            const geocodeUrl = `https://maps.googleapis.com/maps/api/geocode/json?latlng=${latitude},${longitude}&key=${apiKey}`;

            fetch(geocodeUrl)
                .then((response) => response.json())
                .then((data) => {
                    if (data.status === "OK") {
                        const address = data.results[0].formatted_address;
                        locationInput.value = address;
                    } else {
                        alert("Não foi possível obter o endereço.");
                    }
                })
                .catch((error) => {
                    console.error("Erro ao obter o endereço:", error);
                    alert("Erro ao obter o endereço.");
                });
        })
        .catch((error) => {
            console.error("Erro ao obter a chave de API:", error);
            alert("Erro ao obter a chave de API.");
        });
}

function showError(error) {
    switch (error.code) {
        case error.PERMISSION_DENIED:
            alert("Usuário negou a solicitação de Geolocalização.");
            break;
        case error.POSITION_UNAVAILABLE:
            alert("Informação de localização não está disponível.");
            break;
        case error.TIMEOUT:
            alert("A solicitação para obter a localização do usuário expirou.");
            break;
        case error.UNKNOWN_ERROR:
            alert("Um erro desconhecido ocorreu.");
            break;
    }
}
