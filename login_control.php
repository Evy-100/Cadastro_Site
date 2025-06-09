<?php

declare(strict_types=1);

// função que verifica se tem campos vazios
function is_input_empty($usuario,$senha) {
    if (empty($usuario) || empty($senha)) {
        return true;
    } else {
        return false;
    }
}
 
// funções que verificam se a informação fornecida pelo ususario é a mesma que esta armazenada no banco de dados
function check_username(bool|array $result) {
    if (!$result) {
        return true;
    } else {
        return false;
    }
}

function check_password($sehna, $hashedpwd) {
    if (!password_verify($sehna, $hashedpwd)) {
        return true;
    } else {
        return false;
    }
}