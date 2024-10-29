<?php

session_start();
if (isset($_SESSION['nombre'])) {
    echo "<h1>Bienvenido, " . htmlspecialchars($_SESSION['nombre']) . "!</h1>";

} else { ?>
    <h1>No has iniciado sesión</h1>
    <p>Por favor, inicia sesión <a href="inicio.php">aquí</a>.</p>
<?php } ?>
