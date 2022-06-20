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
	</head>
	
	<!-- A tag <body> é basicamente o corpo do nosso documento.-->
	<body>
		<?php include_once 'header.php';?>

		<!-- A tag <section> para marcar as seções de conteúdo de uma página.-->
		<section>

		<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  			<div class="carousel-inner">
    			<div class="carousel-item active">
      				<img class="d-block w-100" src="..." alt="First slide">
    			</div>
				
    			<div class="carousel-item">
      				<img class="d-block w-100" src="..." alt="Second slide">
    			</div>

   				<div class="carousel-item">
      				<img class="d-block w-100" src="..." alt="Third slide">
    			</div>
			</div>
  			<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
   				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
    			<span class="sr-only">Previous</span>
  			</a>
  			<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    			<span class="carousel-control-next-icon" aria-hidden="true"></span>
    			<span class="sr-only">Next</span>
  			</a>
		</div>

		</section>
		
		<!-- A tag <footer> é utilizada para definir o rodapé do documento.-->
		<?php include_once 'footer.php';?>
	</body>
</html>