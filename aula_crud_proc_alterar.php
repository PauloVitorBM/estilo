<?php
session_start();
include_once("conexao.php");

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$codigo = filter_input(INPUT_POST, 'codigo', FILTER_SANITIZE_NUMBER_INT);

$result_estilo= "UPDATE estilo SET 
	nome='$nome'
	WHERE codigo='$codigo'";
	
$resultado_estilo = mysqli_query($conn, $result_estilo);
if(mysqli_affected_rows($conn)){
	$_SESSION['msg'] = "<span style='color:green;'> Estilo editado com sucesso</span>";
	header("Location: aula_crud_listar.php");
}else{
	$_SESSION['msg'] = "<span style='color:red;'> Estilo não foi editado com sucesso</span>";
	header("Location: aula_crud_editar.php");
}