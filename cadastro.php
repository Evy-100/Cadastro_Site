<?php

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $nomeEmpresa = $_POST["nomeEmpresa"];
    $email = $_POST["email"];
    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];

    try {
        require_once "conexao.php";
        require_once "cadastro_model.php";

        criarCliente($pdo, $nomeEmpresa, $email, $usuario, $senha);

        $pdo = null;
        $stmt = null;

        header("Location:./cadastroCliente.php?signup=success");
            die();
    } catch (PDOException $e) {
            die("Falha na conexão: " . $e->getMessage());
    }
} else {
    header("Location:./cadastroCliente.php");
        die();
}