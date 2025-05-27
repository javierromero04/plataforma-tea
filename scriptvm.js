// --- MENÚ HAMBURGUESA ---
function toggleMenuSimulador() {
    const menu = document.getElementById('opcionesSimulador');
    menu.classList.toggle('oculto');
}

// Detectar si estamos dentro de un iframe y ocultar el menú simulador si es necesario
if (window.self !== window.top) {
    // Estamos dentro de un iframe
    const menuSimulador = document.getElementById('toggle-view-button');
    if (menuSimulador) {
        menuSimulador.style.display = 'none'; // Oculta el menú que puede incluir el botón
    }
}

