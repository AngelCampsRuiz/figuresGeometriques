<?php
require_once 'FiguraGeometrica.php';

class Cuadrado extends FiguraGeometrica {
    public function __construct($lado1) {
        parent::__construct('Cuadrado', $lado1);
    }

    public function calcularArea() {
        return $this->lado1 * $this->lado1;
    }

    public function calcularPerimetre() {
        return 4 * $this->lado1;
    }

    public function __toString() {
        return "Figura: Quadrat, Costat: {$this->lado1}";
    }
}
?>
