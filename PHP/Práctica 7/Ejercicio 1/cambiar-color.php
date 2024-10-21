<?php
if(isset($_POST["estilo"])){
    $estilo = $_POST["estilo"];
    setcookie ("estilo", $estilo, time() + (60* 60 * 24 * 5));
}
header("Location: inicio.php");
exit();
?>