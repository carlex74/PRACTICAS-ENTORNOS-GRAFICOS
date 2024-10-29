<?php

function consultaSQL($consulta){
    $link = mysqli_connect("localhost", "root", "123456", "base2");
    $resultado = mysqli_query($link, $consulta);
    mysqli_close($link);
    return $resultado;
}