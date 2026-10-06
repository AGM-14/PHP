<?php

require_once 'Plantilla.php';

class Jugador
{
    private string $nombre;
    private array $cartones = [];
    private bool $ganador = false;

    public function __construct(string $nombre, int $numCartones = 3)
    {
        $this->nombre = $nombre;
        for ($i = 0; $i < $numCartones; $i++) {
            $this->cartones[] = new Plantilla();
        }
    }

    public function comprobarNumero(int $numero): void
    {
        foreach ($this->cartones as $carton) {
            $carton->tachar($numero);
            if ($carton->completo()) {
                $this->ganador = true;
            }
        }
    }

    public function esGanador(): bool
    {
        return $this->ganador;
    }

    public function getNombre(): string
    {
        return $this->nombre;
    }

    public function getCartones(): array
    {
        return $this->cartones;
    }
}
?>