<?php
session_start();
include_once("conexao.php");
$codigo = filter_input(INPUT_GET, 'codigo', FILTER_SANITIZE_NUMBER_INT);
$result_estilo = "SELECT * FROM estilo WHERE codigo='$codigo' LIMIT 1";
$resultado_estilo = mysqli_query($conn, $result_estilo);
$row_estilo = mysqli_fetch_assoc($resultado_estilo);
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Crud - Editar</title>
	</head>
	<body>
		<a href="aula_crud_listar.php">Listar</a>
		<h1>Editar Estilo</h1>
		<?php
		if(isset($_SESSION['msg'])){
			echo "<p>".$_SESSION['msg']."</p>";
			unset($_SESSION['msg']);
		}
		?>
		<form method="POST" action="aula_crud_proc_alterar.php">
			<label>Nome: </label>
			<input type="text" name="nome" value="<?php echo $row_estilo['nome']; ?>"><br><br>
			
			<input type="hidden" name="codigo" value="<?php echo $row_estilo['codigo']; ?>">
			
			<input type="submit" value="Salvar">
			
		</form>
	</body>
</html>