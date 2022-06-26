<!DOCTYPE html>
<hmtl>
		
	<head>
		<meta charset="utf-8">
		<title>Yby</title>
		<link rel="icon" type ="image/x-icon" href="img/favicon.ico">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
		<link rel="stylesheet" type="text/css" href="css/styles.css">

		<?php

			require 'conexao.php';

			if(isset($_REQUEST['btn_D'])){



				$erros = array();

				$tema=$_REQUEST['tema'];
				$grupo=$_REQUEST['grupo'];
				$dep = $_REQUEST['dep'];


				if(empty($tema)){
					$erros[] = "<li>O campo tema precisa ser preenchido</li>";
				}

				if(empty($grupo)){
					$erros[] = "<li>O campo grupo precisa ser preenchido</li>";
				}

				if(empty($dep)){
					$erros[] = "<li>O campo departamento precisa ser preenchido</li>";
				}

				if(!empty($erros)){

					foreach($erros as $erro){
						echo $erro;
					}
				}

				else{
					$sql = "INSERT INTO depoimentos(tema, grupo, dep) VALUES('$tema', '$grupo', '$dep');";

					if (mysqli_query($connect, $sql)){
						header('location: index.php');
					}
					else{
						header('location: depoimentos.php');
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
			<h3>Depoimentos</h3>
			<br><br>

			<!-- Resumidamente, tag <form> possibilita que trabalhemos com formulários.-->
				
			<form>
				<div class="row">
					
					<div class="input-field col s6">
						<input id="tema" type="text" class="validate" name="tema">
						<label for="tema">Tema:</label>
					</div>

					<div class="input-field col s6">
						<input id="grupo" type="text" class="validate" name="grupo">
						<label for="grupo">Grupo a que pertence:</label>
					</div>

				</div>

				<div class="input-field col s12">
					<textarea id="textarea1" class="materialize-textarea" name="dep"></textarea>
					<label for="textarea1">Seu Depoimento:</label>
			    </div>

				<br>
				<br>

				<div class="btnSubmit">
					<button type="submit" class="btn btn-outline-success" name="btn_D"> Enviar </button>
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
