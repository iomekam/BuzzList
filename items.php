<?php
include_once("dbconnect.php");

$db = new DBConnect();
	
function getItem($itemID)
{
	
}

function getAllItems()
{
	$conn = $db->connect();
	$sql = "SELECT * FROM item";
	$stmt = $con->query($sql);
	return $stmt->fetchAll(PDO::FETCH_NUM);
}
?>