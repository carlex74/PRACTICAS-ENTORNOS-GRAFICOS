<?php

if (isset($_COOKIE['titular'])) {
    $titularSeleccionado = $_COOKIE['titular'];
} else {
    $titularSeleccionado = 'todos';
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $titularSeleccionado = $_POST['titular'];
    setcookie('titular', $titularSeleccionado, time() + (86400 * 5));
}

function mostrarTitulares($tipo) {
    if ($tipo == 'politica' || $tipo == 'todos') {
        echo "<h2>Noticia política</h2>";
    }
    if ($tipo == 'economia' || $tipo == 'todos') {
        echo "<h2>Noticia económica</h2>";
    }
    if ($tipo == 'deportes' || $tipo == 'todos') {
        echo "<h2>Noticia deportiva</h2>";
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Bienvenido!</h3>
    
    <form method="POST">
        <label>
            <input type="radio" name="titular" value="politica" <?php if ($titularSeleccionado == 'politica') echo 'checked'; ?>> Política
        </label>
        <label>
            <input type="radio" name="titular" value="economia" <?php if ($titularSeleccionado == 'economia') echo 'checked'; ?>> Economía
        </label>
        <label>
            <input type="radio" name="titular" value="deportes" <?php if ($titularSeleccionado == 'deportes') echo 'checked'; ?>> Deportes
        </label>
        <button type="submit">Mostrar titular</button>
    </form>

    <?php 
    mostrarTitulares($titularSeleccionado); 
    ?>

    <br>
    <a href="borrarCookkie.php">Ver todos los titulares</a>
</body>
</html>