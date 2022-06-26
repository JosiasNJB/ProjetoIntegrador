<!DOCTYPE html>
<hmtl>
		
	<!-- A tag <head> tem o papel de definir o cabeçalho do documento com informações que não serão exibidas dentro do conteúdo da página.-->
	<head>
		<meta charset="utf-8">

		<link rel="icon" type ="image/x-icon" href="img/favicon.ico">
		<link rel="stylesheet" type="text/css" href="css/styles.css">

	</head>
	
	<!-- A tag <body> é basicamente o corpo do nosso documento.-->
	<body>
		<?php include_once 'header.php';?>

		<br><br>
		<!-- Carousel em progresso -->
		<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
			
			<div class="carousel-indicators">
				<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
				<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
				<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
			
			</div>

			<div class="carousel-inner">
				<div class="carousel-item active">
					<img src="..." class="d-block w-100" alt="...">
				</div>

				<div class="carousel-item">
					<img src="..." class="d-block w-100" alt="...">
				</div>

				<div class="carousel-item">
					<img src="..." class="d-block w-100" alt="...">
				</div>

			</div>

			<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Previous</span>

			</button>

			<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Next</span>

			</button>

		</div>

		<?php include_once 'footer.php';?>			
	</body>
</html>

