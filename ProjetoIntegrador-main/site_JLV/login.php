<!DOCTYPE html>
<hmtl>
		
	<head>
		<meta charset="utf-8">
		<title>Página de login</title>
		<link rel="icon" type ="image/x-icon" href="img/favicon.ico">
		<link rel="stylesheet" type="text/css" href="css/styles.css">

		
		<?php
			if (session_status() === PHP_SESSION_NONE) {
				session_start();
			}

			require 'conexao.php';

			//isset determina que o botao foi ativado.
			if (isset($_REQUEST['btn_login'])){

				$erros = array();

				$em = $_REQUEST['email'];
				
				$sen = $_REQUEST['senha'];

				//colocando mensagens no array de erros
				if(empty($em)){
					$erros[] = "<li>O campo email precisa ser preenchido</li>";
				}

				if(empty($sen)){
					$erros[] = "<li>O campo senha precisa ser preenchido</li>";
				}

				if(!empty($erros)){

					foreach($erros as $erro){
						echo $erro;
					}
				}

				else{

					//mysqli_escape_string - função que limpa os dados e evita sqlinjection e outros caracteres indevidos.
					//Cryptografando a senha
					$senha = md5(mysqli_escape_string($connect, $sen));

					//Query de sql como uma string
					$sql = "SELECT id_user, email, senha from user where email = '$em' and senha = '$sen' ";
					
					/* Está retornando, de dentro da tabela representada pela variável "$connect",
					um array que contém todos os resultados que atendem aos requisitos da consulta
					dentro de "$sql".
					*/
					$resultado = mysqli_query($connect, $sql);


					/* Se o array que contém os resultados da consulta tiver pelo menos 1 index,
					"$dados" irá buscar um array contendo os dados do index,
					então ele salva um boolean que diz que o usuário está logado
					e salva o id do usuário.
					*/
					if (mysqli_num_rows($resultado) > 0){
						
						$dados = mysqli_fetch_array($resultado);
						$_SESSION['logado'] = true;
						$_SESSION['idu'] = $dados['id_user'];

					}

						else{
							$erros[] = "<li>Usuário e senha não conferem.</li>";
							foreach($erros as $erro){
								echo $erro;
							}
						}
					}

				}	

					

		?>

	</head>
	
	<body>

		<?php include_once 'header.php';?>

		<section>
		
			<br><br>
			<h3>Página de Login</h3>
			<br><br>
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

				<div class="btnSubmit">
					<button type="submit" class="btn btn-outline-success" name="btn_login"> Enviar </button>
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

		<?php include_once 'footer.php';?>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
		
	</body>
</html>
