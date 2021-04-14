<?php
$servidor = "127.0.0.1";
$usuario = "root";
$senha = "root";
$dbname = "estoque";

//Criar a conexao
$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

//Para resolver problemas de acentuação
mysqli_set_charset($conn,"utf8");


