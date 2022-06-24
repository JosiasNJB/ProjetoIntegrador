<!DOCTYPE html>
<html>
<head>
 	<link rel="stylesheet" href="css/styles.css">
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"></link>
	<link rel="stylesheet" type="text/css" href="css/styles.css">

	<?php

		//Start session/incluindo "conexao.php"
		if (session_status() === PHP_SESSION_NONE) {
			session_start();
		}
		require 'conexao.php';

		if($_SESSION['logado'] == 1){

			$id = $_SESSION['idu'];

			$sql = "SELECT nome from user where id_user = $id;";

			$resultado = mysqli_query($connect, $sql);

			$array = mysqli_fetch_array($resultado);	

			$nome = $array[0];

		}
		else{
			echo "teste";
		}
		
	?>
</head>
<body>

	<!-- A tag <header> é o nosso cabeçalho, mas dessa vez aparecerá.-->
	<header>

		<!-- A tag <figure> serve para marcar diagramas, ilustrações, fotos, e fragmentos de código.-->
		<figure>
			<a href="index.php"><img src="img/icons8-forest-30.png" alt="Yby"></a>
			<td> Yby </td> 
		</figure> 
			
		<div class="menu">
			<li><a href="index.php">Home</a></li>
			<li><a href="sobre.php">Sobre</a></li>
			<li><a href="login.php">Login</a></li>
			<li><a href="contato.php">Contato</a></li>
			<li><a href="depoimentos.php">Depoimentos</a></li>
			<li><a href="usuarios.php">Usuários</a></li>
			<li> <?php echo $nome; ?></li>
			
		</div>
			
	</header>
