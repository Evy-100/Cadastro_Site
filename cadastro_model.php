<?php
declare(strict_types=1);

// criando cliente no banco de dados
function criarCliente(object $pdo, $nomeEmpresa, $email, $usuario, $senha) {
    $query = "INSERT INTO clientes (nome_empresa, email, usuario, senha) VALUES (:nome, :email, :usuario, :senha);";
    $stmt = $pdo->prepare($query);

    // criando hash na senha
    $options = [
        'cost' => 12
    ];
    $hashedsenha = password_hash($senha, PASSWORD_BCRYPT, $options);

    // gravando no banco de dados
    $stmt->bindParam(":nome", $nomeEmpresa);
    $stmt->bindParam(":email", $email);
    $stmt->bindParam(":usuario", $usuario);
    $stmt->bindParam(":senha", $hashedsenha);
    $stmt->execute();
}
