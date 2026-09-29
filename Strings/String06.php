<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String06</title>
</head>
<body>
<?php
$log = "192.168.1.25 - GET /productos/listado.php - 200 - Mozilla/5.0";
 

$partes = explode(" - ", $log);
$ip = $partes[0];
$metodoRecurso = $partes[1];
$codigo = $partes[2];
$navegador = $partes[3];
 

$partesMetodo = explode(" ", $metodoRecurso);
$metodo = $partesMetodo[0];
$recurso = $partesMetodo[1];
 

$postPunto = strrpos($recurso, ".");
$extension = substr($recurso, $postPunto + 1);
$tipoRecurso = strtoupper($extension);
 

$correcta = ($codigo == "200") ? "SI" : "NO";
 
echo "IP: " . $ip . "<br>";
echo "Método: " . $metodo . "<br>";
echo "Recurso: " . $recurso . "<br>";
echo "Código HTTP: " . $codigo . "<br>";
echo "Navegador: " . $navegador . "<br>";
echo "Tipo de recurso: " . $tipoRecurso . "<br>";
echo "Petición correcta: " . $correcta;
?>
</body>
</html>