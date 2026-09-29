<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String02</title>
</head>
<body>
    <?php
    $nombre = "aLBeRTo gaRCia loPEz";

    $normalizado = ucwords(strtolower(trim($nombre)));

    echo "El nombre original es: " . $nombre . "<br>";
    echo "El nombre normalizado es: " . $normalizado;
    ?>
</body>
</html>