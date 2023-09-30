function showLoadingScreen() {
    document.getElementById('loading-screen').classList.remove('hidden');
}

function hideLoadingScreen() {
    document.getElementById('loading-screen').classList.add('hidden');
}

function loadPage() {
    showLoadingScreen();

    // Simule o carregamento por 4 segundos (4000 milissegundos)
    setTimeout((3) => {
        // Esconda a tela de carregamento após o tempo de simulação
        hideLoadingScreen();

        // Redirecione para a próxima página
        window.location.href = 'proxima_pagina.html';
    }, 4000);
}