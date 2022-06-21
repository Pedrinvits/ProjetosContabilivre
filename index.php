
<head>
    <meta charset="UTF-8" />
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./estilo/global.css">
    <title></title>
    <?php
        session_start();
        session_destroy();
    ?>
    <style>
         @import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap');
        body {
            font-family: Quicksand;
            background-image:linear-gradient(35deg,gray,black );
             
        }
        h1{text-align: center;
            color: white;
        }
        .card{
            background-color: gray;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            padding: 20px;
            border-radius: 15px;
            box-shadow: 5px 5px 5px black;
        }
        .usuario_senha{
            padding: 15px;
            border: none;
            outline: none;
            font-size: 15px;
            border-radius: 5px;
            box-shadow: 5px 5px 5px black;
        }
        button{
            background-color: white;
            color:black;
            font-weight: bold;
            width: 50%;
            border-radius: 5px;
            transform: translate(50%);
            border: none;

        }
        button:hover{
            background-color: black;
            color:white;
            font-weight: bold;
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
            color:black;
        }
        ::placeholder{
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div>
    <form class='card' method="POST" action="backend/validacaoLogin.php">
            <h1>Login</h1>
            <?php   
                if(isset($_SESSION["Conecado"])){ //isset cria o espaco na memoria para session = usuario ja cadastrado
                    if(!$_SESSION["Conecado"]){
                        echo "<p>Login ou senha inválido.</p>";
                    }
                }
                
            ?>
            <input type="text" name="usuario"class="Usuario_senha" placeholder="Usuario" required >
            <br>
            <input type="password" name="senha"class="Usuario_senha" placeholder="Senha" required >
            <br>
            <button type="submit">Enviar</button>
            <br>
            
            <p> Ainda não cadastrado ? <a class="cadastre-se" id="cadastro"href="http://localhost/Projetos/frontend/cadastro.php" id="Cadastre">Cadastre-se</a>
    </p>
    </form>   
    </div>
</body