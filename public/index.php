<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Encuesta ASPEN</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/main.css">

	
</head>
<body>
	<div class="columndrop-row">
		<header class="text-center">
			<h1><small>Encuesta</small> ASPEN</h1>
		</header>
		
		<!--FORM-->
		<section>
			<div id="steps">
				<form action="sendData.php" method="post"  name="form_survey" id="form_survey">
					
					<!--1 PART-->
					<fieldset class="step">
						
						<div class="form-group">
							<label for="input_name" class="col-sm-3 control-label">Nombre Completo: </label>
							<div class="col-sm-9">
								<input type="text" class="form-control" id="input_name" placeholder="Nombre Apellido paterno Apellido materno">
							</div>
						</div>

						<div class="form-group">
							<label for="input_puesto" class="col-sm-3 control-label">Puesto: </label>
							<div class="col-sm-9">
								<input type="text" class="form-control" id="input_puesto" placeholder="Puesto">
							</div>
						</div>

						<div class="form-group">
							<label for="input_ingreso" class="col-sm-3 control-label">Ingreso de labores Aspen: </label>
							<div class="col-sm-9">
								<input type="text" class="form-control" id="input_ingreso" placeholder="Ingreso de labores Aspen">
							</div>
						</div>

						<div class="form-group">
							<label for="input_edad" class="col-sm-3 control-label">Edad: </label>
							<div class="col-sm-9">
								<input type="text" class="form-control" id="input_edad" placeholder="Edad">
							</div>
						</div>

					</fieldset>

					<!--2 PART-->
					<fieldset class="step">
						
						<div class="form-group">
							<label for="input_edad" class="col-sm-3 control-label">Edad: </label>
							<div class="col-sm-9">
								<input type="text" class="form-control" id="input_edad" placeholder="Ingreso de labores Aspen">
							</div>
						</div>

					</fieldset>
				
				</form>

			</div>	

			<nav id="navigation">
				<ul>
					<li class="selected">
						<a href="#">Datos Personales</a>
					</li>
					<li>
						<a href="#">Informaci&oacute;n Gral.</a>
					</li>

				</ul>	
			</nav>

		</section>

	</div>
	
	<!--JQUERY-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src="js/main.js"></script>

	<!--JS BOOTSTRAP-->
	<script src="js/bootstrap.js"></script>
	
</body>
</html>