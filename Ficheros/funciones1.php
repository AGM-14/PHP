<?php

function rellenar($texto, $longitud) {
    $texto = mb_substr(trim($texto), 0, $longitud);
    return $texto . str_repeat(" ", $longitud - mb_strlen($texto));
}


function formatearFecha($fecha) {
    $partes = explode("-", $fecha);
    return $partes[2] . "/" . $partes[1] . "/" . $partes[0];
}

function camposCompletos($data) {
    foreach ($data as $valor) {
        if (trim($valor) == "") {
            return false;
        }
    }
    return true;
}

function guardarAlumno($file, $nombre, $apellido1, $apellido2, $fecha, $localidad) {
    $linea = rellenar($nombre, 40)
           . rellenar($apellido1, 41)
           . rellenar($apellido2, 42)
           . rellenar(formatearFecha($fecha), 10)
           . rellenar($localidad, 27);

    $fp = fopen($file, "a");
    fwrite($fp, $linea . PHP_EOL);
    fclose($fp);
}
?>