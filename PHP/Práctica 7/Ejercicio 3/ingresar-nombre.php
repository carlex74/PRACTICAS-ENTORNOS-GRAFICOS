<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
    if (isset($_POST["username"])) {
        $username = htmlspecialchars($_POST["username"]);
        setcookie("username", $username, time() + (30 * 24 * 60 * 60));
        header("Location: ingresar-nombre.php");
        exit();
    }

    // Verificar si la cookie "username" está configurada
    if (isset($_COOKIE["username"])) {
        $lastUsername = htmlspecialchars($_COOKIE["username"]);
        echo "<p>Último nombre de usuario ingresado: <strong>$lastUsername</strong></p>";
    }
    ?>

    <h3>Ingrese su usuario</h3>

    <form action="ingresar-nombre.php" method="post">
        <label for="username">Nombre de usuario:</label>
        <br>
        <input type="text" name="username" id="username" required>
        <input type="submit" value="Guardar">
        </form>
</body>
</html>