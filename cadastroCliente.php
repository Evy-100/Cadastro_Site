<!DOCTYPE html>
    <head lang="pt-br">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <header class="text-center">
            <h1>Cadastro de Cliente</h1>
        </header>
        <div class="container-fluid">
            <div class="row">
            <div class="col-3"></div>
            <div class="col-6">
                <h2 class="text-center mt-3">Por favor preencha o formulário</h2>
                <form method="POST" action="cadastro.php">
                    <div class="mb-2">
                        <label for="nomeEmpresa" class="form-label mt-3">Nome da empresa:</label>
                        <input type="text" class="form-control" name="nomeEmpresa" id="nomeEmpresa" placeholder="Qual o nome de sua empresa?">
                    </div>
                    <div class="mb-2">
                        <label for="emailEmpresa" class="form-label mt-3">Email:</label>
                        <input type="email" class="form-control" name="email" id="emailEmpresa" placeholder="Insira o e-mail de sua empresa aqui...">
                    </div>
                    <div class="mb-2">
                        <label for="usuarioEmpresa" class="form-label mt-3">Nome de Usuário:</label>
                        <input type="text" class="form-control" name="usuario" id="usuarioEmpresa" placeholder="Qual seu nome de usuário?">
                    </div>
                    <div class="mb-2">
                        <label for="senha" class="form-label mt-3">Senha:</label>
                        <input type="password" class="form-control" name="senha" id="senhaEmpresa" placeholder="Crie sua senha aqui...">
                    </div>
                    <div class="text-center mt-3">
                    <button type="submit" class="btn btn-warning">Confirma</button>
                    </div>
                </form>
            </div>
            <div class="col-3"></div>
            </div>
        </div>
    </body>