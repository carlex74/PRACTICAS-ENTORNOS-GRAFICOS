<?php
#Incluir la modificaciuon del  php
include_once "./coneccion.php";

$ID_CIUDAD=$_POST["ID"];

$quey="SELECT * FROM CIUDADES WHERE ID=='$ID_CIUDAD'";

$resul=mysqli_query($link,$query) or die (mysqli_error($link));

$fila = mysqli_fetch_array($vResultado);

if(mysqli_num_rows($resul) == 0) {
    echo ("Ciudad Inexistente...!!! <br>");
   }
   else{

    ?>

    <form method="pos" action="mod.php">
        <label>ID: <input type="text" name="ID" required></label><br>

        <label>Ciudad: <input type="text" name="ciudad" value="<?php echo($fila['ciudad']); ?>"></label><br>
        <label>País: <input type="text" name="pais" value="<?php echo($fila['pais']); ?>"></label><br>
        <label>Habitantes: <input type="number" name="habitantes" value="<?php echo($fila['habitantes']); ?>"></label><br>
        <label>Superficie: <input type="number" name="superficie" step="0.01" value="<?php echo($fila['superficie']); ?>"></label><br>
        <label>Tiene Metro: <input type="checkbox" name="tieneMetro" value="<?php echo($fila['tieneMetro']); ?>"></label><br>

        <input type="submit" value="Modificar"></input>
    </form>



<?php
    

   }
?>



