<?php
require_once 'FiguraGeometrica.php';

class Triangulo extends FiguraGeometrica {
    protected $lado2;
    protected $lado3;

    public function __construct($lado1, $lado2, $lado3) {
        parent::__construct('Triangulo', $lado1);
        $this->lado2 = $lado2;
        $this->lado3 = $lado3;
    }

    public function calcularArea() {
        $s = ($this->lado1 + $this->lado2 + $this->lado3) / 2;
        return sqrt($s * ($s - $this->lado1) * ($s - $this->lado2) * ($s - $this->lado3));
    }

    public function calcularPerimetre() {
        return $this->lado1 + $this->lado2 + $this->lado3;
    }

    public function __toString() {
        return "Figura: Triangle, Costats: {$this->lado1}, {$this->lado2} i {$this->lado3}";
    }
}
?>
