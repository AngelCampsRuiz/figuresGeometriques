document.addEventListener('DOMContentLoaded', function() {
    const form = document.querySelector('form');
    const submitBtn = document.querySelector('button[type="submit"]');

    // Función para validar un solo campo
    function validateField(input) {
        const value = parseFloat(input.value);
        const errorField = document.getElementById(`error-${input.id}`);
        let errorMessage = '';

        // Comprobaciones de validación
        if (isNaN(value) || value <= 0 || value > 250) {
            if (isNaN(value) || input.value === '') {
                errorMessage = 'Si us plau, introduïu un número.';
            } else if (value <= 0) {
                errorMessage = 'El valor ha de ser major que 0.';
            } else if (value > 250) {
                errorMessage = 'El valor no pot ser superior a 250.';
            }

            // Mostrar error y aplicar clases
            errorField.textContent = errorMessage;
            errorField.classList.add('text-danger');
            input.classList.add('is-invalid');
            input.classList.remove('is-valid');
        } else {
            // Limpiar errores si el campo es válido
            errorField.textContent = '';
            input.classList.remove('is-invalid');
            input.classList.add('is-valid');
        }

        // Validar el formulario completo cada vez que se actualice un campo
        validateForm();
    }
    // Función para validar todo el formulario
    function validateForm() {
        const inputs = form.querySelectorAll('input');
        let formValid = true;

        inputs.forEach(input => {
            if (input.classList.contains('is-invalid') || input.value === '') {
                formValid = false; // Si hay algún campo inválido, el formulario no es válido
            }
        });

        // Activar o desactivar el botón de envío
        submitBtn.disabled = !formValid;
    }

    // Validación cuando se intenta enviar el formulario
    form.addEventListener('submit', function(event) {
        const inputs = form.querySelectorAll('input');
        let formValid = true;

        inputs.forEach(input => {
            const value = parseFloat(input.value);
            const errorField = document.getElementById(`error-${input.id}`);

            if (isNaN(value) || value <= 0 || value > 250) {
                event.preventDefault(); // Evita el envío del formulario si hay errores
                formValid = false; // Marcar el formulario como no válido
                let errorMessage = '';

                // Generar mensaje de error
                if (isNaN(value) || input.value === '') {
                    errorMessage = 'Si us plau, introduïu un número.';
                } else if (value <= 0) {
                    errorMessage = 'El valor ha de ser major que 0.';
                } else if (value > 250) {
                    errorMessage = 'El valor no pot ser superior a 250.';
                }

                // Mostrar mensaje de error
                errorField.textContent = errorMessage;
                errorField.classList.add('text-danger');
                input.classList.add('is-invalid');
                input.classList.remove('is-valid');
            }
        });

        // Si no es válido, desactivar el botón
        if (!formValid) {
            submitBtn.disabled = true;
        }
    });

    // Validación en el evento "blur" para cada campo
    form.querySelectorAll('input').forEach(input => {
        input.addEventListener('blur', function() {
            validateField(input); // Validar cada campo individualmente al perder el foco
        });
    });

    // Validar el formulario al cargar la página
    validateForm();
});
