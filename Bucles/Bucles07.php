<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>EJ7 Bucles07</title>
</head>
<body>
	<?php
		function convertirABinario($numero)
		{
			if ($numero === 0) {
				return "0";
			}

			$binario = "";
			while ($numero > 0) {
				$resto = $numero % 2;
				$binario = $resto . $binario;
				$numero = intdiv($numero, 2);
			}

			return $binario;
		}

		$num = 168;
		echo "Numero " . $num . " en binario = " . convertirABinario($num) . "<br>";
        echo "<br>";

        echo "Numero " . $num . " en binario = " . convertirABinario(128) . "<br>";
        echo "<br>";

        echo "Numero " . $num . " en binario = " . convertirABinario(127) . "<br>";
        echo "<br>";

        echo "Numero " . $num . " en binario = " . convertirABinario(1) . "<br>";
        echo "<br>";

        echo "Numero " . $num . " en binario = " . convertirABinario(2) . "<br>";
	?>
</body>
</html>
