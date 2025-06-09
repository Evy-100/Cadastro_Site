<?php

declare(strict_types=1);

// função que mostra possíveis erros pro usuário caso eles aconteçam
function check_login_errors() {
    if (isset($_SESSION['erros_login'])) {
        $erros = $_SESSION['erros_login'];

        foreach ($erros as $erros) {
            echo "<p>".$erros."</p>";
        }

        unset($_SESSION['erros_login']);
    }
}