/**********************************************************************************/
document.addEventListener("DOMContentLoaded", function () {
// Obtém todos os checkboxes de pagamento
var checkboxes = document.querySelectorAll('input[type="checkbox"][name="pagamento[]"]');

checkboxes.forEach(function (checkbox) {
    checkbox.addEventListener('change', function () {
        var valorPagamento = document.querySelector('.valor-pagamento');
        // Verifica se o checkbox está marcado
        if (checkbox.checked) {
            // Cria um novo campo de texto
            if(checkbox.value == "din"){
                var inputText = document.createElement('input');
                inputText.setAttribute('type', 'text');
                inputText.setAttribute('id', 'campo-valor');
                inputText.setAttribute('name', 'valores[]');
                inputText.setAttribute('placeholder', 'Insira o valor do dinheiro');
                // Insere o campo de texto dentro da div "valor-pagamento"
                valorPagamento.appendChild(inputText);                
            }
            else if(checkbox.value == "pix"){
                var inputText = document.createElement('input');
                inputText.setAttribute('type', 'text');
                inputText.setAttribute('id', 'campo-valor');
                inputText.setAttribute('name', 'valores[]');
                inputText.setAttribute('placeholder', 'Insira o valor do pix');
                // Insere o campo de texto dentro da div "valor-pagamento"
                valorPagamento.appendChild(inputText);                
            }
            else if(checkbox.value == "deb"){
                var inputText = document.createElement('input');
                inputText.setAttribute('type', 'text');
                inputText.setAttribute('id', 'campo-valor');
                inputText.setAttribute('name', 'valores[]');
                inputText.setAttribute('placeholder', 'Insira o valor do débito');
                // Insere o campo de texto dentro da div "valor-pagamento"
                valorPagamento.appendChild(inputText);                
            }
            else if(checkbox.value == "cre"){
                var inputText = document.createElement('input');
                inputText.setAttribute('type', 'text');
                inputText.setAttribute('id', 'campo-valor');
                inputText.setAttribute('name', 'valores[]');
                inputText.setAttribute('placeholder', 'Insira o valor do crédito');
                // Insere o campo de texto dentro da div "valor-pagamento"
                valorPagamento.appendChild(inputText);                
            }

        } else {
            // Remove o campo de texto se o checkbox for desmarcado
            var inputText = valorPagamento.querySelector('input[type="text"]');
            if (inputText) {
                inputText.remove();
            }
        }
    });
});
});
/*********************************************************************************/

/*********************************************************************************/