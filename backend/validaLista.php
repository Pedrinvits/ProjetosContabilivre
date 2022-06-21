<?php
include("conexaoBancoProjeto.php");
session_start();
$nomeJogo=$_POST["adicionar_Jogo"];
$desc_jogo=$_POST["descricao_jogo"];
$id_usuario = $_SESSION['idUsuario'];
$arquivo = $_FILES['arquivo'];
echo $nomeJogo;
echo $desc_jogo;
$arquivo = $_FILES['arquivo'];
$ext="";
$nome_arquivo="";

if ($arquivo !==null) {
preg_match("/\.(png|jpg|jpeg){1}$/i" , $arquivo["name"], $ext); //nome para imagem

if ($ext == true) {
	$nome_arquivo = md5(uniqid(time())) . "." .$ext[1];
        $caminho_arquivo= "../image/" . $nome_arquivo;
	move_uploaded_file($arquivo["tmp_name"], $caminho_arquivo);
} 

}
$sql="INSERT INTO jogos(id_usuario,jogos,descricao,imagem) VALUES ( '$id_usuario' ,'$nomeJogo','$desc_jogo','$nome_arquivo')";
mysqli_query($conexao,$sql);
header("location: http://localhost/Projetos/frontend/itens.php");

?>