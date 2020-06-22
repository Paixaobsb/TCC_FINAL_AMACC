<?php

/**
 * LOGAR
 * Verficar o o botão 'login' foi acionado
 */
#
if (isset($_POST['acessar'])) {
    /**
     * direciona para o menu
     */
    switch ($_POST['login']) {
        case 'admintrador':
            /**
             * redirecionar para administrador
             */
            header("location:/teste-tcc/view/manter-ong.php");
            break;
        case 'representante':
            /**
             * redirecionar para usuario
             */
            header("location:/teste-tcc/view/manter-usuario.php");
            break;
        default:
            header("location:/teste-tcc/view/login.php");
            break;
    }
}
?>