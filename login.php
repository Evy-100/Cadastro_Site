<?php

// armazenando informações em variáveis
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];

    // conectando com o banco de dados
    try {
        require_once "conexao.php";
        require_once "login_model.php";
        require_once "login_control.php";

        // determinando possíveis erros e criando avisos pro usuário
        $erros = [];
            if(is_input_empty($usuario,$senha)) {
                $erros["input_vazio"] = "Por favor preencha todos os campos.";
            }

           $result = get_user($pdo,$usuario);

           if(check_username($result)) {
           $erros["usuario_incorreto"] = "Usuário incorreto.";
            }

            if(!check_username($result) && check_password($senha, $result["senha"])) {
                $erros["login_incorreto"] = "Usuário ou senha incorretos.";
            }
            require_once "config_session.php";

            if ($erros) {
                $_SESSION["erros_login"] = $erros;
                header("Location:loginPagina.php");
                die();
            }

            // criando ID da sessão
        $newSessionId = session_create_id();
        $sessionId = $newSessionId . "_" . $result["cliente_id"];
        session_id($sessionId);

        $_SESSION["user_id"] = $result["cliente_id"];
        $_SESSION["user_username"] = htmlspecialchars($result["usuario"]);

       $_SESSION["last_regeneration"] = time();

        header("Location:boasvindas.php");

        $pdo = null;
        $stmt = null;
        die();

        } catch (PDOException $e) {

            // mensaem de erro caso aconteça erro de conexão
            die("Falha na conexão: " . $e->getMessage());
        }
    } else {

        // voltar pra página de login caso o armazenamento de informações de errado
        header("Location:loginPagina.php");
        die();
    }  