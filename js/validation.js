document.addEventListener('DOMContentLoaded', function() {
    const form = document.querySelector('form');
    form.addEventListener('submit', function(event) {
        const inputs = form.querySelectorAll('input');
        inputs.forEach(input => {
            if (input.value === '' || input.value <= 0) {
                alert('Si us plau, introduïu valors vàlids.');
                event.preventDefault();
            }
        });
    });
});
