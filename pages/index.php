<?php
session_start();
$tipoFigura = isset($_SESSION['tipoFigura']) ? $_SESSION['tipoFigura'] : '';
?>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/styles.css">
    <title>Selecció de Figura Geomètrica</title>
</head>
<body>
    <div class="background"></div>
    <div class="content-container">
        <div class="container mt-5">
            <div class="card shadow-lg p-4">
                <h1 class="text-center mb-4">Seleccioneu el tipus de figura geomètrica</h1>
                <form action="processa_figura.php" method="post">
                    <div class="mb-3">
                        <label for="tipoFigura" class="form-label">Tipus de Figura:</label>
                        <select name="tipoFigura" id="tipoFigura" class="form-select" required>
                            <option value="">-- Tria una figura --</option>
                            <option value="cuadrado" <?= $tipoFigura == 'cuadrado' ? 'selected' : '' ?>>Quadrat</option>
                            <option value="rectangulo" <?= $tipoFigura == 'rectangulo' ? 'selected' : '' ?>>Rectangle</option>
                            <option value="triangulo" <?= $tipoFigura == 'triangulo' ? 'selected' : '' ?>>Triangle</option>
                            <option value="circulo" <?= $tipoFigura == 'circulo' ? 'selected' : '' ?>>Cercle</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Enviar</button>
                </form>
            </div>
        </div>
    </div>
    <script src="../js/validation.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
