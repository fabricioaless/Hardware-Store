<?php

$serverName = "PCHERRARTE\SQLEXPRESS";

$connectionInfo = array(
    "Database" => "pagina",
    "UID" => "tecnicos",
    "PWD" => "123456",
    "CharacterSet" => "UTF-8"
);

$conn = sqlsrv_connect($serverName, $connectionInfo);

if ($conn) {
    echo "La conexion es exitosa.";
} else {
    echo "La conexion no se puede establecer";
    die(print_r(sqlsrv_errors(), true));
}

sys_get_temp_dir();

?>