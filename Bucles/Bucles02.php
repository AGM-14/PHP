<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bucles02</title>
</head>
<body>

<table border="1">
<tr><th>Operacion</th><th>Resultado</th></tr>
    <?php
    $num =8;
    $resultado= 0;

    for($i = 1; $i <= 10 ; $i++){
    $resultado = $num * $i;
    echo "<tr><td>" . $num . " x " . $i . "</td><td>" . $resultado . "</td></tr>";
    }
    ?>
    </table>
</body>
</html>