<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String05</title>
</head>
<body>
    <?php
$url = "https://www.tienda.es/productos/portatil.php?id=34&marca=lenovo";
 

$postProtocolo = strpos($url, "://");
$protocolo = substr($url, 0, $postProtocolo);
 

$resto = substr($url, $postProtocolo + 3);
 

$posSlash = strpos($resto, "/");
$dominio = substr($resto, 0, $posSlash);
 

$resto2 = substr($resto, $posSlash);
 

$postInterrogante = strpos($resto2, "?");
if ($posInterrogante !== false) {
    $ruta = substr($resto2, 0, $posInterrogante);
    $parametros = substr($resto2, $posInterrogante + 1);
} else {
    $ruta = $resto2;
    $parametros = "";
}
 

$posUltimaBarra = strrpos($ruta, "/");
$fichero = substr($ruta, $posUltimaBarra + 1);
 
echo "--- Salida 1 ---<br>";
echo "Protocolo: " . $protocolo . "<br>";
echo "Dominio: " . $dominio . "<br>";
echo "Ruta: " . $ruta . "<br>";
echo "Fichero: " . $fichero . "<br>";
echo "Parámetros: " . $parametros . "<br><br>";
 
echo "--- Salida 2 ---<br>";
echo "Protocolo: " . $protocolo . "<br>";
echo "Dominio: " . $dominio . "<br>";
echo "Ruta: " . $ruta . "<br>";
echo "Fichero: " . $fichero . "<br>";
 
$pares = explode("&", $parametros);
foreach ($pares as $par) {
    $claveValor = explode("=", $par);
    $clave = $claveValor[0];
    $valor = $claveValor[1];
 
    if ($clave == "id") {
        echo "Id producto=" . $valor . "<br>";
    } elseif ($clave == "marca") {
        echo "Marca=" . $valor . "<br>";
    }
}
?>
</body>
</html>