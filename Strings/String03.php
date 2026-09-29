<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String03</title>
</head>
<body>
<?php
$email = "alberto.garcia@educa.madrid.org";
 
$postArroba = strpos($email, "@");
$usuario = substr($email, 0, $postArroba);
$dominio = substr($email, $postArroba + 1);
 
$partesDominio = explode(".", $dominio);
$organizacion = $partesDominio[0];
$extension = $partesDominio[count($partesDominio) - 1];
 

$contieneArroba = (strpos($email, "@") !== false) ? "SI" : "NO";
$terminaOrg = str_ends_with($dominio, ".org") ? "SI" : "NO";
 
echo "Email: " . $email . "<br>";
echo "Usuario: " . $usuario . "<br>";
echo "Dominio: " . $dominio . "<br>";
echo "Organización: " . $organizacion . "<br>";
echo "Extensión: " . $extension . "<br>";
echo "El usuario contiene " . strlen($usuario) . " caracteres.<br>";
echo "El dominio contiene " . strlen($dominio) . " caracteres.<br>";
echo "Contiene @: " . $contieneArroba . "<br>";
echo "Termina en .org: " . $terminaOrg;
?>
</body>
</html>