<?php 
include_once '../conect.php';

$array = "SELECT * FROM [dbo].[negocio]";
$stmt = sqlsrv_query( $conn, $array );
if( $stmt === false) {
    die( print_r( sqlsrv_errors(), true) );
}
while( $array = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
      echo $json = json_encode($array);
      $bytes = file_put_contents("myfile.json", $json); 
         echo "Los Bytes creados son $bytes";
}
sqlsrv_free_stmt( $stmt);
// // data strored in array
// $array = "SELECT * FROM [dbo].[negocio] ORDER BY 1 FOR JSON AUTO, INCLUDE_NULL_VALUES";

// // encode array to json
// $json = json_encode($array);
// $bytes = file_put_contents("myfile.json", $json); 
// echo "Los Bytes creados son $bytes.";

?>


