<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sesión iniciada</title>
</head>

<body>
    <?php if (isset($_SESSION['username']) || isset($_SESSION['password'])): ?>
        <h1>Sesión iniciada</h1>
        <p>¡Bienvenido, <?php echo $_SESSION['username']; ?>!</p>
        <p>Contraseña: <?php echo $_SESSION['password']; ?></p>
    <?php else: ?>
        <h1>No has iniciado sesión</h1>
        <p>Por favor, inicia sesión <a href="inicio.php">aquí</a>.</p>
    <?php endif; ?>
    <a href="cerrarSesion.php">Cerrar sesión</a>

    </body>
</html>
