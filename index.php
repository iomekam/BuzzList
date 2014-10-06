<?php

function connect()
{
	// DB connection info
	$server = "hqwkbgz8vt.database.windows.net";
	$user = "buzzDB";
	$pwd = "ikenna@MAS";
	$db = "buzzDB";
	try{
		$conn = new PDO( "sqlsrv:server=$server;Database=$db", $user, $pwd);
		$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
	}
	catch(Exception $e){
		die(print_r($e));
	}
	return $conn;
}

$con = connect()
print $con
?>