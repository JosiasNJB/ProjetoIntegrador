<!DOCTYPE html>
<hmtl>
		
	<head>
		<meta charset="utf-8">
		<title>Página de login</title>
		<link rel="icon" type ="image/x-icon" href="img/favicon.ico">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
		<link rel="stylesheet" type="text/css" href="css/styles.css">

		<?php

			require 'conexao.php';
			session_start();

			if (isset($_REQUEST['btn_login'])){

				$erros = array();

				if(isset($_REQUEST['email']) && isset($_REQUEST['senha'])){

					$em = $_REQUEST['email'];
					$sen = $_REQUEST['senha'];

					echo $em;
					echo $sen;

					//mysqli_escape_string - função que limpa os dados e evita sqlinjection e outros caracteres indevidos.
					$email = mysqli_escape_string($connect, $em);
					$senha = mysqli_escape_string($connect, $sen);

					if(empty($email) or empty($senha)){
						
						$erros[] = "<li> O campo login/senha precisa ser preenchido </li>";
					}

					else{
					

						//Cryptografando a senha
						$senha = md5($senha);

						//Query de sql como uma string
						$sql = "SELECT email, senha from user where email = '$email' and senha = '$senha' ";
						
						/* method is returning, from inside of the table represented by the variable "$connect",
						an array that contains all of the results that meet the requirements of the query
						inside of "$sql".

						está retornando, de dentro da tabela representada pela variável "$connect",
						um array que contém todos os resultados que atendem aos requisitos da consulta
						dentro de "$sql".
						*/
						$resultado = mysqli_query($connect, $sql);

						mysqli_close($connect);


						/* if the array containing the query results has at least 1 index,
						"$dados" will fetch an array containing the data from the index,
						then it saves a boolean that says the user is logged in
						as well as saves the user's id.

						se o array que contém os resultados da consulta tiver pelo menos 1 index,
						"$dados" irá buscar um array contendo os dados do index,
						então ele salva um boolean que diz que o usuário está logado
						e salva o id do usuário.
						*/
						if (mysqli_num_rows($resultado) > 0){
							$dados = mysqli_fetch_array($resultado);
							$_SESSION['logado'] = true;
							$_SESSION['id_usuario'] = $dados['id'];

							header('Location: index.php');
						}

						else{
							$erros[] = "<li>Usuário e senha não conferem.</li>";
						}
					}
				}
			}	

		?>
		
	</head>
	
	<body>

		<header>

			<figure>
				<a href="index.html"><img src="img/icons8-forest-30.png" alt="Yby"></a>
				<td> Yby </td> 
			</figure> 

			<div class="menu">
				<li><a href="index.php">Home</a></li>
				<li><a href="sobre.php">Sobre</a></li>
				<li><a href="login.php">Login</a></li>
				<li><a href="contato.php">Contato</a></li>
				<li><a href="depoimentos.php">Depoimentos</a></li>
			</div>
			
		</header>

		<section>

			<h3>Página de Login</h3>

			<!-- a tag <form> possibilita o uso de formularios -->
			<form class="col s12" method="get">

				<!-- <div> é a tag usada para dividir e organizar o documento -->
				<div class="row">

					<div class="input-field col s12">
						<input id="email" type="text" name="email" class="validate">
						<label for="email">E-Mail </label>
					</div>
				</div>

				<div class="row">
					<div class="input-field col s12">
						<input id="senha" type="password" name="senha" class="validate">
						<label for="textarea1">Senha</label>
					</div>
				</div>

				<br>

				<div>
					<button class="btn waves-effect waves-light" type="submit" name="btn_login">Enviar</button>
				</div>

				<br>

			</form>
		</section>

		<br>
		<br>

		<div>
			<a href="cadastro.php"> Não tem um login? Cadastre-se agora!</a>
		</div>

		<br>
		<br>
		<br>

		<!-- A tag <footer> é utilizada para definir o rodapé do documento.-->
		<footer>Todos os direitos reservados</footer>

		<?php

		if(!empty($error)){
			foreach($error as $error){
				echo $error;
			}

		}


		?>




		<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>	
	</body>
</html>
