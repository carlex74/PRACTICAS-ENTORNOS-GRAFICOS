<html>
<head>
<title>Baja</title>
</head>
<body>
<?php
include_once "../coneccion.php";
$id= $_POST["ID"];
$vSql = "SELECT * FROM Ciudades WHERE id='$id' ";
$vResultado = mysqli_query($link, $vSql);
if(mysqli_num_rows($vResultado) == 0)
 {
 echo ("Ciudad inexistente <br>");
 echo ("<A href='formBaja.html'>Continuar</A>");
}
else{
//Arma la instrucción SQL y luego la ejecuta
$vSql= "DELETE FROM Ciudades WHERE id = '$id' ";
mysqli_query($link, $vSql);
 echo("Ciudad fue borrada<br>");
 echo("<A href='../Inicio.php'>Volver al Menu del ABM</A>");
}
// Liberar conjunto de resultados
mysqli_free_result($vResultado);
// Cerrar la conexion
mysqli_close($link);
?>
</body>
</html>