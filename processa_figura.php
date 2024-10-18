<?php
session_start();

if (isset($_POST['tipoFigura'])) {
    $_SESSION['tipoFigura'] = $_POST['tipoFigura'];
    $tipoFigura = $_POST['tipoFigura'];

    // Redirigeix a la pàgina segons el tipus de figura
    header("Location: introduir_costats.php");
    exit();
}
?>
