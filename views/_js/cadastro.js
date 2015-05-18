var PREF = PREF || {};
(function (exports) {
    'use strict';
    var $registerForm,
        $userField,
        $passField,
        $confirmPassField,
        $nameField,
        $emailField,
        $priorityField,
        $levelField,
        $submitBt;
    function register(usuario, senha, nome, email, prioridade, nivel, callback) {
        $.ajax({
            type: 'POST',
            url: HOME_URI + '/cadastro/cadastrar/json/',
            data: {
                'matricula': usuario,
                'senha': senha,
                'nome' : nome,
                'email' : email,
                'prioridade': prioridade,
                'nivel': nivel
            },
            success: callback,
            dataType: 'json'
        });
    }
    function onRegisterAttemptResponse(response) {
        console.log(response);
        $userField.removeAttr('disabled');
        $passField.removeAttr('disabled');
        $submitBt.removeAttr('disabled');
    }
    function onRegisterFormSubmit(event) {
        event.preventDefault();
        var matricula = $userField.attr('disabled', 'disabled').val(),
            senha = $passField.attr('disabled', 'disabled').val(),
            nome = $nameField.attr('disabled', 'disabled').val(),
            email = $emailField.attr('disabled', 'disabled').val(),
            prioridade = parseInt($priorityField.attr('disabled', 'disabled').val(), 10),
            nivel = parseInt($levelField.attr('disabled', 'disabled').val(), 10);
        $submitBt.attr('disabled', 'disabled');
        register(matricula, senha, nome, email, prioridade, nivel, onRegisterAttemptResponse);
    }
    $(document).ready(function () {
        $registerForm = $('#form-cadastro');
        $userField = $('#matricula');
        $passField = $('#senha');
        $confirmPassField = $('#senha-again');
        $nameField = $('#nome');
        $emailField = $('#email');
        $priorityField = $('#prioridade');
        $levelField = $('#nivel');
        $submitBt = $('#enviar-cadastro');
        // listen events
        $registerForm.on('submit', onRegisterFormSubmit);
        $confirmPassField.on('input',function () {
            if (this.value !== $passField.val()) {
                this.setCustomValidity('As senhas não correspondem.');
            } else {
                this.setCustomValidity('');
            }
        })
    })
}(PREF));