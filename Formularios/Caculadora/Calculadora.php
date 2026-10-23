<?php
function sumar ($a, $b){
    return $a + $b;
}

function restar ($a, $b){
    return $a - $b;
}

function multiplicar ($a, $b){
    return $a * $b;
}

function dividir ($a, $b){    
return $a / $b;
}

$op1 = $_POST['op1'];
$op2 = $_POST['op2'];
$operacion = $_POST['operacion'];

echo "<h1>CALCULADORA</h1>";

if ($operacion == 'suma'){
echo "Resultado: ", $op1, " + ", $op2, " = ", sumar($op1, $op2), "<br>";
}elseif($operacion == 'resta'){
echo "Resultado: ", $op1, " - ", $op2, " = ", restar($op1, $op2), "<br>";
}elseif($operacion == 'multiplicacion'){
echo "Resultado: ", $op1, " x ", $op2, " = ", multiplicar($op1, $op2), "<br>";
}elseif($operacion == 'division'){
    if($op2 ==0){
        echo "No se puede dividir entre 0<br>";
    }else{
        echo "Resultado: ", $op1, " / ", $op2, " = ", dividir($op1, $op2), "<br>";
    }
}
?>