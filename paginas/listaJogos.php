<!-- abrir tag php e colocar o select para printar a consulta no banco (colocar include para conexao)-->
<?php
include("../backend/conexao.php");
session_start();

$id_usuario = $_SESSION['idUsuario'];


$sql="SELECT jogos FROM jogos WHERE id_usuario = $id_usuario";

$execute=mysqli_query($conexao,$sql);

?>
<html lang="pt-br">

<head>
    <meta charset="URF-8">
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Georgia, 'Times New Roman', Times;
            background-image: linear-gradient(35deg, gray, black);

        }

        h1 {
            text-align: center;
            color: white;
        }

        div {
            width: 300px;
            height: 300px;
            border: none;
            margin: 0 auto 0 auto;
            background-color: blue;
            
            


        }
        tr{
            margin: 200px;
        }

        
        
    </style>
</head>


<body>
    
    <h1>Lista dos Seus Jogos </h1>
    <div>
        <table>
            <?php
            while ($dado = mysqli_fetch_assoc($execute)) {
            ?>
                <tr>
                    <td><?php
                            echo $dado["jogos"];
                        ?>
                    </td>
                </tr>

            <?php
            }
            ?>
        </table>
    </div>

</body>