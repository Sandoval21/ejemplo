<?php

require_once "conexion.php";

$query = "SELECT * FROM ciclistas";

$result = pg_query($conn, $query);


// Verificar si hay errores en la consulta

if (!$result) {

    echo "Error al ejecutar la consulta: " . pg_last_error();

    exit;

}
// Mostrar los datos en una tabla HTML

echo "<table border='1'>";

echo "<tr><th>Codigo</th><th>Nombre</th><th>Fecha</th><th>Codigo Nacion</th></tr>";


while ($row = pg_fetch_assoc($result)) {

    echo "<tr>";

    echo "<td>" . $row['cod_cic'] . "</td>";

    echo "<td>" . $row['nomb_cic'] . "</td>";

    echo "<td>" . $row['fecha'] . "</td>";

    echo "<td>" . $row['cod_nac'] . "</td>";


    echo "</tr>";

}


echo "</table>";

?>

