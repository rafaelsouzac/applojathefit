window.onload = function () {
    var checkboxes = document.querySelectorAll('input[type="checkbox"]');
    checkboxes.forEach(function (checkbox) {
        checkbox.addEventListener('change', function () {
            var fieldName = this.value;
            var field = document.getElementById(fieldName);

            if (this.checked) {
                field.style.display = 'block'; // Mostrar o campo se o checkbox estiver marcado
            } else {
                field.style.display = 'none'; // Ocultar o campo se o checkbox estiver desmarcado
            }
        });
        // Simule o evento 'change' para definir a visibilidade inicial corretamente
        checkbox.dispatchEvent(new Event('change'));
    });
};

/*****************************************************************************/
function toggleField(fieldName) {
    var field = document.getElementById(fieldName);
    var checkbox = document.querySelector('input[value="' + fieldName + '"]');
    if (checkbox.checked) {
        field.style.display = 'block'; // Mostrar o campo
    } else {
        field.style.display = 'none'; // Ocultar o campo
    }
}
