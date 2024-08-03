// Executa quando o DOM estiver totalmente carregado
document.addEventListener('DOMContentLoaded', function() {
    
    // Validação de Formulário
    const form = document.querySelector('form');
    if (form) {
        form.addEventListener('submit', function(event) {
            let valid = true;
            const inputs = form.querySelectorAll('input[required]');
            inputs.forEach(input => {
                if (input.value.trim() === '') {
                    valid = false;
                    input.classList.add('error');
                } else {
                    input.classList.remove('error');
                }
            });
            if (!valid) {
                event.preventDefault();
                alert('Por favor, preencha todos os campos obrigatórios.');
            }
        });
    }

    // Mensagem Temporária
    const message = document.getElementById('message');
    if (message) {
        setTimeout(() => {
            message.style.opacity = '0';
        }, 3000);
    }

    // Confirmação de Exclusão
    const deleteLinks = document.querySelectorAll('.confirm-delete');
    deleteLinks.forEach(link => {
        link.addEventListener('click', function(event) {
            if (!confirm('Você tem certeza que deseja excluir este item?')) {
                event.preventDefault();
            }
        });
    });

});
