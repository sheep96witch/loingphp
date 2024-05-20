<?php
session_start();

if (!isset($_SESSION['login'])) {
    header("Location: index.php");
    exit();
}

echo "<h1>Bienvenido, " . htmlspecialchars($_SESSION['login']) . "!</h1>";
echo '<a href="logout.php">Cerrar Sesión</a>';
?>
