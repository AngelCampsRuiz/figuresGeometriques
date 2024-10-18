<?php
class FiguraGeometrica {
    protected $tipoFigura;
    protected $lado1;

    public function __construct($tipoFigura, $lado1) {
        $this->tipoFigura = $tipoFigura;
        $this->lado1 = $lado1;
    }

    public function __destruct() {
        // Destructor
    }

    public function calcularArea() {
        return "Aquest mètode s'ha de sobreescriure.";
    }

    public function calcularPerimetre() {
        return "Aquest mètode s'ha de sobreescriure.";
    }

    public function getTipoFigura() {
        return $this->tipoFigura;
    }

    public function getLado1() {
        return $this->lado1;
    }

    public function setLado1($lado1) {
        $this->lado1 = $lado1;
    }
}
?>
