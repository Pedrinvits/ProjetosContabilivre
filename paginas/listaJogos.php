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

        .card {
            background-color: blue;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 20px;
            border-radius: 15px;
            box-shadow: 5px 5px 5px black;
        }
        .lista{
            padding: 150px;
            color: white;
            width: 150px;
        }
    </style>
</head>


<body>
    <div class="card">
        <h1>Lista</h1>
        <div class="lista">
         <tabble>
            <tr> <!-- 1° Linha  fazer um for ou while adicionando cada linha com o select-->
                <td>A1</td> <!-- 1° Coluna -->
                <td>B1</td>
                <td>C1</td>
            </tr>
            <tr> <!-- 2° Linha -->
                <td>A2</td>
                <td>B2</td>
                <td>C2</td>
            </tr>
            <tr> <!-- 3° Linha -->
                <td>A3</td>
                <td>B3</td>
                <td>C3</td>
            </tr>
         </tabble>
        </div>


    </div>
</body>