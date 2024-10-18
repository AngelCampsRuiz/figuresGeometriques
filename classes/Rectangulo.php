<?php
require_once 'FiguraGeometrica.php';

class Rectangulo extends FiguraGeometrica {
    protected $lado2;

    public function __construct($lado1, $lado2) {
        parent::__construct('Rectangulo', $lado1);
        $this->lado2 = $lado2;
    }

    public function calcularArea() {
        return $this->lado1 * $this->lado2;
    }

    public function calcularPerimetre() {
        return 2 * ($this->lado1 + $this->lado2);
    }

    public function __toString() {
        return "Figura: Rectangle, Costats: {$this->lado1} i {$this->lado2}";
    }
}
?>
