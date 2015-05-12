<?php
switch($_REQUEST['acao']) {
    case 'logar': {
        print "<h1>Alguem tentando logar</h1>";
        print "<p><strong>Email:</strong> {$_REQUEST['user']}</p>";
        print "<p><strong>Senha:</strong> {$_REQUEST['senha']}</p>";
    } break;
}
?>
