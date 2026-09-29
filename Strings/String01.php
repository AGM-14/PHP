<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>String01</title>
</head>
<body>
     <?php
    $Ip1="192.18.16.204";
    $Ip2="10.33.161.2";

    $Partes1 = explode(".", $Ip1);
    $Partes2 = explode(".", $Ip2);

    $Ip1B0 = sprintf ("%08b", $Partes1[0]);
    $Ip1B1 = sprintf ("%08b", $Partes1[1]);
    $Ip1B2 = sprintf ("%08b", $Partes1[2]);
    $Ip1B3 = sprintf ("%08b", $Partes1[3]);

    $Ip2B0 = sprintf ("%08b", $Partes2[0]);
    $Ip2B1 = sprintf ("%08b", $Partes2[1]);
    $Ip2B2 = sprintf ("%08b", $Partes2[2]);
    $Ip2B3 = sprintf ("%08b", $Partes2[3]);

    echo "La IP " . $Ip1 . " En binario es: " . $Ip1B0 . $Ip1B1 . $Ip1B2 . $Ip1B3;
    echo "La IP " . $Ip2 . " En binario es: " . $Ip2B0 . $Ip2B1 . $Ip2B2 . $Ip2B3;

    ?>
</body>
</html>