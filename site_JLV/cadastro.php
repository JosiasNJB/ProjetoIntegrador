<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="icon" type ="image/x-icon" href="img/favicon.ico">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
		<link rel="stylesheet" type="text/css" href="css/styles.css">

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

        <h3> Pagina de Cadastro</h3>

        <section>
			<!-- a tag <form> possibilita o uso de formularios -->
			<form class="col s12" method="get">

				<!-- <div> é a tag usada para dividir e organizar o documento -->
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
				</div>

				<div class="row">
					<div class="input-field col s12">
						  <input id="senha" type="password" class="validate">
						  <label for="textarea1">Senha</label>
					</div>
				</div>

				<br>

				<div class="input-field col s6">
					<p>Como você se autodeclara?&nbsp;</p>

					<br>
	
					<p>
						<label>
						  <input class="with-gap" name="group1" type="radio" />
						  <span>Preto</span>
						</label>
					</p>
	
					<p>
						<label>
						  <input class="with-gap" name="group1" type="radio"  />
						  <span>Pardo</span>
						</label>
					</p>
	
					<p>
						<label>
						  <input class="with-gap" name="group1" type="radio"  />
						  <span>Branco</span>
						</label>
					</p>

                    <p>
						<label>
						  <input name="group1" type="radio" />
						  <span>Indígena</span>
						</label>
					</p>
	
					<p>
						<label>
						  <input class="with-gap" name="group1" type="radio"  />
						  <span>Outro</span>
						</label>
					</p>
				</div>

				<br>

				<div>
					<button class="btn waves-effect waves-light" type="submit" name="action">Enviar</button>
				</div>

				<br>

			</form>
		</section>

        <!-- A tag <footer> é utilizada para definir o rodapé do documento.-->
        <footer>Todos os direitos reservados</footer>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    </body>
</html>
