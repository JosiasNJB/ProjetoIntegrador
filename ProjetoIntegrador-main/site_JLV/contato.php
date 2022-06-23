<!DOCTYPE html>
<hmtl>
		
	<head>
		<meta charset="utf-8">
		<title>Yby</title>
		<link rel="icon" type ="image/x-icon" href="img/favicon.ico">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
		<link rel="stylesheet" type="text/css" href="css/styles.css">
	</head>
	
	<body>

		<?php include_once 'header.php';?>
		
		<!-- A tag <section> para marcar as seções de conteúdo de uma página.-->
		<section>
		<h3>Contato</h3>
			<!-- Resumidamente, tag <form> possibilita que trabalhemos com formulários.-->
			<form>
				<div class="row">
					
					<div class="input-field col s6">
						<input id="nome" type="text" class="validate">
						<label for="nome">Nome</label>
					</div>

					<div class="input-field col s6">
						<input id="sobrenome" type="text" class="validate">
						<label for="sobrenome">Sobrenome:</label>
					</div>

					<div class="input-field col s6">
						<input id="email" type="email" class="validate">
						<label for="email">E-Mail:</label>
					</div>

					<div class="input-field col s6">
						<input id="numero" type="tel" pattern="[0-9]{9}" class="validate" >
						<label for="numero">Telefone:</label>
					</div>

				</div>

				<div class="input-field col s12">
					<textarea id="textarea1" class="materialize-textarea"></textarea>
					<label for="textarea1">Mensagem:</label>
			    </div>

				<br>
				<br>

				<div>
					<button class="btn waves-effect waves-light" type="submit" name="action">Enviar</button>
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
				Site official: https://serra.ifes.edu.br/
				</p>
			</p>
			<br>
			<br>
			<p>Encontre mais informações aqui: https://ifes.edu.br/noticias/2-uncategorised/19345-contatos-dos-neabi-no-ifes

			<br>
			<br>
			</section>

		<?php include_once 'footer.php';?>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>	
	</body>
</html>