// script.js
document.addEventListener('DOMContentLoaded', function() {
    const phoneInput = document.getElementById('phone');
    const form = document.getElementById('phone-form');

    function formatPhoneNumber(value) {
        // Remove caracteres não numéricos
        value = value.replace(/\D/g, '');
        
        // Aplica a máscara
        if (value.length > 11) {
            value = value.slice(0, 11);
        }

        let formattedValue = '';
        if (value.length > 6) {
            formattedValue = `(${value.slice(0, 2)}) ${value.slice(2, 7)}-${value.slice(7)}`;
        } else if (value.length > 2) {
            formattedValue = `(${value.slice(0, 2)}) ${value.slice(2)}`;
        } else {
            formattedValue = `(${value}`;
        }

        return formattedValue;
    }

    phoneInput.addEventListener('input', function(e) {
        e.target.value = formatPhoneNumber(e.target.value);
    });

    form.addEventListener('submit', function(e) {
        const phoneValue = phoneInput.value.replace(/\D/g, '');

        // Verifica se a quantidade de dígitos é 10
        if (phoneValue.length !== 10) {
            e.preventDefault(); // Evita o envio do formulário
            alert('Por favor, preencha o telefone no formato correto: (xx) xxxxx-xxxx.');
        }
    });
});

