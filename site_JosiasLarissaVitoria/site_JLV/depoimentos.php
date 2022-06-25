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
			<h1>Depoimentos</h1>

			<!-- Resumidamente, tag <form> possibilita que trabalhemos com formulários.-->
				
			<form>
				<div class="row">
					
					<div class="input-field col s6">
						<input id="nome" type="text" class="validate">
						<label for="nome">Tema:</label>
					</div>

					<div class="input-field col s6">
						<input id="sobrenome" type="text" class="validate">
						<label for="sobrenome">Grupo a que pertence:</label>
					</div>

				</div>

				<div class="input-field col s12">
					<textarea id="textarea1" class="materialize-textarea"></textarea>
					<label for="textarea1">Seu Depoimento:</label>
			    </div>

				<br>
				<br>

				<div>
					<button class="btn waves-effect waves-light" type="submit" 
					name="action">Enviar<i class="material-icons right"></i></button>
				</div>

				<br>
				<br>

			</form>
			<br>
		</section>

		<?php include_once 'footer.php';?>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>	
	</body>
</html>