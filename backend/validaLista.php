<?php
include("conexaoBancoProjeto.php");
session_start();
$nomeJogo=$_POST["adicionar_Jogo"];

$id_usuario = $_SESSION['idUsuario'];
echo $nomeJogo;
$sql="INSERT INTO jogos(id_usuario,jogos) VALUES ( '$id_usuario' ,'$nomeJogo')";
mysqli_query($conexao,$sql);
header("location: http://localhost/Projetos/frontend/itens.php");

?>