<head>
    <meta charset="UTF-8" />
    <title>Formulário de Login e Cadastro com HTML5 e CSS3</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./estilo/global.css">

    <title>Login</title>
</head>

<body>
    <div id='login' style="background-color: #add8e6">

        <form class='card' method="POST" action="./paginas/validacaoLogin.php">
            <div class="card-header">
                <h2>Login</h2>
            </div>
            <div class="card-content">

                <div class="card-content-area">
                    <label for="usuario"> Usuário</label>
                    <input type="text" id="usuario" autocomplete="off">
                </div>
                <div class="card-content-area">
                    <label for="password">Senha</label>
                    <input type="password" id="password" autocomplete="off">
                </div>
            </div>
            <div class="card-footer botoes">
                <input type="checkbox" id="manter_conectado">
                <label for="manter_conectado"> Manter Conectado</label>
                <input type="submit" value="Logar" class="submit">

                <a href="#" class="recuperar_senha">Esqueceu a senha?</a>
                <a class="btn btn-primary" href="http://localhost/Projetos/paginas/cadastro.php" id="Cadastre">Cadastre-se</a>
            </div>
        </form>
    </div>
</body>


</body>