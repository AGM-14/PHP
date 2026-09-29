<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String04</title>
</head>
<body>
   <?php
$titulo = "Introducción a la Programación Web con PHP";
 
$paso1 = trim($titulo);
$paso2 = strtolower($paso1);
 
$conAcentos = array("á", "é", "í", "ó", "ú", "ñ");
$sinAcentos = array("a", "e", "i", "o", "u", "n");
$paso3 = str_replace($conAcentos, $sinAcentos, $paso2);
 
$slug = str_replace(" ", "-", $paso3);
 
echo "http://" . $slug;
?> 
</body>
</html>