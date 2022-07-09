
		<?php

			require 'conexao.php';

			if(isset($_POST['btn_D'])){



				$erros = array();

				$tema=$_POST['tema'];
				$grupo=$_POST['grupo'];
				$dep=$_POST['dep'];


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

			include_once 'header.php';

		?>	
		
		<!-- A tag <section> para marcar as seções de conteúdo de uma página.-->
		<section>
			<br><br>
			<h3>Depoimentos</h3>
			<br><br>

			<!-- Resumidamente, tag <form> possibilita que trabalhemos com formulários.-->
				
			<form method="post">
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
				<button class="btn waves-effect waves-light" type="submit" name="btn_D"> Enviar</button>
				</div>

				<br>
				<br>

			</form>
			<br>
		</section>

		<br><br>

		<?php include_once 'footer.php';?>	