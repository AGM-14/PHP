<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cartón de Bingo</title>
    <style>
        table { border-collapse: collapse; }
        td { border: 1px solid #333; width: 40px; height: 40px; text-align: center; }
    </style>
</head>
<body>

<?php
$carton = [];

for ($columna = 0; $columna < 7; $columna++) {

    if ($columna == 6) {
        $carton[$columna] = ["", 60, ""];

    } else {

        $min = ($columna * 10) + 1;
        $max = ($columna + 1) * 9;

       if($columna == 5){
        $max = 59;
       }

        $numerosColumna = [];

        while (count($numerosColumna) < 3) {
            $numero = rand($min, $max);

            if (!in_array($numero, $numerosColumna)) {
                $numerosColumna[] = $numero;
            }

        }
        $carton[$columna] = $numerosColumna;
    }
  }
$nulls = 0;

while ($nulls < 4) {

    if ($carton[rand(0, 4)][rand(0, 2)] !== "") 
    {
        $carton[rand(0, 4)][rand(0, 2)] = "";
        $nulls++;
    }
}


print "<table>";

for ($fila = 0; $fila < 3; $fila++) {

    print "<tr>";

    for ($columna = 0; $columna < 7; $columna++) {
        print "<td>" . $carton[$columna][$fila] . "</td>";
    }

    print "</tr>";
}
print "</table>";
?>

</body>
</html>