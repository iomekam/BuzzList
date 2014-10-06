Server: hqwkbgz8vt.database.windows.net,1433
SQL Database: buzzDB
User Name: buzzDB

PHP Data Objects(PDO) Sample Code:
<?php

try 
{
	$conn = new PDO ("sqlsrv:server = tcp:hqwkbgz8vt.database.windows.net,1433; Database = buzzDB\", \"buzzDB\", \"ikenna@MAS\")";
	$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
}
catch ( PDOException $e ) 
{
	print( \"Error connecting to SQL Server.\" )";
		die(print_r($e));
}

$connectionInfo = array(\"UID\" => \"buzzDB@hqwkbgz8vt\", \"pwd\" => \"{your_password_here}\", \"Database\" => \"buzzDB\", \"LoginTimeout\" => 30, \"Encrypt\" => 1)";
$serverName = "tcp:hqwkbgz8vt.database.windows.net,1433\"";
$conn = sqlsrv_connect($serverName, $connectionInfo);
?>