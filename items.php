<?php
include_once("dbconnect.php")

$db = new DBConnect();

if(isset($_GET['item_id'])
{
	
}
else if(is_array($_GET))
{
	
}
	
function getItem($itemID)
{
	
}

function getAllItems()
{
	$conn = db->connect();
	$sql = "SELECT * FROM item";
	$stmt = $con->query($sql);
	return $stmt->fetchAll(PDO::FETCH_NUM);
}

print_r(getAllItems());
?>