<?php

class Circulo
{
    private float $radio;

    public function __construct(float $radio)
    {
        $this->radio = $radio;
    }

    public function calcularArea(): float
    {
        return M_PI * ($this->radio * $this->radio);
    }

    public function calcularPerimetro(): float 
    {
        return 2 * M_PI * $this->radio;
    }
}

// ---------Ejemplo de uso----------
$miCirculo = new Circulo(4);

echo "Área del cìrculo: " . number_format($miCirculo->calcularArea(), 2, ".", ",") . "<br>";
echo "Perímetro del círculo: " . number_format($miCirculo->calcularPerimetro(), 2, ".", ",") . "<br>";





?>