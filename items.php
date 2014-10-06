<?php
include_once("dbconnect.php");
include_once("response.php");

if(!empty($_POST))
{
	$name = $_POST["name"];
	$price = $_POST["price"];
	$userID = $_POST["user_id"];

	addItem($name, $price, "", $user_id, "");
}

if(!empty($_GET))
{
	$id = $_GET["item_id"];
	getItem($id);
}
	
function getItem($itemID)
{
	$conn = connect();
	$sql = "SELECT * FROM item WHERE item_id = $itemID";
	$stmt = $conn->query($sql);
	sendResponse(200, json_encode($stmt->fetchAll(PDO::FETCH_ASSOC)));
}

function getAllItems()
{
	$conn = connect();
	$sql = "SELECT * FROM item";
	$stmt = $conn->query($sql);
	sendResponse(200, json_encode($stmt->fetchAll(PDO::FETCH_ASSOC)));
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

//getItem(2);
getAllItems();

?>