<?php

// Configuración de la base de datos

$db_host = 'localhost';

$db_username = 'postgres';

$db_password = 'Sandovalsegura1';

$db_name = 'ciclismo';


// Conectar a la base de datos

$conn = pg_connect("host=$db_host port=5432 dbname=$db_name user=$db_username password=$db_password");


// Verificar la conexión

if (!$conn) {

    echo "Error al conectar a la base de datos: " . pg_last_error();

    exit;

}

?>