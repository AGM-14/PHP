<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bucles04</title>
</head>
<body>

<table border="1">
<tr><th>Operacion</th><th>Resultado</th></tr>
    <?php

    $num = 17;
    $esPrimo= true;

    for($i = 2; $i <= $num-1 ; $i++){
        if($num % $i == 0){
            echo "El numero " . $i . " es divisible";
            $esPrimo = false;
        } else {
            echo "El numero " . $i . " no es divisible";
        }
        echo "<br>";
    }

    if($esPrimo){
    echo $num . " es un numero primo ";
    }else{
    echo $num . " no es un numero primo";
    }
    ?>
    </table>
</body>
</html>