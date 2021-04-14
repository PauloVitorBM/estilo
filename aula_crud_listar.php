<?php
session_start();
include_once("conexao.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Crud - Listar</title>
		<link rel = stylesheet href="estilo.css"/>
	</head>
	<body>

			<a href="aula_crud_inserir.php">Cadastrar</a>
			<?php
			
			echo "<h1>Listar estilos</h1>";
			
			if(isset($_SESSION['msg'])){
				echo "<p>".$_SESSION['msg']."</p>";
				unset($_SESSION['msg']);
			}
			 
			$result_qnt_estilo= "SELECT COUNT(codigo) AS qnt_estilos FROM estilo";
			$resultado_qnt_estilo = mysqli_query($conn, $result_qnt_estilo);
			$row_qnt_estilo = mysqli_fetch_assoc($resultado_qnt_estilo);
			echo "<h3>Quantidade de Estilos: " . $row_qnt_estilo['qnt_estilos'] . "</h3>";
			
			$result_estilos = "SELECT estilo.*
			FROM estilo"; 
			$resultado_estilos = mysqli_query($conn, $result_estilos);
			echo  '<table  border = 1px  width=300px height=200px id="t">';
			 
			while($row_estilo = mysqli_fetch_assoc($resultado_estilos)){
				echo '<tr>';
				echo '<td>';
				echo "Código: " . $row_estilo['codigo'];
				
				echo '</td>';
				echo '<td>';
				echo "Nome: " . $row_estilo['nome'] ;
				echo '</td>';
				
				echo '<td>';
				echo "<a href='aula_crud_editar.php?codigo=" . $row_estilo['codigo'] . "'>Editar</a>";
				echo '</td>';
				
				echo '<td>';
				echo "<a href='aula_crud_apagar.php?codigo=" . $row_estilo['codigo'] . "'>Apagar</a>";
				echo '</td>';

				
				echo '</tr>';
			}
			echo '</table>';
		?>
	</body>
</html>