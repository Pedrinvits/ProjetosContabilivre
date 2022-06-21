<?php //cria uma variavel erro que esta em um paragrafo dentro do html esse variavel é global, o que temos que fazer para mudarmos a mensagem de erro é dentro de um novo if com um novo get colocar outra coisa dentro das aspas e depois criar um if na pagina de validação de cadastro *criarUsuario* e colocar esse variavel no header e depois colocar o =true 
$erro="";

if (isset($_GET["erro_email"])){
    $erro="Email já existente";
}
if (isset($_GET["erro_sem_dados"])){
    $erro="Preencha Todos os Campos";
}
if (isset($_GET["erro_mesmo_email_e_senha"])){
    $erro="Mesmo Email e Senha ";
}
?>

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
         @import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap');
         
        body {
            font-family:Georgia, 'Times New Roman', Times;
            background-image:linear-gradient(35deg,gray,black );
            font-family: Quicksand;
             
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
            border: none;
            color:black;
            font-weight: bold;
            width: 50%;
            border-radius: 5px;
            transform: translate(50%);
            box-shadow: 2px 2px 2px black;

        }
        button:hover{
            background-color: black;
            font-weight: bold;
            color:white;
            text-decoration: none;
            
        }
        .cadastre-se{
            color: white;
            text-decoration: none;
            border: none;
            transform: translate(60%);
        }
        p{
            text-decoration: none;
            color:white
        }
        a:hover{
            color:red;
        }
        .btn btn-primary{
            width: 25px;
            color: black;
        }
        ::placeholder{
            font-weight: bold;
        }
        .btn, .btn-primary{
            background-color: white;
            color:black;
            font-weight: bold;
            border: none;
            box-shadow: 2px 2px 2px black;
        }
        .btn-primary:hover{
            background-color: black;
            color:white;
        }
    </style>
</head>

<body>
    <div id="cadastro">

    <form class='card' method="POST" action="../backend/validaCadastro.php">
            <h1>Cadastro</h1>
            <p class="erro"><?php echo $erro; ?></p>
            <p>Novo Email <input type="text" name="Novo_email"class="Usuario_senha" placeholder="Novo Email"></p>
            <p>Confirme o Email <input type="text"name="Novo_email2" class="Usuario_senha" placeholder="Confirmar Email"></p>
            <p>Nova Senha <input type="password" name="Nova_senha"class="Usuario_senha" placeholder="Nova Senha"></p>
            <p>Confirme a Senha <input type="password" name="Nova_senha2" class="Usuario_senha" placeholder="Confirmar Senha"></p>
            <br>
            <button type="submit" class="btn btn-primary">Cadastrar</button>
            <br>         
    </p>
    <a class="btn btn-primary" href="http://localhost/Projetos/index.php" role="button">Voltar</a>
    </form>
    
    </div>
</body>


</body>