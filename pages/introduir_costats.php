<?php
session_start();
if (!isset($_SESSION['tipoFigura'])) {
    header("Location: index.php");
    exit();
}

$tipoFiguraActual = $_SESSION['tipoFigura'];
$tipoFiguraAnterior = isset($_SESSION['tipoFiguraAnterior']) ? $_SESSION['tipoFiguraAnterior'] : '';

// Si el tipo de figura ha cambiado, resetear las dimensiones
if ($tipoFiguraActual !== $tipoFiguraAnterior) {
    unset($_SESSION['lado1']);
    unset($_SESSION['lado2']);
    unset($_SESSION['lado3']);
}

// Guardar el tipo de figura actual como anterior para la próxima verificación
$_SESSION['tipoFiguraAnterior'] = $tipoFiguraActual;

// Recuperamos los valores de los costados de la sesión, si existen
$lado1 = isset($_SESSION['lado1']) ? $_SESSION['lado1'] : '';
$lado2 = isset($_SESSION['lado2']) ? $_SESSION['lado2'] : '';
$lado3 = isset($_SESSION['lado3']) ? $_SESSION['lado3'] : '';
?>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/custom.css">
    <title>Introduir Costats</title>
</head>
<body>
    <div class="container mt-5">
        <div class="card shadow p-4">
            <h1 class="text-center mb-4">Introduïu les dimensions per a un <?= ucfirst($tipoFiguraActual) ?></h1>
            <form id="dimensionForm" action="resultats.php" method="post">
                <?php if ($tipoFiguraActual == 'cuadrado' || $tipoFiguraActual == 'circulo'): ?>
                    <div class="mb-3">
                        <label for="lado1" class="form-label">Costat o Radi:</label>
                        <input type="number" name="lado1" id="lado1" class="form-control" value="<?= htmlspecialchars($lado1) ?>" onblur="validateField(this)">
                        <div class="text-danger" id="error-lado1"></div>
                    </div>
                <?php elseif ($tipoFiguraActual == 'rectangulo'): ?>
                    <div class="mb-3">
                        <label for="lado1" class="form-label">Costat 1:</label>
                        <input type="number" name="lado1" id="lado1" class="form-control" value="<?= htmlspecialchars($lado1) ?>" onblur="validateField(this)">
                        <div class="text-danger" id="error-lado1"></div>
                    </div>
                    <div class="mb-3">
                        <label for="lado2" class="form-label">Costat 2:</label>
                        <input type="number" name="lado2" id="lado2" class="form-control" value="<?= htmlspecialchars($lado2) ?>" onblur="validateField(this)">
                        <div class="text-danger" id="error-lado2"></div>
                    </div>
                <?php elseif ($tipoFiguraActual == 'triangulo'): ?>
                    <div class="mb-3">
                        <label for="lado1" class="form-label">Costat 1:</label>
                        <input type="number" name="lado1" id="lado1" class="form-control" value="<?= htmlspecialchars($lado1) ?>" onblur="validateField(this)">
                        <div class="text-danger" id="error-lado1"></div>
                    </div>
                    <div class="mb-3">
                        <label for="lado2" class="form-label">Costat 2:</label>
                        <input type="number" name="lado2" id="lado2" class="form-control" value="<?= htmlspecialchars($lado2) ?>" onblur="validateField(this)">
                        <div class="text-danger" id="error-lado2"></div>
                    </div>
                    <div class="mb-3">
                        <label for="lado3" class="form-label">Costat 3:</label>
                        <input type="number" name="lado3" id="lado3" class="form-control" value="<?= htmlspecialchars($lado3) ?>" onblur="validateField(this)">
                        <div class="text-danger" id="error-lado3"></div>
                    </div>
                <?php endif; ?>
                <button type="submit" id="submitBtn" class="btn btn-primary w-100">Calcular</button>
            </form>
        </div>
    </div>
    <script src="../js/validation.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
