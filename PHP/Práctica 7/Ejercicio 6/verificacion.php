<?php
    session_start();
    include_once 'funciones.php';

    if (isset($_POST['email'])) {
        $email = $_POST['email'] ;

        $resultado = consultaSQL("SELECT * FROM alumnos WHERE mail = '$email'");
        if ($row = mysqli_fetch_assoc($resultado)) {

            $_SESSION['nombre'] = $row['nombre'];
            header("Location: sesionIniciada.php");
       
         } else {
            header("Location: error.php");
            }
            
    } else { ?>
        <h1>No has iniciado sesión</h1>
        <p>Por favor, inicia sesión <a href="formulario.php">aquí</a>.</p>
    <?php } ?>
