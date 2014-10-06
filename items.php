<?php
include_once("dbconnect.php");
	
function getItem($itemID)
{
	
}

function getAllItems()
{
	$conn = connect();
	$sql = "SELECT * FROM item";
	$stmt = $conn->query($sql);
	print_r( $stmt->fetchAll(PDO::FETCH_NUM) );
}

getAllItems();

?>