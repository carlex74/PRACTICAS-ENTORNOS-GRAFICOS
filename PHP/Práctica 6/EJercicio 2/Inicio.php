<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Gestión de Ciudades</h1>
    <form action="" method="post">
        <button type="submit" name="action" value="alta">Alta</button>
        <button type="submit" name="action" value="baja">Baja</button>
        <button type="submit" name="action" value="modificacion">Modificación</button><br>
        <button type="submit" name="action" value="listado">Listado sin Paginación</button><br>
        <button type="submit" name="action" value="listado_paginado">Listado con Paginación</button>
    </form>

    <?php

    if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action'])){
        switch ($_POST['action']) {
            case 'alta':
                include 'Alta.php';
                break;
            case 'baja':
                include 'Baja.php';
                break;
            case 'modificacion':
                include 'Modificacion.php';
                break;
            case 'listado':
                include 'Listado.php';
                break;
            case 'listado_paginado':
                include 'Listado_paginado.php';
                break;
        };
    };
    ?>

</body>
</html>