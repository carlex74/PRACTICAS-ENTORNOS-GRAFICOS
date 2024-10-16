<!DOCTYPE html>
<html>
<head>
<title>Alta Usuario</title>
</head>
<body>
<?php
include_once "../coneccion.php";
//Captura datos desde el Form anterior
$id= $_POST["ID"];
$ciudad = $_POST['ciudad'];
$pais = $_POST['pais'];
$habitantes = $_POST['habitantes'];
$superficie = $_POST['superficie'];
$tienemetro= $_POST['tieneMetro'];
//Arma la instrucción SQL y luego la ejecuta
$vSql = "SELECT id FROM Ciudades WHERE id='$id'";
$vResultado = mysqli_query($link, $vSql) or die (mysqli_error($link));;
$vCantCiudades = mysqli_fetch_assoc($vResultado);
//$vCantUsuarios = mysqli_result($vResultado, 0);
if ($vCantCiudades ['id']!=0){
 echo ("El Usuario ya Existe<br>");
 echo ("<a href='../Inicio.php'>VOLVER AL ABM</a>");
}
else {
$vSql = "INSERT INTO Ciudades (ciudad, pais, habitantes, superficie, tieneMetro)
values ('$ciudad','$pais', '$habitantes', '$superficie', '$tieneMetro')";
 mysqli_query($link, $vSql) or die (mysqli_error($link));
 echo("Ciudad registrada<br>");
 echo ("<a href='../Inicio.php'>VOLVER AL MENU</a>");
// Liberar conjunto de resultados
mysqli_free_result($vResultado);
}
// Cerrar la conexion
mysqli_close($link);
?>

</body>

</html>
