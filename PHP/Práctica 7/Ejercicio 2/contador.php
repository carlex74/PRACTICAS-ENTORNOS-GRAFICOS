<?php
// Verificamos si la cookie "contador" ya existe.
if (isset($_COOKIE["contador"])) {
    // Si la cookie existe, incrementamos su valor.
    $contador = $_COOKIE["contador"] + 1;
    // Actualizamos la cookie con el nuevo valor del contador.
    setcookie("contador", $contador, time() + (60 * 60 * 24 * 30)); // La cookie durará 30 días
    // Mostramos el número de visitas.
    echo "Bienvenido de nuevo. Has visitado esta página $contador veces.";
} else {
    // Si la cookie no existe, es la primera vez que el usuario accede a la página.
    $contador = 1;
    // Creamos la cookie con un valor inicial de 1.
    setcookie("contador", $contador, time() + (60 * 60 * 24 * 30)); // La cookie durará 30 días
    // Mostramos el mensaje de bienvenida para la primera visita.
    echo "Bienvenido a nuestra página por primera vez.";
}
?>