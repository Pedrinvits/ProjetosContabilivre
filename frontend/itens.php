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

            background-image: linear-gradient(35deg, gray, black);
            font-family: Quicksand;

        }

        h1 {
            text-align: center;
            color: white;
        }

        .card {
            width: 300px;
            background-color: gray;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 30px;
            border-radius: 15px;
            box-shadow: 10px 10px 10px black;
        }

        button {
            background-color: white;
            color: black;
            border-radius: 5px;
            transform: translate(50%);
            box-shadow: 2px 2px 2px black;


        }

        button:hover {

            background-color: black;
            color: white;

            text-decoration: none;

        }

        label {
            text-decoration: none;
            color: white;



        }

        input {
            box-shadow: 2px 2px 2px black;
            border-radius: 5px;
            width: 70%;
            outline: none;
            margin: 6px;

        }

        a {
            color: white;
            text-decoration: none;
        }

        a:hover {
            color: black;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class='card'>
        <form method="POST" enctype="multipart/form-data" action="../backend/validaLista.php">
            <h1>Itens</h1>
            <label>Adicionar Jogo : <input type="text" name="adicionar_Jogo" class="adicionar_Jogo" placeholder="Coloque o nome do Jogo"><button type="submit">Enviar<br></button></label>
            <label>Adicionar Descricao: <textarea name="descricao_jogo" class="descricao_jogo" rows="5" cols="33" placeholder="Coloque a Descrição do seu Jogo"></textarea>
                <br>
                <label for="conteudo">Enviar imagem:</label>
                <input type="file" name="pic" accept="image/*" class="form-control">
                <br>
                <label>Ver Lista de Jogos :<a href="listaJogos.php"> Procurar</label>
                <br><br>
                <a href="../backend/logout.php">Logout</a>
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                <?php
 if(isset($_FILES['pic']))
 {
    $ext = strtolower(substr($_FILES['pic']['name'],-4)); //Pegando extensão do arquivo
    $new_name = date("Y.m.d-H.i.s") . $ext; //Definindo um novo nome para o arquivo
    $dir = './imagens/'; //Diretório para uploads
 
    move_uploaded_file($_FILES['pic']['tmp_name'], $dir.$new_name); //Fazer upload do arquivo
    echo '<div class="alert alert-success" role="alert" align="center">
          <img src="./imagens/' . $new_name . '" class="img img-responsive img-thumbnail" width="200"> 
          <br>
          Imagem enviada com sucesso!
          <br>
          <a href="exemplo_upload_de_imagens.php">
          <button class="btn btn-default">Enviar nova imagem</button>
          </a></div>';
 } ?>            
    </div>
    </form>
</body>