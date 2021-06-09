<?php require_once "estudiante.php"; ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Clase Estudiante</title>
</head>
<body>
	<?php
		$estudiante = new Estudiante(123, "Miguel Ángel", "Vargas Beltrán", "mangelvargasb@gmail.com", 13);
	?>
	<h1><?php echo $estudiante->calcularNotaFinal() ?></h1>
</body>
</html>
