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
			<p>
				Fale Conosco!<br>
				Email: nomefalso@Brasil_TerraIndígena.com<br>
				Telefone: +45 666666-666<br>
			</p>

			<!-- Resumidamente, tag <form> possibilita que trabalhemos com formulários.-->
			<form>
				<div class="row">
					
					<div class="input-field col s6">
						<input id="nome" type="text" class="validate">
						<label for="nome">Nome</label>
					</div>

					<div class="input-field col s6">
						<input id="sobrenome" type="text" class="validate">
						<label for="sobrenome">Sobrenome</label>
					</div>

					<div class="input-field col s6">
						<input id="email" type="email" class="validate">
						<label for="email">E-Mail</label>
					</div>

					<div class="input-field col s6">
						<input id="numero" type="tel" pattern="[0-9]{9}" class="validate" >
						<label for="numero">Telefone</label>
					</div>

				</div>

				<div class="input-field col s12">
					<textarea id="textarea1" class="materialize-textarea"></textarea>
					<label for="textarea1">Sugestões</label>
			    </div>

				<br>
				<br>

				<div>
					<button class="btn waves-effect waves-light" type="submit" name="action">Enviar</button>
				</div>

				<br>
				<br>

			</form>


			<br>

			<p>Encontre mais informações aqui: https://ifes.edu.br/noticias/2-uncategorised/19345-contatos-dos-neabi-no-ifes</p>
		</section>

		<?php include_once 'footer.php';?>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>	
	</body>
</html>