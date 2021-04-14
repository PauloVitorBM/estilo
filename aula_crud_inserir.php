<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Crud - Cadastrar</title>
	</head>
	<body>
		<a href="aula_crud_listar.php">Listar</a>
		<h1>Cadastrar Estilo</h1>
		<?php
		if(isset($_SESSION['msg'])){
			echo "<p>".$_SESSION['msg']."</p>";
			unset($_SESSION['msg']);
		}
		?>
		<form method="POST" action="aula_crud_proc_inserir.php">
			<label>Nome: </label>
			<input type="text" name="nome"><br><br>
			<input type="submit" value="Cadastrar">
			
		</form>
	</body>
</html>