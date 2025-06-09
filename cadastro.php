<?php
//armazenando variáveis
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $nomeEmpresa = $_POST["nomeEmpresa"];
    $email = $_POST["email"];
    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];


    //conectando com o banco de dados e mandando informações
    try {
        require_once "conexao.php";
        require_once "cadastro_model.php";

        criarCliente($pdo, $nomeEmpresa, $email, $usuario, $senha);

        $pdo = null;
        $stmt = null;

        header("Location:./cadastroCliente.php?signup=success");
            die();
    } catch (PDOException $e) {
        //mensagem de erro caso a conexão de errado
            die("Falha na conexão: " . $e->getMessage());
    }
} else {
    // encaminha o usuário de volta pra página de cadastro caso o armazenamento dos dados nas variáveis não der certo
    header("Location:./cadastroCliente.php");
        die();
}