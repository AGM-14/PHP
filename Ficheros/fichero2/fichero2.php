<?php include "funciones2.php"; ?>
<HTML>
<HEAD><TITLE> Fichero2 - Guardar alumnos </TITLE></HEAD>
<BODY>
<h2>1. fichero2.php</h2>
<form action="fichero2.php" method="post">
    Nombre: <input type="text" name="nombre"><br><br>
    Apellido 1: <input type="text" name="apellido1"><br><br>
    Apellido 2: <input type="text" name="apellido2"><br><br>
    Fecha nacimiento: <input type="date" name="fecha"><br><br>
    Localidad: <input type="text" name="localidad"><br><br>
    <input type="submit" name="enviar" value="Guardar alumno">
    <input type="reset" value="Limpiar">
</form>

<?php
if (isset($_POST["enviar"])) {
    $nombre    = $_POST["nombre"];
    $apellido1 = $_POST["apellido1"];
    $apellido2 = $_POST["apellido2"];
    $fecha     = $_POST["fecha"];
    $localidad = $_POST["localidad"];

    if (camposCompletos([$nombre, $apellido1, $apellido2, $fecha, $localidad])) {
        guardarAlumno("alumnos1.txt", $nombre, $apellido1, $apellido2, $fecha, $localidad);
        echo "<p>Alumno guardado en alumnos1.txt</p>";
    } else {
        echo "<p>Error: todos los campos son obligatorios</p>";
    }
}
?>
</BODY>
</HTML>