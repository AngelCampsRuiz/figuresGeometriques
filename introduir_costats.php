<?php
session_start();
if (!isset($_SESSION['tipoFigura'])) {
    header("Location: index.php");
    exit();
}
$tipoFigura = $_SESSION['tipoFigura'];
?>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles.css">
    <title>Introduir Costats</title>
</head>
<body>
    <h1>Introduïu les dimensions per a un <?= ucfirst($tipoFigura) ?></h1>
    <form action="resultats.php" method="post">
        <?php if ($tipoFigura == 'cuadrado' || $tipoFigura == 'circulo'): ?>
            <label for="lado1">Costat o Radi:</label>
            <input type="number" name="lado1" id="lado1" required>
        <?php elseif ($tipoFigura == 'rectangulo'): ?>
            <label for="lado1">Costat 1:</label>
            <input type="number" name="lado1" id="lado1" required><br>
            <label for="lado2">Costat 2:</label>
            <input type="number" name="lado2" id="lado2" required>
        <?php elseif ($tipoFigura == 'triangulo'): ?>
            <label for="lado1">Costat 1:</label>
            <input type="number" name="lado1" id="lado1" required><br>
            <label for="lado2">Costat 2:</label>
            <input type="number" name="lado2" id="lado2" required><br>
            <label for="lado3">Costat 3:</label>
            <input type="number" name="lado3" id="lado3" required>
        <?php endif; ?>
        <br><br>
        <button type="submit">Calcular</button>
    </form>
    <script src="../js/validation.js"></script>
</body>
</html>
