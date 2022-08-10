<?php
$connectionInfo = array("UID" => "brayan-server", "pwd" => "{Root-adair}", "Database" => "db_comercios", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:brayan-server.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);

    if( $conn ) {
        echo "Conexión establecida con el servidor.<br />";
   }else{
        echo "La Conexión no se pudo establecer.<br />";
   }
?>
