<?php
	$servidorBD = "localhost";
	$usuario = "root";
	$senha = "";
	$database = "usuario";
	
	$conexao = mysqli_connect($servidorBD, $usuario, $senha,$database);
	if(mysqli_connect_errno()) {
		echo "Falha ao conectar no banco de dados".mysqli_connect_error();	
	}

?>