<?php
include("conexao.php");
$consultaUsuario = true;
$nome=$_POST["name=usuario"];
$senha=$_POST["name=senha"];
$sql="SELECT INTO usuarios(id,adm,email,senha) VALUES ('$nome', '$senha')";
if ($consultaUsuario == true){
    header("location: http://localhost/Projetos/paginas/itens.php");
}
else {
    header("location: http://localhost/Projetos/index.php?erro=true");
}
?>

