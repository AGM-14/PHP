<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bucles03</title>
</head>
<body>

<table border="1">
<tr><th>Operacion</th><th>Resultado</th></tr>
    <?php

    $num1 =3;
    $num2 =7;
    $resultado= 0;

    for($num1=3 ; $num1 <= $num2; $num1++){
    for($i = 1; $i <= 10 ; $i++){
        $resultado = $num1 * $i;
        echo "<tr><td>" . $num1 . " x " . $i . "</td><td>" . $resultado . "</td></tr>";
        }

    }
    ?>
    </table>
</body>
</html>