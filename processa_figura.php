<?php
session_start();

if (isset($_POST['tipoFigura'])) {
    $_SESSION['tipoFigura'] = $_POST['tipoFigura'];
    header("Location: introduir_costats.php");
    exit();
}
?>
