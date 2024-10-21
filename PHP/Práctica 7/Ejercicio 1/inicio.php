<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    if (isset($estilo)){
        $estilo = htmlspecialchars($_COOKIE["estilo"]);
        echo '<link rel="STYLESHEET" type="text/css" href="' . $estilo . '.css">';
    }
    ?>
</head>
<body>
    <form action="cambiar-color.php" method="post">
        Seleccione el color de fondo que quiera:
        <br>
        <select name="estilo">
        <option value="Verde">Verde</option>
        <option value="Rosa">Rosa</option>
        <option value="Negro">Negro</option>
        </select>
        <input type="submit" value="Cambiar color">
        </form>
</body>
</html>