<?php

class Plantilla
{
    private int $filas = 3;
    private int $columnas = 4;
    private array $carton = [];

    public function __construct()
    {
        $this->generar();
    }

    private function generar(): void
    {
        for ($c = 0; $c < $this->columnas; $c++) {
            $min = $c * 10 + 1;
            $max = ($c + 1) * 10;

            // números distintos dentro del rango de la columna
            $numeros = range($min, $max);
            shuffle($numeros);

            // fila que quedará vacía (1/3 de la columna)
            $hueco = rand(0, $this->filas - 1);

            for ($f = 0; $f < $this->filas; $f++) {
                $this->carton[$f][$c] = ($f === $hueco) ? null : array_pop($numeros);
            }
        }
    }

    public function getCarton(): array
    {
        return $this->carton;
    }

    public function mostrar(): void
    {
        foreach ($this->carton as $fila) {
            foreach ($fila as $n) {
                echo str_pad($n ?? '--', 4, ' ', STR_PAD_LEFT);
            }
            echo "\n";
        }
    }
}

$p = new Plantilla();
echo "<pre>";
   private array $marcados = [];

    public function tachar(int $numero): bool
    {
        foreach ($this->carton as $fila) {
            if (in_array($numero, $fila, true)) {
                $this->marcados[$numero] = true;
                return true;
            }
        }
        return false;
    }

    public function completo(): bool
    {
        foreach ($this->carton as $fila) {
            foreach ($fila as $n) {
                if ($n !== null && !isset($this->marcados[$n])) {
                    return false;
                }
            }
        }
        return true;
    }

$p->mostrar();
echo "</pre>";

?>