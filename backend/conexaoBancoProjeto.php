<?php

$hostname = "localhost";
$bancodedados = "usuarios";
$usuario = "root";
$senha = "";

$conexao = mysqli_connect ($hostname , $usuario, $senha );
mysqli_select_db($conexao,$bancodedados);
if ($conexao ->connect_errno){
	echo "Falha ao conectar : (" . $mysqli -> connect_errno . ") " . $mysqli ->connect_error;
}

?>