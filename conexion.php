<?php
$serverName = "somail.database.windows.net"; //serverName\instanceName, portNumber (por defecto es 1433)
$connectionInfo = array( "Database"=>"SOMAIL", "UID"=>"rootIts", "PWD"=>"Somail2020its");
$conn = sqlsrv_connect( $serverName, $connectionInfo);

if( $conn ) {
     echo "Conexión establecida.<br />";
}else{
     echo "Conexión no se pudo establecer.<br />";
     die( print_r( sqlsrv_errors(), true));
}
?>
