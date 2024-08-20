function definirFoco() {
    document.getElementById('codigobarra').focus();
}

// Adiciona um evento que chama a função definirFoco quando a página é carregada
window.onload = definirFoco;