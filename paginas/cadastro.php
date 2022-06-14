<link rel="stylesheet" href="../estilo/global.css">

<head>
    <meta charset="UTF-8" />
    <title>Cadastro</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./estilo/global.css">
    
    <style>
        body {
            font-family:Georgia, 'Times New Roman', Times;
            background-image:linear-gradient(35deg,gray,black );
             
        }
        h1{text-align: center;
            color: white;
        }
        .card{
            background-color: blue;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            padding: 20px;
            border-radius: 15px;
            box-shadow: 5px 5px 5px black;
        }
        .usuario_senha{
            width: 350px;
            padding: 15px;
            border: none;
            outline: none;
            font-size: 15px;
            border-radius: 5px;
            box-shadow: 5px 5px 5px black;
            display: flex;
            
        }
        button{
            background-color: white;
            width: 50%;
            border-radius: 5px;
            transform: translate(50%);

        }
        button:hover{
            background-color: red;
            text-decoration: none;
            
        }
        .cadastre-se{
            color: white;
            text-decoration: none;
            transform: translate(60%);
        }
        p{
            text-decoration: none;
            color:white
        }
        a:hover{
            color:red;
        }
    </style>
</head>

<body>
    <div id="cadastro">

    <form class='card' method="POST" action="../backend/criarUsuario.php">
            <h1>Cadastro</h1>
            <p>Novo Email <input type="text" name="Novo_email"class="Usuario_senha" placeholder="Novo Email"></p>
            <p>Confirme o Email <input type="text"name="Novo_email2" class="Usuario_senha" placeholder="Confirmar Email"></p>
            <p>Nova Senha <input type="password" name="Nova_senha"class="Usuario_senha" placeholder="Nova Senha"></p>
            <p>Confirme a Senha <input type="password" name="Nova_senha2" class="Usuario_senha" placeholder="Confirmar Senha"></p>
            <br>
            <button type="submit">Cadastrar</button>
            <br>         
    </p>
    </form>
    </div>
</body>


</body>