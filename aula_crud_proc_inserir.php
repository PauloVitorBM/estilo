<?php
session_start();
include_once("conexao.php");

//$nome = $_POST['nome'];
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);

$result_usuarios = "INSERT INTO estilo (nome) VALUES ('$nome')";
$resultado_usuarios = mysqli_query($conn, $result_usuarios);

if(mysqli_insert_id($conn)){
	$_SESSION['msg'] = "<span style='color:green;'> Estilo cadastrado com sucesso!</span>";
	header("Location: aula_crud_listar.php");
}else{
	$_SESSION['msg'] = "<span style='color:red;'> Estilo não foi cadastrado!</span>";
	header("Location: aula_crud_inserir.php");
}
			