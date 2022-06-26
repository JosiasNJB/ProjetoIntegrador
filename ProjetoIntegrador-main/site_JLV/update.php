<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="icon" type ="image/x-icon" href="img/favicon.ico">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
		<link rel="stylesheet" type="text/css" href="css/styles.css">

		<?php

            if (session_status() === PHP_SESSION_NONE) {
                session_start();
            }

			require 'conexao.php';
			
            if(isset($_REQUEST['id'])){
                $_SESSION['id2'] = $_REQUEST['id'];

            }

			//Isset determina que os campos do formulario nao sao nulos.
			if(isset($_REQUEST['btn_Send'])){

				$erros = array();

				//Criando e atribuindo às respectivas variaveis os valores inseridos nos campos do formulario.
				$id2 = $_SESSION['id2'];
				$nome=$_REQUEST['nome'];
				$email=$_REQUEST['email'];
				$senha = $_REQUEST['senha'];
				if(isset($_REQUEST['etnia'])){
					$etnia = $_REQUEST['etnia'];
				}

				else{
					$erros[] = "<li>O campo etnia precisa ser preenchido</li>";
				}

				if(empty($nome)){
					$erros[] = "<li>O campo nome precisa ser preenchido</li>";
				}

				if(empty($email)){
					$erros[] = "<li>O campo email precisa ser preenchido corretamente</li>";
				}
				else{
					if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
						$erros[] = "<li>O campo email precisa ser preenchido corretamente</li>";
					}
				}

				if(empty($senha)){
					$erros[] = "<li>O campo senha precisa ser preenchido</li>";
				}

			

				if(!empty($erros)){

					foreach($erros as $erro){
						echo $erro;
					}
				}

				else{

					//Sql query para inserir os valores obtidos na tabela
					$sql="UPDATE user set nome='$nome', email='$email', senha='$senha', etnia='$etnia' WHERE id_user = $id2 ;";
	
					
					
					/*Msqli_query aplica a string "$sql"
					e se o insert for devidamente realizado header direciona o usuario para a pagina de login.
					*/ 
					if (mysqli_query($connect, $sql)){
						header('location: usuarios.php');
					}
					else{
						header('location: update.php');
					}
				
				}
        
			}

		?>

    </head>
    <body>

        <?php include_once 'header.php';?>
        
		<br><br>
        <h3>Update</h3>
		<br><br>

        <section>
			<!-- a tag <form> possibilita o uso de formularios -->
			<form class="col s12" method="get" >

				<!-- <div> é a tag usada para dividir e organizar o documento -->
				<div class="row">
					
					<div class="input-field col s6">
						<input id="nome" type="text" class="validate" name="nome">
						<label for="nome">Nome</label>
					</div>

					<div class="input-field col s6">
						<input id="email" type="text" class="validate" name="email">
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

				<div>
					<button class="btn btn-outline-success" type="submit" name="btn_Send">Enviar</button>
				</div>

				<br>

			</form>


		</section>

		<br><br><br>

		<?php include_once 'footer.php';?>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    </body>
</html>
