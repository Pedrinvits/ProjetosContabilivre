<head>
<meta charset="UTF-8" />
<title>Itens</title>
<style>
    body {
            font-family:Georgia, 'Times New Roman', Times;
            background-image:linear-gradient(35deg,gray,black );
             
        }
        h1{text-align: center;
            color: white;
        }
        .card{
            width: 300px;
            background-color: blue;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            padding: 30px;
            border-radius: 15px;
            box-shadow: 5px 5px 5px black;
        }
        button{
            background-color: white;
            border-radius: 5px;
            transform: translate(50%);
        

        }
        button:hover{
            background-color: red;
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
        }
        a{
            color:white;
            text-decoration: none;
        }
</style>
</head>
<body>
<div class='card'>
<form method="POST" action="../backend/validaJogo.php" >   
            <h1>Itens</h1>
            <label>Adicionar Jogo : <input type="text" name="adicionar_Jogo"class="adicionar_Jogo" placeholder="Coloque o nome do Jogo"><button type="submit">Enviar<br></button></label>
            <br><br>
            <label>Ver Lista de Jogos :<a href="listaJogos.php"> Procurar</label>  
            <br><br>   
    </div>
    </form>
</body>