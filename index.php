<?php

function connect()
{
	// DB connection info
	$host = "tcp:hqwkbgz8vt.database.windows.net";
	$user = "buzzDB";
	$pwd = "ikenna@MAS";
	$db = "buzzDB";
	try{
		$conn = new PDO( "mysql:host=$host;dbname=$db", $user, $pwd);
		$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
	}
	catch(Exception $e){
		die(print_r($e));
	}
	return $conn;
}


$con = connect()
?>