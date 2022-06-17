<?php
session_start();
// print_r($_SESSION['idUsuario']);exit;
?>
<head>
<meta charset="UTF-8" />
<title>Itens</title>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap');
    body {
            
            background-image:linear-gradient(35deg,gray,black );
            font-family: Quicksand;
             
        }
        h1{text-align: center;
            color: white;
        }
        .card{
            width: 300px;
            background-color: gray;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            padding: 30px;
            border-radius: 15px;
            box-shadow: 10px 10px 10px black;
        }
        button{
            background-color: white;
            color:black;
            border-radius: 5px;
            transform: translate(50%);
            box-shadow: 2px 2px 2px black;
        

        }
        button:hover{
            
            background-color: black;
            color:white;
            
            text-decoration: none;
            
        }
       
        label{
            text-decoration: none;
            color:white;
            
            
            
        }
        input{
            box-shadow: 2px 2px 2px black;
            border-radius: 5px;
            width: 70%;
            outline: none;
            margin: 6px;
            
        }
        a{
            color:white;
            text-decoration: none;
        }

        a:hover{
            color:black;
            font-weight: bold;
        }
</style>
</head>
<body>
<div class='card'>
<form method="POST" action="../backend/validaLista.php" >   
            <h1>Itens</h1>
            <label>Adicionar Jogo : <input type="text" name="adicionar_Jogo"class="adicionar_Jogo" placeholder="Coloque o nome do Jogo"><button type="submit">Enviar<br></button></label>
            <br><br>
            <label>Ver Lista de Jogos :<a href="listaJogos.php"> Procurar</label>  
            <br><br>
            <a href="../backend/logout.php">Logout</a>
    </div>
    </form>
</body>