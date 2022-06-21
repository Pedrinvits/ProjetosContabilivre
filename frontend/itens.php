<?php
session_start();
// print_r($_SESSION['idUsuario']);exit;
if ($_SESSION['idUsuario'] == null) {
    header("location: http://localhost/Projetos/");
}


?>

<head>
    <meta charset="UTF-8" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Itens</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap');

        body {

            background-image: linear-gradient(35deg, gray, black);
            font-family: Quicksand;

        }

        h1 {
            text-align: center;
            color: white;
        }
        
        .card {
            width: 500px;
            height: 500px;
            background-color: gray;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 20px;
            border-radius: 15px;
            box-shadow: 10px 10px 10px black;
           
        }

         .btn.btn-primary{
            background-color: white;
            color:black;
            font-weight: bold;
            transform: translate(50%);
            border: none;
            text-decoration: none;
            
            display: inline !important;
        }

        .btn.btn-primary:hover{
            background-color: black;
            color:white; 
            text-decoration: none;
            border: none;
            
            
         }
        
         

        label {
            text-decoration: none;
            color: white;
            width: 70%;
            margin: 7px;
        }

        label.lista{
            position: relative;
            text-decoration: none;
            color: white;
            margin-bottom: 15px;
            
            
        }

        input.form-control {
            box-shadow: 2px 2px 2px black;
            border-radius: 5px;
            width: 100%;
            outline: none;
            margin: 6px;

        }

.upload{
    color: white;
    
}

.procurar{
   margin: 15px 15px;
    
}
.enviar{
    margin: 9px;
    margin-left: 60px;
    width: 30%;
    
}

    </style>
</head>

<body>
    <div class='card'>
        <h1>Jogos</h1>
        <form method="POST" enctype="multipart/form-data" action="../backend/validaLista.php">

            <label for="floatingInput">Nome do Jogo<input type="text" class="form-control" id="floatingInput" name="adicionar_Jogo"placeholder="Nome do Jogo"></label>
            <label for="floatingTextarea"> Descrição do Jogo <textarea class="form-control" name="descricao_jogo" placeholder="Coloque uma descrição para seu jogo " id="floatingTextarea"></textarea></label>
            <label>Enviar uma imagem <input type="file" class="upload" name="arquivo"></label>
           <button type="submit" class="enviar btn btn-primary">Enviar</button>
            <label class="lista"> Ver Lista de Jogos :<a href="listaJogos.php" class="procurar btn btn-primary">Procurar</a></label>
            <br><br><a href="../backend/logout.php" class="logout btn btn-primary">Logout</a>
    
    </div>
    </form>
</body>