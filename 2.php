<?php
header("Content-Type: application/json; charset=UTF-8");
$obj = json_decode($_GET["x"], false);

$first_name = $obj->first_name;
$table =  $obj->table;
//echo $obj->limit;

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_maagap";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM $table";
//sql = "SELECT * FROM $table WHERE first_name like '%$first_name%' ";

$result = $conn->query($sql);

while($r = $result->fetch_assoc()) {
     $rows['member_info'][] = $r;
}

echo json_encode($rows);

$conn->close();
?>
