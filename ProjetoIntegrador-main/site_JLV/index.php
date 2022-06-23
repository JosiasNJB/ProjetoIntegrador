<!DOCTYPE html>
<hmtl>
		
	<!-- A tag <head> tem o papel de definir o cabeçalho do documento com informações que não serão exibidas dentro do conteúdo da página.-->
	<head>
		<meta charset="utf-8">
		<title>Yby</title>
		<link rel="icon" type ="image/x-icon" href="img/favicon.ico">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
		<link rel="stylesheet" type="text/css" href="css/styles.css">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

	</head>
	
	<!-- A tag <body> é basicamente o corpo do nosso documento.-->
	<body>
		<?php include_once 'header.php';?>

		<!-- A tag <section> para marcar as seções de conteúdo de uma página.-->
		<section>
				<div id="demo" class="carousel slide" data-ride="carousel">

		<!-- Indicadores -->
		<ul class="carousel-indicators">
		<li data-target="#demo" data-slide-to="0" class="active"></li>
		<li data-target="#demo" data-slide-to="1"></li>
		<li data-target="#demo" data-slide-to="2"></li>
		</ul>

		<!-- Os slides-->
		<div class="carousel-inner">
		<div class="carousel-item active">
			<img src="amarelo.png" alt="economia" width="1100" height="500">
		</div>
		<div class="carousel-item">
			<img src="chicago.jpg" alt="Chicago" width="1100" height="500">
		</div>
		<div class="carousel-item">
			<img src="ny.jpg" alt="New York" width="1100" height="500">
		</div>
		</div>

		<!-- Esquerda e Direita (Setas) -->
		<a class="carousel-control-prev" href="#demo" data-slide="prev">
		<span class="carousel-control-prev-icon"></span>
		</a>
		<a class="carousel-control-next" href="#demo" data-slide="next">
		<span class="carousel-control-next-icon"></span>
		</a>
		</div>
		</section>
		
		<!-- A tag <footer> é utilizada para definir o rodapé do documento.-->
		<?php include_once 'footer.php';?>
	</body>
</html>

