<?php
require 'Operaciones.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    <h1>CALCUALDORA</h1>

    <form name='Calculadora' action="Calculadora.php" method="post">

        Primer valor:<br>
        <input type="number" name="op1" value=" " size=10><br>

        Segundo valor:<br>
        <input type="number" name="op2" value=" " size=10><br>

        Selecciona operacion:<br>
        <input type="radio" checked name="operacion" value="suma">Suma<br>
        <input type="radio" name="operacion" value="resta">Resta<br>
        <input type="radio" name="operacion" value="multiplicacion">Multiplicacion<br>
        <input type="radio" name="operacion" value="division">Division<br>
        
        <input type="submit" value="Enviar">
        <input type="reset" value="Borrar">
    </form>

    <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            $op1 = limpiar($_POST['op1']);
            $op2 = limpiar($_POST['op2']);
            $operacion = limpiar($_POST['operacion']);

            if ($operacion == 'suma'){
                echo "Resultado: ", $op1, " + ", $op2, " = ", sumar($op1, $op2), "<br>";
            } elseif($operacion == 'resta'){
                echo "Resultado: ", $op1, " - ", $op2, " = ", restar($op1, $op2), "<br>";
            } elseif($operacion == 'multiplicacion'){
                echo "Resultado: ", $op1, " x ", $op2, " = ", multiplicar($op1, $op2), "<br>";
            } elseif($operacion == 'division'){
                if($op2 ==0){
                    echo "No se puede dividir entre 0<br>";
            } else {
                echo "Resultado: ", $op1, " / ", $op2, " = ", dividir($op1, $op2), "<br>";
        }
    }
}
    ?>
</body>
</html>