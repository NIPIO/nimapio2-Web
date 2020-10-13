<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="description" content="Curriculum Vitae de Nicolas Piovano. Hoja de vida del diseñador WEB argentino. Desarrollo Front-End Junior">
	<meta name="viewport" content="width=device-width, initial-scale=1.0 ">		
	<title>Programador Front-End</title>
	<!--Logo-->
	<link rel="shortcut icon" href="images/logo.ico">
	<!--Boot y Jq-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<!--Css-->
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<!--Experiencia y Educacion-->
	<script src="css/experiencia.js"></script>

</head>

<body class="container-fluid" data-spy="scroll" data-target=".navbar">
	<header class="row">
 		
 		<?php @include "nav.html" ?>
	
		<div id="relleno">
			
		</div>

		<div class="text-center col-lg-12 pt-4" id="divPrin">
			<h1 class="display-4 pt-5 mt-5 let-spac"><mark>NICO</mark></h1>
			<h1 class="display-4 pb-5 mb-5 let-spac"><mark>PIOVANO</mark></h1>
		 	<h3 class="display-5 p-5 m-5 text-light">
		 		Maquetador y Diseñador WEB</mark>
		 	</h3>
		</div>
	</header>
<!------------------------------------------------------------------------------------------------------------------------------------->
	
	<section>

		<!--RESUMEN-->
			<div class="container-fluid p-5" id="Resumen">
				<div class="row">
					<picture class="col-lg-4">
						<img src="images/cara.jpg" class="rounded-circle img-fluid mx-auto d-block">
					</picture>

						<?php @include "efectoResumen.html"	?>		
					
				</div>
			</div>

		<!--EDUCACION-->
			<div class="p-5 d-flex" id="educacion">
					<?php @include "educacion.html" ?>
			</div>

		<!--EXPERIENCIA-->
 
			<div class="p-3 mb-5" id="experiencia">
					<?php @include "experiencia.html" ?>
			</div> 
		<!--PORFOLIO-->
			<div class="d-flex text-light" id="porfolio">
		 			<?php @include "porfolio.html" ?> 
			</div>	
		<!--HABILIDADES-->
			<div class="p-5 my-5 d-flex" id="habilidades">
					<?php @include "habilidades.html" ?>
			</div>
		<!--CONTACTO-->			
			<div class="container-fluid p-5" id="contacto">
					<?php @include "contacto.html" ?>
			</div>

	</section>

	<footer>
			<?php @include "footer.html" ?>
	</footer>
</body>
<script type="text/javascript">

$(document).ready(function(){

      var height = $(window).height();

      $('header').height(height);
});

</script>
</html>
