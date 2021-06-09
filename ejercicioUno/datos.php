<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Ver tabla</title>
	<link rel="stylesheet" href="css/datos.css">
</head>
<body>
	<a class="btn-back" href="./"><i class="fas fa-hand-point-left"></i></a>
	<div class="tabla">
		<div class="cabecera">
			<div class="primeraColumna">Operación</div>
			<div class="segundaColumna">Resultado</div>
		</div>
		<?php
			for ($i = 1; $i <= 10; $i++) {
			?>

				<div class="elemento">
					<div class="primeraColumna"><?php echo $_GET["num"]."× $i" ?></div>
					<div class="segundaColumna"><?php echo $_GET["num"]*$i ?></div>
				</div>

			<?php
			}
		?>
	</div>
	<script src="https://kit.fontawesome.com/4060128349.js" crossorigin="anonymous"></script>
</body>
</html>
