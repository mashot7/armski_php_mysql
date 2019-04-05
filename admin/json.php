<?php
require_once '../src/include/connection.php';

$sql = "SELECT * FROM tour_details";
$result = $conn->query($sql) or die("Error " . $conn->error());
$myArray = array();
while ($row = $result->fetch_assoc()) {
	$myArray[] = $row;
}
$conn->close();

header('Content-Type: application/json');
$json = json_encode($myArray);
echo $json;
 