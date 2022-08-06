<?php
    $serverName = "brayan-server.database.windows.net"; // update me
    $connectionInfo = array(
        "Database" => "db_comercios", // update me
        "Uid" => "brayan-server", // update me
        "PWD" => "Root-adair" // update me
    );
    $conn = sqlsrv_connect($serverName, $connectionInfo);
   
    if ($conn){
        echo ("conexion buena");
    }else{
        echo("no se conecto padrino");
    }
?>