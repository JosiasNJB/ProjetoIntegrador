<!DOCTYPE html>
<html>
	<!-- A tag <head> tem o papel de definir o cabeçalho do documento com informações que não serão exibidas dentro do conteúdo da página.-->
	<head>
		<link rel="stylesheet" href="css/styles.css">
		<meta charset="utf-8">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
		<script type = "text/javascript" src = "https://code.jquery.com/jquery-2.1.1.min.js"></script>
		<link rel="icon" type ="image/x-icon" href="img/favicon.ico">
		<link rel="stylesheet" type="text/css" href="css/styles.css">

		<?php

			//Start session/incluindo "conexao.php"
			if (session_status() === PHP_SESSION_NONE) {
				session_start();
			}
			
			require 'conexao.php';

			if(!isset($_SESSION['logado'])){
				$_SESSION['logado'] = false;
			}

			$usuarios = "";

			if($_SESSION['logado'] == true){

				$id = $_SESSION['idu'];

				$sql = "SELECT nome, adm from user where id_user = $id;";
				
				$resultado = mysqli_query($connect, $sql);

				$array = mysqli_fetch_array($resultado);
				
				$nome = $array[0];
				$adm = $array[1];

				if($adm == '1'){
					$usuarios = "<li><a href='usuarios.php'>Usuários</a></li>";
					
				}
				else{
					$usuarios = "";
				}

				$perfil = "<li> $nome </li>";
				$logout = "<li><a href='logout.php'>Log out</a></li>";
				$onoff = "";

				$title = $nome;

			}
			else{
				$perfil = "";
				$logout = "";
				$onoff = "<li><a href='login.php'>Login</a></li>";
				$title = "Yby";
			}
			
			
		?>

		<title> <?php echo $title; ?></title>

	</head>

	<!-- A tag <body> é basicamente o corpo do nosso documento.-->
	<body>

		<header>

			<!-- A tag <figure> serve para marcar diagramas, ilustrações, fotos, e fragmentos de código.-->
			<figure>
				<a href="index.php"><img src="img/icon-forest-0.png" id="treeimg"alt="Yby"></a>
				<td> Yby </td> 
			</figure> 
				
			<div class="menu">

				<li><a href="index.php">Home</a></li>
				<li><a href="sobre.php">Sobre</a></li>
				<?php echo $onoff; ?>
				<li><a href="contato.php">Contato</a></li>
				<li><a href="depoimentos.php">Depoimentos</a></li>
				<?php echo $usuarios; ?>
				<?php echo $logout; ?>
				<?php echo $perfil; ?>
				
				
			</div>
				
		</header>
