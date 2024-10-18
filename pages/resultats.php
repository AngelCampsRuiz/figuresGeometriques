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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/custom.css">
    <title>Resultats</title>
</head>
<body>
    <div class="container mt-5">
        <div class="card shadow p-4">
            <h1 class="text-center mb-4">Resultats de la figura</h1>
            <p class="lead"><?= $figura ?></p>
            <table class="table table-bordered">
                <tr>
                    <th>Àrea</th>
                    <td><?= number_format($area, 2) ?> u²</td>
                </tr>
                <tr>
                    <th>Perímetre</th>
                    <td><?= number_format($perimetre, 2) ?> u</td>
                </tr>
            </table>
            <a href="index.php" class="btn btn-secondary w-100">Tornar a la selecció</a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
