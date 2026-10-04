<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>EJ8 Bucles - Conversor decimal a base n</title>
</head>
<body>
	<?php
		$num = 48;
		$base = 8;

		if ($base < 2 || $base > 9) {
			echo "La base debe estar entre 2 y 9.";
		} else {
			$numeroOriginal = $num;
			$resultado = "";

			do {
				$resto = $num % $base;
				$resultado = $resto . $resultado;
				$num = intdiv($num, $base);
			} while ($num > 0);

			if ($base === 2) {
				$resultado = str_pad($resultado, 8, "0", STR_PAD_LEFT);
			}

			echo "Numero " . $numeroOriginal . " en base " . $base . " = " . $resultado;
		}
	?>
</body>
</html>
