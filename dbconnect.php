<?php
class DBConnect
{
	private $conn;
	
	function __construct()
	{
		$server = "hqwkbgz8vt.database.windows.net";
		$user = "buzzDB";
		$pwd = "ikenna@MAS";
		$db = "buzzDB";
		try
		{
			$this->conn = new PDO( "sqlsrv:server=$server;Database=$db", $user, $pwd);
			$this->conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
		}
		catch(Exception $e){
			die(print_r($e));
		}
	}
	
	function connect()
	{
		return $this->conn;
	}
	
	function __destruct()
	{
		
	}
}
?>