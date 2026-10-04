<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bucles06</title>
</head>
<body>
    <?php
        $capital = 1000;
        $interes = 5;
        $anios = 5;

        echo "Capital inicial: " . number_format($capital, 0, '.', '') . " &euro;<br><br>";

        for ($anio = 1; $anio <= $anios; $anio++) {
            $capital *= 1 + $interes / 100;
            echo "Año " . $anio . ": " . number_format($capital, 2, '.', '') . " &euro;<br>";
        }

        echo "<br>Capital final: " . number_format($capital, 2, '.', '') . " &euro;";
    ?>
</body>
</html>