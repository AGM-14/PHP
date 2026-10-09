<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bingo</title>
    <style>
        table { border-collapse: collapse; margin-bottom: 10px; }
        td { border: 1px solid #333; width: 40px; height: 40px; text-align: center; }
    </style>
</head>
<body>

<?php

//--------------------Variables generales------------------------------
$jugadores = [];      
$contadores = [];     
$ganadores = [false, false, false, false];
$lleno = false;

//-------------------- Crear los 4 jugadores con 3 cartones cada uno------------------------------
for ($j = 0; $j < 4; $j++) { //--por cada $j hace 3 $c, asi hasta 4 j para que cada uno tenga su carton--
    for ($c = 0; $c < 3; $c++) {//--aqui hace hasta 3 recorridos de $c--

        //----------Crear el cartón entero----------
        $carton = [];

        for ($columna = 0; $columna < 7; $columna++) {

            if ($columna == 6) {
                $carton[$columna] = [-1, 60, -1];//--Se crea la ultima fila manualmente--

            } else {

                $min = ($columna * 10) + 1; //-esto creael minimo de la columna (ej: 0*10= 0+1= 1)-
                $max = ($columna + 1) * 10; //-esto crea el maximo de la columna (ej: 0+1= 1*10= 11)-

                //--Entonces ahora cuando entre en el rand solo puede crear un numero entre(1 y 11)--

                if ($columna == 5) {
                    $max = 59;
                    //--Como la ultima fila es la que tiene el 60, la anterior (5) solo puede tener hasta 59--
                }

                $numerosColumna = [];

                while (count($numerosColumna) < 3) {//--Crea 3 numeros por culumna--
                    $numero = rand($min, $max);

                    if (!in_array($numero, $numerosColumna)) {  //-comprueba que los numeros creados no se repitan-
                        $numerosColumna[] = $numero; //-si no se repite se crea-
                    }
                }
                $carton[$columna] = $numerosColumna;//añade la columna creada, asi 5 veces ya que la 6 es manual
            }
        }

        //---------------------Crear los nulos para tener 6 huecos en blanco -------------------------------

        //--Se crea aleatoriamente 4 numeros "null" porque la columna 6 ya tiene 2--
        $nulls = 0;

        while ($nulls < 4) {
            $col = rand(0, 4);
            $fil = rand(0, 2);

            if ($carton[$col][$fil] !== -1) {
                $carton[$col][$fil] = -1;
                $nulls++;
            }
        }

        //--------------------------Guardar el cartón en su jugador ------------------------------

        //--Una vez creado el carton con sus numeros y sus nulos, se guarda--
        $jugadores[$j][$c] = $carton;
        $contadores[$j][$c] = 0;
    }
    //--Una vez creado el carton, o crea otro para ese jugador o pasa al siguiente jugador, hasta que esten creados 12 cartones--
}

//--------------------Sacar bolas y comprobar los cartones (hasta que haya ganador) ------------------------------
do {

    $bombo = rand(1, 60);
    echo "numero: " . $bombo . "<br>";

    for ($j = 0; $j < 4; $j++) {
        for ($c = 0; $c < 3; $c++) {

//-------Es el mismo bucle doble de arriba para recorrer los cartones de cada jugador ------

            //--Busca entre filas y columnas de cada cartón si el numero coincide y lo tacha--
            for ($fila = 0; $fila < 3; $fila++) {
                for ($columna = 0; $columna < 7; $columna++) {

                    if ($bombo == $jugadores[$j][$c][$columna][$fila]) {
                        echo "Jugador " . ($j + 1) . ", cartón " . ($c + 1) . ": " . $bombo . " tachado <br>";
                        $jugadores[$j][$c][$columna][$fila] = 0;
                        $contadores[$j][$c]++;
                    }
                }
            }

            //----------Si el cartón llega a 15, ese jugador gana ----------
            if ($contadores[$j][$c] == 15) {
                $ganadores[$j] = true;
                $lleno = true;
            }
        }
    }

} while ($lleno != true);

//--------------------Mostrar todos los cartones------------------------------
for ($j = 0; $j < 4; $j++) {
    echo "<h3>Jugador " . ($j + 1) . "</h3>";

    for ($c = 0; $c < 3; $c++) {
        print "<table>";

        for ($fila = 0; $fila < 3; $fila++) {
            print "<tr>";

            for ($columna = 0; $columna < 7; $columna++) {
                print "<td>" . $jugadores[$j][$c][$columna][$fila] . "</td>";
            }

            print "</tr>";
        }
        print "</table>";
    }
}

//--------------------Mostrar el ganador ------------------------------
for ($j = 0; $j < 4; $j++) {
    if ($ganadores[$j]) {
        print "Ha ganado el jugador " . ($j + 1) . "<br>";
    }
}
?>

</body>
</html>