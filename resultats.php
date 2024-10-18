<?php
session_start();
require_once '../includes/autoload.php';

if (!isset($_SESSION['tipoFigura'])) {
    header("Location: index.php");
    exit();
}

$tipoFigura = $_SESSION['tipoFigura'];
$lado1 = $_POST['lado1'];
$figura = null;

if ($tipoFigura == 'cuadrado') {
    $figura = new Cuadrado($lado1);
} elseif ($tipoFigura == 'circulo') {
    $figura = new Circulo($lado1);
} elseif ($tipoFigura == 'rectangulo') {
    $lado2 = $_POST['lado2'];
    $figura = new Rectangulo($lado1, $lado2);
} elseif ($tipoFigura == 'triangulo') {
    $lado2 = $_POST['lado2'];
    $lado3 = $_POST['lado3'];
    $figura = new Triangulo($lado1, $lado2, $lado3);
}

$area = $figura->calcularArea();
$perimetre = $figura->calcularPerimetre();
?>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles.css">
    <title>Resultats</title>
</head>
<body>
    <h1>Resultats de la figura</h1>
    <p><?= $figura ?></p>
    <p>Àrea: <?= number_format($area, 2) ?> u²</p>
    <p>Perímetre: <?= number_format($perimetre, 2) ?> u</p>
    <a href="index.php">Tornar a la selecció</a>
</body>
</html>
