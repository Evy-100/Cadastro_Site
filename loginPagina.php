<?php 
    require_once "config_session.php";
    require_once "login_view.php";
?>

<!DOCTYPE html>
    <head lang="pt-br">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <header class="text-center">
            <h1>Login</h1>
        </header>
        <div class="container-fluid">
            <div class="row">
            <div class="col-4"></div>
            <div class="col-4">
                <div class="text-center">
                    <?php
                    check_login_errors();
                    ?>
                </div>
                <form method="POST" action="login.php">
                    <div class="mb-2">
                        <label for="usuarioEmpresa" class="form-label mt-3">Nome de Usuário:</label>
                        <input type="text" class="form-control" name="usuario" id="usuarioEmpresa" placeholder="Qual seu nome de usuário?">
                    </div>
                    <div class="mb-2">
                        <label for="senha" class="form-label mt-3">Senha:</label>
                        <input type="password" class="form-control" name="senha" id="senhaEmpresa" placeholder="Digite sua senha aqui.">
                    </div>
                    <div class="text-center mt-3">
                    <button type="submit" class="btn btn-warning">Confirma</button>
                    </div>
                </form>
            </div>
            <div class="col-4"></div>
            </div>
        </div>
    </body>