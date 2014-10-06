<?php
include_once("dbconnect.php");

if(isset($_POST["price"] && $_POST["description"] && $_POST["user_id"]))
{
	echo "YAS";
}
	
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