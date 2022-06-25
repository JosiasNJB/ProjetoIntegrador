<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="icon" type ="image/x-icon" href="img/favicon.ico">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
		<link rel="stylesheet" type="text/css" href="css/styles.css">

		<?php

			require 'conexao.php';
			
			//Isset determina que os campos do formulario nao sao nulos.
			if(isset($_REQUEST['btn_Send'])){

				//Criando e atribuindo às respectivas variaveis os valores inseridos nos campos do formulario.
				$nome=$_REQUEST['nome'];
				$nome=filter_var($nome, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
				$email=$_REQUEST['email'];
				//criptografando a senha
				$senha=md5($_REQUEST['senha']);
				$etnia=$_REQUEST['etnia'];

				//Sql query para inserir os valores obtidos na tabela
				$sql="INSERT INTO user(nome, email, senha, etnia) VALUES('$nome', '$email', '$senha', '$etnia');";
				
				/*Msqli_query aplica a string "$sql"
				e se o insert for devidamente realizado header direciona o usuario para a pagina de login.
				*/ 
				if (mysqli_query($connect, $sql)){
					header('location: index.php');
				}
				else{
					header('location: cadastro.php');
				}
			}

		?>

    </head>
    <body>

		<?php include_once 'header.php';?>


		<br>
        <h3>Cadastro</h3>

        <section>
			<!-- a tag <form> possibilita o uso de formularios -->
			<form class="col s12" method="get">

				<!-- <div> é a tag usada para dividir e organizar o documento -->
				<div class="row">
					
					<div class="input-field col s6">
						<input id="nome" type="text" class="validate" name="nome">
						<label for="nome">Nome</label>
					</div>

					<div class="input-field col s6">
						<input id="email" type="email" class="validate" name="email">
						<label for="email">E-Mail</label>
					</div>
				</div>

				<div class="row">
					<div class="input-field col s12">
						  <input id="senha" type="password" class="validate" name="senha">
						  <label for="textarea1">Senha</label>
					</div>
				</div>

				<br>

				<div class="input-field col s6">
					<p>Como você se autodeclara?&nbsp;</p>

					<br>
	
					<p>
						<label>
						  <input class="with-gap" name="etnia" type="radio" value="Preto"/>
						  <span>Preto</span>
						</label>
					</p>
	
					<p>
						<label>
						  <input class="with-gap" name="etnia" type="radio" value="Pardo" />
						  <span>Pardo</span>
						</label>
					</p>
	
					<p>
						<label>
						  <input class="with-gap" name="etnia" type="radio" value="Branco" />
						  <span>Branco</span>
						</label>
					</p>

                    <p>
						<label>
						  <input class="with-gap" name="etnia" type="radio" value="Indigena" />
						  <span>Indígena</span>
						</label>
					</p>
	
					<p>
						<label>
						  <input class="with-gap" name="etnia" type="radio" value="Outro"/>
						  <span>Outro</span>
						</label>
					</p>
				</div>

				<br>

				<div class="btnSubmit">
					<button class="btn btn-outline-success" type="submit" name="btn_Send">Enviar</button>
				</div>

				<br>

			</form>


		</section>

		<?php include_once 'footer.php';?>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    </body>
</html>
