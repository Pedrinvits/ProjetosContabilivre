<?php
include("conexaoBancoProjeto.php");
session_start();
$nomeJogo=$_POST["adicionar_Jogo"];
$desc_jogo=$_POST["descricao_jogo"];
$img_jogo=$_POST["pic"];

$id_usuario = $_SESSION['idUsuario'];
echo $nomeJogo;
echo $desc_jogo;
echo $img_jogo;
$sql="INSERT INTO jogos(id_usuario,jogos,descricao,imagem) VALUES ( '$id_usuario' ,'$nomeJogo','$desc_jogo','$img_jogo')";
mysqli_query($conexao,$sql);
header("location: http://localhost/Projetos/frontend/itens.php");

?>