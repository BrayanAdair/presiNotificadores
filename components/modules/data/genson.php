<?php
unlink('negocios.json');

// include_once '../conect.php';
$connectionInfo = array("Database"=>"db_comercios");
$serverName = "LAPTOP-PRFJG3N5\BRAYANSERVER";
$conn = sqlsrv_connect($serverName, $connectionInfo);

$sql = "SELECT * FROM negocio FOR JSON AUTO, INCLUDE_NULL_VALUES";
$stmt = sqlsrv_query($conn, $sql);

if( $stmt === false) {
    die( print_r( sqlsrv_errors(), true) );
}
while( $array = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
      echo $json = ($array);
      $bytes = file_put_contents("negocios.json", $json,FILE_APPEND | LOCK_EX ); 
         echo "      Los Bytes creados son $bytes";
}
sqlsrv_free_stmt( $stmt);

header('Location: /HACK4TID501/table.html');
?>