<?php
session_start();
$tipoFigura = isset($_SESSION['tipoFigura']) ? $_SESSION['tipoFigura'] : '';
?>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles.css">
    <title>Selecció de Figura Geomètrica</title>
</head>
<body>
    <h1>Seleccioneu el tipus de figura geomètrica</h1>
    <form action="processa_figura.php" method="post">
        <label for="tipoFigura">Tipus de Figura:</label>
        <select name="tipoFigura" id="tipoFigura" required>
            <option value="">-- Tria una figura --</option>
            <option value="cuadrado" <?= $tipoFigura == 'cuadrado' ? 'selected' : '' ?>>Quadrat</option>
            <option value="rectangulo" <?= $tipoFigura == 'rectangulo' ? 'selected' : '' ?>>Rectangle</option>
            <option value="triangulo" <?= $tipoFigura == 'triangulo' ? 'selected' : '' ?>>Triangle</option>
            <option value="circulo" <?= $tipoFigura == 'circulo' ? 'selected' : '' ?>>Cercle</option>
        </select>
        <br><br>
        <button type="submit">Enviar</button>
    </form>
    <script src="../js/validation.js"></script>
</body>
</html>
