import './bootstrap';

function confirmar() {
    var id_aula = document.querySelector('input[name="id_aula"]').value;

    var mensagem = 'Tem certeza de que deseja apagar a aula com o ID ' + id_aula + '?';

    var resposta = confirm(mensagem);

    if (resposta) {
        // Enviar o formulário
        document.querySelector('form').submit();
    }
}

