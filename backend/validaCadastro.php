<?php
session_start();
$valor=null;
include("conexaoBancoProjeto.php");
$criar_email=$_POST["Novo_email"];
$criar_senha=$_POST["Nova_senha"];
$criar_email2=$_POST["Novo_email2"];
$criar_senha2=$_POST["Nova_senha2"];
$usu_exis="SELECT * FROM usuario WHERE email='$criar_email'";
$valida_email=mysqli_query($conexao,$usu_exis);
$_SESSION["Novo_email"] = $criar_email;
$_SESSION["Novo_email2"] = $criar_email2;

if($criar_senha == $valor || $criar_senha2== $valor){
    
    header("location: http://localhost/Projetos/frontend/cadastro.php?Complete_o_formulario");
    
     exit;
}
if ($criar_email == $valor || $criar_email2 == $valor || $criar_senha2 == $valor|| $criar_senha == $valor)//verificacao se o usuario nao digitou nada
{
    
     header("location: http://localhost/Projetos/frontend/cadastro.php?erro_sem_dados=true");
     exit;
}
elseif (mysqli_num_rows($valida_email)!= 0){
    header("location: http://localhost/Projetos/frontend/cadastro.php?erro_email=true");
    exit;
}

elseif ($criar_email!=$criar_email2){
    header("location: http://localhost/Projetos/frontend/cadastro.php?erro_mesmo_email_e_senha=true");
    exit;
}

elseif ($criar_email == $criar_email2 && $criar_senha == $criar_senha2)//se tudo estiver certo você volta para o login e pode logar
{
    $criar_senha = md5($criar_senha);
    $sql="INSERT INTO usuario(adm,email,senha) VALUES ('Usuario', '$criar_email', '$criar_senha')";

    mysqli_query($conexao,$sql);
    header("location: http://localhost/Projetos");
}
  
?>



