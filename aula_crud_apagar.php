<?php
session_start();
include_once("conexao.php");
$codigo = filter_input(INPUT_GET, 'codigo', FILTER_SANITIZE_NUMBER_INT);

$result_estilo = "DELETE FROM estilo WHERE codigo='$codigo'";
$resultado_estilo = mysqli_query($conn, $result_estilo);

if(mysqli_affected_rows($conn)){
	$_SESSION['msg'] = "<span style='color:green;'> Estilo apagado com sucesso</span>";
	header("Location: aula_crud_listar.php");
}else{
	$_SESSION['msg'] = "<span style='color:red;'> Estilo não foi apagado com sucesso</span>";
	header("Location: aula_crud_listar.php");
}