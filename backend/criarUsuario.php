<?php

include("conexao.php");
$criar_email=$_POST["Novo_email"];
$criar_senha=$_POST["Nova_senha"];
$criar_email2=$_POST["Novo_email2"];
$criar_senha2=$_POST["Nova_senha2"];

if ($criar_email == $criar_email2 && $criar_senha == $criar_senha2){
    $criar_senha = md5($criar_senha);
    $sql="INSERT INTO usuario(adm,email,senha) VALUES ('Usuario', '$criar_email', '$criar_senha')";

    mysqli_query($conexao,$sql);
    header("location: http://localhost/Projetos/paginas/itens.php");
}
else{echo "Falha ao se conectar - Digite o mesmo email e mesma senha";
    header("location: http://localhost/Projetos/paginas/cadastro.php");}


?>



