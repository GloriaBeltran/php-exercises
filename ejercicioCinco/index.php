<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tabla del 20</title>
	<link rel="stylesheet" href="estilos.css">
</head>
<body>
	<div class="tabla">
		<div class="cabecera">
			<h1 class="titulo">Tabla del 20</h1>
		</div>
		<?php
			$multiplicador = 1;
			do {
			?>
				<div class="producto">
					<?php echo(20 * $multiplicador); ?>
				</div>
			<?php
				$multiplicador++;
			} while ($multiplicador <= 10);
		?>
	</div>
</body>
</html>