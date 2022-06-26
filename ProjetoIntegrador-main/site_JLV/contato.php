<!DOCTYPE html>
<hmtl>
		
	<head>
		<meta charset="utf-8">
		<link rel="icon" type ="image/x-icon" href="img/favicon.ico">
		<link rel="stylesheet" type="text/css" href="css/styles.css">

		<?php

			require 'conexao.php';

			if(isset($_REQUEST['btn_C'])){


				$erros = array();

				$nome=$_REQUEST['nome'];
				$snome=$_REQUEST['snome'];
				$email=$_REQUEST['email'];
				$tel=$_REQUEST['tel'];
				$msg=$_REQUEST['msg'];



				if(empty($nome)){
					$erros[] = "<li>O campo nome precisa ser preenchido</li>";
				}

				if(empty($email)){
					$erros[] = "<li>O campo email precisa ser preenchido</li>";
				}
				else{
					if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
						$erros[] = "<li>O campo email precisa ser preenchido corretamente</li>";
					}
				}

				if(empty($snome)){
					$erros[] = "<li>O campo sobrenome precisa ser preenchido</li>";
				}

				if(empty($tel)){
					$erros[] = "<li>O campo telefone precisa ser preenchido</li>";
				}

				if(empty($msg)){
					$erros[] = "<li>O campo mensagem precisa ser preenchido</li>";
				}

				if(!empty($erros)){

					foreach($erros as $erro){
						echo $erro;
					}
				}

				else{

					$sql = "INSERT 	INTO contato(nome, sobrenome, email, telefone, mensagem) VALUES('$nome', '$snome', '$email', '$tel', '$msg');";

					if (mysqli_query($connect, $sql)){
						header('location: index.php');
					}
					else{
						header('location: contato.php');
					}

				}
			}

		?>
	</head>
	
	<body>

		<?php include_once 'header.php';?>
		
		<!-- A tag <section> para marcar as seções de conteúdo de uma página.-->
		<section>

		<br><br>
		<h3>Contato</h3>
		<br><br>
			<!-- Resumidamente, tag <form> possibilita que trabalhemos com formulários.-->
			<form>
				<div class="row">
					
					<div class="input-field col s6">
						<input id="nome" type="text" class="validate" name="nome">
						<label for="nome">Nome</label>
					</div>

					<div class="input-field col s6">
						<input id="sobrenome" type="text" class="validate" name="snome">
						<label for="sobrenome">Sobrenome:</label>
					</div>

					<div class="input-field col s6">
						<input id="email" type="email" class="validate" name="email">
						<label for="email">E-Mail:</label>
					</div>

					<div class="input-field col s6">
						<input id="numero" type="tel" pattern="[0-9]{9}" class="validate" name="tel" >
						<label for="numero">Telefone:</label>
					</div>

				</div>

				<div class="input-field col s12">
					<textarea id="textarea1" class="materialize-textarea" name="msg"></textarea>
					<label for="textarea1">Mensagem:</label>
			    </div>

				<br>
				<br>

				<div class="btnSubmit">
					<button type="submit" class="btn btn-outline-success" name="btn_C"> Enviar </button>
				</div>

				<br>

			</form>
			<p>
				<h3>Fale Conosco!</h3>

				<p>
				Email: nomefalso@Brasil_TerraIndígena.com<br>
				Telefone: +45 666666-666<br>
				</p>

			</p>

			<br>

			<h3>Fale com o Campus Serra! </h3>
			
			<p>
			Site official: <a href="https://serra.ifes.edu.br/">https://serra.ifes.edu.br/</a>
			</p>

			<br>
			<br>

			<p>Encontre mais informações aqui: <a href="https://ifes.edu.br/noticias/2-uncategorised/19345-contatos-dos-neabi-no-ifes">https://ifes.edu.br/noticias/2-uncategorised/19345-contatos-dos-neabi-no-ifes<a></p>

			<br>
			<br>
			</section>

		<br><br>

		<?php include_once 'footer.php';?>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>	
	</body>
</html>
