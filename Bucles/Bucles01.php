<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bucles01</title>
</head>
<body>
    <?php
    $inicio=1;
    $fin=100;

    $numerosTotales = 0;
    $numerosPares = 0;
    $numerosImpares= 0;
    $multiplosTres=0;
    $sumaTotal=0;

    for($numeroActual = $inicio; $numeroActual <= $fin; $numeroActual++) {
    $numerosTotales++;

    if ($numeroActual % 2 == 0){
        $numerosPares++;
    }else {
        $numerosImpares++;
    }

    if ($numeroActual % 3==0){
        $multiplosTres++;
    }

    $sumaTotal = $sumaTotal + $numeroActual;
    }

    echo "Numeros del 1 al 100" . "<br>";
    echo " " . "<br>";
    echo "Cantidad de numeros: " . $numerosTotales . "<br>";
    echo "numeros pares: " . $numerosPares . "<br>";
    echo "numeros impares: " . $numerosImpares . "<br>";
    echo "numeros multiplos de 3: " . $multiplosTres . "<br>";
    echo "suma total: " . $sumaTotal;
    ?>
</body>
</html>