<!DOCTYPE html>
<head>
<title>Modificacion</title>
</head>
<body>
<?php
include_once "./coneccion.php";
//Captura datos desde el Form anterior
$id= $_POST["ID"];
$ciudad = $_POST['ciudad'];
$pais = $_POST['pais'];
$habitantes = $_POST['habitantes'];
$superficie = $_POST['superficie'];
$tienemetro= $_POST['tieneMetro'];
//Arma la instrucción SQL y luego la ejecuta
$vSql = "UPDATE Capitales set ciudad='$ciudad', pais='$pais', habitantes='$habitantes', superficie='$superficie' , tieneMetro='$tienemetro' where
id='$id'";
mysqli_query($link,$vSql) or die (mysqli_error($link));
echo("Ciudad fue modificadaa<br>");
echo("<A href= 'Inicio.php'>Volver al Menu del ABM</A>");
// Cerrar la conexion
mysqli_close($link);
?>
</body>
</html>