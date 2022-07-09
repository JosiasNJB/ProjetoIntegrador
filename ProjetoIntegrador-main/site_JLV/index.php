
		<?php
			if (session_status() === PHP_SESSION_NONE) {
				session_start();	
			}
			include_once 'header.php';
		?>

		<br><br>
		<!-- Carousel em progresso -->
		<div class="container">
			<div class="carousel carousel-slider" id="demo-carousel-indicators" data-indicators="true">
			
				<a class="carousel-item" href="#one!"><img src="img/wild.jpg"></a>
			
				<a class="carousel-item" href="#two!"><img src="img/floresta2.jpg"></a>
			
				<a class="carousel-item" href="#three!"><img src="img/forest.jpg"></a>
			
				<a class="carousel-item" href="#four!"><img src="img/floresta.jpg"></a>
			
				<a class="carousel-item" href="#five!"><img src="img/arvore.jpg"></a>
			</div>	
		</div>
		
		<script>
			$(document).ready(function(){
			
			$('#demo-carousel-indicators').carousel();
			
			});
		</script>

		<?php include_once 'footer.php';?>			
