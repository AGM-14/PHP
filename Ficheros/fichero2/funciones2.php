<?php
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
    $linea = $nombre . "##" . $apellido1 . "##"  . $apellido2 . "##" .formatearFecha($fecha) . "##" . $localidad;

    // Se me ocurrio despues un implode


    $fp = fopen($file, "a");
    fwrite($fp, $linea . PHP_EOL);
    fclose($fp);
}

?>