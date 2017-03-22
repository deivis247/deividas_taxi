<?php
/*$conn=mysqli_connect('178.236.207.181','deividas','J@"C=Rw]e95+C]{U');
mysqli_select_db($conn, 'saulius_taxi');
mysqli_set_charset($conn, 'utf8');
*/
$serverName = "178.236.207.181";

// Since UID and PWD are not specified in the $connectionInfo array,
// The connection will be attempted using Windows Authentication.
$connectionInfo = array( 'Database'=>'saulius_taxi', 'UID'=>'deividas', 'PWD'=>'J@"C=Rw]e95+C]{U');
$conn = sqlsrv_connect( $serverName, $connectionInfo);

