<!-- abrir tag php e colocar o select para printar a consulta no banco (colocar include para conexao)-->
<?php
include("../backend/conexaoBancoProjeto.php");
session_start();
if ($_SESSION['idUsuario'] == null) {
    header("location: http://localhost/Projetos/");
}

$id_usuario = $_SESSION['idUsuario'];
$sql = "SELECT * FROM jogos WHERE id_usuario = $id_usuario";


$execute = mysqli_query($conexao, $sql);

?>
<html lang="pt-br">

<head>
    <meta charset="URF-8">
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
    <title>Lista de Jogos</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap');
    </style>
    <style>
        body {
            font-family: Quicksand;
            background-image: linear-gradient(35deg, gray, black);

        }

        h1 {
            text-align: center;
            color: white;
        }

        /* div {
            width: 70%;
            height: 100%;
            border: none;
            margin: 0 auto 0 auto;
            background-color: #666;
            border-radius: 15px;
            box-shadow: 15px 15px 15px black;
            padding: 10px;
            overflow-y: scroll;
            

        }

        table {
            margin: auto;
            font-weight: bold;
            width: 100%;
            

        } */


        a {}

        a:hover {}

        /* .imagens {
            width: 150px;
        }  */

        /* tbody{
            background-color: gray;
            border: 2px solid black;
            
            
           
        }
        thead{
            background-color: gray;
            border: 2px solid black;
            
        } 
            */
        .card {
            width: 90%;
            border: none;
            background-color: white;
            border-radius: 15px;
            box-shadow: 0px 0px 15px black;
            padding: 10px;


        }

        section {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr 1fr;
            grid-gap: 50px;
            margin-top: 20px;
        }

        .imagem {
            width: 100%;
        }

        .btn.btn-primary {
            background-color: white;
            color: black;
            border: none;
            text-decoration: none;
            border-radius: 5px;
            margin: 1%;
            padding: 8px;


        }

        .btn.btn-primary:hover {
            background-color: black;
            color: white;
            text-decoration: none;
            border: none;


        }

        @media only screen and (max-width:500px) {
            section {
                grid-template-columns: 1fr 1fr;
            }
        }

        @media only screen and (max-width:300px) {
            section {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>


<body>
    <h1>Lista dos Seus Jogos </h1>
    <a class="btn btn-primary" href="http://localhost/Projetos/frontend/itens.php">Voltar</a>

    <section>
        <?php
        while ($dado = mysqli_fetch_assoc($execute)) {
        ?>
            <div class="card">
                <?php

                if ($dado['imagem'] == null) { ?>

                    <img class="imagem card-img-top" src="../image/error.png" alt="Card image cap">

                <?php } else { ?>

                    <img class="imagem card-img-top" src="../image/<?php echo $dado['imagem']; ?>" alt="Card image cap">
                    
                <?php } ?>
                <div class="card-body">
                    <h5 class="card-title"><?php
                                            echo $dado["jogos"];
                                            ?></h5>
                    <p class="card-text"><?php
                                            echo $dado["descricao"];
                                            ?></p>

                </div>
            </div>






        <?php } ?>
    </section>
    </div>

    </div>



</body>

</html>