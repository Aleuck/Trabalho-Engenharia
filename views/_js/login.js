var PREF = PREF || {};
(function (exports) {
    'use strict';
    var $loginForm,
        $userField,
        $passField;
    function login(usuario, senha, callback) {
        $.ajax({
            type: 'POST',
            url: HOME_URI + '/login/validaUsuario/json',
            data: { 'usuario': usuario, 'senha': senha },
            success: callback,
            dataType: 'json'
        });
    }
    function onLoginAttemptResponse(response) {
        console.log(response);
        $userField.removeAttr('disabled');
        $passField.removeAttr('disabled');
    }
    function onLoginFormSubmit(event) {
        event.preventDefault();
        var user = $userField.attr('disabled', 'disabled').val(),
            pass = $passField.attr('disabled', 'disabled').val();
        login(user, pass, onLoginAttemptResponse);
    }
    $(document).ready(function () {
        $loginForm = $('#login-form');
        $userField = $('#login-campo-usuario');
        $passField = $('#login-campo-senha');
        $loginForm.on('submit', onLoginFormSubmit);
    })
}(PREF));