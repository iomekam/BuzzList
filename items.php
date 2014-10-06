<?php
include_once("dbconnect.php");
include_once("response.php");

$a = array("d" => 1);

if(!empty($_POST))
{
	echo "finally";
}
else
{
	echo "...";
}
	
function getItem($itemID)
{
	$conn = connect();
	$sql = "SELECT * FROM item WHERE item_id = $itemID";
	$stmt = $conn->query($sql);
	sendResponse(200, json_encode($stmt->fetchAll()));
}

function getAllItems()
{
	$conn = connect();
	$sql = "SELECT * FROM item";
	$stmt = $conn->query($sql);
	sendResponse(200, json_encode($stmt->fetchAll()));
}

function addItem($name, $price, $description, $user_id, $image_url)
{
	$conn = connect();
	$sql = "INSERT INTO item (name, price, description, user_id, image) VALUES (?, ?, ?, ?, ?)";
	$stmt = $conn->prepare($sql);
	
	$stmt->bindValue(1, $name);
	$stmt->bindValue(2, $price);
	$stmt->bindValue(3, $description);
	$stmt->bindValue(4, $user_id);
	$stmt->bindValue(5, $image_url);
	
	$stmt->execute();
}

getItem(2);
//getAllItems();

?>