<body>
<html>
<head>
<title> Listados completo con PAGINACIÓN </title>
</head>
<body>
<?php
include_once "../coneccion.php";
$Cant_por_Pag = 4;
$pagina = isset ( $_GET['pagina']) ? $_GET['pagina'] : null ;
if (!$pagina) {
$inicio = 0;
$pagina=1;
}
else {
$inicio = ($pagina - 1) * $Cant_por_Pag;
}// total de páginas
$vSql = "SELECT * FROM Ciudades";
$vResultado = mysqli_query($link, $vSql);
$total_registros=mysqli_num_rows($vResultado);
$total_paginas = ceil($total_registros/ $Cant_por_Pag);
echo "Numero de registros encontrados: " . $total_registros . "<br>";
echo "Se muestran paginas de " . $Cant_por_Pag . " registros cada una<br>";
echo "Mostrando la pagina " . $pagina . " de " . $total_paginas . "<p>";
$vSql = "SELECT * FROM doc_utn"." limit " . $inicio . "," . $Cant_por_Pag;
$vResultado = mysqli_query($link, $vSql);
$total_registros=mysqli_num_rows($vResultado);
?>
<table border=1>
<tr>
<td><b>ID</b></td>
<td><b>Ciudad</b></td>
<td><b>Pais</b></td>
<td><b>Habitantes</b></td>
<td><b>Superficie</b></td>
<td><b>tieneMetro</b></td
</tr>
<?php
while ($fila = mysqli_fetch_array($vResultado))
{
?>
<tr>
 <td><?php echo ($fila['id']); ?></td>
 <td><?php echo ($fila['ciudad']); ?></td>
 <td><?php echo ($fila['pais']); ?></td>
 <td><?php echo ($fila['habitantes']); ?></td>
 <td><?php echo ($fila['superficie']); ?></td>
 <td><?php echo ($fila['tieneMetro']); ?></td>
</tr>
<tr>
 <td colspan="5">

<?php
}
// Liberar conjunto de resultados
mysqli_free_result($vResultado);
// Cerrar la conexion
mysqli_close($link);
?>
 </td>
</tr>
</table>
<?php
if ($total_paginas > 1){
for ($i=1;$i<=$total_paginas;$i++){
if ($pagina == $i)
//si muestro el índice de la página actual, no coloco enlace
echo $pagina . " ";
else
//si la página no es la actual, coloco el enlace para ir a esa página
echo "<a href='Listado_pag.php?pagina=" . $i ."'>" . $i . "</a> ";}}?>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p align="center"><a href="../Inicio.php">Volver al men&uacute; del ABM</a></p>
</body>
</html>