<?php
include("conexaoBancoProjeto.php");
session_start();

$consultaUsuario = true;
$nome=$_POST["usuario"];
$senha=md5($_POST["senha"]);

$sql="SELECT * FROM usuario WHERE email='$nome' AND senha='$senha'";
$execute=mysqli_query($conexao,$sql);
$n_linhas = mysqli_num_rows($execute); //retorna 1 se ja tiver usuario cadastrado

if (($nome=="" || $senha=="") ||(!isset($_POST["usuario"])) || (!isset($_POST["senha"])) ){
    header("location: http://localhost/Projetos/index.php");
}
 

elseif ($n_linhas >=1){
    $id_session=mysqli_fetch_assoc($execute);
    $_SESSION["Conecado"]=true;
    $_SESSION["idUsuario"] = $id_session["id"];
    header("location: http://localhost/Projetos/frontend/itens.php");
    
}
else{ //se nao tiver cadastrado manda de volta pro login
    $_SESSION["Conecado"]=false;
    header("location: http://localhost/Projetos/index.php");
}

?>

