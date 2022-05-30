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

		<header>

			<!-- A tag <figure> serve para marcar diagramas, ilustrações, fotos, e fragmentos de código.-->
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
		
		<!-- A tag <section> para marcar as seções de conteúdo de uma página.-->
		<section>
			<h3>Depoimentos</h3>

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
		</section>

		<!-- A tag <footer> é utilizada para definir o rodapé do documento.-->
		<footer>Todos os direitos reservados</footer>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>	
	</body>
</html>